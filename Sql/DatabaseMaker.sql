
-- -----------------------------------------------------
-- Schema HomeworkFour
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `HomeworkFour` DEFAULT CHARACTER SET utf8 ;
USE `HomeworkFour` ;

-- -----------------------------------------------------
-- Table `HomeworkFour`.`Genre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HomeworkFour`.`Genre` (
  `GenreID` INT NOT NULL,
  `Genre` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`GenreID`))
;


-- -----------------------------------------------------
-- Table `HomeworkFour`.`Artist`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HomeworkFour`.`Artist` (
  `ArtistID` INT NOT NULL,
  `ArtistName` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`ArtistID`))
;


-- -----------------------------------------------------
-- Table `HomeworkFour`.`Albums`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HomeworkFour`.`Albums` (
  `AlbumsID` INT NOT NULL,
  `AlbumsName` VARCHAR(255) NOT NULL,
  `DataReleased` DATETIME NOT NULL,
  `Genre_GenreID` INT NOT NULL,
  `Artist_ArtistID` INT NOT NULL,
  PRIMARY KEY (`AlbumsID`),
  CONSTRAINT `fk_Albums_Genre`
    FOREIGN KEY (`Genre_GenreID`)
    REFERENCES `HomeworkFour`.`Genre` (`GenreID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Albums_Artist1`
    FOREIGN KEY (`Artist_ArtistID`)
    REFERENCES `HomeworkFour`.`Artist` (`ArtistID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;
