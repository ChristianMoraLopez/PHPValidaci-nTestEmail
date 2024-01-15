# VALIDACIÓN DE MAIL POR CHRISTIAN MORA
Este proyecto, denominado "Validación de Mail por Christian Mora", se centra en proporcionar una solución simple y eficiente para la validación de direcciones de correo electrónico. La validación de direcciones de correo electrónico es una parte crucial de muchas aplicaciones web y sistemas para garantizar la entrada de datos precisa.

## Estructura del Proyecto
El proyecto consta de dos archivos principales:

ValidateTest.php:

Este archivo contiene las pruebas unitarias escritas con PHPUnit para garantizar la funcionalidad correcta de la clase Validate.
```
<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('christianmoralopez@hotmail.com');
        $this->assertTrue($email);
    }
}
```

Validate.php:

La clase Validate proporciona un método estático llamado email que utiliza la función filter_var para validar la dirección de correo electrónico.

```
<?php

namespace App;

class Validate
{
    public static function email($email)
    {
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}

```


## Configuración de PHPUnit
El archivo phpunit.xml se utiliza para configurar las pruebas unitarias con PHPUnit. Asegura la correcta inclusión del archivo de carga automática y especifica el directorio de pruebas.

```
<?xml version="1.0" encoding="UTF-8"?>
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" bootstrap="vendor/autoload.php" colors="true" stopOnFailure="false" failOnWarning="false" xsi:noNamespaceSchemaLocation="https://schema.phpunit.de/10.5/phpunit.xsd" cacheDirectory=".phpunit.cache">
  <testsuite name="Test directory">
    <directory>tests</directory>
  </testsuite>
</phpunit>

```
## Uso
Para utilizar la funcionalidad de validación de correo electrónico proporcionada por este proyecto, simplemente invoque el método estático email de la clase Validate, como se muestra en el ejemplo de prueba en ValidateTest.php.

Este proyecto se esfuerza por ofrecer una solución sencilla y eficiente para la validación de direcciones de correo electrónico, contribuyendo así a la integridad de los datos en diversas aplicaciones.