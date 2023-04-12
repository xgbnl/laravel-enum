<?php

declare(strict_types=1);

namespace Xgbnl\Enum\Command;

use Illuminate\Console\GeneratorCommand;

class Command extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:enum';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new enum.';

    protected $type = 'enum';

    protected function getDefaultNameSpace($rootNamespace): string
    {
        return $rootNamespace . '\\' . 'Enums';
    }

    protected function getStub(): string
    {
        return __DIR__ . $this->type . '.stub';
    }
}