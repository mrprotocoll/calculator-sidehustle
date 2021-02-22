<?php 
$_SESSION['out'] = '';
if (isset($_POST['submit'])) {
    $num1 = $_POST['one'];
    $num2 = $_POST['two'];
    $operator = $_POST['operator'];
    switch ($operator) {
        case '+':
            $_SESSION['out'] = "{$num1} + {$num2} = ".$num1+$num2;
        break;
        case '-':
            $_SESSION['out'] = "{$num1} - {$num2} = ".$num1-$num2;
        break;
        case '*':
            $_SESSION['out'] = "{$num1} * {$num2} = ".$num1*$num2;
        break;
        case '/':
            $_SESSION['out'] = "{$num1} / {$num2} = ".$num1/$num2;
        break;
        
    }
}
$out = $_SESSION['out'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <form method="post">
    <table style="border-collapse: collapse; border:1px solid black" width="500px" align="center">
			<tr>
				<th>Your Result</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo $out;?>"/></th>
			</tr> 
			
			<tr>
				<th>Enter your First Number</th>
				<th><input type="number" name="one" value="<?php echo isset($num1) ? $num1 : '' ?>"/></th>
			</tr> 
			
			<tr>
				<th>Select Operator</th>
				<th>
				<select name="operator">
					<option value="+">+</option>
					<option value="-">-</option>
					<option value="*">*</option>
                    <option value="/">/</option>
				</select>
				</th>
			</tr>
            <tr>
				<th>Enter your Second Number</th>
				<th><input type="number" name="two" value="<?php  echo isset($num2) ? $num2 : '';?>"/></th>
			</tr>
			<tr>
				
				<th colspan="2">
                    <button type="submit" name="submit" value="submit">Calculate</button>
				</th>
			</tr>
		</table>
        
    </form>

       
</body>
</html>