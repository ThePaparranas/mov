<?php

namespace App\Mov;

use App\Mov\Events\ConsoleMessageEvent;

class ConsoleWriter
{
    /**
     * Emit and log a message for pseudo-console
     *
     * @param string      $msg    Message to broadcast
     * @param null|string $type   Type: info|success|error
     */
    public static function broadcast($msg, $type = null)
    {
        if (isset($type)) {
            $msg = json_encode([
                'type' => $type,
                'message' => $msg,
            ]);
        }

        broadcast(new ConsoleMessageEvent($msg));
    }
}
