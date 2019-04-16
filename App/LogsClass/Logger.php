<?php

namespace App\LogsClass;

class Logger implements LoggerInterface
{
    public function log($level, $message, $id)
    {
        $currentDate = date("Y-m-d H:i:s") ;
        $dateFilename = date('Y_m_d_H');
        $place = fopen("../Logs/$dateFilename.log", "a");
        $contentLog = "[$currentDate], Level: $level, Message: $message, Id: $id" . PHP_EOL;

        fwrite($place, $contentLog);
        fclose($place);
    }
}