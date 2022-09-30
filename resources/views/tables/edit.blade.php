@extends('tables.layout')
     
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
                     <h1><li class="breadcrumb-item active" aria-current="page">Edit Staff Registration</li></h1>
                 </ol>
             </nav>
         </div>
 
  
         <form action="{{ route('tables.update',$Table->id) }}" method="POST" enctype="multipart/form-data"> 
         @csrf
         @method('PUT')
                 <div class="row form-group">
                     <div class="col">
                     <input type="text" name="empno"  value="{{ $Table->empno }}" class="form-control" placeholder="Employee Number">
                     </div>
                     <div class="col">
                     <input type="text" name="nicno" value="{{ $Table->nicno }}" class="form-control" placeholder="NIC Number">
                     </div>
                 </div>
                 <div class="row form-group">
                     <div class="col">
                     <input type="text" name="fname" value="{{ $Table->fname }}" class="form-control" placeholder="First name">
                     </div>
                     <div class="col">
                     <input type="text" name="lname" value="{{ $Table->lname }}" class="form-control" placeholder="Last name">
                     </div>
                 </div>
                 <div class="row form-group">
                     <div class="col">
                     <input type="text" name="address" value="{{ $Table->address }}" class="form-control" placeholder="Address">
                     </div>
                     <div class="col">
                     <input type="email" name="email" value="{{ $Table->email }}" class="form-control" placeholder="email">
                     </div>
                 </div>
                 <div class="row form-group">
                     <div class="col">
                     <input type="number" name="phno" value="{{ $Table->phno }}" class="form-control" placeholder="Phone Number">
                     </div>
                     <div class="col">
                     <input type="text" name="branch" value="{{ $Table->branch }}" class="form-control" placeholder="Branch">
                     </div>
                 </div>
                 <div class="row form-group">
                     <div class="col">
                     <input type="text" name="designation" value="{{ $Table->designation }}" class="form-control" placeholder="Designation">
                     </div>
                     <div class="col">
                     <input type="text" name="branch" value="{{ $Table->branch }}" class="form-control" placeholder="Branch">
                     </div>
                 </div>
                 <div class="row form-group">
                     <div class="col">
                     <input type="text" name="department" value="{{ $Table->department }}" class="form-control" placeholder="Department">
                     </div>
                     <div class="col">
                     <input type="text" name="ministry" value="{{ $Table->ministry }}" class="form-control" placeholder="Ministry">
                     </div>
                 </div>
                 <div class="row form-group">
                     <div class="col">
                     <label for="exampleInputEmail1">Date of Apoinment</label>
                     <input type="date" name="apdate" value="{{ $Table->apdate }}" class="form-control" placeholder="Apoinment Date">
                     </div>
                     <div class="col">
                     <label for="exampleInputEmail1">Date of Birth</label>
                     <input type="date" name="dob" value="{{ $Table->dob }}" class="form-control" placeholder="Date of Birth">
                      </div>
                 </div> 
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Image:</strong>
                         <input type="file" name="image" value="{{ $Table->image }}" class="form-control" placeholder="image">
                     </div>
                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
  
      
 </form>
 </div>
 </div>
@endsection