<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:45px;">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Sign In</h4>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                    <form class="form-horizontal" action="">
                    <?= csrf_field() ?>
                        <div class="form-group">
                            <label class="col-md-5 control-label" for="">Email</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="email" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-5 control-label" for="">Password</label>
                            <div class="col-md-5">
                                <input type="password" class="form-control" name="password" placeholder="Enter your password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-5 control-label"></label>
                            <div class="col-md-5">
                                <button class="btn btn-dark btn-block" type="submit">Sign In</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href="<?= base_url('auth/register') ?>">You don't have an account,Register?</a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>