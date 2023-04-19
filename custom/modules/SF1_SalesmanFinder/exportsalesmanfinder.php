<?php
 //if(!defined('sugarEntry'))define('sugarEntry', true);
//custom/modules/SF1SalesmanFinder/export_salesman_finder.php
ob_end_clean();



header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=export_SalesmanFinder.csv');



 require_once 'modules/Configurator/Configurator.php';  
     
global $db, $sugar_config; 


    $db_host_name = $sugar_config['dbconfig']['db_host_name'];
	$db_user_name = $sugar_config['dbconfig']['db_user_name'];
	$db_password = $sugar_config['dbconfig']['db_password'];
	$db_name = $sugar_config['dbconfig']['db_name'];
	
	
	

//$conn = mysql_connect('localhost', 'root', 'sugar200fifth') or die(mysql_error());
//mysql_select_db('starrett', $conn) or die(mysql_error($conn));

//$conn = mysql_connect($db_host_name, $db_user_name, $db_password) or die(mysql_error());
//mysql_select_db($db_name, $conn) or die(mysql_error($conn));

$conn = mysql_connect($sugar_config['dbconfig']['db_host_name'], $sugar_config['dbconfig']['db_user_name'], $sugar_config['dbconfig']['db_password']);
mysql_select_db($sugar_config['dbconfig']['db_name'], $conn);



$query = sprintf("SELECT * FROM sf1_salesmanfinder, sf1_salesmanfinder_cstm WHERE sf1_salesmanfinder.id = sf1_salesmanfinder_cstm.id_c AND sf1_salesmanfinder.deleted = '0'");
$result = mysql_query($query, $conn) or die(mysql_error($conn));

//$result = $db->query("SELECT * FROM sf1_salesmanfinder WHERE deleted = '0'");
/*
 * send response headers to the browser
 * following headers instruct the browser to treat the data as a csv file called export.csv
 */



/*
 * output header row (if atleast one row exists)
 */

$row = mysql_fetch_assoc($result);
if ($row) {
    echocsv(array_keys($row));
}

/*
 * output data rows (if atleast one row exists)
 */

while ($row) {
    echocsv($row);
    $row = mysql_fetch_assoc($result);
}

/*
 * echo the input array as csv data maintaining consistency with most CSV implementations
 * - uses double-quotes as enclosure when necessary
 * - uses double double-quotes to escape double-quotes 
 * - uses CRLF as a line separator
 */
 


function echocsv($fields)
{
    $separator = '';
    foreach ($fields as $field) {
        if (preg_match('/\\r|\\n|,|"/', $field)) {
            $field = '"' . str_replace('"', '""', $field) . '"';
        }
        echo $separator . $field;
        $separator = ',';
    }
    echo "\r\n";
}
?>