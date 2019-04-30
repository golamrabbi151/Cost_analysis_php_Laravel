
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
                   @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="row">
                    <div class="col-md-3" >
                        <div  style="border:1px solid white; padding: 8px;">

                
                            <h2 style="text-align: center; font-weight: bold;text-transform: uppercase; font-size: 23px;">Total calculation</h2>
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
                      <div class="col-md-2"></div>
                    <div class="col-md-7">
                        <div style="padding-left: 10%; padding-right: 10%;">
                           <h2 style="text-align: center; font-weight: bold;text-transform: uppercase;     font-size: 23px;">Add your cost and income</h2>
                          {!! Form::open(array('action'=>'UserController@store','method'=>'POST')) !!}

                          <div class="form-group">
                          {!! Form::label('income', 'Income:') !!}
                          {!! Form::text('income','0', ['class' => 'form-control','required']) !!}
                          </div>

                          <div class="form-group">
                              {!! Form::label('costName','Cost type ') !!}
                              {!! Form::text('costName',0,['class'=>'form-control','required']) !!}
                          </div>

                          <div class="from-group">
                            {!! Form::label('cost','Cost') !!}
                            {!! Form::text('cost',0,['class'=>'form-control','required']) !!}

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