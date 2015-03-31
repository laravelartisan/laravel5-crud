            {!! Form::open(['url' => 'users/login','class'=>'navbar-form  ']) !!}

            <div class="form-group {{ $errors->has('title')? 'has-error':'' }}">
            {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Enter your email']) !!}
            {!!  $errors->first('email','<span class="help-block">:message</span>')   !!}
</div>
 <div class="form-group {{ $errors->has('title')? 'has-error':'' }}">
            {!! Form::password('password',['class'=>'form-control','placeholder'=>'Enter your password']) !!}
            {!!  $errors->first('password','<span class="help-block">:message</span>')   !!}
            </div>
            <div class="checkbox">
            {!! Form::checkbox('remember',NULL,['class'=>'checkbox']) !!} Remember me
            </div>
            {!! Form::submit('Sign In',['class'=>'btn  btn-primary']) !!}
            {!! Form::close()!!}
{{--
 <div class="form-group {{ $errors->has('title')? 'has-error':'' }}">
            {!! Form::text('title',null,['class'=>'form-control']) !!}
            {!!  $errors->first('title','<span class="help-block">:message</span>')   !!}
            </div>--}}
