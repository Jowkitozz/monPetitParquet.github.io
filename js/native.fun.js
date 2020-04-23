function doVibrate() {
    navigator.vibrate([500, 1000, 500]);
}

function geoFindMe() {

    const status = document.querySelector('#status');
    const mapLink = document.querySelector('#map-link');

    mapLink.textContent = '';

    function success(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;

        status.textContent = '';
        mapLink.textContent = `Tu es à la latitude: ${latitude} ° et à la Longitude: ${longitude} °, sur la planète Terre.`;
    }

    function error() {
        status.textContent = 'T\'es perdue.';
    }

    if (!navigator.geolocation) {
        status.textContent = 'Pas moyen de la savoir.';
    } else {
        status.textContent = 'Locating…';
        navigator.geolocation.getCurrentPosition(success, error);
    }

}

function startVideo() {
    var video = document.getElementById('video');
    // Get access to the camera!
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        // Not adding `{ audio: true }` since we only want video now
        navigator.mediaDevices.getUserMedia({ video: true }).then(function (stream) {
            video.srcObject = stream;
            video.play();
        });
    }

}

function takePicture() {
    // Elements for taking the snapshot
    var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d');
    var video = document.getElementById('video');

    context.drawImage(video, 0, 0, 640, 480);
}

function stopVideo() {
    var video = document.getElementById('video');
    video.pause();
}

function handleStart(evt) {
    const touch = document.querySelector('#touch');
    evt.preventDefault();
    var touches = evt.changedTouches;
    for (var i = 0; i < touches.length; i++) {
        touch.textContent = 'T\'as touché ici ' + touches[i].pageX + ', ' + touches[i].pageY + ' ! ';
    }
}

function startup() {
    var el = document.getElementById("canvas-touch");
    el.addEventListener("touchstart", handleStart, false);
}

document.addEventListener("DOMContentLoaded", startup);
