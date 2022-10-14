### Test Task 
A PHP CLI service for currency check. Test Task For Agrobank


Project is dockerized

### How to install:
1. docker compose build
2. docker compose up -d
3. Enter to php container with command "docker compose exec php sh"
4. Use commands via console. That's all :)

### How To Test: 
Run commands via: php index.php %command-name% ...%args%_

List Of All Commands: 
1. currency:get %firstCurrencyName%

Description: Get Currency Value
    Example: php index.php currency:get USD

2. currency:get-cross %firstCurrencyName% %secondCurrencyName%
    
Description: check if room is already booked 
    Example: php index.php currency:get-cross USD RUB