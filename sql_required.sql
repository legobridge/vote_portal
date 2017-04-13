CREATE DATABASE `elections`


CREATE TABLE `elections`.`voters` ( `id` INT NOT NULL AUTO_INCREMENT , `has_voted` INT NOT NULL DEFAULT 0, `pass` VARCHAR(200) NOT NULL, `bhavan` VARCHAR(200) NOT NULL, `president` VARCHAR(200) NOT NULL DEFAULT 'Didn\'t Vote', `gensec` VARCHAR(200) NOT NULL DEFAULT 'Didn\'t Vote', `cultsec` VARCHAR(200) NOT NULL DEFAULT 'Didn\'t Vote', `sportssec` VARCHAR(200) NOT NULL DEFAULT 'Didn\'t Vote', `smc` VARCHAR(200) NOT NULL DEFAULT 'Didn\'t Vote', PRIMARY KEY (`id`)) ENGINE = InnoDB;

SELECT `president`, COUNT(*) FROM `voters` GROUP BY `president`;
SELECT `gensec`, COUNT(*) FROM `voters` GROUP BY `gensec`;
SELECT `cultsec`, COUNT(*) FROM `voters` GROUP BY `cultsec`;
SELECT `sportssec`, COUNT(*) FROM `voters` GROUP BY `sportssec`;
SELECT `smc`, COUNT(*) FROM `voters` GROUP BY `smc`;

SELECT `bhavan`, COUNT(*) FROM `voters` WHERE `has_voted` = 1 GROUP BY `bhavan`;