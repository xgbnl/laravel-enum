<?php

declare(strict_types=1);

namespace Dingo\Enums;

use Dingo\Enums\Command\Command;

class EnumServiceProvider extends \Illuminate\Support\ServiceProvider
{

    protected array $commands = [
        Command::class,
    ];

    public function boot(): void
    {
        $this->commands($this->commands);
    }
}