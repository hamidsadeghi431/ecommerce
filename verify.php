<?php
require_once("zarinpal_function.php");
header('Content-Type: text/html; charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "imencontrolamn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_query($conn,"SET CHARACTER SET utf8");
// echo "Connected successfully";

$Authority=$_GET['Authority'];
$status=$_GET['Status'];
$sql = "SELECT * FROM user_purchaces WHERE transactionID = '$Authority' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $price=$row["price"];
    }
}

$MerchantID = "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx";
$Amount = $price;
$ZarinGate = false;
$SandBox = true;

$zp = new zarinpal();
$result = $zp->verify($MerchantID, $Amount, $SandBox, $ZarinGate);

if (isset($result["Status"]) && $result["Status"] == 100) {
    // Success
    echo "تراکنش با موفقیت انجام شد";
    echo "<br />مبلغ : " . $result["Amount"];
    $code_pe= $result["RefID"];
    echo "<br />Authority : " . $result["Authority"];
    header("location:/pay/$Authority/$code_pe/$status");
} else {
    // error
    echo "پرداخت ناموفق";
    $status= $result["Status"];
    $message=$result["Message"];
    $code_pe= $result["RefID"];
    header("location:/pay/$Authority/$code_pe/$status/$message");

}
