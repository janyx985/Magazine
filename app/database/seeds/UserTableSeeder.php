<?php

/**
* Agregamos un usuario nuevo a la base de datos.
*/
class UserTableSeeder extends Seeder {
    public function run(){
        User::create(array(
<<<<<<< HEAD
<<<<<<< HEAD
            'username'  => 'user',
            'email'     => 'user@user.com',
            'name'=> 'Usuario',
=======
            'username'  => 'admin',
            'email'     => 'admin@admin.com',
            'name'=> 'Administrator',
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
=======
            'username'  => 'admin',
            'email'     => 'admin@admin.com',
            'name'=> 'Administrator',
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
            'password' => Hash::make('admin') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}