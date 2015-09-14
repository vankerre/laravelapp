<!--login modal-->
<link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h1 class="text-center">Register</h1>
            </div>
            <div class="modal-body">
                {!! Form::open(['method' => 'post']) !!}



                    <div class="form-group">
                        <input type="text" id="name" name="name" class="form-control input-lg" placeholder="Name">
                    </div>
                    <div class="form-group">
                        {!! Form::input('email','email','', ['class' => 'form-control input-lg', 'placeholder' => 'Email'])!!}
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg btn-block">Sign In</button>
                        <span class="pull-right"><a href="{{url('auth/login')}}">Login?</a></span>
                    </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <div class="col-md-12">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>
        </div>

    @endif
</div>


