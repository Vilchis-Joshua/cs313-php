INSERT INTO DISCUSSION VALUES 
(
	DEFAULT,
	'Cyberbullying - Problem or imagination?',
	(SELECT now()),
	'This discussion is for those who have had problems with cyberbullying in the past. Not everyone recognizes that it is a problem and that it is becoming bigger in society. What steps can we take
	to make sure that this changes at a society level? This is a problem, and we want people to stop believing it is just imagination.'
);


INSERT INTO FORUM 
(
   forum_id 
) 
VALUES
(
   DEFAULT,
   (SELECT post_id FROM POST WHERE post_content = 'Hello there'),
   (SELECT users_id FROM USERS WHERE users_username = 'jsvilchis')
);



CREATE TABLE forum (
  users_id    int REFERENCES users (users_id) ON UPDATE CASCADE ON DELETE CASCADE
, post_id     int REFERENCES post (post_id) ON UPDATE CASCADE
, CONSTRAINT forum_pkey PRIMARY KEY (users_id, post_id)  -- explicit pk
);