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
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>图标</th>
                        <th>标题</th>
                        <th>摘要</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($course as $courses)
                    <tr>
                        <th>{{ $courses->id }}</th>
                        <td>{{ $courses->img }}</td>
                        <td>{{ $courses->title }}</td>
                        <td>{{ $courses->content }}</td>
                        <td>
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
    </body>
</html>
