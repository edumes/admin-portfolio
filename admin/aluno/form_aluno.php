<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Aluno</title>
    <link rel="stylesheet" type="text/css "href="../css/formatacao.css">
</head>
<body>
    
    <form name="frm_login" action="cadastro_aluno.php" method="post">
        <div id="principal">

            <label>Nome</label>
            <input name="txt_nome" type="text" class="input_01">

            <label>Data de Nascimento</label>
            <input name="txt_data_nascimento" type="date" class="input_01">

            <label>Sexo</label>
            <select name="txt_sexo" class="select_01">
                <option value="H"> Homem </option>
                <option value="M"> Mulher </option>
            </select>

            <label>CEP</label>
            <input name="txt_cep" type="text" class="input_01">

            <label>Logradouro</label>
            <input name="txt_logradouro" type="text" class="input_01">

            <label>Número</label>
            <input name="txt_numero" type="text" class="input_01">

            <label>Complemento</label>
            <input name="txt_complemento" type="text" class="input_01">

            <label>Cidade</label>
            <input name="txt_cidade" type="text" class="input_01">

            <label>Estado</label>
            <select name="txt_estado" class="select_01">
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
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
                <option value="EX">Estrangeiro</option>
            </select>

            <label>E-mail</label>
            <input name="txt_email" type="text" class="input_01">

            <label>Telefone</label>
            <input name="txt_telefone" type="text" class="input_01">

            <label>Celular</label>
            <input name="txt_celular" type="text" class="input_01">

            <label>Escolaridade</label>
            <input name="txt_escolaridade" type="text" class="input_01">

            <label>Serie</label>
            <input name="txt_serie" type="text" class="input_01">

            <label>Ano de Conclusão</label>
            <input name="txt_ano_conclusao" type="date" class="input_01">

            <label>Escola</label>
            <input name="txt_escola" type="text" class="input_01">

            <label>Objetivo</label>
            <input name="txt_objetivo" type="text" class="input_01">

            <input name="btn_enviar" type="submit" value="Enviar" class="btn">
        </div>
    </form>
    
</body>
</html>