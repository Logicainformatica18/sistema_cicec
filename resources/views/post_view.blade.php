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
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">


</head>

<body>
    <p></p>

    <div class="card card-primary card-outline container">
        <div class="card-header">
            <h1 class="card-title"><b>{{ $post->title }}</b> </h1>
            <div class="card-tools">
                <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>

        <div class="card-body p-0">
            <div class="mailbox-read-info">
                <h5>Descripción : </h5>
                <h6>{{ $post->description }}
                    <span class="mailbox-read-time float-right">{{ $post->created_at }} </span>
                </h6>
            </div>

         
            <div class="mailbox-read-message">
              <p></p>
         
              @php

              echo $post->post;
          @endphp
      

            </div>

        </div>
{{-- 
        <div class="card-footer bg-white">
            <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                <li>
                    <span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>
                    <div class="mailbox-attachment-info">
                        <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i>
                            Sep2014-report.pdf</a>
                        <span class="mailbox-attachment-size clearfix mt-1">
                            <span>1,245 KB</span>
                            <a href="#" class="btn btn-default btn-sm float-right"><i
                                    class="fas fa-cloud-download-alt"></i></a>
                        </span>
                    </div>
                </li>
                <li>
                    <span class="mailbox-attachment-icon"><i class="far fa-file-word"></i></span>
                    <div class="mailbox-attachment-info">
                        <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> App
                            Description.docx</a>
                        <span class="mailbox-attachment-size clearfix mt-1">
                            <span>1,245 KB</span>
                            <a href="#" class="btn btn-default btn-sm float-right"><i
                                    class="fas fa-cloud-download-alt"></i></a>
                        </span>
                    </div>
                </li>
                <li>
                    <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo1.png"
                            alt="Attachment"></span>
                    <div class="mailbox-attachment-info">
                        <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i> photo1.png</a>
                        <span class="mailbox-attachment-size clearfix mt-1">
                            <span>2.67 MB</span>
                            <a href="#" class="btn btn-default btn-sm float-right"><i
                                    class="fas fa-cloud-download-alt"></i></a>
                        </span>
                    </div>
                </li>
                <li>
                    <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo2.png"
                            alt="Attachment"></span>
                    <div class="mailbox-attachment-info">
                        <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i> photo2.png</a>
                        <span class="mailbox-attachment-size clearfix mt-1">
                            <span>1.9 MB</span>
                            <a href="#" class="btn btn-default btn-sm float-right"><i
                                    class="fas fa-cloud-download-alt"></i></a>
                        </span>
                    </div>
                </li>
            </ul>
        </div> --}}

      

    </div>



    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>

</body>

</html>
