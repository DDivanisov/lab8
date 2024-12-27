    <h1>Show Jet</h1>
            <div class="mb-3">
                <label>Name</label>
                <label>{{ $jet->name }}</label>
            </div>

            <div class="mb-3">
                <label>Model</label>
                <label>{{ $jet->model }}</label>
            </div>

            <div class="mb-3">
                <label>Capacity</label>
                <label>{{ $jet->capacity }}</label>
            </div>

            <div class="mb-3">
                <label>Hourly Rate</label>
                <label>{{ $jet->hourly_rate }}</label>
            </div>
            <h2>Reviews</h2>

@if($jet->reviews->isEmpty())
    <p>No reviews yet for this jet.</p>
@else
    <table class="table">
        <thead>
            <tr>
                <th>Reviewer Name</th>
                <th>Text</th>
                <th>Rating</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jet->reviews as $review)
            <tr>
                <td>{{ $review->reviewer_name }}</td>
                <td>{{ $review->text }}</td>
                <td>{{ $review->rating }}/5</td>
                <td>{{ ucfirst($review->status) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif