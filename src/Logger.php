<?php

namespace App;

class Logger
{
    private static ?string $logPath = null;

    public static function init(string $logPath): void
    {
        self::$logPath = $logPath;
    }

    public static function error(string $message, array $context = []): void
    {
        $line = date('c') . ' [ERROR] ' . $message;
        if (!empty($context)) {
            $line .= ' ' . json_encode($context);
        }
        $line .= "\n";

        error_log($message);

        if (self::$logPath !== null) {
            $dir = dirname(self::$logPath);
            if (!is_dir($dir)) {
                @mkdir($dir, 0775, true);
            }
            @file_put_contents(self::$logPath, $line, FILE_APPEND | LOCK_EX);
        }
    }

    public static function info(string $message, array $context = []): void
    {
        $line = date('c') . ' [INFO] ' . $message;
        if (!empty($context)) {
            $line .= ' ' . json_encode($context);
        }
        $line .= "\n";

        if (self::$logPath !== null) {
            $dir = dirname(self::$logPath);
            if (!is_dir($dir)) {
                @mkdir($dir, 0775, true);
            }
            @file_put_contents(self::$logPath, $line, FILE_APPEND | LOCK_EX);
        }
    }
}
