# Laravel-serializer
## About
The `laravel-serializer` package allows you to serialize objects is very simply

## Installation
Require the `kepka42/laravel-serializer` package in your composer.json and update your dependencies:
```sh
composer require kepka42/laravel-serializer
```
Also you need publish the config using command:
```sh
php artisan vendor:publish --provider="kepka42\LaravelSerializer\SerializerServiceProvider"
```

## Usage
For create serializer you can you command:
```sh
php artisan make:serializer NameOfSerializer
```
This command will create class of serializer in `Serializer` folder which is located in `app` directory of your application:

## License

Released under the MIT License, see [LICENSE](LICENSE).