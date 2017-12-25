<?php declare(strict_types=1);

namespace DaveRandom\LifxLan\Messages\Device\Commands;

use DaveRandom\LifxLan\DataTypes\Group;
use DaveRandom\LifxLan\Messages\CommandMessage;

final class SetGroup extends CommandMessage
{
    public const MESSAGE_TYPE_ID = 52;
    public const PAYLOAD_SIZE = 28;

    private $group;

    public function __construct(Group $group)
    {
        parent::__construct();

        $this->group = $group;
    }

    public function getGroup(): Group
    {
        return $this->group;
    }

    public function getTypeId(): int
    {
        return self::MESSAGE_TYPE_ID;
    }
}