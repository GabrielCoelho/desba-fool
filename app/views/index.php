<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./public/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
    <section class="container">
        <form action="/addMsg" method="POST">
        <table>
            <tr>
                <th><label for="Nome">Nome: </label></th>
                <th><input id="Nome" name="name"  type="text" placeholder="Ex: José Carlos"></th>
            </tr>
            <tr>
                <td><label for="Mensagem">Mensagem:</label></td>
                <td><textarea name="msg" id="Mensagem" cols="30" rows="10"></textarea></td>
            </tr>
        </table>
        <button style="width: 350px;">Enviar</button>
        </form>
    </section>    
    <section class="container">
        <?php foreach ($rev as $x) {?>
            <div>
                <table>
                    <tr><th><?= $x['name'] ?></th></tr>
                    <tr><td><?= $x['msgEnv'] ?></td></tr>
                    <tr><td><?= $x['data'] ?></td></tr>
                </table>
            </div>
        <?php }?>
    </section>
    </body>    
</html>