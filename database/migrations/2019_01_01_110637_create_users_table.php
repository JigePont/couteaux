<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fk_campagne_id')->nullable($value = true);
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('fk_campagne_id')->references('id')->on('campagnes');
        });


        // Insert some stuff
        DB::table('users')->insert(
            array('name' => 'Jigé'
        ,'email' => 'jige.pont@gmail.com'
        ,'password' => '$2y$10$02kg3CfZPV81BcIlEfob6OmLoPwOM/NmIO9WYSb37wFwaArHfekqa'
        ,'created_at' => '2018-12-30 17:14:01'
        ,'updated_at' => '2018-12-30 17:14:01'
            )
        );
        DB::table('users')->insert(
            array('name' => 'Simplex'
        ,'email' => 'reinhardt@next-loop.com'
        ,'password' => '$2y$10$HouuVb6CbywVm78TiSoafuLmSf.X/wipPMKVRWneSQXoCGLrikHni'
        ,'created_at' => '2018-12-30 17:14:01'
        ,'updated_at' => '2018-12-30 17:14:01'
            )
        );
        DB::table('users')->insert(
            array('name' => 'Guix'
        ,'email' => 'schneuwlyg@gmail.com'
        ,'password' => '$2y$10$2ddQHe2ZXbxtXndhUwq04uK.M9a4G4Op1adrv5u7GV2.p5if8zWU6'
        ,'created_at' => '2018-12-30 17:14:01'
        ,'updated_at' => '2018-12-30 17:14:01'
            )
        );
    }

    /**
    * Retreive user campagne.
    *
    * @return Campagne or null
    */   
    public function campagne()
    {
        return $this->belongsTo(Campagne::class, 'fk_campagne_id');
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
