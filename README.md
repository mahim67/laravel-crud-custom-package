# Laravel CRUD Custom Package
## Laravel CRUD Operation with validation in Custom Package.

## Installation Steps
* Step 01 : Create a folder (folder name like : @packages) in same repositories of Laravel application.
* Step 02 : Clone the package from github in @packages folder.
* Step 03 : Run this command in your laravel application
Command : composer config repositories.crudoperation path ../packages/laravel-crud-custom-package

* Step 04 : Install this Package
Command : composer require mahim/bondstein-tech-test

* Step 05 : Now, php artisan migrate and run php artisan serve
* Step 06 : Then, Browse --  http://127.0.0.1:8000/categories


@Source : https://github.com/mahim67/laravel-crud-custom-package
@features : 
Laravel CRUD Operation with validation in Custom Package
Table : categories [columns : title, description, created_by, created_at, updated_at]
