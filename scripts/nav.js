window.addEventListener("load", function(){
    var openClassName = "open";

    document.querySelector("#nav-open-button").addEventListener("click", function(){
        var navSection = document.querySelector("#navSection");
        if (navSection.classList.contains(openClassName))
            navSection.classList.remove(openClassName);
        else
            navSection.classList.add(openClassName);
    });
});