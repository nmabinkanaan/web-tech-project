<?php
session_start(); 
require_once('dbcontroller.php');
if (isset($_POST['action']) && $_POST['action'] == "save") {
	$score = $_POST['score'];	
	if (isset($_SESSION['id'])){	 	   
        $userId = $_SESSION['id'];
        $queryMaxScore = "SELECT max(score) as max_score from  tbl_game_score where userId = ". $userId ."";        
        $resultMaxScore =  mysqli_query($con,$queryMaxScore) ;    		        
        if (!empty ($resultMaxScore)){                                      
            $row=mysqli_fetch_assoc($resultMaxScore);
            $num = $row['max_score'];
            if ($num < $score){
                $query = "INSERT INTO tbl_game_score (userId, score) values ('". $userId ."','". $score ."')";        
                mysqli_query($con,$query) ;    		                                  
                //echo ("save score");  
                echo ( $score ) ; 

            }else{            
                //echo ("Not Save score less than you have.");  
                echo ( $num ) ;
            }                                    
        }
        else{
            $query = "INSERT INTO tbl_game_score (userId, score) values ('". $userId ."','". $score ."')";        
            mysqli_query($con,$query) ;    		                                              
            //echo ("save score");  
            echo ( $score ) ;

        }                    
	}else{
		echo ("not found session");        
	}	
}

if (isset($_POST['action']) && $_POST['action'] == "show") {
    $query_select = "SELECT  u.name , max( gs.score) as max_score 
    FROM `users` u , `tbl_game_score` gs
    where gs.userId =  u.id 
    GROUP BY gs.userId  " ;
    $results =  mysqli_query($con,$query_select) ;      
    if (!empty ($results)){                          
        while($row=mysqli_fetch_assoc($results)) {
            $resultset[] = $row;                  
        }            
        echo json_encode($resultset);     
    }else{
        echo json_encode("Not row yet");   
    }              
}
?>