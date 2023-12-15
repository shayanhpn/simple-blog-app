<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/scss/tooltip.scss')}}">
    <script src="https://kit.fontawesome.com/add5785b56.js" crossorigin="anonymous"></script>
    <script src="{{asset('assets/vendor/ckeditor5/build/ckeditor.js')}}"></script>
    <title>پن شاپ | یک بلاگ ساده از یک برنامه نویس</title>
</head>
<body class="bg-light">
@if(session('success'))
    <div class="col-md-3 mx-4 my-4 position-absolute z-3">
        <div class="alert alert-green" role="alert">
            <i class="fa-regular fa-square-check"></i> {{session('success')}}
        </div>
    </div>
@elseif(session('danger'))
    <div class="col-md-3 mx-4 my-4 position-absolute z-3">
            <div class="alert alert-danger" role="alert">
                <i class="fa-solid fa-circle-exclamation fa-shake"></i> {{session('danger')}}
            </div>
    </div>
@endif
    <div class="container p-4">
        {{$slot}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>
</html>
