<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeSerivice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name : The name of the service}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'here Service command description description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        
        $name =$this->argument('name');
        $serviceName=class_basename($name);

        //create directory if not exist
        $directory=app_path('Service');
        if(!File::exists($directory)){
            File::makeDirectory($directory,0755,true);
        }

        //create Servie fiel
        $path=$directory.'/'.$serviceName.'.php';
        
        if(File::exists($path)){
            $this->error("Service {$serviceName} is alrdy exist");
            return;
        }
        //Generate boiler templet
        $template=$this->generateTemplate($serviceName);
        File::put($path,$template);
        $this->info("Serive create Successfully {$serviceName}");
        $this->line("Path: {$path}");

    }

    protected function generateTemplate($serviceName){

        $content="<?php
namespace App\Service;
class $serviceName {

    public function __construct(){
        //  you constructure code goes here
    }
    // other mthod gees here
}";
            return $content;
    }
}
