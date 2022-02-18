<?php

use App\Models\User;
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
        Schema::create('klants', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->text('naam');
            $table->text('adres')->nullable();
            $table->text('postcode')->nullable();
            $table->text('plaats')->nullable();
            $table->text('website')->nullable();
            $table->text('email')->nullable();
            $table->text('telefoon')->nullable();
            $table->text('btw')->nullable();
            $table->text('kvk')->nullable();
            $table->binary('photo')->nullable();
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
        Schema::dropIfExists('klants');
    }
};
