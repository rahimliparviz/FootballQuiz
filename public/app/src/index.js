/*==== Include Js files ======*/

import $ from "jquery";
import jQuery from "jquery";

import "./owlConfig";
// import Calendar Plugin


$(document).ready(function() {
  const label = document.querySelector(".label");
  const sidebar = document.querySelector(".sidebar");
  const arrow = document.querySelector(".sidebar-arrow");
  const mainContent = document.getElementById("main-content");
  const langMenu = document.getElementById("lang-menu");
  const startBtn = document.getElementById("start-btn");

    label.onclick = _ => {
        
        if(window.innerWidth >= 992){
          sidebar.classList.toggle("transform");
          arrow.classList.toggle("rotate");
          mainContent.classList.toggle("margin-left");
          langMenu.classList.toggle("transform-lang");
        } else {
          sidebar.classList.toggle("transform");
          arrow.classList.toggle("rotate");
        }
    }  
    
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

    (function () {
      'use strict'
    
      if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement('style')
        msViewportStyle.appendChild(
          document.createTextNode(
            '@-ms-viewport{width:auto!important}'
          )
        )
        document.head.appendChild(msViewportStyle)
      }
    
    }())
  });
 

/*==== Include Scss files ======*/

import "../styles/index.scss";
import "normalize.scss/normalize.scss";
import  "bootstrap/scss/bootstrap.scss";
import "bootstrap/dist/js/bootstrap.bundle.min.js";