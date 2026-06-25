<?php

declare(strict_types=1);

final class Super_Simple
{
    public function index(): void
    {
        zyrion()->views->render(
            'super-simple',
            'index',
            [
                'title' => 'Zyrion Alias Test',
                'message' => 'Container aliases are working nicely in  Example controller.',
            ],
        );
    }
}