window.onload = function() {

    ///	hide scrollbar contact list	///
    var parent = document.getElementById('container1');
    var child = document.getElementById('container2');
    child.style.paddingRight = child.offsetWidth - child.clientWidth + "px";

    ///	hide scrollbar chat///
    var parent = document.getElementById('container3');
    var child = document.getElementById('container4');
    child.style.paddingRight = child.offsetWidth - child.clientWidth + "px";


    ///	start at bottom of page	///
    var element = document.getElementById("container4");
    element.scrollTop = element.scrollHeight;

    $(function() {
        $("a.youtube").YouTubePopup({
            hideTitleBar: true
        });
        $("a.youtube").YouTubePopup({
            autoplay: 0
        });
    });

};

