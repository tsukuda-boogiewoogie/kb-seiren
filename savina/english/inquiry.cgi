#!/usr/bin/perl

#
#                お問い合わせ用送信フォーム
#----------------#
#    初期設定    #
#----------------#----------------------------------------------------------------------

#このスクリプトのＵＲＬ(httpからフルパスで設定)
$reload = 'http://www.kbseiren.com/savina/english/inquiry.cgi';

#ありがとうメッセージのＵＲＬ(httpからフルパスで設定)
$location = 'http://www.kbseiren.com/savina/english/inquiry_thank.html';

#戻るページ
$modoru = 'http://www.kbseiren.com/savina/english/index.html';
$top = '_top';

#日本語コード変換らいぶらり
require './jcode.pl';

#入力方式(post/get)
$method = 'post';


#<!-------------------------------------------------------->
#■SENDMAILの設定
$sendmail = '../usr/sbin/sendmail';

#■受信先メールアドレス
$mailto = 'savina@kbseiren.co.jp';  #メインの事業体のアドレス
$mailto2 = 'nishimura@mon.ne.jp';  #その控えを送る。Cc宛て（但しお客様用には表示しません）
$webmaster ='nishimura@mon.ne.jp';   #システムの管理者などBcc宛
#■名称
$title = 'KB SEIREN., LTD';

#■ フォーム内容の保存ファイル名
$file = './inquiry.csv';

#■ ファイルロック(0=off,1=on)
$lock_key = 0;

#■確認用htmlテンプレート
$html = './inquiry_conf.html';
#---------------------------------------------------------------------------------------

#-------------フォームからの入力データ-------------#
if ($ENV{'REQUEST_METHOD'} eq "POST") { read(STDIN,$buffer,$ENV{'CONTENT_LENGTH'}); }
else { $buffer = $ENV{'QUERY_STRING'}; }

@pairs = split(/&/,$buffer);

$i = 0;
foreach $pair (@pairs) {

	($name, $value) = split(/=/, $pair);
	$name =~ tr/+/ /;
	$name =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
	$value =~ tr/+/ /;
	$value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;

	# 記録するデータはsjisに統一する
	&jcode'convert(*name,'sjis');
	&jcode'convert(*value,'sjis');

	$value =~ s/</&lt;/g;
	$value =~ s/>/&gt;/g;
	$value =~ s/://g;
	$value =~ s/,//g;
	$value =~ s/\r//g;
	$value =~ s/\n//g;
	
	$NAME[$i] = $name;
	if($FORM{$name} eq ""){
		$FORM{$name} = $value;
	}else{
		$FORM{$name} = "$FORM{$name}：$value";
	}
	$i++;
}

if ($FORM{'step'} == 1) { &kakunin; }
elsif ($FORM{'step'} == 2) { &sendmail;}
else { &error('error','Please try again.');}

#<!-------------------------------------------------------->
#     確認画面からメール送信まで
#<!-------------------------------------------------------->
sub kakunin {

#時刻取得
($sec,$min,$hour,$mday,$mon,$year,$wday,$yday,$isdst) = localtime(time);
if ($mon < 10) { $month = "0$mon"; }
if ($mday < 10)  { $mday  = "0$mday";  }
if ($sec < 10)   { $sec   = "0$sec";   }
if ($min < 10)   { $min   = "0$min";   }
if ($hour < 10)  { $hour  = "0$hour";  }
$month = ($mon + 1);
$years = ($year + 1900);
$wday = ('SUN','MON','TUE','WED','THU','FRI','SAT')[$wday];
$date_now = "$years/$month\/$mday/[$wday] $hour\:$min";
#タイトル欄に入力がない場合のデフォルト値
$subject = "KB SEIREN., LTD";

#■必須項目設定
	$mess1 = "";
	if($FORM{'name'} eq ""){$mess1 .= "Please enter Your Name.<br>\n";$chkflg =1;}
	if($FORM{'address'} eq ""){$mess1 .= "Please enter Address.<br>\n";$chkflg =1;}
	if($FORM{'tel'} eq ""){$mess1 .= "Please enter TEL.<br>\n";$chkflg =1;}
	if($FORM{'E-mail'} eq ""){$mess1 .= "Please enter E-mail.<br>\n";$chkflg =1;}
	if($FORM{'ask'} eq ""){$mess1 .= "Please enter Your comment or inquiry.<br>\n";$chkflg =1;}
#end
	#メールアドレスかどうかのチェック
   	if ($FORM{'E-mail'} =~ /\,/) {
		$mess1 .= " E-mail addrss contains comma(,).<BR>\n";
		$errorh = 1;
	}
	elsif ($FORM{'E-mail'} !~ /[\w\.\-]+\@[\w\.\-]+\.[a-zA-Z]{2,6}$/) {
		$mess1 .= "Please check your E-mail addrss.<BR>\n";
		$errorh = 1;
	}

	if($chkflg ==1){ 
		$mess1 .= "<a href=\"javascript:history.back()\"><font color=\"red\"><b>Please go back to the form and fill in the required fields. </b></font></a>\n";
	}else{
		$mess1 =  "Are you sure to submit the following form?<br>\n";
	}
	
#送信ボタン表示
	$sendcgi="";
	if($chkflg != 1){
	$sendcgi = <<EOF;
	  <input type="submit" name="Send" value="Send">
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="button" name="modoru" value="return" onClick="javascript:history.back()">
EOF
	}


#■↓$send_hidden　隠しパラメータセット
$send_hidden = <<EOF;
        <input type=hidden name="step" value=2>
        <input type=hidden name="day_stmp" value="$date_now">
		<input type=hidden name="name" value="$FORM{'name'}">
		<input type=hidden name="company" value="$FORM{'company'}">
		<input type=hidden name="division" value="$FORM{'division'}">
		<input type=hidden name="zip" value="$FORM{'zip'}">
		<input type=hidden name="address" value="$FORM{'address'}">
		<input type=hidden name="country" value="$FORM{'country'}">
		<input type=hidden name="tel" value="$FORM{'tel'}">
		<input type=hidden name="fax" value="$FORM{'fax'}">
		<input type=hidden name="E-mail" value="$FORM{'E-mail'}">
		<input type=hidden name="ask" value="$FORM{'ask'}">
EOF
#■end

#本文テンプレートhtml読み込み
open(DAT,"$html") || &msg("File Not Found $file");
@data = <DAT>;
close(DAT);

print "Content-type: text/html\n\n";

#■テンプレートへの変数セット
foreach $line (@data){
	$line =~ s/%mess1%/$mess1/;
	$line =~ s/%send_hidden%/$send_hidden/;
	$line =~ s/%sendcgi%/$sendcgi/;
	$line =~ s/%name%/$FORM{'name'}/;
	$line =~ s/%company%/$FORM{'company'}/;
	$line =~ s/%division%/$FORM{'division'}/;
	$line =~ s/%zip%/$FORM{'zip'}/;
	$line =~ s/%address%/$FORM{'address'}/;
	$line =~ s/%tel%/$FORM{'tel'}/;
	$line =~ s/%fax%/$FORM{'fax'}/;
	$line =~ s/%E-mail%/$FORM{'E-mail'}/;
	$line =~ s/%ask%/$FORM{'ask'}/;
	print "$line\n";	
}
#end

exit;
}


##<!-------------------------------------------------------->
##　　　CSVファイル保存
##<!-------------------------------------------------------->
sub csv_log {

#■フォームの入力項目の日本語取得
$output_N = "date\,name\,company\,division\,zip\,address\,country\,tel\,fax\,E-mail\,ask\n";
$output_V ="$FORM{'day_stmp'}\,$FORM{'name'}\,$FORM{'company'}\,$FORM{'division'}\,$FORM{'zip'}\,$FORM{'address'}\,$FORM{'country'}\,$FORM{'tel'}\,$FORM{'fax'}\,$FORM{'E-mail'}\,$FORM{'ask'}\n";
	

	### データファイルの読み込み
	open(DAT,"$file") || &msg("File Not Found $file");
	@data = <DAT>;
	close(DAT);

	$dt = @data;		# 保存件数取得

	# 保存データが無い場合のみ、入力項目をファイルへ出力
	if ($dt == 0) { 
		open(DAT,">$file") || &msg("File Not Found $file");
		print DAT $output_N;
		print DAT "\n";
		close(DAT);
	}

	# 入力内容をファイルへ出力
	open(DAT,">>$file") || &msg("File Not Found $file");
	if ($lock_key == 1) { flock(LOG,2); }   # File Lock
	print DAT $output_V;
	print DAT "\n";
	if ($lock_key == 1) { flock(LOG,8); }   # File UnLock
	close(DAT);
}

sub jis { 
	$msg = $_[0]; &jcode'convert(*msg, 'jis');
}

sub error {

	print "Content-type: text/html\n\n";
    print "<html><head>\n";
	print "<META HTTP-EQUIV=\"Content-type\" CONTENT=\"text/html; charset=utf-8\">\n";
	print "<title>$_[0]</title>\n";
	print "<!-- Google Tag Manager -->\n";
	print "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T3D4NWF');</script>\n";
	print "<!-- End Google Tag Manager -->\n";
	print "</head>\n";
	print "<body>\n";
	print "<!-- Google Tag Manager (noscript) -->\n";
	print "<noscript><iframe src='https://www.googletagmanager.com/ns.html?id=GTM-T3D4NWF' height='0' width='0' style='display:none;visibility:hidden'></iframe></noscript>\n";
	print "<!-- End Google Tag Manager (noscript) -->\n";
    print "<h1>$_[0]</h1>\n";
	print "<h3>$_[1]</h3>\n";
	print "※ <a href=\"javascript:history.back()\">return</a><br>\n";
	print "<p></body></html>\n";
	exit;
}
### Messege処理
sub msg {
	print "Content-type: text/html\n\n";
	print "<html><head>\n";
	print "<META HTTP-EQUIV=\"Content-type\" CONTENT=\"text/html; charset=utf-8\">\n";
	print "<title>$_[0]</title>\n";
	print "<!-- Google Tag Manager -->\n";
	print "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T3D4NWF');</script>\n";
	print "<!-- End Google Tag Manager -->\n";
	print "</head>\n";
	print "<body>\n";
	print "<!-- Google Tag Manager (noscript) -->\n";
	print "<noscript><iframe src='https://www.googletagmanager.com/ns.html?id=GTM-T3D4NWF' height='0' width='0' style='display:none;visibility:hidden'></iframe></noscript>\n";
	print "<!-- End Google Tag Manager (noscript) -->\n";
	print "<font size=5>\"$_[0]\"</font><br>\n";
	print "<p>\n";
	print "<font size=5>\n";
	print "<a href=\"$modoru\">To HOME</a>\n";
	print "</font>\n";
	print "<hr>\n";
	print "</body></html>\n";
	exit;
}
#<!-------------------------------------------------------->
#　メール送信
#<!-------------------------------------------------------->
sub sendmail {
	
	&csv_log;

#■管理者向けメールヘッダー
$message = <<EOF;
You have received "Comment or Inquiry" by the online contact form
from Mr./Mrs. $FORM{'name'}.

EOF
#■end

#■お客様向けメールヘッダー
$message2 = <<EOF;
Dear $FORM{'name'}

Thank you for sending your comment or inquiry to KB SEIREN., LTD.
Below is the information submitted to your online Contact form.
EOF
#■end

#■共通内容
$message3 = <<EOF;
=================================================================
▼DATE：$FORM{'day_stmp'}
-----------------------------------------------------------------
Your Name  ： $FORM{'name'}

Section/Division  ： $FORM{'section'}
Company/Organaization  ： $FORM{'company'}

Address  ： $FORM{'address'}
Post / zip code  ： $FORM{'zip'}
Country  ： $FORM{'country'}
TEL  ： $FORM{'tel'}
FAX   ：$FORM{'fax'}
E-mail  ： $FORM{'E-mail'}
-----------------------------------------------------------------
Your comment or inquiry：
   $FORM{'ask'}

EOF
#end

#■フッター
$message4 = <<EOF;
=================================================================

*****************************************
KB SEIREN., LTD.
http://www.kbseiren.com/english
savina\@kbseiren.co.jp
*****************************************

EOF
#end

&jcode'convert(*title,'jis');
$ref = $reload;
#<!-------------------------管理者向けメール送信------------------------------->
	if (!open(OUT,"| $sendmail -t")) { &error('system error','申し訳ありませんが何らかの原因で処理できません.'); }

	print OUT "X-Mailer: kansai gaigo\n";
	print OUT "X-HTTP-REFERER: $ref\n";
	print OUT "Errors-To: $webmaster\n";
	print OUT "To: $mailto\n";
	if($mailto2 ne ""){
		print OUT "Cc: $mailto2\n";
	}
	if($webmaster ne ""){
		print OUT "Bcc: $webmaster\n";
	}
	print OUT "From: $FORM{'E-mail'}\n";
	print OUT "Subject: $title\n";
	print OUT "Content-Transfer-Encoding: 7bit\n";
	print OUT "Content-Type: text/plain\; charset=\"ISO-2022-JP\"\n\n\n";
	
	&jcode'convert(*message, 'jis' ,'sjis');
	&jcode'convert(*message3, 'jis' ,'sjis');
	&jcode'convert(*message4, 'jis' ,'sjis');
	
	print OUT "$message\n";
	print OUT "$message3\n";
	print OUT "$message4\n";

	$host = $ENV{'REMOTE_HOST'};
	$addr = $ENV{'REMOTE_ADDR'};
	if ($host eq $addr) { $host = gethostbyaddr(pack('C4',split(/\./,$host)),2) || $addr; }
	close(OUT);


##----------------お客様向けメール送信------------------------------------
	if (!open(OUT2,"| $sendmail -t")) { &error('system error','申し訳ありませんが何らかの原因でお客様へ送信処理できません.'); }

	print OUT2 "X-Mailer: kansai gaigo\n";
	print OUT2 "X-HTTP-REFERER: $ref\n";
	print OUT2 "Errors-To: $mailto\n";
	print OUT2 "To: $FORM{'E-mail'}\n";
	print OUT2 "From: $mailto\n";
	print OUT2 "Subject: $title\n";
	print OUT2 "Content-Transfer-Encoding: 7bit\n";
	print OUT2 "Content-Type: text/plain\; charset=\"ISO-2022-JP\"\n\n\n";
	
	&jcode'convert(*message2, 'jis' ,'sjis');
	&jcode'convert(*message3, 'jis' ,'sjis');
	&jcode'convert(*message4, 'jis' ,'sjis');

	print OUT2 "$message2\n";
	print OUT2 "$message3\n";
	print OUT2 "$message4\n";
	
	$host = $ENV{'REMOTE_HOST'};
	$addr = $ENV{'REMOTE_ADDR'};
	if ($host eq $addr) { $host = gethostbyaddr(pack('C4',split(/\./,$host)),2) || $addr; }

	close(OUT2);

	print "Location: $location\n\n";
	exit;
}

