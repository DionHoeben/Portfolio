window.onload = function() {

    ///////////////////////
    ///	hide scrollbar	///
    ///////////////////////
    var parent = document.getElementById('container3');
    var child = document.getElementById('container4');
    child.style.paddingRight = child.offsetWidth - child.clientWidth + "px";


    ///////////////////////////////
    ///	start at bottom of page	///
    ///////////////////////////////
    // function updateScroll(){
    var element = document.getElementById("container4");
    element.scrollTop = element.scrollHeight;
    // }

};