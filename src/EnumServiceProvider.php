<?php

declare(strict_types=1);

namespace Liveweb\Enum;

use Illuminate\Support\ServiceProvider;
use Liveweb\Enum\Command\Command;

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