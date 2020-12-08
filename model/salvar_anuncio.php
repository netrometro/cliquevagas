<?php
require("../controllers/autentication.php");
require("persistency/db.php");
//print_r($_POST);
// verifica se foram enviados os post
if (isset($_POST['precisase']) && $_POST['precisase'] != "" ) {
    $precisase = pg_escape_string($_POST['precisase']);
    $descricao = pg_escape_string($_POST['descricao']);
    $telefone = pg_escape_string($_POST['telefone']);
    $email = pg_escape_string($_POST['email']);
    $site = pg_escape_string($_POST['site']);
    $endereco = pg_escape_string($_POST['endereco']);
    $dias = pg_escape_string($_POST['dias']);

    $datainsercao = date("Y/m/d");
    $datavencimento = date('Y/m/d', strtotime($datainsercao . ' + ' . $dias .' days'));

    $codigoempresa = $_SESSION['usuario'];
   
   $sql  = "INSERT INTO anuncios (codigo_empresa, precisase, descricao, telefone, email, site, endereco, data_insercao, data_vencimento) ";
   $sql .= "VALUES ($codigoempresa, '$precisase', '$descricao', '$telefone', '$email', '$site', '$endereco', '$datainsercao', '$datavencimento');";
   $resultado = banco($sql);

    // faz uma pesquisa em favbusca para todos os e-mail que salvaram a busca (%LIKE%)
    $sql = "SELECT * FROM favbusca";
    $resultado = banco($sql);

    $emails = array();
    echo $precisase . '<br />';
    while ($linha = pg_fetch_assoc($resultado)) {
        $s1 = strtolower($precisase);
        $s2 = strtolower($linha['buscafavorita']);
        $pos = strpos($s1, $s2);
        if ($pos > -1) {
            array_push($emails, $linha['email']);
        }
    }
    //print_r($emails);
    //echo "<p>" . count($emails) . "<p/>";

    require_once("../phpmailer/class.phpmailer.php");

    // Apenas, se tiver ao menos um resultado faz...
    if (count($emails) > 0) {
        // Entra em um laço de repetição
        foreach ($emails as $emaill) {
            // Envia um e-mail para cada e-mail do resultado
            $mail = new PHPMailer();
            $mail->IsSMTP();		        // Ativar SMTP
            $mail->SMTPDebug = 1;		    // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
            $mail->SMTPAuth = true;		    // Autenticação ativada
            $mail->SMTPSecure = 'ssl';	    // SSL REQUERIDO pelo GMail
            $mail->Host = 'smtp.gmail.com';	// SMTP utilizado
            $mail->Port = 465;  		    // A porta 465 deverá estar aberta em seu servidor
            $mail->Username = getenv("EMAIL");
            $mail->Password = getenv("PASSWORD_EMAIL");
            $mail->SetFrom(getenv("EMAIL"), "Clique Vagas Caruaru");
            $mail->Subject = "Chegou uma oportunidade";
            $mail->IsHtml(true);

            $datavencimento = date_create($datavencimento);
            $datavencimento = date_format($datavencimento, 'd-m-Y');

            $body  = "<html><body>";
            $body .= "<p><h3>Precisa-se de $precisase </p></h3>";
            $body .= "<p>$descricao</p>";
            $body .= "<p><strong>Contato:</strong></p>";
            $body .= "<p>$telefone</p>";
            $body .= "<p>$email</p>";
            $body .= "<p>$site</p>";
            $body .= "<p>$endereco</p>";
            $body .= "<p>Vencimento da proposta $datavencimento</p>";
            $body .= "</body></html>";

            $mail->Body = $body;
            $mail->AddAddress($emaill);
            if(!$mail->Send()) {
                echo 'Mail error: '.$mail->ErrorInfo;
            } else {
                echo 'Mensagem enviada! ' . $email;
            }
        }
    }
   header("Location: ../perfil.php");
} else
    header("Location: ../erroformulario.html");
?>