<?php
$request_body = file_get_contents('php://input'); //送信されてきたbodyを取得(クエリ形式）
parse_str($request_body, $data); // クエリを配列に格納

// 直接叩いたとき対策
if ($data == "") {
  echo "invalid access:";
  exit();
}

//担当者メール
$_TO_TANTO_EMAIL = array();
$_TO_TANTO_EMAIL[] = "info@example.com";
$_TO_TANTO_EMAIL[] = "info2@example.com";

// 配列から展開
$name = $data['name'];
$nameKana = $data['nameKana'];
$postalCode = $data['postalCode'];
$addressLevel = $data['addressLevel'];
$addressLine = $data['addressLine'];
$tel = $data['tel'];
$mail = $data['mail'];
$kind = $data['kind'];
$contents = $data['contents'];

$from_email = "info@example.com";
$from_name = "お問い合わせ";

//お客様向け
$reply_txt = file_get_contents('reply.txt');

$subject = "お問い合わせメールを受け付けました";
$reply_txt = str_replace('{{name}}', $name, $reply_txt);
$reply_txt = str_replace('{{nameKana}}', $nameKana, $reply_txt);
$reply_txt = str_replace('{{postalCode}}', $postalCode, $reply_txt);
$reply_txt = str_replace('{{addressLevel}}', $addressLevel, $reply_txt);
$reply_txt = str_replace('{{addressLine}}', $addressLine, $reply_txt);
$reply_txt = str_replace('{{tel}}', $tel, $reply_txt);
$reply_txt = str_replace('{{mail}}', $mail, $reply_txt);
$reply_txt = str_replace('{{kind}}', $kind, $reply_txt);
$reply_txt = str_replace('{{contents}}', $contents, $reply_txt);

send_mail($mail, $from_email, $from_name, $subject, $reply_txt);


//担当者向け
$subject = "お問い合わせメール（ $kind ）";
$mail_txt = file_get_contents('mail.txt');
$mail_txt = str_replace('{{name}}', $name, $mail_txt);
$mail_txt = str_replace('{{nameKana}}', $nameKana, $mail_txt);
$mail_txt = str_replace('{{postalCode}}', $postalCode, $mail_txt);
$mail_txt = str_replace('{{addressLevel}}', $addressLevel, $mail_txt);
$mail_txt = str_replace('{{addressLine}}', $addressLine, $mail_txt);
$mail_txt = str_replace('{{tel}}', $tel, $mail_txt);
$mail_txt = str_replace('{{mail}}', $mail, $mail_txt);
$mail_txt = str_replace('{{kind}}', $kind, $mail_txt);
$mail_txt = str_replace('{{contents}}', $contents, $mail_txt);

$mail_txt = str_replace('{{DATE}}', date('Y/m/d H:i:s', time()), $mail_txt);
$mail_txt = str_replace('{{USER_AGENT}}', $_SERVER['HTTP_USER_AGENT'], $mail_txt);
$mail_txt = str_replace('{{REMOTE_ADDR}}', $_SERVER['REMOTE_ADDR'], $mail_txt);
$mail_txt = str_replace('{{REMOTE_HOST}}', $_SERVER['REMOTE_HOST'], $mail_txt);

foreach ($_TO_TANTO_EMAIL as $mail_tanto) {
  send_mail($mail_tanto, $from_email, $from_name, $subject, $mail_txt);
}

// デバッグ用
echo print_r($data, true);

//
function send_mail($to_email, $from_email, $from_name, $subject, $mailbody)
{
  $header = "";
  mb_language('uni');
  mb_internal_encoding('utf8');
  $header .= 'From:' . mb_encode_mimeheader($from_name) . "<$from_email>\n";
  $content = $mailbody;

  if (mb_send_mail($to_email, $subject, $content, $header)) {
    return true;
  } else {
    return false;
  }
}
