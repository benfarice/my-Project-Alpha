<?php
	/*************
	
	//print_r($_SESSION);
	if(isset($_SESSION['username'])){
    ***********************/
		session_start();
		if(!isset($_SESSION['username'])){
	
		//echo "You Are not Authorized To view this page";
		header('Location: index.php');
		exit();
		}
		$lang = 'includes/languages/';
		include_once $lang.$_SESSION['Lang'].'.php';
		//include_once $lang.'arabic.php';
		$pagetitle =  lang('Dashboard');
		
		include 'init.php';

		
		?>
		<div class="container-fluid">
			<h2 class="text-center">مرحبا <span><?php echo $_SESSION['username'] ; ?></span></h2>
			<div class="row outer-background">
				<div class="col-md-2 col-sm-2 col-xs-2"></div>
				<div class="col-md-8 col-sm-8 col-xs-8">
					<div class="row inner-background initial-menu">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h2 class="text-center"><?php echo lang('initial_menu');?></h2>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<a href="Definition_fish.php">
							<button class="btn btn-primary btn-block btn-lg">
								<?php echo lang('intro_fish');?>
							</button>
							</a>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<button class="btn btn-primary btn-block btn-lg">
								<?php echo lang('sell_fish');?>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2"></div>
				
			</div>
		</div>
		<?php

		include $tpl ."footer.php";
	/*************************
	}else{
		//echo "You Are not Authorized To view this page";
		header('Location: index.php');
		exit();
	}
	*******************************/