<h1>Image List</h1>

@foreach ($imgs as $i)
    <img style="width:200px;" src="{{ $i->url }}">
@endforeach