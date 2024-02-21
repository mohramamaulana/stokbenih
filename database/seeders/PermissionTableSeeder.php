<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'varietas-list',
            'varietas-create',
            'varietas-edit',
            'varietas-delete',

            'produsen-list',
            'produsen-create',
            'produsen-edit',
            'produsen-delete',

            'kelasbenih-list',
            'kelasbenih-create',
            'kelasbenih-edit',
            'kelasbenih-delete',

            'stok-list',
            'stok-create',
            'stok-edit',
            'stok-delete',

            'penyaluran-list',
            'penyaluran-create',
            'penyaluran-edit',
            'penyaluran-delete',
         ];
      
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
     }
}
