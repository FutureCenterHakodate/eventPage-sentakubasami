<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title("はこだてみらい館 |",true);?></title>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" type="text/css" href=<?php echo get_template_directory_uri();?>/css/sentaku.css>
	<link rel="icon" href=<?php echo get_template_directory_uri();?>/img/favicon.ico>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link rel="stylesheet" href="http://mplus-webfonts.sourceforge.jp/mplus_webfonts.css">
</head>

<header>
	<!-- ここにヘッダー用画像 -->
	<a href="http://hakodate-miraiproject.jp">
	<img src=<?php echo get_template_directory_uri();?>/img/LogoFCH.png alt=""></a>
</header>

<!-- 要素ここから -->
<body>
<div id="head" class="container">
	<img src=<?php echo get_template_directory_uri();?>/img/TopImg.png alt="mainvisual">
</div>

<div id="holdtime" >
	<img src=<?php echo get_template_directory_uri();?>/img/TopDate.png  width="350px" alt="ふせん">
</div>

<div class="container">


<div id="info" >
	<div class="infoBG">
		<img src =<?php echo get_template_directory_uri();?>/img/background.png width="900px" text-align="center" alt="概要">
			<div class="infoTable">
				<div class="block">
					<h3>会場</h3>
					<p>北海道函館市若松町20番1号<br>キラリス函館3F はこだてみらい館</p>
				</div>
				<div class="block">
					<h3>入館料</h3>
					<p>大人：600円 中高生：300円 未就学児：無料<br>※3ヶ月、6ヶ月定期券有<br>※2館共通券有(20名以上の団体：大人480円 中高生：240円)</p>
				</div>
				<div class="block">
					<h3>開館時間</h3>
					<p>午前10時~午後8時</p>
				</div>
				<div class="block">
					<h3>休館日</h3>
					<p>毎月第2水曜日<br>※期間中の休館日は6月14日(水)です。</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="about">
	<div　class="container">
		<div class="aboutBG">
			<img src=<?php echo get_template_directory_uri();?>/img/TopAb.jpg alt="企画概要BG">
			<div class="aboutAbsolute">
				<div class="heading">
					<h1 id="abstract"><font color="FFFFFF">企画概要</font></h1>
				</div>
				<div class="readAbout">
					<p>日本、アメリカ、イギリス、マケドニア、インド、イスラエルなどさまざまな国からあつまった『せんたくばさみ』と、キャンプ場のような『テント』のある空間でなにをする？つくる？はさむ？つるす？ならべる？あつめる？かざる？</p>
				</div>
				<div class="block" id="artist">
					<img src=<?php echo get_template_directory_uri();?>/img/joseph.jpg width="120px" height="120px"alt="山添joseph勇">
					<p>山添joseph勇（美術家）<br>
					東京造形大学美術学科卒<br>
					深沢アート研究所（カブと山添によるアートユニット）<br>
					アートを基軸としたこども造形ワークショップの実施・企画・アイデア制作・普及や、現代美術の作品制作などを活動とする。<br>
					深沢アート研究所HP <a href="http://www.hukalabo.com">http://www.hukalabo.com</a>
				</div>

			</div>
		</div>
	</div>
			<div id="sample">
				<img src=<?php echo get_template_directory_uri();?>/img/SampleImagesRe.jpg alt="サンプル画像">
			</div>
</div>



<div id="event" >
	<div class="container">
		<div class="EventBG">
			<img src= <?php echo get_template_directory_uri(); ?>/img/EventBG.png width=70% alt="イベントBG">
			<div class="EVabsolute" >
				<div class="heading"><h1>イベント</h1></div>
					<h3>アーティストによる洗濯ばさみワークショップ開催！！</h3>
				<div class="block">
				<img src=<?php echo get_template_directory_uri();?>/img/joseph.jpg  alt="山添joseph勇">
					<div>
					<p>①27日(土) 13:00~14:00, 15:00~16:00, 17:00~18:00の3回実施</p>
					<h2>講師：山添joseph勇 氏</h2>
					<p>参加費無料(入館料のみ),申込不要</p>
					</div>
				</div>
				<div class="block">
				<img src=<?php echo get_template_directory_uri();?>/img/cabu.jpg alt="カブ" >
					<div>
					<p>②28日(日) 13:00~14:00 の1回実施</p>
					<h2>講師：カブ 氏</h2>
					<p>参加費無料(入館料のみ),申込不要</p>
					<p>※そのほか、展示期間中は洗濯ばさみで遊べます。</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="access" class="container">
	<div class="AccessBG">
		<img class="map" src=<?php echo get_template_directory_uri();?>/img/BG3.png alt="アクセス">
		<div class="ACabsolute">
			<div class="heading"><h1>アクセス</h1></div>
			<div class="accessTable">
				<div class="block">
					<h3>住所</h3>
					<p>〒040-0063 函館市若松町20番1号<br>キラリス函館3F</p>
				</div>
				<div class="block">
					<h3>バス</h3>
					<p>｢函館駅前」停留所から徒歩1分<br>｢棒二森屋前｣停留所から徒歩１分</p>
				</div>
				<div class="block">
					<h3>市電</h3>
					<p>｢函館駅前｣電停から徒歩1分</p>
				</div>
				<div class="block">
					<h3>提携駐車場</h3>
					<p>198台(最大)　タイムズ函館駅前</p>
				</div>
			</div>
				<img class="map2" src=<?php echo get_template_directory_uri();?>/img/map.png width=70% alt="地図">
			</div>
		</div>
	</div>
</div>


<div id="contact" class="container">
	<h1>お問い合わせ</h1>
	<div class="accessTable">
		<h2>キラリス函館　3Fはこだてみらい館</h2>
		<div class="block">
			<h3>TEL</h3>
			<p>0138-26-6000</p>
		</div>
		<div class="block">
			<h3>Eメール</h3>
			<p>info@hakodate-miraiproject.jp</p>
		</div>
		<div class="block">
			<h3>WEBサイト</h3>
			<p><a href="http://hakodate-miraiproject.jp/FCH/">http://hakodate-miraiproject.jp</a></p>
		</div>
	</div>

</div>

<!-- ページトップへのジャンプボタン -->
<div id="pageTop" align="right">
<p><a href="#"><img src=<?php echo get_template_directory_uri();?>/img/ToTop.png width="150px" alt="トップへ"><i class="fa fa-chevron-up"></i></a></p>
</div>

</body>
<div id="footer" class="container"></div>
<!-- 要素ここまで -->

<footer>
	<small>&copy;2017 Hakodate Mirai Project</small>
</footer>
</html>