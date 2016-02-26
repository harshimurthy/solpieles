<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            
            // education|skills[]|labor-info|location
            $table->string('education', 800)->after('phone');
            $table->string('skills', 500)->after('education');
            $table->string('work', 150)->after('skills');
            $table->string('location', 500)->after('work');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('education');
            $table->dropColumn('skills');
            $table->dropColumn('work');
            $table->dropColumn('location');
        });
    }
}
