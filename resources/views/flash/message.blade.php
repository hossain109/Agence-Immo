@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="my-0">
        @foreach ($errors->all() as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>
@endif