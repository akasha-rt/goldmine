<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


$sql= "SELECT table_schema as database_name,
       table_name,
       round( (data_length + index_length) / 1024 / 1024, 2)  as total_size,
       round( (data_length) / 1024 / 1024, 2)  as data_size,
       round( (index_length) / 1024 / 1024, 2)  as index_size
from information_schema.tables
where table_schema not in ('information_schema', 'mysql',
                           'performance_schema' ,'sys')
      and table_type = 'BASE TABLE'
      and table_schema = 'db_starrettco'
order by total_size desc
limit 40;";
echo "<table><tr>";
echo "<th>database_name</th>";
echo "<th>table_name</th>";
echo "<th>total_size</th>";
echo "<th>data_size</th>";
echo "<th>index_size</th>";
echo "</tr>";
$result = $GLOBALS['db']->query($sql);
while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
	echo "<tr>";
	echo "<td>" . $row['database_name'] . "</td>";
	echo "<td>" . $row['table_name'] . "</td>";
	echo "<td>" . $row['total_size'] . "</td>";
	echo "<td>" . $row['data_size'] . "</td>";
	echo "<td>" . $row['index_size'] . "</td>";
	echo "</tr>";
}
echo "</table>";