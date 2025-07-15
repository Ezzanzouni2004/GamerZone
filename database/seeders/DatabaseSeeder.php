<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Player;
use App\Models\Role;
use App\Models\Tournament;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['admin', 'organizer', 'player'];
        foreach ($roles as $roleName) {
            Role::firstOrCreate(['name' => $roleName]);
        }

        User::factory(10)->create()->each(function ($user) use ($roles) {
            // لكل مستخدم نعطيه أدوار عشوائية حسب الشروط
            if ($user->id <= 3) {
                // 3 أول Admin
                $user->roles()->attach(Role::where('name', 'admin')->first());
            } elseif ($user->id <= 6) {
                // 3 بعدهم Organizer
                $user->roles()->attach(Role::where('name', 'organizer')->first());
            } else {
                // باقيهم Player
                $user->roles()->attach(Role::where('name', 'player')->first());
            }
        });

        Tournament::factory(5)->create();

        Player::factory(15)->create();
    }
}
