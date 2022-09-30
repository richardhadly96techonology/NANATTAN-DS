@extends('products.layout')
   
@section('content')
@if($products->isNotEmpty())
     <table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Branch</th>
            <th scope="col">Employe No</th>
            <th scope="col">NIC No</th>
            <th scope="col" width="20%">Action</th>
        </tr>
    </thead>
        @foreach ($products as $product)
        <tbody>
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->lname }} {{ $product->fname }}</td>
            <td>{{ $product->branch }}</td>
            <td>{{ $product->empno }}</td>
            <td>{{ $product->nicno }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>
    
@else 
<div class="card text-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endif
@endsection