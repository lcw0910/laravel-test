<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';

            $table->bigIncrements('id');
            $table->string('mall_id', 45);
            $table->tinyInteger('shop_no');
            $table->string('name', 45);
            $table->boolean('solup_flag');
            $table->enum('language_code', ['ko', 'en', 'ja', 'zh-cn', 'zh-tw', 'es', 'ep', 'pt'])
                ->default('ko');

            $table->timestamps();

            $table->unique(['mall_id', 'shop_no'], 'shops_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
