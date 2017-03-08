@extends('layouts.app')

@section('content')
<div class="panel panel-default">
  <div class="panel-heading">Add Meals</div>
  <div class="panel-body">
         {!! Form::open(array('route'=>'Meals.store', 'files'=>true)) !!}
         <div class="form-group col-lg-3">
           {!! Form::text('title', null, array('required','class'=>'form-control','placeholder'=>'Meal Title')) !!}
         </div>
         <div class="form-group col-lg-3">
           {!! Form::number('price', null, array('required', 'step' => 'any','class'=>'form-control','placeholder'=>'Meal Price')) !!}
         </div>
         <div class="form-group col-lg-3">
           {!! Form::select('status', ['Active'=>'Active','Inactive'=>'Inactive'], null, array('required','class'=>'form-control','placeholder'=>'Meal status')) !!}
         </div>
         <div class="form-group col-lg-3">
           {!! Form::file('image', array('class'=>'form-control','placeholder'=>'Mneu image')) !!}
         </div>

         <div class="form-group col-lg-12">
           {!! Form::textarea('description', null, array('required','class'=>'form-control','placeholder'=>'Meal description')) !!}
         </div>
         <div class="form-group">
                 @foreach( $menus as $menu)
                    @if(count($menu->items) > 0)
                    <h4>{{ $menu->title }}</h4>
                    <div class="form-group col-lg-6 menuItems">
                        <ul>
                           @foreach($menu->items as $item)
                             <li><input type="checkbox" name="items[]" value="{{$item->id}}">
                               <input type="number" name="discount[{{$item->id}}]" class="discount" value="">
                               {{$item->title}}</li>
                           @endforeach
                        </ul>
                      </div>
                        @endif
                        @endforeach
                    </div>
                    <div class="clearfix">

                    </div>
         </div>

         <div class="form-group col-lg-2">
           {!! Form::submit('Add', array('class'=>'btn btn-primary')) !!}
         </div>
         {!! Form::close() !!}

  </div>
</div>

@endsection
