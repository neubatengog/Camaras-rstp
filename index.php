<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type='text/javascript' src='js/jwplayer.js'></script>
   
    <title>Camaras2</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS for the '3 Col Portfolio' Template -->
    <link href="css/portfolio-item.css" rel="stylesheet">


    <script type="text/javascript">
         function cambiarVideo(filename,titulo,imagen) {
            jwplayer("video").setup({
            file: filename ,
            image: imagen,
            type:'rtmp',
            autostart:'true',
            flashplayer: "player/jwplayer.swf",
            fallback: 'true',
            width: 750,
            height: 480,
            bufferlength: '15',
            streamer:'rtmp://direccionipdelservidorstreaming/flvplayback',
            title: titulo,
            });

        jwplayer('video').load();
         jwplayer('video').play();
        }
    
    </script>
</head>

<body>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://direccionipdelservidor/camaras/">Camaras</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling 
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#about">About</a>
                    </li>
                    <li><a href="#services">Services</a>
                    </li>
                    <li><a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Principal
                    <small>Camara 1</small>
                </h1>
            </div>

            

        </div>

        <div class="row">

            <div class="col-md-8">
                <div id='video'></div>
            </div>
            <script type='text/javascript'>
                jwplayer('video').setup({
                file:'camara1.flv',
                type:'rtmp',
                autostart:'true',
                flashplayer: "player/jwplayer.swf",
                fallback : 'true',
                width: 750,
                height: 480,
                bufferlength: '15',
                streamer:'rtmp://direccionipdelservidorstreaming/flvplayback',
                title:'camara 1 mini',
                });

            </script>

            

        </div>

        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Otras vistas</h3>
            </div>

<script type="text/javascript">
setInterval(function(){
    $("#camara1").attr("src", "snapshots/camara1.jpg?"+new Date().getTime());
    $("#camara2").attr("src", "snapshots/camara2.jpg?"+new Date().getTime());
    $("#camara3").attr("src", "snapshots/camara3.jpg?"+new Date().getTime());
    $("#mini").attr("src", "snapshots/mini.jpg?"+new Date().getTime());
    $(this).load('snapshots/snap.php');
},9000);




</script>
            <div class="col-sm-3 col-xs-6">
                <a href="#" onclick="javascript:cambiarVideo('camara3.flv','camara3', 'snapshots/camara3.jpg');">
                    <img class="img-responsive portfolio-item" id="camara3"  src="snapshots/camara3.jpg">
                </a>
            </div>


            <div class="col-sm-3 col-xs-6">
                <a href="#" onclick="javascript:cambiarVideo('camara2.flv','camara2', 'snapshots/camara2.jpg');">
                    <img class="img-responsive portfolio-item" id="camara2"  src="snapshots/camara2.jpg">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#" onclick="javascript:cambiarVideo('camara1.flv','camara1', 'snapshots/camara1.jpg');">
                    <img class="img-responsive portfolio-item" id="camara1" src="snapshots/camara1.jpg">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#" onclick="javascript:cambiarVideo('mini.flv','mini', 'snapshots/mini.jpg');">
                    <img class="img-responsive portfolio-item" id="mini" src="snapshots/mini.jpg">
                </a>
            </div>

         

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; InterAktiv.cl</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
