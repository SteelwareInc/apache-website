
function loadedScreen() {
    document.getElementById("stylecss").remove();
}

$(document).ready(function () {
    var scriptElement = document.createElement('script');
    scriptElement.type = 'text/javascript';
    scriptElement.src = 'assets/js/init.js';
    document.head.appendChild(scriptElement);
});