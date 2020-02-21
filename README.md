# Laravel-SnowDay
An NSCC Laravel Demo App

---
## Create A New Project From Scratch 
*In 10 Easy Steps*
1. install Node
  [Node JS Download](https://nodejs.org/en/download/)
2. install Composer
  [Composer Download](https://getcomposer.org/download/)
3. Update Composer (optional)
    - `composer self-update`
    - `composer upgrade`
4. Test PHP
    - `php -v`
5. Verify PATH (if needed)
    - PS: `echo $env:Path`
    - PS Append: `$env:Path += ";SomeRandomPathToPHP.exe"`
    - Bash: `echo $PATH`
6. Get Laravel
    - `composer global require laravel/installer`
7. Create a new project
    - `laravel new ProjectName`
8. Try Artisan:
    - cd to project folder
    - `php artisan inspire`
9. All the JS
    - `npm install`
    - `npm run dev`
10. Run the server
    - `php artisan serve`
---
## Create A Project From This Repo
*In 10 Easy Steps*
1. Download ZIP or Clone git repo to local computer
2. Install node_module
    - cd to your project folder (not parent folder)
    - `npm install`
    - `npm run dev`
3. Create vendor folder
    - `composer update`
4. Find or create .env  
    - Find .env.sample or .env.~~~ 
    - Change its name to .env
5. Edit .env file for sqlite
   - Find below:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    - Replace with:
    ```
    DB_CONNECTION=sqlite
    ```
6. Create a db file 'databases\database.sqlite'
7. Update the database
    - `php artisan migrate`
8. Generate a key
    `php artisan key:generate`
9. Run your server
    - `php artisan serve`
10. Go to localhost:8000
    - Boom!
    - You should be able to login and register an account
    - check database\seeds for default accounts
    - i.e. admin@admin.com : password

### Troubleshooting:
1. Wipe your database
    - `php artisan migrate:fresh`
2. Load seed data
    - `php artisan db:seed`
3. If you get an error when seeding
    - `composer dump-autoload`



## Exploring the App
### Important Files
- Config:
    - `.env`
- Router:
    - `\routes\web.php`
- Models:
    - `\app\*.php`
- Views:
    - `\resources\views\`
- Controllers:
    - `\app\Http\Controllers\`
- Database:
    - `\database\migrations`


## Building this Demo App

### Add Auth
`composer require laravel/ui`
`php artisan ui vue --auth`

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

### Add User Management
1. Create new controller and model for Usermanagement

    * `php artisan make:controller \\Admin\\UserController -r -mUser`
    * -r means this will be a ["Resource Controller"](https://laravel.com/docs/5.7/controllers#resource-controllers) and it will get all the typical "CRUD" routes automatically. 
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
