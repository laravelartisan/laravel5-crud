


            <div class="form-group {{ $errors->has('title')? 'has-error':'' }}">
            {!! Form::text('title',null,['class'=>'form-control']) !!}
            {!!  $errors->first('title','<span class="help-block">:message</span>')   !!}
            </div>
            <div class="form-group">
            {!! Form::textarea('lyrics',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group {{ $errors->has('slug')? 'has-error':'' }}">
            {!! Form::text('slug',null,['class'=>'form-control']) !!}
            {!!  $errors->first('slug','<span class="help-block">:message</span>')   !!}
            </div>