<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mov\Genres\GenresCreator;

class genres extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'genres:make';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Populates Genres Table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $genres = GenresCreator::create();
        $imploded = implode(', ', $genres);
        $count = count($genres);

        $this->info("{$count} genres successfully added to DB:");
        $this->info($imploded);
    }
}
