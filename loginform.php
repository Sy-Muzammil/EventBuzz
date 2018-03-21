<?php
if(isset($_POST['id'])&&!empty($_POST['Password'])){
	$username = $_POST['id'];
	$password = $_POST['Password'];
	require 'connect.inc.php';
	
	if(!empty($username)&&!empty($password)){
		$query="SELECT * FROM `user` where `id`='".$_POST['id']."' AND `password`='".$_POST['Password']."'";
		
		if($run=mysqli_query($link,$query)){
			mysqli_close ($link);
			if(mysqli_num_rows($run)==0){
				//echo '<script>alert("Invalid userid/password combination");</script>';
				header('Location: index.php');
			}else{
				session_start();
				$row_login=mysqli_fetch_assoc($run);
				session_start();
				$_SESSION['id']=$row_login['id'];
				$_SESSION['lat']=(float)$row_login['lat'];
				$_SESSION['longi']=(float)$row_login['longi'];
				if(isset($_POST['Remeber']))
					setcookie('id',$row_login['id'],time()+(10 * 365 * 24 * 60 * 60));
				header('Location: DisplayEvents.php');
				//header('Location: CropInfo.php');
			}
		}
		else{
			header('Location: index.php');
			echo '<script>alert("Something went wrong");</script>';

		}
	}
	
}
?>


  <!-- Modal -->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog"style="width:300px;height:400px;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <form role="form"action="loginform.php" id="login" method="POST" >
			<div class="form-group">
				<label for="email">User ID</label>
				<input "type="email" id="username"  name="id"class="form-control" placeholder="Enter User ID">
			</div>
			<div class="form-group">
				<label for="pwd">Password</label>
				<input type="password" name="Password"class="form-control" id="pwd" placeholder="Enter password">
			</div>
			<div class="checkbox">
				<label><input type="checkbox"id="ch"name="Remeber"> Remember me</label>
			</div >
			<button style="float:right;"type="submit" class="btn btn-lg btn-primary">Login</span></button>
		  </form>
        </div>
		<br><br>
        
      </div>
      
    </div>
  </div>
