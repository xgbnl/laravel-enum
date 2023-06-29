<?php

declare(strict_types=1);

namespace Dingo\Enums\Command;

use Illuminate\Console\GeneratorCommand;

class Command extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:Enums';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Enums';

    protected $type = 'Enums';

    protected function getDefaultNameSpace($rootNamespace): string
    {
        return $rootNamespace . '\\' . 'Enumss';
    }

    protected function getStub(): string
    {
        return __DIR__ . '/' . $this->type . '.stub';
    }
}