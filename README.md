## Test task
    
 Install guide

- git clone git@github.com:maxim-barbotkin/laravel-jquery-test-task.git
- composer install
- copy env.example to .env and replase database with your actual database
- php artisan key:generate 
- php artisan config:cache 
- php artisan migrate --seed

after that you can start the application  running this command php artisan serve. (if you use Windows OS you should at first configure your virtual server)   

Access for admin
 
    email : admin@admin.com
    password : password
    
Route for start admin panel: http://your-local-domain-name/admin    
