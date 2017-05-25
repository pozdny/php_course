<?php
//session_start();
//if ($_SESSION['key'] == $_GET['token']){ 
$myslqi = new mysqli("localhost", "root", "", "php");
$formHash = $_GET['form_hash'];
$result = $myslqi->query("SELECT id FROM forms WHERE hash = '$formHash'");
echo $result->num_rows;
if ($result->num_rows == 0) {
$query = "INSERT INTO forms (hash) VALUES('".$formHash."')";
$myslqi->query($query);
echo "получатель: ".$_GET['user'];
echo '<br>';
echo "Сумма - все деньги";
}
else {
    echo "Вы уже выполнили данную операцию";
}
// }
// else {
//     echo "Попытка взлома";
// }