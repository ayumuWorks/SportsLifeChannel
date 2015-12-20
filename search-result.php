<?php

	include 'header.php';

?>

<?php
	require('dbconnect.php');//データベースへの接続

	error_reporting(0);

	$user_search = $_GET['usersearch'];
	$not_words = array(",", "、", "　", "。", ".");
	$clean_search = str_replace($not_words, ' ', $user_search);

	$search_words = explode(' ', $clean_search);//半角スペースで各語が繋がっている状態を、バラバラに。

	$final_search_words = array(); 
	if (count($search_words) > 0) {  //空白二つ以上のときの対処
		foreach ($search_words as $word) { // $search_words=$word
			if (!empty($word)) {
				$final_search_words[] = $word;
			}
		}
	}

	$where_list = array();
	if (count($final_search_words) > 0) {
		foreach ($final_search_words as $word) {
			$where_list[] = "searchword LIKE '%$word%'";
		}
	}

	$where_clause = implode(' OR ', $where_list);

	$sql = "SELECT * FROM players WHERE $where_clause";

	$result = mysqli_query($db, $sql);
?>

	<div id="search-01" class="uk-container uk-container-center">
		<h2 class="white-panel tit">人物検索</h2>
	</div>

	<div id="search-engine" class="uk-container uk-container-center">
		<form class="search-form" method="get" role="search" action="search-result.php">
			<input class="search-form-input" type="text" id="usersearch" name="usersearch" placeholder="Search this Site" required="" />
			<input class="search-form-button" type="submit" name="submit" value="Search" />
		</form>
	</div>

	<div id="search-02" class="">
		<div class="uk-container uk-container-center">
			<h2 class="com-tit-02">"<?php echo $user_search; ?>"　検索結果一覧</h2>		
		</div>
		
		<div class="uk-container uk-container-center">
			<div class="search-nav">
				<p>
					前のページへ ---
					<a href="02.html">次のページへ</a>
				</p>
			</div>

			<?php
				$row = $result->num_rows;

				printf("検索結果 %d 件",$row);
			?>

			<div class='uk-grid uk-grid-width-small-1-2 uk-grid-width-large-1-3 clear' data-uk-grid-margin>
			<?php
				for(;$row > 0; $row--) {
					$table = mysqli_fetch_assoc($result);
					echo "
					<section class='uk-scrollspy-init-inview com-panel-02' data-uk-scrollspy='{cls:'uk-animation-slide-bottom', repeat: true}'>
						<div class='uk-grid white-panel'>
							<section class='img uk-width-2-5'>
								<a href='profile-01.php'><img src='"; echo $table['img']; echo "'></a>
							</section>
							<section class='text uk-width-3-5'>
								<dl>
									<dt>名前</dt>
									<dd>"; echo $table['name']; echo "</dd>
									<dt>競技</dt>
									<dd>"; echo $table['sports']; echo "</dd>
								</dl>
							</section>
						</div>
					</section>
				";
			}
			?>
			</div>
		</div>
	</div>

	<div id="search-02" class="">
		<div class="uk-container uk-container-center">
			<h2 class="com-tit-02">人物一覧</h2>		
		</div>
		<div class="uk-container uk-container-center">
			<div class="search-nav">
				<p>
					前のページへ ---
					<a href="02.html">次のページへ</a>
				</p>
			</div>
			<div class="uk-grid uk-grid-width-small-1-2 uk-grid-width-large-1-3 clear" data-uk-grid-margin>
				<section class="uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="uk-grid white-panel">
						<section class="img uk-width-2-5">
							<a href="profile-01.php"><img src="images/search/01_01.jpg"></a>
						</section>
						<section class="text uk-width-3-5">
							<dl>
								<dt>名前</dt>
								<dd>津田 歩武</dd>
								<dt>競技</dt>
								<dd>アルティメット</dd>
							</dl>
						</section>
					</div>
				</section>
				<section class="uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="uk-grid white-panel">
						<section class="img uk-width-2-5">
							<a href="profile-01.php"><img src="images/search/01_01.jpg"></a>
						</section>
						<section class="text uk-width-3-5">
							<dl>
								<dt>名前</dt>
								<dd>津田 歩武</dd>
								<dt>競技</dt>
								<dd>アルティメット</dd>
							</dl>
						</section>
					</div>
				</section>
				<section class="uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="uk-grid white-panel">
						<section class="img uk-width-2-5">
							<a href="profile-01.php"><img src="images/search/01_01.jpg"></a>
						</section>
						<section class="text uk-width-3-5">
							<dl>
								<dt>名前</dt>
								<dd>津田 歩武</dd>
								<dt>競技</dt>
								<dd>アルティメット</dd>
							</dl>
						</section>
					</div>
				</section>
				<section class="uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="uk-grid white-panel">
						<section class="img uk-width-2-5">
							<a href="profile-01.php"><img src="images/search/01_01.jpg"></a>
						</section>
						<section class="text uk-width-3-5">
							<dl>
								<dt>名前</dt>
								<dd>津田 歩武</dd>
								<dt>競技</dt>
								<dd>アルティメット</dd>
							</dl>
						</section>
					</div>
				</section>
				<section class="uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="uk-grid white-panel">
						<section class="img uk-width-2-5">
							<a href="profile-01.php"><img src="images/search/01_01.jpg"></a>
						</section>
						<section class="text uk-width-3-5">
							<dl>
								<dt>名前</dt>
								<dd>津田 歩武</dd>
								<dt>競技</dt>
								<dd>アルティメット</dd>
							</dl>
						</section>
					</div>
				</section>
				<section class="uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="uk-grid white-panel">
						<section class="img uk-width-2-5">
							<a href="profile-01.php"><img src="images/search/01_01.jpg"></a>
						</section>
						<section class="text uk-width-3-5">
							<dl>
								<dt>名前</dt>
								<dd>津田 歩武</dd>
								<dt>競技</dt>
								<dd>アルティメット</dd>
							</dl>
						</section>
					</div>
				</section>
				<section class="uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="uk-grid white-panel">
						<section class="img uk-width-2-5">
							<a href="profile-01.php"><img src="images/search/01_01.jpg"></a>
						</section>
						<section class="text uk-width-3-5">
							<dl>
								<dt>名前</dt>
								<dd>津田 歩武</dd>
								<dt>競技</dt>
								<dd>アルティメット</dd>
							</dl>
						</section>
					</div>
				</section>
				<section class="uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="uk-grid white-panel">
						<section class="img uk-width-2-5">
							<a href="profile-01.php"><img src="images/search/01_01.jpg"></a>
						</section>
						<section class="text uk-width-3-5">
							<dl>
								<dt>名前</dt>
								<dd>津田 歩武</dd>
								<dt>競技</dt>
								<dd>アルティメット</dd>
							</dl>
						</section>
					</div>
				</section>
				<section class="uk-scrollspy-init-inview com-panel-02" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
					<div class="uk-grid white-panel">
						<section class="img uk-width-2-5">
							<a href="profile-01.php"><img src="images/search/01_01.jpg"></a>
						</section>
						<section class="text uk-width-3-5">
							<dl>
								<dt>名前</dt>
								<dd>津田 歩武</dd>
								<dt>競技</dt>
								<dd>アルティメット</dd>
							</dl>
						</section>
					</div>
				</section>
			</div>
			<div class="search-nav">
				<p>
					前のページへ ---
					<a href="02.html">次のページへ</a>
				</p>
			</div>
		</div>		
	</div>
	
	

<?php

	include 'footer.php';

?>
