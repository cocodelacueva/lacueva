(function($){$(document).ready(function(){setTimeout(function(){$(".loader").fadeOut("slow");},100);});$('.toggle').on('click',function(){$('.main-menu').toggleClass('main-menu-open');$('.toggle').toggleClass('toggle-open');});$('.main-menu li a').on('click',function(){$('.main-menu').removeClass('main-menu-open');$('.toggle').removeClass('toggle-open');});$(".main-menu li a").on("click",function(event){if($(this).attr('href')=='#contact'){event.preventDefault();if(window.innerWidth<769){$('html, body').stop().animate({scrollTop:$('#contact').offset().top},'slow');}else{$("#form").fadeIn(500).toggleClass("complete-form");}}});$(".toggle-form").on("click",function(event){if(window.innerWidth>768){event.preventDefault();$("html, body").animate({scrollTop:0},"slow");$("#form").fadeIn(500).toggleClass("complete-form");}});$(".tarifa-btn").on("click",function(event){event.preventDefault();if(window.innerWidth<769){$('html, body').stop().animate({scrollTop:$('#contact').offset().top},'slow');}else{$("html, body").animate({scrollTop:0},"slow");$("#form").fadeIn(500).toggleClass("complete-form");}});$(".btn-tarifa-single").on("click",function(event){console.log("hola");event.preventDefault();if(window.innerWidth<769){$('html, body').stop().animate({scrollTop:$('#contact').offset().top},'slow');}else{$("html, body").animate({scrollTop:0},"slow");$("#form").fadeIn(500).toggleClass("complete-form");}});$("div.close-form").on("click",function(){$("#form").fadeOut(500).addClass("complete-form");});$(document).keyup(function(event){if(event.which==27){console.log("hola");$("#form").fadeOut(500).addClass("complete-form");}});var obj=$(document);obj.on("scroll",function(){if(obj.scrollTop()>800){$(".up-nav").css("display","block")}else{$(".up-nav").css("display","none");};});$(".up-nav").on("click",function(){$("html, body").animate({scrollTop:0},"slow");});})(jQuery);jQuery(document).ready(function($){var loadMoreButton=$('.btn-mastrabajos');var postsGrid=$('.trabajos-items');var currentPage=1;var loaderAjax=$('.img-loader-ajax');loadMoreButton.click(function(){loaderAjax.css('display','block');$.ajax({type:'POST',url:window.MinimalScriptsData.ajaxurl,data:{action:'minimal_load_more_projects',page:currentPage+1},success:function(response){loaderAjax.css('display','none');if(response){currentPage++;postsGrid.append(response);}else{loadMoreButton.remove();$('#trabajos').append('no hay más trabajos');}}});});});
;!function(a,b){"use strict";function c(){if(!e){e=!0;var a,c,d,f,g=-1!==navigator.appVersion.indexOf("MSIE 10"),h=!!navigator.userAgent.match(/Trident.*rv:11\./),i=b.querySelectorAll("iframe.wp-embedded-content");for(c=0;c<i.length;c++){if(d=i[c],!d.getAttribute("data-secret"))f=Math.random().toString(36).substr(2,10),d.src+="#?secret="+f,d.setAttribute("data-secret",f);if(g||h)a=d.cloneNode(!0),a.removeAttribute("security"),d.parentNode.replaceChild(a,d)}}}var d=!1,e=!1;if(b.querySelector)if(a.addEventListener)d=!0;if(a.wp=a.wp||{},!a.wp.receiveEmbedMessage)if(a.wp.receiveEmbedMessage=function(c){var d=c.data;if(d.secret||d.message||d.value)if(!/[^a-zA-Z0-9]/.test(d.secret)){var e,f,g,h,i,j=b.querySelectorAll('iframe[data-secret="'+d.secret+'"]'),k=b.querySelectorAll('blockquote[data-secret="'+d.secret+'"]');for(e=0;e<k.length;e++)k[e].style.display="none";for(e=0;e<j.length;e++)if(f=j[e],c.source===f.contentWindow){if(f.removeAttribute("style"),"height"===d.message){if(g=parseInt(d.value,10),g>1e3)g=1e3;else if(~~g<200)g=200;f.height=g}if("link"===d.message)if(h=b.createElement("a"),i=b.createElement("a"),h.href=f.getAttribute("src"),i.href=d.value,i.host===h.host)if(b.activeElement===f)a.top.location.href=d.value}else;}},d)a.addEventListener("message",a.wp.receiveEmbedMessage,!1),b.addEventListener("DOMContentLoaded",c,!1),a.addEventListener("load",c,!1)}(window,document);