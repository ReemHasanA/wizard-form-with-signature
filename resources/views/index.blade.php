@extends('layout')

@section('body')
<div class="card">
    <div class="card-header">
        <strong class="card-title">Admission Table</strong>
        <a href="{{url('create')}}" class="card-tool float-right btn btn-outline-info"><i class="fa fa-plus"></i> Add New Admission</a>
    </div>    
    
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admissions as $admission)
                <tr>
                    <td>{{ $admission->id }}</td>
                    <td> <a href="{{url('edit',$admission->id)}}">Edit</a></td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection