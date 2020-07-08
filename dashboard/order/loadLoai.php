<?php
	$connect = new PDO("mysql:host=localhost;dbname=bai3tiep", "root", "");
	$query = "SELECT * FROM loaihang ORDER BY id DESC";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$id = $_POST['id'];
	if($total_row > 0)
	{
		$output = '';
		foreach($result as $row)
		{	
				if($id==$row["id"]){
					$output .= '<option value="'.$row["id"].'" selected>'.$row["tenhang"].'</option>';
				}else{
					$output .= '<option value="'.$row["id"].'">'.$row["tenhang"].'</option>';
				}				
		}
	}
	else
	{
		$output .= '
						<option value="0">lỗi</option>
		';
	}
	echo $output;
?>