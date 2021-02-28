@extends('bootstrap-theme')
@section("title","Staff")
@section("content")

<h1>World Staff Report</h1>
<!-- boder='1' style="text-align: right;" -->
<form action="{{ url('/staff') }}" method="GET" class="my-4">
    <input name="search" id="search" value="{{ request('search') }}" />
    <button type="submit">Search</button>
</form>
<a href="{{ url('/staff/create') }}" class="btn btn-sm btn-success mr-4">New Record</a>

<table class="table table-sm table-bordered text-right" style="width:50%">
    <tr>
         <th>Name</th> <th>Age</th> <th>Salary</th> <th>Phone</th> <th>Action</th>
    </tr></tr>
    @foreach($staffs as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>{{ number_format ( $item->age )}}</td>
        <td>{{ number_format ($item->salary )}}</td>
        <td>{{ $item->phone }}</td>
        <td>
            <a href="{{ url('/staff/'.$item->id ) }}" class="btn btn-sm btn-primary">View</a>
            <a href="{{ url('/staff/'.$item->id.'/edit' ) }}" class="btn btn-sm btn-warning">Edit</a>

<form method="POST" action="{{ url('/staff' . '/' . $item->id) }}" style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Confirm delete?')">
        Delete
    </button>
</form>

        </td>

    </tr>
    @endforeach
</table>
<div class="mt-4">{{ $staffs->appends(['search' => request('search')])->links() }}</div>


@endsection