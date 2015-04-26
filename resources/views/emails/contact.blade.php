







{{--{!! Html::link('activeRegistration','activate your registration')  !!}--}}
{{--{!!  Html::link('activeRegistration','activate your registration')  !!}--}}

<div>
 <p>
 Mr {{ $name }}
 </p>
            Thanks for creating an account with the verification demo app.
            <p>
            If your email is {{ $email }},
            </p>
            Please follow the link below to verify your email address
            {!! URL::to('registered/' . $confirmationCode) !!}.<br/>

</div>