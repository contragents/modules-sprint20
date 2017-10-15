<?
print_r($_SERVER);
print_r($_GET);
print $data=file_get_contents("http://openapi.clearspending.ru/restapi/v3/contracts/select/?okdp_okpd={$_GET[okpd]}");
$data=json_decode($data,true);
$total=$data[contracts][total];
foreach($data[contracts][data] as $contract)
print_r($contract[productsCountries]); 
print_r($data);

exit();
print date('d.m.Y'); 
print 'sprint20'; 
?>
hello