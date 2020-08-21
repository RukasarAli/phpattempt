 <?php 
//Connect to mysql
$con = mysqli_connect("localhost","ruku","student@online","portfolio");
//Test connection
if(mysqli_connect_errno()){
	echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}