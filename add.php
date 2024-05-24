<?php



if (isset( $_GET['nm']) && isset( $_GET['nmp']) && isset( $_GET['nmm']) && isset( $_GET['dt']) && isset( $_GET['nac']) && isset( $_GET['natu']) && isset( $_GET['bi']) && isset( $_GET['res'])) {
	// code...

$nm = $_GET['nm'];
$nmp=$_GET['nmp'];
$nmm=$_GET["nmm"];
$dt=$_GET["dt"];
$nac=$_GET['nac'];
$natu=$_GET['natu'];
$bi=$_GET['bi'];
$res=$_GET['res'];


if (is_dir("alunos")) {
	// code...
	echo "sucess";
}else{
	mkdir("alunos");
}

$ttl = "obj={ nm:$nm, nomep: $nmp,nmm: $nmm, dt: $dt, nac: $nac , natu: $natu, bi:$bi, res:$res}";
echo "OOO";
$f= fopen("alunos/".$nm, "w");
fwrite($f, $ttl);
fclose($f);

}

?>

# tttttt
