<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('question', function(Blueprint $table)
        {

            $table->increments('id');
            $table->text('content');
            $table->text('title');
            $table->integer('asker_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->text('tag');

            $table->enum('status',array('created','created_anonymous','protected','closed','deleted'))->default('created');

            $table->integer('voting_point');
            $table->integer('view');

            $table->timestamps();

            $table->foreign('asker_id')->references('id')->on('users');

            // foreign key to the category as well
        });
	}

    //-- -----------------------------------------------------
    //-- Table `mydb`.`question`
    //-- -----------------------------------------------------
    //CREATE TABLE IF NOT EXISTS `mydb`.`question` (
    //  `id` INT NOT NULL,
    //  `content` TEXT NULL,
    //  `title` TEXT NULL,
    //  `asker_id` INT NULL,
    //  `category_id` INT NULL,
    //  `tag` TEXT NULL,

    //  `create_time` DATETIME NULL COMMENT '	',
    //  `update_time` DATETIME NULL,
    //  `delete_time` DATETIME NULL,
    //  `voting_point` INT NULL COMMENT '	',
    //  `view` INT NULL,

    //  PRIMARY KEY (`id`),
    //  INDEX `fk_question_asker_id_idx` (`asker_id` ASC),
    //  INDEX `fk_question_category_id_idx` (`category_id` ASC),
    //  CONSTRAINT `fk_question_asker_id`
    //    FOREIGN KEY (`asker_id`)
    //    REFERENCES `mydb`.`user` (`id`)
    //    ON DELETE SET NULL
    //    ON UPDATE RESTRICT,
    //  CONSTRAINT `fk_question_category_id`
    //    FOREIGN KEY (`category_id`)
    //    REFERENCES `mydb`.`category` (`id`)
    //    ON DELETE SET NULL
    //    ON UPDATE RESTRICT)
    //ENGINE = InnoDB;

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('question');
	}

}
