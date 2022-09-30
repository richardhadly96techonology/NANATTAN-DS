@extends('recptions.layout')
     
@section('content')
<div class="row justify-content-md-center">
 
     
 @if ($errors->any())
     <div class="alert alert-danger">
         <strong>Whoops!</strong> There were some problems with your input.<br><br>
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
 @endif
  
 <div class="card mb-3 bg-secoundrey" style="max-width: 70%;"> 
         <div class="card-body">
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <h1><li class="breadcrumb-item active" aria-current="page">Persion Identification</li></h1>
                 </ol>
             </nav>
         </div>
 
  
         <form action="{{ route('recptions.update',$recption->id) }}" method="POST" enctype="multipart/form-data"> 
         @csrf
         @method('PUT')
                 <div class="row form-group">
                     <div class="col">
                     <input type="text" name="name" value=" {{ $recption->lname }} {{ $recption->fname }}" class="form-control" placeholder="First name" readonly>
                     </div>
                     <div class="col">
                     <input type="text" name="nicno" value="{{ $recption->nicno }}" class="form-control" placeholder="NIC Number" readonly>
                     </div>
                 </div>
                  
                 <div class="row form-group">
                     <div class="col">
                     <input type="text" name="address" value="{{ $recption->address }}" class="form-control" placeholder="Address" readonly>
                     </div>
                     <div class="col">
                     <input type="email" name="email" value="{{ $recption->email }}" class="form-control" placeholder="email" readonly>
                     </div>
                 </div>
                 <div class="row form-group">
                    <div class=" col ">
                        <label for="inputState">DS Division</label>
                        <select id="inputState" name="dsdivsion" class="form-control">
                            <option selected>Choose...</option>
                            <option>MN/97</option>
                            <option>MN/99</option>
                            <option>MN/107</option>
                            <option>MN/109</option>
                            <option>MN/120</option>
                            <option>MN/121</option>
                        </select>
                    </div>
                    <div class=" col ">
                        <label for="inputState">Reson for Coming</label>
                        <select id="inputState" name="branch" class="form-control">
                            <option selected>Choose...</option>
                            <option>Land</option>
                            <option>ADR</option>
                            <option>NIC</option>
                            <option>Admin</option>
                            <option>SSO</option>
                            <option>Penstion</option>
                            <option>Account</option>
                        </select>
                    </div>
                 </div>
                  
                 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
  
      
 </form>
 </div>
 </div>
@endsection