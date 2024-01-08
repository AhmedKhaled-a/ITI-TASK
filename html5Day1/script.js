// Video Player

let vid = document.getElementById('vid');
let vidTime = document.querySelector('.videoTime')
let vidProgress = document.querySelector('.videoProgress')
let speedRange = document.querySelector('.speed')
let volume = document.querySelector('.volume')
let fullScreen = document.querySelector('.fullScreen')

speedRange.addEventListener('change', () => {
    let value = speedRange.value;
    vid.playbackRate = value;
})

volume.addEventListener('change', () => {
    let value = volume.value;
    vid.volume = value;
})

fullScreen.addEventListener('click', () => {
    vid.requestFullscreen();
    vid.setAttribute('controls', true)
})

function playPause() {
    vid.paused ? vid.play() : vid.pause();
}

function backward() {
    vid.currentTime -= 5;
}
function forward() {
    vid.currentTime += 5;
}
function jumbToEnd() {
    vid.currentTime = vid.duration;
}
function jumbToStart() {
    vid.currentTime = 0;
}
function mute() {
    vid.muted == true ? vid.muted = false : vid.muted = true;
}


vid.addEventListener('timeupdate', () => {
    mins = secondsToMins(vid.currentTime)
    remainingSecs = remaingSeconds(vid.currentTime)
    vidTime.innerHTML = `${mins}:${remainingSecs} / ${secondsToMins(vid.duration)}:${remaingSeconds(vid.duration)}`;
    vidProgress.value = Math.floor(vid.currentTime)
    vidProgress.max = Math.floor(vid.duration)
})
vidProgress.addEventListener('change', () => {
    let value = vidProgress.value;
    vid.currentTime = value;
})

function secondsToMins(seconds) {
    return Math.floor(seconds / 60)
}
function remaingSeconds(seconds) {
    return Math.floor(seconds % 60)
}



// Color Change

