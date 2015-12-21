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
    // TODO: Create touch event

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
        $(this).addClass ("bounceOutUp");
    });

    // Menu registry section
    $("html").click(function (event) {
        var element = null;

        // Sub menu
        if ($(event.target).parent().parent().hasClass("sub")) {
            element = $(event.target).parent().parent();
        } else if ($(event.target).parent().hasClass("sub")) {
            element =  $(event.target).parent();
        } else if ($(event.target).hasClass("sub")) {
            element = $(event.target);
        }

        if (element) {
            element.siblings(".sub").find("ul").fadeOut(128);
            element.find("ul").fadeIn(128);
            event.stopPropagation();
            return false;
        } else {
            $('.sub').find("ul").fadeOut (128);
        }
    });

    // Show side menu
    $(".nav-menu h1 a").click(function () {
        if ($(".sidebar").length > 0) {
            $("body").toggleClass ("show-sidebar")
        }

        return false;
    });

    // Tree fallback and saving function
    $(".tree input").click(function () {
        if ($(this).is(':checked')) {
            $(this).siblings ("ul, ol").addClass("show");
            if(typeof(Storage) !== "undefined") {
                localStorage.setItem("xntree" + $(this).data ("id-save"), $(this).is(':checked'));
            }
        } else {
            $(this).siblings ("ul, ol").removeClass("show");
            if(typeof(Storage) !== "undefined") {
                localStorage.removeItem("xntree" + $(this).data ("id-save"));
            }
        }
    });
    // Restore tree state
    if(typeof(Storage) !== "undefined") {
        $.each(localStorage, function (name, value) {
            if (name.substring(0, 6) == "xntree") {
                $("[data-id-save='" + name.substring(6) + "']").attr ("checked", "checked").siblings ("ul, ol").addClass("show");
            }
        })
    }

    // Collapsible
    $(".collapsible .action").click(function () {
        var submenu = $(this).parent().siblings("ul, ol");

        if (submenu.data("show")) {
            $(this).removeClass("xn-minus").addClass("xn-plus");
            submenu.slideUp (128);
            submenu.data ("show", false);
            if(typeof(Storage) !== "undefined") {
                localStorage.removeItem("xncollapsible" + $(this).data ("id-save"));
            }
        } else {
            submenu.slideDown (128);
            $(this).removeClass("xn-plus").addClass("xn-minus");
            submenu.data ("show", true);
            if(typeof(Storage) !== "undefined") {
                localStorage.setItem("xncollapsible" + $(this).data ("id-save"), submenu.data ("show"));
            }
        }

        return false;
    })
    // Restore collapsible state
    if(typeof(Storage) !== "undefined") {
        $.each(localStorage, function (name, value) {
            if (name.substring(0, 13) == "xncollapsible") {
                $("[data-id-save='" + name.substring(13) + "']").removeClass("xn-plus").addClass("xn-minus").parent().siblings ("ul, ol").data ("show", true).removeClass("hide");
            }
        })
    }

    xn.stylized ();
});


