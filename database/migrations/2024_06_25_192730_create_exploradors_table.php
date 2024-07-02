<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_exploradors_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExploradorsTable extends Migration
{
    public function up()
    {
        Schema::create('exploradors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('age');
            $table->string('city');
            $table->string('country');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('exploradors');
    }
}

