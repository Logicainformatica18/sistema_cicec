<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DANGER</title>

    <!---custom css link-->
    <link rel="stylesheet" type="text/css" href="{{ asset('galaxy/style.css') }}">
    <!---boxicons link-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <!---google fonts link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans: wght@300; 400; 500; 600; 700; 800&display=swap"
        rel="stylesheet">

</head>

<body style="font-family:Arial">

    <!---header design-->
    <header>
        <a href="#" class="logo">Active<span>Galaxy</span></a>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#artículos/Flashcards">Artículos/Flashcards</a></li>
            <li><a href="#clubes_ayacucho">Clubes_Ayacucho</a></li>
            <li><a href="#voluntariados">Voluntariados</a></li>
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
                <div class="row-img">
                    <img src="{{ asset('galaxy/img/nap1.jpg') }}">
                </div>
                <h4>Medio AMBIENTE</h4>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="{{ asset('galaxy/img/nap2.jpg') }}">
                </div>
                <h4>ADM. y servicios
                    públicos
                </h4>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="{{ asset('galaxy/img/nap3.jpg') }}">
                </div>
                <h4>PolíTICA</h4>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="{{ asset('galaxy/img/nap4.jpg') }}">
                </div>
                <h4>IE</h4>
            </div>
            <div class="row">
                <div class="row-img">
                    <img src="{{ asset('galaxy/img/nap5.jpg') }}">
                </div>
                <h4>Sugerencias</h4>
            </div>

        </div>
    </section>
    
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
            <h2>Medio Ambiente</span></h2>

        </div>


        <div class="tour-content">
            @foreach ($post_ambiente as $item)
                <a href="posts/{{ $item->id }}" target="_blank">
                    <div class="box">
                        {{-- <h3><b>{{$item->title}}</b>  </h3>  --}}
                        <img src="{{ 'imageusers/' . $item->photo }}"style="width:200px">
                        {{-- <span>{{$item->description}} </span> --}}
                    </div>
                </a>
            @endforeach


        </div>
    </section>

    <section class="tour" id="voluntariado2">
        <div class="center-text">
            <p></p>
            <h2>Servicio Público</span></h2>

        </div>


        <div class="tour-content">
            @foreach ($post_servicio_publico as $item)
                <a href="posts/{{ $item->id }}" target="_blank">
                    <div class="box">
                        {{-- <h3><b>{{$item->title}}</b>  </h3>  --}}
                        <img src="{{ 'imageusers/' . $item->photo }}"style="width:200px">
                        {{-- <span>{{$item->description}} </span> --}}
                    </div>
                </a>
            @endforeach


        </div>
    </section>

    <!---culture section design-->
    <section class="Culture" id="clubes_ayacucho">
        <div class="Culture-text">
            <h5>CLUBES AYACUCHO</h5>
            <h2>Habilidades sociales e intelectuales en práctica</h2>
            <p>Promovamos la descentralización a través de la accesibilidad a clubes de Literatura, Matemática, Inglés,
                Ajedrez, etc.</p>
            <a href="#" class="btn">Ver: Clubes en Ayacucho</a>
        </div>

        <div class="Culture-img">
            <img src="{{ asset('galaxy/img/c1.png') }}">
        </div>
    </section>



    <section class="tour" id="voluntariados">
        <div class="center-text">
            <p></p>
            <h2>Voluntariados</span></h2>

        </div>
       

        <div class="tour-content">
            @foreach ($post_voluntariado as $item)
                <a href="posts/{{ $item->id }}" target="_blank">
                    <div class="box">
                        {{-- <h3><b>{{$item->title}}</b>  </h3>  --}}
                        <img src="{{ 'imageusers/' . $item->photo }}"style="width:200px">
                        {{-- <span>{{$item->description}} </span> --}}
                    </div>
                </a>
            @endforeach


        </div>
        <div class="center-btn">
            <a href="{{ url('/publicacion') }}"target="_blank" class="btn">¿Qué Organizaciones hay?</a>
        </div>
    </section>



    <section class="tour" id="voluntariados">
        <div class="center-text">
            <p></p>
            <h2>Clubes Ayacucho</span></h2>

        </div>
       

        <div class="tour-content">
            @foreach ($post_club as $item)
                <a href="posts/{{ $item->id }}" target="_blank">
                    <div class="box">
                        {{-- <h3><b>{{$item->title}}</b>  </h3>  --}}
                        <img src="{{ 'imageusers/' . $item->photo }}"style="width:200px">
                        {{-- <span>{{$item->description}} </span> --}}
                    </div>
                </a>
            @endforeach


        </div>
    </section>









    <!---home section design-->
    <section class="home" id="home">
        <div class="tour-content">
            @foreach ($post_ambiente as $item)
                <a href="posts/{{ $item->id }}" target="_blank">
                    <div class="box">
                        {{-- <h3><b>{{$item->title}}</b>  </h3>  --}}
                        <img src="{{ 'imageusers/' . $item->photo }}"style="width:200px">
                        {{-- <span>{{$item->description}} </span> --}}
                    </div>
                </a>
            @endforeach


        </div>
    </section>

    <!---holiday section design-->
    <section class="holiday">
        <div class="holiday-img">
            <img src="{{ asset('galaxy/img/h1.png') }}">
        </div>

        <div class="holiday-text" id="información">
            <h5>Información</h5>
            <h2>Sobre Danger y Active Galaxy</h2>
            <p>En este sitio web, podrás subir tus artículos de opinión o una crítica/comentario más corta a través de
                FLlashcards. Por otro lado, hallarás un apartado para visualizar información sobre los Clubs disponibles
                en Ayacucho, los requisitos básicos y el contacto de la organización para que puedas optimizar tu
                tiempo. ¡AYUDA!, por medio de la cita ¡EMERGENCIA!, podrás hacer una transmisión en vivo cuando te
                encuentres en peligro o lo sientas así; la cual estará vinculada a tus redes sociales y las comisarias.
            </p>
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
    <script src="js/script.js"></script>
</body>

</html>
