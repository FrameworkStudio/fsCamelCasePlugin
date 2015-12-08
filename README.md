# fsCamelCasePlugin
Plugin para convertir nombres tipo camel_case en cameCase

## Ejemplo de uso

```php
<?php
use fsCamelCasePlugin\fsCamelCase;

$prueba = "hola_mundo";
$camelCase = new fsCamelCase();
echo $camelCase->camelCase($prueba);
```

El resultado sería ```holaMundo```
