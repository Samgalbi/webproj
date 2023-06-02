<?php
$html="<html><head><title>bonjour</title></head><body>";
if(isset($_GET['email']))
{
    if(!empty($_GET['email']))
    {
        $html.="vous avez saisi'".$_GET['email']."'\n";
    }
    else
    $html.="aucunne valeur saisi \n";
}
else
$html.="utilissation incorrecte\n";
echo $html."</body>\n</html>";