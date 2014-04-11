$(document).ready(function(){
    //We are replacing "<" "</" "/>" ">" with their entities only between <code> tags
    $("code").each(function(){
        var str = $(this).html() //Here we are getting code as it is left after replacing more difficult tags in php
        str = str.replace("<", "&lt;").replace(">", "&gt;").replace("</", "&lt;/").replace("/>", "/&gt;") 
        $(this).html(str) //Here we return our changed comment. Enjoy :D
    })
})