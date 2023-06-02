<?php
$html="<html><head><title>bonjour</title></head><body>";
if(isset($_GET['destination']))
{
    if(!empty($_GET['destination']))
    {
        $html.="vous avez saisi'".$_GET['destination']."'\n";
    }
    else
    $html.="aucunne valeur saisi \n";
}
else
$html.="utilissation incorrecte\n";


if(isset($_GET['people']))
{
    if(!empty($_GET['people']))
    {
        $html.="vous avez saisi'".$_GET['people']."'\n";
    }
    else
    $html.="aucunne valeur saisi \n";
}
else
$html.="utilissation incorrecte\n";



if(isset($_GET['checkin']))
{
    if(!empty($_GET['checkin']))
    {
        $html.="vous avez saisi'".$_GET['checkin']."'\n";
    }
    else
    $html.="aucunne valeur saisi \n";
}
else
$html.="utilissation incorrecte\n";



if(isset($_GET['checkout']))
{
    if(!empty($_GET['checkout']))
    {
        $html.="vous avez saisi'".$_GET['checkout']."'\n";
    }
    else
    $html.="aucunne valeur saisi \n";
}
else
$html.="utilisation incorrecte\n";


echo $html."</body>\n</html>";