<!DOCTYPE html>
<html>
<head>
    <title>Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

    <h3>Leapheng</h3>

    <a href="{{ route('features.create') }}" class="btn btn-primary mb-3">Add Feature</a>

    @foreach ($features as $feature)
        <div class="mb-3">
            <img src="{{ asset('storage/' . $feature->image) }}" style="width: 100px; height: 100px;"><br>
            <strong>{{ $feature->name }}</strong><br>
            <a href="{{ route('features.edit', $feature->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('features.destroy', $feature->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    @endforeach

</body>
</html>
