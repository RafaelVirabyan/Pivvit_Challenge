<?php

namespace Tests\Unit;

use App\Models\Campaign;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;


class DonationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_donation_create()
    {
        $compainId = Campaign::first()->id;

        $this->withHeader('Accept', 'application/json')
        ->post('api/donations', [
            'campaignID' => $compainId,
            'donorName' => 'Test Name',
            'amount' => '200',
        ])
        ->assertStatus(200);
    }

    public function test_donations_list()
    {
        $response = $this->get('api/donations');

        $response->assertStatus(200);

    }
}
