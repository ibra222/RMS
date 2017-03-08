@extends('layouts.app')

@section('content')
<div class="panel panel-default">
  <div class="panel-heading">Edit Maels:{{ $meal->title }}</div>
  <div class="panel-body">
         {!! Form::model($meal, array('method'=>'PATCH','action'=>['MealsController@update', $meal->id], 'files'=>true)) !!}
         <div class="form-group col-lg-4">
           {!! Form::text('title', null, array('required','class'=>'form-control','placeholder'=>'Item Title')) !!}

         </div>
         <div class="form-group col-lg-2">
           {!! Form::number('price', null, array('required', 'step' => 'any','class'=>'form-control','placeholder'=>'Item Price')) !!}

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
         <img src="{{asset($meal->image)}}" alt="ibra" height="200px" width="200px">
         <div class="clearfix">

         </div>
         <div class="form-group">
                 @foreach( $menus as $menu)
                    @if(count($menu->items) > 0)
                          <h4>{{ $menu->title }}</h4>
                          <div class="form-group col-lg-6 menuItems">
                              <ul>
                                 @foreach($menu->items as $item)
                                       <li
                                          @if(in_array($item->id, $mealItemsIDs))
                                                 class="red"
                                          @endif
                                       >
                                         <input
                                         @if(in_array($item->id, $mealItemsIDs))
                                              checked
                                         @endif
                                         type="checkbox"
                                         name="items[]"
                                        value="{{$item->id}}"
                                        >
                                        <input
                                        type="number"
                                        name="discount[{{$item->id}}]"
                                        class="discount"
                                            @if(in_array($item->id, $mealItemsIDs))
                                              value="{{$mealItemsIDsWithDiscount[$item->id]}}"
                                            @endif
                                        >{{$item->title}}</li>
                                 @endforeach
                              </ul>
                            </div>
                    @endif
                    @endforeach
                    </div>
                    <div class="clearfix">

                    </div>
         <div class="form-group col-lg-2">
           {!! Form::submit('Edit', array('class'=>'btn btn-primary')) !!}
         </div>
         {!! Form::close() !!}

  </div>
</div>

@endsection
