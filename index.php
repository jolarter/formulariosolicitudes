<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Página Principal- Solicitudes Comunicaciones</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!--<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>-->
<script type="text/javascript">

function valida_envia(){

//Definimos los caracteres permitidos en una dirección de correo electrónico
var regexp = /^[0-9a-zA-Z._.-]+\@[0-9a-zA-Z._.-]+\.[0-9a-zA-Z]+$/;

//Validamos un campo o área de texto nombre
if (document.form.nombre.value.length==0){
alert("Debe registrar el nombre del solicitante");
document.form.nombre.focus();
return 0;
}

//Validamos un campo o área de texto, por ejemplo el campo área
if (document.form.dpto.value.length==0){
alert("Debe registrar el área solicitante");
document.form.dpto.focus();
return 0;
}

//Validamos un campo de texto del número telefónico como numérico de 9 digitos , 
valor = document.form.telefono.value;
if( !(/^\d{6}$/.test(valor)) ) {
alert("Debe registrar un número telefónico de 6 dígitos");
document.form.telefono.focus();
return 0;
}

//Validamos un campo de texto como email
if ((regexp.test(document.form.correo.value) == 0) || (document.form.correo.value.length = 0)){
alert("Debe registrar una dirección de email válida");
document.form.correo.focus();
return 0;
} else {
var c_email = true;
}

/*Validamos un campo de lista/menú, por ejemplo el campo provincia
if (document.form.provincia.selectedIndex==0){
alert("Tiene que seleccionar su provincia");
document.form.provincia.focus();
return 0;
}

//Validamos un campo de tipo checkbox, por ejemplo condiciones
if (document.form.condiciones.checked==0){
alert("Debe aceptar las condiciones");
document.form.condiciones.focus();
return 0;
}*/

//Si todos los campos han validado correctamente, se envía el formulario
document.form.submit();
}
</script>
</head>
<style>
  body{
		margin: 0 auto;
		max-width:800px !important;
		font-family:Constantia, "Lucida Bright", "DejaVu Serif", Georgia, serif;
		border: 1px solid #0A78B5;
		overflow:scroll;
		padding:5px
  }
	
	h1,h2,h3,h4,label,h5{
	  color:#0A78B5;   
    }
	
	h2{
       text-align:center;
	   padding:5px;
	   	  
	}
	h3{
		
	   position:relative;
	   left: 40px
	}
	h5{
		
	   position:absolute;
	   left:1183px;
	   top:423px
	}
	
	td{
		padding:5px
		
	}
	
	label{
		padding-right:5px;
		padding-left:5px
	}
	fieldset{
		
		max-width:700px !important;
		margin:0 auto;
		border: 1px solid #771618
		
	}
	span{
		font-weight:800;
	}
	table{
		
		padding-top:20px
		}
	
	.back{
			position:absolute;
			top:400px;
			left:20px;
			background:#f0f0f0 url(back.png) no-repeat top left;
			width:165px;
			height:31px;
		}

</style>

<body>
<h2>Solicitudes a Comunicaciones</h2>
<form id="formid" action="" method="" enctype="multipart/form-data">
<section>
    <div>
        <table align="center">
            <tr>
               <td><label>No de Solicitud</label></td>
               <td><input type="text" name="no_solicitud" disabled></td>
               <td><label>Fecha</label></td>
               <td><input type="text" name="fecha" disabled></td>
            </tr>
    </table>
    </div>
    <div style="margin-top:30px">
    <h3>DATOS DEL SOLICITANTE</h3>
    <fieldset>
    <table align="center">
            <tr>
               <td><label>Nombre <strong style="color:#601314">(*)</strong></label></td>
               <td><input type="text" id="nombre" name="nombre" size="50" title="Registrar su nombre"></td>
            </tr>
            <tr>   
               <td><label>Dpto/Fac/Área <strong style="color:#601314">(*)</strong></label></td>
               <td><input type="text" name="dpto" size="40" title="Registrar el área a que pertenece"></td>
            </tr>
            <tr>
               <td><label>Teléfono <strong style="color:#601314">(*)</strong></label></td>
               <td><input type="text" name="telefono" size="40" title="Registrar su número teléfonico"></td>
            </tr>
            <tr>   
               <td><label>Correo Electrónico <strong style="color:#601314">(*)</strong></label></td>
               <td><input type="text" name="correo" size="50" title="Registrar su correo electrónico"></td>
            </tr>
            <tr>   
               <td></td>
               <td></td>
            </tr>
    </table>
    </fieldset>
    </div>
   </section>
   <div style="margin-top:30px">
    <h3>MEDIOS AUDIOVISUALES</h3>
    <h5>Registro de Solicitud</h5>
    <fieldset>
    <section style="margin:0 auto">
        <div><h3 style="position:relative;left:0px;top:2px">Medios Audiovisuales</h3></div>
        <div><h4 style="position:absolute;left:1174px;top:490px">Tipo de Solicitud</h4></div>
    </section>
     <section class="ac-container">
    		<div>
                <input id="ac-1" name="accordion-1" type="checkbox" />
				<label for="ac-1">Préstamos de Equipos</label>
					<article class="ac-small">
						     <table style="border:1px solid #7C2E30">
                                  <tr>
                                     <td>Responsable del Equipo</td>
                                     <td><input type="text" name="nombrepe" size="30" title="Digitar el nombre del responsable del equipo"></td>
                                     <td>Fecha de Reserva</td>
                                     <td><input type="date" name="fechape"></td>
                                  </tr>
                                  <tr>
                                     <td>Tipo de Equipo</td>
                                     <td><select name="tepe">
                                            <option selected></option>
                                            <option value="">VideoBeam</option>
                                            <option value="">Equipo Portátil</option>
                                         </select>
                                     </td>
                                     <td colspan="2" style="color:#8E2527">Nota: seleccionar fecha de reserva</td>
                                  </tr>
                                  <tr>
                                     <td>Accesorios Adicionales</td>
                                     <td colspan="3"><textarea cols="65" rows="10" name="aape" title="Digitar los accesorios adicionales"></textarea></td>
                                  </tr>
                               </table> 
                          </article>
				</div>
				<div>
					<input id="ac-2" name="accordion-1" type="checkbox" />
					<label for="ac-2">Video Conferencia</label>
					<article class="ac-medium">
						<table style="border:1px solid #7C2E30">
                                  <tr>
                                     <td>Responsable de la Conferencia</td>
                                     <td><input type="text" name="namevc" size="30"></td>
                                     <td>Tipo de Evento</td>
                                     <td><select name="tevc">
                                            <option selected></option>
                                            <option value="">Académico</option>
                                            <option value="">Administrativo</option>
                                         </select>
                                     </td>
                                  </tr>
                                  <tr>
                                     <td>Fecha</td>
                                     <td><input type="date" name="fechavc" size="30"></td>
                                     <td>Hora</td>
                                     <td><input type="text" name="horavc" size="30"></td>
                                  </tr>
                                  <tr>
                                     <td>No. de Invitados</td>
                                     <td><select name="nivc">
                                            <option selected></option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                            <option value="">6</option>
                                            <option value="">7</option>
                                            <option value="">8</option>
                                            <option value="">9</option>
                                            <option value="">10</option>
                                         </select>
                                     </td>
                                  </tr>
                                  <tr>
                                     <td>Descripción</td>
                                     <td colspan="3"><textarea cols="60" rows="5" name="descripcionvc"></textarea></td>
                                  </tr>
                                  
                               </table>
					</article>
				</div>
				<div>
                   <table width="100%">
                      <tr>
                         <td width="87%" style="color:#1477A7">Apoyo Audiovisual en Evento</td>
					     <td width="13%"><input type="checkbox" name="ape"></td>
                      </tr>
                   </table>
				</div>
				<div>
                   <table width="100%">
                      <tr>
                         <td width="87%" style="color:#1477A7">Maestro de Ceremonia</td>
					     <td width="13%"><input type="checkbox" name="mc"></td>
                      </tr>
                   </table>
				</div>
	       </section>
           
    <section style="margin:0 auto">
        <div><h3 style="position:relative;left:0px;top:10px">Producción Audiovisual</h3></div>
        <div><h4 style="position:relative;left:569px;top:-35px">Tipo de Solicitud</h4></div>
    </section>
     <section class="ac-container" style="margin-top:-40px">
    		<div>
                    <input id="ac-3" name="accordion-3" type="checkbox" />
					<label for="ac-3">Elaboración de Video</label>
					<article class="ac-small">
						     <table style="border:1px solid #7C2E30">
                                  <tr>
                                     <td>Área Solicitante</td>
                                     <td><input type="text" name="asrp"></td>
                                     <td>Recurso Digital</td>
                                     <td><input type="file" name="rdrp"></td>
                                  </tr>
                                  <tr>
                                     <td>Fecha de Entrega</td>
                                     <td><input type="date" name="ferp"></td>
                                     <td>Guión</td>
                                     <td><input type="file" name="grp"></td>
                                  </tr>
                                  <tr>
                                     <td>Slogan</td>
                                     <td colspan="4"><textarea cols="65" rows="5"></textarea></td>
                                  </tr>
                               </table> 
                          </article>
				</div>
				<div>
                   <table width="100%">
                      <tr>
                         <td width="87%" style="color:#1477A7">Zona T</td>
					     <td width="13%"><input type="checkbox" name="ape"></td>
                      </tr>
                   </table>
				</div>
				<div>
                   <table width="100%">
                      <tr>
                         <td width="87%" style="color:#1477A7">Tomás Fotográficas</td>
					     <td width="13%"><input type="checkbox" name="mc"></td>
                      </tr>
                   </table>
				</div>
	         </section>
		</fieldset>
      <section>
        <div style="position:relative;top:0px; left:450px; width:245px">
             <div class="button_wrap">
                <a class="button_aLeft" id="button_aLeft"><span>¿Requieres Solicitar una Campaña?</span></a>
                <a class="button_bLeft slidebttn" id="button_bLeft" href="campaña.php"><img src="img/btn-c.png"></a>
            </div>
        </div>
        <div style="position:relative;top:-93px; left:30px; width:245px">
            <div class="button_wrap">
                <a class="button_aRight" id="button_aRight"><span>¿Requieres Solicitar un Evento?</span></a>
                <a class="button_bRight slidebttn" id="button_bRight" href="evento.php"><img src="img/btn-e.png"></a>
            </div>
        </div>
	  </section>    
    </div>
    <section>
      <div><input type="submit" onClick="valida_envia()" value="Enviar"></div>
    </section>
    </form>
    <footer>
       <div>
          <p align="center" style="color:#0A6678">Área de Comunicaciones - Copyright @ 2017</p>
       </div>
    </footer>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $('.slidebttn').hover(
					function () {
						var $this 		= $(this);
						var $slidelem 	= $this.prev();
						$slidelem.stop().animate({'width':'285px'},300);
						$slidelem.find('span').stop(true,true).fadeIn();
						$this.addClass('button_c');
					},
					function () {
						var $this 		= $(this);
						var $slidelem 	= $this.prev();
						$slidelem.stop().animate({'width':'70px'},200);
						$slidelem.find('span').stop(true,true).fadeOut();
						$this.removeClass('button_c');
					}
				);
            });
        </script>    
</body>
</html>
