var monthNames = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
function startTime() {
    var today = new Date();
    var d = today.getDate();
    var h = today.getHours();
    var i = today.getMinutes();
    var s = today.getSeconds();
    var m = monthNames[today.getMonth()];
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('navbar-clock').innerHTML =
        d +' ' + m + " | " + h + ":" + i + ":" + s;
    var t = setTimeout(startTime, 1000);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}