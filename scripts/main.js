
var currentWork, timer, $work, $works, $countWorks, $menuItem, $menuLine, lineHeight, menuItemHeight, loadedWorks = !1,
    timerSlide = function() {
        clearTimeout(timer), timer = setTimeout(function() {
            $.fn.fullpage.moveSectionDown()
        }, 9e5)
    },
    animaWorkIn = function(index) {
        currentWork = index, $currentWork = $work.eq(index), $work.find(".icon-timer").removeClass("--active"), setTimeout(function() {
            $currentWork.find(".icon-timer").addClass("--active")
        }, 300);
        var $text = $currentWork.find(".work__title,.work__tags,.work__ver-projeto");
        TweenMax.staggerFromTo($text, 1.5, {
            opacity: 0,
            y: 40
        }, {
            opacity: 1,
            y: 0,
            ease: Expo.easeOut,
            delay: .5
        }, .3), timerSlide()
    },
    worksAnimaIn = function() {
        animaWorkIn(void 0 == $currentWork ? 0 : currentWork)
    },
    worksAnimaOut = function(nextPage) {
        setTimeout(function() {
            $.fn.fullpage.destroy("all"), $works.parallax("disable"), $currentWork = $work.eq(0)
        }, 1500), clearTimeout(timer)
    },
    moveActiveLine = function() {
        var top = $menuItem.filter(".active").offset().top - .5 * (lineHeight - menuItemHeight);
        TweenMax.to($menuLine, .5, {
            top: top,
            ease: Expo.easeOut
        })
    },
    works = function(ajax) {
        $(window).scrollTop(0), $("#works").length > 0 && (loadedWorks ? $works.parallax("enable") : ($works = $("#works"), $works.parallax({
            invertX: !0,
            invertY: !0,
            frictionX: .01,
            frictionY: 0
        }), $work = $(".work"), $countWorks = $(".count-works"), $countWorksC = $countWorks.find(".count-works__current"), $countWorksT = $countWorks.find(".count-works__total"), $menuItem = $(".menu-works .menu-works__item"), $menuLine = $(".menu-works .menu-works__line-active"), lineHeight = $menuLine.height(), menuItemHeight = $menuItem.height()), $(".works").fullpage({
            anchors: ["work-beach-park", "work-shopping-recife", "work-damas", "work-richester", "work-radio", "work-lacta", "work-midiorama", "work-santa-joana", "work-tang", "work-vos"],
            menu: ".menu-works",
            lockAnchors: !0,
            sectionSelector: ".work",
            scrollingSpeed: 1e3,
            continuousVertical: !0,
            afterRender: function() {
                animaWorkIn(0), $countWorksT.text(" / " + $work.length)
            },
            onLeave: function(index, nextIndex, direction) {
                $countWorksC.text(nextIndex), animaWorkIn(nextIndex - 1);
                var $bg = $work.eq(nextIndex - 1).find(".work__bg");
                "up" == direction ? TweenMax.fromTo($bg, 1, {
                    top: "-100%"
                }, {
                    top: "0"
                }) : TweenMax.fromTo($bg, 1, {
                    top: "0"
                }, {
                    top: "-100%"
                }), setTimeout(moveActiveLine, 300)
            }
        }), $menuItem.on("click", function() {
            var index = $menuItem.index($(this));
            return $.fn.fullpage.moveTo(index + 1), !1
        }), $menuLine.show(), moveActiveLine(), $(window).focus(function() {
            setTimeout(function() {
                $currentWork.find(".icon-timer").addClass("--active")
            }, 300), timerSlide()
        }), $(window).blur(function() {
            $work.find(".icon-timer").removeClass("--active"), clearTimeout(timer)
        }))
    };
works(), $(document).ready(function() {
    var currentPage, loadedPages = [],
        urlChange = function(page) {
            history.pushState({}, "", page.replace("/page", ""))
        },
        changePage = function(current, next) {
            "function" == typeof window[current + "AnimaOut"] && window[current + "AnimaOut"](), $barraMenu.removeClass("--close"), $menu.removeClass("--close"), $backWorks.removeClass("--close"), setTimeout(function() {
                $("#" + next).addClass("--in"), setTimeout(function() {
                    $(window).scrollTop(0)
                }, 300)
            }, 300), "function" == typeof window[next] && window[next](!0), setTimeout(function() {
                positionMenu(next), $("#" + next).removeClass("--in").addClass("--active"), $("#" + current).remove()
            }, 1300)
        },
        loadPage = function(url, back) {
            var nextPage = getIdPage(url);
            return console.log(nextPage), nextPage != currentPage && ($.ajax({
                method: "GET",
                url: url
            }).done(function(data) {
                back || urlChange(url);
                var $container = $('<div id="' + nextPage + '" class="animation-container"/>');
                $container.html(data), $("body").append($container), "about" != nextPage && "works" != nextPage && (window.instgrm.Embeds.process(), FB.XFBML.parse()), changePage(currentPage, nextPage), currentPage = nextPage
            }), void loadedPages.push(nextPage))
        },
        getIdPage = function(url) {
            var id = url.replace(baseUrl + idioma + "/", "").replace(baseUrl, "").replace("page/", "").replace(/\/$/, "").split("/");
            return id = "" == id[id.length - 1] ? "home" : "services" == id[0] ? "services" : id[id.length - 1]
        },
        $barraMenu = $(".barra-menu"),
        $menu = $(".menu"),
        $backWorks = $(".back-works"),
        $social = $(".social"),
        $languages = $(".languages"),
        positionMenu = function(page) {
            $social.removeClass("--hide"), $languages.removeClass("--hide"), "about" == page ? $menu.removeClass("--works --work --hide").addClass("--about") : "works" == page ? $menu.addClass("--works").removeClass("--about --work --hide") : $menu.addClass("--work").removeClass("--about --works --hide"), "works" == page || "about" == page ? $backWorks.addClass("--hide") : $backWorks.removeClass("--hide"), "home" != page && "services" != page || ($backWorks.addClass("--hide"), $menu.addClass("hide"))
        },
        lastScroll = 0;
    $(window).scroll(function() {
        var top = $(window).scrollTop(),
            h = $(window).height(),
            wW = $(window).width();
        if (top > h || wW < 768 && top > 0 ? ($barraMenu.addClass("--open"), $menu.addClass("--open"), $backWorks.addClass("--open"), lastScroll < top ? ($barraMenu.addClass("--close"), $menu.addClass("--close"), $backWorks.addClass("--close")) : ($barraMenu.removeClass("--close"), $menu.removeClass("--close"), $backWorks.removeClass("--close"))) : ($barraMenu.removeClass("--open"), $menu.removeClass("--open"), $backWorks.removeClass("--open")), "about" != currentPage && $("#" + currentPage).find(".navegacao-projetos").length > 0) {
            var bottom = $("#" + currentPage).find(".navegacao-projetos").offset().top;
            bottom < top + h ? ($social.addClass("--lock").css("top", bottom - 55), $languages.addClass("--lock").css("top", bottom - 55)) : ($social.removeClass("--lock").css("top", ""), $languages.removeClass("--lock").css("top", ""))
        }
        lastScroll = top
    }), $(window).on("popstate", function() {
        var linkPage = location.href.replace(baseUrl, ""),
            url = baseUrl + "page/" + linkPage;
        loadPage(url, !0)
    });
    var pageInit = getIdPage(window.location.href);
    loadedPages.push(pageInit), currentPage = pageInit, $("body").on("click", ".link-page", function(event) {
        var linkPage = $(this).attr("href").replace(baseUrl, ""),
            url = baseUrl + "page/" + linkPage;
        return loadPage(url), !1
    }), $("body").on("click", ".header-cliente__bt-scroll", function(event) {
        var top = $(window).height();
        TweenMax.to(window, 1, {
            scrollTo: top
        })
    }), $("body").on("click", ".languages__language", function(event) {
        if (!$(this).hasClass("--active")) {
            var url = window.location.href,
                lang = $(this).data("lang");
            url = "pt" == lang ? url.replace(baseUrl + "en/", baseUrl) : url.replace(baseUrl, baseUrl + "en/"), window.location.href = url
        }
        return !1
    }), wow = new WOW, wow.init()
});