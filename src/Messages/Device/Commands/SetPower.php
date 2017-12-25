<?php declare(strict_types=1);

namespace DaveRandom\LifxLan\Messages\Device\Commands;

use DaveRandom\LifxLan\Messages\CommandMessage;

final class SetPower extends CommandMessage
{
    public const MESSAGE_TYPE_ID = 21;
    public const PAYLOAD_SIZE = 2;

    private $level;

    public function __construct(int $level)
    {
        parent::__construct();

        $this->level = $level;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function getTypeId(): int
    {
        return self::MESSAGE_TYPE_ID;
    }
}