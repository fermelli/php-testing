# Tarea 1 de COM350: Pruebas Unitarias para Laravel

## Ejecutar proyecto

### Clonar repositorio

```bash
git clone https://github.com/fermelli/php-testing
```

### Instalar dependencias

```bash
composer install
```

## Pruebas en PHP

Se utiliza `PHPUnit` para realizar pruebas en PHP.

`PHPUnit` es un marco de prueba orientado al programador para PHP. Es una instancia de la arquitectura xUnit para marcos de pruebas unitarias.

Las pruebas unitarias son pruebas que se enfocan en una porción muy pequeña y aislada de su código. De hecho, la mayoría de las pruebas unitarias probablemente se centren en un solo método.

Se utiliza un un archivo `phpunit.xml` para la configuracion de los test para la aplicación.

Se debe ejecutar `vendor/bin/phpunit` para ejecutar las pruebas.

## Creación de pruebas

Para crear un nuevo caso de prueba de forma predeterminada, las pruebas se deben colocarán en el directorio `tests/`:

```php
<?php

// ...

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    // ..
}
```

## Ejecución de pruebas

Como se mencionó anteriormente, una vez que haya escrito las pruebas, puede ejecutarlas usando `PHPUnit`:

```bash
./vendor/bin/phpunit
```

Tambien puede pasar opciones para ver mas detalles del test

```bash
./vendor/bin/phpunit --testdox
```
