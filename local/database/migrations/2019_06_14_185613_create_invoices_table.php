<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            // form
            $table->string('from_name');
            $table->string('from_address')->nullable();
            $table->string('from_phone')->nullable();
            $table->string('from_email');
            // bill to
            $table->string('billto_name');
            $table->string('billto_address');
            $table->string('billto_phone');

            $table->date('invoice_date');
            $table->date('invoice_dutedate');
            $table->string('invoice_no');
            $table->string('invoice_note');


            $table->string('invoice_subtotal');
            $table->string('invoice_discount');
            $table->string('invoice_shipping');
            $table->string('qty');
            $table->string('total');
            $table->string('signature')->nullable();
            $table->string('payment_status')->default(0);


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
