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
        	'name' => 'Navegar products',
        	'slug' => 'products.index',
        	'description' => 'Lista e navega todos os products do sistema',
        ]);

        Permission::create([
        	'name' => 'Ver detalhes do products',
        	'slug' => 'products.show',
        	'description' => 'Ver em detalhe cada produto do sistema',
        ]);

        Permission::create([
        	'name' => 'Alterar products',
        	'slug' => 'products.create',
        	'description' => 'Editar qualquer dado de um produto do sistema',
        ]);

        Permission::create([
        	'name' => 'Alterar products',
        	'slug' => 'products.edit',
        	'description' => 'Editar qualquer dado de um produto do sistema',
        ]);

        Permission::create([
        	'name' => 'Excluir products',
        	'slug' => 'products.destroy',
        	'description' => 'Excluir qualquer produto do sistema',
        ]);
    }
}
