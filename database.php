<?php
$sno=$_POST['sno'];
$regno=$_POST['regno'];
$name=$_POST['name'];
$year=$_POST['year'];
$department=$_POST['department'];
$section=$_POST['section'];
$teaudio01=$_POST['teaudio01'];
$teaudio02=$_POST['teaudio02'];
$teaudio03=$_POST['teaudio03'];
$teaudio04=$_POST['teaudio04'];
$conn=new mysqli('localhost','root','','english project');
if(&conn->connect_error){
    die('Connection Failed : '.&conn->connection_error);
}
else{
    $stmt=&conn->prepare("insert into audioreport(sno,regno,Name,Year,Department,Section,TEAUDIO01,TEAUDIO02,TEAUDIO03,TEAUDIO04)values(?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("iisissiiii",$sno,$regno,$Name,$Year,$Department,$Section,$TEAUDIO01,$TEAUDIO02,$TEAUDIO03,$TEAUDIO04);
    $stmt->execute();
    echo "successful";
    $stmt->close();
    $conn->close();
}
?>