

<?php
require 'vendor/autoload.php';
$client=new EasyRdf_Sparql_Client("http://localhost:8080/rdf4j-server/repositories/proiect");
$interogare="prefix : <http://danila.ro/>
	select ?actor ?rol ?film
where{
	?actor :joacaRolul/:personaj ?rol
	optional
	{?actor :joacaRolul/:inFilmul ?film}



}
";

echo '<h3 style="font-style:italic; text-align: center; font-size: 30px">Informatii actori</h3>';
echo  '<img src="rola.jpg"  style="position: absolute; left: 50px; top: 180px;" alt="icon" />';
$rezultat=$client->query($interogare);
print $rezultat->dump();


?>


