<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title("はこだてみらい館 |",true);?></title>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" type="text/css" href=<?php echo get_template_directory_uri();?>/css/sentaku.css>
	<link rel="icon" href=<?php echo get_template_directory_uri();?>/img/favicon.ico>
</head>

<header>
	<!-- ここにヘッダー用画像 -->
	<img src=<?php echo get_template_directory_uri();?>/img/LogoFCH.png width="100px" height="auto" alt="">
</header>

<!-- 要素ここから -->

<div id="head" class="container">
	<img src=<?php echo get_template_directory_uri();?>/img/TopImg.jpg alt="mainvisual">
</div>

<div id="holdtime" >
	<img src=<?php echo get_template_directory_uri();?>/img/TopDate.png alt="ふせん">
</div>

<div class="container">
</div>

<div id="info" >
	<div class="container">
		<div class="infoTable">
			<div class="block">
				<h3>会場</h3>
				<p>北海道函館市若松町20番1号<br>キラリス函館3F はこだてみらい館</p>
			</div>
			<div class="block">
				<h3>料金</h3>
				<p>大人：600円 中高生：300円 未就学児：無料<br>※3ヶ月、6ヶ月定期券有<br>※2館共通券有(20名以上の団体：大人480円 中高生：240円)</p>
			</div>
			<div class="block">
				<h3>開館時間</h3>
				<p>午前10時~午後8時</p>
			</div>
			<div class="block">
				<h3>休館日</h3>
				<p>毎月第2水曜日<br>※期間中休館は6月14日(水),7月12日(水)です。</p>
			</div>
		</div>
	</div>
</div>


<div id="about">
	<img src=<?php echo get_template_directory_uri();?>/img/BG2.png alt="企画概要BG">
	<div　class="container">
		<div class="heading">
			<h1>企画概要</h1>
		</div>
		<div class="readAbout">
			<p>日本、アメリカ、イギリス、マケドニア、インド、イスラエルなどさまざまな国からあつまった『せんたくばさみ』と、キャンプ場のような『テント』のある空間でなにをする？つくる？はさむ？つるす？ならべる？あつめる？かざる？
			</p>
		</div>

	</div>
</div>

<div id="event" class="container">
	<div class="heading"><h1>イベント</h1></div>
	<div class="context">
		<h3>アーティストによる洗濯ばさみワークショップ開催！！</h3>
		<p>①27日(土) 13:00~14:00, 15:00~16:00, 17:00~18:00の3回実施</p>
		<p>講師：山添joseph勇 氏</p>
		<p>参加費無料(入館料のみ),申込不要</p>
		<p>②28日(日) 13:00~14:00 の1回実施</p>
		<p>講師：カブ 氏</p>
		<p>参加費無料(入館料のみ),申込不要</p>
		<p>※そのほか、展示期間中は洗濯ばさみで遊べます。</p>
	</div>
</div>
<div id="access" class="container">
	<div class="heading">
		<h1>アクセス</h1>
	</div>
	<img class="map" src="http://placehold.jp/800x400.png" alt="">
</div>
<div id="contact" class="container">
	<h1>お問い合わせ</h1>
	<div class="accessTable">
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
			<p><a href="http://hakodate-miraiproject.jp">http://hakodate-miraiproject.jp</a></p>
		</div>
	</div>

</div>
<div id="footer" class="container"></div>
<!-- 要素ここまで -->

<footer>
	<small>&copy;2017 Hakodate Mirai Project</small>
</footer>
</html>