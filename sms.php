<?php

require_once 'facilitamovelsms.php';

$username = 'user0';
$password = 'pass0';

$destinatario = 'dest0'; // telefone do destinatario incluindo o DDD
$mensagem = 'msg0';

$facilita = new FacilitaMovelSms($username, $password);
$facilita->send_sms($destinatario, $mensagem);

