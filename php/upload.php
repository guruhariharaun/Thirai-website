<?php  

    require_once("./config.php");
      $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//establishing connection to MySQL DataBase
  
//if(isset($_POST['movie_name'] , $_FILES['movie_image'] , $_POST['trailer_link'] , $_POST['director'] , $_POST['storyline']  , $_POST['cast'] , $_POST['download_link']))
if(isset($_POST['submit']))
{

	$movie_name = $_POST['movie_name'];
	$temp_movie_image =  $_FILES['movie_image']['name'];
	$movie_image = str_replace(' ', '', $temp_movie_image);
	$trailer_link = $_POST['trailer_link'];
	$storyline = $_POST['storyline'];
	$director = $_POST['director'];
	$cast = $_POST['cast'];
 	$download_link = $_POST['download_link'];


	$target_path = "../img/";  
	$target_path = $target_path.basename($movie_image);   
	if(move_uploaded_file($_FILES['movie_image']['tmp_name'], $target_path)) 
	{  
	    
	}
	else
	{  
	    echo "Sorry, file not uploaded, please try again!";  
	} 

	$cookie_value=$movie_name;
	$temp_trailer_link = substr($trailer_link,32);
	$trailer_link = "https://www.youtube.com/embed/{$temp_trailer_link}";
	$movie_image = str_replace(' ', '', $movie_image);

	$query = " insert into movies (cookie_value, movie_name, movie_image ,trailer_link,storyline,director,cast,download_link)values ('$cookie_value','$movie_name','$movie_image','$trailer_link','$storyline','$director','$cast','$download_link')";
	$result = mysqli_query($con, $query);

	if($result)
	{
		$_SESSION['message'] = "Movie Have been <strong>INSERTED</strong> Successfully!!";
		

		header("location: ./admin_panel.php");
	}
	else{
		$_SESSION['message'] = "OOPS!! the STORYLINE is too long or you've duplicating .please try something new again.";
		$_SESSION['message_type'] = "danger";
		header('Location: ../html/error.html');

	}	
}

if(isset($_GET['delete']))
{
	$id = $_GET['delete'];
	$delete_query = "DELETE FROM movies WHERE id=$id";
	$result = mysqli_query($con,$delete_query);
    if($result)
    {
		$_SESSION['message'] = "Movie have been <strong>DELETED</strong> successfully!!";
		$_SESSION['message_type'] = "dark";
		header('Location: ./admin_panel.php');
	}
	else
	{
		$_SESSION['message'] = 'User data couldn\'t be deleted';
		$_SESSION['message_type'] = "error";
		header('Location: ../html/error.html');
	}			
}



if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$movie_name = $_POST['movie_name'];
	$temp_movie_image =  $_FILES['movie_image']['name'];
	$movie_image = str_replace(' ', '', $temp_movie_image);
	$trailer_link = $_POST['trailer_link'];
	$storyline = $_POST['storyline'];
	$director = $_POST['director'];
	$cast = $_POST['cast'];
 	$download_link = $_POST['download_link'];

 	$target_path = "../img/";  
	$target_path = $target_path.basename($movie_image);   
	if(move_uploaded_file($_FILES['movie_image']['tmp_name'], $target_path)) 
	{  
	    
	}
	else
	{  
	    	header('Location: ../html/error.html');

	} 

	$cookie_value=$movie_name;
	$temp_trailer_link = substr($trailer_link,32);
	$trailer_link = "https://www.youtube.com/embed/{$temp_trailer_link}";
	


	$query = " UPDATE movies SET cookie_value='$cookie_value', movie_name='$movie_name', movie_image='$movie_image' ,trailer_link='$trailer_link',storyline='$storyline',director='$director',cast='$cast',download_link='$download_link' WHERE id=$id";
	$result = mysqli_query($con, $query);

	if($result)
	{
		$_SESSION['message'] = "Movie Have been <strong>UPDATED</strong> Successfully!!";
		header("location: ./admin_panel.php");
	}
	else{
		$_SESSION['message'] = "OOPS!! the STORYLINE is too long or you've duplicating .please try something new again.";
		$_SESSION['message_type'] = "danger";
		header('Location: ../html/error.html');

	}	



}
?>  