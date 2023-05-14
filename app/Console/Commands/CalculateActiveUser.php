<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CalculateActiveUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larabbs:calculate-active-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate active users';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(User $user)
    {
        // 在命令行打印一行信息
        $this->info("Start calculating...");

        $user->calculateAndCacheActiveUsers();

        $this->info("Generated successfully!");
    }
}
