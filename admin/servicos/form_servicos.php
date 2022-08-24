<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Serviçoes</title>
    <link rel="stylesheet" type="text/css "href="../css/formatacao.css">
</head>
<body>
    
    <form name="frm_login" action="cadastro_servicos.php" method="post">
        <div id="principal">

            <label>Título</label>
            <input name="txt_titulo" type="text" class="input_01">

            <label>Descrição</label>
            <input name="txt_descricao" type="text" class="input_01">

            <label>Icone</label>
            <select class="select_01">
                <option value="bi bi-brightness-high"> bi bi-brightness-high </option>
                <option value="bi bi-card-checklist"> bi bi-card-checklists </option>
                <option value="bi bi-briefcase"> bi bi-briefcase </option>
            </select>

            <input name="btn_enviar" type="submit" value="Enviar" class="btn">
        </div>
    </form>
    
</body>
</html>