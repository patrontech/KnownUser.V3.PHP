<?php

namespace QueueIT\KnownUserV3\SDK;

interface IEnqueueTokenProvider
{
    public function getEnqueueToken($waitingRoomId);
}
