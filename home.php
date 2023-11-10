<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>
	<head>
		<title>.: INDEX LOGISTICO TESCI.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include 'head.php' ?>

	<body data-scrolling-animations="true">
		<div class="sp-body">
			<!-- Loader Landing Page -->
			<div id="ip-container" class="ip-container">
				<div class="ip-header" >
					<div class="ip-loader">
						<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
							<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,39.3,10z"/>
							<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
						</svg> 
					</div>
				</div>
			</div>
			<!-- Loader end -->
			
<?php include 'header.php' ?>			
	        
	        
	        <div id="owl-main-slider" class="owl-carousel enable-owl-carousel" data-single-item="true" data-pagination="false" data-auto-play="true" data-main-slider="true" data-stop-on-hover="true">
	            <div class="item">
            		<img src="media/main-slider/concept1.png" alt="slider">
	                <div class="container-fluid">
	                    <div class="slider-content col-md-6 col-lg-6">
	                        <div style="display:table;">
	                            <div style="display:table-cell; width:100px; vertical-align:top;">
	                                <a class="prev"><i class="fa fa-angle-left"></i></a>
	                                <a class="next"><i class="fa fa-angle-right"></i></a>
	                            </div>
	                            <div style="display:table-cell;">
	                                <h1>Concepto logistica</h1>
	                            </div>
	                        </div>
	                        <p>"La logística es el proceso integral de planificación, implementación y control de la eficiente gestión de los flujos de bienes, información y recursos, desde el punto de origen hasta el punto de consumo, con el propósito de satisfacer las necesidades del cliente de manera oportuna, minimizando costos y maximizando la calidad del servicio."<br>Smith, J. (2020). Logística: Planificación, implementación y control de flujos para la satisfacción del cliente. En A. López & B. Pérez (Eds.), Gestión de la Cadena de Suministro: Principios y Prácticas (pp. 45-60). Editorial Académica.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="item">
            		<img src="media/main-slider/concept2.png" alt="slider">
	                <div class="container-fluid">
	                    <div class="slider-content col-md-7 col-lg-7">
	                        <div style="display:table;">
	                            <div style="display:table-cell; width:100px; vertical-align:top;">
	                                <a class="prev"><i class="fa fa-angle-left"></i></a>
	                                <a class="next"><i class="fa fa-angle-right"></i></a>
	                            </div>
	                            <div style="display:table-cell;">
	                                <h1>Logistica inversa<br>(el regreso de unidades con cajas vacías) </h1>
	                            </div>
	                        </div>
	                        <p>Se conoce como logística inversa al manejo que implica devolver los productos o bienes desde el cliente hasta su origen, y esto también aplica cuando hablamos sobre unidades transportadoras con espacios vacíos. Para resolver este problema específico se propone mejorar la gestión y organización del transporte. El objetivo es evitar que los vehículos vuelvan sin carga luego realizar una entrega. Por ello se plantea utilizar estos viajes adicionales para transportar productos relacionados con la logística inversa: devoluciones, materiales reciclables y aquellos aptos ser reparados antes volver al mercado.</p>
	                    </div>
	                </div>
	            </div>
                <div class="item">
            		<img src="media/main-slider/concept3.png" alt="slider">
	                <div class="container-fluid">
	                    <div class="slider-content col-md-6 col-lg-6">
	                        <div style="display:table;">
	                            <div style="display:table-cell; width:100px; vertical-align:top;">
	                                <a class="prev"><i class="fa fa-angle-left"></i></a>
	                                <a class="next"><i class="fa fa-angle-right"></i></a>
	                            </div>
	                            <div style="display:table-cell;">
	                                <h1 >PYMEs</h1>
	                            </div>
	                        </div>
	                        <p>El proyecto de mejorar la eficiencia logística y reducir el regreso de unidades con cajas vacías en México tiene un impacto positivo en las Pequeñas y Medianas Empresas (PYMES), que son fundamentales en la economía. Al optimizar las operaciones logísticas, el proyecto beneficia a las PYMES al hacer sus operaciones más competitivas y sostenibles. Además, proporciona acceso a tecnologías y prácticas innovadoras que pueden impulsar el crecimiento de las PYMES en un entorno empresarial competitivo.</p>
	                    </div>
	                </div>
	            </div>
                 <div class="item">
            		<img src="media/main-slider/concept4.png" alt="slider">
	                <div class="container-fluid">
	                    <div class="slider-content col-md-6 col-lg-6">
	                        <div style="display:table;">
	                            <div style="display:table-cell; width:100px; vertical-align:top;">
	                                <a class="prev"><i class="fa fa-angle-left"></i></a>
	                                <a class="next"><i class="fa fa-angle-right"></i></a>
	                            </div>
	                            <div style="display:table-cell;">
	                                <h1>Carreteras</h1>
	                            </div>
	                        </div>
	                        <p>Según, la secretaría de gobierno Fuente especificada no válida. la definición de carretera es “Camino público, ancho y espacioso, pavimentado y dispuesto para el tránsito de vehículos, que según sus características y el servicio que presta”, de acuerdo con el Reglamento sobre el Peso, Dimensiones y Capacidad de los Vehículos de Transporte que Transitan en los Caminos y Puentes de Jurisdicción Federal.</p>
	                    </div>
	                </div>
	            </div>
                <div class="item">
            		<img src="media/main-slider/concept5.png" alt="slider">
	                <div class="container-fluid">
	                    <div class="slider-content col-md-6 col-lg-6">
	                        <div style="display:table;">
	                            <div style="display:table-cell; width:100px; vertical-align:top;">
	                                <a class="prev"><i class="fa fa-angle-left"></i></a>
	                                <a class="next"><i class="fa fa-angle-right"></i></a>
	                            </div>
	                            <div style="display:table-cell;">
	                                <h1>Transporte terrestre de carga</h1>
	                            </div>
	                        </div>
	                        <p>el transporte terrestre es todo aquel movimiento de mercancías que se realiza por tierra. Esta modalidad es una de las más utilizadas a nivel mundial. Se escoge para cargas refrigeradas, a granel, transportes especiales, mercancías peligrosas y otras modalidades definiremos más adelante.</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	        
			<div class="container-fluid">
			<div class="row column-info block-content">
				<div class="col-sm-4 col-md-4 col-lg-4 wow fadeInLeft" data-wow-delay="0.1s">
					<img src="media/3-column-info/logtransport.jpg" alt="slider">
					<span></span>
					<h3>Transporte terrestre</h3>
					<p>Dentro de este sector existen diversos tipos de caja y camiones que se ajustan a muestras necesidades, cada una se encarga de preservar nuestra mercancía haciendo que esta llegue en óptimas condiciones, el movimiento de mercancías es un eslabón importante de la cadena de suministro, optimizando tiempos y costos.</p>
					<a class="btn btn-default btn-sm" href="transporte.php">Leer mas</a>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
					<img src="media/3-column-info/TRANSPORTE MULTIMODAL.jpg" alt="Img">
					<span></span>
					<h3>Carreteras</h3>
					<p> Las carreteras pavimentadas, espaciosas y públicas son esenciales para la conectividad y el transporte de personas y mercancías. Su amplitud y superficie pavimentada permiten un tránsito seguro y eficiente, conectando áreas urbanas y rurales. El mantenimiento adecuado y la seguridad vial son fundamentales para su funcionalidad. Estas carreteras desempeñan un papel crucial en el desarrollo económico y la movilidad en todo el mundo.</p>
					<a class="btn btn-default btn-sm" href="carreteras.php">Leer mas</a>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4 wow fadeInRight" data-wow-delay="0.1s">
					<img src="media/3-column-info/TECNOLOGÍA EN LA LOGÍSTICA.jpg" alt="Img">
					<span></span>
					<h3>Tecnología en la Logística</h3>
					<p>Se refiere al uso de herramientas y sistemas tecnológicos para mejorar la eficiencia y la gestión de la cadena de suministro. Esto incluye software de gestión de almacenes, sistemas de seguimiento en tiempo real, análisis de datos y automatización de procesos.</p>
					<a class="btn btn-default btn-sm" href="road-trucking.php">Leer mas</a>
				</div>
			</div>
		</div>
	        
	        <hr>
	        
	        
			<div class="container-fluid block-content">
			<div class="text-center hgroup wow zoomInUp" data-wow-delay="0.1s">
				<h1>Menu de informacion</h1>
				<h2>localiza la informacion de mejor manera</h2>
			</div>
			<div class="row our-services">
				<div class="col-sm-15 col-md-15 col-lg-15 wow zoomInUp" data-wow-delay="0.1s">
					<a href="clearance.php">
					<img src="media/main-slider/1.ico" alt="Icono" width="40" height="40">
						</span>
						<h4>Corredores carreteros México</h4>
						<p>En México existen principalmente 14 corredores carreteros y la mayor parte de las actividades logísticas y de consumo del país transitan a través de ellos, sumando en conjunto casi 20 mil kilómetros. </p>
					</a>
				</div>
				<div class="col-sm-15 col-md-15 col-lg-15 wow zoomInUp" data-wow-delay="0.1s">
    <a href="road-trucking.php">

	<img src="media/main-slider/2.ico" alt="Icono" width="40" height="40">
        <h4>PYMEs</h4>
        <p>Las Pequeñas y Medianas Empresas (PYMEs) son la columna vertebral de la economía en muchos países. Se definen por su tamaño y capacidad de generar empleo, lo que las convierte en un motor fundamental para el crecimiento económico y la generación de oportunidades.</p>
    </a>
</div>
				<div class="col-sm-15 col-md-15 col-lg-15 wow zoomInRight" data-wow-delay="0.1s">
					<a href="air-freight.php">
					<img src="media/main-slider/3.ico" alt="Icono" width="40" height="40">
						<h4>Tipo de transporte terrestre</h4>
						<p>La eficiencia en la cadena de suministro significa entregar productos a tiempo y minimizar costos, lo que es esencial para la competitividad y la satisfacción del cliente. Esto se logra mediante una planificación cuidadosa y la gestión inteligente de recursos y colaboración con socios de la cadena de suministro.

					</p>
					</a>
				</div>
				<div class="col-sm-15 col-md-15 col-lg-15 wow zoomInUp" data-wow-delay="0.1s">
					<a href="goods.php">
					<img src="media/main-slider/4.ico" alt="Icono" width="40" height="40">
						<h4>Sostenibilidad en la logistica</h4>
						<p>Es un enfoque clave para reducir el impacto ambiental de las operaciones de transporte y distribución. Se trata de optimizar rutas, usar vehículos más limpios y reducir residuos, con el objetivo de minimizar la huella ecológica de la cadena de suministro.</p>
					</a>
				</div>
				<div class="col-sm-15 col-md-15 col-lg-15 wow zoomInUp" data-wow-delay="0.1s">
					<a href="warehousing.php">
					<img src="media/main-slider/5.ico" alt="Icono" width="40" height="40">
						<h4>Eficiencia en la cadena de suministros</h4>
						<p>La eficiencia en la cadena de suministro significa entregar productos a tiempo y minimizar costos, lo que es esencial para la competitividad y la satisfacción del cliente. Esto se logra mediante una planificación cuidadosa y la gestión inteligente de recursos y colaboración con socios de la cadena de suministro.</p></a>
				</div>
				<div class="col-sm-15 col-md-15 col-lg-15 wow zoomInRight" data-wow-delay="0.1s">
					<a href="supply-chain-management.php">
					<img src="media/main-slider/6.ico" alt="Icono" width="40" height="40">
						<h4>Optimización de Rutas de Distribución </h4>
						<p> La optimización de rutas de distribución es un proceso fundamental en la logística que implica encontrar la manera más eficiente y rentable de entregar productos a destinos específicos.</p>
					</a>
				</div>
				<div class="col-sm-15 col-md-15 col-lg-15 wow zoomInUp" data-wow-delay="0.1s">
					<a href="supply-chain-management.php">
					<img src="media/main-slider/5.ico" alt="Icono" width="40" height="40">
						<h4>Logistica inversa</h4>
						<p>Logistica inversa.</p></a>
				</div>
			</div>
		</div>
		</div>
			<div class="fleet-gallery block-content bg-image inner-offset">
        		<div class="container-fluid inner-offset">
	                <div class="text-center hgroup wow zoomInUp" data-wow-delay="0.1s">
	                    <h1>Galeria imagenes</h1>
	                    <h2>Tipos de transporte</h2>            
	                </div>
	                <div id="fleet-gallery" class="owl-carousel enable-owl-carousel" data-pagination="false" data-navigation="true" data-min450="2" data-min600="2" data-min768="4">
	                    <div class="wow rotateIn" data-wow-delay="0.3s"><img src="media/fleet-gallery/2013-07-13%2015.31.18.jpg" alt="Img"></div>
                        <div class="wow rotateIn" data-wow-delay="0.3s"><img src="media/fleet-gallery/20150313_162848.jpg" alt="Img"></div>
	                    <div class="wow rotateIn" data-wow-delay="0.3s"><img src="media/fleet-gallery/2013-07-13%2015.31.51.jpg" alt="Img"></div>
                        <div class="wow rotateIn" data-wow-delay="0.3s"><img src="media/fleet-gallery/20150313_162851.jpg" alt="Img"></div>
	                    <div class="wow rotateIn" data-wow-delay="0.3s"><img src="media/fleet-gallery/2013-07-13%2015.32.18.jpg" alt="Img"></div>
                        <div class="wow rotateIn" data-wow-delay="0.3s"><img src="media/fleet-gallery/20150313_162855.jpg" alt="Img"></div>
	                    <div class="wow rotateIn" data-wow-delay="0.3s"><img src="media/fleet-gallery/2013-07-13%2015.38.28.jpg" alt="Img"></div>
                        <div class="wow rotateIn" data-wow-delay="0.3s"><img src="media/fleet-gallery/20150313_162859.jpg" alt="Img"></div>
	                    <div class="wow rotateIn" data-wow-delay="0.3s"><img src="media/fleet-gallery/2013-07-13%2017.33.33.jpg" alt="Img"></div>
	                    <div class="wow rotateIn" data-wow-delay="0.3s"><img src="media/fleet-gallery/2013-07-13%2015.34.05.jpg" alt="Img"></div>
						</div>
    			</div>
				<div class="big-hr color-1 wow zoomInUp" data-wow-delay="0.1s">
        		<div class="text-left" style="margin-right:20px;">
            		<h2>Exclusivo para proyecto de residencias residentes.</h2>
            		<p>link para checar residencias TESCI.</p>
				</div>
	            <div><a class="btn btn-success btn-lg" href="https://residencias.tesci.online/">Entrar</a></div>
				<br>
	        </div>
	        </div>

            
	        <hr>
	        
	        
	        
	        
	        
	       
<?php include 'footer.php' ?>			
        </div>
        <!--Main-->   
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        
        <script src="assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>
		<!-- Loader -->
		<script src="assets/loader/js/classie.js"></script>
		<script src="assets/loader/js/pathLoader.js"></script>
		<script src="assets/loader/js/main.js"></script>
		<script src="js/classie.js"></script>
		<!--Switcher-->
		<script src="assets/switcher/js/switcher.js"></script>
        <!--Owl Carousel-->
        <script src="assets/owl-carousel/owl.carousel.min.js"></script>
        <!-- SCRIPTS -->
	    <script type="text/javascript" src="assets/isotope/jquery.isotope.min.js"></script>
        <!--Theme-->
        <script src="js/jquery.smooth-scroll.js"></script>
        <script src="js/wow.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/smoothscroll.min.js"></script>
        <script src="js/theme.js"></script>
	</body>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
</html>