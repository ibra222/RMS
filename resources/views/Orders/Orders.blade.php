@extends('layouts.app')

@section('content')

              <div class="panel panel-default">
                <div class="panel-heading">meals<a href="Orders/create"><span class="glyphicon glyphicon-edit pull-right"></span></a></div>

                <div class="panel-body">
                    <table class="table table-bordered table-striped table-hover">
                           <thead>
                              <tr>
                                  <th>id</th>
                                   <th>Total</th>
                                   <th>Status</th>
                                   <th>CashIn</th>
                                   <th>Payment</th>
                                   <th>Change</th>
                                   <th>Customer name</th>
                                   <th>Delete</th>
                                   <th>Edit</th>
                              </tr>
                           </thead>
                           <tbody>
                             @foreach($orders as $order)
                               <tr>
                                 <td>{{$order->id}}</td>
                                 <td>{{$order->total}}</td>
                                 <td>{{$order->status}}</td>
                                 <td>{{$order->cashIn}}</td>
                                 <td>{{$order->payment}}</td>
                                 <td>{{$order->change}}</td>
                                 <td></td>
                                 <td>
                                    {!! Form::open(["url"=>"Orders/$order->id","method"=>"delete"]) !!}
                                    {!! Form::submit("Delete",["class"=>"btn btn-danger"]) !!}
                                    {!! Form::close() !!}
                                 </td>
                                 <td>
                                     <a href="Meals/{{$order->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a>
                                 </td>
                               </tr>
                               @endforeach
                           </tbody>
                    </table>

                    <div class="paginations col-lg-12">
                            {!! $orders->render() !!}
                    </div>
                </div>

@endsection
