# The View Antwerp Web Platform


### Related Git Repos

There have no related git repos for Antwerp - this is the only one.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

This projects requires the following:
* PHP 8.1
* MySQL or MariaDB
* NGinx or Apache for the PHP (on Mac, I'd recommend using Laravel Valet - https://laravel.com/docs/10.x/valet)
* Composer
* Requires activating the following php extensions:
  * extension=gd - this is required for the qr code generator

#### Installation on mac

* Install Brew from https://brew.sh/
```
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
```
* Install the needed software
```
brew install php
brew install mysql
```
* If you want to use laravel valet, use this
```
composer global require laravel/valet
valet install
```

#### Installation on Windows

* Install Apache - https://www.apachefriends.org/

### Installing

A step by step series of examples that tell you how to get a development env running

Ensure you have access to the gitlab repo and have a SSH key created for your environment.  This can be created at https://gitlab.com/-/profile/personal_access_tokens
```
git clone git@github.com:[your-github-username]/antwerp.git
```

Create a database and user with the details below:
DB: antwerp
User: root 
Pass: 

```
mysql -u root -p
CREATE DATABASE antwerp;
```

While in the project root directory, copy the .env.local from the repository and make the file name .env
```
cp .env.example .env
```
You need to create a database with the username/password you have in the .env file (or modify the .env file accordingly)

While in the project root directory, run composer install to bring all the project libraries and dependencies (you must be connected to the internet for this)
```
composer install
```
While in the project root directory, run to create the database tables
```
php artisan migrate
```
Install the test data we've created (only use this on local please)
```
php artisan db:seed
```
If any problems with images happened, please use those commands
```
sudo rm -rf public/storage
php artisan storage:link 
```
While in the project root directory, install all JS work using node
```
npm install
npm run dev
```

while you in local server the next code should be runing
```
npm run dev
```
While in the project root directory, serve the project
```
php artisan serve
```
