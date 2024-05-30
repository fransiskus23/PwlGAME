<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menjalankan factory untuk membuat 10 user
        // User::factory(10)->create();

        // Membuat satu user dengan data khusus
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('asdasd'), // Password yang di-hash
        ]);

        // Memanggil seeder ProductsTableSeeder
        $this->call(ProductsTableSeeder::class);
    }
}
