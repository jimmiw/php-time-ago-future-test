<?php

namespace Westsworld\TimeAgo\Future\Test;

use PHPUnit\Framework\TestCase;
use Westsworld\TimeAgo\Future\Language\Translations\En as FutureEn;

class TestFutureDates extends TestCase
{
    public function testFuture()
    {
        // creating a date in the future
        $date = new \DateTime();
        $date->add(new \DateInterval('P2D'));

        $timeAgo = new \Westsworld\TimeAgo(new FutureEn());
        $dateDifference = $timeAgo->dateDifference($date);
        $this->assertEquals(2, $dateDifference['days']);
        
        $dateInWords = $timeAgo->inWords($date);
        $this->assertEquals('2 days to go', $dateInWords);
    }
}
