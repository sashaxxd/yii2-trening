$(document).ready(function()
{
    $("a[data-rel='PhotoGallery1']").attr('rel', 'PhotoGallery1');
    $("#PhotoGallery1").magnificPopup({delegate:'a', type:'image', gallery: {enabled: true, navigateByImgClick: true}});
    $('img[data-src]').lazyload();
});