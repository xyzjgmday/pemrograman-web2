<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Rich Editor</title>
    <!-- Include CSS files here -->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Menampilkan Rich Editor</h3>
            </div>
            <div class="col-md-12">
                <textarea name="editor" id="ckview" cols="30" rows="10"></textarea>
            </div>
        </div>
    </div>

    <!-- Include JavaScript files here -->
    <script src="{{url('plugins/tinymce/tinymce.min.js')}}"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/jquery.tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#ckview'
        });
    </script>
</body>

</html>