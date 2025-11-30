<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(LaptopSeeder::class);
        $this->call(GraphicCardSeeder::class);
        $this->call(MonitorSeeder::class);
        $this->call(PrinterSeeder::class);
    }
}
