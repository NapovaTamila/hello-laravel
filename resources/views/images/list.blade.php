<h1>Image List</h1>

<!-- @foreach ($imgs as $i)
    <img style="width:200px;" src="{{ $i->url }}">
@endforeach -->

<table border="2px, solid, black">
    @foreach ($imgs as $i)
            <tr>
                <td><button>@component('btn-edit')
                            @endcomponent
                    </button>
                </td>
                <td>
                    <a href="/image-manager/{{$i->id}}">{{$i->url}}</a> <br>
                    {{$i->filename}}
                </td>
                <td><img style="width:150px;" src="{{ $i->url }}"></td>
                <td><button>@component('btn-delete')
                            @endcomponent</button></td>
            </tr>
    @endforeach
</table>