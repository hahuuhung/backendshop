<?php
 if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
	

	//Bài 1
	// $firtName = "Nguyễn";
	// $nuber = 12;
	// //var_dump($firtName);
	// echo gettype($firtName);

	//Bài 2 câu hỏi 8  có thể chuyển đổi kiểu dữ liệu sang kiểu dữ liệu khác không?

// 	$number = 12.34;
// // echo (int)$number; // 12
// // settype($number, 'integer'); // true
// echo $number; // 12
//  Bài 5"
// echo is_numeric('12.34'); // true
	
//  Bài 6 khai báo hằng:  const PI = 3.14; define('PI', 3.14);
//  Bài 7 mảng $arr = array(1, 2, 3, 4, 5); echo $arr[0]; // 1 
// length of array echo count($arr); // 5 
// sizeof($arr); // 5 ; count($arr); // 5  
// $arr[1]= 10;
// $arr2=array("fullname"=>"Nguyen Van A","age"=>20);
// echo $arr2["fullname"]; // Nguyen Van A

// $arr2=array("fullname"=>"Nguyen Van A","age"=>20,"address"=>"Ha Noi");
// echo $arr2["address"]; // Ha Noi
//$arr3=[["fullname"=>"Nguyen Van A","age"=>20,"address"=>"Ha Noi"],["fullname"=>"Nguyen Van B","age"=>20,"address"=>"Ha Noi"],[ "fullname"=>"Nguyen Van C","age"=>20,"address"=>"Ha Noi"]];
//length of array echo count($arr2); // 3, max-index = 2, index: 0, 1, 2

//Bài 8 Toán tử PHP	
//++, --, +=, -=, *=, /=, .=, %=, ==, ===, !=, !==, >, <, >=, <=, &&, ||, !, and, or, xor

//Bài 9 Toán tử PHP thực hành
	
	/* 
	echo phpversion(); echo "<br>";echo "\n<br>";
	echo is_numeric(1.22); echo "<br>";echo "\n<br>";

	echo is_int(1.22); echo "<br>";echo "\n<br>";
	echo is_float(1.22); echo "<br>";echo "\n<br>";
	echo is_long(1.22); echo "<br>";echo "\n<br>";
	echo is_finite(1.22); echo "<br>";echo "\n<br>"; */
/* xin chào các bạn đoạn code này  */
/* $x = 2;
$y=$x+2;
echo $y;	/// 	4 */
$number=20;	

if  (number%2==0) {
	echo "Số chẵn";
} else {
	echo "Số lẻ";
}

?>

