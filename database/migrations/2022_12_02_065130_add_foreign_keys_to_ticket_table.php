<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ticket', function (Blueprint $table) {
            $table->foreign('concert_id', 'fk_ticket_to_concert')->references('id')->on('concert')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('order_id', 'fk_ticket_to_order')->references('id')->on('order')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ticket', function (Blueprint $table) {
            $table->dropForeign('fk_ticket_to_concert');
            $table->dropForeign('fk_ticket_to_order');

            
        });
    }
}
