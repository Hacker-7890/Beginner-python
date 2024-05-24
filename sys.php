<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sys</title>

	<script type="text/javascript">
		
		window.onload = function(){

			
					pg = document.getElementsByClassName('pg')
					info2 = document.getElementsByClassName('info')
					var add = document.getElementById('add')
					msN = document.getElementById("msN")
					nm = document.getElementById("nm")
					nmp = document.getElementById("nmp")
					nmm = document.getElementById("nmm")
					dt = document.getElementById("dt")
					nac = document.getElementById("nac")
					natu = document.getElementById("natu")
					bi = document.getElementById("bi")
					res = document.getElementById("res")
					adic = document.getElementById("adic")
					cnt = document.getElementById("cnt")

					lg = document.getElementById("lg")
					info = document.getElementById("infp")

					mensbox = document.getElementById("mensBox")
					sairm = document.getElementById("sairm")
					sairi = document.getElementById("sairi")
					nme = document.getElementById("nme")
					tel = document.getElementById("tel")
					tele = document.getElementById("tele")
					gen = document.getElementById("gen")
					ass = document.getElementById("ass")

					tknm = document.getElementById("tknm")
					tknmp = document.getElementById("tknmp")
					tknmm = document.getElementById("tknmm")
					tkdt = document.getElementById("tkdt")
					tknac = document.getElementById("tknac")
					tknat = document.getElementById("tknat")
					tkbi = document.getElementById("tkbi")
					tkres = document.getElementById("tkres")
					
					tkcont = document.getElementById("tkcont")

					tknme = document.getElementById("tknme")
					tktel = document.getElementById("tkcont")
					tktele = document.getElementById("tktele")
					tkgen = document.getElementById("tkgen")
					tkass = document.getElementById("tkass")





					


function ajx(fl,v){

			http = new XMLHttpRequest()

			http.onreadystatechange=function(){
				if(this.readyState==4 && this.status == 200){
					if(v==1){
						alert(this.responseText)
					}

					if(v==0){
						return this.responseText
					}

				}
			}
			http.open('Get',fl,true)
			http.send()
					}


					start = () => {
							ajx("start.php",0);
					}

					start()

					for (var i = 0; i < info2.length; i++) {
						info2[i].onclick=function(e) {
							infp.style.display="block"
							http2 = new XMLHttpRequest()

			http2.onreadystatechange=function(){
				if(this.readyState==4 && this.status == 200){
							ob=eval(this.responseText)

						
						tknm.innerText=ob.nm
						tkbi.innerText=ob.bi
						tknmp.innerText=ob.nomep
						tknmm.innerText=ob.nmm
						tkdt.innerText=ob.dt
						tknac.innerText=ob.nac
						tknat.innerText=ob.natu
						tkres.innerText=ob.res
						tkcont.innerText=ob.tel
						tkgen.innerText=ob.gen
						tktele.innerText=ob.tele
						tkass.innerText=ob.ass
	
				}
			}
			http2.open('Get',"alunos/"+e.target.id,true)
			http2.send()
							
						
						}
					}

					for (var i = 0; i < pg.length; i++) {
						pg[i].onclick=function(e) {
							mensbox.style.display="block"
							msN.innerText=e.target.id
						
						}
					}

					sairi.onclick=function() {
						info.style.display="none"
					}
					sairm.onclick=function() {
						mensbox.style.display="none"
					}

					adic.onclick=function() {
						ajx("add.php?nm="+nm.value+"&nmp="+nmp.value+"&nmm="+nmm.value+"&dt="+dt.value+"&nac="+nac.value+"&natu="+natu.value+"&bi="+bi.value+"&res="+res.value+"&tele="+tele.value+"&tel="+tel.value+"&nme="+nme.value+"&ass="+ass.value+"&gen="+gen.value  )
						setTimeout(function() {
							window.location.href=window.location

						},200)
						

					}
					add.onclick=function() {
						lg.style.display="block"
					}

					


		}
	</script>

	<style type="text/css">
		
		#nm{
			width: 80%;
			height: 4%;
			position: absolute;
			top: 18%;
			left:10%;
			border: 0px;
			border-bottom: 2px solid slategray;

		}
		#nmp{
			width: 38%;
			height: 4%;
			position: absolute;
			top:28%;
			border: 0px;
			border-bottom: 2px solid slategray;
			left:10%;

		}

		#nmm{
			width: 38%;
			height: 4%;
			position: absolute;
			top:28%;
			right:10%;
			border: 0px;
			border-bottom: 2px solid slategray;

		}

		#nme{
			width: 38%;
			height: 4%;
			position: absolute;
			top:38%;
			left:10%;
			border: 0px;
			border-bottom: 2px solid slategray;

		}
		#gen{
			width: 38%;
			height: 4%;
			position: absolute;
			top:38%;
			right:10%;
			border: 0px;
			border-bottom: 2px solid slategray;

		}

		#dt{
			width: 38%;
			height: 4%;
			position: absolute;
			top:48%;
			left:10%;
			border: 0px;
			border-bottom: 2px solid slategray;

		}
		#nac{
			width: 38%;
			height: 4%;
			position: absolute;
			top:48%;
			right:10%;
			border: 0px;
			border-bottom: 2px solid slategray;

		}
		#natu{
			width: 38%;
			height: 4%;
			position: absolute;
			top:58%;
			left:10%;
			border: 0px;
			border-bottom: 2px solid slategray;

		}

		#bi{
			width: 38%;
			height: 4%;
			position: absolute;
			top:58%;
			right:10%;
			border: 0px;
			border-bottom: 2px solid slategray;

		}
		#ass{
			width: 38%;
			height: 4%;
			position: absolute;
			top:68%;
			left:10%;
			border: 0px;
			border-bottom: 2px solid slategray;

		}

		#res{
			width: 38%;
			height: 4%;
			position: absolute;
			top:68%;
			right:10%;
			border: 0px;
			border-bottom: 2px solid slategray;

		}
		#tel{
			width: 38%;
			height: 4%;
			position: absolute;
			top:78%;
			left:10%;
			border: 0px;
			border-bottom: 2px solid slategray;
		}
		#tele{
			width: 38%;
			height: 4%;
			position: absolute;
			top:78%;
			right:10%;
			border: 0px;
			border-bottom: 2px solid slategray;
		}

		#adic{
				width: 15%;
				height: 5%;
				background: rgb(100, 66, 179);
				position: absolute;
				top:90%;
				border: 0px;
					left:42.5%;
					color: #fff;
					border-radius: 2px;
		}

		#adic:active{
				
				background: purple;
				
		}
		.aln{
			width:90%;height:4%;background:#fff;margin:1px;padding:25px;color:rgb(100, 66, 179);border:1px solid rgb(100, 66, 179);border-radius:10px;
			overflow: hidden;position: relative;
		}
		.pg{
			width:15%;
			height:60%;
			background:rgb(100, 66, 179);
			position:absolute;
			color:#fff;
			left:71%;
				border: 0px;
				border-radius: 7px;
			top:20%;
		}
		#mensBox{
			width: 80%;
			height: 80%;
			border-radius: 15px;
			background: #fff;
			position: absolute;
			top: 8%;
			display: none;
			left: 10%;
		}

		#ms{
			width: 12%;
			height: 7%;
			position: absolute;
			left: 32.5%;
			top: 25%;
			overflow: hidden;
		}
		#sld{
			width: 15%;
			height: 7%;
			position: absolute;
			right: 32.5%;
			top: 25%;
		}
		#pgr{
			width: 9%;
			height: 9%;
			position: absolute;
			left: 46%;
			top: 40%;
			background:rgb(100, 66, 179);
			color: #fff;
		}
		#sairm{
			width: 6%;
			height: 9%;
			position: absolute;
			left: 93.9%;
			top: 90.7%;
			background:rgb(229, 6, 6);
			color: #fff;
			border: 0px;
			border-radius: 10px 0px 10px 0px;
		}
		#sairm:active{
			background: maroon;
		}
		.info{
			width:12%;
			height:60%;
			background:rgb(100, 66, 179);
			position:absolute;
			color:#fff;
			left:51%;
				border: 0px;
				border-radius: 7px;
			top:20%;
		}

		#informacao{
		width: 50%;
		height: 80%;
		background:#fff;
		position: absolute;
		top: 8%;
		left: 25%;
		overflow-y: scroll;
		border: 0px;
		border-radius: 0px 40px 0px 40px;


		}

		#sairi{
			width: 10%;
			height: 9%;
			position: absolute;
			left: 89.9%;
			top: 90.7%;
			background:rgb(229, 6, 6);
			color: #fff;
			border: 0px;
			border-radius: 10px 0px 10px 0px;
		}
		#sairi:active{
			background: maroon;
		}

		#infp{
			width: 100%;
			height: 100%;
			position: absolute;
			left: 0%;
			top: 0%;
			display: none;
		}

	</style>
</head>
<body style="background: rgb(238, 245, 246);font-family: verdana; font-size: 12px;">
<div id="div0" class="all" style="width: 20%; height: 80%; position: absolute; background: rgb(100, 66, 179); display: block; top: 15.3%; left: 0.2%; border-radius: 3px; border: 0px;overflow: hidden;"> 
 	<div id="f1" style="width:100%; height:4.5%;position: absolute;top: 4%;border-bottom: 1px solid #fff; left: 15%;"> <img style="width:10%;height: 100%; " id="fm1" src="src/up.png" > <span style="position: absolute;top: 20%;left:17%;color: #fff;">Elvius</span></div>

 	<div id="f1" style="width:100%; height:4.5%;position: absolute;top: 12%;border-bottom: 1px solid #fff; left: 15%;"> <img style="width:10%;height: 100%; " id="fm1" src="src/mnp.png" > <span style="position: absolute;top: 20%;left:17%;color: #fff;">alunos com divida</span></div>

 	<div id="f1" style="width:100%; height:4.5%;position: absolute;top: 20%;border-bottom: 1px solid #fff; left: 15%;"> <img style="width:10%;height: 100%; " id="fm1" src="src/well.png" > <span style="position: absolute;top: 20%;left:17%;color: #fff;">alunos sem dividas</span></div>

 	<div id="f1" style="width:100%; height:4.5%;position: absolute;top: 28%;border-bottom: 1px solid #fff; left: 15%;"> <img style="width:10%;height: 95%; " id="fm1" src="src/bls.png" > <span style="position: absolute;top: 20%;left:17%;color: #fff;">alunos bolsistas</span></div>



</div>

<div id="div1" class="all" style="width: 100%; height: 10%; position: absolute; background: rgb(155, 105, 247); top: 0%; left: 0%;">
	<img style="width:2.5%;height: 50%; position:absolute;top: 25%;left: 1.5%;" src="src/op.png">
	<img style="width:2.2%;height: 40%; position:absolute;top: 25%;left: 90%;" src="src/up.png">
	<img style="width:2.2%;height: 40%; position:absolute;top: 25%;left: 86%;" src="src/key.png">
	<img style="width:2.2%;height: 37%; position:absolute;top: 25%;left: 82%;" src="src/inf.png">

</div>

<button id="add" class="all" style="width: 40%; height: 15%; position: absolute; background: rgb(255, 255, 255); top: 16.5%; left: 31%; border-radius: 3px; border: 0px;color:slategray;">adicionar aluno</button>

<button id="div5" class="all" style="width: 25%; height: 15%; position: absolute; background: rgb(100, 66, 179); top: 16.5%; left: 72%; border-radius: 3px; border: 0px; color: #fff;font-family: verdana ; box-shadow: 10px;">procurar  <img style="width:7%;height:20%;position: absolute; left: 62%;" src="src/ser.png">  </button>

<div id="div6" class="all" style="width: 60%; height: 62%; position: absolute; background: #fff; top: 33%; left: 31%; border-radius: 3px; border: 0px;padding: 2px;overflow-y: scroll;"> 

<?php

$scan = scandir("alunos");
$cont=count($scan);

for ($i=2; $i < $cont; $i++) { 
	// code...
	echo "<div class='aln'>$scan[$i] <button class='info' id='$scan[$i]'>info</button> <button class='pg' id='$scan[$i]'>mensalidade</button> </div>";
}

?>

</div>

<div id="div7" class="all" style="width: 7%; height: 62%; position: absolute; background: rgb(103, 67, 147); top: 33%; left: 92%; border-radius: 5px; border: 3px;"> </div>

<div id="lg" style="width:100%;height: 100%;position: absolute;top: 0%;left: 0%; display: none; ">
	
	<div id="div0" class="all" style="width: 100%; height: 100%; position: absolute; background: rgb(111, 133, 149);opacity: 0.60;"></div>
	<div id="div1"  class="all" style="width: 40%; height: 90%; position: absolute; background: white;top: 5%;left: 30%;border-radius: 10px;">

		<div id="div2" class="all" style="width: 40%; height: 20%; position: absolute;  top: 8%; left: 30%;color: slategray;font-size: 14px;" align="center">preencha os campos vazios com os dados do aluno que desejas adicionar</div>

		<input type="text" id="nm"placeholder="nome completo" name="">
		<input type="text" id="nmp" placeholder="nome do pai" name="">
		<input type="text" id="nmm" placeholder="nome da mai" name="">
		<input type="text" id="nme" placeholder="nome do encaregado" name="">
		<input type="text" id="dt" placeholder="data de nascimento" name="">
		<input type="text" id="gen" placeholder="genero" name="">
		<input type="text" id="nac" placeholder="nacionalidade" name="">
		<input type="text" id="natu" placeholder="naturalidade" name="">
		<input type="text" id="bi" placeholder="nr de BI" name="">
		<input type="text" id="ass" placeholder="cedula assento" name="">
		<input type="text" id="res" placeholder="residencia" name="">
		<input type="text" id="tel" placeholder="contacto" name="">
		<input type="text" id="tele" placeholder="contacto de encaregado" name="">
		<button id="adic">adicionar</button>

	</div>
</div>

<div id="mensBox" style="font-size: 18px;"><br />
	<p style="padding-left: 60px; font-size:22px;" align="left">pagamento de mensalidades</p><br />
	<span style="position: absolute;top: 17%;left: 5%;">Nome</span> <span style="position: absolute;top: 17%;left: 25%;">meses em divida</span> 
	<span style="position: absolute;top: 17%;left: 53%;">Saldo por mes</span>
	<span style="position: absolute;top: 17%;left: 83%;">Saldo em divida</span>
	<br /><br /><br />
	<span id="msN" style="font-weight: bold;position: absolute;top: 28%;left: 2%;font-family: fantasy;">Bento Fernando Bito</span>
	<div style="width:100%;height: 1px;background: black;position: absolute;top: 22%;"></div>
	<span style="font-weight: bold;position: absolute;top: 28%;left: 27%;font-family: fantasy;">4 Meses</span>
	<span style="font-weight: bold;position: absolute;top: 28%;left: 55%;font-family: fantasy;">450.00MTS</span>

	<span style="font-weight: bold;position: absolute;top: 28%;left: 85%;font-family: fantasy;">5080.00MTS</span>


	<div style="width:100%;height: 1px;background: black;position: absolute;top: 40%;"></div>
	<div style="width:98%;height: 50%;position: absolute; top: 45%;border-radius: 10px; border: 1px solid black;left: 1%;overflow: hidden;">
	
		<input id="ms" type="number" value="1" name="">
		<input id="sld" type="number" value="450" name="">
		<button id="pgr">pagar</button>

		<button id="sairm">sair</button>
</div>
</div>
<div id="infp">

<div style="width: 100%;height: 100%;background: slategray;opacity: 0.40;position: absolute;top: 0%;left: 0%; "></div>
<div id="informacao">
	<p style="font-size:22px; padding-left: 40px; font-weight: bold;"> Dados do aluno </p>
	<p style="position:absolute;top: 10%; font-size:14px;left: 7%; ">Nome:</p>
	<p id="tknm" style="position:absolute;top: 10%; font-size:14px;left: 40%; ">Bento fernando Bito</p>

	<p  style="position:absolute;top: 17%; font-size:14px;left: 7%; ">BI:</p>

	<p id="tkbi" style="position:absolute;top: 17%; font-size:14px;left: 40%; ">0701988766677P</p>

	<p style="position:absolute;top: 24%; font-size:14px;left: 7%; ">Nome do Pai:</p>

	<p id="tknmp" style="position:absolute;top: 24%; font-size:14px;left: 40%; ">Fernando Bito</p>

	<p style="position:absolute;top: 31%; font-size:14px;left: 7%; ">Nome da Mae:</p>
	<p id="tknmm" style="position:absolute;top: 31%; font-size:14px;left: 40%; ">Nora Simone</p>

	<p style="position:absolute;top: 38%; font-size:14px;left: 7%; ">data de nascimento:</p>
	<p id="tkdt" style="position:absolute;top: 38%; font-size:14px;left: 40%; ">31/10/2000</p>

	<p style="position:absolute;top: 45%; font-size:14px;left: 7%; ">nacionalidade</p>
	<p id="tknac" style="position:absolute;top: 45%; font-size:14px;left: 40%; ">mocambicano</p>

	<p  style="position:absolute;top: 52%; font-size:14px;left: 7%; ">naturalidade</p>

	<p id="tknat" style="position:absolute;top: 52%; font-size:14px;left: 40%; ">beira</p>

	<p style="position:absolute;top: 59%; font-size:14px;left: 7%; ">residencia</p>

	<p id="tkres" style="position:absolute;top: 59%; font-size:14px;left: 40%; ">chingussura</p>


<p style="position:absolute;top: 66%; font-size:14px;left: 7%; ">Genero</p>
	<p id="tkgen" style="position:absolute;top: 66%; font-size:14px;left: 40%; ">M</p>

	<p  style="position:absolute;top: 73%; font-size:14px;left: 7%; ">contacto pessoal</p>
	<p id="tkcont" style="position:absolute;top: 73%; font-size:14px;left: 40%; ">8787889909</p>

	<p  style="position:absolute;top: 80%; font-size:14px;left: 7%; ">contacto do encarregado</p>
	<p id="tktele" style="position:absolute;top: 80%; font-size:14px;left: 40%; ">8787889999</p>

	<p  style="position:absolute;top: 87%; font-size:14px;left: 7%; ">cedula</p>
	<p id="tkass" style="position:absolute;top: 87%; font-size:14px;left: 40%; ">0990</p>


	
	<div style="position:absolute;top: 99%; font-size:14px;left: 0%; width: 100%;height: 1px;background: black; "></div>

	<p style="position:absolute;top: 100%; font-size:14px;left: 7%; ">classe</p>
	<p id="tkcl" style="position:absolute;top: 100%; font-size:14px;left: 40%; ">10</p>



	<p style="position:absolute;top: 107%; font-size:14px;left: 7%; ">turma</p>
	<p id="tktur" style="position:absolute;top: 107%; font-size:14px;left: 40%; ">88</p>
	<p  style="position:absolute;top: 114%; font-size:14px;left: 7%; ">numero</p>
	<p id="tknr" style="position:absolute;top: 114%; font-size:14px;left: 40%; ">17</p>
	<button id="sairi">sair</button>
</div>
</div>
</body>
</html>