var imageLoader = document.getElementById('filePhoto');
imageLoader.addEventListener('change', handleImage, false);

function handleImage(e) {
    var reader = new FileReader();
    reader.onload = function (event) {
        $('.uploader img').attr('src',event.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
}

// Edit for multiple images
// I didn't try but it should work.
// Also you need write some CSS code to see all images in container properly.
function handleImages(e) {
    $('.uploader img').remove();
    for(var i = 0; i < e.target.files.length; i++){
        var reader = new FileReader();
        reader.onload = function (event) {
            var $img = $('<img/>');
            $img.attr('src', event.target.result);
            $('.uploader').append($img);
        }
        reader.readAsDataURL(e.target.files[i]);
    }
}