<h1>Image List</h1>

<a href="/image-manager/create">[CREATE]</a>

<table border="1">
    @foreach ($imgs as $i)
            <tr>
                <td>    <!--@component('btn-edit')
                        @endcomponent-->
                    <a href="/image-manager/{{$i->id}}/edit"><button type="submit">[EDIT]</button></a>
                </td>

                <td>
                    <a href="/image-manager/{{$i->id}}">{{$i->url}}</a> <br>
                    {{$i->filename}}
                </td>

                <td><img style="width:150px;" src="{{ $i->url }}"></td>

                    <td>
                        <form action="/image-manager/{{ $i -> id }}" method="POST">
                            @csrf <!-- захищає від підміни запиту -->
                            @method('DELETE') <!-- підстановка метода на DELETE -->
                            <button type="submit">[X]</button>
                        </form>
                        <!--@component('btn-delete')
                        @endcomponent-->
                    </td>
            </tr>
    @endforeach
</table>