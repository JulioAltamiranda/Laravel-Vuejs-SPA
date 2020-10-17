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
            
    
        //Permissions lists to posts
        Permission::create(['name' => 'posts.index', 'display_name' => 'Listado de posts']);
        Permission::create(['name' => 'posts.update', 'display_name' => 'Editar posts']);
        Permission::create(['name' => 'posts.create', 'display_name' => 'Crear posts']);
        Permission::create(['name' => 'posts.destroy', 'display_name' => 'Eliminar posts']);
        Permission::create(['name' => 'posts.images.index', 'display_name' => 'Imágenes del post']);


        //Permissions lists to users
        Permission::create(['name' => 'users.index', 'display_name' => 'Listado de usuarios']);
        Permission::create(['name' => 'users.update', 'display_name' => 'Editar usuarios']);
        Permission::create(['name' => 'users.create', 'display_name' => 'Crear usuarios']);
        Permission::create(['name' => 'users.destroy', 'display_name' => 'Eliminar usuarios']);



        //Permissions lists to roles
        Permission::create(['name' => 'roles.index', 'display_name' => 'Listado de roles']);
        Permission::create(['name' => 'roles.update', 'display_name' => 'Editar roles']);
        Permission::create(['name' => 'roles.show', 'display_name' => 'Ver role']);
        Permission::create(['name' => 'roles.create', 'display_name' => 'Crear roles']);
        Permission::create(['name' => 'roles.destroy', 'display_name' => 'Eliminar roles']);


        //Permissions lists to permissions
        Permission::create(['name' => 'permissions.index', 'display_name' => 'Listado de permisos']);
        Permission::create(['name' => 'permissions.update', 'display_name' => 'Editar permisos']);
       
        
        

        //role admin
        $admin = Role::create(['name' => 'admin', 'display_name' => 'administrador']);
        //role guest
        $guest = Role::create(['name' => 'guest', 'display_name' => 'invitado']);

        //Assigned permissions to role

        $guest->givePermissionTo([
            'posts.create',
            'posts.images.index'
        ]);
        $admin->givePermissionTo([
            'posts.index',
            'posts.create',
            'posts.update',
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

        
        //User admin
        $user = User::create(['name'=>'admin','email'=>'admin@admin.com','password'=>bcrypt('123123')]);
        //User2 guest
        $user2 = User::create(['name'=>'Julio farias','email'=>'julio@julio.com','password'=>bcrypt('123123')]);
        //User3 guest
        $user3 = User::create(['name'=>'Javier','email'=>'javier@javier.com','password'=>bcrypt('123123')]);
        //Assigned role to user
        $user->assignRole('admin');
        $user2->assignRole('guest');
        $user3->assignRole('guest');
    }
}
