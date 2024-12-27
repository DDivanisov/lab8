<h1>Edit Jet</h1>

    <form action="{{ route('jets.update', $jet) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $jet->name }}" required>
        </div>

        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" name="model" id="model" class="form-control" value="{{ $jet->model }}" required>
        </div>

        <div class="mb-3">
            <label for="capacity" class="form-label">Capacity</label>
            <input type="number" name="capacity" id="capacity" class="form-control" value="{{ $jet->capacity }}" required min="1">
        </div>

        <div class="mb-3">
            <label for="hourly_rate" class="form-label">Hourly Rate</label>
            <input type="number" name="hourly_rate" id="hourly_rate" class="form-control" value="{{ $jet->hourly_rate }}" required min="0" step="0.01">
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>