#### Docker with laravel, Nginx, Mysql
1. install docker-compose
2. command `docker-compose up -d`

### include
1. php composer, xdebug, nodejs, npm
2. laravel/ui
    1. `php artisan ui bootstrap`
    2. `php artisan ui vue`
3. facade/ignition (https://github.com/facade/ignition)
    1. `composer require facade/ignition`
    2. `php artisan vendor:publish --provider="Facade\Ignition\IgnitionServiceProvider" --tag="ignition-config"`

       
  
