<?php

namespace TDD\Tests;

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use TDD\sumClass;

class sumTest extends TestCase
{
    /**
     * @dataProvider provideInput
     */

    public function testSum($input, $expected)
    {
        $numbers = [1, 2, 3, 4, 5];
        $sum = sumClass::sum($numbers);
        $this->assertEquals(15, $sum);
    }

    public static function provideInput()
    {
        return [
            [[1, 2, 3, 4, 5], 15],
            [[-1, 1], 0],
            [[-1, -1], -2],
            [[0, 0], 0],
            [[0, 1], 1],
        ];
    }
}
