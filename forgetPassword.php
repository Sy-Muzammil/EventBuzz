<?php
if(isset($_POST['id'])){
	$email = $_POST['id'];
	//$password = $_POST['Password'];
	require 'connect.inc.php';
	
	if(!empty($email)){
		echo "password changed";
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
          <h4 class="modal-title">Forget Password</h4>
        </div>
        <div class="modal-body">
          <form role="form"action="forgetPassword.php" id="login" method="POST" >
			<div class="form-group">
				<label for="email">User ID</label>
				<input "type="email" id="email"  name="id"class="form-control" placeholder="Enter Recovery Mail">
			</div>
			<button style="float:right;"type="submit" class="btn btn-lg btn-primary">Send Recovery Password</span></button>
		  </form>
        </div>
		<br><br>
        
      </div>
      
    </div>
  </div>
