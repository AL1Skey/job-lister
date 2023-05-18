# What is this:

This Code are for relive my memories of what I do when I follow tutorial on youtube

# Docker Build Laravel:
    . run composer update
    . set DB_HOSTNAME=host.docker.internal
    . add this to env file :
        WWWGROUP=1000
        WWWUSER=1000
    . run php artisan sail:install
    . choose database on prompt
    . run docker compose up
    . run php migrate:install && php migrate:refresh --seed
    . https://localhost.com
    
    To Be Added, for time being use this link:
    - https://blog.christian-schou.dk/run-postgresql-database-using-docker-compose/

# HOW TO USE (Testing Purpose):

## 0. Instal php, composer, and databases programming language as your choice. 
    After that, open php.ini and remove ";" at ;extension=sql_your_choice

### Ex:
MySQL:
> ;extension=pdo_mysql
    
PostgreSQL:
> ;extension=pdo_pgsql

SQLite:
> ;extension=pdo_sqlite

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