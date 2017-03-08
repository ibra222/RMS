@extends('layouts.app')

@section('content')
<div class="panel panel-default">
  <div class="panel-heading">Edit Menus:{{ $menu->title }}</div>
  <div class="panel-body">
         {!! Form::model($menu, array('method'=>'PATCH','action'=>['MenusController@update', $menu->id], 'files'=>true)) !!}
         <div class="form-group col-lg-4">
           {!! Form::text('title', null, array('required','class'=>'form-control','placeholder'=>'Mneu Title')) !!}

         </div>
         <div class="form-group col-lg-4">
           {!! Form::select('type', ['Food'=>'Food','Hot Drink'=>'Hot Drink','Cold Drink'=>'Cold Drink'], null, array('required','class'=>'form-control','placeholder'=>'Mneu Type')) !!}
         </div>
         <div class="form-group col-lg-4">
           {!! Form::select('status', ['Active'=>'Active','Inactive'=>'Inactive'], null, array('required','class'=>'form-control','placeholder'=>'Mneu status')) !!}
         </div>
         <div class="form-group col-lg-7">
           {!! Form::textarea('description', null, array('required','class'=>'form-control','placeholder'=>'Mneu description')) !!}
         </div>
         <div class="form-group col-lg-6">
           {!! Form::file('image', array('class'=>'form-control','placeholder'=>'Mneu image')) !!}
         </div>
         <div class="form-group col-lg-2">
           {!! Form::submit('Add', array('class'=>'btn btn-primary')) !!}
         </div>
         {!! Form::close() !!}
         <img src="{{asset($menu->image)}}" alt="ibra" height="200px" width="200px">
  </div>
</div>

@endsection
