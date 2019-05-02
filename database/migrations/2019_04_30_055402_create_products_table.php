<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->text('featuredImage')->nullable();
            $table->integer('productType')->default(1)->comment('1 for website, 2 for video, 3 for graphics, 4 for Mobile App');
            $table->boolean('isApproved')->default(0);
            $table->text('productLink')->nullable();
            $table->string('hashedLink')->nullable();
            $table->boolean('isAnonymous')->default(1);
            $table->boolean('closedComment')->default(0);
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
        Schema::dropIfExists('products');
    }
}
