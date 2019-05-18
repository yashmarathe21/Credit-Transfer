<?php  
	session_start();
	include("core/init.php");
	if(isset($_POST['transfer'])){
		$sender_id=htmlentities(mysqli_real_escape_string($con,$_POST['sender']));
		$receiver_id=htmlentities(mysqli_real_escape_string($con,$_POST['receiver']));
		$credit=htmlentities(mysqli_real_escape_string($con,$_POST['credit']));
		$send = "select credits from user where user_id=$sender_id";
		$receive = "select credits from user where user_id=$receiver_id";
		$query1 = mysqli_query($con,$send);
		$query2 = mysqli_query($con,$receive);
		$check_user1 = mysqli_num_rows($query1);
		$check_user2 = mysqli_num_rows($query2);
		$result1 = $con->query($send);
		$data1 = $result1->fetch_assoc();
		$sender_credits = $data1['credits'];
		$result2 = $con->query($receive);
		$data2 = $result2->fetch_assoc();
		$receiver_credits = $data2['credits'];
		if($check_user1 == 1 and $check_user2 == 1 and ($sender_credits - $credit) > 0){
			$send_up = "update user set credits = ($sender_credits - $credit) where user_id = $sender_id";
			$update_sender = mysqli_query($con,$send_up);
			$receive_up = "update user set credits = ($receiver_credits + $credit) where user_id = $receiver_id";
			$update_receiver = mysqli_query($con,$receive_up);
			echo "<script>window.open('users.php','_self')</script>";			
		}
		else{
			echo "
			<div class='alert alert-danger'>
				<strong>The sender doesn't have enough credits or check IDs of the users.</strong>
			</div>
			";
		}
	}
?>