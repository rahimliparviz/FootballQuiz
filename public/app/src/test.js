import "../styles/test/test.scss";

function startTimer(duration, display) {
    let timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) timer = duration;
    }, 1000);
}
document.addEventListener("DOMContentLoaded", _ => {
    const checkClass = document.querySelector(".img-container");
    let imgContainer = document.querySelector(".test-container-with-img");
    if(!checkClass){
        imgContainer.classList.toggle("test-container");
    }
})
window.onload = function () {
    const [fiveMinutes, display] = [60 * 10, document.getElementById("time")];
    startTimer(fiveMinutes, display);
};

$("#lang-menu").on("click",
function(){
    $(this).addClass("cls-border-lang");
    $(this).children().eq(0).addClass("cls-borderbottom-lang");
    $("#lang-menu ul").stop().slideToggle(100);
},
function(){
        $(this).removeClass("cls-border-lang");
        $(this).children().eq(0).removeClass("cls-borderbottom-lang");
        $("#lang-menu ul").stop().slideToggle(100);  
}
);
/// click languages
$("#lang-menu ul li").on("click", function(){
    //select lang and apply changes
    var $lang = $(this).text();
    $("#lang-menu span").text($lang);
});