<?php

namespace Battis\PHPUnit\Sessions;

use PHPUnit\Runner\AfterLastTestHook;

/**
 * @package battis\phpunit-sessions foo bar baz testings
 */
class Extension implements AfterLastTestHook
{
    public function executeAfterLastTest(): void
    {
        ob_flush();
    }
}
