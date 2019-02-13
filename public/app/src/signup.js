  /*==== Include Js files ======*/

import $ from "jquery";
import jQuery from "jquery";
// import Calendar Plugin
$(document).ready(function() {
    const [sidebar,customBtn,mobileClose] = 
                    [document.getElementById("sidebar"),
                     document.querySelector(".custom-btn"),
                     document.getElementById("mobile-close")];
      customBtn.onclick = _ => window.innerWidth <= 992 ? sidebar.classList.add("transform") : null;
      mobileClose.onclick = _ => window.innerWidth <= 992 ? sidebar.classList.remove("transform") : null;
});
$(document).ready(function(){
    $("#gender").change(function(){
        if ($(this).val()=="") $(this).css({color: "#aaa"});
        else $(this).css({color: "#000"});
    });

});	



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
/*==== Include Scss files ======*/

import "../styles/signup/signup.scss";
import "normalize.scss/normalize.scss";
import  "bootstrap/scss/bootstrap.scss";
import "bootstrap/dist/js/bootstrap.bundle.min.js";