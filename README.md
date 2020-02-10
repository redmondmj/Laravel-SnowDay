# Laravel-SnowDay
Laravel Demo App

TBD


## From scratch
* install Node
 [Node JS Download](https://nodejs.org/en/download/)
* install Composer
 [Composer Download](https://getcomposer.org/download/)
* Update Composer (optional)
```composer self-update```
```composer upgrade```
* Test PHP
```php -v```
* Verify PATH (if needed)
PS: ```echo $env:Path```
PS Append: ```$env:Path += ";SomeRandomPath"```
Bash: ```echo $PATH```
* Laravel
```composer global require laravel/installer```
* Project
```laravel new ProjectName```

## if you build it...
* All the JS
 ```npm install``
 ```npm run dev```
* Add auth
 ```php artisan ui vue --auth```
* Run the server
```php artisan serve```

## Explore
Config:
```.env```
Router:
```\routes\web.php```
Views:
```\resources\views\welcome.blade.php```
Controllers:
```\app\Http\Controllers\```
Model - Database:
```\database\migrations```

## Add Auth
```php artisan ui vue --auth```