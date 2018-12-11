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
                <th>Contact</th>
                <th>Message</th>
                <th>Date</th>
                <th>Action</th>
                

            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
            <tr>
                <td>{{$message->name}}</td>
                <td>{{$message->contact}}</td>
                <td>{{str_limit($message->message, 20)}}</td>
                <td>{{$message->created_at}}</td>
                <td>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="btn btn-sm btn-success" href="{{ route('messages.show', ['id' => $message->id]) }}">View</a>
                        </li>
                        <li class="list-inline-item">
                            <form action="{{ route('messages.destroy', ['id'=>$message->id]) }}" method="POST">
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
                <th>Contact</th>
                <th>Message</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
