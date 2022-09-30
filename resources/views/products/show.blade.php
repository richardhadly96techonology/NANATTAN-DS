@extends('products.layout')
   
@section('content')
 
    <div class="row justify-content-md-center">
        <div class="card mb-3 bg-warning  " style="max-width: 50%;">
            <div class="row no-gutters bg-danger   ">
                <div class="col-md-4">
                        <img src="/image/{{ $product->image }}" width="90%" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $product->lname }} {{ $product->fname }}</li>
                            <li class="list-group-item"> {{ $product->designation }}</li>
                            <li class="list-group-item">{{ $product->branch }} Branch</li>
                            <li class="list-group-item">Divisional Secretariat Nanattan</li>
                        </ul>
                    </div>
                </div>
            </div>
         

                <div class="row">
                    <div class="col">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Emp No: {{ $product->empno }}</li>
                            <li class="list-group-item">{{ $product->address }}</li>
                            <li class="list-group-item">NIC No: {{ $product->nicno }} </li>
                            <li class="list-group-item">{{ $product->department }}</li>
                            <li class="list-group-item">{{ $product->ministry }} Ministry</li>
                        </ul>                    
                    </div>
                    <div class="col">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $product->email }}</li>
                            <li class="list-group-item">BOB: {{ $product->dob }}</li>
                            <li class="list-group-item">{{ $product->phno }}</li>
                            <li class="list-group-item">Apoinment Date: {{ $product->apdate }}</li>
                            <li class="list-group-item">{{ $product->empno }}</li>
                        </ul>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
            
                 
@endsection