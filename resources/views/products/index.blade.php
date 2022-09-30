@extends('products.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Profile</h2>
            </div>
             
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
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
    
    {!! $products->links() !!}
        
@endsection