<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Animal Details</title>
  </head>
  <body>
   <div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header bg-info">
						<h4 class="text-white">Animal Details</h4>
					</div>
					<div class="card-body">
						
						 <h2>Add Animals Deatails Here</h2>
		   <form   class="card-header bg-info" id="addanimals" action="submission.php"method="POST"> 
                 <label>Animal Name</label>
				 <br>
				 <input  type="text" name="name" id="name" placeholder="Enter Aminal Name" >
				 <br><br>
				 <label>Category</label>
				 <br>
				 <select  type="text "id="category" name="category" >
												<option value="">select category</option>
												
												<option value="herbivores">Herbivores</option>
												<option value="omnivores">Omnivores</option>
												<option value="carnivores">Carnivores</option>
												</select><br><br>

				 <input type="file" name="image" id="name"><br>
				 
                    <label>Description</label>
					
				 <br>
				 <textarea name="description" rows="5" cols="40" id="name"></textarea>
				 <br><br>
				
				 <div class="g-recaptcha" data-sitekey="6LebFnogAAAAAA5FqaazgJlWbSYVha-dhJsFRU1p"></div>
				
				  <input type="submit"  value="submit"name="submit" id="submit">
				
              </form>
			  </div>
				</div>
			</div>
		</div>
   
   </div>
   <?php
 $connect=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connect,'animalinfo');
 if(isset($_post['submit']));
 {
 
	 $name1=$_POST['name'];
	 $category1=$_POST['category'];
	 $image1=$_POST['image'];
	 $description1=$_POST['description'];
	
 
 $query= "insert into animal(name,category,image,description)value('$name1','$category1','$image1','$description1')";
  $query_run= mysqli_query($connect, $query);
  if($query_run)
 {
	 echo'<script>
	alert("Data  inserted successfully");
	window.location.href="animals.php";
	 </script>';
 }
 else
 {
	  echo'<script>
	 alert("Data not inserted successfully");
	 window.location.href="submission.php";
	 </script>';
 }
 }
 ?>
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
