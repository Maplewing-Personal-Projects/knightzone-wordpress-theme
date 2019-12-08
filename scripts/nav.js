var openClassName = "open";
var goToTopButton = document.getElementById("go_to_top_button");

/* Code from https://stackoverflow.com/questions/21474678/scrolltop-animation-without-jquery */
function scrollToTop(scrollDuration) {
    var cosParameter = window.scrollY / 2,
        scrollCount = 0,
        oldTimestamp = performance.now();
    function step (newTimestamp) {
        scrollCount += Math.PI / (scrollDuration / (newTimestamp - oldTimestamp));
        if (scrollCount >= Math.PI) window.scrollTo(0, 0);
        if (window.scrollY === 0) return;
        window.scrollTo(0, Math.round(cosParameter + cosParameter * Math.cos(scrollCount)));
        oldTimestamp = newTimestamp;
        window.requestAnimationFrame(step);
    }
    window.requestAnimationFrame(step);
}

window.addEventListener("scroll", function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        goToTopButton.style.display = "block";
    } else {
        goToTopButton.style.display = "none";
    }
});

document.querySelector("#nav-open-button").addEventListener("click", function(){
    var navSection = document.querySelector("#nav-section");
    if (navSection.classList.contains(openClassName))
        navSection.classList.remove(openClassName);
    else
        navSection.classList.add(openClassName);
});

goToTopButton.addEventListener("click", function(){
    scrollToTop(1);
})