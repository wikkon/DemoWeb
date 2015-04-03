<?php 
$host = 'localhost:D:\STREAM soft\stabilna\Baza\LAPP.fb';
$username = SYSDBA;
$password = masterkey;
$dbh = ibase_connect($host, $username, $password, 'WIN1250');
$stmt = 'SELECT N.ID_NAGL, N.DATADOK, N.NRDOKWEW FROM NAGL N';
$sth = ibase_query($dbh, $stmt);
while ($row = ibase_fetch_object($sth)) {
    echo $row->NAZWA_KOLUMNY, "\n";
}
ibase_free_result($sth);
ibase_close($dbh);
?>