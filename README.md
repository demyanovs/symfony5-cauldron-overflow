# Symfony5 - Cauldron overflow

## To start a project

### 1. Install symfony cli
``
wget https://get.symfony.com/cli/installer -O - | bash
``  

### 2. Start a web server  
``
symfony serve -d
``  
or  
``
php -S 127.0.0.1:8000 -t public/
``

### 3. Install node dependencies with yarn for webpack encore
``
yarn install
``  
#### Run Encore
``
yarn watch
``


## Listing All Services
``
php bin/console debug:autowiring
``

Based on symfonycasts tutorials:  
1. <a href="https://symfonycasts.com/screencast/symfony">Charming Development in Symfony 5</a>
