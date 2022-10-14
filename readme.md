### Test Task 
A PHP CLI service for currency check. Test Task For Agrobank


Project is dockerized

### How to install:
1. make .env file from .env.example - all credentials in .env.example are valid(it's not secure but convenient way, just for testing purposes)
2. docker compose build
3. docker compose up -d
4. Enter to php container with command "docker compose exec php sh". Run migrations inside container with command "php migrations.php"


How To Test Commands: php index.php %command-name% ...%args%_

List Of All Commands: 
1. currency:get

Description: Get Currency Value
    Example: php index.php currency:get USD

2. currency:get-cross
    
Description: check if room is already booked
    Example: php index.php currency:get-cross USD RUB