<?php

namespace Database\Seeders;

use App\Models\FAQ;
use App\Models\FaqCategory;
use App\Models\Klant;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory()->create([
            'name' => 'Nick',
            'email' => 'info@webronckhorst.nl'
        ]);
        User::factory(19)->create();
        Ticket::factory(500)->create(
           [
           'device' => "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80 Safari/537.36",]
        );
        FaqCategory::factory(7)->create();
        FAQ::factory(25)->create();
        foreach (User::all() as $User) {
            Klant::factory(1)->create(['user_id' => $User->id]);
        }
    }
}
