@extends('layouts.app')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Add Items</div>
                <div class="panel-body">
                       {!! Form::open(array('files'=> true)) !!}
                       <div class="form-group col-lg-4">
                         {!! Form::text('title', null, array('required','class'=>'form-control','placeholder'=>'Item Title')) !!}

                       </div>
                       <div class="form-group col-lg-4">
                         {!! Form::select('meun_id',$menus, null, array('required','class'=>'form-control','placeholder'=>'Choose Item Menu')) !!}
                       </div>
                       <div class="form-group col-lg-4">
                         {!! Form::select('status', ['Active'=>'Active','Inactive'=>'Inactive'], null, array('required','class'=>'form-control','placeholder'=>'Item status')) !!}
                       </div>
                       <div class="form-group col-lg-12">
                         {!! Form::textarea('description', null, array('required','class'=>'form-control','placeholder'=>'Items description')) !!}
                       </div>
                       <div class="form-group col-lg-4">
                         {!! Form::file('image', array('required','class'=>'form-control','placeholder'=>'Items image')) !!}
                       </div>
                       <div class="form-group col-lg-2">
                         {!! Form::number('price', null, array('required', 'step' => 'any','class'=>'form-control','placeholder'=>'Item Price')) !!}

                       </div>
                       <div class="form-group col-lg-2">
                         {!! Form::submit('Add', array('class'=>'btn btn-primary')) !!}
                       </div>
                       {!! Form::close() !!}
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">Items</div>

                <div class="panel-body">
                    <table class="table table-bordered table-striped table-hover">
                           <thead>
                              <tr>
                                  <th>id</th>
                                   <th>Title</th>
                                   <th>Price</th>
                                   <th>Description</th>
                                   <th>status</th>
                                   <th>image</th>
                                   <th>meun</th>
                                   <th>Created By</th>
                                   <th>Edit</th>
                              </tr>
                           </thead>
                           <tbody>
                             @foreach($items as $item)
                               <tr>
                                 <td>{{$item->id}}</td>
                                 <td>{{$item->title}}</td>
                                 <td>{{$item->price}}</td>
                                 <td>{{$item->description}}</td>
                                 <td>{{$item->status}}</td>
                                 <td><img src="{{$item->image}}" alt="" height="70px" width="70px"></td>
                                 <td>{{$item->meun->title}}</td>
                                 <td>{{$item->user->name}}</td>
                                 <td>
                                    {!! Form::open(["url"=>"Items/$item->id","method"=>"delete"]) !!}
                                    {!! Form::submit("Delete",["class"=>"btn btn-danger"]) !!}
                                    {!! Form::close() !!}
                                 </td>
                                 <td>
                                     <a href="Items/{{$item->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a>
                                 </td>
                               </tr>
                               @endforeach
                           </tbody>
                    </table>

                    <div class="paginations col-lg-12">
                            {!! $items->render() !!}
                    </div>
                </div>

@endsection
