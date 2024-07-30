<?php

use App\Enums\TeamMemberInviteStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTeamMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('team_members', function (Blueprint $table) {
            $table->string('invite_status')->after('member_id')->default(TeamMemberInviteStatus::PENDING->value);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('team_members', function (Blueprint $table) {
            //
        });
    }
}
