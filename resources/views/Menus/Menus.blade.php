@extends('layouts.app')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Add Menus</div>
                <div class="panel-body">
                       {!! Form::open(array('files'=> true)) !!}
                       <div class="form-group col-lg-4">
                         {!! Form::text('title', null, array('required','class'=>'form-control','placeholder'=>'Mneu Title')) !!}

                       </div>
                       <div class="form-group col-lg-4">
                         {!! Form::select('type', ['Food'=>'Food','Hot Drink'=>'Hot Drink','Cold Drink'=>'Cold Drink'], null, array('required','class'=>'form-control','placeholder'=>'Mneu Type')) !!}
                       </div>
                       <div class="form-group col-lg-4">
                         {!! Form::select('status', ['Active'=>'Active','Inactive'=>'Inactive'], null, array('required','class'=>'form-control','placeholder'=>'Mneu status')) !!}
                       </div>
                       <div class="form-group col-lg-12">
                         {!! Form::textarea('description', null, array('required','class'=>'form-control','placeholder'=>'Mneu description')) !!}
                       </div>
                       <div class="form-group col-lg-4">
                         {!! Form::file('image', array('required','class'=>'form-control','placeholder'=>'Mneu image')) !!}
                       </div>
                       <div class="form-group col-lg-2">
                         {!! Form::submit('Add', array('class'=>'btn btn-primary')) !!}
                       </div>
                       {!! Form::close() !!}
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">Menus</div>

                <div class="panel-body">
                    <table class="table table-bordered table-striped table-hover">
                           <thead>
                              <tr>
                                  <th>id</th>
                                   <th>Title</th>
                                   <th>Type</th>
                                   <th>Description</th>
                                   <th>status</th>
                                   <th>image</th>
                                   <th>Created By</th>
                                   <th>Delete</th>
                                   <th>Edit</th>
                              </tr>
                           </thead>
                           <tbody>
                             @foreach($menus as $menu)
                               <tr>
                                 <td>{{$menu->id}}</td>
                                 <td>{{$menu->title}}</td>
                                 <td>{{$menu->type}}</td>
                                 <td>{{$menu->description}}</td>
                                 <td>{{$menu->status}}</td>
                                 <td><img src="{{$menu->image}}" alt="" height="70px" width="70px"></td>
                                 <td>{{$menu->user->name}}</td>
                                 <td>
                                    {!! Form::open(["url"=>"Menus/$menu->id","method"=>"delete"]) !!}
                                    {!! Form::submit("Delete",["class"=>"btn btn-danger"]) !!}
                                    {!! Form::close() !!}
                                 </td>
                                 <td>
                                     <a href="Menus/{{$menu->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a>
                                 </td>
                               </tr>
                               @endforeach
                           </tbody>
                    </table>

                    <div class="paginations col-lg-12">
                            {!! $menus->render() !!}
                    </div>
                </div>

@endsection
