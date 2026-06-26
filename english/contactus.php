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
  $name         = sanitize($_POST['name_r']);
  $section      = sanitize($_POST['section']);
  $company      = sanitize($_POST['company']);
  $address      = sanitize($_POST['address_r']);
  $zip          = sanitize($_POST['zip']);
  $country      = sanitize($_POST['country']);
  $tel          = sanitize($_POST['tel_r']);
  $fax          = sanitize($_POST['fax']);
  $email        = sanitize($_POST['Email_r']);
  $ask          = sanitize($_POST['ask_r']);
}
?>
<!DOCTYPE html>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta http-equiv="Content-Script-Type" content="text/javascript">

<title>kb seiren/contact us</title>

<script type="text/javascript" src="javascript.js"></script>

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>

<link href="css/global.css" rel="stylesheet" type="text/css">

<link href="css/contact.css" rel="stylesheet" type="text/css">

<style>
  html {
    scroll-behavior: initial !important;
  }
</style>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-T3D4NWF');</script>
<!-- End Google Tag Manager -->
</head>



<body onLoad="MM_preloadImages('img/menu1_f2.jpg', 'img/menu2_f2.jpg', 'img/menu3_f2.jpg', 'img/menu4_f2.jpg', 'img/menu5_f2.jpg', 'img/menu6_f2.jpg', 'img/menu7_f2.jpg', 'img/menu8_f2.jpg', 'img/menu9_f2.jpg', 'img/botton1_f2.jpg', 'img/botton2_f2.jpg', 'img/botton3_f2.jpg')">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3D4NWF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



<div class="globalwrap"> 



<div class="header1"> 

	<h1><img src="img/rogo.gif" alt="KB SEIREN.LTD" width="200" height="15"></h1>	<div class="smlMenu">

		<img src="img/square.gif" alt="SEIREN CO., LTD" width="8" height="8"><a href="http://www.seiren.com/english/" target="_blank">SEIREN Co., Ltd.</a>

        <img src="img/square.gif" alt="Site Map" width="8" height="8"><a href="http://www.seiren.com/english/sitemap.html">Site Map</a>

		<img src="img/square.gif" alt="Contact Us" width="8" height="8"><a href="https://www.kbseiren.com/english/contactus.php">Contact Us</a>

		<img src="img/square.gif" alt="Japanese" width="8" height="8"><a href="http://www.kbseiren.com/" target="_blank">Japanese</a>

        <img src="img/square.gif" alt="Japanese" width="8" height="8"><a href="https://www.kbseiren.com/chinese/minimax.html" target="_blank">chinese</a>

    </div>

</div>



<div class="header2"> 

    <table border="0" cellpadding="0" cellspacing="0">

      <tr> 

        <td><a href="http://www.seiren.com/english/" target="_top" onClick="MM_nbGroup('down', 'group1', 'menu1', '',1)" onMouseOver="MM_nbGroup('over', 'menu1', 'img/menu1_f2.jpg', '',1)" onMouseOut="MM_nbGroup('out')"><img src="img/menu1_f2.jpg" alt="HOME" name="menu1" width="35" height="35" border="0" onload=""></a></td>

        <td><a href="http://www.seiren.com/english/bus-top.html" target="_top" onClick="MM_nbGroup('down', 'group1', 'menu3', '',1)" onMouseOver="MM_nbGroup('over', 'menu3', 'img/menu3_f2.jpg', '',1)" onMouseOut="MM_nbGroup('out')"><img src="img/menu3.jpg" alt="Business Fields" name="menu3" width="90" height="35" border="0" onload=""></a></td>

        <td><a href="http://www.seiren.com/english/maj-top.html" target="_top" onClick="MM_nbGroup('down', 'group1', 'menu2', '',1)" onMouseOver="MM_nbGroup('over', 'menu2', 'img/menu2_f2.jpg', '',1)" onMouseOut="MM_nbGroup('out')"><img src="img/menu2.jpg" alt="Major Businesses" name="menu2" width="89" height="35" border="0" onload=""></a></td>

        <td><a href="http://www.seiren.com/english/res-top.html" target="_top" onClick="MM_nbGroup('down', 'group1', 'menu4', '',1)" onMouseOver="MM_nbGroup('over', 'menu4', 'img/menu4_f2.jpg', '',1)" onMouseOut="MM_nbGroup('out')"><img src="img/menu4.jpg" alt="Research and Development" name="menu4" width="89" height="35" border="0" onload=""></a></td>

        <td><a href="http://www.seiren.com/english/dis-top.html" target="_top" onClick="MM_nbGroup('down', 'group1', 'menu5', '',1)" onMouseOver="MM_nbGroup('over', 'menu5', 'img/menu5_f2.jpg', '',1)" onMouseOut="MM_nbGroup('out')"><img src="img/menu5.jpg" alt="Distinctive Technology" name="menu5" width="89" height="35" border="0" onload=""></a></td>

        <td><a href="http://www.seiren.com/english/env-top.html" target="_top" onClick="MM_nbGroup('down', 'group1', 'menu6', '',1)" onMouseOver="MM_nbGroup('over', 'menu6', 'img/menu6_f2.jpg', '',1)" onMouseOut="MM_nbGroup('out')"><img src="img/menu6.jpg" alt="Environmental Conservation" name="menu6" width="90" height="35" border="0" onload=""></a></td>

        <td><a href="http://www.seiren.com/english/info-top.html" target="_top" onClick="MM_nbGroup('down', 'group1', 'menu7', '',1)" onMouseOver="MM_nbGroup('over', 'menu7', 'img/menu7_f2.jpg', '',1)" onMouseOut="MM_nbGroup('out')"><img src="img/menu7.jpg" alt="corporate information" name="menu7" width="80" height="35" border="0" onload=""></a></td>

        <td><a href="http://www.seiren.com/english/plant-hoku.html" target="_top" onClick="MM_nbGroup('down', 'group1', 'menu8', '',1)" onMouseOver="MM_nbGroup('over', 'menu8', 'img/menu8_f2.jpg', '',1)" onMouseOut="MM_nbGroup('out')"><img src="img/menu8.jpg" alt="Hokuriku Synthetic Fibers Plant" name="menu8" width="98" height="35" border="0" onload=""></a></td>

        <td><a href="http://www.seiren.com/english/plant-naga.html" target="_top" onClick="MM_nbGroup('down', 'group1', 'menu9', '',1)" onMouseOver="MM_nbGroup('over', 'menu9', 'img/menu9_f2.jpg', '',1)" onMouseOut="MM_nbGroup('out')"><img src="img/menu9.jpg" alt="Nagahama Plant" name="menu9" width="90" height="35" border="0" onload=""></a></td>

      </tr>

    </table>

</div><!-- header2 -->



<h2 class="bar"><img src="img/contact/contact_us.jpg" alt="contact us" width="750" height="36"></h2>



<p class="title"><img src="img/square.gif" width="8" height="8"> To inquire or send comments, please fill in the fields below.  <span class="red">(Fields marked with <img src="img/ast_red.gif"> are required.)</span></p>



    <div class="blueline-top15"> 





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
	<div class="content">

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" name="contact" id="contact">

<table border="0" cellpadding="0" cellspacing="0" class="contactTable">

  <tr>

    <td width="2%"><span class="red">*</span></td>

    <td width="27%"><label for="name_r">Your Name</label></td>

    <td width="71%"><input name="name_r" type="text" id="name_r" size="30" maxlength="40" value="<?php if($name){echo $name;} ?>" required></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td><label for="section">Section/Division</label></td>

    <td><input name="section" type="text" id="section" size="50" maxlength="40" value="<?php if($section){echo $section;} ?>"></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td><label for="company">Company/Organization</label></td>

    <td><input name="company" type="text" id="company" size="50" maxlength="40" value="<?php if($company){echo $company;} ?>"></td>

  </tr>

  <tr>

    <td><span class="red">*</span></td>

    <td><label for="address_r">Address</label></td>

    <td><input name="address_r" type="text" id="address_r" size="50" maxlength="50" value="<?php if($address){echo $address;} ?>" required></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

  	<td><label for="zip">Postal/Zip code</label></td>

    <td><input name="zip" type="text" id="zip" size="30" maxlength="40" value="<?php if($zip){echo $zip;} ?>"></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td><label for="country">Country</label></td>

    <td><input name="country" type="text" id="country" size="30" maxlength="30" value="<?php if($country){echo $country;} ?>"></td>

  </tr>

  <tr>

    <td><span class="red">*</span></td>

    <td><label for="tel_r">TEL</label></td>

    <td><input name="tel_r" type="text" id="tel_r" size="30" maxlength="30" value="<?php if($tel){echo $tel;} ?>" required></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td><label for="fax">FAX</label></td>

    <td><input name="fax" type="text" id="fax" size="30" maxlength="30" value="<?php if($fax){echo $fax;} ?>"></td>

  </tr>

  <tr>

    <td><span class="red">*</span></td>

    <td><label for="Email_r">E-mail</label></td>

    <td><input name="Email_r" type="email" id="Email_r" size="30" maxlength="30" value="<?php if($email){echo $email;} ?>" required></td>

  </tr>

  <tr>

    <td><span class="red">*</span></td>

    <td><label for="ask_r">Your comment or inquiry</label></td>

    <td>

      <textarea name="ask_r" cols="50" rows="8" id="ask_r" required><?php if($ask){echo $ask;} ?></textarea></td>

  </tr>

</table>



<div class="submitBtn">

	<input type="submit" name="btnConfirm" value="Submit" />　

      　　<input name="reset" type="reset" value="Reset" />

    <input type="hidden" name="csrf" value="<?php echo $token; ?>">

</div>



</form>

	   

	</div><!--content-->
<?php
endif;
?>





<?php
//----------------------------------------------------------------------
// 確認画面
//----------------------------------------------------------------------
if($pageFlag === 'confirm'):
?>
	<div class="content">

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" name="contact" id="contact">

<h2>Confirmation of content of input</h2>

<p>Are you sure to submit the following form?</p>

<table border="0" cellpadding="0" cellspacing="0" class="contactTable">

  <tr>

    <td width="2%"><span class="red">*</span></td>

    <td width="27%">Your Name</td>

    <td width="71%"><?php echo $name; ?></td>

    </tr>

  <tr>

    <td>&nbsp;</td>

    <td>Section/Division</td>

    <td><?php echo $section; ?></td>

    </tr>

  <tr>

    <td>&nbsp;</td>

    <td>Company/Organization</td>

    <td><?php echo $company; ?></td>

    </tr>

  <tr>

    <td><span class="red">*</span></td>

    <td>Address</td>

    <td><?php echo $address; ?></td>

    </tr>

  <tr>

    <td>&nbsp;</td>

  	<td>Post/Zip code</td>

  	<td><?php echo $zip; ?></td>

    </tr>

  <tr>

    <td>&nbsp;</td>

    <td>Country</td>

    <td><?php echo $country; ?></td>

    </tr>

  <tr>

    <td><span class="red">*</span></td>

    <td>TEL</td>

    <td><?php echo $tel; ?></td>

    </tr>

  <tr>

    <td>&nbsp;</td>

    <td>FAX</td>

    <td><?php echo $fax; ?></td>

    </tr>

  <tr>

    <td><span class="red">*</span></td>

    <td>E-mail</td>

    <td><?php echo $email; ?></td>

    </tr>

  <tr>

    <td><span class="red">*</span></td>

    <td>Your comment or inquiry</td>

    <td><?php echo $ask; ?></td>

    </tr>

</table>

<input type="submit" value=" Send " id="botan" name="btnSubmit">
<?php if($name): ?><input type="hidden" name="name_r" value="<?php echo $name; ?>"><?php endif; ?>
<?php if($section): ?><input type="hidden" name="section" value="<?php echo $section; ?>"><?php endif; ?>
<?php if($company): ?><input type="hidden" name="company" value="<?php echo $company; ?>"><?php endif; ?>
<?php if($address): ?><input type="hidden" name="address_r" value="<?php echo $address; ?>"><?php endif; ?>
<?php if($zip): ?><input type="hidden" name="zip" value="<?php echo $zip; ?>"><?php endif; ?>
<?php if($country): ?><input type="hidden" name="country" value="<?php echo $country; ?>"><?php endif; ?>
<?php if($tel): ?><input type="hidden" name="tel_r" value="<?php echo $tel; ?>"><?php endif; ?>
<?php if($fax): ?><input type="hidden" name="fax" value="<?php echo $fax; ?>"><?php endif; ?>
<?php if($email): ?><input type="hidden" name="Email_r" value="<?php echo $email; ?>"><?php endif; ?>
<?php if($ask): ?><input type="hidden" name="ask_r" value="<?php echo $ask; ?>"><?php endif; ?>
<input type="hidden" name="csrf" value="<?php echo sanitize($_POST['csrf']); ?>">

</form>

	</div><!--content-->
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
$emailTo = $email;

$subjectAdminMail = 'Thank you.KB SEIREN., LTD.'; // 管理者宛メールのタイトル
$subjectCustomerMail = 'Thank you.KB SEIREN., LTD.'; // お客様宛メールのタイトル
$weekArray = array('SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT');
$weekData = date('w');
$sendDatetime1 = date('j/n/Y');
$sendDatetime2 = date('H:i');
$sendDatetime = $sendDatetime1 . '[' . $weekArray[$weekData] . '] ' . $sendDatetime2;
$headers = 'From:KB SEIREN<' . $emailFrom . '>';

// 管理者宛メールの本文
$contentAdminMail = <<< EOD
You have received "Comment or Inquiry" by the online contact form
from Mr./Mrs. $name .

=================================================================
DATE:$sendDatetime

-----------------------------------------------------------------

Your Name: Mr./Mrs. $name
Section/Division: $section
Company/Organaization: $company
Address: $address
Postal/Zip code: $zip
Country: $country
TEL: $tel
FAX: $fax
E-mail: $email

-----------------------------------------------------------------
Your comment or inquiry: $ask

=================================================================

Contact us today to thank you.

*****************************************
KB SEIREN., LTD.
https://www.kbseiren.com/english
*****************************************
EOD;

// お客様宛メールの本文
$contentCustomerMail = <<< EOD
Mr./Mrs. $name

Thank you for sending your comment or inquiry to KB SEIREN., LTD.
Below is the information submitted to your online Contact form.

=================================================================
DATE:$sendDatetime

-----------------------------------------------------------------

Your Name: Mr./Mrs. $name
Section/Division: $section
Company/Organaization: $company
Address: $address
Postal/Zip code: $zip
Country: $country
TEL: $tel
FAX: $fax
E-mail: $email

-----------------------------------------------------------------
Your comment or inquiry: $ask

=================================================================

Contact us today to thank you.

*****************************************
KB SEIREN., LTD.
https://www.kbseiren.com/english
*****************************************
EOD;
/* メール内容設定 ここまで */

if($_POST['csrf'] === $_SESSION['csrfToken']) {
  mail($emailTo, $subjectCustomerMail, $contentCustomerMail, $headers, '-f'.$emailFrom);
  mail($emailFrom, $subjectAdminMail, $contentAdminMail, $headers, '-f'.$emailFrom);
}
?>
	<div class="content">

		<?php if($_POST['csrf'] === $_SESSION['csrfToken']): ?><p>Thank you.<br /> Your inquiry/comment has been submitted.</p><?php endif; ?>
		<?php if($_POST['csrf'] !== $_SESSION['csrfToken']): ?><p>System error.<br /> Please try again later.</p><?php endif; ?>

		<p class="totop"><a href="http://www.seiren.com/english/">TOP</a></p>

	</div><!--content-->
<?php
unset($_SESSION['csrfToken']);
endif;
?>





	</div><!--blueline-top15-->

	<div class="center"><br>

		<table width="110" border="0" align="center" cellpadding="2" cellspacing="0" title="CLICK TO VERIFY: This site uses a GlobalSign SSL Certificate to secure your personal information.">

			<tr>

				<td width="110" align="center" valign="top"><span id="ss_img_wrapper_110-55_flash_en"> <a href="http://www.globalsign.com/" target="_blank"> <img alt="Globalsign SSL Site Seal" border="0" id="ss_eng2_flash" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_110-55_en.gif"> </a> </span>

					<script type="text/javascript" src="//seal.globalsign.com/SiteSeal/gs_flash_110-55_en.js"></script></td>

			</tr>

		</table>

		<br>

	</div>

<div class="icon"><img src="img/icon_home.gif" alt="Home" width="16" height="9"><a href="http://www.seiren.com/english/">Home</a></div>





    <table border="0" cellspacing="0" cellpadding="0" class="footer">

       <tr>         

         <td width="466" align="left">Copyright(C) 2007 KB SEIREN, LTD. All Rights Reserved.</td>

         <td width="12"><img src="img/square.gif" alt="Site Map" width="8" height="8"></td>

         <td width="58"><a href="http://www.seiren.com/english/sitemap.html">Site Map</a></td>

         <td width="12"><img src="img/square.gif" alt="Contact Us" width="8" height="8"></td>

         <td width="68"><a href="https://www.kbseiren.com/english/contactus.php">Contact Us</a></td>

         <td width="12"><img src="img/square.gif" alt="Japanese" width="8" height="8"></td>

         <td width="65"><a href="http://www.kbseiren.com/" target="_blank">Japanese</a></td>

         <td width="12"><img src="img/square.gif" alt="Japanese" width="8" height="8"></td>

         <td width="45"><a href="https://www.kbseiren.com/chinese/minimax.html" target="_blank">chinese</a></td>

       </tr>

    </table>



</div><!-- globalwrap -->

</body>

</html>

