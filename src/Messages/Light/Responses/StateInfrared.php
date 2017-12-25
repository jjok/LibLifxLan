<?php declare(strict_types=1);

namespace DaveRandom\LifxLan\Messages\Light\Responses;

use DaveRandom\LifxLan\Messages\ResponseMessage;

final class StateInfrared extends ResponseMessage
{
    public const MESSAGE_TYPE_ID = 122;
    public const PAYLOAD_SIZE = 2;

    private $brightness;

    public function __construct(int $brightness)
    {
        parent::__construct();

        $this->brightness = $brightness;
    }

    public function getBrightness(): int
    {
        return $this->brightness;
    }

    public function getTypeId(): int
    {
        return self::MESSAGE_TYPE_ID;
    }
}
