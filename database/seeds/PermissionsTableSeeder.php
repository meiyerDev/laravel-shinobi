<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// USERS
		Permission::create([
			'name'			=> 'Navegar Usuarios',
			'slug'			=> 'users.index',
			'description'	=> 'Lista y Navega todos los Usuarios del Sistema',
        ]);
		Permission::create([
			'name'			=> 'Ver detalle de Usuarios',
			'slug'			=> 'users.show',
			'description'	=> 'Ver en Detalle cada Usuario del Sistema',
        ]);
		Permission::create([
			'name'			=> 'Edición de Usuarios',
			'slug'			=> 'users.edit',
			'description'	=> 'Editar los Usuarios del Sistema',
        ]);
		Permission::create([
			'name'			=> 'Eliminar Usuarios',
			'slug'			=> 'users.destroy',
			'description'	=> 'Eliminar Usuarios del Sistema',
        ]);

        // ROLES
		Permission::create([
			'name'			=> 'Navegar Roles',
			'slug'			=> 'roles.index',
			'description'	=> 'Lista y Navega todos los Roles del Sistema',
        ]);
		Permission::create([
			'name'			=> 'Ver detalle de Roles',
			'slug'			=> 'roles.show',
			'description'	=> 'Ver en Detalle cada Rol del Sistema',
        ]);
		Permission::create([
			'name'			=> 'Registrar Roles',
			'slug'			=> 'roles.create',
			'description'	=> 'Editar los Roles del Sistema',
        ]);
		Permission::create([
			'name'			=> 'Edición de Roles',
			'slug'			=> 'roles.edit',
			'description'	=> 'Editar los Roles del Sistema',
        ]);
		Permission::create([
			'name'			=> 'Eliminar Roles',
			'slug'			=> 'roles.destroy',
			'description'	=> 'Eliminar Roles del Sistema',
        ]);

    	// ADMISION
        Permission::create([
			'name'			=> 'Navegar Productos',
			'slug'			=> 'products.index',
			'description'	=> 'Lista y Navega todos los Productos',
        ]);
        Permission::create([
			'name'			=> 'Registrar Productos',
			'slug'			=> 'products.create',
			'description'	=> 'Crear Nuevo Producto',
        ]);
        Permission::create([
			'name'			=> 'Ver detalle de Productos',
			'slug'			=> 'products.show',
			'description'	=> 'Ver todos los Datos de un Producto',
        ]);
        Permission::create([
			'name'			=> 'Editar Productos',
			'slug'			=> 'products.edit',
			'description'	=> 'Editar los Datos de un Producto',
        ]);
        Permission::create([
			'name'			=> 'Eliminar Productos',
			'slug'			=> 'products.destroy',
			'description'	=> 'Eliminar los Datos de un Producto',
        ]);
    }
}
