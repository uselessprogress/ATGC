<div class="container" id="contactus">
        <!--Header-->
        <div class="text-xs-center">
            <h3><i class="fa fa-envelope"></i> Contact Us:</h3>
            <hr class="mt-2 mb-2"> </div>
         <!--Body-->
        <p class="lead">Have a question or want a quote? Send us a message and we will get back to you within 2 business days.</p>
        <!--Error-->
            @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
            {{ $error }}
            </div>
            @endforeach 
       
        
        <!--Alert-->
        @if(Session::has('message'))
        <div class="alert alert-info"> 
            {{Session::get('message')}} 
        </div> 
        @endif
        
       
        {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

        <div class="formgroup"><i class="fa fa-user prefix"></i>
            {!! Form::text('name', null, 
                array('required', 
                      'class'=>'form-control', 
                      'placeholder'=>'Your name')) !!}
        </div>

        <div class="formgroup"><i class="fa fa-envelope prefix"></i>
            {!! Form::text('email', null, 
                array('required', 
                      'class'=>'form-control', 
                      'placeholder'=>'Your e-mail address')) !!}
        </div>

        <div class="formgroup"><i class="fa fa-phone prefix"></i>
            {!! Form::text('phone', null, 
                array('required', 
                      'class'=>'form-control', 
                      'placeholder'=>'Your Phone')) !!}
        </div>
        
        <div class="formgroup"><i class="fa fa-pencil prefix"></i>
            {!! Form::textarea('message', null, 
                array('required', 
                      'class'=>'form-control', 
                      'style'=>'height:45px;',
                      'placeholder'=>'Your Message')) !!}
        </div>

        <div style="width:100%;">
            {!! Form::submit('Contact Us!', 
              array('class'=>'btn btn-outline-primary btn-block')) !!}
        </div>
              
        
{!! Form::close() !!}
        
    </div>
