<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Skill</title>
    <link rel="stylesheet" type="text/css "href="../css/formatacao.css">
</head>
<body>
    
    <form name="frm_login" action="cadastro_skill.php" method="post">
        <div id="principal">

            <label>Porcentagem</label>
            <select name="txt_porcentagem" class="select_01">
                <option value="10"> 10% </option>
                <option value="20"> 20% </option>
                <option value="30"> 30% </option>
                <option value="40"> 40% </option>
                <option value="50"> 50% </option>
                <option value="60"> 60% </option>
                <option value="70"> 70% </option>
                <option value="80"> 80% </option>
                <option value="90"> 90% </option>
                <option value="100"> 100% </option>
            </select>

            <label>Descrição</label>
            <input name="txt_descricao" type="text" class="input_01">

            <input name="btn_enviar" type="submit" value="Enviar" class="btn">
        </div>
    </form>
    
</body>
</html>