<?php



namespace IgorSiqueira\LaravelGPT\Commands;
use Illuminate\Console\Command;

class LaravelGPTCommand extends Command
{
    protected $signature = 'laravel-gpt';
    protected $description = 'Comando personalizado do Laravel-GPT';
    
    // Resto do código...

    public function handle()
    {
        $comand = $this->option('comand');
        $model = $this->option('model');
     
        $this->info('Classe de modelo gerada com sucesso!');
    }
}
