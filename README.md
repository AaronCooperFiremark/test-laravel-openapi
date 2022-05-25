# Laravel OpenAPI test app

This is a basic Laravel app that implements OpenAPI spec generation via the
[laravel-openapi][laravel-openapi] library.

This app was bootstrapped using [Sail](https://laravel.com/docs/9.x/sail), which should be compatible with
Mac, Linux and WSL2 on Windows. Commands below reference `sail`, which should be expanded to:
`./vendor/bin/sail` when you run them.

## Generating OpenAPI spec JSON

1. Start the app: `sail up`
2. In another terminal window, print the OpenAPI spec: `sail artisan openapi:generate`
3. Write the spec to a file with: `sail artisan openapi:generate > openapi.json`

## How it works

This section provides a basic overview of how the OpenAPI spec is generated.

The documentation at [laravel-openapi][laravel-openapi] is a good resource to learn more about how to properly
annotate routes for OpenAPI generation.

### Integration with Laravel (Provider)

### Controller & Method attributes

### Requests, Responses & Schema

[laravel-openapi]: https://vyuldashev.github.io/laravel-openapi/
