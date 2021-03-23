import initToolbar from "./initToolbar";
import initVideoGrid from "./initVideoGrid";

document.addEventListener("DOMContentLoaded", () => {
    const videoContainer = document.querySelector("#video-grid")
    initToolbar()
    if (videoContainer){
        initVideoGrid();
    }
});