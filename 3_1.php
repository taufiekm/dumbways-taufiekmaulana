<?php
echo "<div>";
echo $From_date= $_POST['from_date'];
echo "</div>";
$to_date= $_POST['to_date'];
$day_count=0;
while(0==0)
{
    
    $day_count++;
    echo "<div>";
    echo $From_date= date('Y-m-d',strtotime($From_date . "+1 days"));
    echo "</div>";
    //if($day_count==10)
    if($From_date==$to_date)
    {
        break;
    }
    
}
?>