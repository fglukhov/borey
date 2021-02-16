<?php

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: office@minsvyazcc.ru' . "\r\n";

$body = '

<meta charset="utf-8">
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="width:100%;">
  <tr>
    <td style="padding:20px;background:#f3f3f3;font-family: Arial,sans-serif;">

      <table cellpadding="0" cellspacing="0" border="0" align="center" background="#ffffff"
             style="max-width:700px;background: #fff; box-shadow: 0 10px 30px 0 rgba(0,0,0,.3);">

        <tr>

          <td style="background:#000;padding:0 10px;">

            <table cellpadding="0" cellspacing="0" border="0" width="100%" style="width:100%;">
              <tr>
                <td style="padding:20px 20px 20px 20px;text-align:center;">
                  <img src="http://test.fglukhov.tmweb.ru/mincom/images/logo.png" alt="Цифровой акселератор" width="100">
                </td>
                <td style="padding:20px 20px 20px 0;">
                  <img src="http://test.fglukhov.tmweb.ru/mincom/images/logo-ttl.png" alt="Цифровой акселератор" width="106">
								</td>
              </tr>
            </table>

          </td>

        </tr>

        <tr>

          <td
            style="color: #000000;	background: #fff;	padding: 30px 30px 0 30px;	text-align: center;	font-size: 24px;	line-height: 30px;	font-weight: bold;">

            Новая заявка.

          </td>

        </tr>

        <tr>

          <td
            style="background: #fff;padding: 20px 30px 0 30px;text-align: center;font-size: 15px;line-height: 22px;color: #273057;">

            Поступила заявка с сайта.

          </td>

        </tr>

        <tr>

          <td style="background: #fff;padding:30px;">

            <table cellpadding="0" cellspacing="0" border="0" width="100%">
              <tr>
                <td style="padding:20px;border:1px solid #273057;">
                  <table cellpadding="0" cellspacing="0" border="0" width="100%">
';

if ($_POST['type']) {
  $body.='
  
      <tr>
        <td style="font-family:Verdana,Helvetica,sans-serif;font-size:13px;line-height:22px;color:#000;vertical-align:top;padding:0 60px 1px 0;white-space:nowrap;">Форма:</td>
        <td style="font-family:Verdana,Helvetica,sans-serif;color:#000;font-size:15px;line-height:22px;vertical-align:top;padding:0 0 4px 0;">'.$_POST['type'].'</td>
      </tr>  
  
  ';
}

if ($_POST['name']) {
  $body.='
  
      <tr>
        <td style="font-family:Verdana,Helvetica,sans-serif;font-size:13px;line-height:22px;color:#000;vertical-align:top;padding:0 60px 1px 0;white-space:nowrap;">Имя:</td>
        <td style="font-family:Verdana,Helvetica,sans-serif;color:#000;font-size:15px;line-height:22px;vertical-align:top;padding:0 0 4px 0;">'.$_POST['name'].'</td>
      </tr>  
  
  ';
}


if ($_POST['company']) {
  $body.='
  
      <tr>
        <td style="font-family:Verdana,Helvetica,sans-serif;font-size:13px;line-height:22px;color:#000;vertical-align:top;padding:0 60px 1px 0;white-space:nowrap;">Организация:</td>
        <td style="font-family:Verdana,Helvetica,sans-serif;color:#000;font-size:15px;line-height:22px;vertical-align:top;padding:0 0 4px 0;">'.$_POST['company'].'</td>
      </tr>  
  
  ';
}




if ($_POST['phone']) {
  $body.='
  
      <tr>
        <td style="font-family:Verdana,Helvetica,sans-serif;font-size:13px;line-height:22px;color:#000;vertical-align:top;padding:0 60px 1px 0;white-space:nowrap;">Телефон:</td>
        <td style="font-family:Verdana,Helvetica,sans-serif;color:#000;font-size:15px;line-height:22px;vertical-align:top;padding:0 0 4px 0;">'.$_POST['phone'].'</td>
      </tr>  
  
  ';
}

if ($_POST['email']) {
  $body.='
  
      <tr>
        <td style="font-family:Verdana,Helvetica,sans-serif;font-size:13px;line-height:22px;color:#000;vertical-align:top;padding:0 60px 1px 0;white-space:nowrap;">Почта:</td>
        <td style="font-family:Verdana,Helvetica,sans-serif;color:#000;font-size:15px;line-height:22px;vertical-align:top;padding:0 0 4px 0;">'.$_POST['email'].'</td>
      </tr>  
	  
  ';
}


if ($_POST['message']) {
	$body.='

		<tr>
			<td style="font-family:Verdana,Helvetica,sans-serif;font-size:13px;line-height:22px;color:#000;vertical-align:top;padding:0 60px 1px 0;white-space:nowrap;">Сообщение:</td>
			<td style="font-family:Verdana,Helvetica,sans-serif;color:#000;font-size:15px;line-height:22px;vertical-align:top;padding:0 0 4px 0;">'.$_POST['message'].'</td>
		</tr>

	';
}

if ($_POST['sum']) {
	$body.='

		<tr>
			<td style="font-family:Verdana,Helvetica,sans-serif;font-size:13px;line-height:22px;color:#000;vertical-align:top;padding:0 60px 1px 0;white-space:nowrap;">Сумма:</td>
			<td style="font-family:Verdana,Helvetica,sans-serif;color:#000;font-size:15px;line-height:22px;vertical-align:top;padding:0 0 4px 0;">'.$_POST['sum'].'</td>
		</tr>

	';
}

if ($_POST['term']) {
	$body.='

		<tr>
			<td style="font-family:Verdana,Helvetica,sans-serif;font-size:13px;line-height:22px;color:#000;vertical-align:top;padding:0 60px 1px 0;white-space:nowrap;">Текущая просрочка:</td>
			<td style="font-family:Verdana,Helvetica,sans-serif;color:#000;font-size:15px;line-height:22px;vertical-align:top;padding:0 0 4px 0;">'.$_POST['term'].'</td>
		</tr>

	';
}

if ($_POST['rate']) {
	$body.='

		<tr>
			<td style="font-family:Verdana,Helvetica,sans-serif;font-size:13px;line-height:22px;color:#000;vertical-align:top;padding:0 60px 1px 0;white-space:nowrap;">Тариф:</td>
			<td style="font-family:Verdana,Helvetica,sans-serif;color:#000;font-size:15px;line-height:22px;vertical-align:top;padding:0 0 4px 0;">'.$_POST['rate'].'</td>
		</tr>

	';
}

$body.='

                  </table>

                </td>

              </tr>

              <tr>
                <td style="text-align: center;font-size: 12px;line-height: 16px;color:#ccc;padding: 20px 0 27px 0;">
                  &copy; 2020 «Цифровой акселератор»
                </td>
              </tr>

            </table>

          </td>
        </tr>
      </table>

    </td>
  </tr>
</table>

';

// Отправка письма пользователю, если указан email
/*
if ($_POST['email']) {
  mail($_POST['email'], $_POST['subject'], $body, $headers);
}
*/
// Отправка письма администратору

mail('minsvyazcc.ru', $_POST['subject'], $body, $headers);

//echo $body;

?>