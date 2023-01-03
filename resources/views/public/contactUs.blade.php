@extends('layouts.master')


@section('content')

<div class="container-fluid">

<!-- Page Heading -->


<!-- DataTales Example -->
<div class="card shadow mb-4 mt-4  ">

    <div class="card-body ">
        {!! Form::open(['method'=>'POST', 'action'=>'MessagesController@store', 'files'=>true ,'enctype'=>'multipart/form-data' ]) !!}

        <div class="form-group">
            {!! Form::label('Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control '.($errors->has('name')? 'is-invalid': '')]) !!}
            @if($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('Phone') !!}
            {!! Form::text('phone', null, ['class'=>'form-control '.($errors->has('phone')? 'is-invalid': '')]) !!}
            @if($errors->has('phone'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('phone')}}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('Emai') !!}
            {!! Form::text('email', null, ['class'=>'form-control '.($errors->has('email')? 'is-invalid': '')]) !!}
            @if($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('email')}}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('Message') !!}
            {!! Form::textarea('message', null, ['class'=>'form-control '.($errors->has('message')? 'is-invalid': ''), 'rows'=>10]) !!}
            @if($errors->has('message'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('message')}}</strong>
                </span>
            @endif
        </div>

        
   
        <div class="form-group">
            {!! Form::submit('Send', ['class'=>'btn btn-primary']) !!}
         
        </div>
        {!! Form::close() !!}
    </div>

  
</div>
<div class="">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="463" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>

</div>



@endsection
@section('script')
<script type="text/javascript">
/*
 making slug automatically
*/
$('#title').on('blur', function() {
    var theTitle = this.value.toLowerCase().trim(),
        slugInput = $('#slug');
    theSlug = theTitle.replace(/&/g, '-and-')
        .replace(/[^a-z$0-9-]+/g, '-')
        .replace(/\-\-+/g, '-')
        .replace(/^-+|-+$/g, '')

    slugInput.val(theSlug);
});
</script>
@endsection


