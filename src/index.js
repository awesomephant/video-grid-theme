import initVideoGrid from "./initVideoGrid";

document.addEventListener("DOMContentLoaded", () => {
    const videoContainer = document.querySelector("#video-grid")
    if (videoContainer){
        initVideoGrid();
    }
});