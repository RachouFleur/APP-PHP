<?php
$age=Readline("Entrez l'age");
if($age>=3 and  $age<=12)
{
    echo("$age enfant");
}
elseif($age>=13 and $age<=17){
    echo("$age mineur");
}
elseif($age>=18 and $age<=54){
    echo(" $age majeur");
}
elseif($age>=55){
echo("$age agée");
}

?>w