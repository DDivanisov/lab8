<h1>Jets</h1>
    <a href="{{ route('jets.create') }}" class="btn btn-primary mb-3">Add New Jet</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Model</th>
                <th>Capacity</th>
                <th>Hourly Rate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jets as $jet)
                <tr>
                    <td>{{ $jet->name }}</td>
                    <td>{{ $jet->model }}</td>
                    <td>{{ $jet->capacity }}</td>
                    <td>${{ $jet->hourly_rate }}</td>
                    <td>
                        <a href="{{ route('jets.show', $jet) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('jets.edit', $jet) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('jets.destroy', $jet) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>