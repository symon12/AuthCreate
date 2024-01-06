
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    {{-- <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"> --}}
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>
<body>
    

    @include("layouts.naver")
    @yield("content")
    {{-- @yield("content.post") --}}

    <script src="{{asset("js/bootstrap.bundle.js")}}"></script>
    {{-- <script src="{{asset("js/bootstrap.bundle.min.js")}}"></script> --}}
    <script src="{{asset("js/style.js")}}"></script>
</body>
</html>