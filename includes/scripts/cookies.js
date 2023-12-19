document.addEventListener("DOMContentLoaded", function(){
    var consent = getCookie("accept_cookies");
    if (!consent) {
        document.getElementById("cookieConsentContainer").style.display = "flex";
    }
    document.getElementById("acceptCookies").addEventListener("click", function(){
        setCookie("accept_cookies", true, 365);
        document.getElementById("cookieConsentContainer").style.display = "none";
        location.reload(); // Recarga la página
    });
    document.getElementById("rejectCookies").addEventListener("click", function(){
        setCookie("reject_cookies", true, 1);
        document.getElementById("cookieConsentContainer").style.display = "none";
        setTimeout(function() {
            document.getElementById("cookieConsentContainer").style.display = "flex";
        }, 60000); // 60,000 milisegundos = 1 minuto
    });
});
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}