# Laravel OpenAPI test app

This is a basic Laravel app that implements OpenAPI spec generation via the
[laravel-openapi][laravel-openapi] library.

This app was bootstrapped using [Sail](https://laravel.com/docs/9.x/sail), which should be compatible with
Mac, Linux and WSL2 on Windows. Commands below reference `sail`, which should be expanded to:
`./vendor/bin/sail` when you run them.

## Generating OpenAPI spec JSON

1. Start the app: `sail up`
2. In another terminal window, print the OpenAPI spec: `sail artisan openapi:generate`
3. Write the spec to a JSON file with: `sail artisan openapi:generate > openapi.json`

## How it works

> The documentation at [laravel-openapi][laravel-openapi] is a good resource to learn more about how to properly
> annotate routes for OpenAPI generation.

This section provides a basic overview of how the OpenAPI spec is generated. Some additional code is required
for the openapi provider to work, in the form of some PHP Attributes and utility classes used only for OpenAPI
spec generation.

### Integration with Laravel (Provider)

The openapi provider is included inside `config/app.php`:

```php
'providers' => [
    ...
    Vyuldashev\LaravelOpenApi\OpenApiServiceProvider::class,
    ...
]
```

### Controller & Method attributes

An example controller was added here: `app/Http/Controllers/NotesController.php`.

It includes the `#[OpenApi\PathItem]` attribute on the class. This is required for the openapi provider
to recognise the class as a route controller.

The class also has attributes attached to a route handler method:

```php
#[OpenApi\Operation]
#[OpenApi\RequestBody(factory: NoteRequestBody::class)]
#[OpenApi\Response(factory: NoteResponse::class, statusCode: 200)]
public function index(Request $request): string
{
    ...
}
```

These method attributes tell the openapi provider how to decorate the endpoint in the OpenAPI spec output.
This includes aspects like method, request body, response body and status codes. Multiple response attributes
can be attached to a single method, which is useful for annotating success and failure responses.

### Requests, Responses & Schema

As mentioned above, method attributes are used to annotate endpoints for OpenAPI generation. The request
and response attributes rely on the `factory` property, which defines the metadata and payload structures.
`factory` can point to a request/response class. Schema are reusable objects that may be referenced by
requests and responses in OpenAPI specs, for example multiple endpoints might return the same object.

The openapi package includes useful CLI commands to generate request, response and schema classes:

```shell
sail artisan openapi:make-requestbody NoteRequest
sail artisan openapi:make-response NoteResponse
sail artisan openapi:make-schema Note
```

A few examples were generated and are viewable inside: `app/OpenApi` and its child directories.

[laravel-openapi]: https://vyuldashev.github.io/laravel-openapi/
