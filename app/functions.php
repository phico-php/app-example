<?php
/**
 * Define your app helper functions here.
 *
 * Any functions defined here will override the
 * built-in Phico functions, you may want to
 * copy paste their definitions here and modify them.
 */

function view(): \Phico\Blade\Blade
{
    $blade = new \Phico\Blade\Blade();
    return $blade
        ->paths('cache', 'storage/views')
        ->paths('views', [
            'app/views'
        ])->namespaces([
                'phico' => 'app/Phico/Views',
            ]);
}
