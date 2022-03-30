@if ($errors->has($name))
<ul>
    @foreach ($errors->get($name) as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif