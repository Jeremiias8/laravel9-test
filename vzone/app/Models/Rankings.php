<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rankings extends Model
{
    use HasFactory;

    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->team_name();
            $table->score();
            $table->city();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
