<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Innovillage;
use App\Models\Intern;
use App\Models\Journal;
use App\Models\Member;
use App\Models\News;
use App\Models\Partner;
use App\Models\Shop;
use App\Models\Training;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\TrainingFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            "name" => "Admin",
            "username" => "coe_admin",
            "password" => bcrypt("password123"),
        ]);
        $this->call(NewsCategoriesSeeder::class);
        News::factory(10)->create();
        Event::factory(20)->create();
        Member::factory(10)->create();
        $this->call(ProjectSeeder::class);
    }
}
