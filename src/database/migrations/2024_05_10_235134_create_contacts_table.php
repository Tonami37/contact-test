<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('first_name')->nullable(false);
            $table->string('last_name')->nullable(false);
            $table->tinyInteger('gender')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('tell')->nullable(false);
            $table->string('address')->nullable(false);
            $table->string('building');
            $table->text('detail')->nullable(false);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
