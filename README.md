<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# E-Project [ Website Name E-Books ]
E-books Website type free books downloads and admin dashboard admin have access of all of these   
[ Register-Users | Update-Users | Delete-Users | Upload-Books | Update-Books | Delete-Books | Track-Books Downloads | Number-Of-Downloads | Etc ] 
Webiste is built using Laravel Php.

## Pre-requisite
Please install following to get started with the project.

* [WAMP 32 bit](https://www.wampserver.com/en/)
* [Composer](https://getcomposer.org/)
* [Laravel 9.x](https://laravel.com/)

## Getting Started
Download the code from repository and follow below given instructions.
* Create `std` named database.
* Rename `.env.example` to `.env`.

![Screenshot (112)](https://user-images.githubusercontent.com/99552615/213943187-ea29ad03-6b7b-4790-8c71-ee1a1c096f6a.png)

### Running
Run the following commands in order.

```
composer update

php artisan migrate:fresh

php artisan db:seed

php artisan serve
```


## Known Errors
* NO APPLICATION ENCRYPTION KEY HAS BEEN SPECIFIED

If you face above issue after running all the above steps & commands, try clicking `Generate App Key` button and refresh the page.

* One Master_Admin Profile..
* The Admin Email Is (admin@gmail.com) And Password Is (admin).
* And 500 random users.
* All users password is ( user );


## Built With

* [Laravel 9.x](https://laravel.com/)

## Pre-requisite For Contact Us Request
* If You Need to Use Contact Us Email Function You Can Use Your Own Credentials On these Variables.
* MAIL_USERNAME="Your Email"
* MAIL_PASSWORD="password from google account"
* MAIL_ADMIN_EMAIL_ADDRESS="email adress where you want to semd email"


## Author
* **Ameer Ali Jamali**




## Website Demo Images
![Screenshot (82)](https://user-images.githubusercontent.com/99552615/213222183-c44fe4a7-c285-4846-b937-ffe99c75eadd.png)
![Screenshot (83)](https://user-images.githubusercontent.com/99552615/213223353-863c3fe3-0414-44e1-9d89-cc5b40978873.png)

## Error and success message for user in homepage.
![Screenshot (99)](https://user-images.githubusercontent.com/99552615/213238049-c9bf72a9-b32a-41c9-a571-27cd3fcca3e2.png)

## Contact us form
![Screenshot (84)](https://user-images.githubusercontent.com/99552615/213226403-7c0ef399-5dc9-4006-9602-23598746e5cd.png)

## Registration form
![Screenshot (85)](https://user-images.githubusercontent.com/99552615/213227078-a24d9f9a-e645-412c-b153-cc4266273648.png)

## login form 
![Screenshot (86)](https://user-images.githubusercontent.com/99552615/213228049-b4829898-4e76-4c1f-ad88-e2b7c89f8fd6.png)

## Logged in view 
![Screenshot (87)](https://user-images.githubusercontent.com/99552615/213228084-c81f528e-0ae3-496f-b472-112b20b1651c.png)

## Books downloads view
![Screenshot (88)](https://user-images.githubusercontent.com/99552615/213228123-5089b852-408b-4c07-9ad6-5607311c36db.png)

## Admin dashboard
![Screenshot (89)](https://user-images.githubusercontent.com/99552615/213235874-97e9b97b-1129-4da6-bbac-28885c5eca54.png)

![Screenshot (90)](https://user-images.githubusercontent.com/99552615/213235996-1338bf96-00f2-451f-9dd0-01ab8a01f1e8.png)

## User info
![Screenshot (91)](https://user-images.githubusercontent.com/99552615/213236082-289e4a59-a3b1-4204-9d51-2e743c715330.png)

## User update
![Screenshot (92)](https://user-images.githubusercontent.com/99552615/213236296-a3b5019a-f21e-4922-9e23-b1a593a20cd1.png)

## Books info
![Screenshot (93)](https://user-images.githubusercontent.com/99552615/213236497-91310646-a301-459f-baf1-b7c0892a7818.png)

## Books update
![Screenshot (94)](https://user-images.githubusercontent.com/99552615/213236644-f78f4439-a879-47c9-864b-bcc54aeddc6c.png)

## Books upload by admin view
![Screenshot (95)](https://user-images.githubusercontent.com/99552615/213236918-9dd00937-5fae-4a86-9ed1-2ab89e63bac8.png)

## Downloads counts view
![Screenshot (96)](https://user-images.githubusercontent.com/99552615/213237155-b71cda85-736a-4d4f-860a-19c4e5af236d.png)

## Error Message View In Admin Dashboard
![Screenshot (97)](https://user-images.githubusercontent.com/99552615/213237435-27388894-86d0-4f64-bae1-0c495063a111.png)

