<?php

use Illuminate\Database\Seeder;

class RoomTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms_teams')->truncate();
    }
}
