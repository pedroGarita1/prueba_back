#Instalacion del proyecto


## 1.- Clonar el respositorio

Ejecuta esta linea de comando en tu CMD o PowerShell

```bash
  git clone https://github.com/pedroGarita1/prueba_back
```

## 2.- Instalar dependencias

Instalacion de Composer

```bash
  composer i
```
Instalacion de NPM

```bash
  npm i
```

## 3.- Configuracion del .env

Copia y pega el .env.example en la raiz del proyecto y sustituye el nombre con solo .env <br>
Posterior mente abre el archivo y coloca en el apartado de <strong>DB_CONNECTION=mysql</strong> el <strong>DB_DATABASE=prueba_back</strong>

## 4.- Configuracion de la app key

Ejecuta en la raiz del proyecto el siguiente comando en CMD o PowerShell

```bash
  php artisan key:generate
```

## 5.- Creacion de la base de datos

Ejecuta en el motor de base de datos de tu preferencia el siguiente comando

```bash
  CREATE DATABASE IF NOT EXISTS prueba_back;
```

## 6.- Ejecucion de las migraciones

En la raiz de tu proyecto en el CMD o PowerShell ejecuta el siguiente comando

```bash
  php artisan migrate
```

## 7.- Ejecucion del servidor

En la raiz de tu proyecto en el CMD o PowerShell ejecuta el siguiente comando

```bash
  php artisan serve
```
