<h1>edit image</h1>

<a href="/image-manager"><button>HOME</button></a>
<br>

    <form action="/image-manager/{{$img->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        

        <label for="im_alt">Alt : 
            <input type="text" name="im_alt" id="im_alt" value="{{$img->alt}}">  
        </label>

        <br>
        <br>

        <div><img style="width:200px;" src="{{ $img->url }}"></div>

        <br>

        <label for="im_file">File : 
            <input type="file" name="im_file" id="im_file">
        </label>

        <br>
        <hr>

        <button type="submit">[Submit]</button>

    </form>