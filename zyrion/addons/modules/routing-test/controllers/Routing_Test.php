<?php

declare(strict_types=1);

final class Routing_Test
{
    public function index(): void
    {
        zyrion()->views->render(
            module: 'routing-test',
            view: 'index',
            data: [
                'title' => 'Routing Test',
                'message' => 'The routing-test module index route is working.',
            ],
            layout: zyrion()->themes->defaultLayout(),
        );
    }

    public function hello(): void
    {
        zyrion()->views->render(
            module: 'routing-test',
            view: 'hello',
            data: [
                'title' => 'Routing Test Hello',
                'message' => 'The /routing-test/hello route is working.',
            ],
            layout: zyrion()->themes->defaultLayout(),
        );
    }

    public function nested(): void
    {
        zyrion()->views->render(
            module: 'routing-test',
            view: 'nested',
            data: [
                'title' => 'Routing Test Nested',
                'message' => 'The /routing-test/nested route is working.',
            ],
            layout: zyrion()->themes->defaultLayout(),
        );
    }
}