<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script>
    function rangeoddeven($start,$end,$option) {
		//0 2 4 Even Odd 1 3 5
$result="";
		if (is_numeric($start) && is_numeric($end) && is_numeric($option)) {
			$result .= ($option==1) ? "<h3>EVEN Range From $start to $end </h3>" : "";
			$result .= ($option==2) ? "<h3>ODD Range From $start to $end </h3>": "";
			$result .="<p>";
			for($number=$start;$number<=$end;$number++){
				$result .= ($number % 2 == 0)? (($option==1)?$number.",":"") : (($option==2)?$number.",":"");
			}
			$result = rtrim($result,","); // remove Last coma "," from list
			$result .= ".</p>";
			return $result; 
		}else {
			return false;
		}
	}
    
    </script>
    <?php
	function rangeoddeven($start,$end,$option) {
		//0 2 4 Even Odd 1 3 5
		if (is_numeric($start) && is_numeric($end) && is_numeric($option)) {
			$result = ($option==1) ? "<h3>EVEN Range From $start to $end </h3>" : "";
			$result .= ($option==2) ? "<h3>ODD Range From $start to $end </h3>": "";
			$result .="<p>";
			for($number=$start;$number<=$end;$number++){
				$result .= ($number % 2 == 0)? (($option==1)?$number.",":"") : (($option==2)?$number.",":"");
			}
			$result = rtrim($result,",");
			$result .= ".</p>";
			return $result; 
		}else {
			return false;
		}
	}
	
	$result = "";
	$option="";
	$start="";
	$end="";
	$res = false;
	
	if (isset($_POST["submitrange"])) {
		$start = $_POST["startnumber"];
		$end = $_POST["endnumber"];
		$option = $_POST["option"];
		if($start<$end){
			$result = rangeoddeven($start, $end, $option);
		}
		else {
			$result = "<span style=\"color:red;\"> $start is Greater then $end</span>";
		}
		$res = true;
	}
?>
<div>
			<h3>Range of Odd & Even Numbers In Php Using Forms</h3>			
			<form method="post">
				<p>
					<strong>
						Enter The Starting Numbers :
					</strong> <input type="number" name="startnumber" maxlength="4" value="<?php echo $start; ?>" min="1" max="1000" required  /> </p>
				<p>
					<strong>
						Enter The End Numbers :
					</strong> <input type="number" name="endnumber" maxlength="4" value="<?php echo $end; ?>"  min="1" max="1000" required /> </p>
					<p>
						<select name="option" required>
							<option value="">SELECT</option>
							<option value="1" <?php echo ($option==1)?'selected="selected"':'';?> >EVEN</option>
							<option value="2" <?php echo ($option==2)?'selected="selected"':'';?> >ODD</option>
						</select>
					</p>
				<p> <input type="submit" name="submitrange" value="Submit" /> </p>
			</form>
		</div>
		<div>
			<?php
		if ($res)
			echo "$result";
			?>
		</div>

</body>
</html>