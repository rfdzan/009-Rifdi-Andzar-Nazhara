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
        DB::statement("CREATE TABLE illustration(
            id integer primary key auto_increment,
            user_id integer,
            title varchar(140),
            timestamp datetime,
            source text,
            page_link text,
            category varchar(45),
            foreign key(user_id)     
            references user(id)
        )");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::delete("DELETE FROM illustration");
    }
};
