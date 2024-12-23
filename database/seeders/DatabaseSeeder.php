<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                SeoDataSeeder::class,
                BeforeAfterSeeder::class,
                PriceSeeder::class,
                ServiceSeeder::class,
                SaleSeeder::class,
                ContactSeeder::class,
                DoctorSeeder::class,
                PageSeeder::class,
                ReviewSeeder::class,
                ReviewSeederGis::class,
                MenuSeeder::class,
                UserSeeder::class,
                UploadSeeder::class,

            ]
        );
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
