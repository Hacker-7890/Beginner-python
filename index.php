<html>
	<head>
	<meta name='viewport' content='width=device-width , initial-scale=1'>

	<script>

	window.onload=function(){
		document.body.style.height=window.innerHeight + 'px'

		tg = document.getElementsByClassName('k')
		shift = document.getElementsByClassName('shift')
		var bk=document.getElementById('back')
		var lfm=document.getElementById('lfm')
		var rgm=document.getElementById('rgm')
		var mouse=document.getElementById('mouse')
		m = document.getElementsByClassName('m')
		var mouse=document.getElementById('mouse')
		var lfm=document.getElementById('lfm')
		var rgm=document.getElementById('rgm')
		cnt=document.getElementById('cn')
		cnt2=document.getElementById('cnt2')
		all=document.getElementsByClassName('all')


		function ajx(fl){

			http = new XMLHttpRequest()

			http.onreadystatechange=function(){
				if(this.readyState==4 && this.status == 200){
					return this.responseText
				}
			}
			http.open('Get',fl,true)
			http.send()
		}

	for (var i = 0; i < all.length; i++) {
		all[i].ontouchstart=function(e) {
			ajx("*"+e.target.id)
		}
	}

		lfm.ontouchstart=function(){
			ajx("@cl")
		}
		rgm.ontouchstart=function(){
			ajx("@rg")
		}
		for (var i =0; i < m.length; i++) {
			m[i].ontouchstart=function (evt) {
				// body...
				ajx("@"+evt.target.id)
				wait = setInterval(espere,100)
				function espere() {
					// body...
					ajx("@"+evt.target.id)
				}
				for (var i = m.length - 1; i >= 0; i--) {
					m[i].ontouchend=function (evt) {
					clearInterval(wait)
				}
				}
				
				
			}
		}

		mouse.ontouchstart=function (arg) {
			// body...
			

			if (cnt.style.display=="none") {
				cnt2.style.display="none"
				cnt.style.display="block"

				
			}else{
				cnt.style.display="none"
				cnt2.style.display="block"
			}
		}



bk.ontouchstart=function(){
	ajx("*backspace")
st = setInterval(fn,100)
bk.style.background="#fff"
function fn(argument) {
	// body...
	ajx("*backspace")
}
bk.ontouchend=function(){
	bk.style.background="#fff"
	clearInterval(st)
}
}
		for (var i = 0; i < tg.length; i++) {
					tg[i].onclick=function(e){

					
						ajx("*"+e.target.innerHTML)

						
}
					

	}			

	
				var x=0
	        wn.ontouchstart=function (e) {
	        	// body...

	        	
	        	if(x==0){
	        	e.target.style.background="#fff"
				e.target.style.color="#000"
				tk="windowsccc"
				
				for (var i = 0; i < tg.length; i++) {
					tg[i].onclick=function(e){
						
						wn.style.background="#0000"
						wn.style.color="#fff"
						tk+=e.target.innerText
						ajx("*"+tk)
		
						
						tk=""
						x=0
						}
					}
				
				x=1
				}else{
				e.target.style.background="#000"
				e.target.style.color="#fff"
                 ajx("*"+e.target.innerText)
				x=0
				tk=""

				}
	        }
			for (var k = 0; k < shift.length; k++) {
					shift[k].onclick=function(e){
					e.target.style.background="#fff"
					e.target.style.color="#000"
					tc = e.target.innerText+"ccc"

					for (var i = 0; i < tg.length; i++) {

					tg[i].onclick=function(e){

						tc+=e.target.innerText
						
							tc=tc.replace("top","up")
							ajx("*"+tc)
						tc=""

						for(x=0;x<shift.length;x++){
							shift[x].style.background="black"
							shift[x].style.color="#fff"
						}
					}
				}
					
					for (var k = 0; k < shift.length; k++) {

					

					shift[k].onclick=function(e){
					if(!tc.match(e.target.innerText)){
					
					e.target.style.background="#fff"
					e.target.style.color="#000"

						tc +=e.target.innerText+"ccc"


						for (var i = 0; i < tg.length; i++) {
					tg[i].onclick=function(e){
						tc+=e.target.innerText
						

						ajx("*"+tc)
						
						tc=""
						for(x=0;x<shift.length;x++){
							shift[x].style.background="black"
							shift[x].style.color="#fff"
						}
					}
				}

					

					}else{
						tc=""
						e.target.style.background="#000"
						e.target.style.color="#fff"
					}

				}
				}


					}

	}
}


	</script>
	<style>
		html{
			overflow-x: hidden;
			overflow-y: hidden;
		}
		body{
			background: black;
			overflow: hidden;
		}
		.k{
		width:8%;
		height:9%;
		background:black;
		color:white;
		border:1px solid white;
		position:absolute;
		border-radius: 5px;
		overflow: hidden;
		
		}
		.k:active{
			background: white;
			color:black;
		}

		#esc{
		left:1%;
		top:1%;
		}
		#f1{
			left:10%;
			top:1%;
		}
		#f2{
			left:19%;
			top:1%;
		}

		#f3{
			left:28%;
			top:1%;
		}
		#f4{
			left:37%;
			top:1%;
		}
		#f5{
			left:46%;
			top:1%;
		}
		#f6{
			left:55%;
			top:1%;
		}
		#f7{
			left:64%;
			top:1%;
		}
		#f8{
			left:73%;
			top:1%;
		}
		#f9{
			left:82%;
			top:1%;
		}
		#f10{
			left:91%;
			top:1%;
		}
		

		#coma{
			width:10%;
			height:13%;
			left:1%;
			top:11%;
		}
		#um{
			width:8%;
			height:13%;
			left:12%;
			top:11%;

		}
		#dois{
			width:8%;
			height:13%;
			left:20.5%;
			top:11%;

		}
		#tres{
			width:8%;
			height:13%;
			left:29%;
			top:11%;

		}
		#qt{
			width:8%;
			height:13%;
			left:37.5%;
			top:11%;

		}
		#cn{
			width:8%;
			height:13%;
			left:46%;
			top:11%;

		}
		#sxt{
			width:8%;
			height:13%;
			left:54.5%;
			top:11%;

		}

		#st{
			width:8%;
			height:13%;
			left:63%;
			top:11%;

		}
		#ot{
			width:8%;
			height:13%;
			left:71.5%;
			top:11%;

		}
		#nv{
			width:8%;
			height:13%;
			left:80%;
			top:11%;

		}
		#zr{
			width:10%;
			height:13%;
			left:88.5%;
			top:11%;

		}

		#tab{
			width:12%;
			height:13%;
			left:1%;
			top:25%;

		}

		#q{
			width:8%;
			height:13%;
			left:14%;
			top:25%;

		}
		#w{
			width:8%;
			height:13%;
			left:22.5%;
			top:25%;

		}
		#e{
			width:8%;
			height:13%;
			left:31%;
			top:25%;

		}
		#r{
			width:8%;
			height:13%;
			left:39.5%;
			top:25%;

		}

		#t{
			width:8%;
			height:13%;
			left:48%;
			top:25%;

		}
		#y{
			width:8%;
			height:13%;
			left:56.5%;
			top:25%;

		}
		#u{
			width:8%;
			height:13%;
			left:65%;
			top:25%;

		}
		#i{
			width:8%;
			height:13%;
			left:73.5%;
			top:25%;

		}

		#o{
			width:8%;
			height:13%;
			left:82%;
			top:25%;

		}
		#p{
			width:8%;
			height:13%;
			left:90.5%;
			top:25%;

		}

		#cps{
			width:13%;
			height:13%;
			left:1%;
			top:39%;

		}
		#a{
			width:8%;
			height:13%;
			left:14.5%;
			top:39%;

		}

		#s{
			width:8%;
			height:13%;
			left:23%;
			top:39%;

		}
		#d{
			width:8%;
			height:13%;
			left:31.5%;
			top:39%;

		}
		#f{
			width:8%;
			height:13%;
			left:40%;
			top:39%;

		}

		#g{
			width:8%;
			height:13%;
			left:48.5%;
			top:39%;

		}
		#h{
			width:8%;
			height:13%;
			left:57%;
			top:39%;

		}

		#j{
			width:8%;
			height:13%;
			left:65.5%;
			top:39%;

		}
		#k{
			width:8%;
			height:13%;
			left:74%;
			top:39%;

		}

		#l{
			width:8%;
			height:13%;
			left:82.5%;
			top:39%;

		}
		#pnts{
			width:9%;
			height:13%;
			left:91%;
			top:39%;

		}
		#sft{
			width:14%;
			height:13%;
			position: absolute;
			background: black;
			border: 1px solid #fff;
			color: #fff;
			left:1%;
			top:53%;
			border-radius: 5px;

		}

		#z{
			width:8%;
			height:13%;
			left:15.5%;
			top:53%;

		}
		#x{
			width:8%;
			height:13%;
			left:24%;
			top:53%;

		}

		#c{
			width:8%;
			height:13%;
			left:32.5%;
			top:53%;

		}
		#v{
			width:8%;
			height:13%;
			left:41%;
			top:53%;

		}

		#b{
			width:8%;
			height:13%;
			left:49.5%;
			top:53%;

		}
		#n{
			width:8%;
			height:13%;
			left:58%;
			top:53%;

		}

		#m{
			width:8%;
			height:13%;
			left:66.5%;
			top:53%;

		}
		#vrg{
			width:8%;
			height:13%;
			left:75%;
			top:53%;

		}
		#pnt{
			width:8%;
			height:13%;
			left:83.5%;
			top:53%;

		}
		#br{
			width:8%;
			height:13%;
			left:92%;
			top:53%;

		}

		#ctrl{
			width:11%;
			height:13%;
			position: absolute;
			background: black;
			border: 1px solid #fff;
			color: #fff;
			left:1%;
			top:67%;
			border-radius: 5px;

		}

		#wn{
			width:8%;
			height:13%;
			position: absolute;
			background: black;
			border: 1px solid #fff;
			color: #fff;
			left:12.5%;
			top:67%;
			border-radius: 5px;

		}

				#alt{
			width:8%;
			height:13%;
			position: absolute;
			background: black;
			border: 1px solid #fff;
			color: #fff;
			left:21%;
			top:67%;
			border-radius: 5px;

		}

		#spc{
			width:20%;
			height:13%;
			left:29.5%;
			top:67%;

		}

		#left{
			width:8%;
			height:13%;
			left:50%;
			top:67%;

		}
		#top{
			width:8%;
			height:11%;
			left:58.5%;
			top:67%;

		}
		#down{
			width:8%;
			height:11%;
			left:58.5%;
			top:80%;

		}
		#right{
			width:8%;
			height:13%;
			left:67%;
			top:67%;

		}

		#enter{
			width:15%;
			height:13%;
			left:75.5%;
			top:67%;

		}
		#back{
			width:11%;
			height:13%;
			background: red;
			color: white;
			position: absolute;
			left:91%;
			top:67%;

		}
		#back: active{
			background: white;
			color: black;
		}
		
		#mouse{
			width: 13%;
			height: 16%;
			border:1px solid white;
			position: absolute;
			top: 82%;
			background: black;
			left: 85%;
			border-radius: 100%;
			z-index: 5;
		}
		#mouse:active{
			background: white;
		}
		#lfm{
			width: 19%;
			height: 20%;
			border:1px solid white;
			position: absolute;
			top: 76%;
			left: 30%;
			border-radius: 10px;
		}
		#rgm{
			width: 19%;
			height: 20%;
			border:1px solid white;
			position: absolute;
			top: 76%;
			left: 56%;
			border-radius: 10px;
		}
		.m{
			width: 18%;
			height: 19%;
			border-radius: 10px;
			border:1px solid white;
			position: absolute;
		}
		#cima{
			top:10%;
			left:44%;
		}
		#baixo{
			top:54%;
			left:44%;
		}

		#esq{
			top:32%;
			left:26%;
		}
		#dir{
			top:32%;
			left:62%;
		}
		.m:active{
			background: #000;
			border: 1px solid white;
		}

	</style>
	</head>

	<body>

<div  style="width: 98%;height: 100%;position: absolute;top: 0%; 
left: 0%; display: none;" id="cn">
     <button class='k' id='esc'>esc</button>
     <button class='k' id='f1'>f1</button>
     <button class='k' id='f2'>f2</button>
     <button class='k' id='f3'>f3</button>
     <button class='k' id='f4'>f4</button>
     <button class='k' id='f5'>f5</button>
     <button class='k' id='f6'>f6</button>
     <button class='k' id='f7'>f7</button>
     <button class='k' id='f8'>f8</button>
     <button class='k' id='f9'>f9</button>
     <button class='k' id='f10'>=</button>


     <button class='k' id='coma'>`</button>
     <button class='k' id='um'>1</button>
     <button class='k' id='dois'>2</button>
      <button class='k' id='tres'>3</button>
      <button class='k' id='qt'>4</button>
      <button class='k' id='cn'>5</button>
      <button class='k' id='sxt'>6</button>
      <button class='k' id='st'>7</button>
      <button class='k' id='ot'>8</button>
      <button class='k' id='nv'>9</button>
       <button class='k' id='zr'>0</button>
       <button class='k' id='tab'>tab</button>

        <button class='k' id='q'>q</button>
      <button class='k' id='w'>w</button>
      <button class='k' id='e'>e</button>
       <button class='k' id='r'>r</button>



       <button class='k' id='t'>t</button>
      <button class='k' id='y'>y</button>
      <button class='k' id='u'>u</button>
       <button class='k' id='i'>i</button>
        <button class='k' id='o'>o</button>
       <button class='k' id='p'>p</button>
       <button class='k' id='cps'>capslock</button>
       <button class='k' id='a'>a</button>
        <button class='k' id='s'>s</button>
       <button class='k' id='d'>d</button>
       <button class='k' id='f'>f</button>
        <button class='k' id='g'>g</button>
       <button class='k' id='h'>h</button>
       <button class='k' id='j'>j</button>
       <button class='k' id='k'>k</button>
        <button class='k' id='l'>l</button>
       <button class='k' id='pnts'>;</button>

       <button class='shift' id='sft'>shift</button>

        <button class='k' id='z'>z</button>
       <button class='k' id='x'>x</button>
       <button class='k' id='c'>c</button>
       <button class='k' id='v'>v</button>
        <button class='k' id='b'>b</button>
       <button class='k' id='n'>n</button>
       <button class='k' id='m'>m</button>
       <button class='k' id='vrg'>,</button>
        <button class='k' id='pnt'>.</button>
       <button class='k' id='br'>/</button>
       <button class='shift' id='ctrl'>ctrl</button>
       <button  id='wn'>win</button>
       <button class='shift' id='alt'>alt</button>
       <button class='k' id='spc'>space</button>

        <button class='k' id='left'>left</button>
        <button class='k' id='top'>top</button>
        <button class='k' id='down'>down</button>
        <button class='k' id='right'>right</button>
        <button class='k' id='enter'>enter</button>
        <button class='k2' id='back'></button>


    </div>
<div id="cnt2" style="width: 98%;height: 100%;position: absolute;top: 0%; 
left: 0%;display:none;">
    
   <button class="m" id="cima"></button>
    <button class="m" id="baixo"></button>
    <button class="m" id="esq"></button>
    <button class="m" id="dir"></button>
    
  

    <button id="lfm">
    	
    </button>
    <button id="rgm">
    	
    </button>
 
	 </div>
	 <button id="mouse"></button>

	 <div id="cnt3" style="width:100%;height: 100%; display: none;">
	 	


    <button class="all" id="down" style="width: 9%; height: 16%; position: absolute; background: rgb(76, 95, 103); top: 64%; left: 16%; border-radius: 10px;">down</button>
    <button class="all" id="top" style="width: 9%; height: 16%; position: absolute; background: rgb(76, 95, 103); top: 30%; left: 16%; border-radius: 10px;">top</button>
    <button class="all" id="right" style="width: 9%; height: 16%; position: absolute; background: rgb(76, 95, 103); top: 48%; left: 25%; border-radius: 10px;">right</button>
    <button class="all" id="left" style="width: 9%; height: 16%; position: absolute; background: rgb(76, 95, 103); top: 48%; left: 7%; border-radius: 10px;">left</button>
    <button class="all" id="enter" style="width: 9%; height: 18%; position: absolute;color: #fff; background: rgb(0, 0, 0); top: 50%; left: 83%; border-radius: 100px;">right</button><button class="all" id="c" style="width: 9%; height: 18%; position: absolute;color: #fff; background: rgb(0, 0, 0); top: 50%; left: 67%; border-radius: 100px;">left</button>
    <button class="all" id="ctrlleft" style="width: 9%;color: #fff;color: #fff; height: 18%; position: absolute; background: rgb(0, 0, 0); top: 70%; left: 75%; border-radius: 100px;">down</button>

<button class="all" id="shift" style="width: 9%; height: 18%; position: absolute; background: rgb(0, 0, 0); top: 30%;color: #fff; left: 75%; border-radius: 100px;">up</button><button class="all" id="esc" style="width: 15%; height: 12%; position: absolute; background: rgb(108, 109, 55); top: 85%; left: 45%; border-radius: 100px;"></button>
	 </div>
	</body>
	</html>
	djd