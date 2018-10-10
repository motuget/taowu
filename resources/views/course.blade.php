<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

        <title></title>
    </head>
    <body>
        <div class="container">
            @foreach($course as $courses)
            <div class="media py-3" style="border-bottom:1px solid #eee;">
                <img class="mr-3" src="" alt="" style="width:64px;height:64px;">
                <div class="media-body">
                    <h5>{{ $courses->title }}</h5>
                    <span>{{ $courses->content }}</span>
                </div>
                <a href="#" class="btn btn-primary text-left">加入</a>
            </div>
            @endforeach
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
    </body>
</html>
