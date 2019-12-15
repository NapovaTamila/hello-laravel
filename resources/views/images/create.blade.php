<h1>Create image</h1>

    <form action="/image-manager" method="POST" enctype="multipart/form-data">

        @csrf
        
        <label for="im_title">Title : 
            <input type="text" name="im_title" id="im_title">
        </label>
        
            <br>

        <label for="im_alt">Alt : 
            <input type="text" name="im_alt" id="im_alt">
        </label>

        <br>

        <label for="im_file">File : 
            <input type="file" name="im_file" id="im_file">
        </label>

        <br>
        <hr>

        <button type="submit">[Submit]</button>

    </form>
