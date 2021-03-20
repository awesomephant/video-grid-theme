function scaleVideo(c) {
  const video = c.querySelector(".video")
  const containerBox = c.getBoundingClientRect()
  const vh = video.clientHeight
  const ratio = containerBox.height / vh;
  console.log(`${containerBox.height} / ${vh} = ${ratio}`)
  video.style.transform = `scaleY(${ratio})`
}

function bindHoverEvents(video) {
  video.addEventListener("mouseover", () => {
    console.log(video.paused)
    if (video.paused) {
      video.play()
      video.classList.remove("paused")
    } else {
      video.pause()
      video.classList.add("paused")
    }
  })
}

function initVideoGrid() {
  const containers = document.querySelectorAll(".card-video")
  containers.forEach(c => {
    const video = c.querySelector(".video")
    // We want to pause the video when we hover,
    // then unpause when we hove a second time.
    bindHoverEvents(video)
    video.addEventListener("canplay", () => {
      video.classList.add("canplay")
      scaleVideo(c)
    })
  })
  window.addEventListener("resize", () => {
    containers.forEach(c => {
      scaleVideo(c)
    })
  })
}
export default initVideoGrid;
