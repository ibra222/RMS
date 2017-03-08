@extends('layouts.app')

@section('content')
<div class="panel panel-default">
  <div class="panel-heading">Add Orders</div>
  <div class="panel-body">
         {!! Form::open(array('route'=>'Orders.store', 'files'=>true)) !!}
         <div class="form-group col-lg-3">
           {!! Form::select('status', ['1'=>'Active','0'=>'Inactive'], null, array('required','class'=>'form-control','placeholder'=>'Meal status')) !!}
         </div>
         <div class="form-group col-lg-3">
           {!! Form::number('cashIn', null, array('required','class'=>'form-control','placeholder'=>'Order CashIn')) !!}
         </div>
         <div class="form-group col-lg-3">
           {!! Form::number('payment', null, array('required', 'step' => 'any','class'=>'form-control','placeholder'=>'Order Payment ')) !!}
         </div>
         <div class="form-group col-lg-3">
           {!! Form::number('total', null, array('required', 'step' => 'any','class'=>'form-control','placeholder'=>'Order Payment ')) !!}
         </div>
         <div class="form-group col-lg-3">
           {!! Form::number('change', null, array('required', 'step' => 'any','class'=>'form-control','placeholder'=>'Order Total ')) !!}
         </div>
         <div class="form-group col-lg-2">
           {!! Form::submit('Add', array('class'=>'btn btn-primary')) !!}
         </div>

         </div>


         {!! Form::close() !!}

  </div>
</div>

@endsection
