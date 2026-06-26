<?php
session_start();

// ページ遷移管理
$pageFlag = 'form';
if(!empty($_POST['btnConfirm'])) {
  $pageFlag = 'confirm'; // 確認ボタンで確認画面表示
}
if(!empty($_POST['btnBack'])) {
  $pageFlag = 'form'; // 戻るボタンで入力画面表示
}
if(!empty($_POST['btnSubmit'])) {
  $pageFlag = 'complete'; // 送信ボタンで完了画面表示
}

// クリックジャッキング対策
header('X-FRAME-OPTIONS: DENY');

// XSS対策
function sanitize($data) {
  return stripslashes(htmlspecialchars($data, ENT_QUOTES, 'UTF-8'));
}

// 変数設定
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name         = sanitize($_POST['name']);
  $company      = sanitize($_POST['company']);
  $division     = sanitize($_POST['division']);
  $zip          = sanitize($_POST['zip']);
  $address1     = sanitize($_POST['address1']);
  $address2     = sanitize($_POST['address2']);
  $address      = $address1 . $address2;
  $tel          = sanitize($_POST['tel']);
  $fax          = sanitize($_POST['fax']);
  $mail         = sanitize($_POST['mail']);
  $contents     = sanitize($_POST['contents']);
  $reason1      = $_POST['reason1'];
  $searchwd     = sanitize($_POST['searchwd']);
  $reason2      = $_POST['reason2'];
  $introducer   = sanitize($_POST['introducer']);
  $reason3      = $_POST['reason3'];
  $other        = sanitize($_POST['other']);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=9">
<?php if($pageFlag !== 'complete'): ?>
<title>各種お問い合わせ｜原糸・衣料資材・工業資材などの先端繊維メーカー【KBセーレン株式会社】</title>
<?php endif; ?>
<?php if($pageFlag === 'complete'): ?>
<title>お問い合わせ-送信しました｜KBセーレン</title>
<?php endif; ?>
<link href="./common/css/reset.css" rel="stylesheet" type="text/css" />
<link href="./common/js/mmenu/css/jquery.mmenu.all.css"rel="stylesheet" type="text/css"  />
<link href="./common/js/bxslider/jquery.bxslider.css"rel="stylesheet" type="text/css"  />
<link href="../common/css/site.css" rel="stylesheet" type="text/css" />
<link href="./common/css/responsive.css" rel="stylesheet" type="text/css" />
<link href="./common/css/search.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="./common/js/bxslider/jquery.bxslider.min.js"></script>
<script src="./common/js/mmenu/js/jquery.mmenu.min.all.js"></script>
<script src="./common/common.js" type="text/javascript"></script>
<!-- page-css -->
<link rel="stylesheet" href="./css/inquiry.css">
<link rel="stylesheet" href="./css/inquiry-ng.css">
<style>
  html {
    scroll-behavior: initial !important;
  }
</style>
<!-- page-js -->
<script type="text/javascript" src="./js/inquiry.js"></script> 
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-T3D4NWF');</script>
<!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3D4NWF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div>
<div id="header">
	<div class="headBox clearfix">
		<p class="headLogo"><a href="/"><img src="/common/images/header_logo.jpg" alt="KBセーレン株式会社" /></a></p>
		<p class="headEnglish"><a href="/english/"><span>EN</span></a></p>
	</div>
	<ul class="headNavi clearfix">
		<li class="headNavi__item">
			<a href="/company_info/"><span>企業情報</span></a>
			<div class="headNavi__subNavi">
				<div class="headNavi__subNavi__item headNavi__subNavi__item--top"><a href="/company_info/"><span>企業情報トップ</span></a></div>
				<ul class="headNavi__subNavi__list">
					<li class="headNavi__subNavi__item"><a href="/company_info/history.html"><span>歴史・沿革</span></a></li>
					<li class="headNavi__subNavi__item"><a href="/company_info/summary.html"><span>会社概要</span></a></li>
					<li class="headNavi__subNavi__item"><a href="/company_info/message.html"><span>代表挨拶</span></a></li>
					<li class="headNavi__subNavi__item"><a href="/company_info/organization.html"><span>組織図</span></a></li>
					<li class="headNavi__subNavi__item"><a href="/company_info/project.html"><span>事業紹介</span></a></li>
					<li class="headNavi__subNavi__item"><a href="/company_info/stronghold.html"><span>生産拠点</span></a></li>
				</ul>
			</div>
		</li>
		<li class="headNavi__item"><a href="/news/"><span>ニュース一覧</span></a></li>
		<li class="headNavi__item">
			<a href="/kbs_products/"><span>製品情報</span></a>
			<div class="headNavi__subNavi">
				<div class="headNavi__subNavi__item headNavi__subNavi__item--top"><a href="/kbs_products/"><span>製品情報トップ</span></a></div>
				<ul class="headNavi__subNavi__list">
					<li class="headNavi__subNavi__item"><a href="/kbs_products/filament.html"><span>フィラメント</span></a></li>
					<li class="headNavi__subNavi__item"><a href="/kbs_products/textile.html"><span>テキスタイル</span></a></li>
					<li class="headNavi__subNavi__item"><a href="/kbs_products/seihin.html"><span>製品</span></a></li>
					<li class="headNavi__subNavi__item"><a href="/kbs_products/belimafamily.html"><span>ベリーマ&reg;Xシリーズ</span></a></li>
				</ul>
			</div>
		</li>
		<li class="headNavi__item"><a href="/reseach_development/"><span>研究開発</span></a></li>
    <li class="headNavi__item">
			<a href="/sustainability/environment.html"><span>サステナビリティ</span></a>
			<div class="headNavi__subNavi">
        <ul class="headNavi__subNavi__list">
					<li class="headNavi__subNavi__item"><a href="/sustainability/environment.html"><span>環境への取り組み</span></a></li>
					<li class="headNavi__subNavi__item"><a href="/sustainability/society.html"><span>社会への取り組み</span></a></li>
				</ul>
			</div>
		</li>

    <li class="headNavi__item clearfix"><a href="https://www.seiren.com/invest/" target="_blank"><span>株主・投資家情報</span></a></li>
		<li class="headNavi__item"><a href="https://recruit.kbseiren.com/opening/" target="_blank"><span>採用情報</span></a></li>
		<li class="headNavi__item"><a href="/inquiry-mail/"><span>お問い合わせ</span></a></li>
	</ul>

	<div class="mNavi">
	    <div class="mTrigger" href="#"><span></span><span></span><span></span></div>
		<div class="mNaviBox">
			<ul class="headNavi-m clearfix">
				<li class="headNavi-m__item"><a href="/company_info/"><span>企業情報</span></a></li>
				<li class="headNavi-m__item"><a href="/news/"><span>ニュース一覧</span></a></li>
				<li class="headNavi-m__item"><a href="/kbs_products/"><span>製品情報</span></a></li>
				<li class="headNavi-m__item"><a href="/reseach_development/"><span>研究開発</span></a></li>
				<li class="headNavi-m__item"><a href="/sustainability/environment.html"><span>サステナビリティ</span></a></li>
				<li class="headNavi-m__item clearfix"><a href="https://www.seiren.com/invest/" target="_blank"><span>株主・投資家情報</span></a></li>
				<li class="headNavi-m__item"><a href="https://recruit.kbseiren.com/opening/" target="_blank"><span>採用情報</span></a></li>
				<li class="headNavi-m__item"><a href="/inquiry-mail/"><span>お問い合わせ</span></a></li>
				<li class="headNavi-m__item"><a href="/english/"><span>English</span></a></li>
			</ul>
		</div>
	</div>
</div>

  <noscript>このページはJavascriptを使用しています。Javascriptをonにしてください</noscript>
  <?php if($pageFlag === 'form'): ?>
  <script>
    $(function(){
      //検索エンジン
      if(!$('input[name="reason1[]"]').attr('checked')) {
        $('input[name="searchwd"]').attr("disabled", "disabled").val("").css("background","#f0f0f0");
      } else {
        $('input[name="searchwd"]').attr("required", "")
      }
      $('input[name="reason1[]"]').click(function(){
        var checked = $('input[name="reason1[]"]').attr('checked');
        if(!checked){
          $('input[name="searchwd"]').attr("disabled", "disabled").val("").css("background","#f0f0f0");
          $('input[name="searchwd"]').removeAttr("required")
        }else{
          $('input[name="searchwd"]').removeAttr("disabled").css("background","#FFF");
          $('input[name="searchwd"]').attr("required", "")
        }
      });

      //紹介
      if(!$('input[name="reason2[]"]:last').attr('checked')) {
        $('input[name="introducer"]').attr("disabled", "disabled").val("").css("background","#f0f0f0");
      } else {
        $('input[name="introducer"]').attr("required", "")
      }
      $('input[name="reason2[]"]:last').click(function(){
        var checked = $('input[name="reason2[]"]:last').attr('checked');
        if(!checked){
          $('input[name="introducer"]').attr("disabled", "disabled").val("").css("background","#f0f0f0");
          $('input[name="introducer"]').removeAttr("required")
        }else{
          $('input[name="introducer"]').removeAttr("disabled").css("background","#FFF");
          $('input[name="introducer"]').attr("required", "")
        }
      });

      //その他
      if(!$('input[name="reason3[]"]').attr('checked')) {
        $('textarea[name="other"]').attr("disabled", "disabled").val("").css("background","#f0f0f0");
      } else {
        $('textarea[name="other"]').attr("required", "")
      }
      $('input[name="reason3[]"]').click(function(){
        var checked = $('input[name="reason3[]"]').attr('checked');
        if(!checked){
          $('textarea[name="other"]').attr("disabled", "disabled").val("").css("background","#f0f0f0");
          $('textarea[name="other"]').removeAttr("required")
        }else{
          $('textarea[name="other"]').removeAttr("disabled").css("background","#FFF");
          $('textarea[name="other"]').attr("required", "")
        }
      });
    });
  </script>
  <?php endif; ?>





<?php
//----------------------------------------------------------------------
// 入力画面
//----------------------------------------------------------------------
if($pageFlag === 'form'):

// CSRF対策
if(!isset($_SESSION['csrfToken'])) {
  $csrfToken = bin2hex(random_bytes(32));
  $_SESSION['csrfToken'] = $csrfToken;
}
$token = $_SESSION['csrfToken'];
?>
  <div class="w960">
    <div id="headh1Block">
      <h1>お問い合わせ</h1>
    </div>
  </div>

  <div id="contents">
    <div class="w960">
      <div class="overflowFix">
        <h2 class="txtTitleh2">電話でのお問い合わせ</h2>
        <div class="pcWidth400 pcFloatLeft">
          <h3 class="maT0">商品に関するお問い合わせ</h3>
          <p>KBセーレン　大阪本社　広報担当<br />
          06-6345-5204（平日9：00～18：00）</p>
        </div>
        <div class="pcWidth480 pcFloatRight">
          <h3 class="maT0">人事・総務に関するお問い合わせ</h3>
          <p>KBセーレン　大阪本社　人事・総務部<br />06-6345-5232（平日9：00～18：00）</p>
        </div>
      </div>
      <h2 class="txtTitleh2">お問い合わせフォーム</h2>
      <div id="indexPickUpBlock">
        <div class="overflowFix">
          <p class="pcTxtCenter">下記に必要事項を入力の上、お気軽にお問い合わせください。<br />
          <strong class="strongRed">※マークは必須項目です。</strong></p>
        </div>
      </div>

      <div id="wrapper_inquiry">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" id="form1" name="form1">
          <table border="0" cellspacing="0" cellpadding="5" class="inquiryTable">
            <tr>
              <td align="right">お名前<span class="red">※</span></td>
              <td align="left">
                <input type="text" name="name" size="20" maxlength="30" value="<?php if($name){echo $name;} ?>" required />
              </td>
            </tr>
            <tr>
              <td align="right">会社名</td>
              <td align="left">
                <input type="text" name="company" size="20" maxlength="30" value="<?php if($company){echo $company;} ?>" />
              </td>
            </tr>
            <tr>
              <td align="right" valign="top">部署</td>
              <td align="left">
                <input type="text" name="division" size="20" maxlength="30" value="<?php if($division){echo $division;} ?>" />
              </td>
            </tr>
            <tr>
              <td align="right" valign="top">郵便番号<span class="red">※</span></td>
              <td align="left">
                <input type="text" name="zip" size="20" maxlength="8" value="<?php if($zip){echo $zip;} ?>" required minlength="8" pattern="^\d{3}-\d{4}" /><span class="red">（半角数字・要ハイフン）</span>
              </td>
            </tr>
            <tr>
              <td align="right" valign="top">都道府県</td>
              <td align="left">
                <select name="address1">
                  <option value="" <?php if(!$address1 || $address1 === ''){echo 'selected="selected"';} ?>>都道府県</option>
                  <option label="北海道" value="北海道" <?php if($address1 === '北海道'){echo 'selected="selected"';} ?>>北海道</option>
                  <option label="青森県" value="青森県" <?php if($address1 === '青森県'){echo 'selected="selected"';} ?>>青森県</option>
                  <option label="岩手県" value="岩手県" <?php if($address1 === '岩手県'){echo 'selected="selected"';} ?>>岩手県</option>
                  <option label="宮城県" value="宮城県" <?php if($address1 === '宮城県'){echo 'selected="selected"';} ?>>宮城県</option>
                  <option label="秋田県" value="秋田県" <?php if($address1 === '秋田県'){echo 'selected="selected"';} ?>>秋田県</option>
                  <option label="山形県" value="山形県" <?php if($address1 === '山形県'){echo 'selected="selected"';} ?>>山形県</option>
                  <option label="福島県" value="福島県" <?php if($address1 === '福島県'){echo 'selected="selected"';} ?>>福島県</option>
                  <option label="茨城県" value="茨城県" <?php if($address1 === '茨城県'){echo 'selected="selected"';} ?>>茨城県</option>
                  <option label="栃木県" value="栃木県" <?php if($address1 === '栃木県'){echo 'selected="selected"';} ?>>栃木県</option>
                  <option label="群馬県" value="群馬県" <?php if($address1 === '群馬県'){echo 'selected="selected"';} ?>>群馬県</option>
                  <option label="埼玉県" value="埼玉県" <?php if($address1 === '埼玉県'){echo 'selected="selected"';} ?>>埼玉県</option>
                  <option label="千葉県" value="千葉県" <?php if($address1 === '千葉県'){echo 'selected="selected"';} ?>>千葉県</option>
                  <option label="東京都" value="東京都" <?php if($address1 === '東京都'){echo 'selected="selected"';} ?>>東京都</option>
                  <option label="神奈川県" value="神奈川県" <?php if($address1 === '神奈川県'){echo 'selected="selected"';} ?>>神奈川県</option>
                  <option label="新潟県" value="新潟県" <?php if($address1 === '新潟県'){echo 'selected="selected"';} ?>>新潟県</option>
                  <option label="富山県" value="富山県" <?php if($address1 === '富山県'){echo 'selected="selected"';} ?>>富山県</option>
                  <option label="石川県" value="石川県" <?php if($address1 === '石川県'){echo 'selected="selected"';} ?>>石川県</option>
                  <option label="福井県" value="福井県" <?php if($address1 === '福井県'){echo 'selected="selected"';} ?>>福井県</option>
                  <option label="山梨県" value="山梨県" <?php if($address1 === '山梨県'){echo 'selected="selected"';} ?>>山梨県</option>
                  <option label="長野県" value="長野県" <?php if($address1 === '長野県'){echo 'selected="selected"';} ?>>長野県</option>
                  <option label="岐阜県" value="岐阜県" <?php if($address1 === '岐阜県'){echo 'selected="selected"';} ?>>岐阜県</option>
                  <option label="静岡県" value="静岡県" <?php if($address1 === '静岡県'){echo 'selected="selected"';} ?>>静岡県</option>
                  <option label="愛知県" value="愛知県" <?php if($address1 === '愛知県'){echo 'selected="selected"';} ?>>愛知県</option>
                  <option label="三重県" value="三重県" <?php if($address1 === '三重県'){echo 'selected="selected"';} ?>>三重県</option>
                  <option label="滋賀県" value="滋賀県" <?php if($address1 === '滋賀県'){echo 'selected="selected"';} ?>>滋賀県</option>
                  <option label="京都府" value="京都府" <?php if($address1 === '京都府'){echo 'selected="selected"';} ?>>京都府</option>
                  <option label="大阪府" value="大阪府" <?php if($address1 === '大阪府'){echo 'selected="selected"';} ?>>大阪府</option>
                  <option label="兵庫県" value="兵庫県" <?php if($address1 === '兵庫県'){echo 'selected="selected"';} ?>>兵庫県</option>
                  <option label="奈良県" value="奈良県" <?php if($address1 === '奈良県'){echo 'selected="selected"';} ?>>奈良県</option>
                  <option label="和歌山県" value="和歌山県" <?php if($address1 === '和歌山県'){echo 'selected="selected"';} ?>>和歌山県</option>
                  <option label="鳥取県" value="鳥取県" <?php if($address1 === '鳥取県'){echo 'selected="selected"';} ?>>鳥取県</option>
                  <option label="島根県" value="島根県" <?php if($address1 === '島根県'){echo 'selected="selected"';} ?>>島根県</option>
                  <option label="岡山県" value="岡山県" <?php if($address1 === '岡山県'){echo 'selected="selected"';} ?>>岡山県</option>
                  <option label="広島県" value="広島県" <?php if($address1 === '広島県'){echo 'selected="selected"';} ?>>広島県</option>
                  <option label="山口県" value="山口県" <?php if($address1 === '山口県'){echo 'selected="selected"';} ?>>山口県</option>
                  <option label="徳島県" value="徳島県" <?php if($address1 === '徳島県'){echo 'selected="selected"';} ?>>徳島県</option>
                  <option label="香川県" value="香川県" <?php if($address1 === '香川県'){echo 'selected="selected"';} ?>>香川県</option>
                  <option label="愛媛県" value="愛媛県" <?php if($address1 === '愛媛県'){echo 'selected="selected"';} ?>>愛媛県</option>
                  <option label="高知県" value="高知県" <?php if($address1 === '高知県'){echo 'selected="selected"';} ?>>高知県</option>
                  <option label="福岡県" value="福岡県" <?php if($address1 === '福岡県'){echo 'selected="selected"';} ?>>福岡県</option>
                  <option label="佐賀県" value="佐賀県" <?php if($address1 === '佐賀県'){echo 'selected="selected"';} ?>>佐賀県</option>
                  <option label="長崎県" value="長崎県" <?php if($address1 === '長崎県'){echo 'selected="selected"';} ?>>長崎県</option>
                  <option label="熊本県" value="熊本県" <?php if($address1 === '熊本県'){echo 'selected="selected"';} ?>>熊本県</option>
                  <option label="大分県" value="大分県" <?php if($address1 === '大分県'){echo 'selected="selected"';} ?>>大分県</option>
                  <option label="宮崎県" value="宮崎県" <?php if($address1 === '宮崎県'){echo 'selected="selected"';} ?>>宮崎県</option>
                  <option label="鹿児島県" value="鹿児島県" <?php if($address1 === '鹿児島県'){echo 'selected="selected"';} ?>>鹿児島県</option>
                  <option label="沖縄県" value="沖縄県" <?php if($address1 === '沖縄県'){echo 'selected="selected"';} ?>>沖縄県</option>
                </select>
              </td>
            </tr>
            <tr>
              <td align="right" valign="top">住所<span class="red">※</span></td>
              <td align="left">
                <textarea name="address2" cols="45" rows="3" required><?php if($address2){echo $address2;} ?></textarea>
              </td>
            </tr>
            <tr>
              <td align="right" valign="top">TEL<span class="red">※</span></td>
              <td align="left">
                <input type="text" name="tel" size="20" maxlength="20" value="<?php if($tel){echo $tel;} ?>" required pattern="^[0-9A-Za-z]+$" /><span class="red">（半角数字）</span>
              </td>
            </tr>
            <tr>
              <td align="right" valign="top">FAX</td>
              <td align="left">
                <input type="text" name="fax" size="30" maxlength="50" value="<?php if($fax){echo $fax;} ?>" pattern="^[0-9A-Za-z]+$" /><span class="red">（半角数字）</span>
              </td>
            </tr>
            <tr>
            <td align="right" valign="top">E-Mail<span class="red">※</span></td>
              <td align="left">
                <input type="email" name="mail" size="30" maxlength="50" value="<?php if($mail){echo $mail;} ?>" required /><span class="red">（半角英数字）</span>
              </td>
            </tr>
            <tr>
              <td align="right" valign="top">お問い合わせ内容<span class="red">※</span></td>
              <td align="left">
                <textarea name="contents" cols="45" rows="10" required><?php if($contents){echo $contents;} ?></textarea>
              </td>
            </tr>
            <tr class="tr-reason">
              <td align="right" valign="top">当社のホームページを知った理由</td>
              <td align="left">
                <label><input type="checkbox" name="reason1[]" value="検索エンジン" <?php if($reason1){echo 'checked';} ?>/>検索エンジン</label>
                <span class="tx-label">検索ワード</span>&nbsp;<input type="text" name="searchwd" size="20" maxlength="30" value="<?php if($searchwd){echo $searchwd;} ?>" /><br>
                <label><input type="checkbox" name="reason2[]" value="新聞" <?php if($reason2 && in_array('新聞', $reason2)){echo 'checked';} ?>/>新聞</label>
                <label><input type="checkbox" name="reason2[]" value="雑誌" <?php if($reason2 && in_array('雑誌', $reason2)){echo 'checked';} ?>/>雑誌</label>
                <label><input type="checkbox" name="reason2[]" value="テレビ" <?php if($reason2 && in_array('テレビ', $reason2)){echo 'checked';} ?>/>テレビ</label>
                <label><input type="checkbox" name="reason2[]" value="ブログ・SNS" <?php if($reason2 && in_array('ブログ・SNS', $reason2)){echo 'checked';} ?>/>ブログ・SNS</label>
                <label><input type="checkbox" name="reason2[]" value="展示会・セミナー" <?php if($reason2 && in_array('展示会・セミナー', $reason2)){echo 'checked';} ?>/>展示会・セミナー</label>
                <label><input type="checkbox" name="reason2[]" value="紹介" <?php if($reason2 && in_array('紹介', $reason2)){echo 'checked';} ?>/>紹介</label>
                <span class="tx-label">紹介者</span>&nbsp;<input type="text" name="introducer" size="20" maxlength="30" value="<?php if($introducer){echo $introducer;} ?>" /><br>
                <label><input type="checkbox" name="reason3[]" value="その他" <?php if($reason3){echo 'checked';} ?>/>その他</label>
                <textarea name="other" cols="40" rows="6"><?php if($other){echo $other;} ?></textarea>
              </td>
            </tr>
          </table>
          <div class="txtCenter">
            <div class="submit">
              <input type="reset" value="リセット">
              <input type="submit" name="btnConfirm" value="確　認">
              <input type="hidden" name="csrf" value="<?php echo $token; ?>">
            </div>
          </div>
          <div id="tyuiTxtColumn">
            <ol>
              <li>土日・祝日をはさんだ場合およびご質問の内容によっては、回答までに多少日数がかかる場合がございます。予めご了承ください。</li>
              <li>お客様のE-mailアドレスは正しくご記入下さい。また、ご質問の内容によっては電話での確認や、郵送での回答をさせていただきますので、住所、電話番号のご記入も併せてお願いいたします。お客様のE-mailアドレス・住所・電話番号の記入ミスにより回答できない場合は、当社といたしましてはいかなる責任も負いかねますのでご了承ください。</li>
              <li>当社より送信するお客様への回答E-mailは、お客様個人宛てに、お客様のお問い合わせにお答えする目的でお送りするものですので、その内容を他へご使用になることはご遠慮ください。</li>
            </ol>
          </div>
          <table width="115" border="0" cellpadding="2" cellspacing="0" title="SSLサーバ証明書導入の証 グローバルサインのサイトシール">
            <tr>
              <td width="115" align="center" valign="top">
                <span id="ss_img_wrapper_115-57_image_ja">
                  <a href="http://jp.globalsign.com/" target="_blank">
                    <img alt="SSL グローバルサインのサイトシール" border="0" id="ss_jpn2_gif" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_115-57_ja.gif">
                  </a>
                </span><br>
                <script type="text/javascript" src="//seal.globalsign.com/SiteSeal/gs_image_115-57_ja.js" defer="defer"></script>
                <a href="https://www.sslcerts.jp/" target="_blank">SSLとは?</a>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
<?php
endif;
?>





<?php
//----------------------------------------------------------------------
// 確認画面
//----------------------------------------------------------------------
if($pageFlag === 'confirm'):
?>
  <div class="w960">
    <div id="headh1Block">
      <h1>お問い合わせ</h1>
    </div>
  </div>

  <div id="indexPickUpBlock">
    <div class="w960">
      <div class="overflowFix">
        <p class="pcTxtCenter">送信内容確認</p>
      </div>
    </div>
  </div>

  <div id="contents">
    <div class="w960">
      <div id="wrapper_inquiry">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" id="form1" name="form1">
          <table border="0" cellspacing="0" cellpadding="5" class="inquiryTable">
            <tbody>
              <tr>
                <td width="170" align="right">お名前<span class="red">※</span></td>
                <td width="410" align="left"><?php echo $name; ?></td>
              </tr>
              <tr>
                <td align="right">会社名</td>
                <td align="left"><?php echo $company; ?></td>
              </tr>
              <tr>
                <td align="right" valign="top">部署</td>
                <td align="left"><?php echo $division; ?></td>
              </tr>
              <tr>
                <td align="right" valign="top">郵便番号<span class="red">※</span></td>
                <td align="left"><?php echo $zip; ?></td>
              </tr>
              <tr>
                <td align="right" valign="top">住所<span class="red">※</span></td>
                <td align="left"><?php echo $address; ?></td>
              </tr>
              <tr>
                <td align="right" valign="top">TEL<span class="red">※</span></td>
                <td align="left"><?php echo $tel; ?></td>
              </tr>
              <tr>
                <td align="right" valign="top">FAX</td>
                <td align="left"><?php echo $fax; ?></td>
              </tr>
              <tr>
                <td align="right" valign="top">E-mail<span class="red">※</span></td>
                <td align="left"><?php echo $mail; ?></td>
              </tr>
              <tr>
                <td align="right" valign="top">お問い合わせ内容<span class="red">※</span></td>
                <td align="left"><?php echo $contents; ?></td>
              </tr>
              <tr class="tr-reason">
                <td align="right" valign="top">当社のホームページを<br>知った理由</td>
                <td align="left">
                  <?php
                    if($reason1) {
                      echo sanitize($reason1[0]) . '<br>';
                      echo '<span class="tx-label">検索ワード</span>&nbsp;' . $searchwd . '<br>';
                    }
                  ?>
                  <?php
                    if($reason2) {
                      foreach($reason2 as $reason2item) {
                        if($reason2item !== '紹介') {
                          echo sanitize($reason2item) . '<br>';
                        } else {
                          echo sanitize($reason2item) . '<br>';
                          echo '<span class="tx-label">紹介者</span>&nbsp;' . $introducer . '<br>';
                        }
                      }
                    }
                  ?>
                  <?php
                    if($reason3) {
                      echo sanitize($reason3[0]) . '<br>';
                      echo $other;
                    }
                  ?>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="submit txtCenter">
            <input type="submit" name="btnBack" value="戻る">
            <input type="submit" name="btnSubmit" value="送信する">
            <?php if($name): ?><input type="hidden" name="name" value="<?php echo $name; ?>"><?php endif; ?>
            <?php if($company): ?><input type="hidden" name="company" value="<?php echo $company; ?>"><?php endif; ?>
            <?php if($division): ?><input type="hidden" name="division" value="<?php echo $division; ?>"><?php endif; ?>
            <?php if($zip): ?><input type="hidden" name="zip" value="<?php echo $zip; ?>"><?php endif; ?>
            <?php if($address1): ?><input type="hidden" name="address1" value="<?php echo $address1; ?>"><?php endif; ?>
            <?php if($address2): ?><input type="hidden" name="address2" value="<?php echo $address2; ?>"><?php endif; ?>
            <?php if($tel): ?><input type="hidden" name="tel" value="<?php echo $tel; ?>"><?php endif; ?>
            <?php if($fax): ?><input type="hidden" name="fax" value="<?php echo $fax; ?>"><?php endif; ?>
            <?php if($mail): ?><input type="hidden" name="mail" value="<?php echo $mail; ?>"><?php endif; ?>
            <?php if($contents): ?><input type="hidden" name="contents" value="<?php echo $contents; ?>"><?php endif; ?>
            <?php if($reason1): ?><input type="hidden" name="reason1[]" value="<?php echo sanitize($reason1[0]); ?>"><?php endif; ?>
            <?php if($searchwd): ?><input type="hidden" name="searchwd" value="<?php echo $searchwd; ?>"><?php endif; ?>
            <?php
              if($reason2):
              foreach ($reason2 as $reason2item):
            ?>
            <input type="hidden" name="reason2[]" value="<?php echo sanitize($reason2item); ?>">
            <?php
              endforeach;
              endif;
            ?>
            <?php if($introducer): ?><input type="hidden" name="introducer" value="<?php echo $introducer; ?>"><?php endif; ?>
            <?php if($reason3): ?><input type="hidden" name="reason3[]" value="<?php echo sanitize($reason3[0]); ?>"><?php endif; ?>
            <?php if($other): ?><input type="hidden" name="other" value="<?php echo $other; ?>"><?php endif; ?>
            <input type="hidden" name="csrf" value="<?php echo sanitize($_POST['csrf']); ?>">&nbsp;
          </div>
          <table width="115" border="0" cellpadding="2" cellspacing="0" title="SSLサーバ証明書導入の証 グローバルサインのサイトシール">
            <tr>
              <td width="115" align="center" valign="top">
                <span id="ss_img_wrapper_115-57_image_ja">
                  <a href="http://jp.globalsign.com/" target="_blank">
                    <img alt="SSL グローバルサインのサイトシール" border="0" id="ss_jpn2_gif" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_115-57_ja.gif">
                  </a>
                </span><br>
                <script type="text/javascript" src="//seal.globalsign.com/SiteSeal/gs_image_115-57_ja.js" defer="defer"></script>
                <a href="https://www.sslcerts.jp/" target="_blank">SSLとは?</a>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
<?php
endif;
?>





<?php
//----------------------------------------------------------------------
// 送信完了画面
//----------------------------------------------------------------------
if($pageFlag === 'complete'):

/* メール内容設定 ここから */
$emailFrom = 'kbs.info@kb.seiren.com';   // From
$emailTo = $mail;

$subjectAdminMail = 'ホームページからお問い合わせがありました。'; // 管理者宛メールのタイトル
$subjectCustomerMail = 'kb seiren-お問い合わせありがとうございます。'; // お客様宛メールのタイトル
$sendDatetime = date('Y年n月j日 H時i分');
$reason1Group = $reason1 ? $reason1 : array();
$reason2Group = $reason2 ? $reason2 : array();
$reason3Group = $reason3 ? $reason3 : array();
$reasons = array_merge($reason1Group, $reason2Group, $reason3Group);
$reasons = implode('、', $reasons);
$searchwdGroup = $searchwd ? '検索ワード：' . $searchwd : '';
$introducerGroup = $introducer ? '紹介者：' . $introducer : '';
$otherGroup = $other ? 'その他の理由：' . $other : '';
$headers = 'From:' . mb_encode_mimeheader('KBセーレン株式会社', 'UTF-8', 'AUTO') . '<' . $emailFrom . '>';

// 管理者宛メールの本文
$contentAdminMail = <<< EOD
$name 様からお問合せがありました。
以下の内容を確認してください。

=================================================================
▼お申込日送信日時：$sendDatetime

-----------------------------------------------------------------
▼お客様情報
-----------------------------------------------------------------
お名前：$name 様
会社名：$company
部署：$division

郵便番号：〒$zip
ご住所：$address
TEL：$tel
FAXL：$fax
E-mail：$mail

-----------------------------------------------------------------
▼お問合せ内容
-----------------------------------------------------------------
お問い合わせ内容：$contents

-----------------------------------------------------------------
▼当社のホームページを知った理由
-----------------------------------------------------------------
$reasons
$searchwdGroup
$introducerGroup
$otherGroup
EOD;

// お客様宛メールの本文
$contentCustomerMail = <<< EOD
$name 様

この度は、kb seirenへお問い合わせいただきましてありがとうございます。
以下の内容で承りました。
お返事まで今しばらくお待ちください。改めてご連絡いたします。

=================================================================
▼お申込日送信日時：$sendDatetime

-----------------------------------------------------------------
▼お客様情報
-----------------------------------------------------------------
お名前：$name 様
会社名：$company
部署：$division

郵便番号：〒$zip
ご住所：$address
TEL：$tel
FAXL：$fax
E-mail：$mail

-----------------------------------------------------------------
▼お問合せ内容
-----------------------------------------------------------------
お問い合わせ内容：$contents

-----------------------------------------------------------------
▼当社ホームページを知った理由
-----------------------------------------------------------------
$reasons
$searchwdGroup
$introducerGroup
$otherGroup

=================================================================

※内容に誤りのある場合、あるいはお問い合わせにお心あたりのない方は
kbs.info@kb.seiren.comまでご連絡下さい。

本日はお問い合わせ頂きありがとうございました。

*****************************************
KB SEIREN., LTD.
https://www.kbseiren.com/
kbs.info@kb.seiren.com
*****************************************
EOD;
/* メール内容設定 ここまで */

if($_POST['csrf'] === $_SESSION['csrfToken']) {
  mb_language('Japanese');
  mb_internal_encoding('UTF-8');
  mb_send_mail($emailFrom, $subjectAdminMail, $contentAdminMail, $headers, '-f'.$emailFrom);
  mb_send_mail($emailTo, $subjectCustomerMail, $contentCustomerMail, $headers, '-f'.$emailFrom);
}
?>
  <div class="w960">
    <div id="headh1Block">
      <h1>お問い合わせ</h1>
    </div>
  </div>

  <div id="indexPickUpBlock">
    <div class="w960">
      <div class="overflowFix">
        <?php if($_POST['csrf'] === $_SESSION['csrfToken']): ?><p class="pcTxtCenter">送信しました。</p><?php endif; ?>
        <?php if($_POST['csrf'] !== $_SESSION['csrfToken']): ?><p class="pcTxtCenter">エラーが発生しました。<br>時間を置いて再度お試しください。</p><?php endif; ?>
      </div>
    </div>
  </div>

  <div id="contents">
    <div class="w960">
      <div id="wrapper_inquiry">
        <?php if($_POST['csrf'] === $_SESSION['csrfToken']): ?>
        <p>お問い合わせありがとうございます。送信完了いたしました。<br />
        ご入力いただいたメールアドレスに確認メールをお送りさせていただきました。</p>
        <p> お返事まで今しばらくお待ちください。改めてご連絡いたします。 </p>
        <?php endif; ?>
        <p class="txtCenter"><a href="http://www.kbseiren.com/">&raquo;HOMEへもどる</a></p>
        <table width="115" border="0" cellpadding="2" cellspacing="0" title="SSLサーバ証明書導入の証 グローバルサインのサイトシール">
          <tr>
            <td width="115" align="center" valign="top">
              <span id="ss_img_wrapper_115-57_image_ja">
                <a href="http://jp.globalsign.com/" target="_blank">
                  <img alt="SSL グローバルサインのサイトシール" border="0" id="ss_jpn2_gif" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_115-57_ja.gif">
                </a>
              </span><br>
              <script type="text/javascript" src="//seal.globalsign.com/SiteSeal/gs_image_115-57_ja.js" defer="defer"></script>
              <a href="https://www.sslcerts.jp/" target="_blank">SSLとは?</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
<?php
unset($_SESSION['csrfToken']);
endif;
?>





  <div>
    <div class="goTop"><a href="#" class="topBtn" id="topBtn"><img src="/images/icn_arrow.png" /></a></div>
    <div id="footer">
    <div id="footer01">
      <div class="footer01Contents">
        <div class="tabs">
          <div class="tab-buttons">
            <span class="content1">企業情報</span>
            <span class="content2">ニュース一覧</span>
            <span class="content3">製品情報</span>
            <span class="content4">研究開発</span>
            <span class="content5">サステナビリティ</span>
            <span class="content6">株主・投資家情報</span>
            <span class="content7">採用情報</span>
            <span class="content8">お問い合わせ</span>
            <div id="lamp" class="content1"></div>
          </div>
          <div class="tab-content">
            <div class="content1">
              <ul class="tabMenu-01">
                <li class="tabMenu-01__item"><a href="../company_info/">企業情報</a></li>
              </ul>
              <ul class="tabMenu-02">
                <li class="tabMenu-02__item"><a href="../company_info/summary.html">会社概要</a></li>
                <li class="tabMenu-02__item"><a href="../company_info/message.html">代表挨拶</a></li>
                <li class="tabMenu-02__item"><a href="../company_info/organization.html">組織図</a></li>
                <li class="tabMenu-02__item"><a href="../company_info/history.html">沿革・歴史</a></li>
                <li class="tabMenu-02__item"><a href="../company_info/project.html">事業紹介</a></li>
                <li class="tabMenu-02__item"><a href="../company_info/stronghold.html">生産拠点</a></li>
              </ul>
            </div>

            <div class="content2">
              <ul class="tabMenu-01">
                <li class="tabMenu-01__item"><a href="../news/">ニュース一覧</a></li>
              </ul>
            </div>

            <div class="content3">
              <ul class="tabMenu-01">
                <li class="tabMenu-01__item"><a href="../kbs_products/">製品情報</a></li>
              </ul>
              <ul class="tabMenu-02">
                <li class="tabMenu-02__item"><a href="../kbs_products/filament.html">フィラメント</a></li>
                <li class="tabMenu-02__item"><a href="../kbs_products/textile.html">テキスタイル</a></li>
                <li class="tabMenu-02__item"><a href="../kbs_products/seihin.html">製品</a></li>
                <li class="tabMenu-02__item"><a href="../kbs_products/belimafamily.html">ベリーマ®Xシリーズ</a></li>
              </ul>
            </div>

            <div class="content4">
              <ul class="tabMenu-01">
                <li class="tabMenu-01__item"><a href="../reseach_development/">研究開発</a></li>
              </ul>
            </div>

            <div class="content5">
              <ul class="tabMenu-02">
                <li class="tabMenu-02__item"><a href="../sustainability/environment.html">環境への取り組み</a></li>
                <li class="tabMenu-02__item"><a href="../sustainability/society.html">社会への取り組み</a></li>
              </ul>
            </div>

            <div class="content6">
              <ul class="tabMenu-01">
                <li class="tabMenu-01__item"><a href="https://www.seiren.com/invest/" target="_blank">株主・投資家情報</a></li>
              </ul>
            </div>

            <div class="content7">
              <ul class="tabMenu-01">
                <li class="tabMenu-01__item"><a href="https://recruit.kbseiren.com/opening/" target="_blank">採用情報</a></li>
              </ul>
            </div>

            <div class="content8">
              <ul class="tabMenu-01">
                <li class="tabMenu-01__item"><a href="/inquiry-mail/">お問い合わせ</a></li>
              </ul>
            </div>
          </div>
        </div>

        <p class="footEnglish"><a href="/english/"><span>EN</span></a></p>
      </div>
    </div>	
    <div id="footer03">
      <ul class="footNavi-m clearfix">
        <li class="footNavi-m__item"><a href="/company_info/"><span>企業情報</span></a></li>
        <li class="footNavi-m__item"><a href="/news/"><span>ニュース一覧</span></a></li>
        <li class="footNavi-m__item"><a href="/kbs_products/"><span>製品情報</span></a></li>
        <li class="footNavi-m__item"><a href="/reseach_development/"><span>研究開発</span></a></li>
        <li class="footNavi-m__item"><a href="/sustainability/environment.html"><span>サステナビリティ</span></a></li>
        <li class="footNavi-m__item"><a href="https://www.seiren.com/invest/" target="_blank"><span>株主・投資家情報</span></a></li>
        <li class="footNavi-m__item"><a href="https://recruit.kbseiren.com/opening/" target="_blank"><span>採用情報</span></a></li>
        <li class="footNavi-m__item"><a href="/inquiry-mail/"><span>お問い合わせ</span></a></li>
      </ul>
    </div>	

    <div id="footer02">
      <div class="footer02Contents clearfix">
        <ul class="footerLink clearfix">
          <li class="footerLink__item"><a href="https://www.seiren.com/privacy/" target="_blank">プライバシーポリシー</a></li>
          <li class="footerLink__item"><a href="https://www.seiren.com/about/" target="_blank">ご利用条件・免責事項</a></li>
        </ul>
        <small class="copyright">© 2016 KB SEIREN LTD.</small>
      </div>
    </div>
	</div>
</div>
</body>
</html>