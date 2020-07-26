<?php
	require 'conn.php';
	
	if(ISSET($_POST['upload'])){
		$file = explode(".", $_FILES['filename']['name']);
		$ext = end($file);
		
		if($ext == "json"){
			$data = file_get_contents($_FILES['filename']['tmp_name']);
			$array = json_decode($data, true);
			try{				
				foreach($array as $row){
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = "INSERT INTO `member` (`firstname`, `lastname`, `gender`, `address`) VALUES ('$row[firstname]', '$row[lastname]', '$row[gender]', '$row[address]')";
					$conn->exec($sql);
				}
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		
			$conn = null;
			
			header("location: index.php");
		}else{
			echo "<script>alert('Only JSON file is available')</script>";
			echo "<script>window.location = 'index.php'</script>";
		}
	}
	
	
?>