<?php
mysql_connect('localhost','root','') or die('erreur de connexion au serveur');
mysql_select_db('ecom')or die('erreur de connexion a la bd');
mysql_set_charset("utf8", $connection);


?>