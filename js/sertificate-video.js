if($(document).width() > 1024){
async function extractFramesFromVideo(videoUrl, fps=20) {
return new Promise(async (resolve) => {

    let videoBlob = await fetch(videoUrl).then(r => r.blob());
    let videoObjectUrl = URL.createObjectURL(videoBlob);
    let video = document.createElement("video");

    let seekResolve;
    video.addEventListener('seeked', async function() {
      if(seekResolve) seekResolve();
});

video.addEventListener('loadeddata', async function() {
  let canvas = document.createElement('canvas');
  let context = canvas.getContext('2d');
  let [w, h] = [video.videoWidth, video.videoHeight]
  canvas.width =  w;
  canvas.height = h;

  let frames = [];
  let interval = 1 / fps;
  let currentTime = 0;
  let duration = video.duration;

  while(currentTime < duration) {
    video.currentTime = currentTime;
    await new Promise(r => seekResolve=r);

    context.drawImage(video, 0, 0, w, h);
    let base64ImageData = canvas.toDataURL();
    frames.push(base64ImageData);

    currentTime += interval;
  }
  resolve(frames);
});

    video.src = videoObjectUrl; 

  });
}


(async() => {
    let frames = await extractFramesFromVideo("../video/Sequence_08_30fps.mp4");
    $(document).scroll(function () {
        let sc = $(this).scrollTop();
        $('#bg-s').css('background-image', 'url('+frames[ Math.round(sc/25) ]+')');
    });
    $(document).ready(function() {
        $('.preloader').slideUp();
    });
})();
}