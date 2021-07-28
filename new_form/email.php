<?php
    $cnpj = addslashes($_POST['cnpj']);
    $razao = addslashes($_POST['razao']);
    $fantas = addslashes($_POST['fantas']);
    $cnae = addslashes($_POST['cnae']);
    $fatu = addslashes($_POST['fatu']);
    $respon = addslashes($_POST['respon']);
    $telef = addslashes($_POST['telef']);
    $cel = addslashes($_POST['cel']);
    $imail = addslashes($_POST['imail']);
    $tsms = addslashes($_POST['tsms']);
    $vend = addslashes($_POST['vend']);
    $ender = addslashes($_POST['ender']);
    $numer = addslashes($_POST['numer']);
    $bairro = addslashes($_POST['bairro']);
    $cep = addslashes($_POST['cep']);
    $cidade = addslashes($_POST['cidade']);
    $estad = addslashes($_POST['estad']);
    $dias = addslashes($_POST['dias']);
    $horar = addslashes($_POST['horar']);
    $banco = addslashes($_POST['banco']);
    $agencia = addslashes($_POST['agencia']);
    $conta = addslashes($_POST['conta']);
    $debit = addslashes($_POST['debit']);
    $cred = addslashes($_POST['cred']);
    $parc = addslashes($_POST['parc']);
    $parc1 = addslashes($_POST['parc1']);
    $antec = addslashes($_POST['antec']);
    $antec1 = addslashes($_POST['antec1']);
    $fixa = addslashes($_POST['fixa']);
    $movel = addslashes($_POST['movel']);
    $commer = addslashes($_POST['commer']);
    $tef = addslashes($_POST['tef']);
    $quant = addslashes($_POST['quant']);
    $alug = addslashes($_POST['alug']);

    $to = "julliewjk@gmail.com";
    $subject = "Formulário - Attiva Pagamentos";
    $body = "CNPJ: ".$cnpj."\r\n"
            "RAZÃO SOCIAL:".$razao."\r\n"
            "NOME FANTASIA:".$fantas."\r\n"
            "CNAE:".$cnae."\r\n"
            "FATURAMENTO:".$fatu."\r\n"
            "RESPONSÁVEL:".$respon."\r\n"
            "TELEFONE:".$telef."\r\n"
            "CELULAR:".$cel."\r\n"
            "E-MAIL:".$imail."\r\n"
            "TELEFONE PARA SMS:".$tsms."\r\n"
            "VENDEDOR:".$vend."\r\n"
            "ENDEREÇO:".$ender."\r\n"
            "Nº:".$numer."\r\n"
            "BAIRRO: ".$bairro."\r\n"
            "CEP:".$cep."\r\n"
            "CIDADE:  ".$cidade."\r\n"
            "ESTADO:".$estad."\r\n"
            "DIAS DE FUNCIONAMENTO:".$dias."\r\n"
            "HORÁRIO:".$horar."\r\n"
            "BANCO:".$banco."\r\n"
            "AGÊNCIA:".$agencia."\r\n"
            "CONTA:".$conta."\r\n"
            "DÉBITO:".$debit."\r\n"
            "CRÉDITO Á VISTA:".$cred."\r\n"
            "PARCELADO 2X6:".$parc."\r\n"
            "PARCELADO 7X12:".$parc1."\r\n"
            "ANTECIPAÇÃO:".$antec."\r\n"
            "ATENCIPAÇÃO AUTOMÁTICA:".$antec1."\r\n"
            "PÓS FIXA:".$fixa."\r\n"
            "PÓS MÓVEL:".$movel."\r\n"
            "E-COMMERCE:".$commer."\r\n"
            "TEF:".$tef."\r\n"
            "QUANTIDADE:".$quant."\r\n"
            "ALUGUEL:".$alug."\r\n"

    $header = "From: jullierosawjk@gmail.com"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("O E-mail não pode ser enviado");
    }
?>