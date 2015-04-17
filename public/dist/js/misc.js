function pesan_err(pesan) {
    var temp = '<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Kesalahan</h4>  ' + pesan + ' </div>';
    return temp;
}

function pesan_succ(pesan) {
    var temp = '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Berhasil</h4> ' + pesan + ' </div>';
    return temp;
}

var win = null;
function newWindow(mypage, myname) {
    var w = 850;
    var h = 600;
    var winl = (screen.width - w) / 2;
    var wint = (screen.height - h) / 2;
    if (winl < 0)
        winl = 0;
    if (wint < 0)
        wint = 0;
    var settings = 'height=' + h + ',';
    settings += 'width=' + w + ',';
    settings += 'top=' + wint + ',';
    settings += 'left=' + winl + ',';
    settings += 'resizable=0,scrollbars=1,status=0,toolbar=0';
    win = window.open(mypage, myname, settings);
    win.window.focus();
}