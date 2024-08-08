<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

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


    <script src="{{asset('certificate.js')}}">  </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col lg-6">
                <canvas id="canvas1" height="1500" width="2000" alt="Responsive image"
                style="width: 100%; height: 100%;"></canvas>
            </div>

        </div>
      
    </div>


</canvas>
<div class="title m-b-md">
 
 </div>
 
@php

    $qr_code =  'data:image/png;base64,' . base64_encode(QrCode::size(300)->generate('www.nigmacode.com'));
     $image_src = asset('certificado/spanish.png');

@endphp

    <script>
    generateCertication('{{$image_src}}', '{{$student}}','canvas1','{{$id_certificate}}','{{$certificado}}','{{$qr_code}}') 
    </script>

    {{-- <img  alt="" srcset="" id="imagen"> --}}
    <input type="text"  name="" id="imagen">
</body>
</html>