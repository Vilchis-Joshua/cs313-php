-- Insert into the user table
INSERT INTO USERS 
VALUES
( DEFAULT,
'jsvilchis',
'asdf');

INSERT INTO USERS 
VALUES
( DEFAULT,
'tbvilchis',
'1234');

INSERT INTO USERS 
VALUES
( DEFAULT,
'alvilchis',
'me');

INSERT INTO USERS 
VALUES
( DEFAULT,
'mjvilchis',
'password');


-- Insert into the discussion table
INSERT INTO DISCUSSION 
VALUES
( DEFAULT,
'Cyberbullying - What can we do?',
(SELECT now()));

INSERT INTO DISCUSSION 
VALUES
( DEFAULT,
'A problem at school because of social media. How can I help?',
(SELECT now()));

INSERT INTO DISCUSSION 
VALUES
( DEFAULT,
'Cyberbullying - Myth or reality?',
(SELECT now()));




-- Insert into the post table
INSERT INTO POST 
VALUES
( DEFAULT,
(SELECT now()),
'This is going to be a lot of information. I know that things are hard, but that does not mean that it is the end.');


INSERT INTO POST 
VALUES
( DEFAULT,
(SELECT now()),
'Cyberbullying is a reality for many. One of the best things that we can do right now is put the information out there and spread the word.');

INSERT INTO POST 
VALUES
( DEFAULT,
(SELECT now()),
'The problem is not you. Talk to friends that you know can be a support');




-- TRUNCATE TABLE CASCADE
-- DELETE STATEMENT

 --DELETE FROM DISCUSSION;
 --DELETE FROM POST;
 --DELETE FROM USERS;