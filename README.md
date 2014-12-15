portal
======

Este es el repositorio del portal de datos abiertos de la sociedad civil de Paraguay.  http://www.datos.org.py/

Para replicar este portal debes hacer 

    cd /var/www/html
    git clone https://github.com/datospy/portal
    mv portal/ drupal/
    
Crear base de datos postgres
    DB:drupal
    User:drupal
    pass:password

Importar la base de datos portal.sql

    psql drupal < portal.sql


Configurar el apache

