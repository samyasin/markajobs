<?php ob_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <title>MarkaVIP, The Leading online shopping community in the Middle East - MarkaVIP</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><script type="text/javascript">(window.NREUM || (NREUM = {})).loader_config = {xpid: "UgcCWVJACwMDU1lVBg=="};
            window.NREUM || (NREUM = {}), __nr_require = function(t, e, n) {
                function r(n) {
                    if (!e[n]) {
                        var o = e[n] = {exports: {}};
                        t[n][0].call(o.exports, function(e) {
                            var o = t[n][1][e];
                            return r(o ? o : e)
                        }, o, o.exports)
                    }
                    return e[n].exports
                }
                if ("function" == typeof __nr_require)
                    return __nr_require;
                for (var o = 0; o < n.length; o++)
                    r(n[o]);
                return r
            }({QJf3ax: [function(t, e) {
                        function n(t) {
                            function e(e, n, a) {
                                t && t(e, n, a), a || (a = {});
                                for (var c = s(e), u = c.length, f = i(a, o, r), d = 0; u > d; d++)
                                    c[d].apply(f, n);
                                return f
                            }
                            function a(t, e) {
                                u[t] = s(t).concat(e)
                            }
                            function s(t) {
                                return u[t] || []
                            }
                            function c() {
                                return n(e)
                            }
                            var u = {};
                            return{on: a, emit: e, create: c, listeners: s, _events: u}
                        }
                        function r() {
                            return{}
                        }
                        var o = "nr@context", i = t("gos");
                        e.exports = n()
                    }, {gos: "7eSDFh"}], ee: [function(t, e) {
                        e.exports = t("QJf3ax")
                    }, {}], 3: [function(t) {
                        function e(t, e, n, i, s) {
                            try {
                                c ? c -= 1 : r("err", [s || new UncaughtException(t, e, n)])
                            } catch (u) {
                                try {
                                    r("ierr", [u, (new Date).getTime(), !0])
                                } catch (f) {
                                }
                            }
                            return"function" == typeof a ? a.apply(this, o(arguments)) : !1
                        }
                        function UncaughtException(t, e, n) {
                            this.message = t || "Uncaught error with no additional information", this.sourceURL = e, this.line = n
                        }
                        function n(t) {
                            r("err", [t, (new Date).getTime()])
                        }
                        var r = t("handle"), o = t(4), i = t("ee"), a = window.onerror, s = !1, c = 0;
                        t("loader").features.err = !0, window.onerror = e, NREUM.noticeError = n;
                        try {
                            throw new Error
                        } catch (u) {
                            "stack"in u && (t(5), t(3), "addEventListener"in window && t(1), window.XMLHttpRequest && XMLHttpRequest.prototype && XMLHttpRequest.prototype.addEventListener && t(2), s = !0)
                        }
                        i.on("fn-start", function() {
                            s && (c += 1)
                        }), i.on("fn-err", function(t, e, r) {
                            s && (this.thrown = !0, n(r))
                        }), i.on("fn-end", function() {
                            s && !this.thrown && c > 0 && (c -= 1)
                        }), i.on("internal-error", function(t) {
                            r("ierr", [t, (new Date).getTime(), !0])
                        })
                    }, {1: 4, 2: 7, 3: 5, 4: 18, 5: 6, ee: "QJf3ax", handle: "D5DuLP", loader: "G9z0Bl"}], 4: [function(t, e) {
                        function n(t) {
                            i.inPlace(t, ["addEventListener", "removeEventListener"], "-", r)
                        }
                        function r(t) {
                            return t[1]
                        }
                        var o = (t(1), t("ee").create()), i = t(2)(o), a = t("gos");
                        if (e.exports = o, n(window), "getPrototypeOf"in Object) {
                            for (var s = document; s && !s.hasOwnProperty("addEventListener"); )
                                s = Object.getPrototypeOf(s);
                            s && n(s);
                            for (var c = XMLHttpRequest.prototype; c && !c.hasOwnProperty("addEventListener"); )
                                c = Object.getPrototypeOf(c);
                            c && n(c)
                        } else
                            XMLHttpRequest.prototype.hasOwnProperty("addEventListener") && n(XMLHttpRequest.prototype);
                        o.on("addEventListener-start", function(t) {
                            if (t[1]) {
                                var e = t[1];
                                "function" == typeof e ? this.wrapped = t[1] = a(e, "nr@wrapped", function() {
                                    return i(e, "fn-", null, e.name || "anonymous")
                                }) : "function" == typeof e.handleEvent && i.inPlace(e, ["handleEvent"], "fn-")
                            }
                        }), o.on("removeEventListener-start", function(t) {
                            var e = this.wrapped;
                            e && (t[1] = e)
                        })
                    }, {1: 18, 2: 19, ee: "QJf3ax", gos: "7eSDFh"}], 5: [function(t, e) {
                        var n = (t(2), t("ee").create()), r = t(1)(n);
                        e.exports = n, r.inPlace(window, ["requestAnimationFrame", "mozRequestAnimationFrame", "webkitRequestAnimationFrame", "msRequestAnimationFrame"], "raf-"), n.on("raf-start", function(t) {
                            t[0] = r(t[0], "fn-")
                        })
                    }, {1: 19, 2: 18, ee: "QJf3ax"}], 6: [function(t, e) {
                        function n(t, e, n) {
                            var r = t[0];
                            "string" == typeof r && (r = new Function(r)), t[0] = o(r, "fn-", null, n)
                        }
                        var r = (t(2), t("ee").create()), o = t(1)(r);
                        e.exports = r, o.inPlace(window, ["setTimeout", "setInterval", "setImmediate"], "setTimer-"), r.on("setTimer-start", n)
                    }, {1: 19, 2: 18, ee: "QJf3ax"}], 7: [function(t, e) {
                        function n() {
                            c.inPlace(this, d, "fn-")
                        }
                        function r(t, e) {
                            c.inPlace(e, ["onreadystatechange"], "fn-")
                        }
                        function o(t, e) {
                            return e
                        }
                        var i = t("ee").create(), a = t(1), s = t(2), c = s(i), u = s(a), f = window.XMLHttpRequest, d = ["onload", "onerror", "onabort", "onloadstart", "onloadend", "onprogress", "ontimeout"];
                        e.exports = i, window.XMLHttpRequest = function(t) {
                            var e = new f(t);
                            try {
                                i.emit("new-xhr", [], e), u.inPlace(e, ["addEventListener", "removeEventListener"], "-", function(t, e) {
                                    return e
                                }), e.addEventListener("readystatechange", n, !1)
                            } catch (r) {
                                try {
                                    i.emit("internal-error", [r])
                                } catch (o) {
                                }
                            }
                            return e
                        }, window.XMLHttpRequest.prototype = f.prototype, c.inPlace(XMLHttpRequest.prototype, ["open", "send"], "-xhr-", o), i.on("send-xhr-start", r), i.on("open-xhr-start", r)
                    }, {1: 4, 2: 19, ee: "QJf3ax"}], 8: [function(t) {
                        function e(t) {
                            if ("string" == typeof t && t.length)
                                return t.length;
                            if ("object" != typeof t)
                                return void 0;
                            if ("undefined" != typeof ArrayBuffer && t instanceof ArrayBuffer && t.byteLength)
                                return t.byteLength;
                            if ("undefined" != typeof Blob && t instanceof Blob && t.size)
                                return t.size;
                            if ("undefined" != typeof FormData && t instanceof FormData)
                                return void 0;
                            try {
                                return JSON.stringify(t).length
                            } catch (e) {
                                return void 0
                            }
                        }
                        function n(t) {
                            var n = this.params, r = this.metrics;
                            if (!this.ended) {
                                this.ended = !0;
                                for (var i = 0; c > i; i++)
                                    t.removeEventListener(s[i], this.listener, !1);
                                if (!n.aborted) {
                                    if (r.duration = (new Date).getTime() - this.startTime, 4 === t.readyState) {
                                        n.status = t.status;
                                        var a = t.responseType, u = "arraybuffer" === a || "blob" === a || "json" === a ? t.response : t.responseText, f = e(u);
                                        if (f && (r.rxSize = f), this.sameOrigin) {
                                            var d = t.getResponseHeader("X-NewRelic-App-Data");
                                            d && (n.cat = d.split(", ").pop())
                                        }
                                    } else
                                        n.status = 0;
                                    r.cbTime = this.cbTime, o("xhr", [n, r, this.startTime])
                                }
                            }
                        }
                        function r(t, e) {
                            var n = i(e), r = t.params;
                            r.host = n.hostname + ":" + n.port, r.pathname = n.pathname, t.sameOrigin = n.sameOrigin
                        }
                        if (window.XMLHttpRequest && XMLHttpRequest.prototype && XMLHttpRequest.prototype.addEventListener && !/CriOS/.test(navigator.userAgent)) {
                            t("loader").features.xhr = !0;
                            var o = t("handle"), i = t(2), a = t("ee"), s = ["load", "error", "abort", "timeout"], c = s.length, u = t(1);
                            t(4), t(3), a.on("new-xhr", function() {
                                this.totalCbs = 0, this.called = 0, this.cbTime = 0, this.end = n, this.ended = !1, this.xhrGuids = {}
                            }), a.on("open-xhr-start", function(t) {
                                this.params = {method: t[0]}, r(this, t[1]), this.metrics = {}
                            }), a.on("open-xhr-end", function(t, e) {
                                "loader_config"in NREUM && "xpid"in NREUM.loader_config && this.sameOrigin && e.setRequestHeader("X-NewRelic-ID", NREUM.loader_config.xpid)
                            }), a.on("send-xhr-start", function(t, n) {
                                var r = this.metrics, o = t[0], i = this;
                                if (r && o) {
                                    var u = e(o);
                                    u && (r.txSize = u)
                                }
                                this.startTime = (new Date).getTime(), this.listener = function(t) {
                                    try {
                                        "abort" === t.type && (i.params.aborted = !0), ("load" !== t.type || i.called === i.totalCbs && (i.onloadCalled || "function" != typeof n.onload)) && i.end(n)
                                    } catch (e) {
                                        try {
                                            a.emit("internal-error", [e])
                                        } catch (r) {
                                        }
                                    }
                                };
                                for (var f = 0; c > f; f++)
                                    n.addEventListener(s[f], this.listener, !1)
                            }), a.on("xhr-cb-time", function(t, e, n) {
                                this.cbTime += t, e ? this.onloadCalled = !0 : this.called += 1, this.called !== this.totalCbs || !this.onloadCalled && "function" == typeof n.onload || this.end(n)
                            }), a.on("xhr-load-added", function(t, e) {
                                var n = "" + u(t) + !!e;
                                this.xhrGuids && !this.xhrGuids[n] && (this.xhrGuids[n] = !0, this.totalCbs += 1)
                            }), a.on("xhr-load-removed", function(t, e) {
                                var n = "" + u(t) + !!e;
                                this.xhrGuids && this.xhrGuids[n] && (delete this.xhrGuids[n], this.totalCbs -= 1)
                            }), a.on("addEventListener-end", function(t, e) {
                                e instanceof XMLHttpRequest && "load" === t[0] && a.emit("xhr-load-added", [t[1], t[2]], e)
                            }), a.on("removeEventListener-end", function(t, e) {
                                e instanceof XMLHttpRequest && "load" === t[0] && a.emit("xhr-load-removed", [t[1], t[2]], e)
                            }), a.on("fn-start", function(t, e, n) {
                                e instanceof XMLHttpRequest && ("onload" === n && (this.onload = !0), ("load" === (t[0] && t[0].type) || this.onload) && (this.xhrCbStart = (new Date).getTime()))
                            }), a.on("fn-end", function(t, e) {
                                this.xhrCbStart && a.emit("xhr-cb-time", [(new Date).getTime() - this.xhrCbStart, this.onload, e], e)
                            })
                        }
                    }, {1: "XL7HBI", 2: 9, 3: 7, 4: 4, ee: "QJf3ax", handle: "D5DuLP", loader: "G9z0Bl"}], 9: [function(t, e) {
                        e.exports = function(t) {
                            var e = document.createElement("a"), n = window.location, r = {};
                            e.href = t, r.port = e.port;
                            var o = e.href.split("://");
                            return!r.port && o[1] && (r.port = o[1].split("/")[0].split(":")[1]), r.port && "0" !== r.port || (r.port = "https" === o[0] ? "443" : "80"), r.hostname = e.hostname || n.hostname, r.pathname = e.pathname, "/" !== r.pathname.charAt(0) && (r.pathname = "/" + r.pathname), r.sameOrigin = !e.hostname || e.hostname === document.domain && e.port === n.port && e.protocol === n.protocol, r
                        }
                    }, {}], gos: [function(t, e) {
                        e.exports = t("7eSDFh")
                    }, {}], "7eSDFh": [function(t, e) {
                        function n(t, e, n) {
                            if (r.call(t, e))
                                return t[e];
                            var o = n();
                            if (Object.defineProperty && Object.keys)
                                try {
                                    return Object.defineProperty(t, e, {value: o, writable: !0, enumerable: !1}), o
                                } catch (i) {
                                }
                            return t[e] = o, o
                        }
                        var r = Object.prototype.hasOwnProperty;
                        e.exports = n
                    }, {}], D5DuLP: [function(t, e) {
                        function n(t, e, n) {
                            return r.listeners(t).length ? r.emit(t, e, n) : (o[t] || (o[t] = []), void o[t].push(e))
                        }
                        var r = t("ee").create(), o = {};
                        e.exports = n, n.ee = r, r.q = o
                    }, {ee: "QJf3ax"}], handle: [function(t, e) {
                        e.exports = t("D5DuLP")
                    }, {}], XL7HBI: [function(t, e) {
                        function n(t) {
                            var e = typeof t;
                            return!t || "object" !== e && "function" !== e ? -1 : t === window ? 0 : i(t, o, function() {
                                return r++
                            })
                        }
                        var r = 1, o = "nr@id", i = t("gos");
                        e.exports = n
                    }, {gos: "7eSDFh"}], id: [function(t, e) {
                        e.exports = t("XL7HBI")
                    }, {}], loader: [function(t, e) {
                        e.exports = t("G9z0Bl")
                    }, {}], G9z0Bl: [function(t, e) {
                        function n() {
                            var t = p.info = NREUM.info;
                            if (t && t.agent && t.licenseKey && t.applicationID && c && c.body) {
                                p.proto = "https" === d.split(":")[0] || t.sslForHttp ? "https://" : "http://", a("mark", ["onload", i()]);
                                var e = c.createElement("script");
                                e.src = p.proto + t.agent, c.body.appendChild(e)
                            }
                        }
                        function r() {
                            "complete" === c.readyState && o()
                        }
                        function o() {
                            a("mark", ["domContent", i()])
                        }
                        function i() {
                            return(new Date).getTime()
                        }
                        var a = t("handle"), s = window, c = s.document, u = "addEventListener", f = "attachEvent", d = ("" + location).split("?")[0], p = e.exports = {offset: i(), origin: d, features: {}};
                        c[u] ? (c[u]("DOMContentLoaded", o, !1), s[u]("load", n, !1)) : (c[f]("onreadystatechange", r), s[f]("onload", n)), a("mark", ["firstbyte", i()])
                    }, {handle: "D5DuLP"}], 18: [function(t, e) {
                        function n(t, e, n) {
                            e || (e = 0), "undefined" == typeof n && (n = t ? t.length : 0);
                            for (var r = -1, o = n - e || 0, i = Array(0 > o ? 0 : o); ++r < o; )
                                i[r] = t[e + r];
                            return i
                        }
                        e.exports = n
                    }, {}], 19: [function(t, e) {
                        function n(t) {
                            return!(t && "function" == typeof t && t.apply && !t[i])
                        }
                        var r = t("ee"), o = t(1), i = "nr@wrapper", a = Object.prototype.hasOwnProperty;
                        e.exports = function(t) {
                            function e(t, e, r, a) {
                                function nrWrapper() {
                                    var n, i, s, u;
                                    try {
                                        i = this, n = o(arguments), s = r && r(n, i) || {}
                                    } catch (d) {
                                        f([d, "", [n, i, a], s])
                                    }
                                    c(e + "start", [n, i, a], s);
                                    try {
                                        return u = t.apply(i, n)
                                    } catch (p) {
                                        throw c(e + "err", [n, i, p], s), p
                                    } finally {
                                        c(e + "end", [n, i, u], s)
                                    }
                                }
                                return n(t) ? t : (e || (e = ""), nrWrapper[i] = !0, u(t, nrWrapper), nrWrapper)
                            }
                            function s(t, r, o, i) {
                                o || (o = "");
                                var a, s, c, u = "-" === o.charAt(0);
                                for (c = 0; c < r.length; c++)
                                    s = r[c], a = t[s], n(a) || (t[s] = e(a, u ? s + o : o, i, s, t))
                            }
                            function c(e, n, r) {
                                try {
                                    t.emit(e, n, r)
                                } catch (o) {
                                    f([o, e, n, r])
                                }
                            }
                            function u(t, e) {
                                if (Object.defineProperty && Object.keys)
                                    try {
                                        var n = Object.keys(t);
                                        return n.forEach(function(n) {
                                            Object.defineProperty(e, n, {get: function() {
                                                    return t[n]
                                                }, set: function(e) {
                                                    return t[n] = e, e
                                                }})
                                        }), e
                                    } catch (r) {
                                        f([r])
                                    }
                                for (var o in t)
                                    a.call(t, o) && (e[o] = t[o]);
                                return e
                            }
                            function f(e) {
                                try {
                                    t.emit("internal-error", e)
                                } catch (n) {
                                }
                            }
                            return t || (t = r), e.inPlace = s, e.flag = i, e
                        }
                    }, {1: 18, ee: "QJf3ax"}]}, {}, ["G9z0Bl", 3, 8]);</script>
        <meta name="description" content="ماركه في آي بي هو الموقع الرائد للتسوق عبر الإنترنت في الشرق الأوسط والذي يقدم لأعضائه العروض الخاصة والحصرية على أشهر الماركات العالمية بخصم يصل إلى ٨٥ بالمائة" />
        <meta name="keywords" content="ستايل, أناقة, شراء على الإنترنت, شراء في الأردن, ماركات عالمية, ماركة, في اي بي, تسوق على الإنترنت, تسوق في الأردن, مشتريات, شراء, تسوق الكتروني, تسوق في الأردن, السعودية, لبنان, ملابس" />
        <meta name="robots" content="INDEX,FOLLOW" />

        <meta name="viewport" content="width=960, user-scalable=1">

        <meta name="apple-itunes-app" content="app-id=715290345, app-argument=markavip://">

        <meta property="og:image" content="https://markavip.com/jo/skin/frontend/markavip/default/images/logo_0.jpg"/>
        <meta property="og:description" content="MarkaVIP The Leading Online Shopping Community in the Middle East." />
        <meta property="og:title" content="MarkaVIP The Leading Online Shopping Community in the Middle East." />
        <link rel="shortcut icon" href="http://assets.ak.markavip-cdn.com/skin/frontend/inception/default/images/favicon.ico" type="image/x-icon"/>
        <link rel="icon" href="http://assets.ak.markavip-cdn.com/skin/frontend/inception/default/images/favicon-128.png" type="image/x-icon" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="http://assets.ak.markavip-cdn.com/skin/frontend/inception/default/css/main.css?v=1418804403" media="all" />
        <link rel="stylesheet" type="text/css" href="css/custom.css" media="all" />
        <script type="text/javascript" src="http://images.ak.markavip-cdn.com/media/js/f31a62eb6db99215302d0697729d209d.js?v=369"></script>
        <script type="text/javascript">
            (function() {
                var isOldCookie = false;
                if (Mage.Cookies.get('country_code') && !isOldCookie) {
                    window.country_code = Mage.Cookies.get('country_code');
                } else if (typeof geoip_country_code !== "undefined" && geoip_country_code !== null) {
                    window.country_code = geoip_country_code();
                    var expires = new Date();
                    expires.setTime(expires.getTime() + (12 * 60 * 60 * 1000));
                    Mage.Cookies.set('country_code', window.country_code, expires, '/');
                }
                window.country_code = window.country_code || 'SA';
                document.observe("dom:loaded", function() {
                    $$('html')[0].addClassName(country_code);
                    geoIpField = $('geoip_country_code');
                    if (geoIpField) {
                        geoIpField.value = country_code;
                    }
                });
                Revolution.markets = ["JO"];
                Revolution.memberTags = [];
                window.customerGender = '0';
                window.customerId = null;
                Revolution.myr = new Myr({'rest': 'https://pulse.markavip.com/hit', 'hit': {userId: window.customerId, gender: window.customerGender, country: country_code, site: 'markavip.com'}});
            })();
        </script>
        <script>
            Mage.Cookies.path = '/';
            Mage.Cookies.domain = '.markavip.com';
        </script>
        <script type="text/javascript">
            //<![CDATA[
            var aw_ajaxcartpro_proganim = 'center',
                    aw_ajaxcartpro_cartanim = 'opacity',
                    aw_base_url = 'http://markavip.com/jo/';
            AW_ACP = {
                cartURL: 'http://markavip.com/jo/checkout/cart/',
                useProgress: 1,
                useConfirmation: 1,
                isCartPage: 0,
                isCheckoutPage: 0,
                theme: 'default',
                onRender: []
            }
            if (window.location.href.match('https://') && !AW_ACP.cartURL.match('https://')) {
                AW_ACP.cartURL = AW_ACP.cartURL.replace('http://', 'https://')
            }
            //]]>
        </script>

        <script type="text/javascript">//<![CDATA[
            var Translator = new Translate([]);
            //]]></script></head>
    <body class=" cms-index-index cms-home">
        <script type="text/javascript">
            var utag_data = {"page_type": "home", "store_country": "jo", "store_currency": "JOD", "store_language": "en", "device_user_agent": "Mozilla\/5.0 (X11; Ubuntu; Linux x86_64; rv:30.0) Gecko\/20100101 Firefox\/30.0", "device_ip": "178.20.186.194"};
        </script>

        <script type="text/javascript">
            (function(a, b, c, d) {
                a = '//tags.tiqcdn.com/utag/markavip/jordan/prod/utag.js';
                b = document;
                c = 'script';
                d = b.createElement(c);
                d.src = a;
                d.type = 'text/java' + c;
                d.async = true;
                a = b.getElementsByTagName(c)[0];
                a.parentNode.insertBefore(d, a);
            })();
        </script>

        <div class="wrapper JO  preview-mode">
            <noscript>
            <div class="global-site-notice noscript">
                <div class="notice-inner">
                    <p>
                        <strong>JavaScript seems to be disabled in your browser.</strong><br />
                        You must have JavaScript enabled in your browser to utilize the functionality of this website.                </p>
                </div>
            </div>
            </noscript>
            <div style="position:absolute;top:-100px;">




            </div>


            <script type="text/javascript">
                document.observe('dom:loaded', function() {
                    var updater = new Updater(
                            'http://markavip.com/jo/updater/update/updatecart',
                            'http://markavip.com/jo/updater/update/updatewaitlist',
                            'http://markavip.com/jo/',
                            {"acartblock": "<ol id=\"mini-cart\" class=\"mini-products-list\"><\/ol>", "cartblock": "&lt;div class=&quot;cart&quot;&gt;\n    &lt;div class=&quot;page-title title-buttons&quot;&gt;\n        &lt;h1&gt;Shopping Cart&lt;\/h1&gt;\n                &lt;ul class=&quot;checkout-types clearfix&quot;&gt;\n                &lt;\/ul&gt;\n            &lt;\/div&gt;\n            &lt;form action=&quot;http:\/\/markavip.com\/jo\/checkout\/cart\/updatePost\/&quot; method=&quot;post&quot;&gt;\n        &lt;fieldset&gt;\n            &lt;table id=&quot;shopping-cart-table&quot; class=&quot;data-table cart-table&quot;&gt;\n                &lt;col width=&quot;1&quot; \/&gt;\n                &lt;col \/&gt;\n                                        &lt;col width=&quot;1&quot; \/&gt;\n                                        &lt;col width=&quot;1&quot; \/&gt;\n                            &lt;col width=&quot;1&quot; \/&gt;\n                                    \t&lt;col width=&quot;1&quot; \/&gt;\n                &lt;col width=&quot;1&quot; \/&gt;\n\n                            &lt;thead&gt;\n                    &lt;tr&gt;\n                        &lt;th rowspan=&quot;1&quot;&gt;&amp;nbsp;&lt;\/th&gt;\n                        &lt;th rowspan=&quot;1&quot;&gt;&lt;span class=&quot;nobr&quot;&gt;Product Name&lt;\/span&gt;&lt;\/th&gt;\n                                                &lt;th class=&quot;a-center&quot; colspan=&quot;1&quot;&gt;&lt;span class=&quot;nobr&quot;&gt;Unit Price&lt;\/span&gt;&lt;\/th&gt;\n                        &lt;th rowspan=&quot;1&quot; class=&quot;a-center&quot;&gt;Qty&lt;\/th&gt;\n                        &lt;th class=&quot;a-center&quot; colspan=&quot;1&quot;&gt;Subtotal&lt;\/th&gt;\n                        &lt;th rowspan=&quot;1&quot; class=&quot;a-center&quot;&gt;Expiration time&lt;\/th&gt;\n                        &lt;th rowspan=&quot;1&quot; class=&quot;a-center&quot;&gt;Remove&lt;\/th&gt;\n                    &lt;\/tr&gt;\n                                    &lt;\/thead&gt;\n                &lt;tfoot&gt;\n                    &lt;tr&gt;\n                        &lt;td colspan=&quot;50&quot; class=&quot;a-right&quot;&gt;\n                                                            &lt;button type=&quot;button&quot; title=&quot;Continue Shopping&quot; class=&quot;button btn-continue&quot; onclick=&quot;setLocation('http:\/\/markavip.com\/jo\/')&quot;&gt;&lt;span&gt;&lt;span&gt;Continue Shopping&lt;\/span&gt;&lt;\/span&gt;&lt;\/button&gt;\n                                                        &lt;button type=&quot;submit&quot; title=&quot;Update Shopping Cart&quot; class=&quot;button btn-update&quot;&gt;&lt;span&gt;&lt;span&gt;Update Shopping Cart&lt;\/span&gt;&lt;\/span&gt;&lt;\/button&gt;\n                        &lt;\/td&gt;\n                    &lt;\/tr&gt;\n                &lt;\/tfoot&gt;\n                &lt;tbody id=&quot;dynamic-cart&quot;&gt;\n                                &lt;\/tbody&gt;\n            &lt;\/table&gt;\n            &lt;script type=&quot;text\/javascript&quot;&gt;decorateTable('shopping-cart-table')&lt;\/script&gt;\n        &lt;\/fieldset&gt;\n    &lt;\/form&gt;\n    &lt;div class=&quot;totals&quot;&gt;\n                        &lt;ul class=&quot;checkout-types&quot;&gt;\n                &lt;\/ul&gt;\n            &lt;\/div&gt;\n    &lt;div class=&quot;cart-collaterals&quot;&gt;\n                &lt;div class=&quot;deals&quot;&gt;\n                                &lt;\/div&gt;\n            &lt;\/div&gt;\n\n&lt;\/div&gt;\n\n    &lt;div class='free-shipping-popup' id=&quot;free_shipping_popup_cart&quot;&gt;\n        &lt;div class='triangle'&gt;&lt;\/div&gt;\n        &lt;div class='happy-shipping-truck'&gt;&lt;\/div&gt;\n        &lt;h2&gt;Spend &lt;span class=&quot;price&quot;&gt;&lt;span class=&quot;sign&quot;&gt;JD&lt;\/span&gt;&lt;span class=&quot;digits&quot;&gt;49&lt;\/span&gt;&lt;\/span&gt; more for free shipping on this order&lt;\/h2&gt;\n        &lt;a href='http:\/\/markavip.com\/jo\/'&gt;\n            &lt;button&gt;Continue shopping&lt;\/button&gt;\n        &lt;\/a&gt;\n        &lt;a href=&quot;javascript:;&quot; class=&quot;close-popup&quot; id=&quot;free_shipping_popup_cart_close&quot;&gt;\n            Close        &lt;\/a&gt;\n    &lt;\/div&gt;\n    &lt;div class=&quot;screen-fader screen-fader-visible&quot; id=&quot;free_shipping_screen&quot; style=&quot;&quot;&gt;&lt;\/div&gt;\n    &lt;script&gt;\n        $('free_shipping_screen').observe('click',function(){\n            $('free_shipping_popup_cart').hide();\n            $('free_shipping_screen').hide();\n        });\n        $('free_shipping_popup_cart_close').observe('click',function(){\n            $('free_shipping_popup_cart').hide();\n            $('free_shipping_screen').hide();\n        });\n    &lt;\/script&gt;\n"});
                    updater.start(30);




                });

            </script>

            <header class="big-one">
                <script type="text/javascript">
                    new PricesConvertor(0.710080445440, 'JD$&');
                </script>
                <section class="top">

                    <a href="http://markavip.com/jo/" title="Marka VIP" class="logo_wrap"><h1 class="logo_wrap__image"><span class="logo_wrap__text">MarkaVIP</span></h1></a>

                    <nav class="user-control">
                        <div class="user-control-sections">
                            <div class="switch switcher-language">
                                <div class="switch-wrapper" id="languageSelect">
                                    <div class="language-button language-arabic">
                                        <a href="http://markavip.com/jo/?___lang=ar" class="sp-clear">
                                            العربية                </a>
                                    </div>
                                </div>
                            </div>
                            <div class="switch switcher-country">
                                <div class="switch-wrapper" id="storeSelect">
                                    <span onclick="popUpMenu(this);">
                                        <span class="current country-jo">
                                            <span class="flag"></span>
                                            Jordan				<span class="arrow-icon"></span>
                                        </span>
                                        <ul style="display:none" id="popId-storeSelect" class="currency-list switcher">
                                            <li class="triangle"></li>
                                            <li class="current country-jo">
                                                <span>
                                                    Jordan					</span>
                                            </li>
                                            <li class="country-sa">
                                                <a href="http://markavip.com/sa/">
                                                    <span class="flag"></span>Saudi Arabia                            </a>
                                            </li>
                                            <li class="country-ae">
                                                <a href="http://markavip.com/ae/">
                                                    <span class="flag"></span>United Arab Emirates                            </a>
                                            </li>
                                            <li class="country-qa">
                                                <a href="http://markavip.com/qa/">
                                                    <span class="flag"></span>Qatar                            </a>
                                            </li>
                                            <li class="country-kw">
                                                <a href="http://markavip.com/kw/">
                                                    <span class="flag"></span>Kuwait                            </a>
                                            </li>
                                            <li class="country-lb">
                                                <a href="http://markavip.com/lb/">
                                                    <span class="flag"></span>Lebanon                            </a>
                                            </li>
                                            <li class="country-om">
                                                <a href="http://markavip.com/om/">
                                                    <span class="flag"></span>Oman                            </a>
                                            </li>
                                            <li class="country-bh">
                                                <a href="http://markavip.com/bh/">
                                                    <span class="flag"></span>Bahrain                            </a>
                                            </li>
                                        </ul>
                                    </span>
                                </div>
                            </div>
                            <div class="cart">


                                <div class="mini-cart top-cart my-cart">
                                    <a href="javascript:;" class="my-cart-link no-items"><span id="acar-qty" class="bag-icon bag-empty cart-q">0<span></span></span></a>
                                    <div id="topCartContent" class="block-content" style="display:none">
                                        <div class="triangle"></div>
                                        <div class="inner-wrapper">
                                            <div class="block-subtitle">
                                                <h3>Your Shopping Bag</h3>
                                            </div>
                                            <div class="mini-cart-empty">
                                                You have nothing in you bag just yet.            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        decorateList('mini-cart', 'none-recursive');
                                        Revolution.appearDisappear(".mini-cart", "#topCartContent", {inTo: 1, inDuration: 0.3, outDuration: 0.3});
                                    </script>
                                </div>
                            </div>
                            <div class="account switch switch-wrapper" id="usermenu_wrap">
                                <a class="username" onclick="popUpMenu(this);">
                                    <div class="guest-links-wrapper"><span class="welcome">Welcome to MarkaVIP</span><a href="#login" class="do_modal" rel="login">Login or Sign Up</a></div>                    </a>
                                <ul id="popId-usermenu_wrap" style="display:none;" class="switcher">
                                    <li class="triangle"></li>
                                    <li class="account-link-dashboard"><a href="http://markavip.com/jo/customer/account/"><span class="icon"></span>Account Dashboard</a></li>
                                    <li class="account-link-info"><a href="http://markavip.com/jo/customer/account/edit/"><span class="icon"></span>Edit Information</a></li>
                                    <li class="account-link-orders"><a href="http://markavip.com/jo/sales/order/history/"><span class="icon"></span>Orders History</a></li>
                                    <li class="account-link-logout"><a href="http://markavip.com/jo/customer/account/logout"><span class="icon"></span>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                </section>
                <nav class="top-bar">
                    <div class="nav-contents"></div>
                    <div class="nav-point nav-search">
                        <span class="action-icon"></span>
                        <input type="text" id="search_field"/>
                        <div id="search_results" class="search-results" style="display:none;">
                        </div>
                    </div>
                    <div class="nav-support">
                        Questions?<span class="small-none">&nbsp;Call us at</span>&nbsp;<span class="phone">+96265777711</span>
                        <span class="arrow-icon"></span>
                        <div class="need-help-dialog support-container">
                            <ul class="help-list clearfix">
                                <li><span class="chat-online icon"></span>
                                    <div class="help-label"><h4>Chat Online Live</h4>
                                        <div class="advice-help">
                                            <a id="LiveChat_1309985049_btn" href="https://secure.livechatinc.com/licence/1084893/open_chat.cgi?lang=en&groups=0" onclick="window.open('https://secure.livechatinc.com/licence/1084893/open_chat.cgi?lang=en&groups=0', 'Chat_1084893', 'width=530,height=520,resizable=yes,scrollbars=no');
                                                    ;
                                                    return false">Live Chat with us</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="call">
                                    <span class="call-us icon"></span>
                                    <div class="help-label">
                                        <h4>Call Us Right Now</h4>


                                        <div class="advice-help advice-help_first">
                                            <span class="tel-icon world"></span>
                                            <span class="left">+962 6 57777 11</span>
                                        </div>
                                        <div class="advice-help" title="UAE Only">
                                            <span class="tel-icon uae"></span>
                                            <span class="left">800-62752847 <span class="phone-markavip">(800-MARKAVIP)</span></span>
                                        </div>



                                    </div>
                                </li>
                                <li><span class="mail-us icon"></span><div class="help-label"><h4>Email</h4><div class="advice-help"><a href="mailto:support@markavip.com">Send Us An Email</a></div></div></li>
                                <li><span class="faqs icon"></span><div class="help-label"><h4>Need Answers?</h4><div class="advice-help"><a class="faq-link" href="http://markavip.com/jo/faq-company-information">Check Out Our FAQs</a></div></div></li>
                                <li><span class="skype icon"></span><div class="help-label"><h4>Call us on Skype for free</h4><div class="advice-help"><a class="faq-link" href="skype:markavip.com?call">Skype ID: markavip.com</a></div></div></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <script type="text/javascript" charset="utf-8">
                    new Search({
                        url: '/api/rest/jo/catalog/product/?call=search&limit=6&lang=en&term=',
                        fullPageUrl: 'http://markavip.com/jo/catalog/women+men+children+home+electronics?term=',
                        htmlNotFound: '<div class="search-result-nothing"> <h3>Sorry, we didn\'t find anything</h3> <p>Please, make sure all words are spelled correctly or&nbsp;try&nbsp;different&nbsp;keywords.</p>',
                        showOther: 'SHOW ALL RESULTS'
                    });

                    Revolution.classOnOver('.nav-support', 'nav-support-opened');

                    navigationJSON = {"women": {"name": "Women", "url": "http:\/\/markavip.com\/jo\/women\/", "max_price": 788.22, "min_price": 14.5464, "recommended_campaigns": {"56563": {"label": "Beverly Hills Polo Club ", "image": "http:\/\/images.ak.markavip-cdn.com\/media\/catalog\/category\/cache\/160x128\/1412BHS.jpg", "url": "http:\/\/markavip.com\/jo\/campaigns\/1412bhs.html"}, "54803": {"label": "Aigner", "image": "http:\/\/images.ak.markavip-cdn.com\/media\/catalog\/category\/cache\/160x128\/1412AGR.jpg", "url": "http:\/\/markavip.com\/jo\/campaigns\/1412agr.html"}, "56735": {"label": "Zerbap", "image": "http:\/\/images.ak.markavip-cdn.com\/media\/catalog\/category\/cache\/160x128\/1412ZER.jpg", "url": "http:\/\/markavip.com\/jo\/campaigns\/1412zer.html"}}, "product_amount": 3014, "allowed_customer_tag_amount": 0, "allowed_tags": ",,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,", "subcategory_list": {"women:accessories": {"group_label": "Accessories", "group_url": "http:\/\/markavip.com\/jo\/catalog\/women\/accessories", "product_amount": 953, "allowed_customer_tag_amount": 0, "allowed_tags": ",,,,,,", "subcategories": {"67": {"subcategory_label": "Handbags", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/accessories\/handbags", "product_amount": "735", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "84": {"subcategory_label": "Briefcases", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/accessories\/briefcases", "product_amount": "15", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "80": {"subcategory_label": "Gifts", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/accessories\/gifts", "product_amount": "3", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "68": {"subcategory_label": "Clutches", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/accessories\/clutches", "product_amount": "49", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "70": {"subcategory_label": "Wallets", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/accessories\/wallets", "product_amount": "41", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "85": {"subcategory_label": "Sports and Fitness", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/accessories\/sports_fitness", "product_amount": "30", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "86": {"subcategory_label": "Health & Beauty", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/accessories\/health_beauty", "product_amount": "80", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}, "women:jewelry": {"group_label": "Jewelry", "group_url": "http:\/\/markavip.com\/jo\/catalog\/women\/jewelry", "product_amount": 540, "allowed_customer_tag_amount": 0, "allowed_tags": ",,,,,", "subcategories": {"99": {"subcategory_label": "Pendants", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/jewelry\/pendants", "product_amount": "3", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "96": {"subcategory_label": "Bracelets", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/jewelry\/bracelets", "product_amount": "62", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "94": {"subcategory_label": "Earrings", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/jewelry\/earrings", "product_amount": "1", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "95": {"subcategory_label": "Necklaces", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/jewelry\/necklaces", "product_amount": "25", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "97": {"subcategory_label": "Rings", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/jewelry\/rings", "product_amount": "310", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "98": {"subcategory_label": "Sets", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/jewelry\/sets", "product_amount": "139", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}, "women:watches": {"group_label": "Watches", "group_url": "http:\/\/markavip.com\/jo\/catalog\/women\/watches", "product_amount": 74, "allowed_customer_tag_amount": 0, "allowed_tags": ",", "subcategories": {"104": {"subcategory_label": "Luxury", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/watches\/luxury", "product_amount": "1", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "103": {"subcategory_label": "Casual", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/watches\/casual", "product_amount": "73", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}, "women:eyewear": {"group_label": "Eyewear", "group_url": "http:\/\/markavip.com\/jo\/catalog\/women\/eyewear", "product_amount": 215, "allowed_customer_tag_amount": 0, "allowed_tags": ",", "subcategories": {"105": {"subcategory_label": "Sunglasses", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/eyewear\/sunglasses", "product_amount": "74", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "106": {"subcategory_label": "Eyeglasses", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/eyewear\/eyeglasses", "product_amount": "141", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}, "women:apparel": {"group_label": "Apparel", "group_url": "http:\/\/markavip.com\/jo\/catalog\/women\/apparel", "product_amount": 878, "allowed_customer_tag_amount": 0, "allowed_tags": ",,,,,,,,,,,", "subcategories": {"58": {"subcategory_label": "Rompers & Jumpsuits", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/apparel\/rompers_jumpsuits", "product_amount": "35", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "55": {"subcategory_label": "Denim", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/apparel\/denim", "product_amount": "13", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "48": {"subcategory_label": "Dresses", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/apparel\/dresses", "product_amount": "392", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "59": {"subcategory_label": "Shorts", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/apparel\/shorts", "product_amount": "5", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "54": {"subcategory_label": "Tunics", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/apparel\/tunics", "product_amount": "20", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "51": {"subcategory_label": "Skirts", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/apparel\/skirts", "product_amount": "26", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "50": {"subcategory_label": "Leggings", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/apparel\/leggings", "product_amount": "10", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "57": {"subcategory_label": "Coats & Jackets", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/apparel\/coats_jackets", "product_amount": "25", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "53": {"subcategory_label": "Sweaters", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/apparel\/sweaters", "product_amount": "102", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "64": {"subcategory_label": "Abaya", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/apparel\/abaya", "product_amount": "126", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "52": {"subcategory_label": "Tops", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/apparel\/tops", "product_amount": "91", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "49": {"subcategory_label": "Pants", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/apparel\/pants", "product_amount": "33", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}, "women:shoes": {"group_label": "Shoes", "group_url": "http:\/\/markavip.com\/jo\/catalog\/women\/shoes", "product_amount": 354, "allowed_customer_tag_amount": 0, "allowed_tags": ",,,", "subcategories": {"93": {"subcategory_label": "Wedges", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/shoes\/wedges", "product_amount": "51", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "88": {"subcategory_label": "Pumps", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/shoes\/pumps", "product_amount": "61", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "91": {"subcategory_label": "Athletic", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/shoes\/athletic", "product_amount": "30", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "89": {"subcategory_label": "Flats", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/women\/shoes\/flats", "product_amount": "212", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}}, "price_ranges": {"1": {"from": 0, "to": 100, "base_from": 0, "base_to": 100, "label": "Less than <span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">100<\/span><\/span>", "url": "http:\/\/markavip.com\/jo\/catalog\/women?price_range=0-100"}, "2": {"from": 100, "to": 200, "base_from": 100, "base_to": 200, "label": "<span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">100<\/span><\/span> - <span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">200<\/span><\/span>", "url": "http:\/\/markavip.com\/jo\/catalog\/women?price_range=100-200"}, "3": {"from": 200, "to": 300, "base_from": 200, "base_to": 300, "label": "<span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">200<\/span><\/span> - <span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">300<\/span><\/span>", "url": "http:\/\/markavip.com\/jo\/catalog\/women?price_range=200-300"}, "4": {"from": 300, "to": false, "base_from": 300, "base_to": false, "label": "More than <span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">300<\/span><\/span>", "url": "http:\/\/markavip.com\/jo\/catalog\/women?price_range=300-"}}}, "men": {"name": "Men", "url": "http:\/\/markavip.com\/jo\/men\/", "max_price": 651.7321, "min_price": 24.1768, "recommended_campaigns": {"56425": {"label": "Cerruti 1881", "image": "http:\/\/images.ak.markavip-cdn.com\/media\/catalog\/category\/cache\/160x128\/1412CRT.jpg", "url": "http:\/\/markavip.com\/jo\/campaigns\/1412crt.html"}, "56731": {"label": "Armani Jeans and More", "image": "http:\/\/images.ak.markavip-cdn.com\/media\/catalog\/category\/cache\/160x128\/1412ADH.jpg", "url": "http:\/\/markavip.com\/jo\/campaigns\/1412adh.html"}, "53299": {"label": "Prada, Gucci & More", "image": "http:\/\/images.ak.markavip-cdn.com\/media\/catalog\/category\/cache\/160x128\/1410PDM_1.jpg", "url": "http:\/\/markavip.com\/jo\/campaigns\/1412pdm.html"}}, "product_amount": 1071, "allowed_customer_tag_amount": 0, "allowed_tags": ",,,,,,,,,,,,,,,,,,,,", "subcategory_list": {"men:shoes": {"group_label": "Shoes", "group_url": "http:\/\/markavip.com\/jo\/catalog\/men\/shoes", "product_amount": 387, "allowed_customer_tag_amount": 0, "allowed_tags": ",,,", "subcategories": {"34": {"subcategory_label": "Dress", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/shoes\/dress", "product_amount": "33", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "35": {"subcategory_label": "Athletic", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/shoes\/athletic", "product_amount": "10", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "36": {"subcategory_label": "Casual", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/shoes\/casual", "product_amount": "255", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "37": {"subcategory_label": "Boots", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/shoes\/boots", "product_amount": "89", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}, "men:eyewear": {"group_label": "Eyewear", "group_url": "http:\/\/markavip.com\/jo\/catalog\/men\/eyewear", "product_amount": 138, "allowed_customer_tag_amount": 0, "allowed_tags": ",", "subcategories": {"46": {"subcategory_label": "Eyeglasses", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/eyewear\/eyeglasses", "product_amount": "103", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "45": {"subcategory_label": "Sunglasses", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/eyewear\/sunglasses", "product_amount": "35", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}, "men:apparel": {"group_label": "Apparel", "group_url": "http:\/\/markavip.com\/jo\/catalog\/men\/apparel", "product_amount": 335, "allowed_customer_tag_amount": 0, "allowed_tags": ",,,,,,,", "subcategories": {"3": {"subcategory_label": "Pants", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/apparel\/pants", "product_amount": "21", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "15": {"subcategory_label": "Tops", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/apparel\/tops", "product_amount": "121", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "10": {"subcategory_label": "Activewear", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/apparel\/activewear", "product_amount": "15", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "8": {"subcategory_label": "Shorts", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/apparel\/shorts", "product_amount": "2", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "7": {"subcategory_label": "Denim", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/apparel\/denim", "product_amount": "29", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "12": {"subcategory_label": "Coats & Jackets", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/apparel\/coats_jackets", "product_amount": "24", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "2": {"subcategory_label": "Polos", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/apparel\/polos", "product_amount": "56", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "14": {"subcategory_label": "Sweaters", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/apparel\/sweaters", "product_amount": "67", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}, "men:watches": {"group_label": "Watches", "group_url": "http:\/\/markavip.com\/jo\/catalog\/men\/watches", "product_amount": 50, "allowed_customer_tag_amount": 0, "allowed_tags": ",", "subcategories": {"44": {"subcategory_label": "Luxury", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/watches\/luxury", "product_amount": "5", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "43": {"subcategory_label": "Casual", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/watches\/casual", "product_amount": "45", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}, "men:accessories": {"group_label": "Accessories", "group_url": "http:\/\/markavip.com\/jo\/catalog\/men\/accessories", "product_amount": 161, "allowed_customer_tag_amount": 0, "allowed_tags": ",,,,", "subcategories": {"32": {"subcategory_label": "Health & Beauty", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/accessories\/health_beauty", "product_amount": "80", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "31": {"subcategory_label": "Sports & Fitness", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/accessories\/sports_fitness", "product_amount": "30", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "29": {"subcategory_label": "Backpacks", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/accessories\/backpacks", "product_amount": "5", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "24": {"subcategory_label": "Hats", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/accessories\/hats", "product_amount": "2", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "33": {"subcategory_label": "Bags", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/men\/accessories\/bags", "product_amount": "44", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}}, "price_ranges": {"1": {"from": 0, "to": 50, "base_from": 0, "base_to": 50, "label": "Less than <span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">50<\/span><\/span>", "url": "http:\/\/markavip.com\/jo\/catalog\/men?price_range=0-50"}, "2": {"from": 50, "to": 100, "base_from": 50, "base_to": 100, "label": "<span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">50<\/span><\/span> - <span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">100<\/span><\/span>", "url": "http:\/\/markavip.com\/jo\/catalog\/men?price_range=50-100"}, "3": {"from": 100, "to": 150, "base_from": 100, "base_to": 150, "label": "<span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">100<\/span><\/span> - <span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">150<\/span><\/span>", "url": "http:\/\/markavip.com\/jo\/catalog\/men?price_range=100-150"}, "4": {"from": 150, "to": false, "base_from": 150, "base_to": false, "label": "More than <span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">150<\/span><\/span>", "url": "http:\/\/markavip.com\/jo\/catalog\/men?price_range=150-"}}}, "children": {"name": "Children", "url": "http:\/\/markavip.com\/jo\/children\/", "max_price": 89.6228, "min_price": 18.3158, "product_amount": 59, "allowed_customer_tag_amount": 0, "allowed_tags": ",,,,,,,,,,,,,,,", "subcategory_list": {"children:baby_girl": {"group_label": "Baby Girl (3M-3Y)", "group_url": "http:\/\/markavip.com\/jo\/catalog\/children\/baby_girl", "product_amount": 8, "allowed_customer_tag_amount": 0, "allowed_tags": ",,,", "subcategories": {"152": {"subcategory_label": "Onesie", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/children\/baby_girl\/onesie", "product_amount": "5", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "156": {"subcategory_label": "Dresses", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/children\/baby_girl\/dresses", "product_amount": "1", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "154": {"subcategory_label": "Bottoms", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/children\/baby_girl\/bottoms", "product_amount": "1", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "229": {"subcategory_label": "Rompers", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/children\/baby_girl\/rompers", "product_amount": "1", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}, "children:baby_boy": {"group_label": "Baby Boy (3M-3Y)", "group_url": "http:\/\/markavip.com\/jo\/catalog\/children\/baby_boy", "product_amount": 16, "allowed_customer_tag_amount": 0, "allowed_tags": ",,,,", "subcategories": {"171": {"subcategory_label": "Onesie", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/children\/baby_boy\/onesie", "product_amount": "6", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "173": {"subcategory_label": "Bottoms", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/children\/baby_boy\/bottoms", "product_amount": "3", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "239": {"subcategory_label": "Set", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/children\/baby_boy\/set", "product_amount": "2", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "172": {"subcategory_label": "Tops", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/children\/baby_boy\/tops", "product_amount": "1", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "237": {"subcategory_label": "Rompers", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/children\/baby_boy\/rompers", "product_amount": "4", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}, "children:boy": {"group_label": "Boy (4-16 Y)", "group_url": "http:\/\/markavip.com\/jo\/catalog\/children\/boy", "product_amount": 16, "allowed_customer_tag_amount": 0, "allowed_tags": ",,", "subcategories": {"180": {"subcategory_label": "Bottoms", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/children\/boy\/bottoms", "product_amount": "2", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "183": {"subcategory_label": "Sweaters", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/children\/boy\/sweaters", "product_amount": "10", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "179": {"subcategory_label": "Tops", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/children\/boy\/tops", "product_amount": "4", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}, "children:girl": {"group_label": "Girl (4-16 Y)", "group_url": "http:\/\/markavip.com\/jo\/catalog\/children\/girl", "product_amount": 19, "allowed_customer_tag_amount": 0, "allowed_tags": ",,,", "subcategories": {"164": {"subcategory_label": "Dresses", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/children\/girl\/dresses", "product_amount": "5", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "162": {"subcategory_label": "Bottoms", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/children\/girl\/bottoms", "product_amount": "4", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "165": {"subcategory_label": "Shoes", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/children\/girl\/shoes", "product_amount": "1", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "166": {"subcategory_label": "Sweaters", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/children\/girl\/sweaters", "product_amount": "9", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}}, "price_ranges": {"1": {"from": 0, "to": 20, "base_from": 0, "base_to": 20, "label": "Less than <span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">20<\/span><\/span>", "url": "http:\/\/markavip.com\/jo\/catalog\/children?price_range=0-20"}, "2": {"from": 20, "to": 40, "base_from": 20, "base_to": 40, "label": "<span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">20<\/span><\/span> - <span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">40<\/span><\/span>", "url": "http:\/\/markavip.com\/jo\/catalog\/children?price_range=20-40"}, "3": {"from": 40, "to": 60, "base_from": 40, "base_to": 60, "label": "<span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">40<\/span><\/span> - <span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">60<\/span><\/span>", "url": "http:\/\/markavip.com\/jo\/catalog\/children?price_range=40-60"}, "4": {"from": 60, "to": false, "base_from": 60, "base_to": false, "label": "More than <span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">60<\/span><\/span>", "url": "http:\/\/markavip.com\/jo\/catalog\/children?price_range=60-"}}}, "electronics": {"name": "Electronics", "url": "http:\/\/markavip.com\/jo\/electronics\/", "max_price": 2147.27, "min_price": 10, "recommended_campaigns": {"56665": {"label": "Massage Corner", "image": "http:\/\/images.ak.markavip-cdn.com\/media\/catalog\/category\/cache\/160x128\/1411MSG_1.jpg", "url": "http:\/\/markavip.com\/jo\/campaigns\/1412mar.html"}, "56631": {"label": "Health&Beauty", "image": "http:\/\/images.ak.markavip-cdn.com\/media\/catalog\/category\/cache\/160x128\/1412HLT.jpg", "url": "http:\/\/markavip.com\/jo\/campaigns\/1412hlt.html"}, "56693": {"label": "Ferrari & More", "image": "http:\/\/images.ak.markavip-cdn.com\/media\/catalog\/category\/cache\/160x128\/1412FRD_1.jpg", "url": "http:\/\/markavip.com\/jo\/campaigns\/1412frx.html"}}, "product_amount": 477, "allowed_customer_tag_amount": 0, "allowed_tags": ",,,,,,,,,", "subcategory_list": {"electronics:gadgets": {"group_label": "Gadgets", "group_url": "http:\/\/markavip.com\/jo\/catalog\/electronics\/gadgets", "product_amount": 68, "allowed_customer_tag_amount": 0, "allowed_tags": ",,,", "subcategories": {"194": {"subcategory_label": "Phones", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/electronics\/gadgets\/phones", "product_amount": "33", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "198": {"subcategory_label": "Home Electronics", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/electronics\/gadgets\/home_electronics", "product_amount": "6", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "195": {"subcategory_label": "Cameras", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/electronics\/gadgets\/cameras", "product_amount": "21", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "197": {"subcategory_label": "Tablets", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/electronics\/gadgets\/tablets", "product_amount": "8", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}, "electronics:accessories": {"group_label": "Accessories", "group_url": "http:\/\/markavip.com\/jo\/catalog\/electronics\/accessories", "product_amount": 381, "allowed_customer_tag_amount": 0, "allowed_tags": ",,,", "subcategories": {"205": {"subcategory_label": "Cases", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/electronics\/accessories\/cases", "product_amount": "202", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "202": {"subcategory_label": "Phone Accessories", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/electronics\/accessories\/phone_accessories", "product_amount": "130", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "204": {"subcategory_label": "Computer Accessories", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/electronics\/accessories\/computer_accessories", "product_amount": "47", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "203": {"subcategory_label": "Camera Accessories", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/electronics\/accessories\/camera_accessories", "product_amount": "2", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}, "electronics:computers": {"group_label": "Computers", "group_url": "http:\/\/markavip.com\/jo\/catalog\/electronics\/computers", "product_amount": 28, "allowed_customer_tag_amount": 0, "allowed_tags": ",", "subcategories": {"201": {"subcategory_label": "Laptops", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/electronics\/computers\/laptops", "product_amount": "21", "allowed_customer_tag_amount": "0", "allowed_tags": ""}, "200": {"subcategory_label": "PCs", "subcategory_url": "http:\/\/markavip.com\/jo\/catalog\/electronics\/computers\/pc", "product_amount": "7", "allowed_customer_tag_amount": "0", "allowed_tags": ""}}}}, "price_ranges": {"1": {"from": 0, "to": 100, "base_from": 0, "base_to": 100, "label": "Less than <span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">100<\/span><\/span>", "url": "http:\/\/markavip.com\/jo\/catalog\/electronics?price_range=0-100"}, "2": {"from": 100, "to": 200, "base_from": 100, "base_to": 200, "label": "<span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">100<\/span><\/span> - <span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">200<\/span><\/span>", "url": "http:\/\/markavip.com\/jo\/catalog\/electronics?price_range=100-200"}, "3": {"from": 200, "to": 300, "base_from": 200, "base_to": 300, "label": "<span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">200<\/span><\/span> - <span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">300<\/span><\/span>", "url": "http:\/\/markavip.com\/jo\/catalog\/electronics?price_range=200-300"}, "4": {"from": 300, "to": false, "base_from": 300, "base_to": false, "label": "More than <span class=\"price\"><span class=\"sign\">JD<\/span><span class=\"digits\">300<\/span><\/span>", "url": "http:\/\/markavip.com\/jo\/catalog\/electronics?price_range=300-"}}}};
                    setTimeout(function() {
                        window.rafael = new Rafael(navigationJSON, {translations: {
                                recommendedCampaigns: "Recommended ",
                                shopByCategory: "Shop By Category",
                                shopByPrice: "Shop By Price",
                                viewAllCampaigns: {
                                    fallback: 'View {category} Sales',
                                    women: 'View Women Sales',
                                    men: 'View Men Sales',
                                    home: 'View Home Sales',
                                    electronics: 'View Electronics Sales',
                                    more: 'View Other Sales'
                                }}});
                    }, 70);
                </script>
            </header><!-- End Of Header -->