@extends('layouts.admin')
@section('content')
@if (Session::has('success_msg'))
	{{Session::get('success_msg')}}
@endif
<div class="container">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Action</th>
                

            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{$project->name}}</td>
                <td>{{$project->created_at}}</td>
                <td>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="btn btn-sm btn-success" href="{{ route('projects.edit', ['id' => $project->id]) }}">View</a>
                        </li>
                        <li class="list-inline-item">
                            <form action="{{ route('projects.destroy', ['id'=>$project->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm">Del</button>
                            </form>
                        </li>
                        
                    </ul>
                </td>
            </tr>
            @endforeach

        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
