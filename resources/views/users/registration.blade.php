

                    @if (count($errors) > 0)
						<div class="alert alert-danger form-signin">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif


					{{--@if(!Auth::guest())

                                                hello how are you

                     @endif--}}

                    {!! Form::open(['route'=>'users.store','class'=>'form-signin']) !!}
                        <h1 class="form-signin-heading">Please sign up</h1>
                    {{--{!! Form::hidden('confirmation_code',str_random(30)) !!}--}}
                    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter your name']) !!}
                    {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Enter your email']) !!}
                    {!! Form::password('password',['class'=>'form-control','placeholder'=>'Enter your password']) !!}
                    {!! Form::password('cpassword',['id'=>'inputConfirmPassword','class'=>'form-control','placeholder'=>'Confirm your password']) !!}



                    {!! Form::submit('Sign Up',['class'=>'btn btn-lg btn-primary btn-block']) !!}

                    {!! Form::close() !!}