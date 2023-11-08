# Checkout page using Laravel

## Running the project locally

1. Clone the project
2. Create a .env file from the .env.example file
3. Generate the APP_KEY env parameter running the following command:
```
    php artisan key:generate
```
4. Run the following command to install php dependencies and build containers:
```shell
    docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v "$(pwd):/var/www/html" \
        -w /var/www/html \
        laravelsail/php82-composer:latest \
        composer install --ignore-platform-reqs
 ```
5. Create an alias for Laravel Sail in your shell following the steps provided in https://laravel.com/docs/10.x/sail#configuring-a-shell-alias
6. Run the following command to start the application containers:
```
    sail up -d
``` 
7. Configure database .env parameters
8. Run migrations:
```
    sail artisan migrate
```
9. Install Javascript dependencies:
```
    sail npm install
```
10. Run the project front-end:
```
    sail npm run dev    
```
