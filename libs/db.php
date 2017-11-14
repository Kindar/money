<?

if ($_GET['Kindar'] == 'me'){
setcookie("kindarme", "kindarme",time() + (86400 * 900) ,  "/");
}

function  money_get($table , $where = ''){
    global $connect;
$query = sprintf("SELECT * FROM %s %s ORDER BY id DESC",$table , $where);
	$result = mysqli_query($connect,$query);
	while ($row = mysqli_fetch_assoc($result)) {
		 $shows[] = $row;
	}
	return $shows;
}

 function money_sum($table , $where = ''){
    global $connect;
    $query = sprintf("SELECT * FROM %s %s",$table , $where);
	$result = mysqli_query($connect,$query);
	while ($row = mysqli_fetch_assoc($result)) {
		 $shows[] = $row;
	}
	return $shows;
}




function money_bank_add($in,$out,$des){
    global $connect;

	$add_in = $in;
	$add_out = $out;
	$add_des = $des;

	if ($add_in =='')
		$add_in = 0;
	if ($add_out =='')
		$add_out = 0;

	$query = sprintf("INSERT INTO `bank` VALUES (NULL,'%s','%s','%s',CURDATE())" , $add_in,$add_out,$add_des);
	$qresult = mysqli_query($connect,$query) or die(mysqli_error());
	if (!$qresult)
		return false;
	else
	return true	;
}


function money_bank_del($id){
    global $connect;

	$id = (int) $id;

	$query = sprintf("DELETE FROM bank WHERE id = %d" , $id);
	$qresult = mysqli_query($connect,$query);
	if (!$qresult)
		return false;
	return true	 ;
}


function money_bank_update($id,$in,$out,$des){
    global $connect;

	if($id == 0)
		return false;

	$fields = array();
	$query = "UPDATE bank SET";
	if (empty($in)) 
		$fields[count[$fields]] = "in = $in";
	if (empty($out)) 
		$fields[count[$fields]] = "out = $out";
	if (empty($des)) 
		$fields[count[$fields]] = "des = $des";

	$fcount = count($fields);
	if ($fcount == 1) {
		$query .= $fields[0] . "WHERE id = " . $id;
		$qresult = mysqli_query($connect,$query);
		if(!$qresult)
			return false;
		else
			return true;
	}
	

}





### Cash 







function money_cash_add($in,$out,$des){
    global $connect;

	$add_in = $in;
	$add_out = $out;
	$add_des = $des;

	if ($add_in =='')
		$add_in = 0;
	if ($add_out =='')
		$add_out = 0;

	$query = sprintf("INSERT INTO `cash` VALUES (NULL,'%s','%s','%s',CURDATE())" , $add_in,$add_out,$add_des);
	$qresult = mysqli_query($connect,$query) or die(mysqli_error());
	if (!$qresult)
		return false;
	else
	return true	;
}


function money_cash_del($id){
    global $connect;

	$id = (int) $id;

	$query = sprintf("DELETE FROM cash WHERE id = %d" , $id);
	$qresult = mysqli_query($connect,$query);
	if (!$qresult)
		return false;
	return true	 ;
}


function money_cash_update($id,$in,$out,$des){
    global $connect;

	if($id == 0)
		return false;

	$fields = array();
	$query = "UPDATE cash SET";
	if (empty($in)) 
		$fields[count[$fields]] = "in = $in";
	if (empty($out)) 
		$fields[count[$fields]] = "out = $out";
	if (empty($des)) 
		$fields[count[$fields]] = "des = $des";

	$fcount = count($fields);
	if ($fcount == 1) {
		$query .= $fields[0] . "WHERE id = " . $id;
		$qresult = mysqli_query($connect,$query);
		if(!$qresult)
			return false;
		else
			return true;
	}
	

}



### Benf 





function money_benef_add($name){
    global $connect;

	$add_name = $name;

	$query = sprintf("INSERT INTO `benef` VALUES (NULL, '%s' )" , $add_name);
	$qresult = mysqli_query($connect,$query) or die(mysqli_error());
	if (!$qresult)
		return false;
	else
	return true	;
}



function money_benef_del($id){
    global $connect;

	$id = (int) $id;

	$query = sprintf("DELETE FROM benef WHERE id = %d" , $id);
	$qresult = mysqli_query($connect,$query);
	if (!$qresult)
		return false;
	return true	 ;
}




## Loan

function money_loan_add($in,$out,$des,$bid){
    global $connect;

	$add_in = $in;
	$add_out = $out;
	$add_des = $des;
	$add_bid = $bid;

	if ($add_in =='')
		$add_in = 0;
	if ($add_out =='')
		$add_out = 0;

	$query = sprintf("INSERT INTO `loan` VALUES (NULL,'%s','%s','%s','%s',CURDATE())" , $add_in,$add_out,$add_des,$add_bid);
	$qresult = mysqli_query($connect,$query) or die(mysqli_error());
	if (!$qresult)
		return false;
	else
	return true	;
}















?>