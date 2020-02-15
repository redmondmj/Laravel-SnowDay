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
* Try Artisan:
 ```php artisan inspire```
* All the JS
 ```npm install``
 ```npm run dev```
* Run the server
```php artisan serve```

## Explore
Config:
```.env```
Router:
```\routes\web.php```
Model:
```\app\User.php```
Views:
```\resources\views\welcome.blade.php```
Controllers:
```\app\Http\Controllers\```
Database:
```\database\migrations```

## Add Auth
```composer require laravel/ui```
```php artisan ui vue --auth```

## Building this Demo App
### Edit Registration form as needed, i.e.:
```\resources\views\auth\register.blade.php```
```\app\Http\Controllers\Auth\RegisterController.php```
```\app\User.php```
```\database\migrations\2014_10_12_000000_create_users_table.php```
### Add the voting View & Controller
```php artisan make:controller VoteController```
```php artisan make:model Votes```
#### Set up views as needed

### Add User Managament
```php artisan make:controller \\Admin\\UserController -r -mUser```
```php artisan make:model Role -m```

``` php artisan make:seed RolesTableSeeder```

