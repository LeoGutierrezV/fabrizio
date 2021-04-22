<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
     
    <link rel="shortcut icon" href="https://i.imgur.com/QyKOcLs.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('/static/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/static/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/static/css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('/static/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/static/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/static/fonts/fond.css') }}">
</head>
<body>
<div class="site-wrap">

    @yield('body')
    
    <script src="{{ asset('/static/js/jquery-1.js') }}"></script>
    <script src="{{ asset('/static/js/bootstrap.bundle.min.js') }}"></script>

    <script type="text/javascript" src="/static/js/main.js" ></script>
    <script src="/static/js/jquery-3.3.1.min.js"></script>
    <script src="/static/js/jquery-ui.js"></script>
    <script src="/static/js/popper.min.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
    <script src="/static/js/owl.carousel.min.js"></script>
    <script src="/static/js/jquery.magnific-popup.min.js"></script>
    <script src="/static/js/aos.js"></script>
    <script src="/static/js/main2.0.js"></script>
    <script src="/static/js/jquery.magnific-popup.min.js"></script>
    <script src="/static/js/magnific-popup-options.js"></script>
    <script src="/static/js/preguntasFrecuentes.js"></script>
    <script src="/static/js/categorias.js"></script>


  
    {{-- <script>
      $(document).ready(function(){
        $("#button-addon2").click(function(){
          var codigo = $("#c_code").val();
          $.ajax({
            url:"./php/validarcodigo.php",
            data:{
              codigo:codigo
            },
            method:'POST'
          }).done(function(respuesta){
            alert(respuesta);
          })
        });
      });
      
    </script> --}}

</div>
      
</body>
</html>