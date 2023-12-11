<?php

// database/migrations/{timestamp}_add_interview_status_to_cvs_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInterviewStatusToCvsTable extends Migration
{
    public function up()
    {
        Schema::table('cvs', function (Blueprint $table) {
            $table->string('interview_status')->nullable();
        });
    }

    public function down()
    {
        Schema::table('cvs', function (Blueprint $table) {
            $table->dropColumn('interview_status');
        });
    }
}

