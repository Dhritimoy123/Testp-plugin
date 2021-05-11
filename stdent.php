<html>
 <head>
    <title>Search student data into box</title>
   <style>
       body
       {
          background-color : whitesmoke;
       }
       input{
           width : 40%;
           height: 5%;
           border: 1px;
           border-radius: 05px;
           padding: 8px 15px 8px 15px;
           margin: 10px 0px 15px 0px;
           box-shadow: 1px 1px 2px 1px grey;
       }
    </style>
 </head>
 <body>
    <center>
       <h1>Search data from database inti text box</h1>
      <form action= "" method="post">
        <input tpye= "text" name= "get_name" placeholder= "Enter name to search"/><br>
        <button type ="submit" name ="search" class ="btn btn-primary">search</button>
      </form>
<?php

$link = mysqli_connect("localhost", "root", "", "jdbservice");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

if(isset($_POST['search']))
{
     $id = $_POST['get_name'];

$sql = "SELECT * FROM student_data WHERE Name ='$id'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>name</th>";
                echo "<th>phone no.</th>";
                echo "<th>email</th>";
                echo "<th>Marks_Subject1</th>";
                echo "<th>Marks_Subject2</th>";
                echo "<th>Marks_Subject3</th>";
                echo "<th>Marks_Subject4</th>";
                echo "<th>Marks_Subject5</th>";
                echo "<th>Total marks</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result))
        {

        ?>
            <tr>
                  <th scope="row">1</th>
                   <td><?php echo $row['Name'];?></td>
                   <td><?php echo $row['Phone no.'];?></td>
                   <td><?php echo $row['email id'];?></td>
                   <td><?php echo $row['Marks_Subject1'];?></td>
                   <td><?php echo $row['Marks_Subject2'];?></td>
                   <td><?php echo $row['Marks_Subject3'];?></td>
                   <td><?php echo $row['Marks_Subject4'];?></td>
                  <td><?php echo $row['Marks_Subject5'];?></td>
                  <td><?php echo $row['Total marks'];?></td>
               </tr>  
            <?php

            //echo "</tr>";
        }
       // echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
// Close connection
mysqli_close($link);
?>
</center>
 </body>
</html>