<?php
namespace Modules\Core\Console\Commands;


use Modules\Core\Console\Generators\ModuleGenerator;
use Nwidart\Modules\Commands\ModuleMakeCommand as Command;
use Nwidart\Modules\Contracts\ActivatorInterface;

class ModuleMakeCommand extends Command
{

    /**
     * Execute the console command.
     */
    public function handle() : int
    {
        $names = $this->argument('name');
        $success = true;

        foreach ($names as $name) {
            $code = with(new ModuleGenerator($name))
                ->setFilesystem($this->laravel['files'])
                ->setModule($this->laravel['modules'])
                ->setConfig($this->laravel['config'])
                ->setActivator($this->laravel[ActivatorInterface::class])
                ->setConsole($this)
                ->setForce($this->option('force'))
                ->setPlain($this->option('plain'))
                ->setActive(!$this->option('disabled'))
                ->generate();

            if ($code === E_ERROR) {
                $success = false;
            }
        }

        return $success ? 0 : E_ERROR;
    }

}
