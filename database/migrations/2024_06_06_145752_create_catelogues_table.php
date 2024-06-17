<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCateloguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catelogues', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cover')->nullable();
            $table->boolean('is_active')->default(true); // Sửa giá trị mặc định ở đây
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
        Schema::dropIfExists('catelogues');
    }
}
