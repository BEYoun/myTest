# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.




## Description


e-commerce site not finished
I apply the notion of admin / client login:

![Capture](https://user-images.githubusercontent.com/43119330/54072017-d93c0000-426c-11e9-945e-7447c8cc1887.PNG)



login :
![image](https://user-images.githubusercontent.com/43119330/54072032-143e3380-426d-11e9-85e9-3fd8e1329ecb.png)



two types of connection either client or admin

client:
    blog:
    
    ![image](https://user-images.githubusercontent.com/43119330/54072074-ae9e7700-426d-11e9-8088-60617c68bbac.png)
    
    
        comments:
        
        ![image](https://user-images.githubusercontent.com/43119330/54072088-d8f03480-426d-11e9-9102-959cb724289b.png)
        
admin:
    blog:
    ![image](https://user-images.githubusercontent.com/43119330/54072102-fd4c1100-426d-11e9-899f-5516348a1c17.png)
    
    he can remove and add articles

