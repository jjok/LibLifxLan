<?php declare(strict_types=1);

namespace DaveRandom\LibLifxLan\Tests\Header\x64;

use DaveRandom\LibLifxLan\Header\Frame;
use DaveRandom\LibLifxLan\Tests\x64Test;
use const DaveRandom\LibLifxLan\UINT32_MAX;
use const DaveRandom\LibLifxLan\UINT32_MIN;

final class FrameTest extends \DaveRandom\LibLifxLan\Tests\Header\FrameTest
{
    use x64Test;

    /**
     * @expectedException \DaveRandom\LibLifxLan\Exceptions\InvalidValueException
     */
    public function testSourcePropertyValueTooLow(): void
    {
        new Frame(0, 0, false, false, 0, UINT32_MIN - 1);
    }

    /**
     * @expectedException \DaveRandom\LibLifxLan\Exceptions\InvalidValueException
     */
    public function testSourcePropertyValueTooHigh(): void
    {
        new Frame(0, 0, false, false, 0, UINT32_MAX + 1);
    }
}
