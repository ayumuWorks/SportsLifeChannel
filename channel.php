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




	



<?php

	include 'footer.php';

?>
