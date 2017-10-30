<?php

use Illuminate\Database\Seeder;

class BlacklistKeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\BlacklistKeyword::class, 5)->create();
    }
}
