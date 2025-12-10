<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('book_id');
            $table->string('title', 1000);
            $table->string('stock_alert', 1000)->default('0');
            $table->string('author', 1000);
            $table->text('description');
            $table->string('ISBN', 255)->nullable()->unique();
            $table->integer('category_id')->unsigned();
            $table->integer('overdue_price')->unsigned();
             $table->integer('lost_price')->unsigned();
            $table->integer('added_by')->unsigned();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
