<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php
echo "<h1 text-align='center'>LENDO ARQUIVOS</h1>";
function write(){

	$arq="arquivo.txt";
	$arqA=fopen($arq,'a');
	fwrite($arqA,"saude E tudo\r\n");
	fclose($arqA);

}
function read(){
$arq="arquivo.txt";
$arqA=fopen($arq,'r');

while (!feof($arqA)) {
	$cont=fgets($arqA);
	echo $cont,"<br>";
	# code...
}
fclose($arqA);

}


write();
read();
?>