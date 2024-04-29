## About this project

This project is a integration with Pokémon TCG API that you can see more on the link below

````bash
https://dev.pokemontcg.io/dashboard
````

## Dependencies 

* PHP 8.2.*
* Symfony 7.0.*
* Composer

## Cloning and installing dependencies

Cloning the project
````bash
git clone https://github.com/flavioalvespro/pokemon.git
````
Instaling dependencies
````bash
composer install
````

## Tests

We have one test class on /tests folder there we're testing the two main features of our application, there a test for to test the list of pokemon cards and one more test for test the view of one pokemon card. To run our tests execute the command below

Running tests
````bash
./vendor/bin/phpunit --colors
````

## Running our Application

In your root folder and considering that you have a setup done for run symfony application execute the command below:

````bash
symfony server:start
````

At that moment your application must be running at http://localhost:8000/cards
