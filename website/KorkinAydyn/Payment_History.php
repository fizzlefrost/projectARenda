<html>
 <head>
  <title>WEB-site of the KorkinAydyn</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
<?php
printf('<P>Hello World! object  </P>');

include('config.php');	
$link = mysqli_connect($server, $user, $password, $database) or die('Error! You suck!'.mysqli_connect_error());
echo '<P>Successfully connected</P>';
                                
$SQLquery = 'SELECT * FROM Payment_History';
$SQLresult = mysqli_query($link,$SQLquery);
printf('<table cellspacing=\' 0 \' border=\' 1 \'> %s',"\n");
	printf('<TR> %s',"\n");
	printf('	<TH>ClientPass</TH> %s',"\n");
	printf('	<TH>Oplata</TH> %s',"\n");
	printf('	<TH>bankShet</TH> %s',"\n");
	printf('	<TH>ArendaPrice</TH> %s',"\n");
	printf('</TR> %s',"\n");
while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<TR>');
		printf('<TD> %d </TD> <TD>%d </TD> %d</TD> <TD> %D </TD> ',$result[0],$result[1],$result[2],$result[3]);
		printf('</TR> %s',"\n");
	}
	printf('</table> %s',"\n");

mysqli_free_result($SQLresult);
mysqli_close($link);

?>
<BR>
<a href="index.html"> <P>GO BACK</P> </a>
 </body>
</html>