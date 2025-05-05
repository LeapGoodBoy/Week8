<form method="POST" action="{{ isset($feature) ? route('features.update', $feature->id) : route('features.store') }}" enctype="multipart/form-data">
    @csrf
    @if(isset($feature))
        @method('PUT')
    @endif

    <input type="text" name="name" placeholder="Enter name" value="{{ $feature->name ?? '' }}" class="form-control mb-2">
    <input type="file" name="image" class="form-control mb-2">
    <button type="submit" class="btn btn-success">Save</button>
</form>
