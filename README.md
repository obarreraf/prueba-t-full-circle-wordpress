# Proyecto Wordpress

Este es un proyecto base desarrollado en wordpress con eventos personalizado, se añade docker para el desarrollo local, estas son las instrucciones de uso:

## Instalar en local

Para instalar wordpress en local:

1. Clona el repositorio en tu máquina local:
   ```bash
   git clone https://github.com/obarreraf/prueba-t-full-circle-wordpress.git
   ```
2. Accede a la carpeta
    ```bash
    cd tu-repositorio
    ```
3. Asigna permisos a las carpetas necesarias
    ```bash 
    sudo chown -R {your-username}:{your-username} wp-content
    ```
4. Ejecuta la imagen
    ```bash 
    docker-compose up -d
    ```
5. Accede a 
    ```bash 
    http://localhost:8080/
    ```
## Acceso a Wordpress

   ```bash 
   http://localhost:8080/wp-login.php/
   ```
1. Realizad la instalación de forma regular

2. Accede al panel

3. En plugins activa el plugin Eventos Personalizados

4. Añade los eventos de tu preferencia con fecha y ubicación

5. Crea una pagina o edita una existente y añade el shortcode
    ```bash
    [proximos_eventos]
    ```
6. Accede a la página creada y podrás ver el listado con páginación de tus eventos creados (tiene por defecto 6).