# What is this:

Job lister are Laravel-based Web Application that show the Auto-generated list of job

# Feature:
- Search based keywords
- Search based tags

# In-Depth of Search Function:
This function use merge-search algorithm to perform search based by token from url[search & tags]

# Rundown on How to Use Laravel
## 0. Instal php, composer, and databases programming language as your choice. 
    After that, open php.ini and remove ";" at ;extension=fileinfo and ;extension=sql_your_choice

### Ex:
MySQL:
> ;extension=pdo_mysql
    
PostgreSQL:
> ;extension=pdo_pgsql

SQLite:
> ;extension=pdo_sqlite

### 0.5. Install Laravel and run this command to create laravel project
```cmd
composer require laravel/installer
laravel new [name-of-your-project]
```
### -. If you want to create controller, run this command
```cmd
php artisan make:controller [name-of-controller]
```


# HOW TO USE (Testing Purpose):

## 0. Instal php, composer, and databases programming language as your choice. 
    After that, open php.ini and remove ";" at ;extension=fileinfo and ;extension=sql_your_choice

### Ex:
MySQL:
> ;extension=pdo_mysql
    
PostgreSQL:
> ;extension=pdo_pgsql

SQLite:
> ;extension=pdo_sqlite

### 0.5. Install Laravel and run this command to create laravel project
```cmd
composer require laravel/installer
laravel new [name-of-your-project]
```

#### 1. CREATE .env on this project directory and configure according to your preference databases

###### Ex:
```
    DB_CONNECTION=mysql
    DB_HOST=localhost
    DB_PORT=5432
    DB_DATABASE=laravel
    DB_USERNAME=postgres
    DB_PASSWORD=artisan
```

#### 2. Create Database on your SQL according to your env file 

#### 3. run php artisan migrate:install 

#### 4. run php artisan migrate:refresh --seed

#### 5. run php artisan key:generate

#### 6. run php artisan serve

# Workfile/folder according to most used

1. /resources/view/.*blade.php
2. /routes/[web.php, api.php, channels.php, console.php]
3. /public/[css, *]
4. /database/[.., factories, seeders, migrations]
5. /config/database.php
6. /app/Models/*
