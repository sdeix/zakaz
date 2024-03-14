<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketsTable extends Migration {
    public function up() {
        Schema::create('baskets', function (Blueprint $table) {
            $table->id();
            $table->dateTimeTz('created_at')->nullable();
            $table->dateTimeTz('updated_at')->nullable();
        });
    }

    public function down() {
        Schema::dropIfExists('baskets');
    }
}
