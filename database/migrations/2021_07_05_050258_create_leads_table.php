<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('businessName',255);
            $table->string('customerName',255);
            $table->string('phoneNumber1',255);
            $table->string('phoneNumber2',255)->nullable();
            $table->string('contactName',255);
            $table->string('contactNumber',255);
            $table->string('address',255);
            $table->string('note',255);
            $table->float('interestLevel',8,2);
            $table->date('reminderDate');
            $table->decimal('amountInstallation',8,2);
            $table->decimal('amountMonthly',8,2);
            $table->unsignedBigInteger('productId');
            $table->string('images',255);
            $table->boolean('activities')->default(true);
            $table->timestamps();
            $table->foreign('productId')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
}
