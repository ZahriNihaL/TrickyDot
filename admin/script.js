function changeNav(cls) {
    $("." + cls).addClass("active");
}

$(document).ready(function () {
    $('#summernote').summernote({
        height:250
    });
});