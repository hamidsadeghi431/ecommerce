<?php
ob_start();
require_once("zarinpal_function.php");

header('Content-Type: text/html; charset=utf-8');
$servername = "localhost";
$username = "bigmarke_admin";
$password = "1qaz!QAZ2wsx";
$dbname = "bigmarke_laravel";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_query($conn,"SET CHARACTER SET utf8");
// echo "Connected successfully";

$Authority=$_GET['Authority'];
$status=$_GET['Status'];
$sql = "SELECT * FROM purchases WHERE transactionNo = '$Authority' ";
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
    header("Location: http://www.bigmarketvip.com/pay/$Authority/$code_pe/$status",true);
    exit;

//    header("location:/pay/$Authority/$code_pe/$status");
//    die($Authority.'/'.'/'.$code_pe.$status);
} else {
    // error
    $sql = "UPDATE purchases SET paystatus = '2' WHERE transactionNo = '$Authority'";

// Execute the update query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

// Close the connection
    $conn->close();
    die('hellllo');

    echo "پرداخت ناموفق";
    $status= $result["Status"];
    $message=$result["Message"];
    $code_pe= $result["RefID"];
    header("location:/pay/$Authority/$code_pe/$status/$message");

}
ob_end_flush();
