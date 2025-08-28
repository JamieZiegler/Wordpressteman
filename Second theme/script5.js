$(document).ready(function() {
    function updateBackgroundColor() {
        var windowWidth = $(window).width();

        if (windowWidth < 768) {
            $('#wrapper').css('background-color', '#072D50');
            $('article header').css('background-color', '#637585')
            $('section').css('background-color', '#637585')
            $('aside section').css('background-color', '#637585')
        } else {
            $('#wrapper').css('background-color', '#c3c8ce');
            $('article header').css('background-color', '#405970')
            $('section').css('background-color', '#405970')
            $('aside section').css('background-color', '#405970')
        }
    }

    updateBackgroundColor();

    $(window).resize(function() {
        updateBackgroundColor();
    });

    console.log("Denna jQuery-kod är temporär, läs mer om den i script5.js");
});
