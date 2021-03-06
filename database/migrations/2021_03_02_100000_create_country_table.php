<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryTable extends Migration
{
    public function up()
    {
        Schema::create('country', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->index();
            $table->string('title')->unique();
            $table->string('abbreviation', 2)->unique();
            $table->string('capital')->nullable();
            $table->timestamps();
        });
    }
}
