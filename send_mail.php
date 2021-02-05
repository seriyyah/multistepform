<?php
// getting posts by name
$price= $_POST['price'];
$model = $_POST['img_swap_id'];
$structure = $_POST['img_swap_id_f'];
$front_length = $_POST['front_length'];
$left_length = $_POST['left_length'];
$right_length = $_POST['right_length'];

$name = $_POST['mf_name'];
$number = $_POST['mf_phone'];
$new_post = $_POST['mf_email'];

$mail_body = "Почта: $new_post<br>Имя: $name <br>Номер: $number ";
$size = "Длина фронтальной части: $front_length (м | см | мм) <br> Длина левой части: $left_length (м | см | мм)<br>Длина правой части: $right_length (м | см | мм)";

// setting up sender and body

$to = "sergiypuzikov47@gmail.com";
$from = "info@rumebel.ru";
$subject = "Квиз Форма";

// message body
$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>

<table>
<thead>
  <tr>
    <th>Предполагаемая стоимость кухни:</th>
    <th>  $price.руб</th>
    <th></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Модель кухни:</td>
    <td> $model</td>
    <td></td>
  </tr>
  <tr>
    <td>Форма кухни: </td>
    <td> $structure</td>
    <td></td>
  </tr>
  <tr>
    <td>Размеры гарнитура: </td>
    <td> $size</td>
    <td></td>
  </tr>
  <tr>
    <td>Персональные данные:</td>
    <td>$mail_body</td>
    <td></td>
  </tr>
</tbody>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@rumebel.ru>' . "\r\n";

// sending mail by stendard function mail()

mail($to,$subject,$message,$headers);
?>
<div class="row well alert alert-success"><?php echo "<pre>";print_R($_POST);?></div>