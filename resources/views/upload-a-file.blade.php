<form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="file">Choose File:</label>
    <input type="file" name="file" id="file">
    <button type="submit">Upload</button>
</form>
