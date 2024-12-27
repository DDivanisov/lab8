<h1>Add New Jet</h1>

    <form action="{{ route('jets.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" name="model" id="model" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="capacity" class="form-label">Capacity</label>
            <input type="number" name="capacity" id="capacity" class="form-control" required min="1">
        </div>

        <div class="mb-3">
            <label for="hourly_rate" class="form-label">Hourly Rate</label>
            <input type="number" name="hourly_rate" id="hourly_rate" class="form-control" required min="0" step="0.01">
        </div>

        <button type="submit" class="btn btn-primary">Add Jet</button>
    </form>