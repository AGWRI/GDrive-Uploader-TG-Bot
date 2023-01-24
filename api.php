<?php
// Check if the request contains a "codecanyon_app_template_purchase_code" query parameter
if (isset($_GET['codecanyon_app_template_purchase_code'])) {
// Store the value of the parameter in a variable
$purchase_code = $_GET['codecanyon_app_template_purchase_code'];
echo "Regular";
// Process the purchase code according to your needs
// For example, you could verify it with an API or store it in a database
// ...
}
?>
