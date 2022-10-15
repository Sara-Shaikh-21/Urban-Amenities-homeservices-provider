<?php
require_once __DIR__ . '/vendor/autoload.php';
require "conn.php";

$name=$_GET['name'];
$sql="SELECT * from bookings where fname='$name'";
$statement=$conn->prepare($sql);
$statement->execute(); 
$answers=$statement->fetchAll();

$name=$answers[0]['fname']." ".$answers[0]['lname'];
$contact=$answers[0]['contact'];
$adder=$answers[0]['adder'];
$dates=$answers[0]['dates'];
$payment=$answers[0]['payment'];
$queries=$answers[0]['queries'];


//create a new pdf instance
$mpdf=new \Mpdf\Mpdf();

//create our pdf
$data=" ";
$data.='<h1>CLIENT DETAILS</h1>';

//add data
$data.='<strong><br>Name of Customer : </strong>'.$name.".";
$data.='<strong><br>Address of Customer :</strong> '.$adder.".";
$data.='<strong><br>Contact No. of Customer : </strong>'.$contact.".";
$data.='<strong><br>Date of Appointment : </strong>'.$dates.".";
$data.='<strong><br>Mode of Payment : </strong>'.$payment.".";
$data.='<strong><br>Special Queries of Customer : </strong>'.$queries.".";

//write pdf
$mpdf->WriteHTML($data);


//output to browser
$mpdf->Output('myfile.pdf','D');

?>