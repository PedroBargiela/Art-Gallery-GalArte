<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top: 40px">
            <div class="col-md-4 col-md-offset-4">
                <h4><?= $title; ?></h4>
                <hr>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= ucfirst($userInfo['username']); ?></td>
                            <td><?= $userInfo['email'];  ?></td>
                            <td><a href="/auth/logout">Cerrar Sesión</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>