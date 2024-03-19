<?php

namespace Battis\PHPUnit\Sessions;

use PHPUnit\Runner\AfterLastTestHook;

/**
 * @package battis\phpunit-sessions
 */
class Extension implements AfterLastTestHook
{
    public function executeAfterLastTest(): void
    {
        ob_flush();
    }
}
