<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_wallets', function (Blueprint $table) {
            $table->increments('id');
            $table->char('ewallet_number', 12)->unique();
            $table->integer('customer_id');
            $table->enum('status', ['enable', 'disable', 'lock', 'pending'])->default('pending');
            $table->integer('balance')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('e_wallets');
    }
}
