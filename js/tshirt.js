// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// xinix helper
var xn = {};

xn.stylized = function  () {
    $("*").hover(function () {
        $(this).addClass("hover");
    }, function () {
        $(this).removeClass("hover");
    });

    $("input:text").addClass("text");
    $("input:password").addClass("password");
    $("input:reset").addClass("reset");
    $("input:submit").addClass("submit");
    $("input:button").addClass("button");
    $("input:radio").addClass("radio");

    $("ul > li:first-child, ol > li:first-child").addClass("first-child");
    $("ul > li:last-child, ol > li:last-child").addClass("last-child");
    $("ul > li:nth-child(odd), ol > li:nth-child(odd)").addClass("odd");
    $("ul > li:nth-child(even), ol > li:nth-child(even)").addClass("even");

    $("table tr:first-child").addClass ("first-child");
    $("table tr:last-child").addClass ("last-child");
    $("table tr:nth-child(odd)").addClass ("even");
    $("table tr:nth-child(even)").addClass ("odd");

    $("table tr:first-child td:first-child").addClass ("first-child");
    $("table tr:first-child td:last-child").addClass ("last-child");
    $("table tr:first-child td:nth-child(odd)").addClass ("even");
    $("table tr:first-child td:nth-child(even)").addClass ("odd");

    $("table tr td:first-child").addClass ("first-child");
    $("table tr td:last-child").addClass ("last-child");
    $("table tr td:nth-child(odd)").addClass ("even");
    $("table tr td:nth-child(even)").addClass ("odd");
}

// Scripts
$(function() {
    var s4 = window.s4 = function () {
        return Math.floor((1 + Math.random()) * 0x10000).toString(16).substring(1);
    };

    var guid = window.guid = function() {
        return s4() + s4() + '-' + s4() + '-' + s4() + '-' + s4() + '-' + s4() + s4() + s4();
    };

    // Focus on first error input
    $("form .has-error:first input").focus ();

    // Alert close
    $(".alert").click (function () {
        $(this).addClass ("bounceOutRight");
    });

    // Menu registry section
    $("html").click(function (event) {
        var element = null;

        $('.sub').find("ul").fadeOut (128);

        // Sub menu
        if ($(event.target).parent().parent().hasClass("sub")) {
            element = $(event.target).parent().parent();
        } else if ($(event.target).parent().hasClass("sub")) {
            element =  $(event.target).parent();
        } else if ($(event.target).hasClass("sub")) {
            element = $(event.target);
        }

        if (element) {
            element.find("ul").fadeIn (128);
            event.stopPropagation();
            return false;
        }
    });

    // Show side menu
    $(".brand a").click(function () {
        if ($(".sidebar").length > 0) {
            $("body").toggleClass ("show-sidebar")
        }

        return false;
    });

    xn.stylized ();
});


