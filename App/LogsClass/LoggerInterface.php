<?php

namespace App\LogsClass;

interface LoggerInterface
{
    public function log($level, $message, $id);
}
