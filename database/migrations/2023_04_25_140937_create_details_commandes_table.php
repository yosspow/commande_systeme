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
        Schema::create('details_commandes', function (Blueprint $table) {
            $table->id();
            $table->string('tracking')->default('ordered');
            $table->decimal('shiping',6,2);
            $table->foreignId('Commande_id')->constrained('commandes')->cascadeOnDelete();
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
        Schema::dropIfExists('details_commandes');
    }
};
