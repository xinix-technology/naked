$(document).ready(function() {

    $(".alert .close").click(function() {
        $(this).parent ().addClass("hide");
    });

    var s4 = window.s4 = function () {
        return Math.floor((1 + Math.random()) * 0x10000).toString(16).substring(1);
    };

    var guid = window.guid = function() {
        return s4() + s4() + '-' + s4() + '-' + s4() + '-' + s4() + '-' + s4() + s4() + s4();
    };

    $('.sidebar .nav li.collapsible').click(function (event) {
        var element = $(event.target);

        $( this ).find('a:first').addClass( "select" );

        if(element.closest('.collapsible').find('ul').hasClass("fadeOutUp")) {
            element.closest('.collapsible').find('ul').removeClass('fadeOutUp hide').addClass('fadeInDown');
        } else {
            element.closest('.collapsible').find('ul').removeClass('fadeInDown').addClass('fadeOutUp');
            setTimeout(function() {
                element.closest('.collapsible').find('ul').addClass('hide');
            }, 600);
            $( this ).closest('.collapsible').find('a:first').removeClass('select');
        }
        event.preventDefault();
    });

    $('.user').click(function(event) {
        $('.user .sub').toggleClass('fadeInDown');
        event.preventDefault();
    });
    $('.notification a').click(function(event) {
        $('.notification .sub').toggleClass('fadeInDown');
        event.preventDefault();
    });


    // Push object to this variable to later hide it on click outside the element
    window.elementToHide = [];
    // Hide element for above array
    $("html").click (function () {
        $.each(window.elementToHide, function (index) {
            $(this).slideUp (100);
        })
    });

    // User drop down menu
    $("nav .user a").click (function () {
        $(this).siblings (".sub").slideToggle (100);
        window.elementToHide.push ($(this).siblings (".sub"));

        return false;
    });

    // Focus on first error input
    $("form .has-error:first input").focus ();

    // Alert close
    $(".alert .close").click ( function () {
        $(this).parent ().parent ().slideUp (100);
    });

    $("main a").click (function () {
        return false;
    });

    stylized ();
});


// ===================== xn =====================

function stylized () {
    $("*").hover(function () {
        $(this).addClass("hover");
    }, function () {
        $(this).removeClass("hover");
    });

    $(".tab a:first-child").addClass("first");
    $(".tab a:last-child").addClass("last");

    $("input:text").addClass("text");
    $("input:password").addClass("password");
    $("input:reset").addClass("reset");
    $("input:submit").addClass("submit");
    $("input:button").addClass("button");
    $("input:radio").addClass("radio");

    $("ul > li:nth-child(odd), ol > li:nth-child(odd), .list > .comment:nth-child(odd)").addClass("odd");
    $("ul > li:nth-child(even), ol > li:nth-child(even), .list > .comment:nth-child(even)").addClass("even");
    $("ul > li:first-child, ol > li:first-child, .list > .comment:first-child").addClass("first");
    $("ul > li:last-child, ol > li:last-child, .list > .comment:last-child").addClass("last");

    $("[class^=blocks_] > div.block:first-child, [class^=blocks_] > div.block:first").addClass("first");
    $("[class^=blocks_] > div.block:last-child, [class^=blocks_] > div.block:last").addClass("last");

    $("[class^=tablelist] tr:first-child").addClass ("first");
    $("[class^=tablelist] tr:last-child").addClass ("last");
    $("[class^=tablelist] tr:nth-child(odd)").addClass ("even");
    $("[class^=tablelist] tr:nth-child(even)").addClass ("odd");

    $("[class^=tablelist] tr:first-child td:first-child").addClass ("first");
    $("[class^=tablelist] tr:first-child td:last-child").addClass ("last");
    $("[class^=tablelist] tr:first-child td:nth-child(odd)").addClass ("even");
    $("[class^=tablelist] tr:first-child td:nth-child(even)").addClass ("odd");

    $("[class^=tablelist] tr td:first-child").addClass ("first");
    $("[class^=tablelist] tr td:last-child").addClass ("last");
    $("[class^=tablelist] tr td:nth-child(odd)").addClass ("even");
    $("[class^=tablelist] tr td:nth-child(even)").addClass ("odd");
}

// ================================================
