#First must installed local host serevr wamp32 or wamp64 or xamp ..
open project in vsCode or phpstrom and after in the last you can see one (.env.example) file

first you have to rename it to (.env) file and after open editor terminal and run some cmds..

and must create database with name ( std ).

1.Composer Update
2.php artisan migrate:fresh
3.php artisan db:seed 

after 3 cmds input this cmd for serve project ..

1.php artisan serve

after this you can enjoy and you see in database 500 random users
and 20 books uploaded in home page ..

One master admin profile also ..
The admin profile email is (admin@gmail.com) password is (admin)

all users password is ( user );


If you Need to use contact us email function you can open (.env) file and 
inside it there is 3 variables that is by default empty ..

MAIL_USERNAME="Your Email";
MAIL_PASSWORD="password"; //in this password you will not insert your gmail pasword
first go to gmail account and after you see (security) then click that and after scroll down
and first open ( 2 step verification ) and after one option will come down (2 step verifiation )
tha is (App passwords) if it comes then click it and after there is 2 colums one (select app ) and (select device)
in select app you must select mail (mail) and in select device must select (windows computer) after this one password
will generate and that password you will insert this .

MAIL_ADMIN_EMAIL_ADDRESS="email adress where you want to semd email";
