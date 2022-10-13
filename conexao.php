<?php
/*
 * @author Cesar Szpak - Celke - cesar@celke.com.br
 * @pagina desenvolvida usando FullCalendar,
 * o código é aberto e o uso é free,
 * porém lembre-se de conceder os créditos ao desenvolvedor.
 */

define('HOST', 'localhost');
define('USER', 'hostdeprojetos_empresajotati');
define('PASS', '03060903jjj');
define('DBNAME', 'hostdeprojetos_gema');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
