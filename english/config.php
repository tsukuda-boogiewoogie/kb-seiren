<?php



// {{{ 1. SMTPサーバ設定(Windowsのみ)        SMTP Server Configuration (Windows only)

/**

 * 

 * If you deploy this script to the host on Windows OS,

 * you need to set both a SMTP server and its port number.

 * Please modify the following two constants or check entities of

 * 'SMTP' and 'smtp_port' in the php.ini file.

 *

 * For other OS users, ex. Linux, or BSD,

 * you need to setup the local sendmail program correctly,

 * sometime it has to have done before the compiling process of PHP itself.

 */

/**

 * SMTPサーバー

 *

 * SMTP server.

 * Host name or IP address.

 */

define('SMTP_SERVER', '202.253.106.144'); // [*] 

/**

 * SMTPサーバーのポート番号

 * 

 * SMTP port number.

 * Generally 25.

 */

define('SMTP_PORT', 25);

// }}}



// {{{ 2. 控えメール設定          Mail Configuration

/**

 * 送信先メールアドレス

 *

 * Destination mail address which copy mail send to.

 */

//define('MAIL_SENDTO',  ''); // [*] 

define('MAIL_SENDTO',  'kbs.info@kb.seiren.com'); // [*]



define('MAIL_SENDTO2',  1); // 0=お客様に返信しない。1=する

//メールフォームのメールアドレス項目のname名

define('Sir_ADDRESS', 'Email_r');



$mail_header = 

<<< DOC_END

Thank you for sending your comment or inquiry to KB SEIREN., LTD.

Below is the information submitted to your online Contact form.



DOC_END;



define('MAIL_HEADER',$mail_header);



$mail_footer = <<< DOC_END



*****************************************

KB SEIREN., LTD.

http://www.kbseiren.com/english

*****************************************

DOC_END;



define('MAIL_FOOTER',$mail_footer);



define('name_r',	'Your Name');

define('section',	'Section/Division');

define('company',	'Company/Organization');

define('address_r',	'Address');

define('zip',		'Postal/Zip code');

define('country','Country');

define('tel_r','TEL');

define('fax',' FAX');

define('Email_r','E-mail');

define('ask_r','Your comment or inquiry');

/**

 * From:に表示するメールアドレス

 *

 * Mail address for From header.

 */

define('MAIL_FROM',    'kbs.info@kb.seiren.com'); // [*] 

/**

 * 控えメールの件名

 *

 * Copy mail's subject.

 */

define('MAIL_SUBJECT', 'Thank you.KB SEIREN., LTD.');

define('SUBJECT_SELF', 'お問合せがありました。KB SEIREN., LTD.');



/**

 * 控えメールのエンコーディング (Ver.0.21~)

 * 'UTF-8': 多言語対応の控えメール、'ISO-2022-JP': 日本語のみの控えメール

 *

 * Copy mail's encoding. (Ver.0.21~)

 * Multilingual message must be required 'UTF-8' encoding.

 */

define('MAIL_ENCODING', 'UTF-8');

// }}}



/**

 * 管理者パスワード

 * Webでメッセージを閲覧するときに使用。空欄の場合、閲覧機能は使用不可

 *

 * Administrator's password. 

 * If the password is empty, the functionality of viewing messages is disabled.

 */

define('ADMIN_PASSWORD', 'hirakegoma'); // [*]

/**

 * (Ver.0.23b~) gzip転送の可否 (0: しない、1: する)

 * 転送内容を圧縮して帯域を節約する。XREAでは1にできません(2007-11現在)

 */

define('GZIP_ENCODING', 0);



// {{{ 3. エラーメッセージ          Error messages.

/**

 * (Ver.0.21~) 必須項目が入力されなかったときのエラーメッセージ

 *

 * (Ver.0.21~) Error message if the required field is empty.

 */

define('ERRMSG_REQUIRED', 'Please go back to the form and fill in the required fields. ');

// }}}



// {{{ 4. タイムゾーン、日時表示の設定          Timezone setting and Date&time format.

/**

 * タイムゾーン

 * タイムゾーンが日本時間でない場合(例: Yahoo!ジオシティーズのジオプラス。GMT+0000)に設定する。

 *

 */

define('APP_TIMEZONE',  '');

/**

 * 時刻フォーマット。

 * phpのdate()関数のフォーマット文字列を受け付ける。

 * 参照: 

 *

 * Date & time format string.

 * See; 

 */

define('APP_TIMEFORMAT', 'Y-m-d H:i:s');

// }}}



// {{{ 対スパム設定          Antispam settings.

/**

 * スパム投稿を受けたときの処理

 * 1: ログを記録のみ、2: ログを記録し、リクエストを拒否(403 Forbidden)

 *

 * Processing mode when the form script recieved spam messages.

 * 1: Save log only  2: Save log and reject the request by 403 Forbidden.

 */

define('ANTISPAM_LEVEL', 1); // 



// {{{ 5. データファイル設定        Data File Configuration.



define('MAILFORM_DATAFILE', 'data/mailform.cgi');

define('MAILFORM_HEAD', 'data/mailhead.txt');

define('MAILFORM_HEAD2', 'data/mailhead2.txt');

define('MAILFORM_FOOT', 'data/mailfoot.txt');



define('ANTISPAM_HOSTFILE', 'data/antispam_host.txt');

define('ANTISPAM_LOGFILE',  'data/antispam_log.txt');

define('ANTISPAM_LOCKFILE', 'data/antispam.lock');

// }}}



// {{{ 6. テンプレートファイル        Template Files Configuration.

/* 

 * Following constans define the path of template html files.

 * It is needless to make template files public,

 * So hiding these files may be better thing.

 */

define('HTML_DEFAULT', '_1default.html');

define('HTML_CONFIRM', '_2confirm.html');

define('HTML_THANKS',  '_3thanks.html');

define('HTML_VIEW',    '_4view.html');

