<?
$data=file_get_contets("http://openapi.clearspending.ru/restapi/v3/contracts/select/?okpd=0112000");
$data=json_decode($data,true);
print_r($dtat);
exit();
print date('d.m.Y'); 
print 'sprint20'; 
?>
hello