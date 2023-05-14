<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class SyncUserActivedAt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larabbs:sync-user-actived-at';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Synchronize the last login time from Redis to the database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(User $user)
    {
        $user->syncUserActivedAt();
        $this->info("Synchronization successful!");
    }
}
