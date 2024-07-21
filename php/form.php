<?php
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$cnic = $_REQUEST['cnic'];
$age = $_REQUEST['age'];
$email = $_REQUEST['email'];
$pnumber = $_REQUEST['pnumber'];
$address = $_REQUEST['address'];
$days = $_REQUEST['days'];

if($age<18){
    echo"<body style= 'background:linear-gradient(blue,black); '></body>";
    echo"<h1 style=' position:absolute; top:30%; left:25%; color:orange; font-size: 50px;'>Sorry! You are Underage(<18)</h1>";
}
else{
echo"<body style= 'background:linear-gradient(blue,black); '></body>";
echo"<h1 style=' position:absolute; top:0%; left:40%; color:orange; font-size: 50px;'>HK DataBase</h1>";
echo "
<table border=1 cellspacing=0 cellpading=30px style='color:black; position:absolute; top:20%; left:15%; font-size:20px; text-align:center; width:70%;'>
<tr style= 'background-color:orange; padding:10px; margin:20px;' >
<th>Name</th>
<th>CNIC</th>
<th>Age</th>
<th>E-mail</th>
<th>Phone Number</th>
<th>Address</th>
<th>Days to Stay</th>
</tr>
<tr style='background-color:yellow; padding:10px; margin:20px;'>
<td>$fname $lname</td>
<td>$cnic</td>
<td>$age</td>
<td>$email</td>
<td>$pnumber</td>
<td>$address</td>
<td>$days</td>
</tr>
</table>";
}
?>
