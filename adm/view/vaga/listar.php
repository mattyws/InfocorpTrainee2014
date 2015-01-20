<form id="form-vagas">
    <a href="?page=formulario-adicionar-vaga" >Adicionar</a>
    <table id="listar-vagas" style="">
        <tr>
            <th>Cargo</th>
            <th>Empresa</th>
            <th>Salario</th>
            <th>Quantidade de Vagas</th>
            <th>Resumo</th>
            <th>Arquivo</th>
        </tr>

        <?php foreach ($vagas as $vaga) { ?>
            <tr>
                <td><?= $vaga["cargo"] ?></td>
                <td><?= $vaga["empresa"] ?></td>
                <td><?= $vaga["salario"] ?></td>
                <td><?= $vaga["quantidade"] ?></td>
                <td><?= $vaga["resumo"] ?></td>
                <td><?= $vaga["arquivo"] ?></td>
            </tr>
        <?php } ?>
    </table>
</form>