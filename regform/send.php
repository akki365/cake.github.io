<?php
$cname=$_POST['cname'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$weight=$_POST['weight'];
$food=$_POST['food'];
$message='You Will Get Cake With In One Hour';

$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "http://bulksms.mayur-itech.com/submitsms.jsp?user=SiddhiVi&key=d5826c97a9XX&mobile=$phone&message=".urlencode($message)."&senderid=NOTIFY&accusage=1");

curl_setopt($ch, CURLOPT_HEADER, 0);

// grab URL and pass it to the browser
curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);

echo "Order Place Successfully";
?>