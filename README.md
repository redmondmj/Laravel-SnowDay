# Laravel-SnowDay

Laravel Demo App

TBD

## From scratch

- install Node
  [Node JS Download](https://nodejs.org/en/download/)
- install Composer
  [Composer Download](https://getcomposer.org/download/)
- Update Composer (optional)
  `composer self-update`
  `composer upgrade`
- Test PHP
  `php -v`
- Verify PATH (if needed)
  PS: `echo $env:Path`
  PS Append: `$env:Path += ";SomeRandomPath"`
  Bash: `echo $PATH`
- Laravel
  `composer global require laravel/installer`
- Project
  `laravel new ProjectName`

## if you build it...

- Try Artisan:
  `php artisan inspire`
- All the JS
  `npm install` &&
  `npm run dev`
- Run the server
  `php artisan serve`

## Explore

Config:
`.env`
Router:
`\routes\web.php`
Model:
`\app\User.php`
Views:
`\resources\views\welcome.blade.php`
Controllers:
`\app\Http\Controllers\`
Database:
`\database\migrations`

## Add Auth

`composer require laravel/ui`
`php artisan ui vue --auth`

## Building this Demo App

### Edit Registration form as needed, i.e.:

`\resources\views\auth\register.blade.php`
`\app\Http\Controllers\Auth\RegisterController.php`
`\app\User.php`
`\database\migrations\2014_10_12_000000_create_users_table.php`

### Add the voting View & Controller

`php artisan make:controller VoteController`

`php artisan make:model Votes`

#### Set up views as needed

### Add chart.js for results view
`npm install chart.js --save`

### Add User Managament
1. Create new controller and model for Usermanagement

    * `php artisan make:controller \\Admin\\UserController -r -mUser`
    * (Note because it is passed a model useful methods are added automatically)
    * Remove unwanted methods (show, create, store)
2. Add routes as "resources" for new controller to web.php
    * `php artisan route:list`

2. Add User Management link to app.blade.php

4. Create a Role model for assigning roles
    * `php artisan make:model Role -m`
    * -m will create a migration at the same time
    * add feilds to migration as needed
    * add another table to handle the association of roles and users
    * `php artisan make:migration create_role_user_table`
    * this will simply keep track of which users are assigned are assigned which roles, add feilds as needed
    * `php artisan migrate`
    * create relationships in Laravel in Role.php model
    * `return $this->belongsToMany('App\User');`
    * create relationships in Laravel in User.php model
    * `return $this->belongsToMany('App\Role');`
5. Add view for user management index.blade.php
    * note the routes for our edit and delete buttons. ID must be passed in for the current user.



### Create DB seeder
`php artisan make:seed RolesTableSeeder`
`php artisan make:seed UserTableSeeder`

### Run DB seeder
`php artisan db:seed`
