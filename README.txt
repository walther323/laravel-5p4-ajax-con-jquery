1. Crear la estructura base de login y registro

	php artisan make:auth
	
	debemos iniciar el servidor con el comando de php artisan serve y se visualizara en la parte superior
	derecha que se activan las opciones de LOGIN y REGISTER

2. Procedemos a crear la migracion de la base de datos

	php artisan migrate:install

	Antes de ejcutar el comando se debe crear una base de datos y hacer las respectivas configuraciones en el 
	archivo .env


	php artisan migrate:refresh

	si se genera un error indicando que las tablas ya existen se procede a borrarlas y ejecutar el primer comando
	y luego se refreshca para que laravel suba las migraciones y la creacion de la tabla users

	OBSERVACION
	Si se genera un error al momento de registrarse lo que se debe hacer es reiniciar el servidor y volverlo a ejecutar
	con eso se corrige el inconveniente de:

	error SQLSTATE[HY000] [1045] Access denied for user 'homestead'@'localhost' (using password: YES)

3. 