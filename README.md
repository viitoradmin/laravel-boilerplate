<h1 align="center">Backend Boilerplate App</h1>

## About the application structure.

Turn your existing laravel app into modular application. Laravel modular structure allows you to write modular plugins for laravel. To create integrations, retrieve data, and automate your workflows, build with the Backend Boilerplate App. In this we are using SOA (Service oriented architecture) modular structure.

Let's say, you are building a blog application. Your blog needs to have following features:

- comments
- blog post
- user management etc..

You can turn this features into a module and bundle your logic so that you can easily use this module for your other projects. You can easily turn on/off your module.

## Install

You can create new admin-app project using git clone

    git clone "repo url"

After the project is created run the following commands

    cd admin-app

Fetch the all code from remote branches to local branches

    git fetch --all

Assuming you've already installed composer on your machine: 2.0.11, [Composer](https://getcomposer.org)

    composer self-update or composer self-update --2


Switch git branch in your local

    main - for production

    staging - for QA / UAT

    development - for developers

    git checkout development

Before going to create branch, please review the GIT standards

## GIT STANDARD

Please see [GITSTANDARD](GITSTANDARD.md) for details.

Create your branch for your work.

    git checkout -b feature-auth // from development branch

Install the dependencies using composer

    composer install

Copy the environment from .env.example to .env and add database connection

    copy .env.example .env

Then generate application key

    php artisan key:generate

Then create storage link

    php artisan storage:link

Then run the migrations

    php artisan migrate:fresh

Start the local development server

    php artisan serve

    You can now access the server at http://localhost:8000

Or You can create virtual host and execute the project in your local system.

List of command to setup the Project Setup

    git clone "repo url"
    cd admin-app
    git fetch --all
    git checkout development
    git checkout -b feature/auth
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan migrate:fresh
    php artisan serve


## CODING STANDARD

Please see [CODINGSTANDARD](CODINGSTANDARD.md) for details.

## Licence

This software is licensed under the Apache 2 license, quoted below.
