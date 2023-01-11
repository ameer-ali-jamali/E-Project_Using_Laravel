First must installed local host serevr wamp32 or wamp64 or xamp and after
open project in vsCode or phpstrom and after in the last you can see one (.env.example) file
first you have to rename it to (.env) file 
![Screenshot (74)](https://user-images.githubusercontent.com/99552615/211910332-9a336f22-6b80-4adc-8c78-bfb607e1b546.png)


and after open editor terminal and run some cmds..
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
![Screenshot (73)](https://user-images.githubusercontent.com/99552615/211910410-07f26f2a-6c77-4fda-b7f7-7c4ae328f271.png)

MAIL_ADMIN_EMAIL_ADDRESS="email adress where you want to semd email";

#My Project All Images
This is Home Pge
![Screenshot (36)](https://user-images.githubusercontent.com/99552615/211908721-74cedd3c-699c-4d6e-9ae4-4482b7bd73ad.png)
![Screenshot (37)](https://user-images.githubusercontent.com/99552615/211908823-f904948c-762e-498e-8281-c18b51a29f80.png)
![Screenshot (38)](https://user-images.githubusercontent.com/99552615/211908877-bdf04135-0e93-4438-a92a-83a61241bf97.png)

User Profile
![Screenshot (52)](https://user-images.githubusercontent.com/99552615/211909901-7f952c04-524e-4c1c-bb2e-f8a75bbdd150.png)


Admin DashBoard
![Screenshot (39)](https://user-images.githubusercontent.com/99552615/211908982-2243403f-c5bf-49ad-89c0-c23f3fa95c96.png)
![Screenshot (44)](https://user-images.githubusercontent.com/99552615/211909442-2cfa1b01-8f20-4363-a613-c8c2cf02d701.png)

Admin Profile
![Screenshot (40)](https://user-images.githubusercontent.com/99552615/211909075-0595afd1-34cd-4f25-862f-1613e94a786b.png)

Admin Panel Users and Books Information
![Screenshot (41![Screenshot (45)](https://user-images.githubusercontent.com/99552615/211909471-80dad81a-171e-4f5d-9ca2-915ea4e54dc6.png)
)](https://user-images.githubusercontent.com/99552615/211909211-2b5d759f-c7cf-4a37-b049-ffa8749c0f00.png)
![Screenshot (46)](https://user-images.githubusercontent.com/99552615/211909559-73956153-6f47-4769-9304-aa6b0fe271ed.png)

Admin Update and Register Users
![Screenshot (42)](https://user-images.githubusercontent.com/99552615/211909365-1c01b083-2150-49fe-8a84-f1364b743c5e.png)
![Screenshot (43)](https://user-images.githubusercontent.com/99552615/211909383-0f401ee4-7ada-4937-bc0c-382a35e71a11.png)

Admin Delete Confirmation
![Screenshot (47)](https://user-images.githubusercontent.com/99552615/211909687-5b9ece31-a770-468f-b2d4-046e116147a6.png)

Admin Book Upload
![Screenshot (48)](https://user-images.githubusercontent.com/99552615/211909766-5bdcf7e5-d328-443c-9b7b-7ee604a94d22.png)

Conatact Us 
![Screenshot (![Screenshot (57)](https://user-images.githubusercontent.com/99552615/211910013-bf115293-24c0-4f24-adef-32d5919f3969.png)
56)](https://user-images.gi![Screenshot (61)](https://user-images.githubusercontent.com/99552615/211910079-67dde92b-83d9-403c-a4c8-ee7a2a24fdec.png)
thubusercontent.com/99552615/211909994-8ae06007-825b-4c07-baef-523d1b999c6f.png)
![Screenshot (70)](https://user-images.githubusercontent.com/99552615/211910173-4332bd5d-5dd0-481d-86d3-add1946dfb67.png)
![Screenshot (72)](https://user-images.githubusercontent.com/99552615/211910192-3b4f4f2a-a0d2-48b6-b549-ba536831b69d.png)

Error Messages
![Screenshot (59)](https://user-images.githubusercontent.com/99552615/211910063-880b0967-2e9f-4245-b103-4719527ce75d.png)

Books Downloads
![Screenshot (67)](https://user-images.githubusercontent.com/99552615/211910152-23d4bd64-c4f1-4253-ab9c-5d8a469b8d46.png)






