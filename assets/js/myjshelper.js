/*----------------------------Tambahan Herpan-------------------------*/
function create_signature() {

    var $sigdiv = $('#signature').jSignature({ 'UndoButton': true, 'height': 200, 'width': 320 });

    $('#signature').bind('mouseup touchend', function (e) {
        // Get response of type image
        var data = $sigdiv.jSignature('getData', 'image');
        // Alter image source
        $
        $('#tanda_tangan').val(data);
        $('#sign_prev').attr('src', 'data:' + data);
    });
}

function getBase64Image(img) {
    if (img.src==='data:image/png;base64,') {
        return;
    }
    var canvas = document.createElement('canvas');
    canvas.width = img.width;
    canvas.height = img.height;
    var ctx = canvas.getContext('2d');
    ctx.drawImage(img, 0, 0);
    var dataURL = canvas.toDataURL('image/png');
    if(dataURL.toString()=='data:,'){
        location.reload();
    }
    //console.log(dataURL);
    return dataURL;
}
