<!DOCTYPE html>
<html>
<body>

<?php
$date = date_create('2019-01-01');
date_add($date, date_interval_create_from_date_string('1 year 35 days'));
echo date_format($date, 'Y-m-d');
?>

</body>
</html>
