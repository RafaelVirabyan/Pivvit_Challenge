<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Test Campaign'
            ],
            [
                'title' => 'Test Campaign 1'
            ],
            [
                'title' => 'Test Campaign 2'
            ],
            [
                'title' => 'Test Campaign 3'
            ]
        ];

        \DB::table('campaigns')->insert($data);
    }
}
