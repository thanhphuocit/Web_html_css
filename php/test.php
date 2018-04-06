<!DOCTYPE html>
<html>
<head>
<title>DK</title>
</head>
<body>
<?php 
$arrUserAvailabeDays = array(
    array(2,3,4,5,6,7,8,11,12,13,14,15),
    array(2,3,4,5,6,7,8,9,10,11,12,13),
    array(2,3,4,11,12,13),
    // array(2,3,4,5)
);
$kq= $arrUserAvailabeDays[0];

foreach($arrUserAvailabeDays as $key => $value)
{
    // echo '<br/>key'.$key.'value';
    // print_r($value);
    $kq= array_intersect($value,$kq);    
}
//array_intersect(arrUserAvailabeDays[1]);
$abc =array();
//print_r($kq);

for($i= 0;$i< count($kq);$i++)
{
  if(in_array($kq[$i]+1,$kq) && in_array($kq[$i]+2,$kq))
  {
      array_push($abc,$kq[$i]);
  }
}
print_r($abc);

?>
</body>
</html>