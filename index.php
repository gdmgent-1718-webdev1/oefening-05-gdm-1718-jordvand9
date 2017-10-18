<?php
//$leeftijd = 14;
function checkLeeftijd($leeftijd)
{
    if($leeftijd<=16)
    {
        echo "jonger dan 16 jaar: ${leeftijd} jaar is te jong voor deze film" . PHP_EOL;
    }
    else if($leeftijd >= 16 and $leeftijd <=18)
    {
        echo "tussen 16 en 18 jaar: ${leeftijd} jaar, je hebt ouderlijk toezicht nodig." . PHP_EOL;
    }
    else if($leeftijd >= 18)
    {
        echo "18 of ouder: “Je bent al ${leeftijd} jaar. Geniet van de film!" .PHP_EOL;
    }
}
for($i = 15;$i<20;$i++)
{
    checkLeeftijd($i);
}
?>