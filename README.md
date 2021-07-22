# Poker chance calculator.

web application that will analyses customer input and provide some statistics.

Step 1. Customer is asked to insert a string (no longer than 255 chars).

Step 2. Customer submits the data and receives a grid overview with character statistics.

column1 - character symbol.

column2 - how many times character encountered.

column3 - sibling character info: character was seen standing before [list of chars], after [list
of chars], longest
distance between chars is 10 (in case of 2 or more characters).


![Home Page](https://cdn1.imggmi.com/uploads/2019/12/13/499d2735a0e452028eb8bdbfefe8e88c-full.png)

![Analyse](https://cdn1.imggmi.com/uploads/2019/12/13/47f7d25104fae04c5ca359f5e8e6fd93-full.png)


## Installation

install Laravel if you don't have it by blow command
```bash
composer global require laravel/installer
```


## Run

run script by this code
```bash
php artisan serve
```

then go to `http://127.0.0.1:8000` from your browsing and play.

this script coding for Assessment Development for Awstreams.