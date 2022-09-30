@extends('recptions.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
             
             
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
        @foreach ($recptions as $recption)
        <tbody>
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $recption->lname }} {{ $recption->fname }}</td>
            <td>{{ $recption->branch }}</td>
            <td>{{ $recption->empno }}</td>
            <td>{{ $recption->nicno }}</td>
            <td>
                <form action="{{ route('recptions.destroy',$recption->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('recptions.edit',$recption->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('recptions.edit',$recption->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>
    
    {!! $recptions->links() !!}
        
@endsection