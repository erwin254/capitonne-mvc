<?php

/**
* Agregamos un usuario nuevo a la base de datos.
*/
class UserTableSeeder extends Seeder {
    public function run(){
        User::create(array(
            'username'  => 'admin',
            'email'     => 'erwin254@gmail.com',
            'name'=> 'Administrator',
            'password' => Hash::make('paralelepipedo') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}