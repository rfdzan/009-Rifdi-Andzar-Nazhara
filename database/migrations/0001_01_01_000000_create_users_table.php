<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $create_user = DB::statement("CREATE TABLE IF NOT EXISTS user(
            id integer primary key auto_increment,
            username varchar(32),
            email text,
            password text
        )");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $delete_user_table = DB::delete("DELETE FROM user");
    }
};
