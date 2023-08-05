<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->json('structure')->default(json_encode([
                'stages' => [
                    0 => [
                        'name' => 'Новые',
                        'bg_color' => '#fff',
                        'is_default' => true,
                    ],
                    1 => [
                        'name' => 'В работе',
                        'bg_color' => '#fff',
                    ],
                    2 => [
                        'name' => 'Завершенные',
                        'bg_color' => '#fff',
                    ],
                ],
            ]));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stages');
    }
};
