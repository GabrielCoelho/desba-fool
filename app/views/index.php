<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./public/css/bootstrap.css" rel="stylesheet">
        <link href="./public/css/style.css" rel="stylesheet">
    </head>
    <body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col"><h1>Desaba-fool</h1></div>
                <div class="col">
                    <nav>
                        <ul>
                            <li><a href="http://github.com/GabrielCoelho/desba-fool">Sobre</a></li>
                            <li><a href="http://gabrielcoelho.github.io/">Autor</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="container">
        <form action="/addMsg" method="POST">        
            <div class="container">
                <div class="row">
                <div class="col"><label for="Nome">Nome: </label></div>
                <div class="col"><input id="Nome" name="name"  type="text" placeholder="Ex: José Carlos"></div>
                <div class="w-100"></div>
                <div class="col"><label for="Mensagem">Mensagem:</label></div>
                <div class="col"><textarea name="msg" id="Mensagem" cols="18" rows="2"></textarea></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </section>    
    <div class="container divisor">
        <div class="row justify-content-end">
            <div class="col-7">
                <h2><u>Desabafos</u></h2>
            </div>
        </div>
    </div>
    <section class="container" id="mensagem">
        <div class="row">
            <?php foreach ($rev as $x) {?>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-12">
                <table>
                    <tr><th><?= $x['name'] ?></th></tr>
                    <tr><td class="msg"><?= $x['msgEnv'] ?></td></tr>
                    <tr><td class="data"><?php 
                        $return = new \DateTime($x['data']);
                        echo $return->format('d/m/Y H:i:s'); /*Alterando o formato da data*/
                    ?></td></tr>
                </table>
            </div>
            <?php }?>
        </div>
    </section>
    
    </body>    
</html>