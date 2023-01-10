@extends ('layouts.app')

@section ('content')

<div class="container p-3">
    <h1 class="text-center mb-4">Laravel CRUD table admin</h1>

    <table class="table p-5">
        <thead>
            <div class="row justify-content-between p-3 bg-light m-0 border-bottom border-dark align-items-center">
                <div class="col-2"><strong>All data</strong></div>
                <div class="col-2 text-end"><a href="{{ route('admin.project.create') }}" type="button" class="btn btn-primary">Add new data</a></div>
            </div>
            <tr class="bg-light">
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <th scope="row">{{ $project['id']}}</th>
                <td>{{ $project['title'] }}</td>
                <td>{{ $project['description'] }}</td>
                <td>{{ $project['date']}}</td>
                <td>
                    <div class="d-flex flex-column">
                        <div>
                            <a href="/" type="button" class="btn btn-secondary col-12 mb-3">View</a>
                        </div>
                        <div>
                            <a href="/" type="button" class="btn btn-primary col-12 mb-3">Edit</a>
                        </div>
                        <div>
                            <a href="/" type="button" class="btn btn-danger col-12 mb-3">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>
</div>

@endsection