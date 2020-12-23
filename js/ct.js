loadJS('js/cookies.js');

function onLeftClick(nid) {
    var t1 = document.getElementById("txt_show");
    switch (nid) {
        case 'btn_ac':
            docCookies.setItem('username','admin',604800);
            break;
        case 'btn_sc':
            // var username = docCookies.getItem('username');
            // t1.textContent = username;
            alert(docCookies.getCookie('username'));
            break;
        default:
            break;
    }
};