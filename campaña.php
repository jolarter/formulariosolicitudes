<!doctype html>
<html>
<head>
<meta charset="utf-8">
<<<<<<< HEAD
<title>Página Principal- Solicitudes Comunicaciones!</title>
=======
<title>Página Principal- Solicitudes Comunicaciones·</title>
>>>>>>> dbb40a2f38547c77ecabe1b2912ad45648072e17
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>
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
<form action="" method="" enctype="multipart/form-data">
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
    <h3>CAMPAÑA</h3>
    <h4 style="position:relative; top:-40px; left: 600px; width:200px">Registro de Solicitud</h4>
    <fieldset style="margin-top:-40px; width:90%">
    <h4>Información de la Campaña</h4>
     <table align="center" width="100%">
            <tr>
               <td width="34%"><label>Necesidad de la Campaña</label></td>
               <td width="24%"><label>Institucional<strong style="color:#601314"> (*)</strong></label></td>
               <td width="5%"><input type="checkbox" name="institucional"></td>
               <td width="19%"><label>Conciencia<strong style="color:#601314"> (*)</strong></label></td>
               <td width="18%"><input type="checkbox" name="conciencia"></td>
            </tr>
            <tr>
               <td colspan="5"><label>Objetivo de la Campaña<strong style="color:#601314"> (*)</strong></label></td>
            </tr>
            <tr>
               <td colspan="5"><textarea cols="88" rows="5" name="name"></textarea></td>
            </tr>
            <tr>
               <td rowspan="2"><label>Concepto de la Campaña</label></td>
               <td><label>Palabras Claves<strong style="color:#601314"> (*)</strong></label></td>
               <td colspan="3"><input type="text" name="pa" size="40px"></td>
            </tr>
            <tr>
               <td><label>Slogan<strong style="color:#601314"> (*)</strong></label></td>
               <td colspan="3"><input type="text" name="pa" size="40px"></td>
            </tr>
            <tr>
               <td rowspan="3"><label>Lineamientos Creativos</label></td>
               <td><label>Color<strong style="color:#601314"> (*)</strong></label></td>
               <td colspan="3"><input type="text" name="pa" size="40px"></td>
            </tr>
            <tr>
               <td><label>Mensaje<strong style="color:#601314"> (*)</strong></label></td>
               <td colspan="3"><input type="text" name="pa" size="40px"></td>
            </tr>
            <tr>
               <td><label>Referente<strong style="color:#601314"> (*)</strong></label></td>
               <td colspan="3"><input type="text" name="pa" size="40px"></td>
            </tr>
            <tr>
               <td rowspan="2"><label>Antecedentes</label></td>
               <td><label>Versiones Anteriores<strong style="color:#601314"> (*)</strong></label></td>
               <td colspan="3"><input type="text" name="pa" size="40px"></td>
            </tr>
            <tr>
               <td><label>Diseños Previos<strong style="color:#601314"> (*)</strong></label></td>
               <td colspan="3"><input type="file" name="pa"></td>
            </tr>

    </table>
    </fieldset>
    </div>
   </section>
   <div style="margin-top:5px" >
    <fieldset>
    <section>
        <div><h4>Tipo de Solicitud</h4></div>
     </section>
     <section class="ac-container">
    		<div>
                <input id="ac-1" name="accordion-1" type="checkbox" />
				<label for="ac-1">Campañas Institucionales Internas</label>
					<article class="ac-ylarge">
						     <table style="border:1px solid #7C2E30" width="100%">
                                  <tr>
                                     <td width="26%">Folletos de Eventos</td>
                                     <td width="5%"><input type="checkbox" name="afiches"></td>
                                     <td width="10%">Cantidad</td>
                                     <td width="6%"><input type="text" name="cantidad" size="5"></td>
                                     <td width="12%">Descripción</td>
                                     <td width="41%"><textarea name="descripcion" cols="34" rows="5"></textarea></td>
                                  </tr>
                              </table>
                              <table style="border:1px solid #7C2E30" width="100%">
                                  <tr>
                                     <td width="26%">Afiches</td>
                                     <td width="5%"><input type="checkbox" name="afiches"></td>
                                     <td width="10%">Cantidad</td>
                                     <td width="6%"><input type="text" name="cantidad" size="5"></td>
                                     <td width="12%">Descripción</td>
                                     <td width="41%"><textarea name="descripcion" cols="34" rows="5"></textarea></td>
                                  </tr>
                              </table>
                              <table style="border:1px solid #7C2E30" width="100%">
                                  <tr>
                                     <td width="26%">Pendones</td>
                                     <td width="5%"><input type="checkbox" name="afiches"></td>
                                     <td width="10%">Cantidad</td>
                                     <td width="6%"><input type="text" name="cantidad" size="5"></td>
                                     <td width="12%">Descripción</td>
                                     <td width="41%"><textarea name="descripcion" cols="34" rows="5"></textarea></td>
                                  </tr>
                              </table>
                              <table style="border:1px solid #7C2E30" width="100%">
                                  <tr>
                                     <td width="26%">Mailing</td>
                                     <td width="5%"><input type="checkbox" name="afiches"></td>
                                     <td width="10%">Cantidad</td>
                                     <td width="6%"><input type="text" name="cantidad" size="5"></td>
                                     <td width="12%">Descripción</td>
                                     <td width="41%"><textarea name="descripcion" cols="34" rows="5"></textarea></td>
                                  </tr>
                              </table>
                              <table style="border:1px solid #7C2E30" width="100%">
                                  <tr>
                                     <td width="26%">Difusión en Medios Internos</td>
                                     <td width="5%"><input type="checkbox" name="afiches"></td>
                                     <td width="10%">Cantidad</td>
                                     <td width="6%"><input type="text" name="cantidad" size="5"></td>
                                     <td width="12%">Descripción</td>
                                     <td width="41%"><textarea name="descripcion" cols="34" rows="5"></textarea></td>
                                  </tr>
                              </table>
                              <table style="border:1px solid #7C2E30" width="100%">
                                  <tr>
                                     <td width="26%">Redes Sociales</td>
                                     <td width="5%"><input type="checkbox" name="afiches"></td>
                                     <td width="10%">Cantidad</td>
                                     <td width="6%"><input type="text" name="cantidad" size="5"></td>
                                     <td width="12%">Descripción</td>
                                     <td width="41%"><textarea name="descripcion" cols="34" rows="5"></textarea></td>
                                   </tr>
                              </table>
                              <table style="border:1px solid #7C2E30" width="100%">
                                  <tr>
                                     <td width="26%">P.O.P.</td>
                                     <td width="5%"><input type="checkbox" name="afiches"></td>
                                     <td width="10%">Cantidad</td>
                                     <td width="6%"><input type="text" name="cantidad" size="5"></td>
                                     <td width="12%">Descripción</td>
                                     <td width="41%"><textarea name="descripcion" cols="34" rows="5"></textarea></td>
                                  </tr>
                              </table>
                              <table style="border:1px solid #7C2E30" width="100%">
                                  <tr>
                                     <td width="26%">Pantallas</td>
                                     <td width="5%"><input type="checkbox" name="afiches"></td>
                                     <td width="10%">Cantidad</td>
                                     <td width="6%"><input type="text" name="cantidad" size="5"></td>
                                     <td width="12%">Descripción</td>
                                     <td width="41%"><textarea name="descripcion" cols="34" rows="5"></textarea></td>
                                  </tr>
                              </table>
                              <table style="border:1px solid #7C2E30" width="100%">
                                  <tr>
                                     <td width="26%">BTL</td>
                                     <td width="5%"><input type="checkbox" name="afiches"></td>
                                     <td width="10%">Cantidad</td>
                                     <td width="6%"><input type="text" name="cantidad" size="5"></td>
                                     <td width="12%">Descripción</td>
                                     <td width="41%"><textarea name="descripcion" cols="34" rows="5"></textarea></td>
                                  </tr>
                              </table>
                              <table style="border:1px solid #7C2E30" width="100%">
                                  <tr>
                                     <td width="26%">Volantes</td>
                                     <td width="5%"><input type="checkbox" name="afiches"></td>
                                     <td width="10%">Cantidad</td>
                                     <td width="6%"><input type="text" name="cantidad" size="5"></td>
                                     <td width="12%">Descripción</td>
                                     <td width="41%"><textarea name="descripcion" cols="34" rows="5"></textarea></td>
                                  </tr>
                              </table>
                              <table style="border:1px solid #7C2E30" width="100%">
                                  <tr>
                                     <td width="26%">Medios Institucionales</td>
                                     <td width="5%"><input type="checkbox" name="afiches"></td>
                                     <td width="10%">Cantidad</td>
                                     <td width="6%"><input type="text" name="cantidad" size="5"></td>
                                     <td width="12%">Descripción</td>
                                     <td width="41%"><textarea name="descripcion" cols="34" rows="5"></textarea></td>
                                  </tr>
                              </table>
                          </article>
				</div>
		  </section>
        </fieldset>
      <section>
        <div style="position:relative;top:0px; left:30px; width:245px">
            <div class="button_wrap">
                <a class="button_aRight" id="button_aRight"><span>¿Desea ir al inicio?</span></a>
                <a class="button_bRight slidebttn" id="button_bRight" href="index.php"><img src="img/btn-i.png"></a>
            </div>
        </div>
	  </section>
    </div>
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
