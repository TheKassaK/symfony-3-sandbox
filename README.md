Symfony 3 Sandbox with FOSUserBundle
===================

This project is a Sandbox for start a Symfony 3 project quickly

In this project you have :

* FOSUserBundle pre-configured with a basic User class and all routes (/login, /register, /resetting)
* All major FOSUserBundle templates are already overrode in **app/Resources/FOSUserBundle/views**
* [DoctrineFixturesBundle](http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html) installed :
    * You can load the fixtures with ```php app/console doctrine:fixtures:load```
    * You will get 2 accounts in your DB :
        * Login : **admin**, Password : **admin** with **ROLE_ADMIN**
        * Login : **user**, Password : **user** with **ROLE_USER**
* An AdminController :
    * Prefixed with **/admin** in **routing.yml**
    * All routes require **ROLE_ADMIN**
    * A default **admin_home** view
* An UserController:
    * Prefixed with **/user** in **routing.yml**
    * All routes require **ROLE_USER** or **ROLE_ADMIN**
    * A default **user_home** view
* A default route **/redirect-after-login** in **AppBundle:Controller:DefaultController**
* A default **main.css** in **web/css**
* A starter template with Bootstrap 3

Configuration : 

* For quickly send emails, you can use [MailGun](https://mailgun.com) for get :
    * mailer_host
    * mailer_user
    * mailer_password
    
    And configure them in parameters.yml

