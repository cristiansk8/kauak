<?php
/*
Template Name: For php centro mx
*/

//header("Location: http://www.serhogarsystem.com/solicite-informacion/");

get_header();

if ( ! defined( 'ABSPATH' ) ) { exit; }

global $wpdb;

$i=0;

if($_REQUEST["apage"]){
	$result = $wpdb->get_results("SELECT * FROM codigopostal_MX WHERE CP1='".$_REQUEST["apage"]."'", ARRAY_A);

	$cpage=0;
	foreach($result as $valor){
		$cpage=$valor[ID_centros];
	}

	if($cpage==0){
	$url = get_permalink( 1063 );
	?>

<script>window.location='<?php echo $url; ?>'</script>
	<?php

	}
}
if($_REQUEST["bpage"]){
	//$cpage=$_REQUEST["bpage"];
}


$result = $wpdb->get_results("SELECT * FROM Centros_MX WHERE ID='".$cpage."'", ARRAY_A);

foreach($result as $valor){
?>

<div id="stuning-header"><div id="menu-fixer" style="height: 135px;"></div>
	<div class="dfd-stuning-header-bg-container" style=" background-color: #ffffff; background-image: url(http://www.serhogarsystem.com/wp-content/uploads/2016/10/hands_opt.jpg);background-position: center center;background-size: cover;background-attachment: fixed;">
			</div>
	<div class="stuning-header-inner">
		<div class="row">
			<div class="twelve columns">
				<div class="page-title-inner  page-title-inner-bgcheck text-center" style="top: 0px; opacity: 1;">
					<div class="page-title-inner-wrap">
							<h1 class="page-title">
								<?php
								$titulo=explode(' - ',$valor[Nome]);
								echo '<span style="font-size:80px;text-transform: uppercase;">'.$titulo[0].'</span><br/>'.$titulo[1]; ?>
							</h1>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<section id="layout" class="blog-page">
<div class="row" style="font-size:18px;<?php if(!wp_is_mobile()){?>margin-top:80px;margin-bottom:80px;<?php } ?>">

<aside class="six columns" >

<?php

	echo $valor[descricao];
?>
<script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
		 var myLatLng = {lat: <?php echo $valor[lat] ; ?>, lng: <?php echo $valor[lng]; ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          scrollwheel: false,
          zoom: <?php if(wp_is_mobile()){ ?>11<?php }else { ?>14<?php } ?>
        });

		var marker = new google.maps.Marker({
          map: map,
          position: myLatLng,
          icon: '/wp-content/themes/ronneby/js/ico-goo.png'
        });

      }

    </script><br/><br/>
	<h5>Servicios adicionales:</h5>
	<?php
	$result2 = $wpdb->get_results("SELECT * FROM Servicos_adicionais_MX WHERE centro='".$cpage."'", ARRAY_A);

foreach($result2 as $valor2){
		echo '<div style="margin-bottom:10px;padding:20px;background-color:#eee;">';
		if($valor2[imagem2]){
			echo '<img style="width:60%;" src="http://'.$_SERVER['SERVER_NAME'].'/admin/img/servicos-adicionais/'.$valor2[imagem2].'"><br/><br/>';
		}
		echo '<h6>'.$valor2[titulo].'</h6><br/>'.$valor2[descricao].'<br/></div>';
	}

	?>
	</aside>
	<?php

	$nombre_fichero = 'http://'.$_SERVER['SERVER_NAME'].'/backoffice/img/centros/'.$valor[foto];

	if($valor[foto]!=""){
	?>

	<aside style="float:right;" class="<?php if(wp_is_mobile()){ ?>twelve<?php }else{ ?>six<?php }ç?>" >
    <img src="<?php echo $nombre_fichero; ?>" alt="Imagen del centro de servicio domestico en <?php echo $valor[localidade]; ?>">
	</aside>
<?php } ?>

<aside style="<?php if(wp_is_mobile()){ ?>float:left;width:100%;margin-top:-5px;font-size:18px;line-height:32px;text-align:center;padding:60px 20px 80px 20px;<?php } else { ?>float:right;margin-top:-5px;font-size:22px;line-height:32px;text-align:center;padding:60px 30px 80px 30px;<?php } ?>background: #dd6a6a;color: #fff;" class="six columns"  >
<i style="font-size:70px;opacity:.5" class="dfd-icon-house_2"></i><br/><br/>
<?php echo $valor[rua]; ?>, Nº<?php echo $valor[numero]; if($valor[loja]!=""){echo ', Oficina '.$valor[loja];} ?><br/>
<?php echo $valor[cp]; ?> - <?php echo $valor[localidade]; ?> (<?php echo $valor[cidade]; ?>)<br/>
<?php echo $valor[email]; ?><br/>
Telf. <?php echo $valor[telefone]; ?><br/><br/>
<?php
$hostUrl= $_SERVER["HTTP_HOST"];
$centroM="https://www.serhogarsystem.com/madrid19";
$centroA="https://www.serhogarsystem.com/alicante3";

if ($hostUrl==$centroA || $hostUrl=$centroM) {
	echo $hostUrl;
	echo '<a href="https://cuidemi.com/"><img src="https://www.serhogarsystem.com/wp-content/uploads/2021/01/Cuidemi-Sello-de-calidad-large-1.png" alt="sello-cuidemi" width="100px" heigth="auto"></a>
';
}
else {
	
}
 ?>
<div class="centro"><a href="http://www.serhogarsystem.com/mx/solicite-informacion/" class="centroa"><button type="button">Solicite información</button></a></div>

</aside>

<?php
}

?>

<div id="map" class="<?php if(wp_is_mobile()){ ?>twelve<?php } else { ?>six<?php } ?>" style="float:left;height:400px;" ></div>


<?php
if ($cpage>0){

		?>
		<script>
		var x = document.getElementsByClassName("centroa");
		var i;
for (i = 0; i < x.length; i++) {
    x[i].setAttribute('href', x[i].getAttribute("href")+'?cpage=<?php echo $cpage; ?>');
}

		</script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKp9ezRpMgdJPaFVRBEoMPnmZ3wElcUSY&callback=initMap" async defer></script>
		<?php
	}
?>
</div>

</section>
