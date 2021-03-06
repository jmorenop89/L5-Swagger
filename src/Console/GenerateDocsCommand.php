<?php namespace Darkaonline\L5Swagger\Console;

use Darkaonline\L5Swagger\Generator;
use Illuminate\Console\Command;


class GenerateDocsCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'l5-swagger:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Regenerate docs";

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->info("Regenerating docs");
        Generator::generateDocs();
    }

}
