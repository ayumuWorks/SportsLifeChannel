<?php

	include 'header.php';

?>

	<script>
		$(function(){
			var channelWidth = $('.uk-scrollspy-init-inview').width();
			$(".uk-scrollspy-init-inview").css("height",channelWidth + "px");
			$(".text").css("height",channelWidth + "px");
			$(".text").css("width",channelWidth + "px");
			

			$(".channelBtn").turnBox({
				  width: $('.uk-scrollspy-init-inview').width(),
				  height: $('.uk-scrollspy-init-inview').width(),
				  axis: "Y",
				  perspective: 800,
				  duration: 200,
				  delay: 0,
				  easing: "linear",
				  direction: "positive",
				  type: "repeat"
				});	

			$(".example").turnBox();

			window.onresize = window_load;

			function window_load() {
				channelWidth = $('.uk-scrollspy-init-inview').width();
				$(".uk-scrollspy-init-inview").css("height",channelWidth + "px");
				$(".text").css("height",channelWidth + "px");
				$(".text").css("width",channelWidth + "px");
		
				$(".channelBtn").turnBox({
				  width: $('.uk-scrollspy-init-inview').width(),
				  height: $('.uk-scrollspy-init-inview').width(),
				  axis: "Y",
				  perspective: 800,
				  duration: 200,
				  delay: 0,
				  easing: "linear",
				  direction: "positive",
				  type: "repeat"
				});	
			}

			
		});

	</script>

	<div id="channel-01" class="uk-container uk-container-center">
		<h2 class="white-panel tit">スポーツライフチャンネル</h2>
	</div>

	<div id="channel-02">
		<div class="uk-container uk-container-center">
			<div class="uk-grid uk-grid-width-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 clear" data-uk-grid-margin>
				<div class="uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="channelBtn">
						<section class="channel-panel-01 turnBoxButton turnBoxButtonEventMouseover">
							<a href="channel01.php">
								<p class="text">1 夢の対談</p>
							</a>
						</section>
						<section class="channel-panel-02 turnBoxButton turnBoxButtonPrev turnBoxButtonEventMouseout">
							<a href="channel01.php">
								<p class="text">スポーツの枠を超えた普段は会うことのない二人の対談</p>
							</a>
						</section>
					</div>
				</div>
				<div class="uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="channelBtn">
						<section class="channel-panel-01 turnBoxButton turnBoxButtonEventMouseover">
							<a href="channel01.php">
								<p class="text">2 インタビュー</p>
							</a>
						</section>
						<section class="channel-panel-02 turnBoxButton turnBoxButtonPrev turnBoxButtonEventMouseout">
							<a href="channel01.php">
								<p class="text">1 夢の対談</p>
							</a>
						</section>
					</div>
				</div>
				<div class="uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="channelBtn">
						<section class="channel-panel-01 turnBoxButton turnBoxButtonEventMouseover">
							<a href="channel01.php">
								<p class="text">3 元アスリート</p>
							</a>
						</section>
						<section class="channel-panel-02 turnBoxButton turnBoxButtonPrev turnBoxButtonEventMouseout">
							<a href="channel01.php">
								<p class="text">1 夢の対談</p>
							</a>
						</section>
					</div>
				</div>
				<div class="uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="channelBtn">
						<section class="channel-panel-01 turnBoxButton turnBoxButtonEventMouseover">
							<a href="channel01.php">
								<p class="text">4 スポンサー企画</p>
							</a>
						</section>
						<section class="channel-panel-02 turnBoxButton turnBoxButtonPrev turnBoxButtonEventMouseout">
							<a href="channel01.php">
								<p class="text">1 夢の対談</p>
							</a>
						</section>
					</div>
				</div>
				<div class="uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="channelBtn">
						<section class="channel-panel-01 turnBoxButton turnBoxButtonEventMouseover">
							<a href="channel01.php">
								<p class="text">5 女子会</p>
							</a>
						</section>
						<section class="channel-panel-02 turnBoxButton turnBoxButtonPrev turnBoxButtonEventMouseout">
							<a href="channel01.php">
								<p class="text">1 夢の対談</p>
							</a>
						</section>
					</div>
				</div>
				<div class="uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="channelBtn">
						<section class="channel-panel-01 turnBoxButton turnBoxButtonEventMouseover">
							<a href="channel01.php">
								<p class="text">6 スポンサー職</p>
							</a>
						</section>
						<section class="channel-panel-02 turnBoxButton turnBoxButtonPrev turnBoxButtonEventMouseout">
							<a href="channel01.php">
								<p class="text">1 夢の対談</p>
							</a>
						</section>
					</div>
				</div>
				<div class="uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="channelBtn">
						<section class="channel-panel-01 turnBoxButton turnBoxButtonEventMouseover">
							<a href="channel01.php">
								<p class="text">7 監督・コーチ</p>
							</a>
						</section>
						<section class="channel-panel-02 turnBoxButton turnBoxButtonPrev turnBoxButtonEventMouseout">
							<a href="channel01.php">
								<p class="text">1 夢の対談</p>
							</a>
						</section>
					</div>
				</div>
				<div class="uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="channelBtn">
						<section class="channel-panel-01 turnBoxButton turnBoxButtonEventMouseover">
							<a href="channel01.php">
								<p class="text">8 スポーツ <br> × <br> ◯ ◯</p>
							</a>
						</section>
						<section class="channel-panel-02 turnBoxButton turnBoxButtonPrev turnBoxButtonEventMouseout">
							<a href="channel01.php">
								<p class="text">1 夢の対談</p>
							</a>
						</section>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!--
	<div id="channel01-01" class="uk-container uk-container-center">
		<h2 class="white-panel tit">スポーツライフチャンネルとは</h2>
	</div>

	<div id="channel01-02">
		<div class="uk-grid uk-grid-width-1-3">
			<section><h2>スポーツライフチャンネルとは</h2></section>
			<section><h2>スポーツをする人</h2></section>
			<section><h2>スポーツを支える人</h2></section>
		</div>
	</div>

	<div id="channel01-03">
		<h3 class="white-panel">夢の対談チャンネル</h3>
		<div class="uk-container uk-container-center">
			<div class="uk-grid uk-grid-width-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-3 clear" data-uk-grid-margin>
				<section class="uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="img">
						<a href="profile-01.php">
							<img src="images/home/01_02.png">	
							<div class="name">
								<p>立命館大学</p>
								<h2>津田 歩武</h2>
							</div>
						</a>
					</div>
				</section>
				<section class="uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<a href="profile-01.php">
						<img src="images/home/01_02.png">	
						<div class="name">
							<p>立命館大学</p>
							<h2>津田 歩武</h2>
						</div>
					</a>
				</section>
				<section class="uk-hidden-small uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<a href="profile-01.php">
						<img src="images/home/01_02.png">	
						<div class="name">
							<p>立命館大学</p>
							<h2>津田 歩武</h2>
						</div>
					</a>
				</section>
			</div>
		</div>
	</div>
				
	</div>

	<div id="channel01-04">
		<h3 class="white-panel">女子会チャンネル</h3>
		<div class="uk-container uk-container-center">
			<div class="uk-grid uk-grid-width-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-3 clear" data-uk-grid-margin>
				<section class="uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="img">
						<a href="profile-01.php">
							<img src="images/home/01_02.png">	
							<div class="name">
								<p>立命館大学</p>
								<h2>津田 歩武</h2>
							</div>
						</a>
					</div>
				</section>
				<section class="uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<a href="profile-01.php">
						<img src="images/home/01_02.png">	
						<div class="name">
							<p>立命館大学</p>
							<h2>津田 歩武</h2>
						</div>
					</a>
				</section>
				<section class="uk-hidden-small uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<a href="profile-01.php">
						<img src="images/home/01_02.png">	
						<div class="name">
							<p>立命館大学</p>
							<h2>津田 歩武</h2>
						</div>
					</a>
				</section>
			</div>
		</div>
	</div>

	<div id="channel01-05">
		<h3 class="white-panel">元アスリートチャンネル</h3>
		<div class="uk-container uk-container-center">
			<div class="uk-grid uk-grid-width-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-3 clear" data-uk-grid-margin>
				<section class="uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="img">
						<a href="profile-01.php">
							<img src="images/home/01_02.png">	
							<div class="name">
								<p>立命館大学</p>
								<h2>津田 歩武</h2>
							</div>
						</a>
					</div>
				</section>
				<section class="uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<a href="profile-01.php">
						<img src="images/home/01_02.png">	
						<div class="name">
							<p>立命館大学</p>
							<h2>津田 歩武</h2>
						</div>
					</a>
				</section>
				<section class="uk-hidden-small uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<a href="profile-01.php">
						<img src="images/home/01_02.png">	
						<div class="name">
							<p>立命館大学</p>
							<h2>津田 歩武</h2>
						</div>
					</a>
				</section>
			</div>
		</div>
	</div> -->

<?php

	include 'footer.php';

?>
