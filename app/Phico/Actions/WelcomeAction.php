<?php

declare(strict_types=1);

namespace App\Phico\Actions;

use Phico\Action\Action;
use Phico\Http\{Request, Response};


class WelcomeAction extends Action
{
    public function handle(Request $request): Response
    {
        return response()
            ->html(view()->render('phico::welcome'));
    }
}
