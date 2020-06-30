<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = DB::table('posts')->get();
        if(count($count) == 0) {
            DB::table('posts')->insert([
                'user_id' => '1',
                'title' => '2mundos Live',
                'description' => '2mundos',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
