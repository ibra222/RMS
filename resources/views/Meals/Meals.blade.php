@extends('layouts.app')

@section('content')

              <div class="panel panel-default">
                <div class="panel-heading">meals<a href="Meals/create"><span class="glyphicon glyphicon-edit pull-right"></span></a></div>

                <div class="panel-body">
                    <table class="table table-bordered table-striped table-hover">
                           <thead>
                              <tr>
                                  <th>id</th>
                                   <th>Title</th>
                                   <th>Description</th>
                                   <th>Price</th>
                                   <th>status</th>
                                   <th>image</th>
                                   <th>Created By</th>
                                   <th>Delete</th>
                                   <th>Edit</th>
                              </tr>
                           </thead>
                           <tbody>
                             @foreach($meals as $meal)
                               <tr>
                                 <td>{{$meal->id}}</td>
                                 <td>{{$meal->title}}</td>
                                 <td>{{$meal->description}}</td>
                                 <td>{{$meal->price}}</td>
                                 <td>{{$meal->status}}</td>
                                 <td><img src="{{$meal->image}}" alt="" height="70px" width="70px"></td>
                                 <td>{{$meal->user->name}}</td>
                                 <td>
                                    {!! Form::open(["url"=>"Meals/$meal->id","method"=>"delete"]) !!}
                                    {!! Form::submit("Delete",["class"=>"btn btn-danger"]) !!}
                                    {!! Form::close() !!}
                                 </td>
                                 <td>
                                     <a href="Meals/{{$meal->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a>
                                 </td>
                               </tr>
                               @endforeach
                           </tbody>
                    </table>

                    <div class="paginations col-lg-12">
                            {!! $meals->render() !!}
                    </div>
                </div>

@endsection
