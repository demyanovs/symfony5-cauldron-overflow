# Symfony5 - Cauldron overflow

## To start a project

### 1. Install symfony cli
````
wget https://get.symfony.com/cli/installer -O - | bash
````  

### 2. Start a web server  
````
symfony serve -d
````  
or  
``
php -S 127.0.0.1:8000 -t public/
``

### 3. Install node dependencies with yarn for webpack encore
````
yarn install
````  
#### Run Encore
````
yarn watch
````

## MakerBundle
````
php bin/console make:
````

Create command
````
php bin/console make:command
````

Making the Twig Extension
````
php bin/console make:twig-extension
````

## Useful commands  
````
php bin/console debug:autowiring
````  
Clear all caches  
````
php bin/console cache:clear
````

````
php bin/console debug:container
```` 

````
php bin/console debug:container --parameters
````

````
./bin/console about
````  

Creating the Vault  
````
php bin/console secrets:set SENTRY_DSN
````

Creating the prod Vault
````
php bin/console secrets:set SENTRY_DSN --env=prod
````

Listing the Secrets
````
php bin/console secrets:list
````

````
php bin/console secrets:list --reveal
````

````
php bin/console secrets:list --env=prod
````

````
php bin/console secrets:list --env=prod --reveal
````

## Based on symfonycasts tutorials  
1. <a href="https://symfonycasts.com/screencast/symfony">Charming Development in Symfony 5</a>
2. <a href="https://symfonycasts.com/screencast/symfony-fundamentals">Symfony 5 Fundamentals: Services, Config & Environments</a>
