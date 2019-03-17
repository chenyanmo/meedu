@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/iCheck/square/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
    @yield('css')
@stop

@section('body_class', 'login-page')

@section('body')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('backend.dashboard.index') }}">MeEdu</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <form action="" method="post">
                @csrf
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                           placeholder="邮箱">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control"
                           placeholder="密码">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> 记住我
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit"
                                class="btn btn-primary btn-block btn-flat">登录</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script crossorigin="anonymous" integrity="sha384-RIQuldGV8mnjGdob13cay/K1AJa+LR7VKHqSXrrB5DPGryn4pMUXRLh92Ev8KlGF" src="https://lib.baomitu.com/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        @if(get_first_flash('success'))
        swal("成功", "{{get_first_flash('success')}}", "success");
        @endif
        @if(get_first_flash('warning'))
        swal("警告", "{{get_first_flash('warning')}}", "warning");
        @endif
        @if(get_first_flash('error'))
        swal("错误", "{{get_first_flash('error')}}", "error");
        @endif
    </script>
@stop