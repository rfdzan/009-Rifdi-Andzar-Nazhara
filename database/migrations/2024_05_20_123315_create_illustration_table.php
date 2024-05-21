<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

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
            generated_unique_name text,
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
