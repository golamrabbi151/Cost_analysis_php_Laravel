
@extends('layouts.app')


@section('content')
<div class="container"style="background-color: gray;" >
    <div class="row ">
        <div class="col-md-12">
                   @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="row">
                    <div class="col-md-5">
                        <div>

                
                            <h2>Total calculation</h2>
                            @if ($totalIncome)
                             <tr>  <td>Total Income: {{$totalIncome}} tk</td></tr> <br>
                            @endif
                          @if ($totalCost)
                          <tr> <td>Total cost:{{$totalCost}} tk</td></tr> 
                          @endif
                             {{-- <hr> --}}
                             <br>
                             @if ($balence)
                               <td>Total Balence: {{$balence}} tk</td>
                             @endif
                             
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div>
                           
                          {!! Form::open(array('action'=>'UserController@store','method'=>'POST')) !!}

                          <div class="form-group">
                          {!! Form::label('income', 'Income:') !!}
                          {!! Form::text('income','0', ['class' => 'form-control','required']) !!}
                          </div>

                          <div class="form-group">
                              {!! Form::label('costName','Cost type *') !!}
                              {!! Form::text('costName',null,['class'=>'form-control','required']) !!}
                          </div>

                          <div class="from-group">
                            {!! Form::label('cost','Cost *') !!}
                            {!! Form::text('cost',null,['class'=>'form-control','required']) !!}

                          </div>

                          <div class="form-group">
                             {!! Form::label(' ') !!}
                               {!! Form::submit('add cost',['class'=>'form-control btn btn-primary']) !!}
                          </div>


                          {!! Form::close() !!}
                              


                        </div>
                        
                    </div>
                </div>
                  
          
        </div>
    </div>
</div>
@endsection


{{-- @include('layouts.footer') --}}