<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{

			$table->increments('id');
            $table->string('name', 255);
            $table->string('user_name', 255);
            $table->string('password', 255);
            $table->text('introduction');
            $table->enum('create_method',array('facebook','twitter','manual'))->default('manual');
            $table->enum('role',array('user','contributor','moderator'))->default('user');
            $table->integer('reputation')->default(0);
            $table->text('badge_gold');
            $table->text('badge_silver');
            $table->text('badge_bronze');
            $table->string('picture_url', 255);


            $table->smallInteger('question_asked');
            $table->smallInteger('question_answered');
            $table->text('question_watchlist');

            $table->text('following');
            $table->text('follower');



			$table->timestamps();
		});
	}

    //-- -----------------------------------------------------
    //-- Table `mydb`.`user`
    //-- -----------------------------------------------------
    //CREATE TABLE IF NOT EXISTS `mydb`.`user` (
    //`id` INT NOT NULL,
    //  `name` VARCHAR(255) NULL,
    //  `user_name` VARCHAR(255) NULL,
    //  `password` VARCHAR(255) NULL,
    //  `create_time` DATETIME NULL,
    //  `create_method` ENUM('facebook','twitter','manual') NULL,
    //  `role` ENUM('user','contributor','moderator') NULL,
    //  `avatar_pic` VARCHAR(255) NULL,

    //  `reputation` INT NULL,
    //  `badge_list` TEXT NULL,
    //  `question_asked` INT NULL,
    //  `question_answered` INT NULL COMMENT '	',
    //  `question_watchlist` TEXT NULL COMMENT '	',

    //  `following` TEXT NULL COMMENT '	',
    //  `follower` TEXT NULL,
    //  PRIMARY KEY (`id`),
    //  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
    //ENGINE = InnoDB;

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}



//SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
//SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
//SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';
//
//DROP SCHEMA IF EXISTS `mydb` ;
//CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
//USE `mydb` ;
//

//
//
//-- -----------------------------------------------------
//-- Table `mydb`.`user_questions_asked_history`
//-- -----------------------------------------------------
//CREATE TABLE IF NOT EXISTS `mydb`.`user_questions_asked_history` (
//`id` INT NOT NULL,
//  `user_id` INT NULL,
//  `question_id` INT NULL,
//  `create_time` TIME NULL,
//  PRIMARY KEY (`id`),
//  INDEX `user_questions_asked_history_idx` (`user_id` ASC),
//  CONSTRAINT `fk_user_questions_asked_history`
//    FOREIGN KEY (`user_id`)
//    REFERENCES `mydb`.`user` (`id`)
//    ON DELETE CASCADE
//    ON UPDATE CASCADE)
//ENGINE = InnoDB;
//
//
//-- -----------------------------------------------------
//-- Table `mydb`.`category`
//-- -----------------------------------------------------
//CREATE TABLE IF NOT EXISTS `mydb`.`category` (
//`id` INT NOT NULL,
//  `name` TEXT NULL,
//  `descrption` TEXT NULL,
//  PRIMARY KEY (`id`))
//ENGINE = InnoDB;
//
//
//-- -----------------------------------------------------
//-- Table `mydb`.`question`
//-- -----------------------------------------------------
//CREATE TABLE IF NOT EXISTS `mydb`.`question` (
//`id` INT NOT NULL,
//  `content` BLOB NULL,
//  `title` TEXT NULL,
//  `asker_id` INT NULL,
//  `category_id` INT NULL,
//  `tag` TEXT NULL,
//  `create_time` DATETIME NULL COMMENT '	',
//  `update_time` DATETIME NULL,
//  `delete_time` TIME NULL,
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
//
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
//
//-- -----------------------------------------------------
//-- Table `mydb`.`user_questions_answered_history`
//-- -----------------------------------------------------
//CREATE TABLE IF NOT EXISTS `mydb`.`user_questions_answered_history` (
//`id` INT NOT NULL,
//  `user_id` INT NULL,
//  `question_id` INT NULL,
//  `create_time` TIME NULL,
//  PRIMARY KEY (`id`),
//  INDEX `user_questions_answered_history_idx` (`user_id` ASC),
//  CONSTRAINT `fk_user_questions_answered_history`
//    FOREIGN KEY (`user_id`)
//    REFERENCES `mydb`.`user` (`id`)
//    ON DELETE CASCADE
//    ON UPDATE CASCADE)
//ENGINE = InnoDB;
//
//
//-- -----------------------------------------------------
//-- Table `mydb`.`badge`
//-- -----------------------------------------------------
//CREATE TABLE IF NOT EXISTS `mydb`.`badge` (
//`id` INT NOT NULL,
//  `type` ENUM('G','S','B') NULL,
//  `name` VARCHAR(255) NULL,
//  `description` TEXT NULL,
//  PRIMARY KEY (`id`))
//ENGINE = InnoDB;
//
//
//-- -----------------------------------------------------
//-- Table `mydb`.`user_badge_history`
//-- -----------------------------------------------------
//CREATE TABLE IF NOT EXISTS `mydb`.`user_badge_history` (
//`id` INT NOT NULL,
//  `user_id` INT NULL,
//  `badge_id` INT NULL,
//  `create_time` TIME NULL,
//  PRIMARY KEY (`id`),
//  INDEX `user_badge_history_user_id_idx` (`user_id` ASC),
//  INDEX `fk_user_badge_history_badge_id_idx` (`badge_id` ASC),
//  CONSTRAINT `fk_user_badge_history_user_id`
//    FOREIGN KEY (`user_id`)
//    REFERENCES `mydb`.`user` (`id`)
//    ON DELETE CASCADE
//    ON UPDATE CASCADE,
//  CONSTRAINT `fk_user_badge_history_badge_id`
//    FOREIGN KEY (`badge_id`)
//    REFERENCES `mydb`.`badge` (`id`)
//    ON DELETE CASCADE
//    ON UPDATE CASCADE)
//ENGINE = InnoDB;
//
//
//-- -----------------------------------------------------
//-- Table `mydb`.`reputation_action`
//-- -----------------------------------------------------
//CREATE TABLE IF NOT EXISTS `mydb`.`reputation_action` (
//`id` INT NOT NULL,
//  `description` TEXT NULL,
//  `result` INT NULL,
//  `comment` TEXT NULL,
//  `value` INT NULL DEFAULT 0,
//  PRIMARY KEY (`id`))
//ENGINE = InnoDB;
//
//
//-- -----------------------------------------------------
//-- Table `mydb`.`user_reputation_history`
//-- -----------------------------------------------------
//CREATE TABLE IF NOT EXISTS `mydb`.`user_reputation_history` (
//`id` INT NOT NULL,
//  `user_id` INT NULL,
//  `reputation_action_id` INT NULL,
//  `create_time` TIME NULL,
//  PRIMARY KEY (`id`),
//  INDEX `fk_user_reputation_history_user_id_idx` (`user_id` ASC),
//  INDEX `fk_user_reputation_history_reputation_action_id_idx` (`reputation_action_id` ASC),
//  CONSTRAINT `fk_user_reputation_history_user_id`
//    FOREIGN KEY (`user_id`)
//    REFERENCES `mydb`.`user` (`id`)
//    ON DELETE CASCADE
//    ON UPDATE CASCADE,
//  CONSTRAINT `fk_user_reputation_history_reputation_action_id`
//    FOREIGN KEY (`reputation_action_id`)
//    REFERENCES `mydb`.`reputation_action` (`id`)
//    ON DELETE CASCADE
//    ON UPDATE CASCADE)
//ENGINE = InnoDB;
//
//
//-- -----------------------------------------------------
//-- Table `mydb`.`question_vote`
//-- -----------------------------------------------------
//CREATE TABLE IF NOT EXISTS `mydb`.`question_vote` (
//`id` INT NOT NULL,
//  `user_id` INT NULL,
//  `question_id` INT NULL,
//  `create_time` TIME NULL,
//  `result` INT NULL,
//  PRIMARY KEY (`id`),
//  INDEX `fk_question_vote_user_id_idx` (`user_id` ASC),
//  INDEX `fk_question_vote_question_id_idx` (`question_id` ASC),
//  CONSTRAINT `fk_question_vote_user_id`
//    FOREIGN KEY (`user_id`)
//    REFERENCES `mydb`.`user` (`id`)
//    ON DELETE NO ACTION
//    ON UPDATE NO ACTION,
//  CONSTRAINT `fk_question_vote_question_id`
//    FOREIGN KEY (`question_id`)
//    REFERENCES `mydb`.`question` (`id`)
//    ON DELETE NO ACTION
//    ON UPDATE NO ACTION)
//ENGINE = InnoDB;
//
//
//-- -----------------------------------------------------
//-- Table `mydb`.`answer`
//-- -----------------------------------------------------
//CREATE TABLE IF NOT EXISTS `mydb`.`answer` (
//`id` INT NOT NULL,
//  `question_id` INT NULL,
//  `content` LONGBLOB NULL,
//  `ie_best` TINYINT(1) NULL DEFAULT 0,
//  PRIMARY KEY (`id`),
//  INDEX `fk_answer_question_id_idx` (`question_id` ASC),
//  CONSTRAINT `fk_answer_question_id`
//    FOREIGN KEY (`question_id`)
//    REFERENCES `mydb`.`question` (`id`)
//    ON DELETE SET NULL
//    ON UPDATE CASCADE)
//ENGINE = InnoDB;
//
//
//-- -----------------------------------------------------
//-- Table `mydb`.`tag`
//-- -----------------------------------------------------
//CREATE TABLE IF NOT EXISTS `mydb`.`tag` (
//`id` INT NOT NULL,
//  `name` VARCHAR(255) NULL,
//  `description` TEXT NULL,
//  `category_id` INT NULL,
//  `type` ENUM('user','system') NULL,
//  PRIMARY KEY (`id`),
//  INDEX `fk_tag_category_id_idx` (`category_id` ASC),
//  CONSTRAINT `fk_tag_category_id`
//    FOREIGN KEY (`category_id`)
//    REFERENCES `mydb`.`category` (`id`)
//    ON DELETE SET NULL
//    ON UPDATE CASCADE)
//ENGINE = InnoDB;
//
//
//-- -----------------------------------------------------
//-- Table `mydb`.`dictionary`
//-- -----------------------------------------------------
//CREATE TABLE IF NOT EXISTS `mydb`.`dictionary` (
//`id` INT NOT NULL,
//  `category_id` INT NULL,
//  `item_title` VARCHAR(255) NULL,
//  `item_image` VARCHAR(255) NULL,
//  `item_description` TEXT NULL,
//  PRIMARY KEY (`id`),
//  INDEX `fk_dictionary_category_id_idx` (`category_id` ASC),
//  CONSTRAINT `fk_dictionary_category_id`
//    FOREIGN KEY (`category_id`)
//    REFERENCES `mydb`.`category` (`id`)
//    ON DELETE CASCADE
//    ON UPDATE CASCADE)
//ENGINE = InnoDB;
//