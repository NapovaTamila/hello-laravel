<h1>Image List</h1>

<!-- @foreach ($imgs as $i)
    <img style="width:200px;" src="{{ $i->url }}">
@endforeach -->

<table border="2px, solid, black">
    @foreach ($imgs as $i)
            <tr>
                <td>@component('btn-edit')
                    @endcomponent
                    
                </td>
                <td>
                    <a href="/image-manager/{{$i->id}}">{{$i->url}}</a> <br>
                    {{$i->filename}}
                </td>
                <td><img style="width:150px;" src="{{ $i->url }}"></td>
                    <td>
                        <form action="/image-manager/{{ $i -> id }}" method="POST">
                            @csrf
                            @method('DELETE') <!-- підстановка метода на DELETE -->
                            <button type="submit">[X]</button>
                        </form>
                        <!--@component('btn-delete')
                        @endcomponent-->
                    </td>
            </tr>
    @endforeach
</table>