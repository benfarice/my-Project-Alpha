<?php 
		session_start();
		if(!isset($_SESSION['username'])){
	
		//echo "You Are not Authorized To view this page";
		header('Location: index.php');
		exit();
		}
		$lang = 'includes/languages/';
		include_once $lang.$_SESSION['Lang'].'.php';
		//include_once $lang.'arabic.php';
		$pagetitle =  lang('intro_fish_title');
		$noNavbar = '';
		$definir_fish_script = ''; 
		include 'init.php';

		?>
		<div class="container-fluid">
			
			<div class="row outer-background">
				<!--<div class="col-md-1 col-sm-1 col-xs-1"></div>-->
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="row inner-background" id="search_vendeur"> 
						<!--
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h1 class="text-center" id="h1_choose_title"><?php //echo lang('h1_choose_vendeur');?></h1>
						</div>
						-->
						<div class="col-md-12 col-sm-12 col-xs-12 text-right" id="search_form">
							<div class="row">
							
							<div class="col-md-4 col-sm-4 col-xs-4">
								<!--<label class="mr-sm-2" for="inlineFormCustomSelect">
									<?php //echo lang('search.');?></label>-->
								<!--
								 <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
								    <!-- <option ><?php  //echo lang('Choose.');?></option>-->
								<!--
								    <option selected><?php //echo lang('ID.'); ?></option>
								    <option value="2" id="option_licence_group"><?php //echo lang('licence'); ?></option>
								    <option value="3"><?php //echo lang('name');?></option>
								  </select>
								-->
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4">
							
							<!--<br>-->
							<div class="input-group input-group-lg">
							
							  <input type="text" class="form-control" placeholder="<?php  echo lang('search_exemple_here');?>" aria-label="Large" aria-describedby="inputGroup-sizing-sm" id="searched_value">
							</div>
							
							</div>
							<div class="col-md-2 col-sm-2 col-xs-2">
								<!--<br>-->
								<div onclick="search_sellers_func();">
									<?php  //echo lang('search_word');?>								




					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="60px" height="60px"
						 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
					<path style="fill:#B06328;" d="M512,471.273L512,471.273C512,493.382,493.382,512,471.273,512l0,0
						c-11.636,0-22.109-4.655-30.255-12.8L310.691,357.236c-4.655-4.655-4.655-11.636,0-16.291l30.255-30.255
						c4.655-4.655,11.636-4.655,16.291,0L499.2,442.182C507.345,449.164,512,460.8,512,471.273z"/>
					<rect x="292.065" y="283.928" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 744.4417 308.3694)" style="fill:#B0C4D8;" width="32.581" height="48.872"/>
					<path style="fill:#99B4CD;" d="M320,320l5.818,5.818l11.636-11.636l-34.909-34.909l-23.273,23.273L296.727,320l0,0
						C303.709,313.018,313.018,313.018,320,320z"/>
					<path style="fill:#C4D7E5;" d="M174.545,0C77.964,0,0,77.964,0,174.545s77.964,174.545,174.545,174.545
						s174.545-77.964,174.545-174.545S271.127,0,174.545,0z M174.545,314.182c-76.8,0-139.636-62.836-139.636-139.636
						S97.745,34.909,174.545,34.909s139.636,62.836,139.636,139.636S251.345,314.182,174.545,314.182z"/>
					<circle style="fill:#70B7E5;" cx="174.545" cy="174.545" r="139.636"/>
					<path style="fill:#92C5EB;" d="M105.891,190.836c5.818-44.218,40.727-79.127,84.945-84.945H192
						c19.782-2.327,20.945-30.255,2.327-33.745c-11.636-2.327-23.273-2.327-34.909-1.164c-45.382,6.982-81.455,43.055-87.273,87.273
						c-2.327,11.636-1.164,24.436,1.164,34.909c3.491,19.782,31.418,17.455,33.745-2.327C105.891,192,105.891,190.836,105.891,190.836z"
						/>
					<path style="fill:#4C9CD6;" d="M46.545,186.182c0-76.8,62.836-139.636,139.636-139.636c36.073,0,67.491,13.964,93.091,34.909
						c-25.6-29.091-62.836-46.545-104.727-46.545c-76.8,0-139.636,62.836-139.636,139.636c0,41.891,18.618,79.127,46.545,104.727
						C60.509,253.673,46.545,222.255,46.545,186.182z"/>
					<path style="fill:#B0C9DB;" d="M174.545,349.091L174.545,349.091c96.582,0,174.545-77.964,174.545-174.545l0,0
						c-5.818,0-11.636,4.655-11.636,11.636c-2.327,39.564-19.782,75.636-46.545,102.4c-26.764,27.927-64,45.382-104.727,48.873
						C179.2,337.455,174.545,343.273,174.545,349.091z"/>
					<path style="fill:#E2E7F0;" d="M174.545,0L174.545,0C77.964,0,0,77.964,0,174.545l0,0c5.818,0,11.636-4.655,11.636-11.636
						C13.964,124.509,30.255,89.6,54.691,64c27.927-29.091,66.327-48.873,108.218-52.364C169.891,11.636,174.545,5.818,174.545,0z"/>
					<path style="fill:#A35425;" d="M498.036,441.018l-6.982-5.818c5.818,6.982,9.309,16.291,9.309,25.6l0,0
						c0,15.127-18.618,20.945-29.091,10.473L349.091,349.091c-6.982-6.982-17.455-6.982-24.436,0l-11.636,11.636l126.836,136.145
						c6.982,6.982,16.291,12.8,25.6,13.964c12.8,1.164,25.6-3.491,33.745-11.636c8.145-8.145,12.8-20.945,11.636-33.745
						C510.836,456.145,505.018,448,498.036,441.018z"/>
					<path style="fill:#C97629;" d="M378.182,360.727c-1.164,0-3.491,0-4.655-1.164l-29.091-29.091c-2.327-2.327-2.327-5.818,0-8.145
						c2.327-2.327,5.818-2.327,8.145,0l29.091,29.091c2.327,2.327,2.327,5.818,0,8.145C381.673,360.727,379.345,360.727,378.182,360.727z
						"/>

					</svg>






								</div>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-2">
								<a href="dashboard.php">
									<svg  width="60px" height="60px"  version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 383.869 383.869" style="enable-background:new 0 0 383.869 383.869;" xml:space="preserve">
									<path style="fill:#00BBD3;" d="M269.976,123.38H50.547l56.947-64.784c5.747-6.269,5.224-16.196-1.567-21.943
									c-6.269-5.747-16.196-5.224-21.943,1.567L4.049,128.604c0,0.522-0.522,0.522-0.522,1.045c-0.522,0.522-0.522,0.522-1.045,1.045
									c-0.522,0.522-0.522,1.045-0.522,1.567c0,0.522-0.522,0.522-0.522,1.045c0,0.522-0.522,1.045-0.522,1.567
									c0,0.522,0,0.522-0.522,1.045c-0.522,2.09-0.522,4.18,0,5.747c0,0.522,0,0.522,0.522,1.045c0,0.522,0.522,1.045,0.522,1.567
									s0.522,0.522,0.522,1.045c0,0.522,0.522,1.045,0.522,1.567s0.522,0.522,1.045,1.045c0,0.522,0.522,0.522,0.522,1.045l79.412,90.906
									c3.135,3.657,7.314,5.225,12.016,5.225c3.657,0,7.314-1.045,10.449-3.657c6.269-5.747,7.314-15.673,1.567-21.943l-56.947-64.784
									h219.429c45.453,0,82.547,37.094,82.547,82.547s-37.094,82.547-82.547,82.547H36.963c-8.882,0-15.673,6.792-15.673,15.673
									s6.792,15.673,15.673,15.673h233.012c62.694,0,113.894-51.2,113.894-113.894S332.669,123.38,269.976,123.38z"/>

								</svg>
								</a>
								
							</div>
							</div>
						</div>
					
					    <div class="col-md-12 col-sm-12 col-xs-12" id="slider_vendeurs_names">
								<div id="get_data_vendeurs" class="get_data_vendeurs">
									<!-- ************************* -->
									<!-- ************
									Get Ajax Data Here
										************* -->
									<!-- ************************* -->
								</div>
								<div style="clear: both;"></div>
						</div>
						<!--
							<div class="col-md-4 col-sm-4 col-xs-4">	
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4">
								<button class="btn btn-primary btn-block btn-lg" onclick="ajax_func_family();change_title_to_family();">
									<?php //echo lang('step1_next');?>	
									</button>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4">	
							</div>
						-->
							<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="row">
							
							<div class="col-md-1 col-sm-1 col-xs-1 text-right search_bar border-raduis-bar">
								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" onclick="plusDivs(1)"
							 viewBox="0 0 54 54" style="enable-background:new 0 0 54 54;" xml:space="preserve">

								<path style="fill:#4FBA6F;" d="M27,53L27,53C12.641,53,1,41.359,1,27v0C1,12.641,12.641,1,27,1h0c14.359,0,26,11.641,26,26v0
									C53,41.359,41.359,53,27,53z"/>
								<path style="fill:#4FBA6F;" d="M27,54C12.112,54,0,41.888,0,27S12.112,0,27,0s27,12.112,27,27S41.888,54,27,54z M27,2
									C13.215,2,2,13.215,2,27s11.215,25,25,25s25-11.215,25-25S40.785,2,27,2z"/>

							    <path style="fill:#FFFFFF;" d="M22.294,40c-0.256,0-0.512-0.098-0.707-0.293c-0.391-0.391-0.391-1.023,0-1.414L32.88,27
								L21.587,15.707c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0l11.498,11.498c0.667,0.667,0.667,1.751,0,2.418
								L23.001,39.707C22.806,39.902,22.55,40,22.294,40z"/>

						        </svg>
							</div>
							<div class="col-md-10 col-sm-10 col-xs-10"></div>
							<div class="col-md-1 col-sm-1 col-xs-1 text-left search_bar border-raduis-bar">
								

						        	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 54 54" style="enable-background:new 0 0 54 54;" xml:space="preserve"  width="50px" height="50px" onclick="plusDivs(-1)">

                                        <path style="fill:#4FBA6F;" d="M27,1L27,1c14.359,0,26,11.641,26,26v0c0,14.359-11.641,26-26,26h0C12.641,53,1,41.359,1,27v0
                                            C1,12.641,12.641,1,27,1z"/>
                                        <path style="fill:#4FBA6F;" d="M27,54C12.112,54,0,41.888,0,27S12.112,0,27,0s27,12.112,27,27S41.888,54,27,54z M27,2
                                            C13.215,2,2,13.215,2,27s11.215,25,25,25s25-11.215,25-25S40.785,2,27,2z"/>

                                    <path style="fill:#FFFFFF;" d="M31.706,40c-0.256,0-0.512-0.098-0.707-0.293L19.501,28.209c-0.667-0.667-0.667-1.751,0-2.418
                                        l11.498-11.498c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L21.12,27l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414
                                        C32.218,39.902,31.962,40,31.706,40z"/>

                                </svg>
							</div>

							</div>
							
						</div>
						<!-- **************************** -->
					</div>

					<div class="inner-background" id="input_poids">
						<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-8">
							<p><?php echo lang('seller'); ?><span id="seller_selected"></span></p>
						</div>
						
						<div class="col-md-4 col-sm-4 col-xs-4">
							
								<a onclick="select_another_seller();">
									<svg  width="60px" height="60px"  version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 383.869 383.869" style="enable-background:new 0 0 383.869 383.869;" xml:space="preserve">
									<path style="fill:#00BBD3;" d="M269.976,123.38H50.547l56.947-64.784c5.747-6.269,5.224-16.196-1.567-21.943
									c-6.269-5.747-16.196-5.224-21.943,1.567L4.049,128.604c0,0.522-0.522,0.522-0.522,1.045c-0.522,0.522-0.522,0.522-1.045,1.045
									c-0.522,0.522-0.522,1.045-0.522,1.567c0,0.522-0.522,0.522-0.522,1.045c0,0.522-0.522,1.045-0.522,1.567
									c0,0.522,0,0.522-0.522,1.045c-0.522,2.09-0.522,4.18,0,5.747c0,0.522,0,0.522,0.522,1.045c0,0.522,0.522,1.045,0.522,1.567
									s0.522,0.522,0.522,1.045c0,0.522,0.522,1.045,0.522,1.567s0.522,0.522,1.045,1.045c0,0.522,0.522,0.522,0.522,1.045l79.412,90.906
									c3.135,3.657,7.314,5.225,12.016,5.225c3.657,0,7.314-1.045,10.449-3.657c6.269-5.747,7.314-15.673,1.567-21.943l-56.947-64.784
									h219.429c45.453,0,82.547,37.094,82.547,82.547s-37.094,82.547-82.547,82.547H36.963c-8.882,0-15.673,6.792-15.673,15.673
									s6.792,15.673,15.673,15.673h233.012c62.694,0,113.894-51.2,113.894-113.894S332.669,123.38,269.976,123.38z"/>

								</svg>
								</a>
						
						</div>
					</div>
                        		<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-2" onclick="ajax_func_lot_imprim_all();">
							<div>
								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="100px" height="100px" 
								 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">

								<path style="fill:#285680;" d="M5.209,217.071l-0.088-0.088l69.031-86.775c3.354-4.175,8.416-6.609,13.771-6.621h336.154
									c5.355,0.012,10.417,2.446,13.771,6.621l70.091,88.099L5.209,217.071z"/>
								<path style="fill:#4482C3;" d="M512,229.517v194.207c-0.029,9.739-7.916,17.627-17.655,17.655H17.655
									C7.917,441.351,0.029,433.463,0,423.724V229.517c-0.025-4.684,1.856-9.177,5.209-12.447c3.27-3.353,7.762-5.233,12.446-5.208
									h476.69c5.271-0.011,10.266,2.357,13.594,6.444l0.265,0.265C510.675,221.684,512.014,225.544,512,229.517z"/>
								<path style="fill:#35495E;" d="M379.586,397.242h26.483c9.739-0.029,17.627-7.916,17.655-17.655v-26.483
									c-0.029-9.739-7.916-17.627-17.655-17.655H105.931c-9.739,0.029-17.627,7.916-17.655,17.655v26.483
									c0.029,9.739,7.916,17.627,17.655,17.655h26.483"/>
								<path style="fill:#D1D4D1;" d="M256,282.483H185.38c-4.875,0-8.828-3.952-8.828-8.828s3.952-8.828,8.828-8.828H256
									c4.875,0,8.828,3.952,8.828,8.828S260.876,282.483,256,282.483z"/>
								<g>
									<path style="fill:#FFFFFF;" d="M291.311,282.483c-1.153-0.014-2.293-0.254-3.353-0.707c-1.091-0.407-2.083-1.038-2.914-1.854
										c-0.401-0.434-0.756-0.908-1.06-1.414c-0.352-0.449-0.62-0.957-0.793-1.5c-0.268-0.526-0.448-1.093-0.534-1.677
										c-0.1-0.554-0.158-1.114-0.172-1.676c0.031-2.338,0.945-4.577,2.56-6.268c0.829-0.818,1.822-1.451,2.914-1.858
										c3.289-1.375,7.081-0.642,9.621,1.858c1.611,1.693,2.525,3.931,2.56,6.268c-0.013,0.563-0.074,1.124-0.181,1.677
										c-0.079,0.585-0.257,1.152-0.526,1.677c-0.176,0.542-0.445,1.049-0.793,1.5c-0.353,0.53-0.707,0.97-1.06,1.414
										C295.884,281.533,293.647,282.447,291.311,282.483z"/>
									<path style="fill:#FFFFFF;" d="M326.621,282.483c-0.593-0.016-1.183-0.075-1.767-0.177c-0.552-0.098-1.086-0.277-1.586-0.53
										c-0.565-0.194-1.101-0.462-1.595-0.797c-0.44-0.35-0.879-0.703-1.319-1.056c-0.378-0.421-0.732-0.862-1.06-1.323
										c-0.336-0.492-0.603-1.027-0.793-1.591c-0.255-0.501-0.435-1.037-0.535-1.59c-0.096-0.583-0.153-1.172-0.172-1.763
										c0.031-2.338,0.945-4.577,2.56-6.268l1.319-1.06c0.494-0.335,1.03-0.604,1.595-0.797c0.499-0.254,1.034-0.431,1.587-0.526
										c1.14-0.177,2.3-0.177,3.44,0c0.586,0.081,1.154,0.259,1.681,0.526c0.562,0.194,1.095,0.462,1.586,0.797
										c0.44,0.353,0.888,0.707,1.328,1.06c1.611,1.693,2.526,3.931,2.56,6.267c-0.018,0.591-0.078,1.18-0.181,1.763
										c-0.093,0.554-0.27,1.09-0.526,1.59c-0.194,0.562-0.461,1.097-0.793,1.591c-0.353,0.44-0.707,0.879-1.06,1.323
										c-0.44,0.353-0.888,0.707-1.328,1.056c-0.491,0.335-1.024,0.603-1.586,0.797c-0.528,0.266-1.096,0.445-1.681,0.53
										C327.741,282.408,327.182,282.467,326.621,282.483z"/>
								</g>
								<g>
									<path style="fill:#FDD7AD;" d="M379.586,335.448v167.724c0,4.875-3.952,8.828-8.828,8.828H141.242
										c-4.875,0-8.828-3.952-8.828-8.828V335.448"/>
									<path style="fill:#FDD7AD;" d="M379.586,52.966v123.586H132.414V8.828c0.014-4.869,3.958-8.813,8.828-8.828h185.379v52.966
										H379.586z"/>
								</g>
								<g>
									<path style="fill:#7F6E5D;" d="M335.449,432.552H176.552c-4.875,0-8.828-3.952-8.828-8.828s3.952-8.828,8.828-8.828h158.897
										c4.875,0,8.828,3.952,8.828,8.828S340.324,432.552,335.449,432.552z"/>
									<path style="fill:#7F6E5D;" d="M335.449,388.414H176.552c-4.875,0-8.828-3.952-8.828-8.828s3.952-8.828,8.828-8.828h158.897
										c4.875,0,8.828,3.952,8.828,8.828S340.324,388.414,335.449,388.414z"/>
								</g>
								<polygon style="fill:#CBB292;" points="379.586,52.966 326.621,52.966 326.621,0 	"/>

							</svg>
							</div>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-8">
							
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2" onclick="modal_func();">
							<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px"
								 viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
							<circle style="fill:#43B05C;" cx="25" cy="25" r="25"/>
							<line style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="25" y1="13" x2="25" y2="38"/>
							<line style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="37.5" y1="25" x2="12.5" y2="25"/>

							</svg>
						</div>
					</div>
				
					<div class="row text-center" id="get_lot_info">
						<div class="col-md-12 col-sm-12 col-xs-12" id="tbody_get_lot_date">
							
						   <!-- *******************************
						   ***** Ajax Data Here
						   ************************************ 
						   ************************************ -->
						</div>
						
						
					</div>
			</div>
				</div>
				<!--<div class="col-md-1 col-sm-1 col-xs-1"></div>-->
				
			</div>
		</div>








		<!-- ************************************************************** -->
		<!-- *********************** Twitter Bootstrap modal 
			*************************************** -->
		<!-- ************************************************************** -->


		<div class="modal fade" id="Espece_modal"  data-backdrop="static"
   		data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		       



							
							<div class="col-md-4 col-sm-4 col-xs-4">
								<!--<label class="mr-sm-2" for="inlineFormCustomSelect">
									<?php //echo lang('search.');?></label>-->
								<!--
								  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
								    <!--<option ><?php  //echo lang('Choose.');?></option>-->
								<!--
								    <option selected><?php //echo lang('ID.'); ?></option>
								    <option value="2"><?php //echo lang('option_gr_family'); ?></option>
								    <option value="3"><?php //echo lang('name');?></option>
								  </select>
								-->
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4">
							
							<!--<br>-->
							<div class="input-group input-group-lg">
							
							  <input type="text" class="form-control" placeholder="<?php 
							   echo lang('search_exemple_espece');?>" aria-label="Large" aria-describedby="inputGroup-sizing-sm" id="searched_value_espece">
							</div>
							
							</div>
							<div class="col-md-2 col-sm-2 col-xs-2">
								<!--<br>-->
								<div onclick="search_especes_func();">
									<?php  //echo lang('search_word');?>								




					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="60px" height="60px"
						 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
					<path style="fill:#B06328;" d="M512,471.273L512,471.273C512,493.382,493.382,512,471.273,512l0,0
						c-11.636,0-22.109-4.655-30.255-12.8L310.691,357.236c-4.655-4.655-4.655-11.636,0-16.291l30.255-30.255
						c4.655-4.655,11.636-4.655,16.291,0L499.2,442.182C507.345,449.164,512,460.8,512,471.273z"/>
					<rect x="292.065" y="283.928" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 744.4417 308.3694)" style="fill:#B0C4D8;" width="32.581" height="48.872"/>
					<path style="fill:#99B4CD;" d="M320,320l5.818,5.818l11.636-11.636l-34.909-34.909l-23.273,23.273L296.727,320l0,0
						C303.709,313.018,313.018,313.018,320,320z"/>
					<path style="fill:#C4D7E5;" d="M174.545,0C77.964,0,0,77.964,0,174.545s77.964,174.545,174.545,174.545
						s174.545-77.964,174.545-174.545S271.127,0,174.545,0z M174.545,314.182c-76.8,0-139.636-62.836-139.636-139.636
						S97.745,34.909,174.545,34.909s139.636,62.836,139.636,139.636S251.345,314.182,174.545,314.182z"/>
					<circle style="fill:#70B7E5;" cx="174.545" cy="174.545" r="139.636"/>
					<path style="fill:#92C5EB;" d="M105.891,190.836c5.818-44.218,40.727-79.127,84.945-84.945H192
						c19.782-2.327,20.945-30.255,2.327-33.745c-11.636-2.327-23.273-2.327-34.909-1.164c-45.382,6.982-81.455,43.055-87.273,87.273
						c-2.327,11.636-1.164,24.436,1.164,34.909c3.491,19.782,31.418,17.455,33.745-2.327C105.891,192,105.891,190.836,105.891,190.836z"
						/>
					<path style="fill:#4C9CD6;" d="M46.545,186.182c0-76.8,62.836-139.636,139.636-139.636c36.073,0,67.491,13.964,93.091,34.909
						c-25.6-29.091-62.836-46.545-104.727-46.545c-76.8,0-139.636,62.836-139.636,139.636c0,41.891,18.618,79.127,46.545,104.727
						C60.509,253.673,46.545,222.255,46.545,186.182z"/>
					<path style="fill:#B0C9DB;" d="M174.545,349.091L174.545,349.091c96.582,0,174.545-77.964,174.545-174.545l0,0
						c-5.818,0-11.636,4.655-11.636,11.636c-2.327,39.564-19.782,75.636-46.545,102.4c-26.764,27.927-64,45.382-104.727,48.873
						C179.2,337.455,174.545,343.273,174.545,349.091z"/>
					<path style="fill:#E2E7F0;" d="M174.545,0L174.545,0C77.964,0,0,77.964,0,174.545l0,0c5.818,0,11.636-4.655,11.636-11.636
						C13.964,124.509,30.255,89.6,54.691,64c27.927-29.091,66.327-48.873,108.218-52.364C169.891,11.636,174.545,5.818,174.545,0z"/>
					<path style="fill:#A35425;" d="M498.036,441.018l-6.982-5.818c5.818,6.982,9.309,16.291,9.309,25.6l0,0
						c0,15.127-18.618,20.945-29.091,10.473L349.091,349.091c-6.982-6.982-17.455-6.982-24.436,0l-11.636,11.636l126.836,136.145
						c6.982,6.982,16.291,12.8,25.6,13.964c12.8,1.164,25.6-3.491,33.745-11.636c8.145-8.145,12.8-20.945,11.636-33.745
						C510.836,456.145,505.018,448,498.036,441.018z"/>
					<path style="fill:#C97629;" d="M378.182,360.727c-1.164,0-3.491,0-4.655-1.164l-29.091-29.091c-2.327-2.327-2.327-5.818,0-8.145
						c2.327-2.327,5.818-2.327,8.145,0l29.091,29.091c2.327,2.327,2.327,5.818,0,8.145C381.673,360.727,379.345,360.727,378.182,360.727z
						"/>

					</svg>






								</div>
							</div>
				<div class="col-md-2 col-sm-2 col-xs-2">
							
					<button class="btn btn-block btn-lg btn-warning">
						<?php echo lang('family'); ?>
					</button>		
				</div>
						











		        
		      </div>
		      <div class="modal-body">
		      	<div class="row">
		      	<div class="col-md-12 col-sm-12 col-xs-12" id="get_data_espece">
		      		
		      	</div>
		      	<!--<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="row">
				-->		
							<div class="col-md-1 col-sm-1 col-xs-1 text-right search_bar border-raduis-bar">
								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" onclick="plusDivs_espece(1)"
							 viewBox="0 0 54 54" style="enable-background:new 0 0 54 54;" xml:space="preserve">

								<path style="fill:#4FBA6F;" d="M27,53L27,53C12.641,53,1,41.359,1,27v0C1,12.641,12.641,1,27,1h0c14.359,0,26,11.641,26,26v0
									C53,41.359,41.359,53,27,53z"/>
								<path style="fill:#4FBA6F;" d="M27,54C12.112,54,0,41.888,0,27S12.112,0,27,0s27,12.112,27,27S41.888,54,27,54z M27,2
									C13.215,2,2,13.215,2,27s11.215,25,25,25s25-11.215,25-25S40.785,2,27,2z"/>

							    <path style="fill:#FFFFFF;" d="M22.294,40c-0.256,0-0.512-0.098-0.707-0.293c-0.391-0.391-0.391-1.023,0-1.414L32.88,27
								L21.587,15.707c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0l11.498,11.498c0.667,0.667,0.667,1.751,0,2.418
								L23.001,39.707C22.806,39.902,22.55,40,22.294,40z"/>

						        </svg>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3"></div>
							<div class="col-md-4 col-sm-4 col-xs-4">
								 <button type="button" class="btn btn-secondary btn-block btn-lg" data-dismiss="modal">
						        	<?php echo lang('Close'); ?>
						        	
						        </button>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3"></div>
							<div class="col-md-1 col-sm-1 col-xs-1 text-left search_bar border-raduis-bar">
								

						       <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 54 54" style="enable-background:new 0 0 54 54;" xml:space="preserve" width="50px" height="50px" onclick="plusDivs_espece(-1)">

                                    <path style="fill:#4FBA6F;" d="M27,1L27,1c14.359,0,26,11.641,26,26v0c0,14.359-11.641,26-26,26h0C12.641,53,1,41.359,1,27v0
                                        C1,12.641,12.641,1,27,1z"/>
                                    <path style="fill:#4FBA6F;" d="M27,54C12.112,54,0,41.888,0,27S12.112,0,27,0s27,12.112,27,27S41.888,54,27,54z M27,2
                                        C13.215,2,2,13.215,2,27s11.215,25,25,25s25-11.215,25-25S40.785,2,27,2z"/>

                                <path style="fill:#FFFFFF;" d="M31.706,40c-0.256,0-0.512-0.098-0.707-0.293L19.501,28.209c-0.667-0.667-0.667-1.751,0-2.418
                                    l11.498-11.498c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L21.12,27l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414
                                    C32.218,39.902,31.962,40,31.706,40z"/>

                            </svg>
							</div>

							</div>
							
				<!--		</div>
						</div>
				-->
		      </div>
		      <!--
		      <div class="modal-footer">
		       
		       
		      </div>
		  	  -->
		    </div>
		  </div>
		</div>
		
		

	
	<!-- ui-dialog -->
	<div id="dialog" class="text-right">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-6">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<p><?php echo lang('the_type'); ?> : <span id="the_type_fish_selected"></span>
						| <?php echo lang('seller'); ?><span id="seller_selected_d"></span></p>
					</div>
				</div>
				<div class="row">
					<!--
					<div class="col-md-4 col-sm-4 col-xs-4 method_buy" id="select_dialog_box">
						<p><?php //echo lang('box'); ?></p>
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="150px"
							 viewBox="0 0 495.2 495.2" style="enable-background:new 0 0 495.2 495.2;" xml:space="preserve">
						<polygon style="fill:#D38C0D;" points="325.6,224.4 495.2,126 325.6,28.4 156.8,127.6 "/>
						<g>
							<polygon style="fill:#EFBB67;" points="170.4,224.4 338.4,126.8 170.4,28.4 0,126.8 	"/>
							<polygon style="fill:#EFBB67;" points="416,368.4 248,466.8 80,368.4 80,172.4 248,74 416,172.4 	"/>
						</g>
						<polyline style="fill:#D38C0D;" points="248,74 416,172.4 416,368.4 248,466.8 "/>
						<polygon style="fill:#EFBB67;" points="326.4,314.8 495.2,218 325.6,119.6 156,218 "/>
						<polygon style="fill:#D38C0D;" points="170.4,316.4 339.2,217.2 170.4,119.6 0,218 "/>
						<polygon style="fill:#704A0E;" points="248.8,270.8 416,172.4 248.8,74 78.4,172.4 "/>
						<polyline style="fill:#513307;" points="248.8,270.8 416,172.4 248.8,74 "/>
						<polygon style="fill:#2D1C05;" points="248.8,270.8 284.8,249.2 248.8,228.4 212.8,249.2 "/>
						<g>
							<polygon style="fill:#0DD396;" points="368,379.6 408,356.4 408,343.6 368,366.8 	"/>
							<polygon style="fill:#0DD396;" points="368,356.4 408,333.2 408,320.4 368,343.6 	"/>
							<polygon style="fill:#0DD396;" points="368,333.2 408,310 408,296.4 368,320.4 	"/>
						</g>

						</svg>
					</div>
					-->
					<div class="col-md-4 col-sm-4 col-xs-4"></div>
					<div class="col-md-4 col-sm-4 col-xs-4 method_buy" id="method_buy_poids">
						<p><?php echo lang('poids'); ?></p>

					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  width="150px" height="150px" 
						 viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
					<g>
						<path style="fill:#BAC6CC;" d="M134.41,294.316c-3.604,0-6.944-2.324-8.069-5.948L83.036,148.823L39.731,288.368
							c-1.384,4.457-6.117,6.949-10.576,5.566c-4.457-1.384-6.95-6.118-5.566-10.576l51.376-165.553c1.097-3.536,4.368-5.946,8.071-5.946
							c3.702,0,6.973,2.41,8.071,5.946l51.376,165.553c1.384,4.457-1.109,9.192-5.566,10.576
							C136.083,294.194,135.239,294.316,134.41,294.316z"/>
						<path style="fill:#BAC6CC;" d="M480.339,294.316c-3.604,0-6.944-2.324-8.069-5.948l-43.306-139.546l-43.305,139.546
							c-1.384,4.457-6.117,6.95-10.576,5.566c-4.457-1.384-6.95-6.118-5.566-10.576l51.376-165.553c1.097-3.536,4.368-5.946,8.071-5.946
							s6.973,2.41,8.071,5.946l51.377,165.553c1.384,4.457-1.109,9.192-5.566,10.576C482.011,294.194,481.167,294.316,480.339,294.316z"
							/>
					</g>
					<path style="fill:#4EBFED;" d="M230.056,142.178v255.06c0,23.805-19.307,43.111-43.111,43.111h-28.28
						c-15.674,0-28.384,12.71-28.384,28.384v23.505h99.775h51.889h99.775v-23.505c0-15.674-12.71-28.384-28.384-28.384h-28.28
						c-23.805,0-43.111-19.307-43.111-43.111v-255.06V69.034V45.712c0-14.324-11.614-25.95-25.939-25.95
						c-7.174,0-13.655,2.906-18.35,7.601c-4.694,4.705-7.601,11.187-7.601,18.35v23.32"/>
					<g>
						<path style="fill:#3BA4BC;" d="M246.198,397.239v-255.06V69.034V45.712c0-7.163,2.906-13.644,7.601-18.35
							c2.847-2.847,6.356-5.031,10.274-6.313c-2.54-0.832-5.249-1.287-8.067-1.287c-7.174,0-13.655,2.907-18.349,7.601
							c-4.694,4.705-7.601,11.187-7.601,18.35v23.32v73.145v255.06c0,23.805-19.307,43.111-43.111,43.111h16.143
							C226.892,440.35,246.198,421.043,246.198,397.239z"/>
						<path style="fill:#3BA4BC;" d="M174.807,440.35h-16.143c-15.674,0-28.384,12.71-28.384,28.384v23.505h16.143v-23.505
							C146.423,453.06,159.133,440.35,174.807,440.35z"/>
					</g>
					<path style="fill:#4EBFED;" d="M213.631,90.9H43.226c-8.122,0-14.705,6.584-14.705,14.705l0,0c0,8.122,6.584,14.705,14.705,14.705
						h170.406h84.735h170.417c8.122,0,14.705-6.584,14.705-14.705l0,0c0-8.122-6.584-14.705-14.705-14.705H298.368"/>
					<path style="fill:#3BA4BC;" d="M468.784,112.423H298.368h-84.735H43.226c-6.754,0-12.429-4.558-14.154-10.762
						c-0.349,1.256-0.551,2.576-0.551,3.944c0,8.122,6.584,14.705,14.705,14.705h170.406h84.735h170.417
						c8.122,0,14.705-6.584,14.705-14.705c0-1.368-0.201-2.687-0.551-3.944C481.213,107.866,475.538,112.423,468.784,112.423z"/>
					<circle style="fill:#FCD577;" cx="255.995" cy="105.61" r="44.833"/>
					<circle style="fill:#3BA4BC;" cx="255.995" cy="105.61" r="15.499"/>
					<path style="fill:#FCD577;" d="M0,280.23c0,45.859,37.177,83.036,83.036,83.036s83.036-37.177,83.036-83.036H0z"/>
					<path style="fill:#EAC36E;" d="M24.505,280.23H0c0,45.859,37.177,83.036,83.036,83.036c4.163,0,8.253-0.315,12.252-0.907
						C55.241,356.435,24.505,321.926,24.505,280.23z"/>
					<path style="fill:#FCD577;" d="M345.929,280.23c0,45.859,37.177,83.036,83.036,83.036s83.036-37.177,83.036-83.036H345.929z"/>
					<path style="fill:#EAC36E;" d="M370.434,280.23h-24.505c0,45.859,37.177,83.036,83.036,83.036c4.163,0,8.253-0.315,12.252-0.907
						C401.168,356.435,370.434,321.926,370.434,280.23z"/>

					</svg>

					</div>
					<div class="col-md-4 col-sm-4 col-xs-4"></div>
					<!--
					<div class="col-md-4 col-sm-4 col-xs-4 method_buy" id="method_buy_pieces">
						<p><?php //echo lang('pieces'); ?></p>
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  width="150px" height="150px"  
							 viewBox="0 0 45.52 45.52" style="enable-background:new 0 0 45.52 45.52;" xml:space="preserve">
						<g>
							<path style="fill:#698B9E;" d="M45.028,13.98c0.574-0.619,0.322-1.683-0.45-2.027c-1.798-0.8-1.061-3.459-2.564-3.318
								c-1.724,0.161-2.99-1.104-2.828-2.828c0.161-1.724-1.104-2.99-2.828-2.828c-1.724,0.161-0.044-2.519-2.828-2.828
								c0,0-1.945-0.751-2.13,1.111L31.371,8.52H20.164c-11.038,0-19.986,8.948-19.986,19.986l0,17.014l16.876,0
								c11.114,0,20.124-9.01,20.124-20.124l0-11.159l7.244,0.067C44.678,14.264,44.875,14.144,45.028,13.98z"/>
							<path style="fill:#5D7989;" d="M21.951,39.899h-2c0-7.72-6.28-14-14-14v-2C14.773,23.899,21.951,31.076,21.951,39.899z"/>
							<path style="fill:#5D7989;" d="M25.206,36.644h-2c0-7.72-6.28-14-14-14v-2C18.028,20.644,25.206,27.822,25.206,36.644z"/>
							<path style="fill:#5D7989;" d="M28.315,33.534h-2c0-7.72-6.28-14-14-14v-2C21.137,17.534,28.315,24.712,28.315,33.534z"/>
							<path style="fill:#5D7989;" d="M31.57,30.28h-2c0-7.72-6.28-14-14-14v-2C24.392,14.28,31.57,21.457,31.57,30.28z"/>
							<path style="fill:#546A79;" d="M14.824,9.263c-0.394-1.98-1.211-4.133-2.77-6.285c0,0-8.224,4.078-4.851,10.331
								C9.388,11.444,11.978,10.052,14.824,9.263z"/>
							<path style="fill:#546A79;" d="M36.819,29.131c-0.605,3.221-1.979,6.164-3.922,8.647c2.863,0.326,7.064,0.045,11.238-2.98
								C44.135,34.798,41.335,29.151,36.819,29.131z"/>
							<circle style="fill:#38454F;" cx="5.951" cy="33.384" r="2"/>
						</g>

						</svg>
					</div>
					-->
					<!--
					<div class="col-md-4 col-sm-4 col-xs-4">
					</div>
					-->
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
						<div id="input_piece">00,000</div>
					</div>
					<!--
					<div class="col-md-4 col-sm-4 col-xs-4">
					</div>
					-->
				</div>
				
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 cal_btns">
				

	      			




					<div class="row" >
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number1" 
	        				class="btn btn-primary btn-block btn-lg">1</button>
	        			</div>
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button  id="number2" 
	        				class="btn btn-primary btn-block btn-lg">2</button>
	        			</div>
	        			<div class="col-4">
	        				<button id="number3"
	        				class="btn btn-primary btn-block btn-lg">3</button>
	        			</div>
	        		</div>
	        	
	        		<div class="row">
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number4"
	        				class="btn btn-primary btn-block btn-lg">4</button>
	        			</div>
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number5"
	        				class="btn btn-primary btn-block btn-lg">5</button>
	        			</div>
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number6"
	        				class="btn btn-primary btn-block btn-lg">6</button>
	        			</div>
	        		</div>
	        	
	        		<div class="row">
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number7"
	        				class="btn btn-primary btn-block btn-lg">7</button>
	        			</div>
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number8"
	        				class="btn btn-primary btn-block btn-lg">8</button>
	        			</div>
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number9"
	        				class="btn btn-primary btn-block btn-lg">9</button>
	        			</div>
	        		</div>
	        
	        		<div class="row">
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number_v"
	        				class="btn btn-primary btn-block btn-lg">,</button>
	        			</div>
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number0"
	        				class="btn btn-primary btn-block btn-lg">0</button>
	        			</div>
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="numberx"
	        				class="btn btn-primary btn-block btn-lg">&times;</button>
	        			</div>
	        		</div>
	        	
	      	





















			</div>
		</div>
		
	</div>
	<script type="text/javascript">
   
		//selected_buy_method = 'box';
		/*
		$('#select_dialog_box').click(function(){
					selected_buy_method = 'box';
					$('.method_buy').css('border', 'solid 5px transparent');
					$(this).css('border', 'solid 5px #d35400');
		});
		$('#method_buy_poids').click(function(){
					selected_buy_method = 'poids';
					$('.method_buy').css('border', 'solid 5px transparent');
					$(this).css('border', 'solid 5px #d35400');
		});
		$('#method_buy_pieces').click(function(){
					selected_buy_method = 'pieces';
					$('.method_buy').css('border', 'solid 5px transparent');
					$(this).css('border', 'solid 5px #d35400');
		});
		*/
	</script>
	<div id="myModal_delect_confirm" class="modal fade text-right" role="dialog">
	  <div class="modal-dialog modal-lg">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        
	      </div>
	      <div class="modal-body">
	        <p id="confirm_delete_message_lot"></p>
	      </div>
	      <div class="modal-footer">


			
		      	<div class="col-md-6 col-sm-6 col-xs-6">
		      			<button class="btn btn-danger btn-block btn-lg" onclick="delete_lot_func();">
				      		<?php echo lang('delete_operation'); ?>
				      		
				      	</button>
				      	<input type="hidden" name="" id="id_lot_to_delete">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
						 <button type="button" class="btn btn-secondary btn-block btn-lg" 
						 data-dismiss="modal">
					        <?php echo lang('Close'); ?>
					     </button>
				</div>
		


	      
	       
	      </div>
	    </div>

	  </div>
	</div>
		<!-- ************************************************************** -->
		<!-- *********************** Twitter Bootstrap modal 
			*************************************** -->

	<!-- ************************************ -->
	<!-- ***************
	Modal Update Lot
		********************* -->

	<div id="myModal_update_lot" class="modal fade" role="dialog">
	  <div class="modal-dialog text-right modal-lg">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        
	      </div>
	      <div class="modal-body">

	     <div class="row">
	    <div class="col-md-6 col-sm-6 col-xs-6">
	        <h4 id="update_title"></h4>
	        <p id="lot_description"></p>
	        <label id="new_qte_label"><?php echo lang('new_qte') ?></label>
	        <p><span id="new_qte"></span><span id="qte_type"><?php echo lang('kg') ?></span></p>

	    </div>
		<div class="col-md-6 col-sm-6 col-xs-6 cal_btns">
		     <div class="row" >
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number1" 
	        				class="btn btn-primary btn-block btn-lg">1</button>
	        			</div>
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button  id="number2" 
	        				class="btn btn-primary btn-block btn-lg">2</button>
	        			</div>
	        			<div class="col-4">
	        				<button id="number3"
	        				class="btn btn-primary btn-block btn-lg">3</button>
	        			</div>
	        		</div>
	        	
	        		<div class="row">
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number4"
	        				class="btn btn-primary btn-block btn-lg">4</button>
	        			</div>
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number5"
	        				class="btn btn-primary btn-block btn-lg">5</button>
	        			</div>
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number6"
	        				class="btn btn-primary btn-block btn-lg">6</button>
	        			</div>
	        		</div>
	        	
	        		<div class="row">
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number7"
	        				class="btn btn-primary btn-block btn-lg">7</button>
	        			</div>
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number8"
	        				class="btn btn-primary btn-block btn-lg">8</button>
	        			</div>
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number9"
	        				class="btn btn-primary btn-block btn-lg">9</button>
	        			</div>
	        		</div>
	        
	        		<div class="row">
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number_v"
	        				class="btn btn-primary btn-block btn-lg">,</button>
	        			</div>
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="number0"
	        				class="btn btn-primary btn-block btn-lg">0</button>
	        			</div>
	        			<div class="col-md-4 col-sm-4 col-xs-4">
	        				<button id="numberx"
	        				class="btn btn-primary btn-block btn-lg">&times;</button>
	        			</div>
	        		</div>
	        	
	      	</div>
	
	      </div>













	      </div>
	      <div class="modal-footer">
	        	<div class="col-md-6 col-sm-6 col-xs-6">
		      			<button class="btn btn-danger btn-block btn-lg" onclick="update_lot_func();">
				      		<?php echo lang('ok'); ?>
				      		
				      	</button>
				      	<input type="hidden" name="" id="id_lot_to_update">
				      	<input type="hidden" id="new_qte_to_update" name="">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
						 <button type="button" class="btn btn-secondary btn-block btn-lg" 
						 data-dismiss="modal">
					        <?php echo lang('Close'); ?>
					     </button>
				</div>
	      </div>
	    </div>

	  </div>
	</div>
	<!-- ************************************ -->
		<!-- ************************************************************** -->

		<script type="text/javascript">
			function confirm_delete_lot(num_lot,poids,espece_name){
				var message = '<?php echo lang('message_delete_lot'); ?>';
				message+= ' '+ espece_name + ' ';
				message += '<?php echo lang('message_delete_lot_phrase_2'); ?>';
				message+=' '+ poids +' '+'<?php echo lang('kg'); ?>';
				message += ' '+ '<?php echo lang('message_delete_lot_phrase_3'); ?>';
				$('#id_lot_to_delete').val(num_lot);
				$('#confirm_delete_message_lot').html(message);
				$('#myModal_delect_confirm').modal('show');
			}
			function delete_lot_func(){
				num_lot = $('#id_lot_to_delete').val();
				//alert(num_lot);
				var request = "Ajax/get_lot_data.php?id_vendeur="+id_vendeur+"&del_lot_id="+num_lot;
				xmlhttp2.onreadystatechange = function(){
		            if(xmlhttp2.readyState == 4 && xmlhttp2.status == 200){
		                document.getElementById('tbody_get_lot_date').innerHTML = xmlhttp2.responseText;
		            }
		        }
		        xmlhttp2.open('GET',request,true);
		        xmlhttp2.send();
		        $('#myModal_delect_confirm').modal('hide');
		        
			}
			function ajax_func_lot(){

				Qte = $("#dialog #input_piece").html();
				seller_selected = $('#seller_has_selected').html();
				var add = false;
				var request = "Ajax/get_lot_data.php?id_vendeur="+id_vendeur;
				if(id_vendeur !=  '0' && code_espece != '0' &&  Qte != '0'){
					var request = "Ajax/get_lot_data.php?add_lot=yes&id_vendeur="+id_vendeur+"&code_espece="+code_espece+"&qte="+Qte+"&seller="+seller_selected+"&espece="+espece;
					add=true;
				}
				console.log(espece);
				console.log(request);
		        xmlhttp2 = new XMLHttpRequest();
		        xmlhttp2.onreadystatechange = function(){
		            if(xmlhttp2.readyState == 4 && xmlhttp2.status == 200){
		                document.getElementById('tbody_get_lot_date').innerHTML = xmlhttp2.responseText;
		                if(add == true){
		                	var link = $('#link_to_imprim').val();
		                	console.log('link : ajax_func-lot() : ');
		                	console.log(link);
							document.location.href=link;
		                }
		         
		            }
		        }
		        xmlhttp2.open('GET',request,true);
		        xmlhttp2.send();
		        }
		    function ajax_func_lot_imprim_all(){

				Qte = $("#dialog #input_piece").html();
				seller_selected = $('#seller_has_selected').html();
				var request = "Ajax/get_lot_data.php?imprime_tout=yes&id_vendeur="+id_vendeur+"&code_espece="+code_espece+"&qte="+Qte+"&seller="+seller_selected;
				

				console.log(request);
		        //xmlhttp2 = new XMLHttpRequest();
		        xmlhttp2.onreadystatechange = function(){
		            if(xmlhttp2.readyState == 4 && xmlhttp2.status == 200){
		                document.getElementById('tbody_get_lot_date').innerHTML = xmlhttp2.responseText;
		               
		                var link = $('#link_to_imprim_all').val();
		                console.log('link : ajax_func-lot() : ');
		                console.log(link);
						document.location.href=link;
		             
		         
		            }
		        }
		        xmlhttp2.open('GET',request,true);
		        xmlhttp2.send();
		        }
			function ajax_func_vendeur(){
		        xmlhttp = new XMLHttpRequest();
		        xmlhttp.onreadystatechange = function(){
		            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
		                document.getElementById('get_data_vendeurs').innerHTML = xmlhttp.responseText;
		                slider();
		                click_slide();
		            }
		        }
		        xmlhttp.open('GET','Ajax/get_vendeurs.php',true);
		        xmlhttp.send();
		    }
		    function search_sellers_func(){
		    	//xmlhttp = new XMLHttpRequest();
		    	var searched_value = $('#searched_value').val();

		    	var request = 'Ajax/get_vendeurs.php?searched_value='+searched_value;
		    	if(family_part == true){
		    		request = 'Ajax/get_vendeurs.php?get_families=yes&id_family='+searched_value;
		    	}
		    	
		    	//***********************************
		        xmlhttp.onreadystatechange = function(){
		            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
		                document.getElementById('get_data_vendeurs').innerHTML = xmlhttp.responseText;
		                slider();
		                click_slide();
		                //slideIndex = 1;
						//end_slide_index = 2;
						$('#searched_value').val('');
		            }
		        }
		        xmlhttp.open('GET',request,true);
		        xmlhttp.send();
		    }
		    family_part = false;
		    espece_part=false;
		    function search_especes_func(){

		    	var searched_value = $('#searched_value_espece').val();
		      	request = 'Ajax/get_vendeurs.php?get_espece=yes&searched_value_espece='+searched_value;

		        xmlhttp3.onreadystatechange = function(){
		            if(xmlhttp3.readyState == 4 && xmlhttp3.status == 200){
		                document.getElementById('get_data_espece').innerHTML = xmlhttp3.responseText;
		                //console.log('before : '+end_slide_index);
		                slider_espece();
		                //console.log('after : '+end_slide_index);
		               
		                click_slide_e();

			        }
			    }
		        xmlhttp3.open('GET',request,true);
		        xmlhttp3.send();
		    }
		    function update_func_lot(num_lot,poids,espece,family){
		    	//alert(num_lot);
		    	console.log("update_func lot");
		    	console.log(poids);
		    	console.log(espece);
		    	console.log(family);
		    	var update_title = '<?php echo lang('update_title_para1'); ?>'+num_lot;
		    	$('#update_title').html(update_title);
		    	lot_description = '<?php echo lang('fish_type'); ?>'+" "+family;
		    	lot_description+= " "+'<?php echo lang('the_type'); ?>'+' '+espece;
		    	$('#lot_description').html(lot_description);
		    	$('#new_qte').html(poids);
		    	$('#myModal_update_lot').modal('show');
		    }
		    function ajax_func_espece(){
		        xmlhttp3 = new XMLHttpRequest();
		        //if(id_vendeur != '0'){
		        
		        /*
		        var request = 'Ajax/get_vendeurs.php?get_families=yes';
		        if(family_part == false){
		        	 family_part=true;
			        $('#searched_value').attr("placeholder", "<?php  //echo lang('search_exemple_family_here');?>");
			        $('#option_licence_group').html("<?php // echo lang('option_gr_family');?>");
			        //var searched_value = $('#searched_value').val();
			        
		        }else if(id_family != '0'){
		        	espece_part=true;
		        	 $('#searched_value').attr("placeholder", "<?php // echo lang('search_exemple_espece');?>");
		        	request = 'Ajax/get_vendeurs.php?get_espece=yes&id_family='+id_family;
		        }
		       
		        if(id_vendeur != '0')
		        */
		        //var request = 'Ajax/get_vendeurs.php?get_families=yes&id_family='+searched_value;
		      
		      	request = 'Ajax/get_vendeurs.php?get_espece=yes';

		        xmlhttp3.onreadystatechange = function(){
		            if(xmlhttp3.readyState == 4 && xmlhttp3.status == 200){
		                document.getElementById('get_data_espece').innerHTML = xmlhttp3.responseText;
		                console.log('before : '+end_slide_index);
		                slider_espece();
		                console.log('after : '+end_slide_index);
		                /*
		                if(espece_part == false){
		                	click_slide_f();
		                }else if(espece_part == true){
		                	
		                }
		                */
		                click_slide_e();

		          //  }
		        }
		    }
		        xmlhttp3.open('GET',request,true);
		        xmlhttp3.send();
		       // }
		     
		    }
			 window.onload = function(){
			 	ajax_func_vendeur();
			 
			 	ajax_func_espece();
			 }
			
			slideIndex = 0;
			end_slide_index = 11;
			slideIndex_e = 0;
			end_slide_index_e = 11;
			function slider(){
				//slideIndex = 0;
				//end_slide_index = 11;
				showDivs(slideIndex);

			
			}
			function slider_espece(){
				//slideIndex_e = 0;
				//end_slide_index_e = 11;
				showDivs_espece(slideIndex_e);

			
			}
			//mySlides_espece
			//mySlides_f
			function plusDivs(n) {
					//end_slide_index=slideIndex+11;
					console.log('slideindex plus div before'+slideIndex);
					/*if(n==-1 && slideIndex>11) slideIndex = slideIndex - 11;
					else */
					slideIndex += 11;
					console.log('n : ' +n);
					
					//end_slide_index=slideIndex+11;
				    showDivs(slideIndex);
				   
				}
			function plusDivs_espece(n) {
					//end_slide_index_e=slideIndex_e+11;
				    //showDivs_espece(slideIndex_e += n + end_slide_index_e);
				    slideIndex_e+=11;
				    showDivs_espece(slideIndex_e);
				   
				}
			function change_title_to_family(){
				if(id_vendeur != '0'){
				
				if(espece_part == true){
				$('#h1_choose_title').html('<?php echo lang("h1_choose_espece"); ?>');	
				}else{
				$('#h1_choose_title').html('<?php echo lang("h1_choose_family"); ?>');
				}
				}
			}
			function showDivs(n) {
				    var i;
				    var x = document.getElementsByClassName("mySlides");
				    //slideIndex = n;
				    console.log('n show divs : '+n);
				    console.log('end slide show divs before : '+end_slide_index);
				    console.log('slide : '+slideIndex);
				    if ((end_slide_index+11) > x.length && (end_slide_index!=x.length-1)) {
				    	//slideIndex = slideIndex - 11;
				    	end_slide_index=x.length-1;
				    	console.log('here');
				    } else if(end_slide_index==x.length-1){
				    	slideIndex=0;
				    	end_slide_index=11;
				    } 

				    else if (n < 0) 
				    {
				    	slideIndex = x.length;
				    	end_slide_index=slideIndex+11;
					}
				     else{
				    	end_slide_index=slideIndex+11;
				    }
				 
					
					console.log('slideindex :'+slideIndex);
					console.log('end :'+end_slide_index);

				    for (i = 0; i < x.length; i++) {
				    	if(!(i>= slideIndex && i<= end_slide_index))
				    	x[i].style.display = "none";
				    	else 
				    	x[i].style.display = "block";	
				    }
				    /*console.log(x.length);
				    x[slideIndex-1].style.display = "block"; 
				    if (n > 2){
				    	x[slideIndex].style.display = "block";
				    	x[slideIndex+1].style.display = "block";
				    }else if(n==2){
				    	x[slideIndex].style.display = "block";
				  	}*/
				    }
				function showDivs_espece(n) {
				    var i;
				    var x = document.getElementsByClassName("mySlides_espece");




 					if ((end_slide_index_e+11) > x.length && (end_slide_index_e!=x.length-1)) {
 						end_slide_index_e=x.length-1;
 					 } else if(end_slide_index_e==x.length-1){
				    	slideIndex_e=0;
				    	end_slide_index_e=11;
				    } 

				     else if (n < 0) 
				    {
				    	slideIndex_e = x.length;
				    	end_slide_index_e=slideIndex_e+11;
					}
				     else{
				    	end_slide_index_e=slideIndex_e+11;
				    }

				     for (i = 0; i < x.length; i++) {
				    	if(!(i>= slideIndex_e && i<= end_slide_index_e))
				    	x[i].style.display = "none";
				    	else 
				    	x[i].style.display = "block";	
				    }
					/*
				    if (n > x.length) {slideIndex_e = 0} 
				    
				    if (n < 0) {slideIndex_e = x.length} ;
					end_slide_index_e=slideIndex_e+11;
				    for (i = 0; i < x.length; i++) {
				    	if(!(i>= slideIndex_e && i<= end_slide_index_e))
				    	x[i].style.display = "none";
				    	else 
				    	x[i].style.display = "block";	
				    }
				    /*console.log(x.length);
				    x[slideIndex-1].style.display = "block"; 
				    if (n > 2){
				    	x[slideIndex].style.display = "block";
				    	x[slideIndex+1].style.display = "block";
				    }else if(n==2){
				    	x[slideIndex].style.display = "block";
				  	}*/
				    }
				function click_slide(){
					$('.mySlides').click(function(){
					id_vendeur = $(this).find('.id_seller').html();
					vendeur_selected = $(this).html();
					$('.mySlides').css('border', 'solid 5px #fff');
					$(this).css('border', 'solid 5px #d35400');
					
					$('#seller_selected').html(vendeur_selected);
					$('#seller_selected_d').html(vendeur_selected);
					ajax_func_lot();
					$('#search_vendeur').hide();
					$('#input_poids').show();
					//***************
					//ajax_func_family();
					//change_title_to_family();
					//$('#searched_value').attr("placeholder","<?php //echo lang('search_exemple_espece');?>");
					//$('#option_licence_group').html("<?php //echo lang('option_gr_family');?>");
					//espece_part=true;
					//******************

					//alert(id);
					});
				}
				function select_another_seller(){
					id_vendeur = '0';
					id_family = '0';
					code_espece = '0';
					Qte = '0';
					ajax_func_vendeur();
					$('#input_poids').hide();
					$('#search_vendeur').show();
				}
				function click_slide_f(){
					$('.mySlides').click(function(){
					id_family = $(this).find('.id_family').html();
					$('.mySlides').css('border', 'solid 5px #fff');
					$(this).css('border', 'solid 5px #d35400');
					//alert(id);
					});
				}
				function click_slide_e(){
					$('.mySlides_espece').click(function(){
					code_espece = $(this).find('.Code_espece').html();
					espece = $(this).find('.titre_espece').html();
					$('.mySlides_espece').css('border', 'solid 5px #fff');
					$(this).css('border', 'solid 5px #d35400');
					$('#the_type_fish_selected').html(espece);
					$("#dialog #input_piece").html('00.000');
					$('#dialog').dialog('open');

					//alert(code_espece);
					});
				}

			id_vendeur = '0';
			id_family = '0';
			code_espece = '0';
			Qte = '0';
			espece = '0';
			//***************************************
			/*
			function Afficher_txt_lot(num_lot){
				//alert(id_facture);
				xmlhttp_txt = new XMLHttpRequest();
				var request = 'Ajax/ajax_txt_lot.php?num_lot='+num_lot;
				console.log(request);
				xmlhttp_txt.open('GET',request, true);
				console.log("func afficher txt lot");
				xmlhttp_txt.onreadystatechange = function (){
							if(xmlhttp_txt.readyState == 4 && xmlhttp_txt.status == 200){
								var filename = xmlhttp_txt.responseText;
								document.location.href=filename;
								console.log("response text afficher txt lot");
								console.log(xmlhttp_txt.responseText);
							}
						} 
				xmlhttp_txt.send();
			}
			*/

			//**************************************
		</script>
		<?php
		include $tpl ."footer.php";
	