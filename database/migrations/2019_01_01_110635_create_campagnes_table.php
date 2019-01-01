<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampagnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campagnes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        // Insert some stuff
        DB::table('campagnes')->insert(
            array('name' => 'Simplex,Yves,Stone'
            )
        );
        DB::table('campagnes')->insert(
            array('name' => 'Alex,Thierry,Karoll,Marc,Nalex'
            )
        );
        DB::table('campagnes')->insert(
            array('name' => 'Moms,Jimi,Serge'
            )
        );
        DB::table('campagnes')->insert(
            array('name' => 'Cédric,Gex,Guix'
            )
        );
        DB::table('campagnes')->insert(
            array('name' => 'Fred,Valentin,...'
            )
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campagnes');
    }
}
