## Create a site with the following features:

-   Registration page

-   Log in page

-   Members only dashboard section required after logging in or registering

-   The members only page would contain:

    -   A list of posts submitted by other users

    -   Ability to submit a post (can be as simple as a message)

    -   Ability to edit the post, if the authenticated user is the owner

![](public/img/demo1.gif)

# Setup:

-   Download the files the go to terminal and cd to `app_laravel` directory

-   Run the following commands

`composer install`

`composer dumpautoload -o`

```
php artisan config:cache
php artisan config:clear
php artisan cache:clear
composer dump-autoload
```

-   Create MySql database name `dreamworld` by runing"

`mysql -uroot`

`create database dreamworld;`

`quit;`

-   Next step is to migrate database by running `php artisan migrate`

-   The last step is to add some random data `php artisan db:seed`

-   Then run the app `php artisan serve`

Now you can visit the site locally on this url `http://127.0.0.1:8000`
