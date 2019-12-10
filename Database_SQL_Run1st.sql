DROP DATABASE if EXISTS CompetitionSubmission; -- DROP Database if exists
CREATE DATABASE IF NOT EXISTS CompetitionSubmission; -- CREATES database
USE CompetitionSubmission;                             -- USES the database
CREATE TABLE user(
    
    UserID INT NOT NULL PRIMARY KEY,
    UserName VARCHAR(255) NOT NULL,
    Password  VARCHAR(255) NOT NULL
    
)ENGINE=InnoDB;

CREATE TABLE Location(
    
    PageID INT NOT NULL PRIMARY KEY,
    Description VARCHAR(255) NOT NULL
)ENGINE=InnoDB;

CREATE TABLE UserVisited(
    UserID INT NOT NULL,
    UserName VARCHAR(255) NOT NULL,
    Password  VARCHAR(255) NOT NULL,
    PageID int,
    Primary Key(UserID, PageID),
    FOREIGN KEY user(UserID) 
	REFERENCES user (UserID),
     FOREIGN KEY Location(PageID) 
	REFERENCES Location (PageID)
    
)ENGINE=InnoDB;

CREATE TABLE Question(
    
    QuestionID INT NOT NULL PRIMARY KEY,
    QuestionText TEXT

)ENGINE=InnoDB;

CREATE TABLE Answer(
    
    AnswerID INT NOT NULL PRIMARY KEY,
    AnswerText TEXT

)ENGINE=InnoDB;

CREATE TABLE QuestionAnswer(
    
    QuestionID INT NOT NULL,
    Correct VARCHAR(255),
    AnswerID INT NOT NULL,
    
    PRIMARY KEY(QuestionID, AnswerID),
     FOREIGN KEY Question(QuestionID) 
	REFERENCES Question (QuestionID),
     FOREIGN KEY Answer(AnswerID) 
	REFERENCES Answer (AnswerID)

)ENGINE=InnoDB;

CREATE TABLE UserCompetitionSubmission(
    
    CompetitionID INT NOT NULL,
    QuestionID    INT NOT NULL,
    AnswerID INT NOT NULL,
    PRIMARY KEY(CompetitionID, QuestionID, AnswerID),
    
    FOREIGN KEY Answer(AnswerID) 
	REFERENCES Answer (AnswerID),
    FOREIGN KEY QuestionAnswer(QuestionID) 
	REFERENCES QuestionAnswer (QuestionID)
    
)ENGINE=InnoDB;

CREATE TABLE Competition(
    
    CompetitionID INT NOT NULL AUTO_INCREMENT,
    SchoolName VARCHAR(255),
    ClassroomName VARCHAR(255),
    Email VARCHAR(255),
    Phone VARCHAR(255),
    QuestionID INT,
    AnswerID INT,
    
    PRIMARY KEY(CompetitionID),
    FOREIGN KEY Answer(AnswerID) 
	REFERENCES Answer (AnswerID),
    FOREIGN KEY QuestionAnswer(QuestionID) 
	REFERENCES QuestionAnswer (QuestionID)

)ENGINE=InnoDB;

INSERT INTO Question(QuestionID, QuestionText)
VALUES (

     '1','When using the pearl stich, which way do you start'),
     ('2','When using the plain Knit stich, which way do you start'),
     ('3','If the stitch gets droped what can you do'

);
INSERT INTO answer (AnswerID, AnswerText)
VALUES 

    ('1','From the left'),
    ('2','From the right'),
    ('3','From the bottom'),
    ('4','From the left'),
    ('5','From the right'),
    ('6','From the bottom'),
    ('7','Continue, Never mind'),
    ('8','Knit over to the place in your work where the dropped stitch is.'),
    ('9','slip a crochet hook in the loop from front to back, grab the horizontal piece of yarn above the loop and pull that thread through the loop.');

INSERT INTO questionanswer (QuestionID, Correct, AnswerID)
VALUES 

     ('1','Correct', '2'),
     ('1','Wrong', '1'),
     ('1','Wrong', '3'),
     ('2','Correct', '4'),
     ('2','Wrong', '5'),
     ('2','Wrong', '6'),
     ('3','Wrong', '7'),
     ('3','Correct', '8'),
     ('3','Correct', '9');
     
     
     





