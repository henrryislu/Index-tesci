<?php include 'head.php' ?>
	<body data-scrolling-animations="true">
        <div class="sp-body">
			
<?php include 'header.php' ?>	
			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>Contactanos aqui</h1></a>
					<div class="pull-right">
						<a href=""><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="Contactarar.php">TESCI Contacto</a>
					</div>
				</div>
			</div>

			<iframe class="we-onmap wow fadeInUp" data-wow-delay="0.3s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3757.548460610946!2d-99.23093792478016!3d19.64659298167911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21e5c07387a6f%3A0xd7735472495ee4aa!2sTecNM%20-%20Tecnol%C3%B3gico%20de%20Estudios%20Superiores%20de%20Cuautitl%C3%A1n%20Izcalli!5e0!3m2!1ses-419!2smx!4v1699583744975!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

			<div class="container-fluid block-content">
				<div class="row main-grid">
					<div class="col-sm-4">
						<h4>Contactanos</h4>
						<p>Estamos habiertos a mejorar y facilitar tu conosimiento logistico</p>
						<div class="adress-details wow fadeInLeft" data-wow-delay="0.3s">
							<div>
								<span><i class="fa fa-location-arrow"></i></span>
								<div><strong>Index Logistico TESCI.</strong><br>Av. Nopaltepec S/N, 54748 CUAUTITLAN IZCALLI, México </div>
							</div>
							<div>
								<span><i class="fa fa-phone"></i></span>
								<div>+254 724 795 342 </div>
							</div>
							<div>
								<span><i class="fa fa-envelope"></i></span>
								<div>luisenriques458@gmail.com</div>
							</div>
							
						</div>
						<br><br><hr><br>
						<h4>Empresa</h4>
						<div class="adress-details wow fadeInLeft" data-wow-delay="0.3s">
							<div>
								<span><i class="fa fa-location-arrow"></i></span>
								<div><strong>TESCI.</strong><br>Fracción la Coyotera del Ejido, Av. Nopaltepec, Av San Antonio s/n, Industrial Cuamatla, 54748 Cuautitlán Izcalli, Méx. </div>
							</div>
							<div>
								<span><i class="fa fa-phone"></i></span>
								<div>+525558643170 </div>
							</div>
							<div>
								<span><i class="fa fa-envelope"></i></span>
								<div>tesci.edomex.gob.mx/</div>
							</div>
							
						</div>
					</div>
					<div class="col-sm-8 wow fadeInRight" data-wow-delay="0.3s">
						<h4>Enviar mensaje</h4>
                        
				<?php
                    if(isset($_GET['response1'])){	
                    @$response1 = $_GET['response1'];
                ?>
                <div class="col-md-12" >
			         <div class="alert alert-success display" id="msg">
                    <span class="glyphicon glyphicon-ok"></span> <?php echo "".$response1.""; ?>
                    </div>
				</div>
				<?php } ?>
						<p>Estamos aquí para responder cualquier pregunta que puedas tener sobre nuestras experiencias. Comuníquese con nosotros y le responderemos tan pronto como podamos.</p>
						<div id="success"></div>
						<form  method="post"  action="send-email.php" class=" form-inline">
							<div class="row form-elem">	
								<div class="col-sm-6 form-elem">
									<div class="form-group default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="first_name" id="user-name" placeholder="Nombre" required="required">
									</div>
									<div class="form-group default-inp form-elem">
										<i class="fa fa-envelope"></i>
										<input type="text" name="email" id="user-email" placeholder="Correo" required="required">
									</div>
								</div>
								<div class="col-sm-6 form-elem">
									<div class="form-group default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="last_name" id="user-lastname" placeholder="apellido">
                                        
									</div>
									<div class="form-group default-inp form-elem">
										<i class="fa fa-phone"></i>
										<input type="text" name="telephone" id="user-phone" placeholder="Telefono">
									</div>
								</div>
							</div>
							<div class="form-group default-inp form-elem">
								<input type="text" name="subject" id="user-subject" placeholder="Asunto">
							</div>
							<div class="form-group form-elem default-inp">
								<textarea id="comments" name="comments" placeholder="Mensaje"></textarea>
							</div>
							<div class="form-action form-elem">
                                <button type="submit" name="submit" class="btn btn-success"> Enviar mensaje</button>
                            </div>
						</form>
					</div>
				</div>
			</div>

			<?php include 'footer.php' ?>
		</div>

		<!--Main-->   
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<!--Switcher-->
		<script src="assets/switcher/js/switcher.js"></script>
		<!--Owl Carousel-->
		<script src="assets/owl-carousel/owl.carousel.min.js"></script>
		<!--
		<script src="assets/Contactarar/jqBootstrapValidation.js"></script> 
		<script src="assets/ContactaraContactarctar_me.js"></script>
		<!-- SCRIPTS -->
	    <script type="text/javascript" src="assets/isotope/jquery.isotope.min.js"></script>
		<!--Theme-->
		<script src="js/jquery.smooth-scroll.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/smoothscroll.min.js"></script>
		<script src="js/theme.js"></script>
	</body>

</html>