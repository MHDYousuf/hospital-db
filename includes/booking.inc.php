<?php
	if(isset($_POST['booking-submit'])){

		require 'dbh.inc.php';

		$first= $_POST['first'];
		$last= $_POST['last'];
		$number= $_POST['contact'];
		$address= $_POST['address'];
		$department= $_POST['department'];
		$dateappointment= $_POST['date'];
		$dob=$_POST['dob'];
		$dp="Choose Department";

		if(empty($first) || empty($last) || empty($number) || empty($address) || empty($department) || empty($dateappointment) || empty($dob)){

			header("Location: ../booking.php?error=emptyfields&first=".$first."&last=".$last."&number=".$number);
			exit();
		}
		elseif(!preg_match("/^[a-zA-Z ]*$/", $first) && !preg_match("/^[a-zA-Z ]*$/", $last)){
			header("Location: ../booking.php?error=invalidfirst&last");
			exit();
		}
		elseif(!preg_match("/^[a-zA-Z ]*$/", $first)){
			header("Location: ../booking.php?error=invalidfirst");
			exit();
		}
		elseif(!preg_match("/^[a-zA-Z ]*$/", $last)){
			header("Location: ../booking.php?error=invalidlast");
			exit();
		}
		elseif($department === $dp){
			header("Location: ../booking.php?error=departmentcheck&first=".$first."&last=".$last);
			exit();
		}
		/*elseif($department !== 'Physician' || $department !== 'Neurology' || $department !== 'Gynecology' || $department !== 'Pediatrician' || $department !== 'Cardiology'){
			header("Location: ../booking.php?error=departmentcheck&first=".$first."&last=".$last);
			exit();
		}
		/*else{

			$sql = "SELECT uidUsers FROM users WHERE uidUsers=?;";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../signup.php?error=sqlerror");
				exit();
			} else {
				mysqli_stmt_bind_param($stmt,"s",$username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if($resultCheck > 0){
					
					header("Location: ../signup.php?error=usertaken&mail=".$email);
					exit();

				}*/
				else{

					$sql="INSERT INTO booking(firstname, lastname, Phonenumber, address, department, dateappointment,dob) VALUES(?, ?, ?, ?, ?, ?, ?)";
					$stmt = mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt,$sql)){
						header("Location: ../booking.php?error=sqlerror");
						exit();
					}else{
						mysqli_stmt_bind_param($stmt,"ssissss",$first, $last, $number, $address, $department, $dateappointment, $dob);
						mysqli_stmt_execute($stmt);
						header("Location: ../booking.php?booking=success");
						exit();
					}
				}
			/*}
		/*}*/
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}
	else{
		header("Location: ../booking.php");
		exit();
	}
