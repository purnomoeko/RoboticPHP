## Robotic Simulator

=======

It's a test application that solve the problem below:

This is a simulator of a “toy robot”. You will be writing code to place and move the “robot” within a grid on a tabletop. No graphical output is required.

The robot will be placed and move on a square tabletop, of dimensions 5 units x 5 units.


##To Test The apps/simulator

There are 2 kind of class that exists on this simulator they are *viewport* and *robot*

Viewport is class to define how viewport look a like.. When instances this two object must be related, they can't run on itself. Every method has explanation in the beginning of method. 



To test the application you can use console or web browser
or you can view full demo on this page http://128.199.179.70/robotic-php/ 


#### File Structure
===

* **Class/robot.php** : Robot class
* **Class/viewport.php** : viewport class
* *index.php* --> instance of both class and testing unit
* *test/command.txt* --> command to run the robot. Application will only accept "MOVE", "PLACE X,Y,Direction", "RIGHT", "LEFT" & "REPORT". You can change this file to test the apps. 
* *index.php?detail=1* --> will show the viewport data.