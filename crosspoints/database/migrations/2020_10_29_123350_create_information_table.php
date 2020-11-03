<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //problems
        Schema::create('problems', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('summary');
            $table->text('description');
            $table->timestamps();
        });

        //links
        Schema::create('links', function (Blueprint $table) {
           $table->id();
           $table->string('link');
           $table->string('label')->nullable();
           $table->timestamps();
        });

        //tips
        Schema::create('tips', function (Blueprint $table) {
            $table->id();
            $table->string('tip');
            $table->timestamps();
        });

        //connection between links and problems
        Schema::create('link_problem', function (Blueprint $table) {
            $table->primary(['link_id', 'problem_id']);

            $table->unsignedBigInteger('link_id');
            $table->unsignedBigInteger('problem_id');
            $table->timestamps();

            $table->foreign('link_id')
                ->references('id')
                ->on('links')
                ->onDelete('cascade');

            $table->foreign('problem_id')
                ->references('id')
                ->on('problems')
                ->onDelete('cascade');
        });

        //connection between problem_info and tips
        Schema::create('problem_tip', function (Blueprint $table) {
            $table->primary(['problem_id', 'tip_id']);

            $table->unsignedBigInteger('tip_id');
            $table->unsignedBigInteger('problem_id');
            $table->timestamps();

            $table->foreign('problem_id')
                ->references('id')
                ->on('problems')
                ->onDelete('cascade');

            $table->foreign('tip_id')
                ->references('id')
                ->on('tips')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problems');
    }
}
