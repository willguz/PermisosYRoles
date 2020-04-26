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
        // Usuarios
        Permission::create([
          'name' => 'Navegar usuarios',
          'slug' => 'users.index',
          'description' => 'Lista y navega todos los usuarios del sistemas.',
        ]);
        Permission::create([
          'name' => 'Ver detalle de usuario',
          'slug' => 'users.show',
          'description' => 'Ver en detalle cada usuario del sistema.',
        ]);
        Permission::create([
          'name' => 'Edición de usuarios',
          'slug' => 'users.edit',
          'description' => 'Editar cualquier dato de un usuario.',
        ]);
        Permission::create([
          'name' => 'Eliminar usuario',
          'slug' => 'users.destroy',
          'description' => 'Eliminar cualquier dato de un usuario.',
        ]);

      // Roles
        Permission::create([
          'name' => 'Navegar roles',
          'slug' => 'roles.index',
          'description' => 'Lista y navega todos los roles del sistemas.',
        ]);
        Permission::create([
          'name' => 'Ver detalle de roles',
          'slug' => 'roles.show',
          'description' => 'Ver en detalle cada rol del sistema.',
        ]);
        Permission::create([
          'name' => 'Edición de roles',
          'slug' => 'roles.create',
          'description' => 'Crear cualquier rol.',
        ]);
        Permission::create([
          'name' => 'Edición de roles',
          'slug' => 'roles.edit',
          'description' => 'Editar cualquier rol.',
        ]);
        Permission::create([
          'name' => 'Eliminar rol',
          'slug' => 'roles.destroy',
          'description' => 'Eliminar cualquier rol.',
        ]);

      // Productos
        Permission::create([
          'name' => 'Navegar productos',
          'slug' => 'productos.index',
          'description' => 'Lista y navega todos los productos del sistemas.',
        ]);
        Permission::create([
          'name' => 'Ver detalle de productos',
          'slug' => 'productos.show',
          'description' => 'Ver en detalle cada producto del sistema.',
        ]);
        Permission::create([
          'name' => 'Edición de productos',
          'slug' => 'productos.create',
          'description' => 'Crear cualquier producto.',
        ]);
        Permission::create([
          'name' => 'Edición de productos',
          'slug' => 'productos.edit',
          'description' => 'Editar cualquier producto.',
        ]);
        Permission::create([
          'name' => 'Eliminar producto',
          'slug' => 'productos.destroy',
          'description' => 'Eliminar cualquier producto.',
        ]);
    }
}
