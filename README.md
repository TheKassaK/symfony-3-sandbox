Symfony 3 Sandbox : FOSUser
===================

This project is a Sandbox for start a Symfony 3 project quickly

In this project you have :

* FOSUserBundle preconfigured with a basic User class and all routes (/login, /register, /resetting)
* [DoctrineFixturesBundle](http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html) installed :
    * You can load the fixtures with ```php app/console doctrine:fixtures:load```
    * You will get 2 accounts in your DB :
        * Login : **admin**, Password : **admin** with **ROLE_ADMIN**
        * Login : **user**, Password : **user** with **ROLE_USER**
* An AdminBundle :
    * Prefixed with **/admin** in **routing.yml**
    * A firewall preconfigured in **security.yml**
    * All routes in AdminBundle require **ROLE_ADMIN**
* An UserBundle:
    * Prefixed with **/user** in **routing.yml**
    * A firewall preconfigured in **security.yml**
    * All routes in UserBundle require **ROLE_USER** or **ROLE_ADMIN**
* An AppBundle
* A default route /redirect-after-login in AppBundle

Configuration : 

* For quickly send emails, you can use [MailJet](https://fr.mailjet.com/) for get :
    * mailer_host
    * mailer_user
    * mailer_password
    
    And configure them in parameters.yml

