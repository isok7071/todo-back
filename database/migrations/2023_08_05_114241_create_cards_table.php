<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150)->default('Название карточки');
            //Json так как в детальном описании будет текст из WISIWYG
            $table->json('detail_text')->nullable();
            if (Schema::hasTable('boards')) {
                $table->foreignId('board_id')
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            }
            $table->unsignedInteger('sort')->default(0);
            $table->string('bg_color', 10)->nullable();
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
        Schema::dropIfExists('cards');
    }
};