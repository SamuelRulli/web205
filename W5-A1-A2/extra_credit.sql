CREATE TABLE `web-205`.`books_proc` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NULL,
  `subject` VARCHAR(45) NULL,
  `rating` INT NULL,
  PRIMARY KEY (`id`));

INSERT INTO `web-205`.`books_proc` (`title`,`subject`,`rating`)VALUES("TITLE 1","subject 1",1);
INSERT INTO `web-205`.`books_proc` (`title`,`subject`,`rating`)VALUES("TITLE 2","subject 2",2);
INSERT INTO `web-205`.`books_proc` (`title`,`subject`,`rating`)VALUES("TITLE 3","subject 3",3);

SELECT * FROM `web-205`.`books_proc`;