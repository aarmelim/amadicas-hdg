<?php	
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>
<?php $db = open_database(); ?>
<?php 
    require_once('functions-filmes.php');
    index();    
?>

<?php 
    include(HEADER_TEMPLATE); 
?>

<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Filmes</h2>
        </div>
        <div class="col-sm-6 text-right h2"> 
            <a class="btn btn-primary" href="add-filmes.php">
                <i class="fa fa-plus"></i> 
                Novo Filme
            </a> 
            <a class="btn btn-default" href="filmes.php">
                <i class="fa fa-refresh"></i> 
                Atualizar
            </a> 
        </div>
    </div>
</header>

<?php if (!empty($_SESSION['message'])) : ?> 
    <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert"> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button> 
        <?php echo $_SESSION['message']; ?> 
    </div> 
<?php endif; ?>

<hr>
<?php if ($db) : ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th width="30%">Nome do Filme</th>
                <th>Data em que vi o filme</th>
            </tr>
        </thead>
        <tbody> 
            <?php if ($filmes) : ?> 
                <?php foreach ($filmes as $filme) : ?> 
                    <tr>
                        <td><?php echo $filme['id']; ?></td>
                        <td><?php echo $filme['nome_filme']; ?></td>
                        <td><?php echo $filme['data_criacao']; ?></td>
                        <td class="actions text-right"> 
                            <a href="view-filmes.php?id=<?php echo $filme['id']; ?>" class="btn btn-sm btn-success">
                                <i class="fa fa-eye"></i> 
                                Visualizar
                            </a> 
                            <a href="edit-filmes.php?id=<?php echo $filme['id']; ?>" class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil"></i> 
                                Editar
                            </a> 
                            <a href="delete-filmes.php?id=<?php echo $filme['id']; ?>" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-filme="<?php echo $filme['id']; ?>"> 
                                <i class="fa fa-trash"></i> 
                                Excluir 
                            </a> 
                        </td>
                    </tr> 
                <?php endforeach; ?> 
            <?php else : ?> 
            <tr>
                <td colspan="6">Nenhum registro encontrado.</td>
            </tr> 
            <?php endif; ?> 
        </tbody>
    </table>
<?php else : ?> <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>
<?php endif; ?>
<?php include('modal-filmes.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>