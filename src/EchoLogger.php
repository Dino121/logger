<?php

namespace Dino121\Logger;

class EchoLogger implements ILogger
{
    public function LogEntry(string $line): void
    {
       echo '[LOG]: ' . $line . "\n";
    }
}


