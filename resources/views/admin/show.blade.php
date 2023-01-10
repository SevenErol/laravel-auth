@extends ('layouts.app')

@section ('content')

<div class="container p-3">
    <h1 class="text-center mb-4">Single data view</h1>

    <table class="table p-5">
        <thead>
            <tr class="bg-light">
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <th scope="row">{{ $project['id']}}</th>
                <td>{{ $project['title'] }}</td>
                <td>{{ $project['description'] }}</td>
                <td>{{ $project['date']}}</td>
                <td>
                    <div class="d-flex flex-column">
                        <div>
                            <a href="/" type="button" class="btn btn-primary col-12 mb-3">Edit</a>
                        </div>
                        <div>
                            <a href="/" type="button" class="btn btn-danger col-12 mb-3">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>



        </tbody>
    </table>
</div>

@endsection