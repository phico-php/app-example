<?php

namespace App\Phico\Commands;

use Phico\Cli\{Args, Cli};

class Example extends Cli
{

    public function test(Args $args): void
    {
        $this->success('Made it!');
    }
}
