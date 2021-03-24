import { initSlider } from "./initSlider";
import initToolbar from "./initToolbar";
import initVideoGrid from "./initVideoGrid";

document.addEventListener("DOMContentLoaded", () => {
    const videoContainer = document.querySelector("#video-grid")
    initToolbar()
    const sliders = document.querySelectorAll(".project__media")
    sliders.forEach(s => {
        initSlider(s)
    })
    if (videoContainer) {
        initVideoGrid();
    }
});