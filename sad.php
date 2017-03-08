@extends('layouts.app')

@section('content')
<div class="panel panel-default">
  <div class="panel-heading">Edit Item:{{ $items->title }}</div>
  <div class="panel-body">
         {!! Form::model($items, array('method'=>'PATCH','action'=>['ItemsController@update', $items->id], 'files'=>true)) !!}
         <div class="form-group col-lg-4">
           {!! Form::text('title', null, array('required','class'=>'form-control','placeholder'=>'Item Title')) !!}

         </div>
         <div class="form-group col-lg-4">
           {!! Form::select('meun_id',$menus, null, array('required','class'=>'form-control','placeholder'=>'Mneu Type')) !!}
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
         <img src="{{asset($items->image)}}" alt="ibra" height="200px" width="200px">
  </div>
</div>

@endsection
