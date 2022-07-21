function readURL(input) {
    // console.log(input.files);
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            document.getElementById('image-preview').src = e.target.result;
        };

        reader.readAsDataURL(input.files[0]);
    }
}