<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('answer', function(Blueprint $table)
        {

            $table->increments('id');
            $table->integer('answerer_id')->unsigned();
            $table->integer('question_id')->unsigned();
            $table->text('content');
            $table->tinyInteger('is_best');
            $table->integer('voting_point');
            $table->timestamps();


            $table->foreign('answerer_id')->references('id')->on('users');
            $table->foreign('question_id')->references('id')->on('question');
            // foreign key to the category as well
        });
	}

    //-- -----------------------------------------------------
    //-- Table `mydb`.`answer`
    //-- -----------------------------------------------------
    //CREATE TABLE IF NOT EXISTS `mydb`.`answer` (
    //  `id` INT NOT NULL,
    //  `question_id` INT NULL,
    //  `content` LONGBLOB NULL,
    //  `is_best` TINYINT(1) NULL DEFAULT 0,

    //  PRIMARY KEY (`id`),
    //  INDEX `fk_answer_question_id_idx` (`question_id` ASC),
    //  CONSTRAINT `fk_answer_question_id`
    //    FOREIGN KEY (`question_id`)
    //    REFERENCES `mydb`.`question` (`id`)
    //    ON DELETE SET NULL
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
        Schema::drop('answer');
	}

}
