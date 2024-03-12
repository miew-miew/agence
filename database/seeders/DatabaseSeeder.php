<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Option;
use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::factory()->create([
            'email' => 'nyaina@gmail.com'
        ]);
        $options = Option::factory(10)->create();
        Property::factory(50)
        ->hasAttached($options->random(3))
        ->create();
    }
}
