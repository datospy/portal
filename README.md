portal
======

Este es el repositorio del portal de datos abiertos de la sociedad civil de Paraguay.  http://www.datos.org.py/

Para replicar este portal debes hacer 

    cd /var/www/html
    git clone https://github.com/datospy/portal
    mv portal/ drupal/

Crear base de datos postgres  
            DB:drupal  
            user:drupal  
            pass:password  
Importar la base de datos portal.sql

    psql drupal < portal.sql


Configurar e integrar con CKAN https://github.com/datospy/ckanext-datospy_theme/wiki/Integraci%C3%B3n-con-el-portal-%28drupal%29

Auntenticacion del portal   
     user: admin  
     pass: admin 

