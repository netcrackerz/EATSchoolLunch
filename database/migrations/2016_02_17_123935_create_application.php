<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplication extends Migration
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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();

         //   $table->integer('household_id')->unsigned();
        //    $table->foreign('household_id')->references('id')->on('house_holds')->onDelete('cascade');
                
  //          $table->integer('adult_id')->unsigned();
   //         $table->foreign('adult_id')->references('id')->on('adults')->onDelete('cascade');
            $table->string('street_address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('phone');
           
        });
        /*applications*/
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');

            $table->date('submitted_at');
            $table->tinyInteger('application_status');


            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
         /*households*/
        Schema::create('house_holds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('application_id')->unsigned();
            $table->foreign('application_id')
                    ->references('id')
                    ->on('applications')
                    ->onDelete('cascade');
        });
         /*ssndigits*/
        Schema::create('ssn_digits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lastfour')->unsigned();
            $table->integer('household_id')->unsigned();
            $table->foreign('household_id')
                    ->references('id')
                    ->on('house_holds')
                    ->onDelete('cascade');
        });
          /*assistance_programs*/
        Schema::create('assistance_programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('program_name');
        });
         /*ssistance_program_participates*/
        Schema::create('assistance_program_participates', function (Blueprint $table) {
        //    $table->increments('id');
            $table->integer('household_id')->unsigned()->index();
            $table->foreign('household_id')->references('id')->on('house_holds')->onDelete('cascade');
                
            $table->integer('assistance_program_id')->unsigned()->index();
            $table->foreign('assistance_program_id')->references('id')->on('assistance_programs')->onDelete('cascade');
            $table->string('case_number');

             });
             /*persons
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('person_type',1);
            $table->string('first_name');
            $table->string('middle_init',1);
            $table->string('last_name');
            $table->integer('household_id')->unsigned();
            $table->foreign('household_id')
                    ->references('id')
                    ->on('households')
                    ->onDelete('cascade');
        });*/
              /*childs*/
        Schema::create('children', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_init',1);
            $table->string('last_name');
            $table->integer('household_id')->unsigned();
            $table->foreign('household_id')
                    ->references('id')
                    ->on('house_holds')
                    ->onDelete('cascade');
            
            $table->tinyInteger('student_flag');
            $table->tinyInteger('foster_flag');
            $table->tinyInteger('migrant_flag');
            $table->tinyInteger('runaway_flag');
            $table->tinyInteger('homeless_flag');
            $table->tinyInteger('headstart_flag');
        });
         /*adults*/
        Schema::create('adults', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_init',1);
            $table->string('last_name');
            $table->integer('household_id')->unsigned();
            $table->foreign('household_id')
                    ->references('id')
                    ->on('house_holds')
                    ->onDelete('cascade');

        });
    
         /*applicants
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('household_id')->unsigned();
            $table->foreign('household_id')->references('id')->on('house_holds')->onDelete('cascade');
                
            $table->integer('adult_id')->unsigned();
            $table->foreign('adult_id')->references('id')->on('adults')->onDelete('cascade');
            $table->string('street_address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('phone');
            $table->string('email');

        });*/
         /*payfrequescy*/
        Schema::create('pay_frequencies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('frequency');
        });
         /*adult_income_type*/
        Schema::create('adult_income_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
        });
          /*adult_incomes*/
        Schema::create('adult_incomes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('adult_id')->unsigned();
            $table->foreign('adult_id')->references('id')->on('adults')->onDelete('cascade');
                
            $table->integer('income_type_id')->unsigned();
            $table->foreign('income_type_id')->references('id')->on('adult_income_types')->onDelete('cascade');

            $table->integer('pay_frequency_id')->unsigned();
            $table->foreign('pay_frequency_id')->references('id')->on('pay_frequencies')->onDelete('cascade');


            $table->decimal('amount', 8, 2);
          

        });
          /*child_incomes*/
        Schema::create('child_incomes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('household_id')->unsigned();
            $table->foreign('household_id')->references('id')->on('house_holds')->onDelete('cascade');
                
            $table->integer('pay_frequency_id')->unsigned();
            $table->foreign('pay_frequency_id')->references('id')->on('pay_frequencies')->onDelete('cascade');

            


            $table->decimal('amount', 8, 2);
          

        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   Schema::drop('child_incomes');
        Schema::drop('adult_incomes');
        Schema::drop('adult_income_types');
        Schema::drop('pay_frequencies');
 //       Schema::drop('applicants');
        
        Schema::drop('adults');
        Schema::drop('children');
  //      Schema::drop('persons');
        Schema::drop('assistance_program_participates');
        Schema::drop('assistance_programs');
        Schema::drop('ssn_digits');
        Schema::drop('house_holds');
        Schema::drop('applications');
       Schema::drop('users');

    }
}
