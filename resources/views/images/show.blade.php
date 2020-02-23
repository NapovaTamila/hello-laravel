<h1>Image</h1>
<a href="/image-manager"> Image Manager </a>
<hr>

@component('btn-edit')
@endcomponent

@component('btn-delete')
@endcomponent

<table>
    <tr>
        <td>ID:</td>
        <td>{{ $img->id }}</td>
    </tr>
    <tr>
        <td>URL:</td>
        <td>{{ $img->url }}</td>
    </tr>
    <tr>
        <td>Filename:</td>
        <td>{{ $img->filename }}</td>
    </tr>
    <tr>
        <td>ALT:</td>
        <td>{{ $img->alt }}</td>
    </tr>
    <tr>
        <td colspan="2"><img style='height:300px;' src="{{ $img->url }}"></td>
    </tr>
</table>
