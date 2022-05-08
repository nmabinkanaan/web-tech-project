# Internet Technologies Project 

 ## Tweety Bird and Sylvester game

In this project, we proposed Tweety Bird and Sylvester game which was inspired by the famous chrome dinosaur game. This game was originally intended to eliminate user boredom associated with the sudden internet outage. 

   As for the Tweety Bird and Sylvester game, it is a game that we programmed and published on a local server. All players of all ages can play, it is an easy game without any complications. The game, in a simple way, follows this arrangement. At first, the player registers in the game, after registration, it moves to the main game page. The element (Tweety) tries to pass all the obstacle (Sylvester) that try to catch it. When it hits an obstacle(Sylvester), it loses this round of the game.While the player playing the round a number of game score appears on the screen that shows the distance and point has reached. Also, the page reviews the highest score obtained by other players registered in the game. The game targets all sane people of all categories. It is a popular game and there are many copies of it in various forms. 
   
   ### Objectives 
   
   - Understand the basic of PHP to build a database which include sign in ,sign up and logout files.
   - Building a game that calculate the maximum scores of all players
   - Validate the game to ensure its efficiency.


 ## Flow Chart
 
 here we presents a detailed flow chart to the flow of Tweety Bird and Sylvester game. 
 
![GitHub Light](https://github.com/nmabinkanaan/web-tech-project/blob/main/ReadMeimage/Flowchart.jpg)
 
 
## Game Characters

The game characters are inspired by the famous cartoon Tweety Bird and Sylvester, in which the Sylvester(the cat) always tries to catch Tweety (the bird)
 
 ![GitHub Light](https://github.com/nmabinkanaan/web-tech-project/blob/main/ReadMeimage/Sylevster.png)
 
  ![GitHub Light](https://github.com/nmabinkanaan/web-tech-project/blob/main/ReadMeimage/tweety.png)
 
 ##  Dynamic Components  
 
A dynamic website is all about personalized features and content to each user and give them a great website user experience. The four components required to create a fully dynamic web page and it includes in our game. There are a web server )localhost), a server-side scripting language (PHP), a database (phpMyAdmin), and a client-side scripting language (JavaScript).  

When the user login the game, the web page creates a new session for the user and displays the user's game score only without mixing his/her score with other users. To do this, the page sends a command to the database to start new session. Database responds and starts a special session for the user and saves all user interactions and score he/she got it with his email or identifier. And do it with all users. This doesn’t conflict with the display highest score in all the game. As the page will always display the highest score in the game from all players who registered in the game.  

   In SaveScore.php we have two action one for Save and another one for Show. In sketch.js when game over we use the Save action, first we will test whether there is a login for this user or not. If he is not logged in, he will go to register, and if he logged in, we will see if this is the first game or it has played, if it is his first game we will save the result in Database, and if he has played previously, we will compare the current result with the result saved in Database. If the current result is greater from the result saved in Database, put it in database and put it in the maximum result, and if it is less than the result is saved in Database, it will not be saved in Database. And in the Show action, present all players in the database with the Maximum score for all players. 
 
 
  ## How to Play
  
to play, you need to register your name, email, password Then the game appears after login page
Now you are Tweety Bird and you must avoid all Sylvester by jumping on them. When you want to jump, you have to press the spacebar
The score you reach will be calculated and compared with all other players' scores
When you get the high score, your score will appear as the highest score in the game.

  ![GitHub Light](https://github.com/nmabinkanaan/web-tech-project/blob/main/ReadMeimage/TheGame.gif)


##Installation:
 - First install XAMPP in your laptop and turn on
 - Second open phpMyadmin and create database name ( GameDB ) 
 - Third install web-tech-project folder
 - Fourth run web-tech-project folder by write in the top of localhost webpage. 
 - Fifth automatically index.php , if there is no session it will take to Login.php and start new session, otherwise complste same session.



##Input: 

| Keys | Actions |
| --- | --- |
| `Mouse click` | Press mouse click to Start the Game. |
| `Space button` | 	Press Space button to jump and avoid cats. |
  
  

 
