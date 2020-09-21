<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Permission list
    
        
        Permission::create(['name' => 'posts.index', 'display_name' => 'Listado de posts']);
        Permission::create(['name' => 'posts.update', 'display_name' => 'Editar posts']);
        Permission::create(['name' => 'posts.show', 'display_name' => 'Ver post']);
        Permission::create(['name' => 'posts.create', 'display_name' => 'Crear posts']);
        Permission::create(['name' => 'posts.destroy', 'display_name' => 'Eliminar posts']);
        Permission::create(['name' => 'posts.images.index', 'display_name' => 'Imágenes del post']);


        
        Permission::create(['name' => 'users.index', 'display_name' => 'Listado de usuarios']);
        Permission::create(['name' => 'users.update', 'display_name' => 'Editar usuarios']);
        
        Permission::create(['name' => 'users.create', 'display_name' => 'Crear usuarios']);
        Permission::create(['name' => 'users.destroy', 'display_name' => 'Eliminar usuarios']);




        Permission::create(['name' => 'roles.index', 'display_name' => 'Listado de roles']);
        Permission::create(['name' => 'roles.update', 'display_name' => 'Editar roles']);
        Permission::create(['name' => 'roles.show', 'display_name' => 'Ver role']);
        Permission::create(['name' => 'roles.create', 'display_name' => 'Crear roles']);
        Permission::create(['name' => 'roles.destroy', 'display_name' => 'Eliminar roles']);


        
        Permission::create(['name' => 'permissions.index', 'display_name' => 'Listado de permisos']);
        Permission::create(['name' => 'permissions.update', 'display_name' => 'Editar permisos']);
       
        
        

        //Admin
        $admin = Role::create(['name' => 'admin', 'display_name' => 'administrador']);
        $guest = Role::create(['name' => 'guest', 'display_name' => 'invitado']);
        $guest->givePermissionTo([
            'posts.index',
            'posts.create',
            'posts.show',
            'posts.destroy',
            'posts.update',
            'posts.images.index',
            'users.index',
            'users.update',
        ]);

        $admin->givePermissionTo([
            'posts.index',
            'posts.create',
            'posts.update',
            'posts.show',
            'posts.destroy',
            'posts.images.index',



            'users.index',
            'users.create',
            'users.update',
            'users.destroy',
            'roles.index',
            'roles.create',
            'roles.update',
            'roles.destroy',
            'roles.show',
            'permissions.index',
            'permissions.update',
        ]);
        //User Admin

        $user = User::create(['name'=>'admin','email'=>'admin@admin.com','password'=>bcrypt('123123')]);
        $user2 = User::create(['name'=>'guest','email'=>'guest@guest.com','password'=>bcrypt('123123')]); //Italo Morales
        $user->assignRole('admin');
        $user2->assignRole('guest');
    }
}
