<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TypeDB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userID');
            $table->string('category',20);
            $table->enum('in_exType', ['income', 'expense']);
            $table->text('notes')->nullable();
            $table->double('value');
            $table->date('date');
            $table->boolean('active')->default(true);
            $table->timestamps(); // Created_at and updated_at columns

            $table->foreign('userID')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type');
    }
}
