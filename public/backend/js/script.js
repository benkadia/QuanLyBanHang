function openfile(field) {
    CKFinder.popup('../../', null, null, function(url) { SetFileField(url, field) });
}

function SetFileField(fileUrl, id) {
    fileUrl = fileUrl.replace('/QuanLyBanHang-1/public', '');
    $('#' + id).val(fileUrl);
    $('#' + id).parent().children('img').attr('src', PUBLIC + fileUrl);
}