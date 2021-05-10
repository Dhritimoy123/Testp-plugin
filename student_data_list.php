<?php
<!doctype html>
<html lang="en">
  <head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <div class ="container">
    <div class ="row">
        <div class ="col-md-12 mt-4">
            <div class ="card"> 
                <div class ="card-header">
                    <h4 class ="card-title">How to fetch/search data by its name,phone no., marks</h4>
				</div>
				<div class ="card-body">
				   <div class ="row">
				      <div class ="col-md-6">
					  
					    <form action ="" method ="post">
					      <div class ="form-group">
						    <input tpye ="text" name ="get_name" class ="form-control" placeholder ="enter name" required>
						  </div>
						  <button type ="submit" name ="search_by_name" class ="btn btn-primary">search</button>
					    </form>
						
						
					  </div>
				   </div>
				        <?php
                  $connection = mysqli_connnection("localhost","root","","jdbservice");
						      if(isset($_POST['search_by_name']))
						      {
								    $id = $_POST['get_name'];
								    $query = "SELECT * FROM student_data WHERE id ='$id'";
								    $query_run = mysqli_query($connection, $query);
                                          							    
						    ?>
				      <div class ="table-responsive">
					           <table class ="table table-border">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Phone no.</th>
                            <th scope="col">email</th>
                            <th scope="col">Marks_Subject1</th>
							              <th scope="col">Marks_Subject2</th>
							              <th scope="col">Marks_Subject3</th>
							              <th scope="col">Marks_Subject4</th>
							              <th scope="col">Marks_Subject5</th>
							              <th scope="col">Total Marks</th>
                          </tr>
                       </thead>
                        <tbody>
                          <?php
                          if(mysqli_num_rows($query_run)>0)
                          {
                             while($row = mysqli_fetch_array($query_run))
                             {

                          ?>

                          <tr>
                            <th scope="row">1</th>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['phone no.'];?></td>
                            <td><?php echo $row['email'];?></td>
							              <td><?php echo $row['Marks_Subject1'];?></td>
							              <td><?php echo $row['Marks_Subject2'];?></td>
							              <td><?php echo $row['Marks_Subject3'];?></td>
							              <td><?php echo $row['Marks_Subject4'];?></td>
							              <td><?php echo $row['Marks_Subject5'];?></td>
							              <td><?php echo $row['TotalMarks'];?></td>
                         </tr>
                           <?php
                          }
                        }
                       else
                        {
                          ?>
                             <tr>
                                <td colspan ="6"> no record fouund</td>
                             </tr>

                          <?php
                        }

                           ?>

						            </tbody>
                      </table>
				</div>
             <?php
                }
             ?>
            </div>
        </div>
    </div>
   </div>	
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>
?>