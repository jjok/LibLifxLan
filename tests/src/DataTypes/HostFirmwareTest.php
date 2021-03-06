<?php declare(strict_types=1);

namespace DaveRandom\LibLifxLan\Tests\DataTypes;

use DaveRandom\LibLifxLan\DataTypes\HostFirmware;
use PHPUnit\Framework\TestCase;
use const DaveRandom\LibLifxLan\UINT32_MAX;
use const DaveRandom\LibLifxLan\UINT32_MIN;

class HostFirmwareTest extends TestCase
{
    public function testBuildProperty(): void
    {
        $build = new \DateTimeImmutable;
        $this->assertSame((new HostFirmware($build, 0))->getBuild()->format('u U'), $build->format('u U'));
    }

    public function testVersionPropertyValidValues(): void
    {
        foreach ([UINT32_MIN, 42, UINT32_MAX] as $version) {
            $this->assertSame((new HostFirmware(new \DateTimeImmutable, $version))->getVersion(), $version);
        }
    }
}
