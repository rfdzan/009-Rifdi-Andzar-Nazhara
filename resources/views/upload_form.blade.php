<link rel="stylesheet" href="{{asset('css/user/upload.css')}}">
<div class="popup-form-container">
    <div class="popup-form" id="popup-form">
        <p id="close-upload-popup">X</p>
        <div class="drag-drop-outline">
            <form class="user-upload-form" action="{{ route('artwork_upload', $name)}}" method="post" enctype="multipart/form-data">
                @csrf
                <p>drag & drop files or <u class="browse-files-link" id="file-browser-facade">browse</u></p>
                <input class="input-file-browser" id="file-browser" type="file" name="file[]" accept="image/*" multiple>
                <button class="input-submit-files" id="submit-files" type="submit" value="Submit">submit</button>
            </form>
        </div>
        <p id="num-of-files"></p>
        <div class="submit-button-container" id="submit-button">
            <div>Submit</div>
        </div>
    </div>
</div>
<script src="{{asset('js/user/upload.js')}}"></script>
<script src="{{asset('js/user/browse_file_facade.js')}}"></script>