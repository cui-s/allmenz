<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserVotingHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('user_voting_history', function(Blueprint $table)
        {

            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('question_id')->unsigned();
            $table->tinyInteger('direction');

            $table->dateTime('create_time');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('question_id')->references('id')->on('question');

            $table->engine = 'InnoDB';
            // foreign key to the category as well
        });
	}

    //
    //-- -----------------------------------------------------
    //-- Table `mydb`.`user_voting_history`
    //-- -----------------------------------------------------
    //CREATE TABLE IF NOT EXISTS `mydb`.`user_voting_history` (
    //`id` INT NOT NULL,
    //  `user_id` INT NULL,
    //  `question_id` INT NULL,
    //  `direction` TINYINT NULL,
    //  `create_time` TIME NULL,


    //  PRIMARY KEY (`id`),
    //  INDEX `user_voting_history_user_id_idx` (`user_id` ASC),
    //  INDEX `fk_user_voting_history_question_id_idx` (`question_id` ASC),
    //  CONSTRAINT `fk_user_voting_history_user_id`
    //    FOREIGN KEY (`user_id`)
    //    REFERENCES `mydb`.`user` (`id`)
    //    ON DELETE CASCADE
    //    ON UPDATE CASCADE,
    //  CONSTRAINT `fk_user_voting_history_question_id`
    //    FOREIGN KEY (`question_id`)
    //    REFERENCES `mydb`.`question` (`id`)
    //    ON DELETE CASCADE
    //    ON UPDATE CASCADE)
    //ENGINE = InnoDB;
    //

    /**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('user_voting_history');
	}

}
