<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Projetos</title>
    <link rel="stylesheet" type="text/css "href="../css/formatacao.css">
</head>
<body>
    
    <form name="frm_projetos" action="cadastro_projeto.php" method="post" enctype="multipart/form-data">
        <div id="principal">

            <label>Descrição</label>
            <input name="txt_descricao" type="text" class="input_01">

            <label>Foto</label>
            <input name="txt_arquivo" type="file" class="input_01">

            <label>Status</label>
            <select name="txt_status" class="select_01">
                <option value="A"> Ativo </option>
                <option value="I"> Inativo </option>
            </select>

            <input name="btn_enviar" type="submit" value="Enviar" class="btn">
        </div>
    </form>
    
</body>
</html>