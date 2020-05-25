<?php 
    require_once('functions-filmes.php');
    edit();    
?>

<?php 
    include(HEADER_TEMPLATE); 
?>

<h2>Atualizar Filme</h2>
<form action="edit-filmes.php?id=<?php echo $filme['id']; ?>" method="post">
    <hr />
    <div class="row">
        <div class="form-group col-md-8"> 
            <label for="nome_filme">Nome do Filme</label> 
            <input type="text" class="form-control" name="filme['nome_filme']" value="<?php echo $filme['nome_filme']; ?>">
        </div>
        <div class="form-group col-md-4"> 
            <label for="nota_filme">Nota do Filme</label> 
            <input type="text" class="form-control" name="filme['nota_filme']" value="<?php echo $filme['nota_filme']; ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12"> 
            <label for="descricao">Descrição</label> 
            <input type="text" class="form-control" name="filme['descricao']" value="<?php echo $filme['descricao']; ?>"> 
        </div>
    </div>
    <div id="actions" class="row">
        <div class="col-md-12"> 
            <button type="submit" class="btn btn-primary">
                Salvar
            </button> 
            <a href="filmes.php" class="btn btn-default">
                Cancelar
            </a> 
        </div>
    </div>
</form>

<?php 
    include(FOOTER_TEMPLATE); 
?>