

| Built With                | Version       | Description |
| ------------------------- | ------------- | ----------- |
| PHP                       | 7.3 (minimum) |             |
| MySQL                     | 5.7 (minimum) | Database    |
| Laravel                   | 8             |             |
| laravel-datatables-oracle | 9.0           |             |
| yajra/laravel-datatables  | 1.5           |             |
| yajra/laravel-datatables  | 1.5           |             |



### Local installation


1. **For local Development**
```
   git clone repo
   composer install

   cp .\.env.example .env   
   change content of .env file

        DB_DATABASE=laravelhugedatacheck


   php .\artisan key:generate   
   php artisan serve --port=8001

   php artisan cache:clear
   php artisan migrate:refresh --seed
   <!-- php artisan make:migration create_students_table -->
   <!-- php artisan make:seeder StudentsSeeder -->
   <!-- php artisan db:seed --class=StudentsSeeder -->
   php artisan serve --port=8001
```

Web browser : http://localhost:8001
 ```
     email: admin@gmail.com
     password: 123456
 ```
