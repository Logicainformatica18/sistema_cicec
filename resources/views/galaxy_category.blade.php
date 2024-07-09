<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DANGER</title>

    <!---custom css link-->
    <link rel="stylesheet" type="text/css" href="../galaxy/style.css">
    <!---boxicons link-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <!---google fonts link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans: wght@300; 400; 500; 600; 700; 800&display=swap"
        rel="stylesheet">

</head>

<body>

    <!---header design-->
    <header>
        <a href="#" class="logo">ACTIVE<span>GALAxy</span></a>

        <ul class="navbar">
            <li><a href="../#home">Home</a></li>
            <li><a href="../#artículos/Flashcards">Artículos/Flashcards</a></li>
            <li><a href="../#clubes_ayacucho">Clubes_Ayacucho</a></li>
            <li><a href="../#voluntariados">Voluntariados</a></li>
        </ul>

        <div class="h-right">
            <a href="#">¡EMERGENCIA!</a>
            <a href="#"><i class="ri-instagram-fill"></i></a>
            <a href="#"><i class="ri-facebook-fill"></i></a>
            <a href="#"><i class="ri-map-pin-add-fill"></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>


    <!--- feature section design-->
    <section class="feature" id="artículos/Flashcards">
        <div class="feature-content">
            <div class="row">
                <a target="_blank" href="{{ url('categoria/ambiente') }}" style="color:white">
                    <div class="row-img">
                        <img src="../galaxy/img/nap1.jpg">
                    </div>
                    <h4>Medio AMBIENTE</h4>
                </a>

            </div>

            <div class="row">
                <a target="_blank" href="{{ url('categoria/servicios') }}" style="color:white">
                    <div class="row-img">
                        <img src="../galaxy/img/nap2.jpg">
                    </div>
                    <h4>ADM. y servicios
                        públicos
                    </h4>
                </a>
            </div>

            <div class="row">
                <a target="_blank" href="{{ url('categoria/politica') }}" style="color:white">
                    <div class="row-img">
                        <img src="../galaxy/img/nap3.jpg">
                    </div>
                    <h4>PolíTICA</h4>
                </a>
            </div>

            <div class="row">
                <a target="_blank" href="{{ url('categoria/ie') }}" style="color:white">
                    <div class="row-img">
                        <img src="../galaxy/img/nap4.jpg">
                    </div>
                    <h4>IE</h4>
                </a>
            </div>
            <div class="row">
                <a target="_blank" href="{{ url('categoria/sugerencia') }}" style="color:white">
                    <div class="row-img">
                        <img src="../galaxy/img/nap5.jpg">
                    </div>
                    <h4>Sugerencias</h4>
                </a>
            </div>

        </div>
    </section>

    <!---culture section design-->
    <div class="center-text">
        <p></p>
        <h1>PUBLICACIONES</span></h1>
        <div class="center-btn">
            <a href="{{ url('/publicacion') }}"target="_blank" class="btn">Crear publicacion</a>
        </div>
    </div>
    <section class="tour" id="voluntariados">
        <div class="center-text">
            <p></p>
            @if ($category == 'ambiente')
                <h2>Medio Ambiente</span></h2>
            @elseif ($category == 'organizaciones')
                <h2>Organizaciones</span></h2>
            @elseif ($category == 'servicios')
                <h2>Servicios Públicos</span></h2>
            @elseif ($category == 'ie')
                <h2>IE</span></h2>
            @elseif ($category == 'clubes')
                <h2>Clubes de Ayacucho</span></h2>
            @elseif ($category == 'politica')
                <h2>Política</span></h2>
            @elseif ($category == 'sugerencia')
                <h2>Sugerencias</span></h2>
            @endif


        </div>




        <div class="tour-content">
            @foreach ($posts as $item)
              
            
                    <div class="box">
                        <a href="../posts/{{ $item->id }}" target="_blank">
                        <h3 ><b style="color:white"> {{$item->title}}</b></h3> 
                      
                        <img src="{{ '../imageusers/' . $item->photo }}"style="width:200px">
                      
                        {{-- <span>{{$item->description}} </span>
                     --}}
                    </a>
                    @if ($category == 'clubes' || $category == 'organizaciones')
                    
                    <a href="{{$item->url_invitation}}"target="_blank" class="btn" style="width:200px;font-family:Arial">FACEBOOK</a>     
                    
                   @endif

                    </div>
                   
               
              
            @endforeach


        </div>
    </section>




    <!---newsletter section design-->
    <section class="newsletter">
        <div class="newsletter-content">
            <div class="newsletter-text">
                <h2>Extras</h2>
                <p>¿List@ para explorar más?</p>
            </div>

            <form action="">
                <input type="messages" placeholder="Envianos mensajitos al privado..." required>
                <input type="submit" value="Enviar" class="btn">
            </form>
        </div>
    </section>

    <!--footer section design-->
    <section class="footer">
        <div class="footer-box">
            <h3>Ayuda</h3>
            <a href="#">Cel. 917 778 517</a>
            <a href="#">E-mail: maythemia2020@gmail.com</a>
        </div>

        <div class="footer-box">
            <h3>Redes sociales</h3>
            <div class="social">
                <a href="#"><i class="ri-instagram-fill"></i></a>
                <a href="#"><i class="ri-whatsapp-fill"></i></a>
                <a href="#"><i class="ri-facebook-fill"></i></a>
            </div>
        </div>

    </section>

    <!---custom js file link-->
    <script src="../galaxy/js/script.js"></script>
</body>

</html>
