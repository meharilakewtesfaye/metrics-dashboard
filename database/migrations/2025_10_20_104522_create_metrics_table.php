<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('metrics', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('mrr', 10, 2);
            $table->decimal('arpu', 10, 2);
            $table->integer('active_users');
            $table->integer('new_signups');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('metrics');
    }
};