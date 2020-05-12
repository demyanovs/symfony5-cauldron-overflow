# Symfony5 - Cauldron overflow

### Install symfony cli
``
wget https://get.symfony.com/cli/installer -O - | bash
``  

### Start a web server  
``
symfony serve -d
``  
or  
``
php -S 127.0.0.1:8000 -t public/
``


### Listing All Services
``
php bin/console debug:autowiring
``

Based on symfonycasts tutorials:  
1. <a href="https://symfonycasts.com/screencast/symfony">Charming Development in Symfony 5</a>
