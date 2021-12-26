# Laravel8 で作る ECサイト

## Information
```
mysql      : 5.7
php        : 7.4
nginx      : 1.2
phpMyAdmin : latest
Laravel    : 8.*
    - laravel-debugbar
    - laravel/breeze : 1.*
```

### If you want to try a payment service, you need to register with stripe and get your public and secret keys.
**stripe**(payment service): `https://dashboard.stripe.com/`

## Setup
```angular2html
$ git clone https://github.com/y-arimura1222/laravel-ec.git
$ cd laravel-ec

<!--
If you want to try the payment service,
please add the public key and secret key of stripe.
 src/.env
    STRIPE_PUBLIC_KEY
    STRIPE_SECRET_KEY
 -->

$ make init

web :
http://localhost:8080
phpMyAdmin :
http://localhost:8888/
```

## If not the first time
```angula
<!-- docker compose up -->
$ make up

<!-- docker compose down -->
$ make down
```
You can know the contents of the command with Makefile

### If you want to create your own environment using this docker-compose
```angular2html
$ git clone https://github.com/y-arimura1222/laravel-ec.git
$ cd laravel-ec
$ rm -r src
$ cp .env.example .env

<!-- Please rewrite this file to your own environment laravel-ec/.env -->

<!--
The docker/php/Dockerfile and docker/php/laravel-install.sh
are specifications for creating Laravel-ec.
There are many packages that are not needed just for checking the operation.
Edit it to suit your environment before the next command execution. 
-->

$ docker-compose up -d --build
$ docker-compose exec app sh < ./docker/php/laravel-install.sh
```

#### If you have successfully installed Laravel8.* rewrite the environment variables
`laravel-ec/src/.env`

## Operation check
```angular2html
$ docker-compose exec app sh
$ php artisan migrate

<!-- If the command is successful -->
$ exit

web :
http://localhost:8080

phpMyAdmin :
http://localhost:8888/
```

Enjoy Laravel8.* simulation!

Thank you!
