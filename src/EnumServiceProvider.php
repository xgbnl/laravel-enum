<?php

declare(strict_types=1);

namespace Dingo\Enum;

use Dingo\Enum\Command\Command;
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