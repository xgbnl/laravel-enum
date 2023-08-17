<?php

declare(strict_types=1);

namespace Elephant\Enums;

use Elephant\Enums\Command\Command;
use Illuminate\Support\ServiceProvider;

class EnumServiceProvider extends ServiceProvider
{

    protected array $commands = [
        Command::class,
    ];

    public function boot(): void
    {
        $this->commands($this->commands);
    }
}