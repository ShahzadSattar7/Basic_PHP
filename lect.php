<?php
$val_1=45;
$val_2=66;

echo "q1=".$val_1;
echo"<br/>";
echo "r2=".$val_2;
echo"<br/>";
//$opr="+";
$opr="-";
//$opr="*";
//$opr="/";

if($opr=="+")
{
    echo"addition=".($val_1+$val_2);
}
elseif($opr=="-")
{
    echo"substration=".($val_1-$val_2);
}
elseif($opr=="/")
{
    echo"division=".($val_1/$val_2);
}
elseif($opr=="*")
{
    echo"multiplication=".($val_1*$val_2);
}
else

?>
