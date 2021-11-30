<?php
$orderDirClass = $orderDir;

$orderDir = $orderDir === 'ASC' ? 'DESC' : 'ASC';
?>
<table class="table table-striped table-dark table-bordered">
    <caption>Pokemon List</caption>
    <thead>
    <tr>
        <th colspan="6" class="text-center">TOTAL Pokemon <?= $totalUsers ?>. Page <?=$page?> of <?= $numPages ?></th>
    </tr>
    <tr>
        <th class="<?= $orderBy === 'id_leggendari' ? $orderDirClass : '' ?>">
            <a href="<?= $pageUrl ?>?<?=$orderByQueryString?>&orderDir=<?=$orderDir?>&orderBy=id_leggendari">
                Id Leggendari</a>
        </th>
        <th class="<?= $orderBy === 'nome' ? $orderDirClass : '' ?>">
            <a href="<?= $pageUrl ?>?<?=$orderByQueryString?>&orderDir=<?=$orderDir?>&orderBy=nome">
                Nome
            </a>
        </th>
        <th class="<?= $orderBy === 'tipo1' ? $orderDirClass : '' ?>">
            <a href="<?= $pageUrl ?>?<?=$orderByQueryString?>&orderDir=<?=$orderDir?>&orderBy=tipo1">
                Tipo 1</a>
        </th>
        <th class="<?= $orderBy === 'tipo2' ? $orderDirClass : '' ?>">
            <a href="<?= $pageUrl ?>?<?=$orderByQueryString?>&orderDir=<?=$orderDir?>&orderBy=tipo2">
                Tipo 2
            </a>
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($users) {

    foreach ($users as $user) { ?>

        <tr>
            <td><?= $user['id_leggendari'] ?></td>
            <td><?= $user['nome'] ?></td>
            <td><?= $user['tipo1'] ?></td>
            <td><?= $user['tipo2'] ?></td>
            
        </tr>

        <?php
    }
    ?>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="6" class="text-center">
            <?php
            require_once 'navigation.php';
            ?>
        </td>
    </tr>
    </tfoot>

    <?php
    } else {

        echo '<tr><td colspan="6" class="text-center"> <h2>No Records found</h2></td></tr>';
    }
    ?>

</table>