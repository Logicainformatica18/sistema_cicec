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
        <p> &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
        </p>
        <p></p>
        <h2>{{$post->title}}</span></h2>

    </div>

       <!---culture section design-->
       <section class="tour" id="clubes_ayacucho">
      

@php

        echo $post->post;
    @endphp
    
       </section>
   




    <div id="disqus_thread"></div>
    <script>
      /**
      *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
      *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
      /*
      var disqus_config = function () {
      this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
      this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
      };
      */
      (function() { // DON'T EDIT BELOW THIS LINE
      var d = document, s = d.createElement('script');
      s.src = 'https://https-activegalaxy-anthonycode-com.disqus.com/embed.js';
      s.setAttribute('data-timestamp', +new Date());
      (d.head || d.body).appendChild(s);
      })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    
    </div>
</div>



 



















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

         


 