<?php 
    require_once('functions-filmes.php');
    view($_GET['id']);    
?>
<?php 
    include(HEADER_TEMPLATE); 
?>

<h2>Filme <?php echo $filme['id']; ?></h2>

<hr>

<?php if (!empty($_SESSION['message'])) : ?> 
    <div class="alert alert-<?php echo $_SESSION['type']; ?>">
        <?php echo $_SESSION['message']; ?>
    </div> 
<?php endif; ?>

<dl class="dl-horizontal">
    <dt>Nome do Filme:</dt>
    <dd><?php echo $filme['nome_filme']; ?></dd>
    <dt>Descrição:</dt>
    <dd><?php echo $filme['descricao']; ?></dd>
    <dt>Data em que foi visto:</dt>
    <dd><?php echo $filme['data_criacao']; ?></dd>
</dl>
<div id="actions" class="row">
    <div class="col-md-12"> 
        <a href="edit-filmes.php?id=<?php echo $filme['id']; ?>" class="btn btn-primary">
            Editar
        </a> 
        <a href="filmes.php" class="btn btn-default">
            Voltar
        </a> 
    </div>
</div>

<?php 
    include(FOOTER_TEMPLATE); 
?>