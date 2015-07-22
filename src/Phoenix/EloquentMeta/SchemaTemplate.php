<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SchemaTemplate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('__meta__', function(Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->unsignedInteger('source_id');
            $table->unsignedTinyInteger('key');
            $table->longText('value');

            $table->index([ 'source_id' ]);
            $table->index('key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('__meta__');
    }
}
