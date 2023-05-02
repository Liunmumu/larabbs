<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories = [
            [
                'name'        => 'Share',
                'description' => 'Share creation, share discovery',
            ],
            [
                'name'        => 'Course',
                'description' => 'Course materials and learning experiences',
            ],
            [
                'name'        => 'Q&A',
                'description' => 'Please be kind and help each other',
            ],
            [
                'name'        => 'Announcement',
                'description' => 'Site announcements',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('categories')->truncate();
    }
};
