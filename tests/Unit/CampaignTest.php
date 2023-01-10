<?php

namespace Tests\Unit;

use Tests\TestCase;

class CampaignTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_campaigns()
    {
        $response = $this->get('api/campaigns');

        $response->assertStatus(200);
    }
}
