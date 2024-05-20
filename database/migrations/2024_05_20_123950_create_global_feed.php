<?php

use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $create_global_feed = DB::statement("CREATE TABLE IF NOT EXISTS global_feed(
            id integer primary key auto_increment,
            user_id integer,
            page_link text,
            foreign key(user_id)
            references user(id)
        )");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::delete("DELETE FROM global_feed");
    }
};
