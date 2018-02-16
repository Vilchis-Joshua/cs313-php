CREATE TABLE public.scriptures 
(	scripture_id  	SERIAL NOT NULL PRIMARY KEY UNIQUE,
	book			VARCHAR(25) NOT NULL,
	chapter		INT	NOT NULL,
	verse		INT	NOT NULL,
	content		TEXT	NOT NULL
);



Create Table public.topic
(	topic_id	Serial NOT Null Primary Key UNIQUE,
	name		varchar(50) Not Null
);


Create Table public.scripture_topic
(	scripture_id	INT REFERENCES public.scriptures(scripture_id) ON UPDATE CASCADE ON DELETE CASCADE,
	topic_id		INT REFERENCES public.topic(topic_id) ON UPDATE CASCADE,
	Constraint scripture_topic_pkey Primary Key (scripture_id, topic_id) 
);

insert into public.topic (topic_id, name) Values(topic_id_sequence.nextval, 'Faith');
insert into public.scripture_topic Values(scripture_id_sequence.currval, 4);


insert into public.topic (topic_id, name) Values(DEFAULT, 'Sacrifice');

insert into public.topic (topic_id, name) Values(DEFAULT, 'Charity');

insert into public.topic (topic_id, name) Values(DEFAULT, 'Light');



insert into public.scripture_topic Values(1, 4);

insert into public.scripture_topic Values(2, 4);

insert into public.scripture_topic Values(3, 4);

insert into public.scripture_topic Values(4, 4);

insert into public.scripture_topic Values(4, (SELECT topic_id FROM pubilc.topic WHERE name = 'Light'));




     <div>
         <form action="week06ta_6.php" method="post">
            <div>
            Book &nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="book"> <br />
            Chapter : <input type="text" name="chapter"><br />
            Verse &nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="verse"><br />
            </div>
            <div>Contents:<br />
            <textarea name="contents" rows="5" cols="40"></textarea>
            </div>
            
            <?php include("../include/get_topics.php") ?>
            
            
            
            
            
            <input type="submit" name="insert" value="Insert Data">  
   			</form>
    </div>
    
    

            //********************************************************
            //  php to create the checkbox
            
            
                   include("../include/dbOpen.php");

    
                foreach ($db->query("SELECT topic_id, name  FROM public.topic") as $row)
                  {
                    
                     echo '<input type="checkbox" name="get_topic" value="'.$row[topic_id].' ">' .$row[name].'<br />';
                    
                  }
 
              
           include("../include/dbClose.php");
           
           
     <?php 
      
   ,!-- next html page  -->         
            
           if ($_SERVER['REQUEST_METHOD'] === 'POST') {
               
                $book      = test_input($_POST["book"]);  
                $chapter   = test_input($_POST["chapter"]);  
                $verse     = test_input($_POST["verse"]);
                $content   = get_content(test_input($_POST["content"]));
                $topic     = get_topic(test_input($_POST["topic"]));



                 
               
               // SETUP prepare for sql
                $stmt = $db->prepare("INSERT INTO public.scriptures (id, book, chapter, verse, content) VALUES (:book, :chapter, :verse, :content)");
                $stmt1 = $db->prepare("INSERT INTO public.script_topic (scrip_id, topic_id) VALUES (:book, :chapter, :verse, :content)");
                $stmt->bindParam(':book', $book);
								$stmt->bindParam(':chapter', $chapter);
                $stmt->bindParam(':verse', $verse);
								$stmt->bindParam(':content', $content);
                
                $newId = $pdo->lastInsertId('users_id_sequence');			// this gets the seq # that was last used for the table the seq was created for.

                $stmt1->bindParam(':topic', $topic);
                $stmt1->execute();
                //bindparam
                //$book = $book;
                //$chapter = $chapter;
                //$verse = $verse;
                //$content = $content;
                
               // execute
               $stmt->execute();
				
        			// if insert good
               //  send a message that the update was successful . . . . 
              // else
              //  error message
               
          } else {
            echo "This is embarrassing - - - There was an error in the REQUEST_METHOD not being POST. . . ";
     }
     
     
     function test_input($data) {
                  $data = trim($data);
                  $data = stripslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
               } 
     
     
      ?>
 /************************************************************************************* 
 
 
 
 
 --Next php page
 	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  	echo '<h3>' . $row['topic'] . '</h3>';
		echo '<p>';
			echo '<b>' . $row['book'] . $row['chapter'] . ':' . $row['verse'] . '</b>' . ' - ' . $row['content'];
		echo '</p>';
	}
 
      
      
      
      
      