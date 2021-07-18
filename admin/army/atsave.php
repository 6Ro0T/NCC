<?php
   include('conn.php');
   if(ISSET($_POST['submit'])){
       
       // $id=$_REQUEST[''];
        $name=$_POST['name'];
        $date=$_REQUEST['date'];
        $check=$_POST['check'];
		$i=0;
		 While($i < sizeof($check))
		{
			echo "CheckBox Selected Values = " . $check[$i] . '</br>';
 
			$i++;
		}
		echo $date;
       // $sql1="INSERT INTO `attendance`(`id`, `name`, `date`, `isPresent`) VALUES ('$id','$name','$date','$check')";
        //$stmt1=mysqli_query($conn,$sql1);
   }
?>