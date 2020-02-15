<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class AddUsernameToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table)
        {
            $table->string( 'username', User::USERNAME_MAX_LENGTH )->unique()->after( 'id' );
        });
    }
    public function down()
    {
        Schema::table('users', function(Blueprint $table)
        {
            $table->dropColumn( 'username' );
        });
    }
}
