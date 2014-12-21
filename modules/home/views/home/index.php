<?php
/* @var $this yii\web\View */
?>

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8">
		<?php foreach ($dataProvider->getModels() as $post): ?>
			<!-- POST -->
			<div class="post">
				<div class="wrap-ut pull-left">
					<div class="userinfo pull-left">
						<div class="avatar">
							<img src="<?= Yii::$app->params['imageUrl'] . 'post/' . (($post->image) ? $post->image : Yii::$app->params['postNoImage']) ?>" alt="" />
							<div class="status green">&nbsp;</div>
						</div>

						<div class="icons">
							<img src="home/images/icon1.jpg" alt="" /><img src="home/images/icon4.jpg" alt="" />
						</div>
					</div>
					<div class="posttext pull-left">
						<h2><a href="02_topic.html"><?= $post->title ?></a></h2>
						<p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your prerogative.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="postinfo pull-left">
					<div class="comments">
						<div class="commentbg">
							560
							<div class="mark"></div>
						</div>

					</div>
					<div class="views"><i class="fa fa-eye"></i> 1,568</div>
					<div class="time"><i class="fa fa-clock-o"></i> 24 min</div>
				</div>
				<div class="clearfix"></div>
			</div><!-- POST -->
		<?php endforeach; ?>

			<!-- POST -->
			<div class="post">
				<div class="wrap-ut pull-left">
					<div class="userinfo pull-left">
						<div class="avatar">
							<img src="home/images/avatar2.jpg" alt="" />
							<div class="status red">&nbsp;</div>
						</div>

						<div class="icons">
							<img src="home/images/icon3.jpg" alt="" /><img src="home/images/icon4.jpg" alt="" /><img src="home/images/icon5.jpg" alt="" /><img src="home/images/icon6.jpg" alt="" />
						</div>
					</div>
					<div class="posttext pull-left">
						<h2><a href="02_topic.html">What Instagram Ads Will Look Like</a></h2>
						<p>Instagram offered a first glimpse at what its ads will look like in a blog post Thursday. The sample ad, which you can see below.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="postinfo pull-left">
					<div class="comments">
						<div class="commentbg">
							89
							<div class="mark"></div>
						</div>

					</div>
					<div class="views"><i class="fa fa-eye"></i> 1,568</div>
					<div class="time"><i class="fa fa-clock-o"></i> 15 min</div>
				</div>
				<div class="clearfix"></div>
			</div><!-- POST -->


			<!-- POST -->
			<div class="post">
				<div class="wrap-ut pull-left">
					<div class="userinfo pull-left">
						<div class="avatar">
							<img src="home/images/avatar3.jpg" alt="" />
							<div class="status red">&nbsp;</div>
						</div>

						<div class="icons">
							<img src="home/images/icon2.jpg" alt="" /><img src="home/images/icon4.jpg" alt="" />
						</div>
					</div>
					<div class="posttext pull-left">
						<h2><a href="02_topic.html">The Future of Magazines Is on Tablets</a></h2>
						<p>Eric Schmidt has seen the future of magazines, and it's on the tablet. At a Magazine Publishers Association.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="postinfo pull-left">
					<div class="comments">
						<div class="commentbg">
							456
							<div class="mark"></div>
						</div>

					</div>
					<div class="views"><i class="fa fa-eye"></i> 1,568</div>
					<div class="time"><i class="fa fa-clock-o"></i> 2 days</div>
				</div>
				<div class="clearfix"></div>
			</div><!-- POST -->


			<!-- POST -->
			<div class="post">
				<div class="wrap-ut pull-left">
					<div class="userinfo pull-left">
						<div class="avatar">
							<img src="home/images/avatar4.jpg" alt="" />
							<div class="status yellow">&nbsp;</div>
						</div>

						<div class="icons">
							<img src="home/images/icon1.jpg" alt="" /><img src="home/images/icon4.jpg" alt="" /><img src="home/images/icon6.jpg" alt="" />
						</div>
					</div>
					<div class="posttext pull-left">
						<h2><a href="02_topic.html">Pinterest Now Worth $3.8 Billion</a></h2>
						<p>Pinterest's valuation is closing in on $4 billion after its latest funding round of $225 million, according to a report.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="postinfo pull-left">
					<div class="comments">
						<div class="commentbg">
							78
							<div class="mark"></div>
						</div>

					</div>
					<div class="views"><i class="fa fa-eye"></i> 1,568</div>
					<div class="time"><i class="fa fa-clock-o"></i> 24 min</div>
				</div>
				<div class="clearfix"></div>
			</div><!-- POST -->



			<!-- POST -->
			<div class="post">
				<div class="wrap-ut pull-left">
					<div class="userinfo pull-left">
						<div class="avatar">
							<img src="home/images/avatar.jpg" alt="" />
							<div class="status green">&nbsp;</div>
						</div>

						<div class="icons">
							<img src="home/images/icon1.jpg" alt="" /><img src="home/images/icon4.jpg" alt="" />
						</div>
					</div>
					<div class="posttext pull-left">
						<h2><a href="02_topic.html">10 Kids Unaware of Their Halloween Costume</a></h2>
						<p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your prerogative.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="postinfo pull-left">
					<div class="comments">
						<div class="commentbg">
							560
							<div class="mark"></div>
						</div>

					</div>
					<div class="views"><i class="fa fa-eye"></i> 1,568</div>
					<div class="time"><i class="fa fa-clock-o"></i> 24 min</div>
				</div>
				<div class="clearfix"></div>
			</div><!-- POST -->


			<!-- POST -->
			<div class="post">
				<div class="wrap-ut pull-left">
					<div class="userinfo pull-left">
						<div class="avatar">
							<img src="home/images/avatar2.jpg" alt="" />
							<div class="status red">&nbsp;</div>
						</div>

						<div class="icons">
							<img src="home/images/icon3.jpg" alt="" /><img src="home/images/icon4.jpg" alt="" /><img src="home/images/icon5.jpg" alt="" /><img src="home/images/icon6.jpg" alt="" />
						</div>
					</div>
					<div class="posttext pull-left">
						<h2><a href="02_topic.html">What Instagram Ads Will Look Like</a></h2>
						<p>Instagram offered a first glimpse at what its ads will look like in a blog post Thursday. The sample ad, which you can see below.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="postinfo pull-left">
					<div class="comments">
						<div class="commentbg">
							89
							<div class="mark"></div>
						</div>

					</div>
					<div class="views"><i class="fa fa-eye"></i> 1,568</div>
					<div class="time"><i class="fa fa-clock-o"></i> 15 min</div>
				</div>
				<div class="clearfix"></div>
			</div><!-- POST -->


			<!-- POST -->
			<div class="post">
				<div class="wrap-ut pull-left">
					<div class="userinfo pull-left">
						<div class="avatar">
							<img src="home/images/avatar3.jpg" alt="" />
							<div class="status red">&nbsp;</div>
						</div>

						<div class="icons">
							<img src="home/images/icon2.jpg" alt="" /><img src="home/images/icon4.jpg" alt="" />
						</div>
					</div>
					<div class="posttext pull-left">
						<h2><a href="02_topic.html">The Future of Magazines Is on Tablets</a></h2>
						<p>Eric Schmidt has seen the future of magazines, and it's on the tablet. At a Magazine Publishers Association.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="postinfo pull-left">
					<div class="comments">
						<div class="commentbg">
							456
							<div class="mark"></div>
						</div>

					</div>
					<div class="views"><i class="fa fa-eye"></i> 1,568</div>
					<div class="time"><i class="fa fa-clock-o"></i> 2 days</div>
				</div>
				<div class="clearfix"></div>
			</div><!-- POST -->
