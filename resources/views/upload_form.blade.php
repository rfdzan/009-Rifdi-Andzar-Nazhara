<link rel="stylesheet" href="{{asset('css/user/upload.css')}}">
<div class="popup-form">
    <form class="user-upload-form" action="{{ route('artwork_upload', $name)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="file">Upload</label>
            <input id="upload-artwork" type="file" name="file[]" accept="image/*" multiple>
            <input type="submit" value="Submit">
        </div>
        <button id="clear-file">Clear</button>
    </form>
    <script src="{{asset('js/upload.js')}}"></script>
</div>