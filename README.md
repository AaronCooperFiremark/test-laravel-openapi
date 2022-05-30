# Laravel OpenAPI test app

This is a basic Laravel app that implements OpenAPI 3.0 specification generation using the
[laravel-openapi][laravel-openapi] library. It was built as a POC to test OpenAPI spec generation from
code, and to perform a test integration with Stoplight.io to automatically generate API documentation.

The test Stoplight instance that reads from this repo is here:
[https://aaronco.stoplight.io/docs/test-laravel-openapi](https://aaronco.stoplight.io/docs/test-laravel-openapi).

## Generating OpenAPI spec JSON

This app was bootstrapped using [Sail](https://laravel.com/docs/9.x/sail).

1. Start the app: `./vendor/bin/sail up`
2. In another terminal window, print the OpenAPI spec: `./vendor/bin/sail artisan openapi:generate`
3. Write the OpenAPI spec to a JSON file with: `./vendor/bin/sail artisan openapi:generate > openapi.json`

## Generating OpenAPI in production

Ideally, the OpenAPI spec should not be checked in to the project; `openapi.json` has been left checked in
for testing purposes only. The spec file should be generated at build time in a CI/CD environment to ensure
the published spec file is always the latest.

## How it works

Read how this works inside the `docs` directory [index.md](./docs/index.md).

[laravel-openapi]: https://vyuldashev.github.io/laravel-openapi/
