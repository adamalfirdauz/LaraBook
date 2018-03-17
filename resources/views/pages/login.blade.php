@extends('layouts.front')

@section('content')
<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html">
                <b>Lara</b>Book</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Silahkan Masuk</p>

            <form action="#" method="post">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <hr>
            <div class="row text-center">
                <div class="col-xs-12">
                    <a href="register.html" class="text-center">Belum punya akun?</a>
                </div>
            </div>
        </div>
        <!-- /.form-box -->
    </div>
</body>    
@endsection

