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
        DB::statement("CREATE TABLE profile(
            id integer,
            first_name text,
            last_name text,
            tanggal_lahir date,
            foto text,         
            foreign key(id)
            references user(id)
        )");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::delete("DELETE FROM profile");
    }
};
