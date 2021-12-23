<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Helpers\Helper;

class HelperTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_getting_distance()
    {
        $distance = Helper::getDistance(51.92893, -10.27699, 53.3340285, -6.2535495);
        $this->assertEquals(313.21118210984713, $distance);
    }
}
