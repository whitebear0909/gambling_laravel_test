<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Classes\Affiliates;

class AffiliatesTest extends TestCase
{
    private $source_str = '{"latitude": "52.986375", "affiliate_id": 12, "name": "Yosef Giles", "longitude": "-6.043701"}
    {"latitude": "51.92893", "affiliate_id": 1, "name": "Lance Keith", "longitude": "-10.27699"}
    {"latitude": "51.8856167", "affiliate_id": 2, "name": "Mohamed Bradshaw", "longitude": "-10.4240951"}';

    /**
     * A test for initializing Affiliates.
     *
     * @return void
     */
    public function test_creating_affiliates()
    {        
        $affiliates = new Affiliates();
        $this->assertEquals([], $affiliates->getAffiliates());
    }

    /**
     * A test for initializing Affiliates.
     *
     * @return void
     */
    public function test_initializing_affiliates()
    { 
        $affiliates = new Affiliates();
        $affiliates->create($this->source_str);
        $affiliates_count = count($affiliates->getAffiliates());
        $this->assertEquals(3, $affiliates_count);
        
        $affiliates_arr = $affiliates->getAffiliates();
        $this->assertEquals("Yosef Giles", $affiliates_arr[0]["name"]);
    }

    /**
     * A test for getting Affiliates by distance limit.
     *
     * @return void
     */
    public function test_getting_affiliates_by_distance()
    {        
        $affiliates = new Affiliates();
        $affiliates->create($this->source_str);
        $affiliates->getAffiliatesByDistance(53.3340285, -6.2535495);

        $this->assertEquals(1, count($affiliates->getAffiliates()));
    }
}
