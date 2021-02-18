<!DOCTYPE html>
<html>
    <head> <title>Gastos do estudante</title> </head>
    <body>
        <h1>Novo gasto </h1>
        <?=form_open('gastos/salvar')?>
            Data: <input type="date" name="data"/><br/>
            Descrição: <input type="text" name="descrição"/><br/>
            Valor: <input type="number" name="valor"/><br/>
            <button type="submit">Cadastrar</button>
            <button type="reset">Limpar</button>
        <?=form_close()?>    
	</body>
</html>