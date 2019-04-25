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
                         <tr>  <td>Total Income: 100000 tk</td></tr> <br>
                            <tr> <td>Total cost: 50000 tk</td></tr> 
                             <hr>
                              <td>Total Balence: 50000 tk</td>
                        </div>
                    </div>
                    <div class="col-md-7">
                        
                    </div>
                </div>
                  
          
        </div>
    </div>
</div>
@endsection
