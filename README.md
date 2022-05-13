# oasis-api

# Reto Técnico
Backend Developer

Api para la obtener los centros de consumo.

## Inicializar el proyecto

Sobre la carpeta del módulo correr el comando:
```
php artisan serve
```
## Importar información
```
php artisan migrate:fresh --seed
```

## Endpoints de modulo

|Endpoint| Método | Descripción |
| - | - | - |
|/api/{hotel}/{categoria} | GET | Obtiene los centros de consumo dependiendo del id categoría y el id del hotel
|/api/{centro} | GET | Obtiene la información del centro de consumo

## Ejemplo

|Parámetro| Valor | Significado |
| - | - | - |
| {hotel} | 1 | Id del hotel, en este caso de Grand Oasis Cancún |
| {categoria} | 2 | Id de la categoría, significa Restaurantes |
| {categoria} | 3 | Id de la categoría, significa Bares |
| {centro} | 1 | Id del centro de consumo, toda la información de BENAZUZA |


http://demochallenge.xyz/api/1/2
http://demochallenge.xyz/api/1





