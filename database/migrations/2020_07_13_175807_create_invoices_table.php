<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->foreignId('customer_id')->constrained();
            $table->string('first_name', 75);
            $table->string('last_name', 75);
            $table->string('email', 255);
            $table->string('phone', 25);
            $table->string('doc', 25);
            $table->string('address', 150);
            $table->double('vat', 5, 2);
            $table->double('subtotal', 10, 2);
            $table->double('tax', 5, 2);
            $table->double('total', 10, 2);
            $table->date('date');
            $table->enum('status', ['SEND', 'PAID', 'CANCEL']);
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
        Schema::dropIfExists('invoices');
    }
}
