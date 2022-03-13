<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Laravel\Jetstream\Jetstream;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'System Administrator',
            'email' => 'OnlineShopAdmin@admin.com',
            'password' => Hash::make('password'),
        ]);

        Jetstream::role('super-admin', 'System Administrator', [
            'product::create',
            'product::read',
            'product::high_read',
            'product::update',
            'product::high_update',
            'product::delete',
            'product::destroy',
            'product::unlist',
            'product::relist',
            'product::add_to_cart',
            'product::remove_from_cart',
            'product_variant::create',
            'product_variant::read',
            'product_variant::high_read',
            'product_variant::update',
            'product_variant::high_update',
            'product_variant::delete',
            'product_variant::destroy',
            'product_variant::unlist',
            'product_variant::relist',
            'product_category::create',
            'product_category::read',
            'product_category::high_read',
            'product_category::update',
            'product_category::high_update',
            'product_category::delete',
            'product_category::destroy',
            'product_category::unlist',
            'product_category::relist',
            'order::create',
            'order::read',
            'order::high_read',
            'order::update',
            'order::high_update',
            'order::delete',
            'order::destroy',
            'order::cancel',
            'order::redirect',
            'order::recall',
            'order::resume',
            'user::create',
            'user::read',
            'user::high_read',
            'user::update',
            'user::high_update',
            'user::delete',
            'user::destroy',
            'user::unlist',
            'user::relist',
        ]);
    }
}
