@extends('recptions.layout')
   
@section('content')
@if($tables->isNotEmpty())
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
        @foreach ($tables as $recption)
        <tbody>
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $recption->lname }} {{ $recption->fname }}</td>
            <td>{{ $recption->branch }}</td>
            <td>{{ $recption->empno }}</td>
            <td>{{ $recption->nicno }}</td>
            <td>
                <form action="{{ route('tables.destroy',$recption->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('tables.show',$recption->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('tables.edit',$recption->id) }}">Edit</a>
     
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