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
    	//Users
        Permission::create([
        	'name' => 'Navegar usuarios',
        	'slug' => 'users.index',
        	'description' => 'Lista e navega todos os usuarios do sistema',
        ]);

        Permission::create([
        	'name' => 'Ver detalhes do usuario',
        	'slug' => 'users.show',
        	'description' => 'Ver em detalhe cada usuario do sistema',
        ]);

        Permission::create([
        	'name' => 'Alterar usuarios',
        	'slug' => 'users.edit',
        	'description' => 'Editar qualquer dado de um usuario do sistema',
        ]);

        Permission::create([
        	'name' => 'Excluir usuarios',
        	'slug' => 'users.destroy',
        	'description' => 'Excluir qualquer usuario do sistema',
        ]);

        //Roles
        Permission::create([
        	'name' => 'Navegar roles',
        	'slug' => 'roles.index',
        	'description' => 'Lista e navega todos os roles do sistema',
        ]);

        Permission::create([
        	'name' => 'Ver detalhes do roles',
        	'slug' => 'roles.show',
        	'description' => 'Ver em detalhe cada rol do sistema',
        ]);

        Permission::create([
        	'name' => 'Alterar roles',
        	'slug' => 'roles.create',
        	'description' => 'Editar qualquer dado de um rol do sistema',
        ]);

        Permission::create([
        	'name' => 'Alterar roles',
        	'slug' => 'roles.edit',
        	'description' => 'Editar qualquer dado de um rol do sistema',
        ]);

        Permission::create([
        	'name' => 'Excluir roles',
        	'slug' => 'roles.destroy',
        	'description' => 'Excluir qualquer rol do sistema',
        ]);

        //Produtos
        Permission::create([
        	'name' => 'Navegar permissions',
        	'slug' => 'permissions.index',
        	'description' => 'Lista e navega todos os permissions do sistema',
        ]);

        Permission::create([
        	'name' => 'Ver detalhes do permissions',
        	'slug' => 'permissions.show',
        	'description' => 'Ver em detalhe cada produto do sistema',
        ]);

        Permission::create([
        	'name' => 'Alterar permissions',
        	'slug' => 'permissions.create',
        	'description' => 'Editar qualquer dado de um produto do sistema',
        ]);

        Permission::create([
        	'name' => 'Alterar permissions',
        	'slug' => 'permissions.edit',
        	'description' => 'Editar qualquer dado de um produto do sistema',
        ]);

        Permission::create([
        	'name' => 'Excluir permissions',
        	'slug' => 'permissions.destroy',
        	'description' => 'Excluir qualquer produto do sistema',
        ]);

        //Peoples
        Permission::create([
            'name' => 'Navegar peoples',
            'slug' => 'peoples.index',
            'description' => 'Lista e navega todos os peoples do sistema',
        ]);

        Permission::create([
            'name' => 'Ver detalhes do peoples',
            'slug' => 'peoples.show',
            'description' => 'Ver em detalhe cada produto do sistema',
        ]);

        Permission::create([
            'name' => 'Alterar peoples',
            'slug' => 'peoples.create',
            'description' => 'Editar qualquer dado de um produto do sistema',
        ]);

        Permission::create([
            'name' => 'Alterar peoples',
            'slug' => 'peoples.edit',
            'description' => 'Editar qualquer dado de um produto do sistema',
        ]);

        Permission::create([
            'name' => 'Excluir peoples',
            'slug' => 'peoples.destroy',
            'description' => 'Excluir qualquer produto do sistema',
        ]);

        //Courses
        Permission::create([
            'name' => 'Navegar courses',
            'slug' => 'courses.index',
            'description' => 'Lista e navega todos os courses do sistema',
        ]);

        Permission::create([
            'name' => 'Ver detalhes do courses',
            'slug' => 'courses.show',
            'description' => 'Ver em detalhe cada produto do sistema',
        ]);

        Permission::create([
            'name' => 'Alterar courses',
            'slug' => 'courses.create',
            'description' => 'Editar qualquer dado de um produto do sistema',
        ]);

        Permission::create([
            'name' => 'Alterar courses',
            'slug' => 'courses.edit',
            'description' => 'Editar qualquer dado de um produto do sistema',
        ]);

        Permission::create([
            'name' => 'Excluir courses',
            'slug' => 'courses.destroy',
            'description' => 'Excluir qualquer produto do sistema',
        ]);
    }
}
