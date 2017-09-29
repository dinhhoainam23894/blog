<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hastable('customers')){
            Schema::table('customers', function (Blueprint $table) {
                if(!Schema::hasColumn('customers','mediumtext')){
                    $table->mediumtext('mediumtext');
                }
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       if(Schema::hastable('customers')){
            Schema::table('customers', function (Blueprint $table) {
                if(Schema::hasColumn('customers','mediumtext')){
                    $table->dropColumn('mediumtext');
                }
                
            });
        }
    }
}
