<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @yield('seo')
    <link rel="stylesheet" href="{{asset('sitioWeb/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
  

    <header>
       
        <img class="logo" src="{{asset('imagen/'.$empresa->logo)}}" alt="Logo" >
        
        <!--BOTON RESPONSIVO-->
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>

       <nav class="nav" id="nav" >
            <button id="cerrar" class="cerrar"><i class="bi bi-x-lg"></i></button>
            <ul class="nav-list">
                <li><a href="#">INICIO</a></li>
                <li><a href="#misvis"></i>SOBRE NOSOTORS</a></li>
                <li><a href="#servis">SERVICIOS</a></li>
                <li><a href="#Contactos">CONTACTOS</a></li>
            </ul>
        </nav>
      
    </header>
    
      
   <main>
    
    @yield('content')

   </main>
   <footer id="Contactos" class="footer">
    <div class="footer-container">
       
        <div class="footer-section social-links">
            <h3>Redes Sociales</h3>
            <ul>
              @foreach ($redes as $item)
                <li><a href="{{$item->link}}"><i class="{{$item->icon}}"></i> {{$item->title}}</a></li>
               
                @endforeach
            </ul>
            
        </div>


        <div class="footer-section contacts">
            <h3>Contactos <i class="bi bi-person-lines-fill"></i></h3>
            <p><i class="bi bi-telephone-fill"></i> Teléfono: +123 456 789</p>
            <p><i class="bi bi-envelope-fill"></i> Email: info@example.com</p>
            <p><i class="bi bi-browser-safari"></i> Web: www.example.com</p>
        </div>


        <div class="footer-section location">
            

            <h3>Ubicación <i class="bi bi-geo-alt-fill"></i></h3>
            <p>Calle Falsa 123</p>
            <p>Ciudad, País</p>
            <p>Horario: Lun-Vie 9am - 6pm</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Jared Vega. Todos los derechos reservados.</p>
    </div>
</footer>

  

   
    <script src="{{asset('sitioWeb/js/script.js')}}"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
