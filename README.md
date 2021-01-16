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

### 4. Start Mysql
````
docker-compose up -d
````

### 5. Apply migrations
````
symfony console doctrine:migrations:migrate
````

### 6. Load fixtures
````
symfony console doctrine:fixtures:load
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
symfony new project_name
````  
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

Environment variables
````
symfony var:export --multiline
````

Load fixtures
````
symfony console doctrine:fixtures:load
````

Fixtures factory
````
symfony console make:factory
````

## DB
````
make:docker:database
````

````
docker-compose up -d
````

````
mysql -u root --password=password --host=127.0.0.1 --port=32773
````

````
docker-compose exec database mysql -u root --password=password
````

````
php bin/console make:entity
````

````
php bin/console make:migration
````

````
symfony console doctrine:migrations:migrate
````

````
symfony console doctrine:query:sql 'SELECT * FROM question'
````

Drop db
````
symfony console doctrine:database:drop --force
````

Recreate db
````
symfony console doctrine:database:create
````

## Based on symfonycasts tutorials  
1. <a href="https://symfonycasts.com/screencast/symfony">Charming Development in Symfony 5</a>
2. <a href="https://symfonycasts.com/screencast/symfony-fundamentals">Symfony 5 Fundamentals: Services, Config & Environments</a>
3. <a href="https://symfonycasts.com/screencast/symfony-doctrine">Doctrine, Symfony & the Database</a>