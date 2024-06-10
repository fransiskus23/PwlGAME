<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed database aplikasi.
     */
    public function run(): void
    {
        // Pastikan tidak ada pengguna dengan email yang sama
        User::where('email', 'test@example.com')->delete();

        // Buat pengguna tes
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('asdasd'), // Password yang di-hash
        ]);

        // Panggil seeder lainnya
        $this->call(ProductsTableSeeder::class);
    }
}
