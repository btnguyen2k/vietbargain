<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\modules\home\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>"/>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<?php $this->beginBody() ?>
	<div class="container-fluid">

		<!-- Slider -->
		<div class="tp-banner-container">
			<div class="tp-banner" >
				<ul>
					<!-- SLIDE  -->
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
						<!-- MAIN IMAGE -->
						<img src="/home/images/slide.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
						<!-- LAYERS -->
					</li>
				</ul>
			</div>
		</div>
		<!-- //Slider -->

		<div class="headernav">
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-xs-3 col-sm-2 col-md-2 logo "><a href="index.html"><img src="images/logo.jpg" alt=""  /></a></div>
					<div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
						<div class="dropdown">
							<a data-toggle="dropdown" href="#" >Borderlands 2</a> <b class="caret"></b>
							<ul class="dropdown-menu" role="menu">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Borderlands 1</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-2" href="#">Borderlands 2</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-3" href="#">Borderlands 3</a></li>

							</ul>
						</div>
					</div>
					<div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
						<div class="wrap">
							<form action="#" method="post" class="form">
								<div class="pull-left txt"><input type="text" class="form-control" placeholder="Search Topics"></div>
								<div class="pull-right"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
						<div class="stnt pull-left">
							<form action="<?= Url::to(['/topic/new']) ?>" method="post" class="form">
								<button class="btn btn-primary">Start New Topic</button>
							</form>
						</div>
						<div class="env pull-left"><i class="fa fa-envelope"></i></div>

						<div class="avatar pull-left dropdown">
							<a data-toggle="dropdown" href="#"><img src="home/images/avatar.jpg" alt="" /></a> <b class="caret"></b>
							<div class="status green">&nbsp;</div>
							<?php
								echo Nav::widget([
									'options' => ['class' => 'dropdown-menu', 'role' => 'menu'],
									'items' => (!Yii::$app->user->isGuest)
										? [
											['label' => 'My Profile', 'url' => ['/site/index'], 'options' => ['role' => 'menuitem', 'tabindex' => '-1'], 'linkOptions' => ['role' => 'menuitem']],
											['label' => 'Inbox', 'url' => ['/site/about'], 'options' => ['role' => 'menuitem', 'tabindex' => '-2'], 'linkOptions' => ['role' => 'menuitem']],
											['label' => 'Logout (' . Yii::$app->user->identity->first_name . ')', 'url' => ['/auth/logout'], 'linkOptions' => ['data-method' => 'post'], 'options' => ['role' => 'menuitem', 'tabindex' => '-3'], 'linkOptions' => ['role' => 'menuitem']],
										]
										: [
											['label' => 'Login', 'url' => ['/auth/login']],
											['label' => 'Create account', 'url' => ['/auth/register']],
										]
									,
								]);
							?>
						</div>

						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>

		<section class="content">
			<div class="container">
				<div class="row">
				<?php if (($this->context->id == 'home') && ($this->context->action->id == 'index')): ?>
					<div class="col-lg-8 col-xs-12 col-md-8">
						<div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
						<div class="pull-left">
							<ul class="paginationforum">
								<li class="hidden-xs"><a href="#">1</a></li>
								<li class="hidden-xs"><a href="#">2</a></li>
								<li class="hidden-xs"><a href="#">3</a></li>
								<li class="hidden-xs"><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">6</a></li>
								<li><a href="#" class="active">7</a></li>
								<li><a href="#">8</a></li>
								<li class="hidden-xs"><a href="#">9</a></li>
								<li class="hidden-xs"><a href="#">10</a></li>
								<li class="hidden-xs hidden-md"><a href="#">11</a></li>
								<li class="hidden-xs hidden-md"><a href="#">12</a></li>
								<li class="hidden-xs hidden-sm hidden-md"><a href="#">13</a></li>
								<li><a href="#">1586</a></li>
							</ul>
						</div>
						<div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
						<div class="clearfix"></div>
					</div>
				<?php else: ?>
					<!-- Breadcrumb -->
					<div class="col-lg-8 breadcrumbf">
						<a href="javascript:void(0)">Create New account</a>
					</div>
				<?php endif; ?>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<?= $content ?>
					</div>
					<div class="col-lg-4 col-md-4">

						<!-- -->
						<div class="sidebarblock">
							<h3>Categories</h3>
							<div class="divline"></div>
							<div class="blocktxt">
								<ul class="cats">
									<li><a href="#">Trading for Money <span class="badge pull-right">20</span></a></li>
									<li><a href="#">Vault Keys Giveway <span class="badge pull-right">10</span></a></li>
									<li><a href="#">Misc Guns Locations <span class="badge pull-right">50</span></a></li>
									<li><a href="#">Looking for Players <span class="badge pull-right">36</span></a></li>
									<li><a href="#">Stupid Bugs &amp; Solves <span class="badge pull-right">41</span></a></li>
									<li><a href="#">Video &amp; Audio Drivers <span class="badge pull-right">11</span></a></li>
									<li><a href="#">2K Official Forums <span class="badge pull-right">5</span></a></li>
								</ul>
							</div>
						</div>

						<!-- -->
						<div class="sidebarblock">
							<h3>Poll of the Week</h3>
							<div class="divline"></div>
							<div class="blocktxt">
								<p>Which game you are playing this week?</p>
								<form action="#" method="post" class="form">
									<table class="poll">
										<tr>
											<td>
												<div class="progress">
													<div class="progress-bar color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
														Call of Duty Ghosts
													</div>
												</div>
											</td>
											<td class="chbox">
												<input id="opt1" type="radio" name="opt" value="1">
												<label for="opt1"></label>
											</td>
										</tr>
										<tr>
											<td>
												<div class="progress">
													<div class="progress-bar color2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 63%">
														Titanfall
													</div>
												</div>
											</td>
											<td class="chbox">
												<input id="opt2" type="radio" name="opt" value="2" checked>
												<label for="opt2"></label>
											</td>
										</tr>
										<tr>
											<td>
												<div class="progress">
													<div class="progress-bar color3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
														Battlefield 4
													</div>
												</div>
											</td>
											<td class="chbox">
												<input id="opt3" type="radio" name="opt" value="3">
												<label for="opt3"></label>
											</td>
										</tr>
									</table>
								</form>
								<p class="smal">Voting ends on 19th of October</p>
							</div>
						</div>

						<!-- -->
						<div class="sidebarblock">
							<h3>My Active Threads</h3>
							<div class="divline"></div>
							<div class="blocktxt">
								<a href="#">This Dock Turns Your iPhone Into a Bedside Lamp</a>
							</div>
							<div class="divline"></div>
							<div class="blocktxt">
								<a href="#">Who Wins in the Battle for Power on the Internet?</a>
							</div>
							<div class="divline"></div>
							<div class="blocktxt">
								<a href="#">Sony QX10: A Funky, Overpriced Lens Camera for Your Smartphone</a>
							</div>
							<div class="divline"></div>
							<div class="blocktxt">
								<a href="#">FedEx Simplifies Shipping for Small Businesses</a>
							</div>
							<div class="divline"></div>
							<div class="blocktxt">
								<a href="#">Loud and Brave: Saudi Women Set to Protest Driving Ban</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-1 col-xs-3 col-sm-2 logo "><a href="#"><img src="images/logo.jpg" alt=""  /></a></div>
					<div class="col-lg-8 col-xs-9 col-sm-5 ">Copyrights 2014, websitename.com</div>
					<div class="col-lg-3 col-xs-12 col-sm-5 sociconcent">
						<ul class="socialicons">
							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-cloud"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
