<?php
session_start();
include ('verifica_login_admin.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de clientes</title>
</head>
<body>
    <h1>Cadastro de clientes</h1>
    <form action="cadastrado.php" method="post">
        Nome: <input type="text" name="nome" placeholder="Digite seu nome completo" maxlength="40" size="30"/>
        CPF: <input type="text" name="cpf" placeholder="Digite seu CPF sem traços ou pontos." maxlength="11" size="15"/><br/>
        Apelido: <input type="text" name="apelido" placeholder="Se houver, digite um apelido" maxlength="20"/><bt/>
        Endereço: <input type="text" name="endereco" placeholder="Rua, avenida, bairo, etc." size="30" maxlength="30"/><br/>
        Cidade: <input type="text" name="cidade" placeholder="Sua cidade" maxlength="20"/><br/>
        Estado: <select name="estado" id="iestado">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Gtosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB" selected>Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            <option value="DF">Distrito Federal</option>
        </select><br/>
        Ponto de Referência: <input type="text" name="referencia" placeholder="Digite seu ponto de referência" maxlength="30" size="30"/><br/>
        Plano: <select name="plano" id="iplano">
            <option value="1">0.5 MB - RADIO</option>
            <option value="2">1 MB - RADIO</option>
            <option value="3">2 MB - RADIO</option>
            <option value="4">3 MB - RADIO</option>
            <option value="5">5 MB - RADIO</option>
            <option value="6">50 MB - FIBRA</option>
            <option value="7">100 MB - FIBRA</option>
            <option value="8">200 MB - FIBRA</option>
            <option value="9">500 MB - FIBRA</option>
            <option value="10">1 GB - FIBRA</option>
        </select><br/>
        Telefone: <input type="text" name="telefone" placeholder="(00)9 0000-0000" maxlength="15" size="10"/><br/>
        Dia do pagamento: <select name="diapagamento" id="idiapagamento"> 
            <?php
                for($c=1;$c<=30;$c++){
                    echo "<option value='$c'>$c</option>";
                }
            ?>
        </select><br/>
        <input type="submit" value="CADASTRAR"/>
    </form>
</body>
</html>