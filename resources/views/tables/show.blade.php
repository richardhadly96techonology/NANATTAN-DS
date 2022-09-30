@extends('Tables.layout')
   
@section('content')
<div class="row justify-content-md-center">
        <div class="card mb-3 bg-dark  " style="max-width: 50%;">
            <div class="row no-gutters bg-danger   ">
                <div class="col-md-4">
                        <img src="/image/{{ $Table->image }}" width="90%" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $Table->lname }} {{ $Table->fname }}</li>
                            <li class="list-group-item"> {{ $Table->designation }}</li>
                            <li class="list-group-item">{{ $Table->branch }} Branch</li>
                            <li class="list-group-item">Divisional Secretariat Nanattan</li>
                        </ul>
                    </div>
                </div>
            </div>
         

                <div class="row">
                    <div class="col">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Emp No: {{ $Table->empno }}</li>
                            <li class="list-group-item">{{ $Table->address }}</li>
                            <li class="list-group-item">NIC No: {{ $Table->nicno }} </li>
                            <li class="list-group-item">{{ $Table->department }}</li>
                            <li class="list-group-item">{{ $Table->ministry }} Ministry</li>
                        </ul>                    
                    </div>
                    <div class="col">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $Table->email }}</li>
                            <li class="list-group-item">BOB: {{ $Table->dob }}</li>
                            <li class="list-group-item">{{ $Table->phno }}</li>
                            <li class="list-group-item">Apoinment Date: {{ $Table->apdate }}</li>
                            <li class="list-group-item">{{ $Table->empno }}</li>
                        </ul>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection