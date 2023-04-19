<?php
global $db;
$sql = "SELECT value FROM config WHERE name='sales_stage_lost'";
print"<pre>";
echo 'Running Query........ <br>';
echo $sql.'<br>'; 
echo '<br>';
$result = $db->query($sql);
while($row = $db->fetchByAssoc($result)){
    echo 'Getting Data........ <br>';
    $prev_value = $row['value'];
    $sales_stages = json_decode(str_replace('&quot;', '"', $prev_value));
    $updated_options = array("Closed Lost","Closed Terminated");
    print_r($sales_stages);
    echo '<br>';

    echo 'Updating Data........ <br>';
    foreach($updated_options as $updated_option){
        $sales_stages[] = $updated_option;
    }
    print_r($sales_stages);
    echo '<br>';

    echo 'Removing Duplicate Data........ <br>';
    $sales_stages = array_unique($sales_stages);
    print_r($sales_stages);
    echo '<br>';

    echo 'Indexing Data........ <br>';
    $sales_stages = array_values($sales_stages);
    print_r($sales_stages);
    echo '<br>';

    echo 'Converting to db format ........ <br>';
    $sales_stages = json_encode($sales_stages,true);
    print_r($sales_stages);
    echo '<br>';
    echo '<br>';

    echo 'Updating config ........ <br>';
    $result = $db->query("UPDATE config set value='{$sales_stages}' where name='sales_stage_lost'");
    print_r($result);

}
die("DONE !!!");

  