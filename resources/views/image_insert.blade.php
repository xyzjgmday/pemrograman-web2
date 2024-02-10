<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Image</title>
    <!-- Include CSS files here jika diperlukan -->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Insert Image</h3>
            </div>
            <div class="col-md1-12">
                <form action="{{ route('image_save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Image Title</label>
                        <input type="text" name="image_title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Image Description</label>
                        <textarea name="image_desc" id="ckview"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image_src">Upload</label>
                        <input type="file" name="image_src" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save Image</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Include JavaScript files here jika diperlukan -->
    <script src="{{url('plugins/tinymce/tinymce.min.js')}}"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/jquery.tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#ckview'
        });
    </script>
</body>

</html>