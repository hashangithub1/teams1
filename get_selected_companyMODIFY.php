<?php session_start();
include_once('includes/config.php');
// Retrieve selected product code from POST request
if(isset($_POST['selectedChannel'])){
    $code = $_POST['selectedChannel'];

  
   
    $sql = "SELECT * FROM tbl_company_mt WHERE bus_channel = '$code'";
                    $result = $con->query($sql);

                    while ($row = $result->fetch_assoc()) {
                        $compname = $row['name'];
                    }
    $_SESSION['companycode_form'] = $code;
    $_SESSION['companyname_form'] = $compname;
    $_SESSION['notification_handle'] = "";
    $_SESSION['notification'] = "";
    echo $pc;
} else {
    echo "Error: No product code received!";
}
?>
