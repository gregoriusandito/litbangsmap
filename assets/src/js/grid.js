var $event = $.event,
    $special, resizeTimeout;
$special = $event.special.debouncedresize = {
    setup: function() {
        $(this).on("resize", $special.handler)
    },
    teardown: function() {
        $(this).off("resize", $special.handler)
    },
    handler: function(t, i) {
        var e = this,
            s = arguments,
            a = function() {
                t.type = "debouncedresize", $event.dispatch.apply(e, s)
            };
        resizeTimeout && clearTimeout(resizeTimeout), i ? a() : resizeTimeout = setTimeout(a, $special.threshold)
    },
    threshold: 250
};
var BLANK = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";
$.fn.imagesLoaded = function(t) {
    function i() {
        var i = $(d),
            e = $(o);
        a && (o.length ? a.reject(h, i, e) : a.resolve(h)), $.isFunction(t) && t.call(s, h, i, e)
    }

    function e(t, e) {
        t.src !== BLANK && $.inArray(t, r) === -1 && (r.push(t), e ? o.push(t) : d.push(t), $.data(t, "imagesLoaded", {
            isBroken: e,
            src: t.src
        }), n && a.notifyWith($(t), [e, h, $(d), $(o)]), h.length === r.length && (setTimeout(i), h.unbind(".imagesLoaded")))
    }
    var s = this,
        a = $.isFunction($.Deferred) ? $.Deferred() : 0,
        n = $.isFunction(a.notify),
        h = s.find("img").add(s.filter("img")),
        r = [],
        d = [],
        o = [];
    return $.isPlainObject(t) && $.each(t, function(i, e) {
        "callback" === i ? t = e : a && a[i](e)
    }), h.length ? h.bind("load.imagesLoaded error.imagesLoaded", function(t) {
        e(t.target, "error" === t.type)
    }).each(function(t, i) {
        var s = i.src,
            a = $.data(i, "imagesLoaded");
        return a && a.src === s ? void e(i, a.isBroken) : i.complete && void 0 !== i.naturalWidth ? void e(i, 0 === i.naturalWidth || 0 === i.naturalHeight) : void((i.readyState || i.complete) && (i.src = BLANK, i.src = s))
    }) : i(), a ? a.promise(s) : s
};
var Grid = function() {
    function t(t) {
        w = $.extend(!0, {}, w, t), l.imagesLoaded(function() {
            e(!0), n(), s()
        })
    }

    function i(t) {
        p = p.add(t), t.each(function() {
            var t = $(this);
            t.data({
                offsetTop: t.offset().top,
                height: t.height()
            })
        }), a(t)
    }

    function e(t) {
        p.each(function() {
            var i = $(this);
            i.data("offsetTop", i.offset().top), t && i.data("height", i.height())
        })
    }

    function s() {
        a(p), m.on("debouncedresize", function() {
            g = 0, u = -1, e(), n();
            var t = $.data(this, "preview");
            "undefined" != typeof t && r()
        })
    }

    function a(t) {
        t.on("click", "span.og-close", function() {
            return r(), !1
        }).children("a").on("click", function(t) {
            var i = $(this).parent();
            return c === i.index() ? r() : h(i), !1
        })
    }

    function n() {
        o = {
            width: m.width(),
            height: m.height()
        }
    }

    function h(t) {
        var i = $.data(this, "preview"),
            e = t.data("offsetTop");
        if (g = 0, "undefined" != typeof i) {
            if (u === e) return i.update(t), !1;
            e > u && (g = i.height), r()
        }
        u = e, i = $.data(this, "preview", new d(t)), i.open()
    }

    function r() {
        c = -1;
        var t = $.data(this, "preview");
        t.close(), $.removeData(this, "preview")
    }

    function d(t) {
        this.$item = t, this.expandedIdx = this.$item.index(), this.create(), this.update()
    }
    var o, l = $("#og-grid"),
        p = l.children("li"),
        c = ($(".smap-book-description"), -1),
        u = -1,
        g = 0,
        f = 10,
        m = $(window),
        b = $("html, body"),
        v = {
            WebkitTransition: "webkitTransitionEnd",
            MozTransition: "transitionend",
            OTransition: "oTransitionEnd",
            msTransition: "MSTransitionEnd",
            transition: "transitionend"
        },
        k = v[Modernizr.prefixed("transition")],
        T = Modernizr.csstransitions,
        w = {
            minHeight: 700,
            speed: 350,
            easing: "ease"
        };
    return d.prototype = {
        create: function() {
            l.hasClass("smap-book-description") ? (this.$title = $("<h3></h3>"), this.$description = $("<p></p>"), this.$href = $('<a href="#">Lihat Detail</a>'), this.$titleNoPanggil = $('<td class="smap-photo-spec-data attribute smap-description-table-book">No.Panggil</td>'), this.$noPanggil = $('<td class="smap-photo-spec-data value smap-description-value"></td>'), this.$trNoPanggil = $("<tr></tr>").append(this.$titleNoPanggil, this.$noPanggil), this.$titleJudul = $('<td class="smap-photo-spec-data attribute smap-description-table-book">Judul</td>'), this.$judul = $('<td class="smap-photo-spec-data value smap-description-value"></td>'), this.$trJudul = $("<tr></tr>").append(this.$titleJudul, this.$judul), this.$titlePenulis = $('<td class="smap-photo-spec-data attribute smap-description-table-book">Penulis</td>'), this.$penulis = $('<td class="smap-photo-spec-data value smap-description-value"></td>'), this.$trPenulis = $("<tr></tr>").append(this.$titlePenulis, this.$penulis), this.$titleTempatTerbit = $('<td class="smap-photo-spec-data attribute smap-description-table-book">Tempat Terbit</td>'), this.$tempatTerbit = $('<td class="smap-photo-spec-data value smap-description-value"></td>'), this.$trTempatTerbit = $("<tr></tr>").append(this.$titleTempatTerbit, this.$tempatTerbit), this.$titlePenerbit = $('<td class="smap-photo-spec-data attribute smap-description-table-book">Penerbit</td>'), this.$penerbit = $('<td class="smap-photo-spec-data value smap-description-value"></td>'), this.$trPenerbit = $("<tr></tr>").append(this.$titlePenerbit, this.$penerbit), this.$titleTahunTerbit = $('<td class="smap-photo-spec-data attribute smap-description-table-book">Tahun Terbit</td>'), this.$tahunTerbit = $('<td class="smap-photo-spec-data value smap-description-value"></td>'), this.$trTahunTerbit = $("<tr></tr>").append(this.$titleTahunTerbit, this.$tahunTerbit), this.$titleEdisi = $('<td class="smap-photo-spec-data attribute smap-description-table-book">Edisi</td>'), this.$edisi = $('<td class="smap-photo-spec-data value smap-description-value"></td>'), this.$trEdisi = $("<tr></tr>").append(this.$titleEdisi, this.$edisi), this.$titleKolasi = $('<td class="smap-photo-spec-data attribute smap-description-table-book">Kolasi</td>'), this.$kolasi = $('<td class="smap-photo-spec-data value smap-description-value"></td>'), this.$trKolasi = $("<tr></tr>").append(this.$titleKolasi, this.$kolasi), this.$titleISBN = $('<td class="smap-photo-spec-data attribute smap-description-table-book">Isbn</td>'), this.$isbn = $('<td class="smap-photo-spec-data value smap-description-value"></td>'), this.$trISBN = $("<tr></tr>").append(this.$titleISBN, this.$isbn), this.$titleBahasa = $('<td class="smap-photo-spec-data attribute smap-description-table-book">Bahasa</td>'), this.$bahasa = $('<td class="smap-photo-spec-data value smap-description-value"></td>'), this.$trBahasa = $("<tr></tr>").append(this.$titleBahasa, this.$bahasa), this.$titleSubyek = $('<td class="smap-photo-spec-data attribute smap-description-table-book">Subyek</td>'), this.$subyek = $('<td class="smap-photo-spec-data value smap-description-value"></td>'), this.$trSubyek = $("<tr></tr>").append(this.$titleSubyek, this.$subyek), this.$table = $('<table class="smap-description-table-book"><tbody></tbody></table>').append(this.$trNoPanggil, this.$trJudul, this.$trPenulis, this.$trTempatTerbit, this.$trPenerbit, this.$trTahunTerbit, this.$trEdisi, this.$trKolasi, this.$trISBN, this.$trBahasa, this.$trSubyek), this.$details = $('<div class="og-details"></div>').append(this.$title, this.$description, this.$table), this.$loading = $('<div class="og-loading"></div>'), this.$fullimage = $('<div class="og-fullimg"></div>').append(this.$loading), this.$closePreview = $('<span class="og-close"></span>'), this.$previewInner = $('<div class="og-expander-inner"></div>').append(this.$closePreview, this.$fullimage, this.$details), this.$previewEl = $('<div class="og-expander"></div>').append(this.$previewInner), this.$item.append(this.getEl()), T && this.setTransition()) : (this.$title = $("<h3></h3>"), this.$description = $("<p></p>"), this.$href = $('<a href="#">Lihat Detail</a>'), this.$details = $('<div class="og-details"></div>').append(this.$title, this.$description, this.$href), this.$loading = $('<div class="og-loading"></div>'), this.$fullimage = $('<div class="og-fullimg"></div>').append(this.$loading), this.$closePreview = $('<span class="og-close"></span>'), this.$previewInner = $('<div class="og-expander-inner"></div>').append(this.$closePreview, this.$fullimage, this.$details), this.$previewEl = $('<div class="og-expander"></div>').append(this.$previewInner), this.$item.append(this.getEl()), T && this.setTransition())
        },
        update: function(t) {
            if (l.hasClass("smap-book-description")) {
                if (t && (this.$item = t), c !== -1) {
                    var i = p.eq(c);
                    i.removeClass("og-expanded"), this.$item.addClass("og-expanded"), this.positionPreview()
                }
                c = this.$item.index();
                var e = this.$item.children("a"),
                    s = {
                        href: e.attr("href"),
                        largesrc: e.data("largesrc"),
                        title: e.data("title"),
                        description: e.data("description"),
                        noPanggil: e.data("no-panggil"),
                        judul: e.data("judul"),
                        penulis: e.data("penulis"),
                        tempatTerbit: e.data("tempat-terbit"),
                        penerbit: e.data("penerbit"),
                        tahunTerbit: e.data("tahun-terbit"),
                        edisi: e.data("edisi"),
                        kolasi: e.data("kolasi"),
                        isbn: e.data("isbn"),
                        bahasa: e.data("bahasa"),
                        subyek: e.data("subyek")
                    };
                this.$title.html(s.title), this.$description.html(s.description), this.$href.attr("href", s.href), this.$noPanggil.html(s.noPanggil), this.$judul.html(s.judul), this.$penulis.html(s.penulis), this.$tempatTerbit.html(s.tempatTerbit), this.$penerbit.html(s.penerbit), this.$tahunTerbit.html(s.tahunTerbit), this.$edisi.html(s.edisi), this.$kolasi.html(s.kolasi), this.$isbn.html(s.isbn), this.$bahasa.html(s.bahasa), this.$subyek.html(s.subyek);
                var a = this;
                "undefined" != typeof a.$largeImg && a.$largeImg.remove(), a.$fullimage.is(":visible") && (this.$loading.show(), $("<img/>").load(function() {
                    var t = $(this);
                    t.attr("src") === a.$item.children("a").data("largesrc") && (a.$loading.hide(), a.$fullimage.find("img").remove(), a.$largeImg = t.fadeIn(350), a.$fullimage.append(a.$largeImg))
                }).attr("src", s.largesrc))
            } else {
                if (t && (this.$item = t), c !== -1) {
                    var i = p.eq(c);
                    i.removeClass("og-expanded"), this.$item.addClass("og-expanded"), this.positionPreview()
                }
                c = this.$item.index();
                var e = this.$item.children("a"),
                    s = {
                        href: e.attr("href"),
                        largesrc: e.data("largesrc"),
                        title: e.data("title"),
                        description: e.data("description")
                    };
                this.$title.html(s.title), this.$description.html(s.description), this.$href.attr("href", s.href);
                var a = this;
                "undefined" != typeof a.$largeImg && a.$largeImg.remove(), a.$fullimage.is(":visible") && (this.$loading.show(), $("<img/>").load(function() {
                    var t = $(this);
                    t.attr("src") === a.$item.children("a").data("largesrc") && (a.$loading.hide(), a.$fullimage.find("img").remove(), a.$largeImg = t.fadeIn(350), a.$fullimage.append(a.$largeImg))
                }).attr("src", s.largesrc))
            }
        },
        open: function() {
            setTimeout($.proxy(function() {
                this.setHeights(), this.positionPreview()
            }, this), 25)
        },
        close: function() {
            var t = this,
                i = function() {
                    T && $(this).off(k), t.$item.removeClass("og-expanded"), t.$previewEl.remove()
                };
            return setTimeout($.proxy(function() {
                "undefined" != typeof this.$largeImg && this.$largeImg.fadeOut("fast"), this.$previewEl.css("height", 0);
                var t = p.eq(this.expandedIdx);
                t.css("height", t.data("height")).on(k, i), T || i.call()
            }, this), 25), !1
        },
        calcHeight: function() {
            var t = o.height - this.$item.data("height") - f,
                i = o.height;
            t < w.minHeight && (t = w.minHeight, i = w.minHeight + this.$item.data("height") + f), this.height = t, this.itemHeight = i
        },
        setHeights: function() {
            var t = this,
                i = function() {
                    T && t.$item.off(k), t.$item.addClass("og-expanded")
                };
            this.calcHeight(), this.$previewEl.css("height", this.height), this.$item.css("height", this.itemHeight).on(k, i), T || i.call()
        },
        positionPreview: function() {
            var t = this.$item.data("offsetTop"),
                i = this.$previewEl.offset().top - g,
                e = this.height + this.$item.data("height") + f <= o.height ? t : this.height < o.height ? i - (o.height - this.height) : i;
            b.animate({
                scrollTop: e
            }, w.speed)
        },
        setTransition: function() {
            this.$previewEl.css("transition", "height " + w.speed + "ms " + w.easing), this.$item.css("transition", "height " + w.speed + "ms " + w.easing)
        },
        getEl: function() {
            return this.$previewEl
        }
    }, {
        init: t,
        addItems: i
    }
}();
