let preload = () => {
    const blocks = document.querySelectorAll('.preloader .blocks .block');
    const body = document.querySelector('body');
    body.style.overflow = "hidden";
    let interval = 0;
    blocks.forEach((block, i) => {
        setTimeout(() => {
            animate(block, i);
        }, interval);
        interval += 500;
    });

    function animate(block, index) {
        let position = index;
        setInterval(() => {
            switch (position) {
                case 0:
                    block.style.top = "40px";
                    position = 3;
                    break;
                case 1:
                    block.style.left = "40px";
                    position = 0;
                    break;
                case 2:
                    block.style.top = "0px";
                    position = 1;
                    break;
                case 3:
                    block.style.left = "0px";
                    position = 2;
                    break;
            }
        }, 1500);
    }
};

const preload_text = document.querySelector('.preloader .preload-text');
let dots =1;
setInterval(() =>{
    switch (dots) {
        case 1:
            preload_text.textContent = "...Loading";
            dots++;
            break;
        case 2:
            preload_text.textContent = "..Loading.";
            dots++;
            break;
        case 3:
            preload_text.textContent = ".Loading..";
            dots++;
            break;
        case 4:
            preload_text.textContent = "Loading...";
            dots++;
            break;
        case 5:
            preload_text.textContent = ".Loading..";
            dots++;
            break;
        case 6:
            preload_text.textContent = "..Loading.";
            dots = 1;
            break;
    }
},500);


preload();
const preloader = document.querySelector('.preloader');
const body = document.querySelector('body');
function finishedLoading() {
    preloader.style.opacity = "0";
    $(".logo").addClass("jello-vertical");
    $(".nav-header").addClass("tracking-in-expand-fwd-top");
    $(".btn-buy").addClass("slide-in-left");
    $(".main-text-in-block").addClass("tracking-in-expand-fwd-top");
    setTimeout(() => {
        preloader.style.display = "none";
        body.style.overflow = "auto";

    }, 500);

}
window.onload = function () {
    setTimeout(() => {
        finishedLoading();
    }, 3000);
};
