![alt text](https://github.com/Umaaar/Group-24//blob//main/Website/public/aston_sport_clear.png?raw=true)

---

## Description 

Aston Direct Sport Clothing is a e-commerce platform where high quality sports wear can be bought by users, built using Laravel as our PHP framework. Frontend is built using HTML, CSS, javascript and bootstrap as the CSS framework. Backend functionality is implemented using SQL and Eloquent models for the database and PHP for the interactive design

## Features

- Users can create an account and log in provided they meet the email and password requirements
- Users can log in and sign out of there account
- Available products are listed
- Users can add products to basket and make orders
- Basket and checkout page for logged in users
- Profile page for users once they logged in where they can view user information and past orders
- About us page
- Admin log in
- Admin page where products can be added and all users as well as their orders can be viewed

---

## Getting started

### Requirements

- PHP <= 8.1.12
- Laravel <= 9
- Composer <= 2.4
- XAMPP (Comes with PHP)

### Installation

1. Clone the repository in the httdoc folder `https://github.com/Umaaar/Group-24`.
2. Rename `.example.env` to `.env`. 
3. Ensure MySQL database is running and create new database in PHPMyAdmin. Adding  the database name in the .env file and ensuring other configuration are correct: 
`DB_CONNECTION=mysql`
`DB_HOST=127.0.0.1`
`DB_PORT=3306`
`DB_DATABASE=''`
`DB_USERNAME=root`
`DB_PASSWORD=''`
4. Import the data base export from `/Users/umar/GitHub/Database/Database export.sql` into the database you just created.
5. `cd` into the cloned repository.
6. `composer install`
7. `php artisan key:generate`
8. `php artisan serve`
9. Open `http://127.0.0.1:8000` in your browser
    
---

### Authors

-  Sukhpal Shergill - [@sukhpal0525](https://github.com/sukhpal0525)
- Luc Sanders - [@Mexican-Toast](https://github.com/Mexican-Toast)
- Bogdan Saftiuc - [@BogdanSaf](https://github.com/BogdanSaf)
- Mohammad Saeed - [@Umaaar](https://github.com/Umaaar)
- Badr Rifi - [@RifiBadr](https://github.com/RifiBadr)
- Fatima Rabia - [@rabiafatima1](https://github.com/rabiafatima1)
- Rehan Hussain - [@for-i-in-rehan](https://github.com/for-i-in-rehan)
- Husna Salihah - [@Hu3na](https://github.com/Hu3na)

