<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeValidator extends Command
{
    // Command signature
    protected $signature = 'make:validator {name}';
    
    // Command description
    protected $description = 'Create a new service class in app/Services';

    public function handle()
    {
        $name = $this->argument('name'); // Get the service name from the command
        $path = app_path("Validators/{$name}.php"); // Set the path for the service file

        // Check if the service already exists
        if (File::exists($path)) {
            $this->error("Validator {$name} already exists!");
            return;
        }

        // Ensure the Services directory exists
        File::ensureDirectoryExists(app_path('Validators'));

        // Service class stub
        $stub = <<<EOT
        <?php

        namespace App\Validators;

        class {$name}
        {
            public function __construct() {}

            public function exampleMethod()
            {
                // Your service logic here
            }
        }
        EOT;

        // Create the service file
        File::put($path, $stub);
        $this->info("Validator {$name} created successfully.");
    }
}
