<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     * @return void
     */
    public function run() {

        $permissions = [
            'Create Post',
            'Edit Post',
            'Delete Post',
            'Administer roles & permissions',
        ];


        foreach ($permissions as $permission) {

            Permission::create(['name' => $permission]);
        }
    }
}
