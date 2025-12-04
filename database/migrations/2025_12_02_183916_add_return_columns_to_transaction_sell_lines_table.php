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
        Schema::table('transaction_sell_lines', function (Blueprint $table) {
            $table->decimal('quantity_returned_good', 20, 4)->default(0)->after('quantity_returned');
            $table->decimal('quantity_returned_damage', 20, 4)->default(0)->after('quantity_returned_good');
            $table->decimal('quantity_returned_missing', 20, 4)->default(0)->after('quantity_returned_damage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaction_sell_lines', function (Blueprint $table) {
            //
        });
    }
};
