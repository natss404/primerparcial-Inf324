<html>
<head>
<title> Editar </title>
<style>
body{background: #fafafa url(https://media.istockphoto.com/vectors/vibrant-colorfull-background-vector-id1166323937?k=20&m=1166323937&s=612x612&w=0&h=zco09J7zIb4gdMhooILE7HF6siewO64Gi_EWKidI5Yo=) ;
	; margin:0}
.form{width:340px;height:440px;background:#e6e6e6;border-radius:8px;box-shadow:0 0 40px -10px #000;margin:calc(50vh - 220px) auto;padding:20px 30px;max-width:calc(100vw - 40px);box-sizing:border-box;font-family:'Montserrat',sans-serif;position:relative}

input{width:100%;padding:10px;box-sizing:border-box;background:none;outline:none;resize:none;border:0;font-family:'Montserrat',sans-serif;transition:all .3s;border-bottom:2px solid #bebed2}
input:focus{border-bottom:2px solid #78788c}
p:before{content:attr(type);display:block;margin:28px 0 0;font-size:14px;color:#5a5a5a}
button{float:right;padding:8px 12px;margin:8px 0 0;font-family:'Montserrat',sans-serif;border:2px solid #78788c;background:0;color:#5a5a6e;cursor:pointer;transition:all .3s}
button:hover{background:#78788c;color:#fff}
</style>
</head>
<body>
 
 <form class="form"  action="<?php $this->load->helper('url'); echo base_url(); ?>actualizarDocente" method="POST">
 
 <input type="hidden" name="" value=""> <br/>
	Carnet <input type="text" name="ci" id="ci" value="<? echo $doc->ci; ?>"/> <br/>
	Sigla<input type="text" name="sigla" id="sigla" value="<? echo $doc->sigla; ?>"/><br/>
	<input type="submit" name="editar" id="editar" value="Editar"/><br/>
	<input type="submit" name="Cancelar" value="cancelar"/><br/>
 </form>
 </body>
 </html>