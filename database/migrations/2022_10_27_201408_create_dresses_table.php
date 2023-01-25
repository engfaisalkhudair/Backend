<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class CreateDressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dresses', function (Blueprint $table) {
            $table->bigInteger("id")->autoIncrement();
            $table->foreignIdFor(User::class);
            $table->string("client_name");
            $table->integer("client_phone");
            $table->double("paid_amount");
            $table->double("Remaining_amount");
            $table->string("dress_name");
            $table->string("dress_code");
            $table->string("dress_size");
            $table->string("notes")->nullable();
            $table->date("event_date");
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dresses');
    }
}
