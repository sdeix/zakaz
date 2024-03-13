<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("users", function (Blueprint $table) {
            $table->Increments("id");
            $table->string("name",255)->nullable(false);
            $table->string("surname",255)->nullable(false);
            $table->string("password",255)->nullable(false);
            $table->string("email",255)->nullable(false)->unique('email');
            $table->dateTimeTz('created_at')->nullable();
            $table->dateTimeTz('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
