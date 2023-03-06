# Locker

El proyecto consiste en hacer un conjunto de taquillas (en mi caso he hecho 3 taquillas). He hecho una página web con dos botones: “guardar” y “recoger”. Cuando el cliente le de a “guardar”, se activará el script de escritura en el cual le asignará una contraseña aleatoria al NFC, la cual se guardará en la base de datos junto a la puerta que se ha abierto y la hora. También se actualizará en la tabla “puertas” hasta que el cliente recoja sus pertenencias. El script de escritura necesita escribir en la tabla “NFC” la contraseña de la NFC, la puerta asignada, la fecha y la hora. En la tabla “puertas”, en la puerta asignada, cambiará el estado “libre” a “ocupado”, y la cerradura asignada a esa puerta en la tabla “puertas” se abrirá y una vez cerrada, no se le va a poder abrir a otro cliente porque está “ocupada”. Cuando el cliente vuelva, se leerá la contraseña y lo comprueba en la base de datos con las contraseñas que ya hay. Con la fila de la tabla “NFC” que coincida, se cogerá esa puerta que tiene asignada y se abrirá la cerradura a la que está asignada en la tabla “puertas”, se abrirá la cerradura y se actualizará el estado de “ocupado” a “libre”.

Puedes iniciar sesion como administrador para ver todas las funcionalidades con estas credenciales:
_Por favor, si vas a borrar un usuario, que sea un usuario estandar, no un admin :)_
* email: test@gmail.com
* password: test

Este proyecto estaba pensado para que funcionara con una raspberry y un lector de tarjetas nfc, utilizando Python. De hecho, fue realizado así.
Pero he hecho una adaptación para simular el funcionamiento sin este lector.

Para ver los materiales empleados en el proyecto original, puedes verlos [aquí](https://proyectomireyachaparro.000webhostapp.com/materiales.php)
