/*This SQL shows questions randomly on the competition page*/
USE web601;
drop PROCEDURE IF EXISTS randomQuestion;
DELIMITER //
create procedure randomQuestion()
begin
      select QuestionID
      from question
      order by rand()
     
      limit 1
      into @QuestionID;
      
      select question.QuestionID,QuestionText,answer.AnswerID,AnswerText
           From ((question 
           INNER JOIN questionanswer on question.QuestionID = questionanswer.QuestionID)
           INNER JOIN answer on answer.AnswerID = questionanswer.AnswerID)
           where question.QuestionID = @QuestionID;
 end//
 DELIMITER ;
 call randomQuestion();