<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('comment', function(Blueprint $table)
        {

            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('question_id')->unsigned();
            $table->integer('answer_id')->unsigned();       //comments for question will have a answer_id of 0
            $table->text('content');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('question_id')->references('id')->on('question');

            $table->engine = 'InnoDB';
            // foreign key to the category as wells
        });
	}

    //-- -----------------------------------------------------
    //-- Table `mydb`.`comment`
    //-- -----------------------------------------------------
    //CREATE TABLE IF NOT EXISTS `mydb`.`comment` (
    //`id` INT NOT NULL,
    //  `user_id` INT NULL,
    //  `question_id` INT NULL,
    //  `content` TEXT NULL,
    //  `create_time` TIME NULL,
    //  PRIMARY KEY (`id`),
    //  INDEX `fk_question_asker_id_idx` (`user_id` ASC),
    //  INDEX `fk_comment_question_id_idx` (`question_id` ASC),
    //  CONSTRAINT `fk_comment_user_id`
    //    FOREIGN KEY (`user_id`)
    //    REFERENCES `mydb`.`user` (`id`)
    //    ON DELETE SET NULL
    //    ON UPDATE CASCADE,
    //  CONSTRAINT `fk_comment_question_id`
    //    FOREIGN KEY (`question_id`)
    //    REFERENCES `mydb`.`question` (`id`)
    //    ON DELETE SET NULL
    //    ON UPDATE CASCADE)
    //ENGINE = InnoDB;
    //
    //
    //SET SQL_MODE=@OLD_SQL_MODE;
    //SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
    //SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

    /**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('comment');
	}

}
