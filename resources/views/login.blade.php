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
            <div class="col-4 offset-4 mt-5">
                <form class="" action="manage" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <input type="text" class="form-control" name="num">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pwd">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">login</button>
                </form>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
    </body>
</html>
