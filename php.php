<?php
$a = 1;
$b = 0;

if ( $a == 2)
{
$b = 3;
} 
else
{
$b = 3 - $a;
}
echo $b;
$rayon['legumes'] = array('courgette','aubergine','concombre');
$rayon['fruits'] = array('banane','orange','cerise');
	
echo $rayon['fruits'][2];
$comptage = 0;
$donnees = array();
$donnees[] = 'John';
$donnees[] = 'Peter';
$donnees[] = 'Jack';
$donnees[1] = 'Matthew';
$comptage += count($donnees);
echo $comptage;



$a=42;
if($a==0){
echo 'POM';
}elseif($a<16){
echo 'POI';
}elseif($a>42){
echo 'AB';}
else{echo 'OR';
}


/*
function calculSoldes($prix, $reduc = 20)
{
$prix_solde = $prix * ( (100-$reduc) / 100 );
return $prix_solde;
}

echo calculSoldes(100);
echo calculSoldes(100,25);
echo calculSolde(100,50);
*/
echo "bonjour";

$a = 1;
$b = 0;

if ( $a == 2)
{
$b = 3;
} 
else
{
$b = 3 - $a;
}
echo $b;

$comptage = 0;
$donnees = array();
$donnees[] = 'John';
$donnees[] = 'Peter';
$donnees[] = 'Jack';
$donnees[1] = 'Matthew';
$comptage += count($donnees);
echo $comptage;

function calculSoldes($prix, $reduc = 20)
{
$prix_solde = $prix * ( (100-$reduc) / 100 );
return $prix_solde;
}
echo "<br>";
echo calculSoldes(100);//80
echo calculSoldes(100,25);//75
echo calculSolde(100,50);
