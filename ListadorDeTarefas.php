<?php
// Arquivo onde as tarefas serão salvas
$arquivo = "tarefas.json";

// Carrega tarefas existentes
$tarefas = file_exists($arquivo) ? json_decode(file_get_contents($arquivo), true) : [];

// Adicionar tarefa
if (isset($_POST['nova_tarefa']) && trim($_POST['nova_tarefa']) !== '') {
    $tarefas[] = ["texto" => htmlspecialchars($_POST['nova_tarefa']), "concluida" => false];
    file_put_contents($arquivo, json_encode($tarefas, JSON_PRETTY_PRINT));
    header("Location: index.php");
    exit;
}

// Marcar como concluída
if (isset($_GET['concluir'])) {
    $id = (int) $_GET['concluir'];
    if (isset($tarefas[$id])) {
        $tarefas[$id]['concluida'] = !$tarefas[$id]['concluida'];
        file_put_contents($arquivo, json_encode($tarefas, JSON_PRETTY_PRINT));
    }
    header("Location: index.php");
    exit;
}

// Excluir tarefa
if (isset($_GET['excluir'])) {
    $id = (int) $_GET['excluir'];
    if (isset($tarefas[$id])) {
        unset($tarefas[$id]);
        $tarefas = array_values($tarefas); // Reindexa
        file_put_contents($arquivo, json_encode($tarefas, JSON_PRETTY_PRINT));
    }
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listador de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .tarefa-concluida { text-decoration: line-through; color: gray; }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">📋 Lista de Tarefas</h1>

    <!-- Formulário de nova tarefa -->
    <form method="POST" class="d-flex mb-4">
        <input type="text" name="nova_tarefa" class="form-control me-2" placeholder="Digite uma nova tarefa..." required>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>

    <!-- Lista de tarefas -->
    <ul class="list-group">
        <?php if (empty($tarefas)): ?>
            <li class="list-group-item text-center text-muted">Nenhuma tarefa adicionada.</li>
        <?php else: ?>
            <?php foreach ($tarefas as $id => $tarefa): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="<?= $tarefa['concluida'] ? 'tarefa-concluida' : '' ?>">
                        <?= $tarefa['texto'] ?>
                    </span>
                    <div>
                        <a href="?concluir=<?= $id ?>" class="btn btn-sm btn-success">
                            <?= $tarefa['concluida'] ? 'Desmarcar' : 'Concluir' ?>
                        </a>
                        <a href="?excluir=<?= $id ?>" class="btn btn-sm btn-danger" onclick="return confirm('Excluir esta tarefa?')">Excluir</a>
                    </div>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</div>
</body>
</html>
