<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Argau</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="www.argau.com.br">
        <meta name="author" content="Wellinton David Chyla perazzoli">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        
        <style>
            .thumbnail{
                padding: 5px;
                background: transparent;
                color: silver;
                text-align: center;
            }
            .thumbnail:hover{
                background: white;
                text-decoration: none;
                color: #428bca;
                -webkit-transition: color 0.8s ease-in, border-color 0.8s ease-in, background 0.8s ease-in;
                -moz-transition: color 0.8s ease-in, border-color 0.8s ease-in, background 0.8s ease-in;
                -ms-transition: color 0.8s ease-in, border-color 0.8s ease-in, background 0.8s ease-in;
                -o-transition: color 0.8s ease-in, border-color 0.8s ease-in, background 0.8s ease-in;
                transition: color 0.8s ease-in, border-color 0.8s ease-in, background 0.8s ease-in;
            }
            .thumbnail img
            {
                height: 200px;
            }
        </style>
    </head>

    <body style="background: #222;">
        <div class="container" style="background: #e7e7e7">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.html">Argau</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="index.html">Inicio</a>
                                </li>
                                <li>
                                    <a href="sobre.html">Sobre</a>
                                </li>
                                <li>
                                    <a href="servicos.html">Servicos</a>
                                </li>
                                <li>
                                    <a href="produtos.html">Produtos</a>
                                </li>
                                <li class="active">
                                    <a href="modelos.php">Modelos</a>
                                </li>
                                <li>
                                    <a href="contato.html">Contato</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    
                    <div class="row clearfix" style="margin-top: 60px;">
                        <div class="col-md-12">
                            <h3>Modelos</h3>
                            <hr>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <?php
                            $modelos = scandir('./images/modelos');
                            foreach($modelos as $key=>$img):
                                if($img == '.' || $img == '..' || $img == 'Thumbs.db') continue;
                                $path = utf8_encode($img);
                                $path = str_replace(' ', '%20', $path);
                                $path = str_replace('ú', '%FA', $path);
                                $path = str_replace('ç', '%E7', $path);
                                $path = str_replace('ã', '%E3', $path);
                                $path = str_replace('í', '%ED', $path);
                                $path = './images/modelos/'.$path;
                                $name = utf8_encode(str_replace('.jpg', '', $img));
                            ?>
                            <div class="col-md-4">
                                <a href="<?=$path?>" data-lightbox="image-<?=$key?>" data-title="<?=$name?>" class="col-xs-10 col-xs-offset-1 thumbnail">
                                    <img alt="<?=$name?>" src="<?=$path?>" />
                                    <h4><?=$name?></h4>
                                </a>
                            </div>
                            <?php
                            endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
