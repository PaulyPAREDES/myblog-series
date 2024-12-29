<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🤖Programación Web Avanzada 2024 - Trabajo Práctico N°3  Framework Laravel


## Objetivo del proyecto

Desarrollar un blog personal o del equipo. La definición de blog indica que es una página
web en la que se publican regularmente posts (artículos cortos) con contenido actualizado y
novedoso sobre temas específicos o libres. Debe contener al menos dos categorías cargadas y
posibilidad de agregar y gestionar los posts.

## Dominio: Series TV
### Descripcion del dominio 
“Serifilio buscando series”, blog personal de posteos de series de tv que les permite a  los usuarios ver top de series según las categorías definidas, ver el detalle de cada serie con descripción como el nombre, imagen representativa,una reseña, plataforma donde encontrarla, cantidad de temporadas, actores protagonista y director.
La plataforma tendrá solo un usuario administrador , los demás usuarios solo podrán registrarse como colaboradores los que les permitirá crear nuevos posteos de series , editar y eliminar solos las series en estado activo.
El usuario administrador podrá agregar nuevos posteos, además de visualizar , editar y eliminar  todas las series cargadas, las propias y las de los colaboradores para poder supervisar el contenido posteado.  
En caso  de que el administrador desactive un posteo de un colaborador se le quitará acceso de edición y visualización a dicho posteo.

## Conceptos

Mapeo Objeto Relacional, modelo Vista Controlador, Modelo de datos, Routeo.

## ⚙️Instalación

1) Clonar el repo y ejecutar  ```php composer install```.
2) Crear un archivo  ```.env``` con variables de entorno .
2) Luego de configurar el archivo ```.env``` con las variables locales que tengas para mysql y demas.
4) Ejecutar las migraciones de las tablas y los seeders para cargar el contenido default del blog a la base de datos con ```php artisan migrate --seed```.
5) Ejecutar ```npm run dev ``` y ```php artisan serve``` para iniciar la aplicacion en modo desarrollo, cada uno en una consola separada.

## 🚀Tecnologias
 Laravel, PHP, PlantillasBlade, Tailwind, Eloquent
## 🖥️ Previsualización
![home blog](https://github.com/PaulyPAREDES/myblog-series/assets/86857679/f25e4ccd-13a3-4399-ad38-8936ff4799c0)
![detalle](https://github.com/PaulyPAREDES/myblog-series/assets/86857679/c2f74ed6-e42b-4534-bd59-c096f5bc0710)
![crud](https://github.com/PaulyPAREDES/myblog-series/assets/86857679/7067d7f2-013b-4a96-8ca1-81253f5ffca7)
