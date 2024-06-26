<?php

declare(strict_types=1);

namespace App\Welcome\Actions;

use Phico\Action\Action;
use Phico\Http\{Request, Response};


class IndexAction extends Action
{
    public function use(): array
    {
        return [];
    }

    public function handle(Request $request): Response
    {
        return response()
            ->html(view()->render('welcome::index'));
    }
}
