<?php
   
   $db = mysqli_connect("localhost","root","","telecommunication_and_management_system");
   if(!$db)
   {
   	die ("database not connected".mysqli_connect_error($db));
   }
   else
   {
   	echo "Database connected"."<br>";
   }
    $sql= "CREATE TABLE user(ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,NAME VARCHAR(30) NOT NULL,EMAIL VARCHAR(30) NOT NULL, PASSWORD VARCHAR(30) NOT NULL)";
    if(mysqli_query($db,$sql))
  {
     echo "table created";
   }
   else
  {
     echo "there is an problem";
   }
   $sql2="CREATE TABLE Admin(ID INT NOT NULL PRIMARY KEY, NAME VARCHAR(30) NOT NULL,EMAIL VARCHAR(30) NOT NULL, PASSWORD VARCHAR(30) NOT NULL)";
  if(mysqli_query($db,$sql2))
  {
     echo "table created";
  }
  else
   {
      echo "there is an problem";
  }
   $sql3="INSERT INTO Admin(ID,NAME,EMAIL,PASSWORD) VALUES(1,'Akash','akash@xyz.com','1234'), (2,'Tamim','tamim@xyz.com','4567'),(3,'Sadman','sadman@xyz.com','6789')";
    if(mysqli_query($db,$sql3))
   {
      echo "DATA ENTERED";
   }
   else
   {
     echo "there is an problem".mysqli_error($db);
   }
  $sql4="CREATE TABLE Feedback(ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,NAME VARCHAR(30) NOT NULL,EMAIL VARCHAR(30) NOT NULL,PHONE VARCHAR(30) NOT NULL,MESSAGE VARCHAR(200) NOT NULL)";
  if(mysqli_query($db,$sql4))
  {
   echo "Table created";
  }
  else
  {
   echo "there is an problem".mysqli_error($db);
  }

  $sql5="CREATE TABLE PACKS(ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,MINUTE VARCHAR(30),DATA VARCHAR(30),SMS VARCHAR(30),VALIDITY VARCHAR(30) NOT NULL,Price FLOAT NOT NULL)";
  if(mysqli_query($db,$sql5))
  {
   echo "Table created";
  }
  else
  {
   echo "there is an problem".mysqli_error($db);
  }

?>
