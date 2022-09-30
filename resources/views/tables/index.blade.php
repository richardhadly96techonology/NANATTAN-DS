@extends('tables.layout')
     
@section('content')
     
    
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
        @foreach ($tables as $table)
        <tbody>
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $table->lname }} {{ $table->fname }}</td>
            <td>{{ $table->branch }}</td>
            <td>{{ $table->empno }}</td>
            <td>{{ $table->nicno }}</td>
            <td>
                <form action="{{ route('tables.destroy',$table->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('tables.show',$table->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('tables.edit',$table->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>
    
    {!! $tables->links() !!}
        
@endsection