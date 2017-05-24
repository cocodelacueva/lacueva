# LaCueva.tv

# VERSION 2.0
* Tema nuevo (divi)
* Landing page inicial con trabajos y contacto
* Pagina de mini promo sitio


--------------

Versión 1.1: Cambios en la promo de desarrollo, en el ftp online quedo la desarrollo vieja, functions vieja y js vieja.

Versión 1.0: Web general y landing pages  
Bases de datos guardadas: online, y la de vagrant

## web general

* WordPress 4.7, tema Minimal (propio)
* estructura: raiz: (index y config) - carpetas: wp, core (themes, pluggin, cache, languaje), contenido (uploads) y promo
* pluggins activos: all in one wp security and firewall 4.2.4 / w3 total cache .0.9.5.1


## Landing pages

programadas en php

### Desarrollo web, gral Link:  
* http://lacueva.dev/promo/index.php?page=desarrollo
* Letra: normal y light

### Hoteles Link:
* http://lacueva.dev/promo/index.php?page=hoteles

### agencias Link: http://lacueva.dev/promo/index.php?page=agencias

### cine Link:  http://lacueva.dev/promo/index.php?page=cine

## permanent links

* en la raís está editado lo de wordpress pero además lo de la carpeta promo, primero que se copia abajo
* Luego en la carpeta promo hay otro htaccess

```
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>
# END WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^promo/(\w+)/?$ promo.php?id=$1
</IfModule>
```

```
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /promo
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(\w+)/?$ index.php?id=$1
</IfModule>
```
