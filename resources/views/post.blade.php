<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active Galaxy</title>
    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

    <script src="{{ asset('dist/js/axios.min.js') }}"></script>
    <script src="{{ asset('dist/js/post.js') }}"></script>
    <script src="{{ asset('dist/js/function.js') }}"></script>
</head>

<body>
    <p></p>

    <div class="container-fluid">
        <h1>Gestionar Publicaciones</h1>
        <p></p>
        <form action="" method="post" role="form" id="post" name="form">
            Título:
            <input name="title" type="text" class="form-control">
            Descripción
            <input name="description" type="text" class="form-control">
            URL Invitación
            <input name="url_invitation" type="text" class="form-control">
            Categoría
            <select name="category" class="form-control">
                <option value="ambiente">Medio Ambiente</option>
                <option value="servicios">Servicios Públicos</option>
                <option value="politica">Política</option>
                <option value="ie">IE</option>
                <option value="sugerencia">Sugerencias</option>
                <option value="organizaciones">Organizaciones</option>
                <option value="clubes">Clubes</option>
            </select>
            <input type="hidden" name="id" id="id">
            <p></p>
            <div class="container-fluid">
                <div class="form-group row">
                    <br>
                    Imágen
                    <div class="col-sm-1"></div>
                    
                    <div class="btn btn-default btn-file col-9">
                        <i class="fas fa-paperclip"></i> Subir
                        <input type='file' id="imgInp" name="photo" onchange="readImage(this,'#blah');">
                    </div>


                </div>
               
            </div>
            <div class="size-10 container-fluid">
                <br>
                <img id="blah" name="fotografia" src="https://via.placeholder.com/150" alt="Tu imagen"
                    class="img-bordered" width="200px">
                    <p></p>
            </div>
            {{ csrf_field() }}
            <textarea id="summernote"style="height:'900px'" name="post">
        Place <em>some</em> <u>text</u> <strong>here</strong>
        <p></p>
      </textarea>
      {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
      onclick="New();$('#post')[0].reset();user.fotografia.src='https://via.placeholder.com/150';">
      Agregar
  </button> --}}
            <input type="button" value="Guardar" class="btn btn-success" onclick="postStore()" id="create">
            <input type="button" value="Modificar" class="btn btn-danger" onclick="postUpdate();" id="update" disabled>
            {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> --}}
        </form>
    </div>


    <h2>Publicaciones</h2>

<div class="container-fluid">
    <table border="1" class="table">
        <thead>
            <th>opciones</th>
            <th>Id </th>
            <th>URL </th>
            <th>Título </th>
            <th>Descripción</th>
            <th>Fecha</th>
        </thead>


        @foreach ($post as $posts)
            <tr>
                <td>
                    <button class="btn bg-warning"
                data-toggle="modal" data-target="#exampleModal"
                onclick="postEdit('{{ $posts->id }}');Up();">Editar</button>
                    <button class="btn bg-danger" onclick="postDestroy('{{ $posts->id }}')">
                        Borrar</button>

                </td>
                <td>
                    {{ $posts->id }}

                </td>
                <td>
                    <a target="_blank" href="posts/{{ $posts->id }}">{{ $posts->title }}</a> 

                </td>
                <td>
                    {{ $posts->title }}

                </td>
                <td>
                    {{ $posts->description }}

                </td>
                <td>
                    {{ $posts->created_at }}

                </td>
            </tr>
        @endforeach
    </table>
</div>
  



    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
</body>

</html>
