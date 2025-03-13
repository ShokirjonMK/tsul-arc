
// Copyright 2012 Google Inc. All rights reserved.
(function () {

    var data = {
        "resource": {
            "version": "1",

            "macros": [{
                "function": "__e"
            }, {
                "function": "__cid"
            }],
            "tags": [{
                "function": "__rep",
                "once_per_event": true,
                "vtp_containerId": ["macro", 1],
                "tag_id": 1
            }],
            "predicates": [{
                "function": "_eq",
                "arg0": ["macro", 0],
                "arg1": "gtm.js"
            }],
            "rules": [
                [["if", 0], ["add", 0]]]
        },
        "runtime": []




    };

    /*
    
     Copyright The Closure Library Authors.
     SPDX-License-Identifier: Apache-2.0
    */
    var aa, ba = function (a) { var b = 0; return function () { return b < a.length ? { done: !1, value: a[b++] } : { done: !0 } } }, ca = function (a) { var b = "undefined" != typeof Symbol && Symbol.iterator && a[Symbol.iterator]; return b ? b.call(a) : { next: ba(a) } }, da = "function" == typeof Object.create ? Object.create : function (a) { var b = function () { }; b.prototype = a; return new b }, ea;
    if ("function" == typeof Object.setPrototypeOf) ea = Object.setPrototypeOf; else { var ia; a: { var ja = { a: !0 }, ma = {}; try { ma.__proto__ = ja; ia = ma.a; break a } catch (a) { } ia = !1 } ea = ia ? function (a, b) { a.__proto__ = b; if (a.__proto__ !== b) throw new TypeError(a + " is not extensible"); return a } : null }
    var oa = ea, pa = function (a, b) { a.prototype = da(b.prototype); a.prototype.constructor = a; if (oa) oa(a, b); else for (var c in b) if ("prototype" != c) if (Object.defineProperties) { var d = Object.getOwnPropertyDescriptor(b, c); d && Object.defineProperty(a, c, d) } else a[c] = b[c]; a.Wh = b.prototype }, qa = this || self, ta = function (a) { if (a && a != qa) return ra(a.document); null === sa && (sa = ra(qa.document)); return sa }, ua = /^[\w+/_-]+[=]{0,2}$/, sa = null, ra = function (a) {
        var b = a.querySelector && a.querySelector("script[nonce]"); if (b) {
            var c = b.nonce || b.getAttribute("nonce");
            if (c && ua.test(c)) return c
        } return ""
    }, va = function (a) { return a }; var wa = {}, ya = function (a, b) { wa[a] = wa[a] || []; wa[a][b] = !0 }, za = function (a) { for (var b = [], c = wa[a] || [], d = 0; d < c.length; d++)c[d] && (b[Math.floor(d / 6)] ^= 1 << d % 6); for (var e = 0; e < b.length; e++)b[e] = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_".charAt(b[e] || 0); return b.join("") }; var Ba = function () { }, Ca = function (a) { return "function" == typeof a }, g = function (a) { return "string" == typeof a }, Ea = function (a) { return "number" == typeof a && !isNaN(a) }, Fa = function (a) { var b = "[object Array]" == Object.prototype.toString.call(Object(a)); Array.isArray ? Array.isArray(a) !== b && ya("TAGGING", 4) : ya("TAGGING", 5); return b }, Ga = function (a, b) { if (Array.prototype.indexOf) { var c = a.indexOf(b); return "number" == typeof c ? c : -1 } for (var d = 0; d < a.length; d++)if (a[d] === b) return d; return -1 }, Ha = function (a, b) {
        if (a && Fa(a)) for (var c =
            0; c < a.length; c++)if (a[c] && b(a[c])) return a[c]
    }, Ia = function (a, b) { if (!Ea(a) || !Ea(b) || a > b) a = 0, b = 2147483647; return Math.floor(Math.random() * (b - a + 1) + a) }, La = function (a, b) { for (var c = new Ka, d = 0; d < a.length; d++)c.set(a[d], !0); for (var e = 0; e < b.length; e++)if (c.get(b[e])) return !0; return !1 }, Ma = function (a, b) { for (var c in a) Object.prototype.hasOwnProperty.call(a, c) && b(c, a[c]) }, Na = function (a) { return !!a && ("[object Arguments]" == Object.prototype.toString.call(a) || Object.prototype.hasOwnProperty.call(a, "callee")) }, Oa =
            function (a) { return Math.round(Number(a)) || 0 }, Qa = function (a) { return "false" == String(a).toLowerCase() ? !1 : !!a }, Ua = function (a) { var b = []; if (Fa(a)) for (var c = 0; c < a.length; c++)b.push(String(a[c])); return b }, Va = function (a) { return a ? a.replace(/^\s+|\s+$/g, "") : "" }, Wa = function () { return (new Date).getTime() }, Ka = function () { this.prefix = "gtm."; this.values = {} }; Ka.prototype.set = function (a, b) { this.values[this.prefix + a] = b }; Ka.prototype.get = function (a) { return this.values[this.prefix + a] };
    var Za = function (a, b, c) { return a && a.hasOwnProperty(b) ? a[b] : c }, $a = function (a) { var b = a; return function () { if (b) { var c = b; b = void 0; try { c() } catch (d) { } } } }, cb = function (a, b) { for (var c in b) b.hasOwnProperty(c) && (a[c] = b[c]) }, db = function (a) { for (var b in a) if (a.hasOwnProperty(b)) return !0; return !1 }, fb = function (a, b) { for (var c = [], d = 0; d < a.length; d++)c.push(a[d]), c.push.apply(c, b[a[d]] || []); return c }, hb = function (a, b) { for (var c = {}, d = c, e = a.split("."), f = 0; f < e.length - 1; f++)d = d[e[f]] = {}; d[e[e.length - 1]] = b; return c }, ib = /^\w{1,9}$/,
        jb = function (a) { var b = []; Ma(a, function (c, d) { ib.test(c) && d && b.push(c) }); return b.join(",") };/*
 jQuery v1.9.1 (c) 2005, 2012 jQuery Foundation, Inc. jquery.org/license. */
    var kb = /\[object (Boolean|Number|String|Function|Array|Date|RegExp)\]/, lb = function (a) { if (null == a) return String(a); var b = kb.exec(Object.prototype.toString.call(Object(a))); return b ? b[1].toLowerCase() : "object" }, nb = function (a, b) { return Object.prototype.hasOwnProperty.call(Object(a), b) }, qb = function (a) {
        if (!a || "object" != lb(a) || a.nodeType || a == a.window) return !1; try { if (a.constructor && !nb(a, "constructor") && !nb(a.constructor.prototype, "isPrototypeOf")) return !1 } catch (c) { return !1 } for (var b in a); return void 0 ===
            b || nb(a, b)
    }, m = function (a, b) { var c = b || ("array" == lb(a) ? [] : {}), d; for (d in a) if (nb(a, d)) { var e = a[d]; "array" == lb(e) ? ("array" != lb(c[d]) && (c[d] = []), c[d] = m(e, c[d])) : qb(e) ? (qb(c[d]) || (c[d] = {}), c[d] = m(e, c[d])) : c[d] = e } return c }; var rb = function (a) { if (void 0 === a || Fa(a) || qb(a)) return !0; switch (typeof a) { case "boolean": case "number": case "string": case "function": return !0 }return !1 }; var sb = function () {
        var a = function (b) { return { toString: function () { return b } } }; return {
            Bf: a("consent"), Cf: a("consent_always_fire"), Sd: a("convert_case_to"), Td: a("convert_false_to"), Ud: a("convert_null_to"), Vd: a("convert_true_to"), Wd: a("convert_undefined_to"), Gh: a("debug_mode_metadata"), Oa: a("function"), pg: a("instance_name"), rg: a("live_only"), sg: a("malware_disabled"), ug: a("metadata"), Jh: a("original_activity_id"), Kh: a("original_vendor_template_id"), wg: a("once_per_event"), Ke: a("once_per_load"), Mh: a("priority_override"),
            Oe: a("setup_tags"), Pe: a("tag_id"), Qe: a("teardown_tags")
        }
    }(); var Sb;
    var Tb = [], Ub = [], Vb = [], Wb = [], Xb = [], Yb = {}, Zb, $b, ac, bc = function (a, b) { var c = a["function"]; if (!c) throw Error("Error: No function name given for function call."); var d = Yb[c], e = {}, f; for (f in a) if (a.hasOwnProperty(f)) if (0 === f.indexOf("vtp_")) d && b && b.Ue && b.Ue(a[f]), e[void 0 !== d ? f : f.substr(4)] = a[f]; else if (f === sb.Cf.toString() && a[f]) { } return void 0 !== d ? d(e) : Sb(c, e, b) }, dc = function (a, b, c) { c = c || []; var d = {}, e; for (e in a) a.hasOwnProperty(e) && (d[e] = cc(a[e], b, c)); return d }, cc = function (a, b, c) {
        if (Fa(a)) {
            var d; switch (a[0]) {
                case "function_id": return a[1]; case "list": d = []; for (var e = 1; e < a.length; e++)d.push(cc(a[e], b, c)); return d; case "macro": var f = a[1]; if (c[f]) return; var h = Tb[f]; if (!h || b.xd(h)) return; c[f] = !0; try {
                    var k = dc(h, b, c); k.vtp_gtmEventId = b.id;
                    d = bc(k, b); ac && (d = ac.Kg(d, k))
                } catch (z) { b.hf && b.hf(z, Number(f)), d = !1 } c[f] = !1; return d; case "map": d = {}; for (var l = 1; l < a.length; l += 2)d[cc(a[l], b, c)] = cc(a[l + 1], b, c); return d; case "template": d = []; for (var n = !1, q = 1; q < a.length; q++) { var p = cc(a[q], b, c); $b && (n = n || p === $b.hc); d.push(p) } return $b && n ? $b.Ng(d) : d.join(""); case "escape": d = cc(a[1], b, c); if ($b && Fa(a[1]) && "macro" === a[1][0] && $b.fh(a)) return $b.th(d); d = String(d); for (var r = 2; r < a.length; r++)tb[a[r]] && (d = tb[a[r]](d)); return d; case "tag": var u = a[1]; if (!Wb[u]) throw Error("Unable to resolve tag reference " +
                    u + "."); return d = { $e: a[2], index: u }; case "zb": var t = { arg0: a[2], arg1: a[3], ignore_case: a[5] }; t["function"] = a[1]; var v = gc(t, b, c), x = !!a[4]; return x || 2 !== v ? x !== (1 === v) : null; default: throw Error("Attempting to expand unknown Value type: " + a[0] + ".");
            }
        } return a
    }, gc = function (a, b, c) { try { return Zb(dc(a, b, c)) } catch (d) { JSON.stringify(a) } return 2 }; var hc = null, kc = function (a) { function b(p) { for (var r = 0; r < p.length; r++)d[p[r]] = !0 } var c = [], d = []; hc = ic(a); for (var e = 0; e < Ub.length; e++) { var f = Ub[e], h = jc(f); if (h) { for (var k = f.add || [], l = 0; l < k.length; l++)c[k[l]] = !0; b(f.block || []) } else null === h && b(f.block || []) } for (var n = [], q = 0; q < Wb.length; q++)c[q] && !d[q] && (n[q] = !0); return n }, jc = function (a) {
        for (var b = a["if"] || [], c = 0; c < b.length; c++) { var d = hc(b[c]); if (0 === d) return !1; if (2 === d) return null } for (var e = a.unless || [], f = 0; f < e.length; f++) {
            var h = hc(e[f]); if (2 === h) return null;
            if (1 === h) return !1
        } return !0
    }, ic = function (a) { var b = []; return function (c) { void 0 === b[c] && (b[c] = gc(Vb[c], a)); return b[c] } }; var lc = { Kg: function (a, b) { b[sb.Sd] && "string" === typeof a && (a = 1 == b[sb.Sd] ? a.toLowerCase() : a.toUpperCase()); b.hasOwnProperty(sb.Ud) && null === a && (a = b[sb.Ud]); b.hasOwnProperty(sb.Wd) && void 0 === a && (a = b[sb.Wd]); b.hasOwnProperty(sb.Vd) && !0 === a && (a = b[sb.Vd]); b.hasOwnProperty(sb.Td) && !1 === a && (a = b[sb.Td]); return a } }; var C = {
        zb: "_ee", ld: "_syn", Nh: "_uei", dd: "_eu", Lh: "_pci", Rc: "event_callback", Yb: "event_timeout", Z: "gtag.config", qa: "gtag.get", oa: "purchase", Ya: "refund", La: "begin_checkout", Wa: "add_to_cart", Xa: "remove_from_cart", Lf: "view_cart", $d: "add_to_wishlist", Aa: "view_item", Zd: "view_promotion", Yd: "select_promotion", Mc: "select_item", Vb: "view_item_list", Xd: "add_payment_info", Kf: "add_shipping_info", Ca: "value_key", Ba: "value_callback", fa: "allow_ad_personalization_signals", Zc: "restricted_data_processing", pb: "allow_google_signals",
        ia: "cookie_expires", sb: "cookie_update", wb: "session_duration", bc: "session_engaged_time", sa: "user_properties", Ea: "transport_url", N: "ads_data_redaction", cd: "user_data", Zb: "first_party_collection", B: "ad_storage", J: "analytics_storage", Qd: "region", Rd: "wait_for_update"
    };
    C.Nc = "page_view"; C.ae = "user_engagement"; C.Ff = "app_remove"; C.Gf = "app_store_refund"; C.Hf = "app_store_subscription_cancel"; C.If = "app_store_subscription_convert"; C.Jf = "app_store_subscription_renew"; C.Mf = "first_open"; C.Nf = "first_visit"; C.Of = "in_app_purchase"; C.Pf = "session_start"; C.Qf = "allow_custom_scripts"; C.Rf = "allow_display_features"; C.Oc = "allow_enhanced_conversions"; C.se = "enhanced_conversions"; C.Za = "client_id"; C.W = "cookie_domain"; C.Xb = "cookie_name"; C.Ma = "cookie_path"; C.ra = "cookie_flags"; C.ja = "currency";
    C.ke = "custom_map"; C.Vc = "groups"; C.$a = "language"; C.ie = "country"; C.Hh = "non_interaction"; C.ub = "page_location"; C.Da = "page_referrer"; C.Yc = "page_title"; C.vb = "send_page_view"; C.Na = "send_to"; C.$c = "session_engaged"; C.cc = "session_id"; C.ad = "session_number"; C.kg = "tracking_id"; C.ka = "linker"; C.Fa = "url_passthrough"; C.ab = "accept_incoming"; C.I = "domains"; C.eb = "url_position"; C.cb = "decorate_forms"; C.xe = "phone_conversion_number"; C.ve = "phone_conversion_callback"; C.we = "phone_conversion_css_class"; C.ye = "phone_conversion_options";
    C.fg = "phone_conversion_ids"; C.eg = "phone_conversion_country_code"; C.be = "aw_remarketing"; C.ce = "aw_remarketing_only"; C.Wb = "gclid"; C.Ga = "value"; C.gg = "quantity"; C.Wf = "affiliation"; C.qe = "tax"; C.pe = "shipping"; C.Qc = "list_name"; C.oe = "checkout_step"; C.ne = "checkout_option"; C.Xf = "coupon"; C.Yf = "promotions"; C.xb = "transaction_id"; C.yb = "user_id"; C.hg = "retoken"; C.rb = "conversion_linker"; C.qb = "conversion_cookie_prefix"; C.aa = "cookie_prefix"; C.V = "items"; C.he = "aw_merchant_id"; C.ee = "aw_feed_country"; C.fe = "aw_feed_language";
    C.de = "discount"; C.me = "disable_merchant_reported_purchases"; C.ue = "new_customer"; C.je = "customer_lifetime_value"; C.Vf = "dc_natural_search"; C.Uf = "dc_custom_params"; C.lg = "trip_type"; C.dg = "passengers"; C.bg = "method"; C.jg = "search_term"; C.Sf = "content_type"; C.cg = "optimize_id"; C.Zf = "experiments"; C.tb = "google_signals"; C.Uc = "google_tld"; C.fc = "update"; C.Tc = "firebase_id"; C.$b = "ga_restrict_domain"; C.Sc = "event_settings"; C.Pc = "dynamic_event_settings"; C.ig = "screen_name"; C.ag = "_x_19"; C.$f = "_x_20"; C.Xc = "internal_traffic_results";
    C.ze = "traffic_type"; C.ac = "referral_exclusion_definition"; C.Wc = "ignore_referrer"; C.bd = "delivery_postal_code"; C.te = "estimated_delivery_date"; C.Tf = "developer_id"; C.mg = [C.fa, C.Oc, C.pb, C.V, C.Zc, C.W, C.ia, C.ra, C.Xb, C.Ma, C.aa, C.sb, C.ke, C.Pc, C.Rc, C.Sc, C.Yb, C.Zb, C.$b, C.tb, C.Uc, C.Vc, C.Xc, C.ka, C.ac, C.Na, C.vb, C.wb, C.bc, C.Ea, C.fc, C.sa, C.bd, C.dd]; C.Ae = [C.ub, C.Da, C.Yc, C.$a, C.ig, C.yb, C.Tc]; C.og = [C.Ff, C.Gf, C.Hf, C.If, C.Jf, C.Mf, C.Nf, C.Of, C.Pf, C.ae]; var Ic = {}; C.zf = (Ic[C.fa] = !0, Ic[C.Oc] = !0, Ic[C.be] = !0, Ic[C.ce] = !0, Ic[C.de] =
        !0, Ic[C.ee] = !0, Ic[C.fe] = !0, Ic[C.V] = !0, Ic[C.he] = !0, Ic[C.qb] = !0, Ic[C.rb] = !0, Ic[C.W] = !0, Ic[C.ia] = !0, Ic[C.ra] = !0, Ic[C.aa] = !0, Ic[C.ja] = !0, Ic[C.je] = !0, Ic[C.me] = !0, Ic[C.se] = !0, Ic[C.te] = !0, Ic[C.Tc] = !0, Ic[C.Zb] = !0, Ic[C.$a] = !0, Ic[C.ue] = !0, Ic[C.ub] = !0, Ic[C.Da] = !0, Ic[C.ve] = !0, Ic[C.we] = !0, Ic[C.xe] = !0, Ic[C.ye] = !0, Ic[C.Zc] = !0, Ic[C.vb] = !0, Ic[C.Na] = !0, Ic[C.bd] = !0, Ic[C.xb] = !0, Ic[C.Ea] = !0, Ic[C.fc] = !0, Ic[C.Fa] = !0, Ic[C.cd] = !0, Ic[C.yb] = !0, Ic[C.Ga] = !0, Ic);
    C.Ce = [C.oa, C.Ya, C.La, C.Wa, C.Xa, C.Lf, C.$d, C.Aa, C.Zd, C.Yd, C.Vb, C.Mc, C.Xd, C.Kf]; C.Be = [C.fa, C.pb, C.sb]; C.De = [C.ia, C.Yb, C.wb, C.bc]; var D = function (a) { ya("GTM", a) }; var Jc = function (a, b) { var c = function () { }; c.prototype = a.prototype; var d = new c; a.apply(d, Array.prototype.slice.call(arguments, 1)); return d }, Kc = function (a) { var b = a; return function () { if (b) { var c = b; b = null; c() } } }; var Lc, Mc = function () { if (void 0 === Lc) { var a = null, b = qa.trustedTypes; if (b && b.createPolicy) { try { a = b.createPolicy("goog#html", { createHTML: va, createScript: va, createScriptURL: va }) } catch (c) { qa.console && qa.console.error(c.message) } Lc = a } else Lc = a } return Lc }; var Oc = function (a, b) { this.m = b === Nc ? a : "" }; Oc.prototype.toString = function () { return this.m + "" }; var Nc = {}; var Sc = /^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i; var Tc; a: { var Uc = qa.navigator; if (Uc) { var Vc = Uc.userAgent; if (Vc) { Tc = Vc; break a } } Tc = "" } var Wc = function (a) { return -1 != Tc.indexOf(a) }; var Yc = function (a, b, c) { this.m = c === Xc ? a : "" }; Yc.prototype.toString = function () { return this.m.toString() }; var Zc = function (a) { return a instanceof Yc && a.constructor === Yc ? a.m : "type_error:SafeHtml" }, Xc = {}, $c = function (a) { var b = Mc(), c = b ? b.createHTML(a) : a; return new Yc(c, null, Xc) }, ad = new Yc(qa.trustedTypes && qa.trustedTypes.emptyHTML || "", 0, Xc); var bd = function (a) { var b = !1, c; return function () { b || (c = a(), b = !0); return c } }(function () { var a = document.createElement("div"), b = document.createElement("div"); b.appendChild(document.createElement("div")); a.appendChild(b); var c = a.firstChild.firstChild; a.innerHTML = Zc(ad); return !c.parentElement }), cd = function (a, b) { if (bd()) for (; a.lastChild;)a.removeChild(a.lastChild); a.innerHTML = Zc(b) }; var G = window, I = document, dd = navigator, ed = I.currentScript && I.currentScript.src, fd = function (a, b) { var c = G[a]; G[a] = void 0 === c ? b : c; return G[a] }, gd = function (a, b) { b && (a.addEventListener ? a.onload = b : a.onreadystatechange = function () { a.readyState in { loaded: 1, complete: 1 } && (a.onreadystatechange = null, b()) }) }, hd = function (a, b, c) {
        var d = I.createElement("script"); d.type = "text/javascript"; d.async = !0; var e, f = Mc(), h = f ? f.createScriptURL(a) : a; e = new Oc(h, Nc); d.src = e instanceof Oc && e.constructor === Oc ? e.m : "type_error:TrustedResourceUrl";
        var k = ta(d.ownerDocument && d.ownerDocument.defaultView); k && d.setAttribute("nonce", k); gd(d, b); c && (d.onerror = c); var l = ta(); l && d.setAttribute("nonce", l); var n = I.getElementsByTagName("script")[0] || I.body || I.head; n.parentNode.insertBefore(d, n); return d
    }, id = function () { if (ed) { var a = ed.toLowerCase(); if (0 === a.indexOf("https://")) return 2; if (0 === a.indexOf("http://")) return 3 } return 1 }, jd = function (a, b) {
        var c = I.createElement("iframe"); c.height = "0"; c.width = "0"; c.style.display = "none"; c.style.visibility = "hidden";
        var d = I.body && I.body.lastChild || I.body || I.head; d.parentNode.insertBefore(c, d); gd(c, b); void 0 !== a && (c.src = a); return c
    }, kd = function (a, b, c) { var d = new Image(1, 1); d.onload = function () { d.onload = null; b && b() }; d.onerror = function () { d.onerror = null; c && c() }; d.src = a; return d }, ld = function (a, b, c, d) { a.addEventListener ? a.addEventListener(b, c, !!d) : a.attachEvent && a.attachEvent("on" + b, c) }, md = function (a, b, c) { a.removeEventListener ? a.removeEventListener(b, c, !1) : a.detachEvent && a.detachEvent("on" + b, c) }, J = function (a) {
        G.setTimeout(a,
            0)
    }, nd = function (a, b) { return a && b && a.attributes && a.attributes[b] ? a.attributes[b].value : null }, od = function (a) { var b = a.innerText || a.textContent || ""; b && " " != b && (b = b.replace(/^[\s\xa0]+|[\s\xa0]+$/g, "")); b && (b = b.replace(/(\xa0+|\s{2,}|\n|\r\t)/g, " ")); return b }, pd = function (a) { var b = I.createElement("div"), c = $c("A<div>" + a + "</div>"); cd(b, c); b = b.lastChild; for (var d = []; b.firstChild;)d.push(b.removeChild(b.firstChild)); return d }, qd = function (a, b, c) {
        c = c || 100; for (var d = {}, e = 0; e < b.length; e++)d[b[e]] = !0; for (var f =
            a, h = 0; f && h <= c; h++) { if (d[String(f.tagName).toLowerCase()]) return f; f = f.parentElement } return null
    }, rd = function (a) { dd.sendBeacon && dd.sendBeacon(a) || kd(a) }, sd = function (a, b) { var c = a[b]; c && "string" === typeof c.animVal && (c = c.animVal); return c }; var td = function () { var a = {}; this.m = function (b, c) { return null != a[b] ? a[b] : c }; this.o = function () { a[1933] = !0 } }; td.m = void 0; td.o = function () { return td.m ? td.m : td.m = new td }; var ud = function (a) { var b; b = void 0 === b ? !1 : b; return td.o().m(a, b) }; var vd = []; function wd() { var a = fd("google_tag_data", {}); a.ics || (a.ics = { entries: {}, set: xd, update: yd, addListener: zd, notifyListeners: Ad, active: !1, usedDefault: !1 }); return a.ics }
    function xd(a, b, c, d, e, f) { var h = wd(); h.active = !0; h.usedDefault = !0; if (void 0 != b) { var k = h.entries, l = k[a] || {}, n = l.region, q = c && g(c) ? c.toUpperCase() : void 0; d = d.toUpperCase(); e = e.toUpperCase(); if ("" === d || q === e || (q === d ? n !== e : !q && !n)) { var p = !!(f && 0 < f && void 0 === l.update), r = { region: q, initial: "granted" === b, update: l.update, quiet: p }; if ("" !== d || !1 !== l.initial) k[a] = r; p && G.setTimeout(function () { k[a] === r && r.quiet && (r.quiet = !1, Bd(a), Ad(), ya("TAGGING", 2)) }, f) } } }
    function yd(a, b) { var c = wd(); c.active = !0; if (void 0 != b) { var d = Cd(a), e = c.entries, f = e[a] = e[a] || {}; f.update = "granted" === b; var h = Cd(a); f.quiet ? (f.quiet = !1, Bd(a)) : h !== d && Bd(a) } } function zd(a, b) { vd.push({ We: a, Vg: b }) } function Bd(a) { for (var b = 0; b < vd.length; ++b) { var c = vd[b]; Fa(c.We) && -1 !== c.We.indexOf(a) && (c.lf = !0) } } function Ad(a) { for (var b = 0; b < vd.length; ++b) { var c = vd[b]; if (c.lf) { c.lf = !1; try { c.Vg({ Ve: a }) } catch (d) { } } } }
    var Cd = function (a) { var b = wd().entries[a] || {}; return void 0 !== b.update ? b.update : void 0 !== b.initial ? b.initial : void 0 }, Dd = function (a) { return (wd().entries[a] || {}).initial }, Ed = function (a) { return !(wd().entries[a] || {}).quiet }, Fd = function () { return ud(1933) ? wd().active : !1 }, Gd = function () { return wd().usedDefault }, Hd = function (a, b) { wd().addListener(a, b) }, Id = function (a, b) { function c() { for (var e = 0; e < b.length; e++)if (!Ed(b[e])) return !0; return !1 } if (c()) { var d = !1; Hd(b, function (e) { d || c() || (d = !0, a(e)) }) } else a({}) }, Jd =
        function (a, b) { if (!1 === Cd(b)) { var c = !1; Hd([b], function (d) { !c && Cd(b) && (a(d), c = !0) }) } }; function Kd(a) { for (var b = [], c = 0; c < Ld.length; c++) { var d = a(Ld[c]); b[c] = !0 === d ? "1" : !1 === d ? "0" : "-" } return b.join("") }
    var Ld = [C.B, C.J], Md = function (a) { var b = a[C.Qd]; b && D(40); var c = a[C.Rd]; c && D(41); for (var d = Fa(b) ? b : [b], e = 0; e < d.length; ++e)for (var f in a) if (a.hasOwnProperty(f) && f !== C.Qd && f !== C.Rd) if (-1 < Ga(Ld, f)) { var h = f, k = a[f], l = d[e]; wd().set(h, k, l, "UZ", "", c) } else { } }, Nd = function (a, b) {
        for (var c in a) if (a.hasOwnProperty(c)) if (-1 <
            Ga(Ld, c)) { var d = c, e = a[c]; wd().update(d, e) } else { } wd().notifyListeners(b)
    }, Od = function (a) { var b = Cd(a); return void 0 != b ? b : !0 }, Pd = function () { return "G1" + Kd(Cd) }, Qd = function (a, b) { Id(a, b) }; var Sd = function (a) { return Rd ? I.querySelectorAll(a) : null }, Td = function (a, b) {
        if (!Rd) return null; if (Element.prototype.closest) try { return a.closest(b) } catch (e) { return null } var c = Element.prototype.matches || Element.prototype.webkitMatchesSelector || Element.prototype.mozMatchesSelector || Element.prototype.msMatchesSelector || Element.prototype.oMatchesSelector, d = a; if (!I.documentElement.contains(d)) return null; do { try { if (c.call(d, b)) return d } catch (e) { break } d = d.parentElement || d.parentNode } while (null !== d && 1 === d.nodeType);
        return null
    }, Ud = !1; if (I.querySelectorAll) try { var Vd = I.querySelectorAll(":root"); Vd && 1 == Vd.length && Vd[0] == I.documentElement && (Ud = !0) } catch (a) { } var Rd = Ud; var Wd = function (a) {
        if (I.hidden) return !0; var b = a.getBoundingClientRect(); if (b.top == b.bottom || b.left == b.right || !G.getComputedStyle) return !0; var c = G.getComputedStyle(a, null); if ("hidden" === c.visibility) return !0; for (var d = a, e = c; d;) {
            if ("none" === e.display) return !0; var f = e.opacity, h = e.filter; if (h) { var k = h.indexOf("opacity("); 0 <= k && (h = h.substring(k + 8, h.indexOf(")", k)), "%" == h.charAt(h.length - 1) && (h = h.substring(0, h.length - 1)), f = Math.min(h, f)) } if (void 0 !== f && 0 >= f) return !0; (d = d.parentElement) && (e = G.getComputedStyle(d,
                null))
        } return !1
    }; var ee = /:[0-9]+$/, fe = function (a, b, c) { for (var d = a.split("&"), e = 0; e < d.length; e++) { var f = d[e].split("="); if (decodeURIComponent(f[0]).replace(/\+/g, " ") === b) { var h = f.slice(1).join("="); return c ? h : decodeURIComponent(h).replace(/\+/g, " ") } } }, je = function (a, b, c, d, e) {
        b && (b = String(b).toLowerCase()); if ("protocol" === b || "port" === b) a.protocol = he(a.protocol) || he(G.location.protocol); "port" === b ? a.port = String(Number(a.hostname ? a.port : G.location.port) || ("http" == a.protocol ? 80 : "https" == a.protocol ? 443 : "")) : "host" === b &&
            (a.hostname = (a.hostname || G.location.hostname).replace(ee, "").toLowerCase()); return ie(a, b, c, d, e)
    }, ie = function (a, b, c, d, e) {
        var f, h = he(a.protocol); b && (b = String(b).toLowerCase()); switch (b) {
            case "url_no_fragment": f = ke(a); break; case "protocol": f = h; break; case "host": f = a.hostname.replace(ee, "").toLowerCase(); if (c) { var k = /^www\d*\./.exec(f); k && k[0] && (f = f.substr(k[0].length)) } break; case "port": f = String(Number(a.port) || ("http" == h ? 80 : "https" == h ? 443 : "")); break; case "path": a.pathname || a.hostname || ya("TAGGING",
                1); f = "/" == a.pathname.substr(0, 1) ? a.pathname : "/" + a.pathname; var l = f.split("/"); 0 <= Ga(d || [], l[l.length - 1]) && (l[l.length - 1] = ""); f = l.join("/"); break; case "query": f = a.search.replace("?", ""); e && (f = fe(f, e, void 0)); break; case "extension": var n = a.pathname.split("."); f = 1 < n.length ? n[n.length - 1] : ""; f = f.split("/")[0]; break; case "fragment": f = a.hash.replace("#", ""); break; default: f = a && a.href
        }return f
    }, he = function (a) { return a ? a.replace(":", "").toLowerCase() : "" }, ke = function (a) {
        var b = ""; if (a && a.href) {
            var c = a.href.indexOf("#");
            b = 0 > c ? a.href : a.href.substr(0, c)
        } return b
    }, le = function (a) { var b = I.createElement("a"); a && (b.href = a); var c = b.pathname; "/" !== c[0] && (a || ya("TAGGING", 1), c = "/" + c); var d = b.hostname.replace(ee, ""); return { href: b.href, protocol: b.protocol, host: b.host, hostname: d, pathname: c, search: b.search, hash: b.hash, port: b.port } }, me = function (a) {
        function b(n) { var q = n.split("=")[0]; return 0 > d.indexOf(q) ? n : q + "=0" } function c(n) { return n.split("&").map(b).filter(function (q) { return void 0 != q }).join("&") } var d = "gclid dclid gbraid wbraid gclaw gcldc gclha gclgf gclgb _gl".split(" "),
            e = le(a), f = a.split(/[?#]/)[0], h = e.search, k = e.hash; "?" === h[0] && (h = h.substring(1)); "#" === k[0] && (k = k.substring(1)); h = c(h); k = c(k); "" !== h && (h = "?" + h); "" !== k && (k = "#" + k); var l = "" + f + h + k; "/" === l[l.length - 1] && (l = l.substring(0, l.length - 1)); return l
    }; var ne = new RegExp(/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}/i), oe = new RegExp(/support|noreply/i), pe = ["SCRIPT", "IMG", "SVG", "PATH", "BR"], qe = ["BR"]; function re(a) { var b; if (a === I.body) b = "body"; else { var c; if (a.id) c = "#" + a.id; else { var d; if (a.parentElement) { var e; a: { var f = a.parentElement; if (f) { for (var h = 0; h < f.childElementCount; h++)if (f.children[h] === a) { e = h + 1; break a } e = -1 } else e = 1 } d = re(a.parentElement) + ">:nth-child(" + e + ")" } else d = ""; c = d } b = c } return b }
    function se(a, b) { if (1 >= a.length) return a; var c = a.filter(b); return 0 == c.length ? a : c } function te(a) { if (0 == a.length) return null; var b; b = se(a, function (c) { return !oe.test(c.Kc) }); b = se(b, function (c) { return "INPUT" === c.element.tagName.toUpperCase() }); b = se(b, function (c) { return !Wd(c.element) }); return b[0] }
    function ue() {
        var a; var b = [], c = I.body; if (c) { for (var d = c.querySelectorAll("*"), e = 0; e < d.length && 1E4 > e; e++) { var f = d[e]; if (!(0 <= pe.indexOf(f.tagName.toUpperCase()))) { for (var h = !1, k = 0; k < f.childElementCount && 1E4 > k; k++)if (!(0 <= qe.indexOf(f.children[k].tagName.toUpperCase()))) { h = !0; break } h || b.push(f) } } a = { elements: b, status: 1E4 < d.length ? "2" : "1" } } else a = { elements: b, status: "4" }; for (var l = a, n = l.elements, q = [], p = 0; p < n.length; p++) {
            var r = n[p], u = r.textContent; r.value && (u = r.value); if (u) {
                var t = u.match(ne); if (t) {
                    var v =
                        t[0], x; if (G.location) { var z = ie(G.location, "host", !0); x = 0 <= v.toLowerCase().indexOf(z) } else x = !1; x || q.push({ element: r, Kc: v })
                }
            }
        } var w = te(q), y = []; if (w) { var A = w.element; y.push({ Kc: w.Kc, querySelector: re(A), tagName: A.tagName, isVisible: !Wd(A), type: 1, ff: !0 }) } return { elements: y, status: 10 < q.length ? "3" : l.status }
    } var Ie = {}, L = null, Je = Math.random(); Ie.D = "UA-119386393-1"; Ie.mc = "3v0"; Ie.Ih = ""; Ie.Ef = "ChAI8JnFgwYQqvag2Zyso8wjEicAN60YBJ1z96TgA9emHvXwWfUf6ydVwTebGCYVczPCP2bgYWBZr3oaAlNf"; var Ke = { __cl: !0, __ecl: !0, __ehl: !0, __evl: !0, __fal: !0, __fil: !0, __fsl: !0, __hl: !0, __jel: !0, __lcl: !0, __sdl: !0, __tl: !0, __ytl: !0 }, Le = { __paused: !0, __tg: !0 }, Me; for (Me in Ke) Ke.hasOwnProperty(Me) && (Le[Me] = !0); var Ne = "www.googletagmanager.com/gtm.js"; Ne = "www.googletagmanager.com/gtag/js";
    var Oe = Ne, Pe = Qa(""), Qe = null, Re = null, Se = "//www.googletagmanager.com/a?id=" + Ie.D + "&cv=1", Te = {}, Ue = {}, Ve = function () { var a = L.sequence || 1; L.sequence = a + 1; return a }; Ie.Df = ""; var We = {}, Xe = new Ka, Ye = {}, Ze = {}, bf = { name: "dataLayer", set: function (a, b) { m(hb(a, b), Ye); $e() }, get: function (a) { return af(a, 2) }, reset: function () { Xe = new Ka; Ye = {}; $e() } }, af = function (a, b) { return 2 != b ? Xe.get(a) : cf(a) }, cf = function (a) { var b, c = a.split("."); b = b || []; for (var d = Ye, e = 0; e < c.length; e++) { if (null === d) return !1; if (void 0 === d) break; d = d[c[e]]; if (-1 !== Ga(b, d)) return } return d }, df = function (a, b) { Ze.hasOwnProperty(a) || (Xe.set(a, b), m(hb(a, b), Ye), $e()) }, $e = function (a) {
        Ma(Ze, function (b, c) {
            Xe.set(b, c); m(hb(b,
                void 0), Ye); m(hb(b, c), Ye); a && delete Ze[b]
        })
    }, ff = function (a, b, c) { We[a] = We[a] || {}; We[a][b] = ef(b, c) }, ef = function (a, b) { var c, d = 1 !== (void 0 === b ? 2 : b) ? cf(a) : Xe.get(a); "array" === lb(d) || "object" === lb(d) ? c = m(d) : c = d; return c }, gf = function (a, b) { if (We[a]) return We[a][b] }, hf = function (a, b) { We[a] && delete We[a][b] }; var lf = {}, mf = function (a, b) { if (G._gtmexpgrp && G._gtmexpgrp.hasOwnProperty(a)) return G._gtmexpgrp[a]; void 0 === lf[a] && (lf[a] = Math.floor(Math.random() * b)); return lf[a] }; var nf = function (a) { var b = 1, c, d, e; if (a) for (b = 0, d = a.length - 1; 0 <= d; d--)e = a.charCodeAt(d), b = (b << 6 & 268435455) + e + (e << 14), c = b & 266338304, b = 0 != c ? b ^ c >> 21 : b; return b }; function of(a, b, c) { for (var d = [], e = b.split(";"), f = 0; f < e.length; f++) { var h = e[f].split("="), k = h[0].replace(/^\s*|\s*$/g, ""); if (k && k == a) { var l = h.slice(1).join("=").replace(/^\s*|\s*$/g, ""); l && c && (l = decodeURIComponent(l)); d.push(l) } } return d }; var pf = function (a) { pf[" "](a); return a }; pf[" "] = function () { }; function qf(a) { if (!ud(1937)) return !0; try { return pf(a.cookie), !0 } catch (b) { return !1 } }; var tf = function (a, b, c, d) { return rf(d) ? of(a, String(b || sf()), c) : [] }, wf = function (a, b, c, d, e) { if (rf(e)) { var f = uf(a, d, e); if (1 === f.length) return f[0].id; if (0 !== f.length) { f = vf(f, function (h) { return h.vc }, b); if (1 === f.length) return f[0].id; f = vf(f, function (h) { return h.Mb }, c); return f[0] ? f[0].id : void 0 } } }; function xf(a, b, c, d) { var e = sf(), f = document; qf(f) && (f.cookie = a); var h = sf(); return e != h || void 0 != c && 0 <= tf(b, h, !1, d).indexOf(c) }
    var Ef = function (a, b, c) {
        function d(u, t, v) { if (null == v) return delete h[t], u; h[t] = v; return u + "; " + t + "=" + v } function e(u, t) { if (null == t) return delete h[t], u; h[t] = !0; return u + "; " + t } if (!rf(c.ya)) return 2; var f; void 0 == b ? f = a + "=deleted; expires=" + (new Date(0)).toUTCString() : (c.encode && (b = encodeURIComponent(b)), b = Bf(b), f = a + "=" + b); var h = {}; f = d(f, "path", c.path); var k; c.expires instanceof Date ? k = c.expires.toUTCString() : null != c.expires && (k = "" + c.expires); f = d(f, "expires", k); f = d(f, "max-age", c.Th); f = d(f, "samesite",
            c.Uh); c.Vh && (f = e(f, "secure")); var l = c.domain; if ("auto" === l) { for (var n = Cf(), q = 0; q < n.length; ++q) { var p = "none" !== n[q] ? n[q] : void 0, r = d(f, "domain", p); r = e(r, c.flags); if (!Df(p, c.path) && xf(r, a, b, c.ya)) return 0 } return 1 } l && "none" !== l && (f = d(f, "domain", l)); f = e(f, c.flags); return Df(l, c.path) ? 1 : xf(f, a, b, c.ya) ? 0 : 1
    }, Ff = function (a, b, c) { null == c.path && (c.path = "/"); c.domain || (c.domain = "auto"); return Ef(a, b, c) };
    function vf(a, b, c) { for (var d = [], e = [], f, h = 0; h < a.length; h++) { var k = a[h], l = b(k); l === c ? d.push(k) : void 0 === f || l < f ? (e = [k], f = l) : l === f && e.push(k) } return 0 < d.length ? d : e } function uf(a, b, c) { for (var d = [], e = tf(a, void 0, void 0, c), f = 0; f < e.length; f++) { var h = e[f].split("."), k = h.shift(); if (!b || -1 !== b.indexOf(k)) { var l = h.shift(); l && (l = l.split("-"), d.push({ id: h.join("."), vc: 1 * l[0] || 1, Mb: 1 * l[1] || 1 })) } } return d }
    var Bf = function (a) { a && 1200 < a.length && (a = a.substring(0, 1200)); return a }, Gf = /^(www\.)?google(\.com?)?(\.[a-z]{2})?$/, Hf = /(^|\.)doubleclick\.net$/i, Df = function (a, b) { return Hf.test(document.location.hostname) || "/" === b && Gf.test(a) }, sf = function () { return qf(document) ? document.cookie : "" }, Cf = function () {
        var a = [], b = document.location.hostname.split("."); if (4 === b.length) { var c = b[b.length - 1]; if (parseInt(c, 10).toString() === c) return ["none"] } for (var d = b.length - 2; 0 <= d; d--)a.push(b.slice(d).join(".")); var e = document.location.hostname;
        Hf.test(e) || Gf.test(e) || a.push("none"); return a
    }, rf = function (a) { if (!ud(1933) || !a || !Fd()) return !0; if (!Ed(a)) return !1; var b = Cd(a); return null == b ? !0 : !!b }; var If = function () { for (var a = Math.round(2147483647 * Math.random()), b = qf(I) ? I.cookie : null, c = dd.userAgent + (b || "") + (I.referrer || ""), d = c.length, e = G.history.length; 0 < e;)c += e-- ^ d++; return [a ^ nf(c) & 2147483647, Math.round(Wa() / 1E3)].join(".") }, Lf = function (a, b, c, d, e) { var f = Jf(b); return wf(a, f, Kf(c), d, e) }, Mf = function (a, b, c, d) { var e = "" + Jf(c), f = Kf(d); 1 < f && (e += "-" + f); return [b, e, a].join(".") }, Jf = function (a) { if (!a) return 1; a = 0 === a.indexOf(".") ? a.substr(1) : a; return a.split(".").length }, Kf = function (a) {
        if (!a || "/" === a) return 1;
        "/" !== a[0] && (a = "/" + a); "/" !== a[a.length - 1] && (a += "/"); return a.split("/").length - 1
    }; function Nf(a, b, c) { var d, e = Number(null != a.ib ? a.ib : void 0); 0 !== e && (d = new Date((b || Wa()) + 1E3 * (e || 7776E3))); return { path: a.path, domain: a.domain, flags: a.flags, encode: !!c, expires: d } }; var Of = ["1"], Pf = {}, Sf = function (a) { var b = Qf(a.prefix), c = Pf[b]; c && Rf(b, c, a) }, Uf = function (a) { var b = Qf(a.prefix); if (!Pf[b] && !Tf(b, a.path, a.domain)) { var c = If(); if (0 === Rf(b, c, a)) { var d = fd("google_tag_data", {}); d._gcl_au ? ya("GTM", 57) : d._gcl_au = c } Tf(b, a.path, a.domain) } }; function Rf(a, b, c) { var d = Mf(b, "1", c.domain, c.path), e = Nf(c); e.ya = "ad_storage"; return Ff(a, d, e) } function Tf(a, b, c) { var d = Lf(a, b, c, Of, "ad_storage"); d && (Pf[a] = d); return d } function Qf(a) { return (a || "_gcl") + "_au" }; var Vf = function (a) { for (var b = [], c = I.cookie.split(";"), d = new RegExp("^\\s*" + (a || "_gac") + "_(UA-\\d+-\\d+)=\\s*(.+?)\\s*$"), e = 0; e < c.length; e++) { var f = c[e].match(d); f && b.push({ Md: f[1], value: f[2], timestamp: Number(f[2].split(".")[1]) || 0 }) } b.sort(function (h, k) { return k.timestamp - h.timestamp }); return b };
    function Wf(a, b) { var c = Vf(a), d = {}; if (!c || !c.length) return d; for (var e = 0; e < c.length; e++) { var f = c[e].value.split("."); if (!("1" != f[0] || b && 3 > f.length || !b && 3 !== f.length) && Number(f[1])) { d[c[e].Md] || (d[c[e].Md] = []); var h = { version: f[0], timestamp: 1E3 * Number(f[1]), la: f[2] }; b && 3 < f.length && (h.labels = f.slice(3)); d[c[e].Md].push(h) } } return d }; function Xf() { for (var a = Yf, b = {}, c = 0; c < a.length; ++c)b[a[c]] = c; return b } function Zf() { var a = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; a += a.toLowerCase() + "0123456789-_"; return a + "." } var Yf, $f;
    function ag(a) { function b(l) { for (; d < a.length;) { var n = a.charAt(d++), q = $f[n]; if (null != q) return q; if (!/^[\s\xa0]*$/.test(n)) throw Error("Unknown base64 encoding at char: " + n); } return l } Yf = Yf || Zf(); $f = $f || Xf(); for (var c = "", d = 0; ;) { var e = b(-1), f = b(0), h = b(64), k = b(64); if (64 === k && -1 === e) return c; c += String.fromCharCode(e << 2 | f >> 4); 64 != h && (c += String.fromCharCode(f << 4 & 240 | h >> 2), 64 != k && (c += String.fromCharCode(h << 6 & 192 | k))) } }; var bg; var fg = function () { var a = cg, b = dg, c = eg(), d = function (h) { a(h.target || h.srcElement || {}) }, e = function (h) { b(h.target || h.srcElement || {}) }; if (!c.init) { ld(I, "mousedown", d); ld(I, "keyup", d); ld(I, "submit", e); var f = HTMLFormElement.prototype.submit; HTMLFormElement.prototype.submit = function () { b(this); f.call(this) }; c.init = !0 } }, gg = function (a, b, c, d, e) { var f = { callback: a, domains: b, fragment: 2 === c, placement: c, forms: d, sameHost: e }; eg().decorators.push(f) }, hg = function (a, b, c) {
        for (var d = eg().decorators, e = {}, f = 0; f < d.length; ++f) {
            var h =
                d[f], k; if (k = !c || h.forms) a: { var l = h.domains, n = a, q = !!h.sameHost; if (l && (q || n !== I.location.hostname)) for (var p = 0; p < l.length; p++)if (l[p] instanceof RegExp) { if (l[p].test(n)) { k = !0; break a } } else if (0 <= n.indexOf(l[p]) || q && 0 <= l[p].indexOf(n)) { k = !0; break a } k = !1 } if (k) { var r = h.placement; void 0 == r && (r = h.fragment ? 2 : 1); r === b && cb(e, h.callback()) }
        } return e
    }, eg = function () { var a = fd("google_tag_data", {}), b = a.gl; b && b.decorators || (b = { decorators: [] }, a.gl = b); return b }; var ig = /(.*?)\*(.*?)\*(.*)/, jg = /^https?:\/\/([^\/]*?)\.?cdn\.ampproject\.org\/?(.*)/, kg = /^(?:www\.|m\.|amp\.)+/, lg = /([^?#]+)(\?[^#]*)?(#.*)?/; function mg(a) { return new RegExp("(.*?)(^|&)" + a + "=([^&]*)&?(.*)") }
    var og = function (a) {
        var b = [], c; for (c in a) if (a.hasOwnProperty(c)) { var d = a[c]; if (void 0 !== d && d === d && null !== d && "[object Object]" !== d.toString()) { b.push(c); var e = b, f = e.push, h, k = String(d); Yf = Yf || Zf(); $f = $f || Xf(); for (var l = [], n = 0; n < k.length; n += 3) { var q = n + 1 < k.length, p = n + 2 < k.length, r = k.charCodeAt(n), u = q ? k.charCodeAt(n + 1) : 0, t = p ? k.charCodeAt(n + 2) : 0, v = r >> 2, x = (r & 3) << 4 | u >> 4, z = (u & 15) << 2 | t >> 6, w = t & 63; p || (w = 64, q || (z = 64)); l.push(Yf[v], Yf[x], Yf[z], Yf[w]) } h = l.join(""); f.call(e, h) } } var y = b.join("*"); return ["1", ng(y),
            y].join("*")
    }, ng = function (a, b) { var c = [window.navigator.userAgent, (new Date).getTimezoneOffset(), window.navigator.userLanguage || window.navigator.language, Math.floor((new Date).getTime() / 60 / 1E3) - (void 0 === b ? 0 : b), a].join("*"), d; if (!(d = bg)) { for (var e = Array(256), f = 0; 256 > f; f++) { for (var h = f, k = 0; 8 > k; k++)h = h & 1 ? h >>> 1 ^ 3988292384 : h >>> 1; e[f] = h } d = e } bg = d; for (var l = 4294967295, n = 0; n < c.length; n++)l = l >>> 8 ^ bg[(l ^ c.charCodeAt(n)) & 255]; return ((l ^ -1) >>> 0).toString(36) }, qg = function () {
        return function (a) {
            var b = le(G.location.href),
                c = b.search.replace("?", ""), d = fe(c, "_gl", !0) || ""; a.query = pg(d) || {}; var e = je(b, "fragment").match(mg("_gl")); a.fragment = pg(e && e[3] || "") || {}
        }
    }, rg = function (a) { var b = qg(), c = eg(); c.data || (c.data = { query: {}, fragment: {} }, b(c.data)); var d = {}, e = c.data; e && (cb(d, e.query), a && cb(d, e.fragment)); return d }, pg = function (a) {
        var b; b = void 0 === b ? 3 : b; try {
            if (a) {
                var c; a: { for (var d = a, e = 0; 3 > e; ++e) { var f = ig.exec(d); if (f) { c = f; break a } d = decodeURIComponent(d) } c = void 0 } var h = c; if (h && "1" === h[1]) {
                    var k = h[3], l; a: {
                        for (var n = h[2], q = 0; q <
                            b; ++q)if (n === ng(k, q)) { l = !0; break a } l = !1
                    } if (l) { for (var p = {}, r = k ? k.split("*") : [], u = 0; u < r.length; u += 2)p[r[u]] = ag(r[u + 1]); return p }
                }
            }
        } catch (t) { }
    }; function sg(a, b, c, d) { function e(q) { var p = q, r = mg(a).exec(p), u = p; if (r) { var t = r[2], v = r[4]; u = r[1]; v && (u = u + t + v) } q = u; var x = q.charAt(q.length - 1); q && "&" !== x && (q += "&"); return q + n } d = void 0 === d ? !1 : d; var f = lg.exec(c); if (!f) return ""; var h = f[1], k = f[2] || "", l = f[3] || "", n = a + "=" + b; d ? l = "#" + e(l.substring(1)) : k = "?" + e(k.substring(1)); return "" + h + k + l }
    function tg(a, b) { var c = "FORM" === (a.tagName || "").toUpperCase(), d = hg(b, 1, c), e = hg(b, 2, c), f = hg(b, 3, c); if (db(d)) { var h = og(d); c ? ug("_gl", h, a) : vg("_gl", h, a, !1) } if (!c && db(e)) { var k = og(e); vg("_gl", k, a, !0) } for (var l in f) if (f.hasOwnProperty(l)) a: { var n = l, q = f[l], p = a; if (p.tagName) { if ("a" === p.tagName.toLowerCase()) { vg(n, q, p, void 0); break a } if ("form" === p.tagName.toLowerCase()) { ug(n, q, p); break a } } "string" == typeof p && sg(n, q, p, void 0) } }
    function vg(a, b, c, d) { if (c.href) { var e = sg(a, b, c.href, void 0 === d ? !1 : d); Sc.test(e) && (c.href = e) } }
    function ug(a, b, c) { if (c && c.action) { var d = (c.method || "").toLowerCase(); if ("get" === d) { for (var e = c.childNodes || [], f = !1, h = 0; h < e.length; h++) { var k = e[h]; if (k.name === a) { k.setAttribute("value", b); f = !0; break } } if (!f) { var l = I.createElement("input"); l.setAttribute("type", "hidden"); l.setAttribute("name", a); l.setAttribute("value", b); c.appendChild(l) } } else if ("post" === d) { var n = sg(a, b, c.action); Sc.test(n) && (c.action = n) } } }
    var cg = function (a) { try { var b; a: { for (var c = a, d = 100; c && 0 < d;) { if (c.href && c.nodeName.match(/^a(?:rea)?$/i)) { b = c; break a } c = c.parentNode; d-- } b = null } var e = b; if (e) { var f = e.protocol; "http:" !== f && "https:" !== f || tg(e, e.hostname) } } catch (h) { } }, dg = function (a) { try { if (a.action) { var b = je(le(a.action), "host"); tg(a, b) } } catch (c) { } }, wg = function (a, b, c, d) { fg(); gg(a, b, "fragment" === c ? 2 : 1, !!d, !1) }, xg = function (a, b) { fg(); gg(a, [ie(G.location, "host", !0)], b, !0, !0) }, yg = function () {
        var a = I.location.hostname, b = jg.exec(I.referrer); if (!b) return !1;
        var c = b[2], d = b[1], e = ""; if (c) { var f = c.split("/"), h = f[1]; e = "s" === h ? decodeURIComponent(f[2]) : decodeURIComponent(h) } else if (d) { if (0 === d.indexOf("xn--")) return !1; e = d.replace(/-/g, ".").replace(/\.\./g, "-") } var k = a.replace(kg, ""), l = e.replace(kg, ""), n; if (!(n = k === l)) { var q = "." + l; n = k.substring(k.length - q.length, k.length) === q } return n
    }, zg = function (a, b) { return !1 === a ? !1 : a || b || yg() }; var Ag = {}; var Bg = /^\w+$/, Cg = /^[\w-]+$/, Dg = /^~?[\w-]+$/, Eg = { aw: "_aw", dc: "_dc", gf: "_gf", ha: "_ha", gp: "_gp", gb: "_gb" }, Fg = function () { if (!ud(1933) || !Fd()) return !0; var a = Cd("ad_storage"); return null == a ? !0 : !!a }, Gg = function (a, b) { Ed("ad_storage") ? Fg() ? a() : Jd(a, "ad_storage") : b ? ya("TAGGING", 3) : Id(function () { Gg(a, !0) }, ["ad_storage"]) }, Ig = function (a) { return Hg(a).map(function (b) { return b.la }) }, Hg = function (a) {
        var b = []; if (!qf(I) || !I.cookie) return b; var c = tf(a, I.cookie, void 0, "ad_storage"); if (!c || 0 == c.length) return b; for (var d =
            {}, e = 0; e < c.length; d = { Sb: d.Sb }, e++) { var f = Jg(c[e]); if (null != f) { var h = f, k = h.version; d.Sb = h.la; var l = h.timestamp, n = h.labels, q = Ha(b, function (p) { return function (r) { return r.la === p.Sb } }(d)); q ? (q.timestamp = Math.max(q.timestamp, l), q.labels = Kg(q.labels, n || [])) : b.push({ version: k, la: d.Sb, timestamp: l, labels: n }) } } b.sort(function (p, r) { return r.timestamp - p.timestamp }); return Lg(b)
    };
    function Kg(a, b) { for (var c = {}, d = [], e = 0; e < a.length; e++)c[a[e]] = !0, d.push(a[e]); for (var f = 0; f < b.length; f++)c[b[f]] || d.push(b[f]); return d } function Mg(a) { return a && "string" == typeof a && a.match(Bg) ? a : "_gcl" }
    var Og = function () { var a = le(G.location.href), b = je(a, "query", !1, void 0, "gclid"), c = je(a, "query", !1, void 0, "gclsrc"), d = je(a, "query", !1, void 0, "wbraid"), e = je(a, "query", !1, void 0, "dclid"); if (!b || !c || !d) { var f = a.hash.replace("#", ""); b = b || fe(f, "gclid", void 0); c = c || fe(f, "gclsrc", void 0); d = d || fe(f, "wbraid", void 0) } return Ng(b, c, e, d) }, Ng = function (a, b, c, d) {
        var e = {}, f = function (h, k) { e[k] || (e[k] = []); e[k].push(h) }; e.gclid = a; e.gclsrc = b; e.dclid = c; void 0 !== d && Cg.test(d) && (e.gbraid = d, f(d, "gb")); if (void 0 !== a && a.match(Cg)) switch (b) {
            case void 0: f(a,
                "aw"); break; case "aw.ds": f(a, "aw"); f(a, "dc"); break; case "ds": f(a, "dc"); break; case "3p.ds": f(a, "dc"); break; case "gf": f(a, "gf"); break; case "ha": f(a, "ha")
        }c && f(c, "dc"); return e
    }, Pg = function (a, b) { switch (a) { case void 0: case "aw": return "aw" === b; case "aw.ds": return "aw" === b || "dc" === b; case "ds": case "3p.ds": return "dc" === b; case "gf": return "gf" === b; case "ha": return "ha" === b }return !1 }, Rg = function (a) { var b = Og(); Gg(function () { Qg(b, a) }) };
    function Qg(a, b, c, d) {
        function e(q, p) { var r = Sg(q, f); r && (Ff(r, p, h), k = !0) } b = b || {}; d = d || []; var f = Mg(b.prefix); c = c || Wa(); var h = Nf(b, c, !0); h.ya = "ad_storage"; var k = !1, l = Math.round(c / 1E3), n = function (q) { var p = ["GCL", l, q]; 0 < d.length && p.push(d.join(".")); return p.join(".") }; a.aw && (!0 === b.Xh ? e("aw", n("~" + a.aw[0])) : e("aw", n(a.aw[0]))); a.dc && e("dc", n(a.dc[0])); a.gf && e("gf", n(a.gf[0])); a.ha && e("ha", n(a.ha[0])); a.gp && e("gp", n(a.gp[0])); (void 0 == Ag.enable_gbraid_cookie_write ? 0 : Ag.enable_gbraid_cookie_write) && !k &&
            a.gb && e("gb", n(a.gb[0]))
    }
    var Ug = function (a, b) { var c = rg(!0); Gg(function () { for (var d = Mg(b.prefix), e = 0; e < a.length; ++e) { var f = a[e]; if (void 0 !== Eg[f]) { var h = Sg(f, d), k = c[h]; if (k) { var l = Math.min(Tg(k), Wa()), n; b: { var q = l, p = h; if (qf(I)) for (var r = tf(p, I.cookie, void 0, "ad_storage"), u = 0; u < r.length; ++u)if (Tg(r[u]) > q) { n = !0; break b } n = !1 } if (!n) { var t = Nf(b, l, !0); t.ya = "ad_storage"; Ff(h, k, t) } } } } Qg(Ng(c.gclid, c.gclsrc), b) }) }, Sg = function (a, b) { var c = Eg[a]; if (void 0 !== c) return b + c }, Tg = function (a) {
        return 0 !== Vg(a.split(".")).length ? 1E3 * (Number(a.split(".")[1]) ||
            0) : 0
    }; function Jg(a) { var b = Vg(a.split(".")); return 0 === b.length ? null : { version: b[0], la: b[2], timestamp: 1E3 * (Number(b[1]) || 0), labels: b.slice(3) } } function Vg(a) { return 3 > a.length || "GCL" !== a[0] && "1" !== a[0] || !/^\d+$/.test(a[1]) || !Dg.test(a[2]) ? [] : a }
    var Wg = function (a, b, c, d, e) { if (Fa(b) && qf(I)) { var f = Mg(e), h = function () { for (var k = {}, l = 0; l < a.length; ++l) { var n = Sg(a[l], f); if (n) { var q = tf(n, I.cookie, void 0, "ad_storage"); q.length && (k[n] = q.sort()[q.length - 1]) } } return k }; Gg(function () { wg(h, b, c, d) }) } }, Lg = function (a) { return a.filter(function (b) { return Dg.test(b.la) }) }, Xg = function (a, b) {
        if (qf(I)) {
            for (var c = Mg(b.prefix), d = {}, e = 0; e < a.length; e++)Eg[a[e]] && (d[a[e]] = Eg[a[e]]); Gg(function () {
                Ma(d, function (f, h) {
                    var k = tf(c + h, I.cookie, void 0, "ad_storage"); k.sort(function (u,
                        t) { return Tg(t) - Tg(u) }); if (k.length) { var l = k[0], n = Tg(l), q = 0 !== Vg(l.split(".")).length ? l.split(".").slice(3) : [], p = {}, r; r = 0 !== Vg(l.split(".")).length ? l.split(".")[2] : void 0; p[f] = [r]; Qg(p, b, n, q) }
                })
            })
        }
    }; function Yg(a, b) { for (var c = 0; c < b.length; ++c)if (a[b[c]]) return !0; return !1 }
    var Zg = function (a) { function b(e, f, h) { h && (e[f] = h) } if (Fd()) { var c = Og(); if (Yg(c, a)) { var d = {}; b(d, "gclid", c.gclid); b(d, "dclid", c.dclid); b(d, "gclsrc", c.gclsrc); b(d, "wbraid", c.gbraid); xg(function () { return d }, 3); xg(function () { var e = {}; return e._up = "1", e }, 1) } } }; function $g(a, b) { var c = Mg(b), d = Sg(a, c); if (!d) return 0; for (var e = Hg(d), f = 0, h = 0; h < e.length; h++)f = Math.max(f, e[h].timestamp); return f }
    function ah(a) { var b = 0, c; for (c in a) for (var d = a[c], e = 0; e < d.length; e++)b = Math.max(b, Number(d[e].timestamp)); return b }; var bh = /^\d+\.fls\.doubleclick\.net$/, ch = !1; ch = !0; function dh(a, b) { Ed(C.B) ? Od(C.B) ? a() : Jd(a, C.B) : b ? D(42) : Qd(function () { dh(a, !0) }, [C.B]) } function eh(a) { var b = le(G.location.href), c = je(b, "host", !1); if (c && c.match(bh)) { var d = je(b, "path").split(a + "="); if (1 < d.length) return d[1].split(";")[0].split("?")[0] } } function fh(a) { return Og()[a] || [] }
    function gh(a, b, c) { if ("aw" === a || "dc" === a || "gb" === a) { var d = eh("gcl" + a); if (d) return d.split(".") } var e = Mg(b); if ("_gcl" == e) { c = void 0 === c ? !0 : c; var f = !Od(C.B) && c, h = fh(a); if (0 < h.length) return f ? ["0"] : h } var k = Sg(a, e); return k ? Ig(k) : [] } function hh(a) { var b = []; Ma(a, function (c, d) { d = Lg(d); for (var e = [], f = 0; f < d.length; f++)e.push(d[f].la); e.length && b.push(c + ":" + e.join(",")) }); return b.join(";") }
    var ih = function (a) { var b = eh("gac"); return b ? !Od(C.B) && a ? "0" : decodeURIComponent(b) : hh(Fg() ? Wf() : {}) }, jh = function (a) { var b = eh("gacgb"); return b ? !Od(C.B) && a ? "0" : decodeURIComponent(b) : hh(Fg() ? Wf("_gac_gb", !0) : {}) }, lh = function (a, b) {
        if (ch) kh(a, b, "dc"); else {
            var c = fh("dc"); dh(function () {
                Uf(b); var d = Pf[Qf(b.prefix)], e = !1; if (d && 0 < c.length) { var f = L.joined_au = L.joined_au || {}, h = b.prefix || "_gcl"; if (!f[h]) for (var k = 0; k < c.length; k++) { var l = "https://adservice.google.com/ddm/regclk"; l = l + "?gclid=" + c[k] + "&auiddc=" + d; rd(l); e = f[h] = !0 } } null ==
                    a && (a = e); a && d && Sf(b)
            })
        }
    }, kh = function (a, b, c) {
        var d = Og(), e = [], f = d.gclid, h = d.dclid, k = d.gclsrc || "aw"; !f || "aw.ds" !== k && "aw" !== k && "ds" !== k || c && !Pg(k, c) || e.push({ la: f, df: k }); !h || c && "dc" !== c || e.push({ la: h, df: "ds" }); dh(function () {
            Uf(b); var l = Pf[Qf(b.prefix)], n = !1; if (l && 0 < e.length) for (var q = L.joined_auid = L.joined_auid || {}, p = 0; p < e.length; p++) { var r = e[p], u = r.la, t = r.df, v = (b.prefix || "_gcl") + "." + t + "." + u; if (!q[v]) { var x = "https://adservice.google.com/pagead/regclk"; x = x + "?gclid=" + u + "&auid=" + l + "&gclsrc=" + t; rd(x); n = q[v] = !0 } } null == a && (a =
                n); a && l && Sf(b)
        })
    }, mh = function (a) { var b; if (eh("gclaw") || eh("gac") || 0 < fh("aw").length) b = !1; else { var c; if (0 < fh("gb").length) c = !0; else { var d = Math.max($g("aw", a), ah(Fg() ? Wf() : {})); c = Math.max($g("gb", a), ah(Fg() ? Wf("_gac_gb", !0) : {})) > d } b = c } return b }; var nh = /[A-Z]+/, oh = /\s/, ph = function (a) { if (g(a) && (a = Va(a), !oh.test(a))) { var b = a.indexOf("-"); if (!(0 > b)) { var c = a.substring(0, b); if (nh.test(c)) { for (var d = a.substring(b + 1).split("/"), e = 0; e < d.length; e++)if (!d[e]) return; return { id: a, prefix: c, containerId: c + "-" + d[0], F: d } } } } }, rh = function (a) { for (var b = {}, c = 0; c < a.length; ++c) { var d = ph(a[c]); d && (b[d.id] = d) } qh(b); var e = []; Ma(b, function (f, h) { e.push(h) }); return e };
    function qh(a) { var b = [], c; for (c in a) if (a.hasOwnProperty(c)) { var d = a[c]; "AW" === d.prefix && d.F[1] && b.push(d.containerId) } for (var e = 0; e < b.length; ++e)delete a[b[e]] }; var sh = function () { var a = !1; return a }; var uh = function (a, b, c, d) { return (2 === th() || d || "http:" != G.location.protocol ? a : b) + c }, th = function () { var a = id(), b; if (1 === a) a: { var c = Oe; c = c.toLowerCase(); for (var d = "https://" + c, e = "http://" + c, f = 1, h = I.getElementsByTagName("script"), k = 0; k < h.length && 100 > k; k++) { var l = h[k].src; if (l) { l = l.toLowerCase(); if (0 === l.indexOf(e)) { b = 3; break a } 1 === f && 0 === l.indexOf(d) && (f = 2) } } b = f } else b = a; return b };
    var wh = function (a, b, c) { if (G[a.functionName]) return b.Bd && J(b.Bd), G[a.functionName]; var d = vh(); G[a.functionName] = d; if (a.oc) for (var e = 0; e < a.oc.length; e++)G[a.oc[e]] = G[a.oc[e]] || vh(); a.yc && void 0 === G[a.yc] && (G[a.yc] = c); hd(uh("https://", "http://", a.Jd), b.Bd, b.qh); return d }, vh = function () { var a = function () { a.q = a.q || []; a.q.push(arguments) }; return a }, xh = { functionName: "_googWcmImpl", yc: "_googWcmAk", Jd: "www.gstatic.com/wcm/loader.js" }, yh = { functionName: "_gaPhoneImpl", yc: "ga_wpid", Jd: "www.gstatic.com/gaphone/loader.js" },
        zh = { Af: "", yg: "5" }, Ah = { functionName: "_googCallTrackingImpl", oc: [yh.functionName, xh.functionName], Jd: "www.gstatic.com/call-tracking/call-tracking_" + (zh.Af || zh.yg) + ".js" }, Bh = {}, Ch = function (a, b, c, d) { D(22); if (c) { d = d || {}; var e = wh(xh, d, a), f = { ak: a, cl: b }; void 0 === d.wa && (f.autoreplace = c); e(2, d.wa, f, c, 0, new Date, d.options) } }, Dh = function (a, b, c, d) {
            D(21); if (b && c) {
                d = d || {}; for (var e = { countryNameCode: c, destinationNumber: b, retrievalTime: new Date }, f = 0; f < a.length; f++) {
                    var h = a[f];
                    Bh[h.id] || (h && "AW" === h.prefix && !e.adData && 2 <= h.F.length ? (e.adData = { ak: h.F[0], cl: h.F[1] }, Bh[h.id] = !0) : h && "UA" === h.prefix && !e.gaData && (e.gaData = { gaWpid: h.containerId }, Bh[h.id] = !0))
                } (e.gaData || e.adData) && wh(Ah, d)(d.wa, e, d.options)
            }
        }, Eh = function () { var a = !1; return a }, Fh = function (a, b) {
            if (a) if (sh()) { } else {
                if (g(a)) {
                    var c =
                        ph(a); if (!c) return; a = c
                } var d = void 0, e = !1, f = b.getWithConfig(C.fg); if (f && Fa(f)) { d = []; for (var h = 0; h < f.length; h++) { var k = ph(f[h]); k && (d.push(k), (a.id === k.id || a.id === a.containerId && a.containerId === k.containerId) && (e = !0)) } } if (!d || e) {
                    var l = b.getWithConfig(C.xe), n; if (l) {
                        Fa(l) ? n = l : n = [l]; var q = b.getWithConfig(C.ve), p = b.getWithConfig(C.we), r = b.getWithConfig(C.ye), u = b.getWithConfig(C.eg), t = q || p, v = 1; "UA" !== a.prefix || d || (v = 5); for (var x = 0; x < n.length; x++)if (x < v) if (d) Dh(d, n[x], u, { wa: t, options: r }); else if ("AW" === a.prefix &&
                            a.F[1]) Eh() ? Dh([a], n[x], u || "US", { wa: t, options: r }) : Ch(a.F[0], a.F[1], n[x], { wa: t, options: r }); else if ("UA" === a.prefix) if (Eh()) Dh([a], n[x], u || "US", { wa: t }); else { var z = a.containerId, w = n[x], y = { wa: t }; D(23); if (w) { y = y || {}; var A = wh(yh, y, z), B = {}; void 0 !== y.wa ? B.receiver = y.wa : B.replace = w; B.ga_wpid = z; B.destination = w; A(2, new Date, B) } }
                    }
                }
            }
        };
    var Ih = function (a) { return Od(C.B) ? a : a.replace(/&url=([^&#]+)/, function (b, c) { var d = me(decodeURIComponent(c)); return "&url=" + encodeURIComponent(d) }) }, Jh = function () { var a; if (!(a = Pe)) { var b; if (!0 === G._gtmdgs) b = !0; else { var c = dd && dd.userAgent || ""; b = 0 > c.indexOf("Safari") || /Chrome|Coast|Opera|Edg|Silk|Android/.test(c) || 11 > ((/Version\/([\d]+)/.exec(c) || [])[1] || "") ? !1 : !0 } a = !b } if (a) return -1; var d = Oa("1"); return mf(1, 100) < d ? mf(2, 2) : -1 }, Kh = function (a) {
        var b;
        if (!a || !a.length) return; for (var c = [], d = 0; d < a.length; ++d) { var e = a[d]; e && e.estimated_delivery_date ? c.push("" + e.estimated_delivery_date) : c.push("") } b = c.join(","); return b
    }; var Lh = new RegExp(/^(.*\.)?(google|youtube|blogger|withgoogle)(\.com?)?(\.[a-z]{2})?\.?$/), Mh = { cl: ["ecl"], customPixels: ["nonGooglePixels"], ecl: ["cl"], ehl: ["hl"], hl: ["ehl"], html: ["customScripts", "customPixels", "nonGooglePixels", "nonGoogleScripts", "nonGoogleIframes"], customScripts: ["html", "customPixels", "nonGooglePixels", "nonGoogleScripts", "nonGoogleIframes"], nonGooglePixels: [], nonGoogleScripts: ["nonGooglePixels"], nonGoogleIframes: ["nonGooglePixels"] }, Nh = {
        cl: ["ecl"], customPixels: ["customScripts", "html"],
        ecl: ["cl"], ehl: ["hl"], hl: ["ehl"], html: ["customScripts"], customScripts: ["html"], nonGooglePixels: ["customPixels", "customScripts", "html", "nonGoogleScripts", "nonGoogleIframes"], nonGoogleScripts: ["customScripts", "html"], nonGoogleIframes: ["customScripts", "html", "nonGoogleScripts"]
    }, Oh = "google customPixels customScripts html nonGooglePixels nonGoogleScripts nonGoogleIframes".split(" ");
    var Ph = function () { var a = !1; a = !0; return a }, Rh = function (a) {
        var b = af("gtm.allowlist") || af("gtm.whitelist"); b && D(9); Ph() && (b = "google gtagfl lcl zone oid op".split(" ")); var c = b && fb(Ua(b), Mh), d = af("gtm.blocklist") ||
            af("gtm.blacklist"); d || (d = af("tagTypeBlacklist")) && D(3); d ? D(8) : d = []; Qh() && (d = Ua(d), d.push("nonGooglePixels", "nonGoogleScripts", "sandboxedScripts")); 0 <= Ga(Ua(d), "google") && D(2); var e = d && fb(Ua(d), Nh), f = {}; return function (h) {
                var k = h && h[sb.Oa]; if (!k || "string" != typeof k) return !0; k = k.replace(/^_*/, ""); if (void 0 !== f[k]) return f[k]; var l = Ue[k] || [], n = a(k, l); if (b) {
                    var q; if (q =
                        n) a: { if (0 > Ga(c, k)) if (l && 0 < l.length) for (var p = 0; p < l.length; p++) { if (0 > Ga(c, l[p])) { D(11); q = !1; break a } } else { q = !1; break a } q = !0 } n = q
                } var r = !1; if (d) { var u = 0 <= Ga(e, k); if (u) r = u; else { var t = La(e, l || []); t && D(10); r = t } } var v = !n || r; v || !(0 <= Ga(l, "sandboxedScripts")) || c && -1 !== Ga(c, "sandboxedScripts") || (v = La(e, Oh)); return f[k] = v
            }
    }, Qh = function () { return Lh.test(G.location && G.location.hostname) }; var Sh = { active: !0, isAllowed: function () { return !0 } }, Th = function (a) { var b = L.zones; return b ? b.checkState(Ie.D, a) : Sh }, Uh = function (a) { var b = L.zones; !b && a && (b = L.zones = a()); return b }; var Vh = function () { }, Wh = function () { }; var ai = !1, bi = 0, ci = []; function di(a) { if (!ai) { var b = I.createEventObject, c = "complete" == I.readyState, d = "interactive" == I.readyState; if (!a || "readystatechange" != a.type || c || !b && d) { ai = !0; for (var e = 0; e < ci.length; e++)J(ci[e]) } ci.push = function () { for (var f = 0; f < arguments.length; f++)J(arguments[f]); return 0 } } } function ei() { if (!ai && 140 > bi) { bi++; try { I.documentElement.doScroll("left"), di() } catch (a) { G.setTimeout(ei, 50) } } } var fi = function (a) { ai ? a() : ci.push(a) }; var hi = function (a, b) { this.m = !1; this.H = []; this.T = { tags: [] }; this.Y = !1; this.o = this.C = 0; gi(this, a, b) }, ii = function (a, b, c, d) { if (Le.hasOwnProperty(b) || "__zone" === b) return -1; var e = {}; qb(d) && (e = m(d, e)); e.id = c; e.status = "timeout"; return a.T.tags.push(e) - 1 }, ji = function (a, b, c, d) { var e = a.T.tags[b]; e && (e.status = c, e.executionTime = d) }, ki = function (a) { if (!a.m) { for (var b = a.H, c = 0; c < b.length; c++)b[c](); a.m = !0; a.H.length = 0 } }, gi = function (a, b, c) { Ca(b) && li(a, b); c && G.setTimeout(function () { return ki(a) }, Number(c)) }, li = function (a,
        b) { var c = $a(function () { return J(function () { b(Ie.D, a.T) }) }); a.m ? c() : a.H.push(c) }, mi = function (a) { a.C++; return $a(function () { a.o++; a.Y && a.o >= a.C && ki(a) }) }; var ni = function () { function a(d) { return !Ea(d) || 0 > d ? 0 : d } if (!L._li && G.performance && G.performance.timing) { var b = G.performance.timing.navigationStart, c = Ea(bf.get("gtm.start")) ? bf.get("gtm.start") : 0; L._li = { cst: a(c - b), cbt: a(Re - b) } } }; var ri = {}, si = function () { return G.GoogleAnalyticsObject && G[G.GoogleAnalyticsObject] }, ti = !1;
    var ui = function (a) { G.GoogleAnalyticsObject || (G.GoogleAnalyticsObject = a || "ga"); var b = G.GoogleAnalyticsObject; if (G[b]) G.hasOwnProperty(b) || D(12); else { var c = function () { c.q = c.q || []; c.q.push(arguments) }; c.l = Number(new Date); G[b] = c } ni(); return G[b] }, vi = function (a, b, c, d) { b = String(b).replace(/\s+/g, "").split(","); var e = si(); e(a + "require", "linker"); e(a + "linker:autoLink", b, c, d) }, wi = function (a) {
        if (!Fd()) return; var b = si(); b(a + "require", "linker"); b(a + "linker:passthrough",
            !0);
    };
    var yi = function (a) { }, xi = function () { return G.GoogleAnalyticsObject || "ga" }, zi = function (a, b) {
        return function () {
            var c = si(), d = c && c.getByName && c.getByName(a); if (d) {
                var e = d.get("sendHitTask"); d.set("sendHitTask", function (f) {
                    var h = f.get("hitPayload"), k = f.get("hitCallback"), l = 0 > h.indexOf("&tid=" + b); l && (f.set("hitPayload", h.replace(/&tid=UA-[0-9]+-[0-9]+/, "&tid=" +
                        b), !0), f.set("hitCallback", void 0, !0)); e(f); l && (f.set("hitPayload", h, !0), f.set("hitCallback", k, !0), f.set("_x_19", void 0, !0), e(f))
                })
            }
        }
    };
    var Ei = function () { return "&tc=" + Wb.filter(function (a) { return a }).length }, Hi = function () { 2022 <= Fi().length && Gi() }, Ji = function () { Ii || (Ii = G.setTimeout(Gi, 500)) }, Gi = function () { Ii && (G.clearTimeout(Ii), Ii = void 0); void 0 === Ki || Li[Ki] && !Mi && !Ni || (Oi[Ki] || Pi.gh() || 0 >= Qi-- ? (D(1), Oi[Ki] = !0) : (Pi.xh(), kd(Fi()), Li[Ki] = !0, Ri = Si = Ti = Ni = Mi = "")) }, Fi = function () { var a = Ki; if (void 0 === a) return ""; var b = za("GTM"), c = za("TAGGING"); return [Ui, Li[a] ? "" : "&es=1", Vi[a], b ? "&u=" + b : "", c ? "&ut=" + c : "", Ei(), Mi, Ni, Ti ? Ti : "", Si, Ri, "&z=0"].join("") },
        Xi = function () { Ui = Wi() }, Wi = function () { return [Se, "&v=3&t=t", "&pid=" + Ia(), "&rv=" + Ie.mc].join("") }, Yi = "0.005000" > Math.random(), Ui = Wi(), Li = {}, Mi = "", Ni = "", Ri = "", Si = "", Ti = "", Ki = void 0, Vi = {}, Oi = {}, Ii = void 0, Pi = function (a, b) { var c = 0, d = 0; return { gh: function () { if (c < a) return !1; Wa() - d >= b && (c = 0); return c >= a }, xh: function () { Wa() - d >= b && (c = 0); c++; d = Wa() } } }(2, 1E3), Qi = 1E3, Zi = function (a, b, c) {
            if (Yi && !Oi[a] && b) {
                a !== Ki && (Gi(), Ki = a); var d, e = String(b[sb.Oa] || "").replace(/_/g, ""); 0 === e.indexOf("cvt") && (e = "cvt");
                d = e; var f = c + d; Mi = Mi ? Mi + "." + f : "&tr=" + f; var h = b["function"]; if (!h) throw Error("Error: No function name given for function call."); var k = (Yb[h] ? "1" : "2") + d; Ri = Ri ? Ri + "." + k : "&ti=" + k; Ji(); Hi()
            }
        }, $i = function (a, b, c) { if (Yi && !Oi[a]) { a !== Ki && (Gi(), Ki = a); var d = c + b; Ni = Ni ? Ni + "." + d : "&epr=" + d; Ji(); Hi() } }, aj = function (a, b, c) { };
    function bj(a, b, c, d) { var e = Wb[a], f = cj(a, b, c, d); if (!f) return null; var h = cc(e[sb.Oe], c, []); if (h && h.length) { var k = h[0]; f = bj(k.index, { onSuccess: f, onFailure: 1 === k.$e ? b.terminate : f, terminate: b.terminate }, c, d) } return f }
    function cj(a, b, c, d) {
        function e() {
            if (f[sb.sg]) k(); else {
                var x = dc(f, c, []); var y = ii(c.Pa, String(f[sb.Oa]), Number(f[sb.Pe]), x[sb.ug]), A = !1; x.vtp_gtmOnSuccess = function () {
                    if (!A) {
                        A = !0; var E = Wa() - F; Zi(c.id, Wb[a], "5"); ji(c.Pa, y, "success",
                            E); h()
                    }
                }; x.vtp_gtmOnFailure = function () { if (!A) { A = !0; var E = Wa() - F; Zi(c.id, Wb[a], "6"); ji(c.Pa, y, "failure", E); k() } }; x.vtp_gtmTagId = f.tag_id; x.vtp_gtmEventId = c.id; Zi(c.id, f, "1"); var B = function () { var E = Wa() - F; Zi(c.id, f, "7"); ji(c.Pa, y, "exception", E); A || (A = !0, k()) }; var F = Wa(); try { bc(x, c) } catch (E) { B(E) }
            }
        } var f = Wb[a], h = b.onSuccess, k = b.onFailure, l = b.terminate; if (c.xd(f)) return null; var n = cc(f[sb.Qe], c, []); if (n && n.length) { var q = n[0], p = bj(q.index, { onSuccess: h, onFailure: k, terminate: l }, c, d); if (!p) return null; h = p; k = 2 === q.$e ? l : p } if (f[sb.Ke] || f[sb.wg]) {
            var r = f[sb.Ke] ? Xb :
                c.Ch, u = h, t = k; if (!r[a]) { e = $a(e); var v = dj(a, r, e); h = v.onSuccess; k = v.onFailure } return function () { r[a](u, t) }
        } return e
    } function dj(a, b, c) { var d = [], e = []; b[a] = ej(d, e, c); return { onSuccess: function () { b[a] = fj; for (var f = 0; f < d.length; f++)d[f]() }, onFailure: function () { b[a] = gj; for (var f = 0; f < e.length; f++)e[f]() } } } function ej(a, b, c) { return function (d, e) { a.push(d); b.push(e); c() } } function fj(a) { a() } function gj(a, b) { b() }; var jj = function (a, b) {
        for (var c = [], d = 0; d < Wb.length; d++)if (a[d]) { var e = Wb[d]; var f = mi(b.Pa); try { var h = bj(d, { onSuccess: f, onFailure: f, terminate: f }, b, d); if (h) { var k = c, l = k.push, n = d, q = e["function"]; if (!q) throw "Error: No function name given for function call."; var p = Yb[q]; l.call(k, { vf: n, nf: p ? p.priorityOverride || 0 : 0, Ug: h }) } else hj(d, b), f() } catch (t) { f() } } var r = b.Pa; r.Y = !0; r.o >= r.C && ki(r); c.sort(ij); for (var u = 0; u < c.length; u++)c[u].Ug();
        return 0 < c.length
    }; function ij(a, b) { var c, d = b.nf, e = a.nf; c = d > e ? 1 : d < e ? -1 : 0; var f; if (0 !== c) f = c; else { var h = a.vf, k = b.vf; f = h > k ? 1 : h < k ? -1 : 0 } return f } function hj(a, b) { if (!Yi) return; var c = function (d) { var e = b.xd(Wb[d]) ? "3" : "4", f = cc(Wb[d][sb.Oe], b, []); f && f.length && c(f[0].index); Zi(b.id, Wb[d], e); var h = cc(Wb[d][sb.Qe], b, []); h && h.length && c(h[0].index) }; c(a); }
    var kj = !1, qj = function (a) {
        var b = a["gtm.uniqueEventId"], c = a.event; if ("gtm.js" === c) { if (kj) return !1; kj = !0 } var d = Th(b), e = !1; if (!d.active) { if ("gtm.js" !== c) return !1; e = !0; d = Th(Number.MAX_SAFE_INTEGER) } Yi && !Oi[b] && Ki !== b && (Gi(), Ki = b, Ri = Mi = "", Vi[b] = "&e=" + (0 === c.indexOf("gtm.") ? encodeURIComponent(c) : "*") + "&eid=" + b, Ji()); var f = a.eventCallback, h = a.eventTimeout, k = {
            id: b, name: c, xd: Rh(d.isAllowed), Ch: [], hf: function () { D(6) }, Ue: lj(b), Pa: new hi(f,
                h)
        }; nj(b, k.Pa); var l = kc(k); e && (l = oj(l)); var n = jj(l, k); "gtm.js" !== c && "gtm.sync" !== c || yi(Ie.D); switch (c) { case "gtm.init": n && D(20) }return pj(l, n)
    }; function lj(a) { return function (b) { Yi && (rb(b) || aj(a, "input", b)) } }
    function nj(a, b) { ff(a, "event", 1); ff(a, "ecommerce", 1); ff(a, "gtm"); ff(a, "eventModel"); } function mj() { var a = {}; a.event = ef("event", 1); a.ecommerce = ef("ecommerce", 1); a.gtm = ef("gtm"); a.eventModel = ef("eventModel"); return a } function oj(a) { for (var b = [], c = 0; c < a.length; c++)a[c] && Ke[String(Wb[c][sb.Oa])] && (b[c] = !0); return b }
    function pj(a, b) { if (!b) return b; for (var c = 0; c < a.length; c++)if (a[c] && Wb[c] && !Le[String(Wb[c][sb.Oa])]) return !0; return !1 } function rj(a, b) { if (a) { var c = "" + a; 0 !== c.indexOf("http://") && 0 !== c.indexOf("https://") && (c = "https://" + c); "/" === c[c.length - 1] && (c = c.substring(0, c.length - 1)); return le("" + c + b).href } } function sj(a, b) { return tj() ? rj(a, b) : void 0 } function tj() { var a = !1; return a }; var uj = function () { this.eventModel = {}; this.targetConfig = {}; this.containerConfig = {}; this.remoteConfig = {}; this.globalConfig = {}; this.onSuccess = function () { }; this.onFailure = function () { }; this.setContainerTypeLoaded = function () { }; this.getContainerTypeLoaded = function () { }; this.eventId = void 0 }, vj = function (a) { var b = new uj; b.eventModel = a; return b }, wj = function (a, b) { a.targetConfig = b; return a }, xj = function (a, b) { a.containerConfig = b; return a }, yj = function (a, b) { a.remoteConfig = b; return a }, zj = function (a, b) {
        a.globalConfig =
            b; return a
    }, Aj = function (a, b) { a.onSuccess = b; return a }, Bj = function (a, b) { a.setContainerTypeLoaded = b; return a }, Cj = function (a, b) { a.getContainerTypeLoaded = b; return a }, Dj = function (a, b) { a.onFailure = b; return a }; uj.prototype.getWithConfig = function (a) { if (void 0 !== this.eventModel[a]) return this.eventModel[a]; if (void 0 !== this.targetConfig[a]) return this.targetConfig[a]; if (void 0 !== this.containerConfig[a]) return this.containerConfig[a]; if (void 0 !== this.remoteConfig[a]) return this.remoteConfig[a]; if (void 0 !== this.globalConfig[a]) return this.globalConfig[a] };
    var Ej = function (a) { function b(e) { Ma(e, function (f) { c[f] = null }) } var c = {}; b(a.eventModel); b(a.targetConfig); b(a.containerConfig); b(a.globalConfig); var d = []; Ma(c, function (e) { d.push(e) }); return d }; var Fj; if (3 === Ie.mc.length) Fj = "g"; else { var Gj = "G"; Gj = "g"; Fj = Gj }
    var Hj = { "": "n", UA: "u", AW: "a", DC: "d", G: "e", GF: "f", HA: "h", GTM: Fj, OPT: "o" }, Ij = function (a) { var b = Ie.D.split("-"), c = b[0].toUpperCase(), d = Hj[c] || "i", e = a && "GTM" === c ? b[1] : "OPT" === c ? b[1] : "", f; if (3 === Ie.mc.length) { var h = "w"; h = sh() ? "s" : "o"; f = "2" + h } else f = ""; return f + d + Ie.mc + e }; var Jj = function (a, b) { a.addEventListener && a.addEventListener.call(a, "message", b, !1) }; var Kj = function () { return Wc("iPhone") && !Wc("iPod") && !Wc("iPad") }; Wc("Opera"); Wc("Trident") || Wc("MSIE"); Wc("Edge"); !Wc("Gecko") || -1 != Tc.toLowerCase().indexOf("webkit") && !Wc("Edge") || Wc("Trident") || Wc("MSIE") || Wc("Edge"); -1 != Tc.toLowerCase().indexOf("webkit") && !Wc("Edge") && Wc("Mobile"); Wc("Macintosh"); Wc("Windows"); Wc("Linux") || Wc("CrOS"); var Lj = qa.navigator || null; Lj && (Lj.appVersion || "").indexOf("X11"); Wc("Android"); Kj(); Wc("iPad"); Wc("iPod"); Kj() || Wc("iPad") || Wc("iPod"); Tc.toLowerCase().indexOf("kaios"); var Mj = function (a, b) { for (var c = a, d = 0; 50 > d; ++d) { var e; try { e = !(!c.frames || !c.frames[b]) } catch (k) { e = !1 } if (e) return c; var f; a: { try { var h = c.parent; if (h && h != c) { f = h; break a } } catch (k) { } f = null } if (!(c = f)) break } return null }; var Nj = function () { }; var Oj = function (a) { void 0 !== a.addtlConsent && "string" !== typeof a.addtlConsent && (a.addtlConsent = void 0); void 0 !== a.gdprApplies && "boolean" !== typeof a.gdprApplies && (a.gdprApplies = void 0); return void 0 !== a.tcString && "string" !== typeof a.tcString || void 0 !== a.listenerId && "number" !== typeof a.listenerId ? 2 : a.cmpStatus && "error" !== a.cmpStatus ? 0 : 3 }, Pj = function (a, b) { this.o = a; this.m = null; this.H = {}; this.Y = 0; this.T = void 0 === b ? 500 : b; this.C = null }; pa(Pj, Nj);
    var Rj = function (a) { return "function" === typeof a.o.__tcfapi || null != Qj(a) };
    Pj.prototype.addEventListener = function (a) {
        var b = {}, c = Kc(function () { return a(b) }), d = 0; -1 !== this.T && (d = setTimeout(function () { b.tcString = "tcunavailable"; b.internalErrorState = 1; c() }, this.T)); var e = function (f, h) { clearTimeout(d); f ? (b = f, b.internalErrorState = Oj(b), h && 0 === b.internalErrorState || (b.tcString = "tcunavailable", h || (b.internalErrorState = 3))) : (b.tcString = "tcunavailable", b.internalErrorState = 3); a(b) }; try { Sj(this, "addEventListener", e) } catch (f) {
            b.tcString = "tcunavailable", b.internalErrorState = 3, d && (clearTimeout(d),
                d = 0), c()
        }
    }; Pj.prototype.removeEventListener = function (a) { a && a.listenerId && Sj(this, "removeEventListener", null, a.listenerId) };
    var Uj = function (a, b, c) {
        var d; d = void 0 === d ? "755" : d; var e; a: { if (a.publisher && a.publisher.restrictions) { var f = a.publisher.restrictions[b]; if (void 0 !== f) { e = f[void 0 === d ? "755" : d]; break a } } e = void 0 } var h = e; if (0 === h) return !1; var k = c; 2 === c ? (k = 0, 2 === h && (k = 1)) : 3 === c && (k = 1, 1 === h && (k = 0)); var l; if (0 === k) if (a.purpose && a.vendor) { var n = Tj(a.vendor.consents, void 0 === d ? "755" : d); l = n && "1" === b && a.purposeOneTreatment && ("DE" === a.publisherCC || ud(1936) && "CH" === a.publisherCC) ? !0 : n && Tj(a.purpose.consents, b) } else l = !0; else l =
            1 === k ? a.purpose && a.vendor ? Tj(a.purpose.legitimateInterests, b) && Tj(a.vendor.legitimateInterests, void 0 === d ? "755" : d) : !0 : !0; return l
    }, Tj = function (a, b) { return !(!a || !a[b]) }, Sj = function (a, b, c, d) { c || (c = function () { }); if ("function" === typeof a.o.__tcfapi) { var e = a.o.__tcfapi; e(b, 2, c, d) } else if (Qj(a)) { Vj(a); var f = ++a.Y; a.H[f] = c; if (a.m) { var h = {}; a.m.postMessage((h.__tcfapiCall = { command: b, version: 2, callId: f, parameter: d }, h), "*") } } else c({}, !1) }, Qj = function (a) { if (a.m) return a.m; a.m = Mj(a.o, "__tcfapiLocator"); return a.m },
        Vj = function (a) { a.C || (a.C = function (b) { try { var c; c = ("string" === typeof b.data ? JSON.parse(b.data) : b.data).__tcfapiReturn; a.H[c.callId](c.returnValue, c.success) } catch (d) { } }, Jj(a.o, a.C)) }; var Wj = !0; Wj = !1; var Xj = { 1: 0, 3: 0, 4: 0, 7: 3, 9: 3, 10: 3 }; function Yj(a, b) { if ("" === a) return b; var c = Number(a); return isNaN(c) ? b : c } var Zj = Yj("", 550), ak = Yj("", 500); function bk() { var a = L.tcf || {}; return L.tcf = a }
    var ck = function (a, b) { this.C = a; this.m = b; this.o = Wa(); }, dk = function (a) { }, ek = function (a) { }, kk = function () {
        var a = bk(), b = new Pj(G, Wj ? 3E3 : -1), c = new ck(b, a); if ((fk() ? !0 === G.gtag_enable_tcf_support : !1 !== G.gtag_enable_tcf_support) && !a.active && ("function" === typeof G.__tcfapi || Rj(b))) {
            a.active = !0; a.Nb = {}; gk(); var d = null; Wj ? d = G.setTimeout(function () { hk(a); ik(a); d = null }, ak) : a.tcString = "tcunavailable"; try {
                b.addEventListener(function (e) {
                    d && (clearTimeout(d), d = null); if (0 !== e.internalErrorState) hk(a), ik(a), dk(c);
                    else {
                        var f; a.gdprApplies = e.gdprApplies; if (!1 === e.gdprApplies) f = jk(), b.removeEventListener(e); else if ("tcloaded" === e.eventStatus || "useractioncomplete" === e.eventStatus || "cmpuishown" === e.eventStatus) {
                            var h = {}, k; for (k in Xj) if (Xj.hasOwnProperty(k)) if ("1" === k) {
                                var l, n = e, q = !0; q = void 0 === q ? !1 : q; var p; var r = n; !1 === r.gdprApplies ? p = !0 : (void 0 === r.internalErrorState && (r.internalErrorState = Oj(r)), p = "error" === r.cmpStatus || 0 !== r.internalErrorState || "loaded" === r.cmpStatus && ("tcloaded" === r.eventStatus || "useractioncomplete" ===
                                    r.eventStatus) ? !0 : !1); l = p ? !1 === n.gdprApplies || "tcunavailable" === n.tcString || void 0 === n.gdprApplies && !q || "string" !== typeof n.tcString || !n.tcString.length ? !0 : Uj(n, "1", 0) : !1; h["1"] = l
                            } else h[k] = Uj(e, k, Xj[k]); f = h
                        } f && (a.tcString = e.tcString || "tcempty", a.Nb = f, ik(a), dk(c))
                    }
                }), ek(c)
            } catch (e) { d && (clearTimeout(d), d = null), hk(a), ik(a) }
        }
    }; function hk(a) { a.type = "e"; a.tcString = "tcunavailable"; Wj && (a.Nb = jk()) } function gk() { var a = {}; Md((a.ad_storage = "denied", a.wait_for_update = Zj, a)) }
    var fk = function () { var a = !1; a = !0; return a }; function jk() { var a = {}, b; for (b in Xj) Xj.hasOwnProperty(b) && (a[b] = !0); return a } function ik(a) { var b = {}; Nd((b.ad_storage = a.Nb["1"] ? "granted" : "denied", b)) }
    var lk = function () { var a = bk(); if (a.active && void 0 !== a.loadTime) return Number(a.loadTime) }, mk = function () { var a = bk(); return a.active ? a.tcString || "" : "" }, nk = function () { var a = bk(); return a.active && void 0 !== a.gdprApplies ? a.gdprApplies ? "1" : "0" : "" }, ok = function (a) { if (!Xj.hasOwnProperty(String(a))) return !0; var b = bk(); return b.active && b.Nb ? !!b.Nb[String(a)] : !0 }; var pk = !1; function qk(a) { var b = String(G.location).split(/[?#]/)[0], c = Ie.Ef || G._CONSENT_MODE_SALT; return a ? c ? String(nf(b + a + c)) : "0" : "" }
    function rk(a) {
        function b(t) {
            var v; L.reported_gclid || (L.reported_gclid = {}); v = L.reported_gclid; var x; x = pk && h && (!Fd() || Od(C.B)) ? l + "." + (f.prefix || "_gcl") + (t ? "gcu" : "gcs") : l + (t ? "gcu" : "gcs"); if (!v[x]) {
                v[x] = !0; var z = [], w = {}, y = function (N, R) { R && (z.push(N + "=" + encodeURIComponent(R)), w[N] = !0) }, A = "https://www.google.com"; if (Fd()) {
                    var B = Od(C.B); y("gcs", Pd()); t && y("gcu", "1"); Gd() && y("gcd", "G1" + Kd(Dd)); L.dedupe_gclid ||
                        (L.dedupe_gclid = "" + If()); y("rnd", L.dedupe_gclid); if ((!l || n && "aw.ds" !== n) && Od(C.B)) { var F = Ig("_gcl_aw"); y("gclaw", F.join(".")) } y("url", String(G.location).split(/[?#]/)[0]); y("dclid", sk(d, q)); var E = !1; E = !0; B || !d && !E || (A = "https://pagead2.googlesyndication.com")
                }
                y("gdpr_consent", mk()), y("gdpr", nk()); "1" === rg(!1)._up && y("gtm_up", "1"); y("gclid", sk(d, l)); y("gclsrc", n); if (!(w.gclid || w.dclid || w.gclaw) && (y("gbraid", sk(d, p)), !w.gbraid && Fd() && Od(C.B))) { var H = Ig("_gcl_gb"); y("gclgb", H.join(".")) } y("gtm", Ij(!e)); pk && h && Od(C.B) && (Uf(f || {}), y("auid", Pf[Qf(f.prefix)] || ""));
                a.Ye && y("did", a.Ye); var M = A + "/pagead/landing?" + z.join("&"); rd(M)
            }
        } var c = !!a.od, d = !!a.ma, e = a.R, f = void 0 === a.sc ? {} : a.sc, h = void 0 === a.zc ? !0 : a.zc, k = Og(), l = k.gclid || "", n = k.gclsrc, q = k.dclid || "", p = k.gbraid || "", r = !c && ((!l || n && "aw.ds" !== n ? !1 : !0) || p), u = Fd(); if (r || u) u ? Qd(function () { b(); Od(C.B) || Jd(function (t) { return b(!0, t.Ve) }, C.B) }, [C.B]) : b()
    } function sk(a, b) { var c = a && !Od(C.B); return b && c ? "0" : b }
    var tk = function (a) { var b = sj(a, "/pagead/conversion_async.js"); if (b) return b; var c = -1 !== navigator.userAgent.toLowerCase().indexOf("firefox"), d = uh("https://", "http://", "www.googleadservices.com"); if (c || 1 === Jh()) d = "https://www.google.com"; return d + "/pagead/conversion_async.js" }, uk = !1, vk = [], wk = ["aw", "dc", "gb"], xk = function (a) { var b = G.google_trackConversion, c = a.gtm_onFailure; "function" == typeof b ? b(a) || c() : c() }, yk = function () { for (; 0 < vk.length;)xk(vk.shift()) }, zk = function (a, b) { var c = !1; var d = uk; c && (d = b.getContainerTypeLoaded("AW")); if (!d) { uk = !0; ni(); var e = function () { c && b.setContainerTypeLoaded("AW", !0); yk(); vk = { push: xk } }; sh() ? e() : hd(a, e, function () { yk(); uk = !1; c && b.setContainerTypeLoaded("AW", !1) }) } }, Ak = function (a) { if (a) { for (var b = [], c = 0; c < a.length; ++c) { var d = a[c]; d && b.push({ item_id: d.id, quantity: d.quantity, value: d.price, start_date: d.start_date, end_date: d.end_date }) } return b } }, Bk = function (a, b, c, d) {
        function e() { Da("gdpr_consent", mk()), Da("gdpr", nk()); } function f() { var ka = []; return ka } function h(ka) {
            var Aa = !0, Ja = []; if (ka) { Ja = f(); } u && (Y("delopc", t(C.bd)), Y("oedeld", t(C.te)), Y("delc", t(C.ie)), Y("shf", t(C.pe)), Y("iedeld", Kh(t(C.V))));
            F && Y("did", F); Aa && vk.push(P)
        } function k() { return function (ka) { v && (ka = Ih(ka)); return ka } } function l() { Gd() && Y("gcd", "G1" + Kd(Dd)); } var n = ph(a), q = b == C.Z; n.containerId !== Ie.D && D(61); var p = n.F[0], r = n.F[1], u = void 0 !== r, t = function (ka) { return d.getWithConfig(ka) }, v = void 0 != t(C.N) && !1 !== t(C.N), x = !1 !== t(C.rb), z = t(C.qb) || t(C.aa), w = t(C.W), y = t(C.ia), A =
            t(C.ra), B = t(C.Tf), F = jb(qb(B) ? B : {}), E = t(C.Ea), H = tk(E); zk(H, d); var M = { prefix: z, domain: w, ib: y, flags: A }; if (q) { var N = t(C.ka) || {}; if (x) { var R = t(C.sb), ha = void 0 === R ? !0 : !!R; zg(N[C.ab], !!N[C.I]) && Ug(wk, M); Rg(M); Xg(wk, M); } t(C.Fa) && Zg(["aw", "dc", "gb"]); N[C.I] && Wg(wk, N[C.I], N[C.eb], !!N[C.cb], z); Fh(n, d); rk({ od: !1, ma: v, R: a, eventId: d.eventId, sc: x ? M : void 0, zc: x, Ye: F }) } if (b === C.qa) {
                var S = t(C.Ca), K = t(C.Ba),
                    T = t(S); if (S === C.Wb && void 0 === T) { var U = gh("aw", M.prefix, v); 0 === U.length ? K(void 0) : 1 === U.length ? K(U[0]) : K(U) } else K(T)
            } else {
            var la = !1 === t(C.be) || !1 === t(C.vb); if (!q || !u && !la) if (!0 === t(C.ce) && (u = !1), !1 !== t(C.fa) || u) {
                var P = {
                    google_conversion_id: p, google_remarketing_only: !u, onload_callback: d.onSuccess, gtm_onFailure: d.onFailure, google_conversion_format: "3", google_conversion_color: "ffffff", google_conversion_domain: "", google_conversion_label: r, google_conversion_language: t(C.$a), google_conversion_value: t(C.Ga),
                    google_conversion_currency: t(C.ja), google_conversion_order_id: t(C.xb), google_user_id: t(C.yb), google_conversion_page_url: t(C.ub), google_conversion_referrer_url: t(C.Da), google_gtm: Ij()
                }; P.google_gtm_experiments = { capi: !0 }; u && (P.google_transport_url = rj(E, "/")); P.google_restricted_data_processing = t(C.Zc); sh() && (P.opt_image_generator = function () { return new Image }, P.google_enable_display_cookie_match = !1); !1 ===
                    t(C.fa) && (P.google_allow_ad_personalization_signals = !1); P.google_read_gcl_cookie_opt_out = !x; x && (P.google_gcl_cookie_prefix = z, P.google_gcl_cookie_domain = w, P.google_gcl_cookie_max_age_seconds = y, P.google_gcl_cookie_flags = A); var xa = function () { var ka = { event: b }, Aa = d.eventModel; if (!Aa) return null; m(Aa, ka); for (var Ja in ka) ka.hasOwnProperty(Ja) && C.zf[Ja.split(".")[0]] && delete ka[Ja]; return ka }(); xa && (P.google_custom_params = xa); !u && t(C.V) && (P.google_gtag_event_data = { items: t(C.V) }); if (u && b == C.oa) {
                        P.google_conversion_merchant_id =
                            t(C.he); P.google_basket_feed_country = t(C.ee); P.google_basket_feed_language = t(C.fe); P.google_basket_discount = t(C.de); P.google_basket_transaction_type = b; P.google_disable_merchant_reported_conversions = !0 === t(C.me); sh() && (P.google_disable_merchant_reported_conversions = !0); var na = Ak(t(C.V)); na && (P.google_conversion_items = na)
                    } var Y = function (ka, Aa) { void 0 != Aa && "" !== Aa && (P.google_additional_conversion_params = P.google_additional_conversion_params || {}, P.google_additional_conversion_params[ka] = Aa) }, Da = function (ka,
                        Aa) { void 0 != Aa && "" !== Aa && (P.google_additional_params = P.google_additional_params || {}, P.google_additional_params[ka] = Aa) }; "1" === rg(!1)._up && Y("gtm_up", "1"); u && (Y("vdnc", t(C.ue)), Y("vdltv", t(C.je))); e(); var mb = Jh(); 0 === mb ? Da("dg", "c") : 1 === mb && Da("dg", "e"); P.google_gtm_url_processor = k(); (function () {
                            Fd() ? Qd(function () {
                                e(); var ka = Od(C.B); if (u) {
                                    Y("gcs", Pd()); l(); var Aa = !1; Aa = !0; ka || E ||
                                        !v && !Aa || (P.google_transport_url = "https://pagead2.googlesyndication.com/"); h(ka)
                                } else if (ka) { h(ka); return } ka || Jd(function (Ja) { var Xa = Ja.Ve; P = m(P); P.google_gtm_url_processor = k(Xa); !E && P.google_transport_url && delete P.google_transport_url; e(); u && (Y("gcs", Pd()), l(), Y("gcu", "1")); h(!0) }, C.B)
                            }, [C.B]) : h(!0)
                        })()
            }
        }
    };
    var Ck = function (a) { return !(void 0 === a || null === a || 0 === (a + "").length) }, Dk = function (a, b) { var c; if (2 === b.ca) return a("ord", Ia(1E11, 1E13)), !0; if (3 === b.ca) return a("ord", "1"), a("num", Ia(1E11, 1E13)), !0; if (4 === b.ca) return Ck(b.sessionId) && a("ord", b.sessionId), !0; if (5 === b.ca) c = "1"; else if (6 === b.ca) c = b.Hd; else return !1; Ck(c) && a("qty", c); Ck(b.uc) && a("cost", b.uc); Ck(b.transactionId) && a("ord", b.transactionId); return !0 }, Gk = function (a, b, c) {
        function d(E, H, M) {
            r.hasOwnProperty(E) || (H = String(H), p.push(";" + E + "=" + (M ?
                H : Ek(H))))
        } function e(E, H) { H && d(E, H) } var f = a.qd, h = a.Kd, k = a.protocol, l = a.ud; k += h ? "//" + f + ".fls.doubleclick.net/activityi" : "//ad.doubleclick.net/activity"; var n = ";", q = !1; q = !0; Od(C.B) || l || !a.ma && !q || (k = "https://ade.googlesyndication.com/ddm/activity", n = "/", h = !1); var p = [n, "src=" + Ek(f), ";type=" + Ek(a.td), ";cat=" + Ek(a.Eb)], r = a.Pg || {}; Ma(r, function (E, H) { p.push(";" + Ek(E) + "=" + Ek(H + "")) });
        if (Dk(d, a)) {
            Ck(a.Jc) && d("u", a.Jc); Ck(a.Ic) && d("tran", a.Ic); d("gtm", Ij()); Fd() && !l && (d("gcs", Pd()), c && d("gcu", "1")); e("gdpr_consent", mk()), e("gdpr", nk()); "1" === rg(!1)._up && d("gtm_up", "1"); !1 === a.Dg && d("npa", "1"); if (a.pd) {
                var u = void 0 === a.ma ? !0 : !!a.ma, t = gh("dc", a.Ha, u), v = !1; t && t.length && (d("gcldc", t.join(".")), v = !0); if (Fk && !v && mh(a.Ha)) {
                    var x = gh("gb", a.Ha, u); x && x.length && d("gclgb", x.join(".")); var z = jh(u); z && d("gacgb",
                        z)
                } else { var w = gh("aw", a.Ha, u); w && w.length && d("gclaw", w.join(".")); var y = ih(u); y && d("gac", y) } Uf({ prefix: a.Ha, ib: a.Mg, domain: a.Lg, flags: a.Ph }); var A = Pf[Qf(a.Ha)]; A && d("auiddc", A)
            } Ck(a.Ed) && d("prd", a.Ed, !0); Ma(a.Od, function (E, H) { d(E, H) }); p.push(b || ""); if (Ck(a.Ac)) { var B = a.Ac || ""; Od(C.B) || l || !a.ma || (B = me(B)); d("~oref", B) } var F = k + p.join("") + "?"; h ? jd(F, a.onSuccess) : kd(F, a.onSuccess, a.onFailure)
        } else J(a.onFailure)
    }, Fk = !1;
    Fk = !0; var Ek = encodeURIComponent, Hk = function (a, b) { !Fd() || a.ud ? Gk(a, b) : Qd(function () { Gk(a, b); Od(C.B) || Jd(function () { Gk(a, b, !0) }, C.B) }, [C.B]) };
    var Ik = function (a, b, c, d) { function e() { var f = { config: a, gtm: Ij() }; c && (Uf(d), f.auiddc = Pf[Qf(d.prefix)]); b && (f.loadInsecure = b); void 0 === G.__dc_ns_processor && (G.__dc_ns_processor = []); G.__dc_ns_processor.push(f); hd((b ? "http" : "https") + "://www.googletagmanager.com/dclk/ns/v1.js") } Od(C.B) ? e() : Jd(e, C.B) }, Jk = function (a) {
        var b = /^u([1-9]\d?|100)$/, c = a.getWithConfig(C.ke) || {}, d = Ej(a), e = {}, f = {}; if (qb(c)) for (var h in c) if (c.hasOwnProperty(h) && b.test(h)) { var k = c[h]; g(k) && (e[h] = k) } for (var l = 0; l < d.length; l++) {
            var n =
                d[l]; b.test(n) && (e[n] = n)
        } for (var q in e) e.hasOwnProperty(q) && (f[q] = a.getWithConfig(e[q])); return f
    }, Kk = function (a) { function b(l, n, q) { void 0 !== q && 0 !== (q + "").length && d.push(l + n + ":" + c(q + "")) } var c = encodeURIComponent, d = [], e = a(C.V) || []; if (Fa(e)) for (var f = 0; f < e.length; f++) { var h = e[f], k = f + 1; b("i", k, h.id); b("p", k, h.price); b("q", k, h.quantity); b("c", k, a(C.ie)); b("l", k, a(C.$a)) } return d.join("|") }, Lk = function (a) {
        var b = /^DC-(\d+)(\/([\w-]+)\/([\w-]+)\+(\w+))?$/.exec(a); if (b) {
            var c = {
                standard: 2, unique: 3, per_session: 4,
                transactions: 5, items_sold: 6, "": 1
            }[(b[5] || "").toLowerCase()]; if (c) return { containerId: "DC-" + b[1], R: b[3] ? a : "", Bg: b[1], Ag: b[3] || "", Eb: b[4] || "", ca: c }
        }
    }, Ok = function (a, b, c, d) {
        var e = Lk(a); if (e) {
            e.containerId !== Ie.D && D(59); var f = function (K) { return d.getWithConfig(K) }, h = !1 !== f(C.rb), k = f(C.qb) || f(C.aa), l = f(C.W), n = f(C.ia), q = f(C.ra), p = f(C.Vf), r = void 0 != f(C.N) && !1 !== f(C.N), u = 3 === th(); if (b === C.qa) {
                var t = f(C.Ca), v = f(C.Ba), x = f(t); if (t === C.Wb && void 0 === x) {
                    var z = gh("dc", k, r); 0 === z.length ? v(void 0) : 1 === z.length ? v(z[0]) :
                        v(z)
                } else v(x)
            } else if (b === C.Z) { var w = { prefix: k, domain: l, ib: n, flags: q }, y = f(C.ka) || {}, A = f(C.sb), B = void 0 === A ? !0 : !!A; h && (zg(y[C.ab], !!y[C.I]) && Ug(Mk, w), Rg(w), Xg(Mk, w), Nk ? kh(B, w) : lh(B, w)); y[C.I] && Wg(Mk, y[C.I], y[C.eb], !!y[C.cb], k); f(C.Fa) && Zg(["aw", "dc", "gb"]); if (p && p.exclusion_parameters && p.engines) if (sh()) { } else Ik(p, u, h, w); rk({ od: !0, ma: r, R: a, eventId: d.eventId, sc: h ? w : void 0, zc: h }); J(d.onSuccess) } else {
                var F = {}, E = f(C.Uf);
                if (qb(E)) for (var H in E) if (E.hasOwnProperty(H)) { var M = E[H]; void 0 !== M && null !== M && (F[H] = M) } var N = ""; if (5 === e.ca || 6 === e.ca) N = Kk(f); var R = Jk(d), ha = !0 === f(C.Qf); if (sh() && ha) { ha = !1 } var S = {
                    Eb: e.Eb, pd: h, Lg: l, Mg: n, Ha: k, uc: f(C.Ga), ca: e.ca, Pg: F, qd: e.Bg, td: e.Ag, onFailure: d.onFailure, onSuccess: d.onSuccess, Ac: ke(le(G.location.href)), Ed: N, protocol: u ? "http:" : "https:", Hd: f(C.gg), Kd: ha, sessionId: f(C.cc), Ic: void 0, transactionId: f(C.xb),
                    Jc: void 0, Od: R, Dg: !1 !== f(C.fa), eventId: d.eventId, ma: r
                }; Hk(S)
            }
        } else J(d.onFailure)
    }, Mk = ["aw", "dc", "gb"], Nk = !1; var cl = function () { var a = !0; ok(7) && ok(9) && ok(10) || (a = !1); var b = !0; b = !1; b && !bl() && (a = !1); return a }, bl = function () { var a = !0; ok(3) && ok(4) || (a = !1); return a };
    var gl = function (a, b) { var c = b.getWithConfig(C.Ca), d = b.getWithConfig(C.Ba), e = b.getWithConfig(c); if (void 0 === e) { var f = void 0; dl.hasOwnProperty(c) ? f = dl[c] : el.hasOwnProperty(c) && (f = el[c]); 1 === f && (f = fl(c)); g(f) ? si()(function () { var h = si().getByName(a).get(f); d(h) }) : d(void 0) } else d(e) }, jl = function (a, b, c) { if (Fd()) { var d = function () { var e = si(), f = hl(a, b, "", c); il(b, f.Ia) && (e(function () { e.remove(b) }), e("create", a, f.Ia)) }; Jd(d, C.J); Jd(d, C.B) } }, ql = function (a, b, c) {
        var d = "https://www.google-analytics.com/analytics.js",
            e = ui(); if (Ca(e)) {
                var f = "gtag_" + a.split("-").join("_"), h = function (w) { var y = [].slice.call(arguments, 0); y[0] = f + "." + y[0]; e.apply(window, y) }, k = function () { var w = function (F, E) { for (var H = 0; E && H < E.length; H++)h(F, E[H]) }, y = kl(b, c); if (y) { var A = y.action; if ("impressions" === A) w("ec:addImpression", y.bh); else if ("promo_click" === A || "promo_view" === A) { var B = y.Gd; w("ec:addPromo", y.Gd); B && 0 < B.length && "promo_click" === A && h("ec:setAction", A) } else w("ec:addProduct", y.jb), h("ec:setAction", A, y.Db) } }, l = function () { if (sh()) { } else { var w = c.getWithConfig(C.cg); w && (h("require", w, { dataLayer: "dataLayer" }), h("require", "render")) } }, n = hl(a, f, b, c), q = function (w, y, A) { A && (y = "" + y); n.Ja[w] = y }; il(f, n.Ia) && (e(function () { si() && si().remove(f) }), ll[f] = !1); e("create", a, n.Ia); if (n.Ia._x_19) { var p = sj(n.Ia._x_19, "/analytics.js"); p && (d = p); n.Ia._x_20 && !ll[f] && (ll[f] = !0, e(zi(f, n.Ia._x_20))) } (function () {
                    var w = c.getWithConfig("custom_map"); e(function () {
                        if (qb(w)) {
                            var y = n.Ja, A = si().getByName(f), B; for (B in w) if (w.hasOwnProperty(B) &&
                                /^(dimension|metric)\d+$/.test(B) && void 0 != w[B]) { var F = A.get(fl(w[B])); ml(y, B, F) }
                        }
                    })
                })(); (function (w) { if (w) { var y = {}; if (qb(w)) for (var A in nl) nl.hasOwnProperty(A) && ol(nl[A], A, w[A], y); h("require", "linkid", y) } })(n.linkAttribution); var r = n[C.ka]; if (r && r[C.I]) { var u = r[C.eb]; vi(f + ".", r[C.I], void 0 === u ? !!r.use_anchor : "fragment" === u, !!r[C.cb]) } b === C.Nc ? (l(), h("send", "pageview", n.Ja)) : b === C.Z ? (l(), Fh(a, c), c.getWithConfig(C.Fa) && (Zg(["aw", "dc"]), wi(f + ".")), 0 != n.sendPageView && h("send", "pageview", n.Ja), jl(a,
                    f, c)) : b === C.qa ? gl(f, c) : "screen_view" === b ? h("send", "screenview", n.Ja) : "timing_complete" === b ? (q("timingCategory", n.eventCategory, !0), q("timingVar", n.name, !0), q("timingValue", Oa(n.value)), void 0 !== n.eventLabel && q("timingLabel", n.eventLabel, !0), h("send", "timing", n.Ja)) : "exception" === b ? h("send", "exception", n.Ja) : "optimize.callback" !== b && (0 <= Ga([C.Vb, "select_content", C.Aa, C.Wa, C.Xa, C.La, "set_checkout_option", C.oa, C.Ya, "view_promotion", "checkout_progress"], b) && (h("require", "ec", "ec.js"), k()), q("eventCategory",
                        n.eventCategory, !0), q("eventAction", n.eventAction || b, !0), void 0 !== n.eventLabel && q("eventLabel", n.eventLabel, !0), void 0 !== n.value && q("eventValue", Oa(n.value)), h("send", "event", n.Ja)); var t = !1; var v = pl; t && (v = c.getContainerTypeLoaded("UA")); if (!v) {
                            pl = !0; t && c.setContainerTypeLoaded("UA", !0); ni(); var x = function () { t && c.setContainerTypeLoaded("UA", !1); c.onFailure() },
                                z = function () { si().loaded || x() }; sh() ? J(z) : hd(d, z, x)
                        }
            } else J(c.onFailure)
    }, rl = function (a, b, c, d) { Qd(function () { ql(a, b, d) }, [C.J, C.B]) }, sl = function (a) { return Od(a) }, pl, ll = {}, dl = { client_id: 1, client_storage: "storage", cookie_name: 1, cookie_domain: 1, cookie_expires: 1, cookie_path: 1, cookie_update: 1, cookie_flags: 1, sample_rate: 1, site_speed_sample_rate: 1, use_amp_client_id: 1, store_gac: 1, conversion_linker: "storeGac" }, el = {
        anonymize_ip: 1, app_id: 1, app_installer_id: 1, app_name: 1, app_version: 1, campaign: {
            name: "campaignName",
            source: "campaignSource", medium: "campaignMedium", term: "campaignKeyword", content: "campaignContent", id: "campaignId"
        }, currency: "currencyCode", description: "exDescription", fatal: "exFatal", language: 1, non_interaction: 1, page_hostname: "hostname", page_referrer: "referrer", page_path: "page", page_location: "location", page_title: "title", screen_name: 1, transport_type: "transport", user_id: 1
    }, tl = { content_id: 1, event_category: 1, event_action: 1, event_label: 1, link_attribution: 1, linker: 1, method: 1, name: 1, send_page_view: 1, value: 1 },
        nl = { cookie_name: 1, cookie_expires: "duration", levels: 1 }, ul = { anonymize_ip: 1, fatal: 1, non_interaction: 1, use_amp_client_id: 1, send_page_view: 1, store_gac: 1, conversion_linker: 1 }, ol = function (a, b, c, d) { if (void 0 !== c) if (ul[b] && (c = Qa(c)), "anonymize_ip" !== b || c || (c = void 0), 1 === a) d[fl(b)] = c; else if (g(a)) d[a] = c; else for (var e in a) a.hasOwnProperty(e) && void 0 !== c[e] && (d[a[e]] = c[e]) }, fl = function (a) { return a && g(a) ? a.replace(/(_[a-z])/g, function (b) { return b[1].toUpperCase() }) : a }, vl = function (a) {
            var b = "general"; 0 <= Ga([C.Xd,
            C.Wa, C.$d, C.La, "checkout_progress", C.oa, C.Ya, C.Xa, "set_checkout_option"], a) ? b = "ecommerce" : 0 <= Ga("generate_lead login search select_content share sign_up view_item view_item_list view_promotion view_search_results".split(" "), a) ? b = "engagement" : "exception" === a && (b = "error"); return b
        }, ml = function (a, b, c) { a.hasOwnProperty(b) || (a[b] = c) }, wl = function (a) {
            if (Fa(a)) {
                for (var b = [], c = 0; c < a.length; c++) { var d = a[c]; if (void 0 != d) { var e = d.id, f = d.variant; void 0 != e && void 0 != f && b.push(String(e) + "." + String(f)) } } return 0 <
                    b.length ? b.join("!") : void 0
            }
        }, hl = function (a, b, c, d) {
            function e(E, H) { void 0 !== H && (k[E] = H) } a !== Ie.D && D(60); var f = function (E) { return d.getWithConfig(E) }, h = {}, k = {}, l = {}, n = wl(f(C.Zf)); n && ml(k, "exp", n); Fd() && (l._cs = sl); var q = f("custom_map"); if (qb(q)) for (var p in q) if (q.hasOwnProperty(p) && /^(dimension|metric)\d+$/.test(p) && void 0 != q[p]) { var r = f(String(q[p])); void 0 !== r && ml(k, p, r) } for (var u = Ej(d), t = 0; t < u.length; ++t) {
                var v = u[t], x = f(v); if (tl.hasOwnProperty(v)) ol(tl[v], v, x, h); else if (el.hasOwnProperty(v)) ol(el[v],
                    v, x, k); else if (dl.hasOwnProperty(v)) ol(dl[v], v, x, l); else if (/^(dimension|metric|content_group)\d+$/.test(v)) ol(1, v, x, k); else if ("developer_id" === v) { var z = jb(x); z && (k["&did"] = z) } else v === C.aa && 0 > Ga(u, C.Xb) && (l.cookieName = x + "_ga")
            } ml(l, "cookieDomain", "auto"); ml(k, "forceSSL", !0); ml(h, "eventCategory", vl(c)); 0 <= Ga(["view_item", "view_item_list", "view_promotion", "view_search_results"], c) && ml(k, "nonInteraction", !0); "login" === c || "sign_up" === c || "share" === c ? ml(h, "eventLabel", f(C.bg)) : "search" === c || "view_search_results" ===
                c ? ml(h, "eventLabel", f(C.jg)) : "select_content" === c && ml(h, "eventLabel", f(C.Sf)); var w = h[C.ka] || {}, y = w[C.ab]; y || 0 != y && w[C.I] ? l.allowLinker = !0 : !1 === y && ml(l, "useAmpClientId", !1); f(C.Fa) && (l._useUp = !0); !1 !== f(C.Rf) && !1 !== f(C.pb) && cl() || (k.allowAdFeatures = !1); if (!1 === f(C.fa) || !bl()) { var A = "allowAdFeatures"; A = "allowAdPersonalizationSignals"; k[A] = !1 } l.name = b; k["&gtm"] = Ij(!0); k.hitCallback = d.onSuccess; Fd() && (k["&gcs"] = Pd(), Od(C.J) || (l.storage = "none"), Od(C.B) || (k.allowAdFeatures = !1, l.storeGac = !1)); var B = f(C.Ea) || f(C.ag) || af("gtag.remote_config." + a + ".url", 2), F = f(C.$f) || af("gtag.remote_config." + a + ".dualId", 2); if (B && null != ed) { l._x_19 = B; } F && (l._x_20 = F); h.Ja = k; h.Ia = l; return h
        },
        kl = function (a, b) {
            function c(v) {
                function x(w, y) { for (var A = 0; A < y.length; A++) { var B = y[A]; if (v[B]) { z[w] = v[B]; break } } } var z = m(v);
                x("listPosition", ["list_position"]); x("creative", ["creative_name"]); x("list", ["list_name"]); x("position", ["list_position", "creative_slot"]); return z
            } function d(v) { for (var x = [], z = 0; v && z < v.length; z++)v[z] && x.push(c(v[z])); return x.length ? x : void 0 } function e(v) { return { id: f(C.xb), affiliation: f(C.Wf), revenue: f(C.Ga), tax: f(C.qe), shipping: f(C.pe), coupon: f(C.Xf), list: f(C.Qc) || v } } for (var f = function (v) { return b.getWithConfig(v) }, h = f(C.V), k, l = 0; h && l < h.length && !(k = h[l][C.Qc]); l++); var n = f("custom_map"); if (qb(n)) for (var q =
                0; h && q < h.length; ++q) { var p = h[q], r; for (r in n) n.hasOwnProperty(r) && /^(dimension|metric)\d+$/.test(r) && void 0 != n[r] && ml(p, r, p[n[r]]) } var u = null, t = f(C.Yf); a === C.oa || a === C.Ya ? u = { action: a, Db: e(), jb: d(h) } : a === C.Wa ? u = { action: "add", jb: d(h) } : a === C.Xa ? u = { action: "remove", jb: d(h) } : a === C.Aa ? u = { action: "detail", Db: e(k), jb: d(h) } : a === C.Vb ? u = { action: "impressions", bh: d(h) } : "view_promotion" === a ? u = { action: "promo_view", Gd: d(t) } : "select_content" === a && t && 0 < t.length ? u = { action: "promo_click", Gd: d(t) } : "select_content" === a ? u =
                    { action: "click", Db: { list: f(C.Qc) || k }, jb: d(h) } : a === C.La || "checkout_progress" === a ? u = { action: "checkout", jb: d(h), Db: { step: a === C.La ? 1 : f(C.oe), option: f(C.ne) } } : "set_checkout_option" === a && (u = { action: "checkout_option", Db: { step: f(C.oe), option: f(C.ne) } }); u && (u.Qh = f(C.ja)); return u
        }, xl = {}, il = function (a, b) { var c = xl[a]; xl[a] = m(b); if (!c) return !1; for (var d in b) if (b.hasOwnProperty(d) && b[d] !== c[d]) return !0; for (var e in c) if (c.hasOwnProperty(e) && c[e] !== b[e]) return !0; return !1 }; var yl = !1; function zl() { var a = L; return a.gcq = a.gcq || new Al }
    var Bl = function (a, b, c) { zl().register(a, b, c) }, Cl = function (a, b, c, d) { zl().push("event", [b, a], c, d) }, Dl = function (a, b) { zl().push("config", [a], b) }, El = function (a, b, c, d) { zl().push("get", [a, b], c, d) }, Fl = {}, Gl = function () { this.status = 1; this.containerConfig = {}; this.targetConfig = {}; this.remoteConfig = {}; this.o = null; this.m = !1 }, Hl = function (a, b, c, d, e) { this.type = a; this.C = b; this.R = c || ""; this.m = d; this.o = e }, Al = function () { this.H = {}; this.o = {}; this.m = []; this.C = { AW: !1, UA: !1 } }, Il = function (a, b) {
        var c = ph(b); return a.H[c.containerId] =
            a.H[c.containerId] || new Gl
    }, Jl = function (a, b, c) {
        if (b) {
            var d = ph(b); if (d && 1 === Il(a, b).status) {
                Il(a, b).status = 2; var e = {}; Yi && (e.timeoutId = G.setTimeout(function () { D(38); Ji() }, 3E3)); a.push("require", [e], d.containerId); Fl[d.containerId] = Wa(); if (sh()) { } else {
                    var h =
                        "/gtag/js?id=" + encodeURIComponent(d.containerId) + "&l=dataLayer&cx=c", k = ("http:" != G.location.protocol ? "https:" : "http:") + ("//www.googletagmanager.com" + h), l = sj(c, h) || k; hd(l)
                }
            }
        }
    }, Kl = function (a, b, c, d) {
        if (d.R) {
            var e = Il(a, d.R), f = e.o; if (f) {
                var h = m(c), k = m(e.targetConfig[d.R]), l = m(e.containerConfig), n = m(e.remoteConfig), q = m(a.o), p = af("gtm.uniqueEventId"), r = ph(d.R).prefix, u = Cj(Bj(Dj(Aj(zj(yj(xj(wj(vj(h), k), l), n), q), function () { $i(p, r, "2"); }), function () {
                    $i(p, r, "3");
                }), function (t, v) { a.C[t] = v }), function (t) { return a.C[t] }); try { $i(p, r, "1"); f(d.R, b, d.C, u) } catch (t) { $i(p, r, "4"); }
            }
        }
    }; aa = Al.prototype;
    aa.register = function (a, b, c) {
        var d = Il(this, a); if (3 !== d.status) {
            d.o = b; d.status = 3; if (c) { m(d.remoteConfig, c); d.remoteConfig = c } var e = ph(a), f = Fl[e.containerId]; if (void 0 !== f) {
                var h = L[e.containerId].bootstrap, k = e.prefix.toUpperCase(); L[e.containerId]._spx && (k = k.toLowerCase()); var l = af("gtm.uniqueEventId"), n = k, q = Wa() - h; if (Yi && !Oi[l]) {
                    l !== Ki && (Gi(), Ki = l); var p = n + "." + Math.floor(h - f) +
                        "." + Math.floor(q); Si = Si ? Si + "," + p : "&cl=" + p
                } delete Fl[e.containerId]
            } this.flush()
        }
    }; aa.push = function (a, b, c, d) { var e = Math.floor(Wa() / 1E3); Jl(this, c, b[0][C.Ea] || this.o[C.Ea]); yl && c && Il(this, c).m && (d = !1); this.m.push(new Hl(a, e, c, b, d)); d || this.flush() }; aa.insert = function (a, b, c) { var d = Math.floor(Wa() / 1E3); 0 < this.m.length ? this.m.splice(1, 0, new Hl(a, d, c, b, !1)) : this.m.push(new Hl(a, d, c, b, !1)) };
    aa.flush = function (a) {
        for (var b = this, c = [], d = !1, e = {}; this.m.length;) {
            var f = this.m[0]; if (f.o) yl ? !f.R || Il(this, f.R).m ? (f.o = !1, this.m.push(f)) : c.push(f) : (f.o = !1, this.m.push(f)); else switch (f.type) {
                case "require": if (3 !== Il(this, f.R).status && !a) { yl && this.m.push.apply(this.m, c); return } Yi && G.clearTimeout(f.m[0].timeoutId); break; case "set": Ma(f.m[0], function (r, u) { m(hb(r, u), b.o) }); break; case "config": e.na = {}; Ma(f.m[0], function (r) { return function (u, t) { m(hb(u, t), r.na) } }(e)); var h = !!e.na[C.fc]; delete e.na[C.fc];
                    var k = Il(this, f.R), l = ph(f.R), n = l.containerId === l.id; h || (n ? k.containerConfig = {} : k.targetConfig[f.R] = {}); k.m && h || Kl(this, C.Z, e.na, f); k.m = !0; delete e.na[C.zb]; n ? m(e.na, k.containerConfig) : m(e.na, k.targetConfig[f.R]); yl && (d = !0); break; case "event": e.Rb = {}; Ma(f.m[0], function (r) { return function (u, t) { m(hb(u, t), r.Rb) } }(e)); Kl(this, f.m[1], e.Rb, f); break; case "get": var q = {}, p = (q[C.Ca] = f.m[0], q[C.Ba] = f.m[1], q); Kl(this, C.qa, p, f)
            }this.m.shift(); e = { na: e.na, Rb: e.Rb }
        } yl && (this.m.push.apply(this.m, c), d && this.flush())
    };
    aa.getRemoteConfig = function (a) { return Il(this, a).remoteConfig }; var Ll = function (a, b, c) { var d = { event: b, "gtm.element": a, "gtm.elementClasses": sd(a, "className"), "gtm.elementId": a["for"] || nd(a, "id") || "", "gtm.elementTarget": a.formTarget || sd(a, "target") || "" }; c && (d["gtm.triggers"] = c.join(",")); d["gtm.elementUrl"] = (a.attributes && a.attributes.formaction ? a.formAction : "") || a.action || sd(a, "href") || a.src || a.code || a.codebase || ""; return d }, Ml = function (a) {
        L.hasOwnProperty("autoEventsSettings") || (L.autoEventsSettings = {}); var b = L.autoEventsSettings; b.hasOwnProperty(a) || (b[a] = {});
        return b[a]
    }, Nl = function (a, b, c) { Ml(a)[b] = c }, Ol = function (a, b, c, d) { var e = Ml(a), f = Za(e, b, d); e[b] = c(f) }, Pl = function (a, b, c) { var d = Ml(a); return Za(d, b, c) }; var Ql = !!G.MutationObserver, Rl = void 0, Sl = function (a) { if (!Rl) { var b = function () { var c = I.body; if (c) if (Ql) (new MutationObserver(function () { for (var e = 0; e < Rl.length; e++)J(Rl[e]) })).observe(c, { childList: !0, subtree: !0 }); else { var d = !1; ld(c, "DOMNodeInserted", function () { d || (d = !0, J(function () { d = !1; for (var e = 0; e < Rl.length; e++)J(Rl[e]) })) }) } }; Rl = []; I.body ? b() : J(b) } Rl.push(a) }; var Ul = !1, Vl = []; function Wl() { if (!Ul) { Ul = !0; for (var a = 0; a < Vl.length; a++)J(Vl[a]) } } var Xl = function (a) { Ul ? J(a) : Vl.push(a) }; Object.freeze({ dl: 1, id: 1 }); var Yl = "HA GF G UA AW DC".split(" "), Zl = !1, $l = {}, am = !1; function bm(a, b) { var c = { event: a }; b && (c.eventModel = m(b), b[C.Rc] && (c.eventCallback = b[C.Rc]), b[C.Yb] && (c.eventTimeout = b[C.Yb])); return c } function cm() { Zl = Zl || !L.gtagRegistered, L.gtagRegistered = !0, Zl && (L.addTargetToGroup = function (a) { dm(a, "default") }); return Zl }
    var dm = function (a, b) { b = b.toString().split(","); for (var c = 0; c < b.length; c++)$l[b[c]] = $l[b[c]] || [], $l[b[c]].push(a) }, em = function (a) { Ma($l, function (b, c) { var d = Ga(c, a); 0 <= d && c.splice(d, 1) }) };
    var fm = {
        config: function (a) { var b; if (2 > a.length || !g(a[1])) return; var c = {}; if (2 < a.length) { if (void 0 != a[2] && !qb(a[2]) || 3 < a.length) return; c = a[2] } var d = ph(a[1]); if (!d) return; em(d.id); dm(d.id, c[C.Vc] || "default"); delete c[C.Vc]; am || D(43); Ve(); if (cm() && -1 !== Ga(Yl, d.prefix)) { "G" === d.prefix && (c[C.zb] = !0); Dl(c, d.id); return } df("gtag.targets." + d.id, void 0); df("gtag.targets." + d.id, m(c)); var e = {}; e[C.Na] = d.id; b = bm(C.Z, e); return b }, consent: function (a) {
            function b() {
                cm() &&
                    m(a[2], { subcommand: a[1] })
            } if (3 === a.length) { D(39); var c = Ve(), d = a[1]; "default" === d ? (b(), Md(a[2])) : "update" === d && (b(), Nd(a[2], c)) }
        }, event: function (a) {
            var b = a[1]; if (!(2 > a.length) && g(b)) {
                var c; if (2 < a.length) { if (!qb(a[2]) && void 0 != a[2] || 3 < a.length) return; c = a[2] } var d = bm(b, c); var e; var f = c && c[C.Na]; void 0 === f && (f = af(C.Na, 2), void 0 === f && (f = "default")); if (g(f) || Fa(f)) {
                    for (var h = f.toString().replace(/\s+/g, "").split(","), k = [], l = 0; l < h.length; l++)0 <= h[l].indexOf("-") ? k.push(h[l]) :
                        k = k.concat($l[h[l]] || []); e = rh(k)
                } else e = void 0; var n = e; if (!n) return; var q = cm(); Ve(); for (var p = [], r = 0; q && r < n.length; r++) { var u = n[r]; if (-1 !== Ga(Yl, u.prefix)) { var t = m(c); "G" === u.prefix && (t[C.zb] = !0); Cl(b, t, u.id) } p.push(u.id) } d.eventModel = d.eventModel || {}; 0 < n.length ? d.eventModel[C.Na] = p.join() : delete d.eventModel[C.Na]; am || D(43); return d
            }
        }, get: function (a) {
            D(53); if (4 !== a.length || !g(a[1]) || !g(a[2]) || !Ca(a[3])) return; var b = ph(a[1]), c = String(a[2]),
                d = a[3]; if (!b) return; am || D(43); if (!cm() || -1 === Ga(Yl, b.prefix)) return; Ve(); var e = {}; Vh(m((e[C.Ca] = c, e[C.Ba] = d, e))); El(c, function (f) { J(function () { return d(f) }) }, b.id);
        }, js: function (a) { if (2 == a.length && a[1].getTime) return am = !0, cm(), { event: "gtm.js", "gtm.start": a[1].getTime() } }, policy: function () { }, set: function (a) {
            var b; 2 == a.length && qb(a[1]) ? b = m(a[1]) : 3 == a.length && g(a[1]) && (b = {}, qb(a[2]) || Fa(a[2]) ? b[a[1]] = m(a[2]) : b[a[1]] = a[2]); if (b) {
                if (Ve(), cm()) {
                    m(b);
                    var c = m(b); zl().push("set", [c])
                } b._clear = !0; return b
            }
        }
    }, gm = { policy: !0 }; var hm = function (a, b) { var c = a.hide; if (c && void 0 !== c[b] && c.end) { c[b] = !1; var d = !0, e; for (e in c) if (c.hasOwnProperty(e) && !0 === c[e]) { d = !1; break } d && (c.end(), c.end = null) } }, jm = function (a) { var b = im(), c = b && b.hide; c && c.end && (c[a] = !0) }; var Cm = function (a) { if (Bm(a)) return a; this.m = a }; Cm.prototype.$g = function () { return this.m }; var Bm = function (a) { return !a || "object" !== lb(a) || qb(a) ? !1 : "getUntrustedUpdateValue" in a }; Cm.prototype.getUntrustedUpdateValue = Cm.prototype.$g; var Dm = [], Em = !1, Fm = !1, Gm = !1, Hm = function (a) { return G["dataLayer"].push(a) }, Im = function (a) { var b = L["dataLayer"], c = b ? b.subscribers : 1, d = 0; return function () { ++d === c && a() } };
    function Jm(a) { var b = a._clear; Ma(a, function (d, e) { "_clear" !== d && (b && df(d, void 0), df(d, e)) }); Qe || (Qe = a["gtm.start"]); var c = a["gtm.uniqueEventId"]; if (!a.event) return !1; c || (c = Ve(), a["gtm.uniqueEventId"] = c, df("gtm.uniqueEventId", c)); return qj(a) } function Km() { var a = Dm[0]; if (null == a || "object" !== typeof a) return !1; if (a.event) return !0; if (Na(a)) { var b = a[0]; if ("config" === b || "event" === b || "js" === b) return !0 } return !1 }
    function Lm() {
        for (var a = !1; !Gm && 0 < Dm.length;) {
            var b = !1; b = !1; b = !0; if (b && !Fm && Km()) {
                var c = {}; Dm.unshift((c.event =
                    "gtm.init", c)); Fm = !0
            } var d = !1; d = !1; if (d && !Em && Km()) { var e = {}; Dm.unshift((e.event = "gtm.init_consent", e)); Em = !0 } Gm = !0; delete Ye.eventModel; $e(); var f = Dm.shift(); if (null != f) {
                var h = Bm(f);
                if (h) { var k = f; f = Bm(k) ? k.getUntrustedUpdateValue() : void 0; for (var l = ["gtm.allowlist", "gtm.blocklist", "gtm.whitelist", "gtm.blacklist", "tagTypeBlacklist"], n = 0; n < l.length; n++) { var q = l[n], p = af(q, 1); if (Fa(p) || qb(p)) p = m(p); Ze[q] = p } } try {
                    if (Ca(f)) try { f.call(bf) } catch (y) { } else if (Fa(f)) { var r = f; if (g(r[0])) { var u = r[0].split("."), t = u.pop(), v = r.slice(1), x = af(u.join("."), 2); if (void 0 !== x && null !== x) try { x[t].apply(x, v) } catch (y) { } } } else {
                        if (Na(f)) {
                            a: {
                                var z = f; if (z.length && g(z[0])) {
                                    var w = fm[z[0]]; if (w && (!h || !gm[z[0]])) {
                                        f =
                                            w(z); break a
                                    }
                                } f = void 0
                            } if (!f) { Gm = !1; continue }
                        } a = Jm(f) || a
                    }
                } finally { h && $e(!0) }
            } Gm = !1
        } return !a
    } function Mm() { var a = Lm(); try { hm(G["dataLayer"], Ie.D) } catch (b) { } return a }
    var Om = function () {
        var a = fd("dataLayer", []), b = fd("google_tag_manager", {}); b = b["dataLayer"] = b["dataLayer"] || {}; fi(function () { b.gtmDom || (b.gtmDom = !0, a.push({ event: "gtm.dom" })) }); Xl(function () { b.gtmLoad || (b.gtmLoad = !0, a.push({ event: "gtm.load" })) }); b.subscribers = (b.subscribers || 0) + 1; var c = a.push; a.push = function () {
            var e; if (0 < L.SANDBOXED_JS_SEMAPHORE) { e = []; for (var f = 0; f < arguments.length; f++)e[f] = new Cm(arguments[f]) } else e = [].slice.call(arguments, 0); var h = c.apply(a, e); Dm.push.apply(Dm, e); if (300 <
                this.length) for (D(4); 300 < this.length;)this.shift(); var k = "boolean" !== typeof h || h; return Lm() && k
        }; var d = a.slice(0); Dm.push.apply(Dm, d); Nm() && J(Mm)
    }, Nm = function () { var a = !0; return a }; var Pm = {}; Pm.hc = new String("undefined");
    var Qm = function (a) { this.m = function (b) { for (var c = [], d = 0; d < a.length; d++)c.push(a[d] === Pm.hc ? b : a[d]); return c.join("") } }; Qm.prototype.toString = function () { return this.m("undefined") }; Qm.prototype.valueOf = Qm.prototype.toString; Pm.zg = Qm; Pm.jd = {}; Pm.Ng = function (a) { return new Qm(a) }; var Rm = {}; Pm.yh = function (a, b) { var c = Ve(); Rm[c] = [a, b]; return c }; Pm.Xe = function (a) { var b = a ? 0 : 1; return function (c) { var d = Rm[c]; if (d && "function" === typeof d[b]) d[b](); Rm[c] = void 0 } }; Pm.fh = function (a) {
        for (var b = !1, c = !1, d = 2; d < a.length; d++)b =
            b || 8 === a[d], c = c || 16 === a[d]; return b && c
    }; Pm.th = function (a) { if (a === Pm.hc) return a; var b = Ve(); Pm.jd[b] = a; return 'google_tag_manager["' + Ie.D + '"].macro(' + b + ")" }; Pm.ph = function (a, b, c) { a instanceof Pm.zg && (a = a.m(Pm.yh(b, c)), b = Ba); return { ah: a, onSuccess: b } }; var Sm = ["input", "select", "textarea"], Tm = ["button", "hidden", "image", "reset", "submit"], Um = function (a) { var b = a.tagName.toLowerCase(); return !Ha(Sm, function (c) { return c === b }) || "input" === b && Ha(Tm, function (c) { return c === a.type.toLowerCase() }) ? !1 : !0 }, Vm = function (a) { return a.form ? a.form.tagName ? a.form : I.getElementById(a.form) : qd(a, ["form"], 100) }, Wm = function (a, b, c) {
        if (!a.elements) return 0; for (var d = b.getAttribute(c), e = 0, f = 1; e < a.elements.length; e++) {
            var h = a.elements[e]; if (Um(h)) {
                if (h.getAttribute(c) === d) return f;
                f++
            }
        } return 0
    }; var gn = G.clearTimeout, hn = G.setTimeout, O = function (a, b, c) { if (sh()) { b && J(b) } else return hd(a, b, c) }, jn = function () { return new Date }, kn = function () { return G.location.href }, ln = function (a) { return je(le(a), "fragment") }, mn = function (a) { return ke(le(a)) }, nn = function (a, b) { return af(a, b || 2) }, on = function (a, b, c) { var d; b ? (a.eventCallback = b, c && (a.eventTimeout = c), d = Hm(a)) : d = Hm(a); return d }, pn = function (a, b) { G[a] = b }, W = function (a, b, c) {
        b &&
            (void 0 === G[a] || c && !G[a]) && (G[a] = b); return G[a]
    }, qn = function (a, b, c) { return tf(a, b, void 0 === c ? !0 : !!c) }, rn = function (a, b, c) { return 0 === Ff(a, b, c) }, sn = function (a, b) { if (sh()) { b && J(b) } else jd(a, b) }, tn = function (a) { return !!Pl(a, "init", !1) }, un = function (a) { Nl(a, "init", !0) }, vn = function (a) { var b = Oe + "?id=" + encodeURIComponent(a) + "&l=dataLayer"; O(uh("https://", "http://", b)) }, wn = function (a, b, c) { Yi && (rb(a) || aj(c, b, a)) }; var xn = Pm.ph; function Un(a, b) { a = String(a); b = String(b); var c = a.length - b.length; return 0 <= c && a.indexOf(b, c) == c } var Vn = new Ka; function Wn(a, b, c) { var d = c ? "i" : void 0; try { var e = String(b) + d, f = Vn.get(e); f || (f = new RegExp(b, d), Vn.set(e, f)); return f.test(a) } catch (h) { return !1 } }
    function Xn(a, b) { function c(h) { var k = le(h), l = je(k, "protocol"), n = je(k, "host", !0), q = je(k, "port"), p = je(k, "path").toLowerCase().replace(/\/$/, ""); if (void 0 === l || "http" == l && "80" == q || "https" == l && "443" == q) l = "web", q = "default"; return [l, n, q, p] } for (var d = c(String(a)), e = c(String(b)), f = 0; f < d.length; f++)if (d[f] !== e[f]) return !1; return !0 }
    function Yn(a) { return Zn(a) ? 1 : 0 }
    function Zn(a) {
        var b = a.arg0, c = a.arg1; if (a.any_of && Fa(c)) { for (var d = 0; d < c.length; d++) { var e = m(a, {}); m({ arg1: c[d], any_of: void 0 }, e); if (Yn(e)) return !0 } return !1 } switch (a["function"]) {
            case "_cn": return 0 <= String(b).indexOf(String(c)); case "_css": var f; a: { if (b) { var h = ["matches", "webkitMatchesSelector", "mozMatchesSelector", "msMatchesSelector", "oMatchesSelector"]; try { for (var k = 0; k < h.length; k++)if (b[h[k]]) { f = b[h[k]](c); break a } } catch (n) { } } f = !1 } return f; case "_ew": return Un(b, c); case "_eq": return String(b) ==
                String(c); case "_ge": return Number(b) >= Number(c); case "_gt": return Number(b) > Number(c); case "_lc": var l; l = String(b).split(","); return 0 <= Ga(l, String(c)); case "_le": return Number(b) <= Number(c); case "_lt": return Number(b) < Number(c); case "_re": return Wn(b, c, a.ignore_case); case "_sw": return 0 == String(b).indexOf(String(c)); case "_um": return Xn(b, c)
        }return !1
    }; var $n = encodeURI, X = encodeURIComponent, ao = kd; var bo = function (a, b) { if (!a) return !1; var c = je(le(a), "host"); if (!c) return !1; for (var d = 0; b && d < b.length; d++) { var e = b[d] && b[d].toLowerCase(); if (e) { var f = c.length - e.length; 0 < f && "." != e.charAt(0) && (f--, e = "." + e); if (0 <= f && c.indexOf(e, f) == f) return !0 } } return !1 };
    var co = function (a, b, c) { for (var d = {}, e = !1, f = 0; a && f < a.length; f++)a[f] && a[f].hasOwnProperty(b) && a[f].hasOwnProperty(c) && (d[a[f][b]] = a[f][c], e = !0); return e ? d : null }; function Jp() { return G.gaGlobal = G.gaGlobal || {} } var Kp = function () { var a = Jp(); a.hid = a.hid || Ia(); return a.hid }, Lp = function (a, b) { var c = Jp(); if (void 0 == c.vid || b && !c.from_cookie) c.vid = a, c.from_cookie = b }; var vq = window, wq = document, xq = function (a) { var b = vq._gaUserPrefs; if (b && b.ioo && b.ioo() || a && !0 === vq["ga-disable-" + a]) return !0; try { var c = vq.external; if (c && c._gaUserPrefs && "oo" == c._gaUserPrefs) return !0 } catch (f) { } for (var d = of("AMP_TOKEN", String(wq.cookie), !0), e = 0; e < d.length; e++)if ("$OPT_OUT" == d[e]) return !0; return wq.getElementById("__gaOptOutExtension") ? !0 : !1 }; var yq = {}; function Aq(a) { delete a.eventModel[C.zb]; Cq(a.eventModel) } var Cq = function (a) { Ma(a, function (c) { "_" === c.charAt(0) && delete a[c] }); var b = a[C.sa] || {}; Ma(b, function (c) { "_" === c.charAt(0) && delete b[c] }) }; var Fq = function (a, b, c) { Cl(b, c, a) }, Gq = function (a, b, c) { Cl(b, c, a, !0) }, Mq = function (a, b) { };
    function Hq(a, b) { } var Z = { g: {} };


    Z.g.e = ["google"], function () { (function (a) { Z.__e = a; Z.__e.h = "e"; Z.__e.i = !0; Z.__e.priorityOverride = 0 })(function (a) { var b = String(gf(a.vtp_gtmEventId, "event")); return b }) }();

    Z.g.v = ["google"], function () { (function (a) { Z.__v = a; Z.__v.h = "v"; Z.__v.i = !0; Z.__v.priorityOverride = 0 })(function (a) { var b = a.vtp_name; if (!b || !b.replace) return !1; var c = nn(b.replace(/\\\./g, "."), a.vtp_dataLayerVersion || 1), d = void 0 !== c ? c : a.vtp_defaultValue; wn(d, "v", a.vtp_gtmEventId); return d }) }();

    Z.g.rep = ["google"], function () { (function (a) { Z.__rep = a; Z.__rep.h = "rep"; Z.__rep.i = !0; Z.__rep.priorityOverride = 0 })(function (a) { var b; switch (ph(a.vtp_containerId).prefix) { case "AW": b = Bk; break; case "DC": b = Ok; break; case "GF": b = Tk; break; case "HA": b = Yk; break; case "UA": b = rl; break; default: J(a.vtp_gtmOnFailure); return }J(a.vtp_gtmOnSuccess); Bl(a.vtp_containerId, b, a.vtp_remoteConfig || {}) }) }();



    Z.g.cid = ["google"], function () { (function (a) { Z.__cid = a; Z.__cid.h = "cid"; Z.__cid.i = !0; Z.__cid.priorityOverride = 0 })(function () { return Ie.D }) }();




    Z.g.gtagaw = ["google"], function () { (function (a) { Z.__gtagaw = a; Z.__gtagaw.h = "gtagaw"; Z.__gtagaw.i = !0; Z.__gtagaw.priorityOverride = 0 })(function (a) { var b = "AW-" + String(a.vtp_conversionId); Cl(String(a.vtp_eventName), a.vtp_eventData || {}, a.vtp_conversionLabel ? b + "/" + String(a.vtp_conversionLabel) : b); J(a.vtp_gtmOnSuccess) }) }();

    Z.g.get = ["google"], function () { (function (a) { Z.__get = a; Z.__get.h = "get"; Z.__get.i = !0; Z.__get.priorityOverride = 0 })(function (a) { var b = a.vtp_settings; (a.vtp_deferrable ? Gq : Fq)(String(b.streamId), String(a.vtp_eventName), b.eventParameters || {}); a.vtp_gtmOnSuccess() }) }();


    Z.g.gtagfl = [], function () { (function (a) { Z.__gtagfl = a; Z.__gtagfl.h = "gtagfl"; Z.__gtagfl.i = !0; Z.__gtagfl.priorityOverride = 0 })(function (a) { J(a.vtp_gtmOnSuccess) }) }();





    Z.g.gtagua = ["google"], function () { (function (a) { Z.__gtagua = a; Z.__gtagua.h = "gtagua"; Z.__gtagua.i = !0; Z.__gtagua.priorityOverride = 0 })(function (a) { J(a.vtp_gtmOnSuccess) }) }();


    var Nq = {}; Nq.macro = function (a) { if (Pm.jd.hasOwnProperty(a)) return Pm.jd[a] }, Nq.onHtmlSuccess = Pm.Xe(!0), Nq.onHtmlFailure = Pm.Xe(!1); Nq.dataLayer = bf; Nq.callback = function (a) { Te.hasOwnProperty(a) && Ca(Te[a]) && Te[a](); delete Te[a] }; Nq.bootstrap = 0; Nq._spx = !1; function Oq() { L[Ie.D] = Nq; cb(Ue, Z.g); $b = $b || Pm; ac = lc }
    function Pq() {
        td.o().o(); L = G.google_tag_manager = G.google_tag_manager || {}; kk(); Ag.enable_gbraid_cookie_write = !0; if (L[Ie.D]) { var a = L.zones; a && a.unregisterChild(Ie.D); } else {
            for (var b = data.resource || {}, c = b.macros || [], d = 0; d < c.length; d++)Tb.push(c[d]); for (var e = b.tags || [], f = 0; f < e.length; f++)Wb.push(e[f]); for (var h = b.predicates || [], k = 0; k < h.length; k++)Vb.push(h[k]); for (var l = b.rules || [], n = 0; n < l.length; n++) { for (var q = l[n], p = {}, r = 0; r < q.length; r++)p[q[r][0]] = Array.prototype.slice.call(q[r], 1); Ub.push(p) } Yb = Z; Zb = Yn; Oq(); Om(); ai = !1; bi = 0; if ("interactive" == I.readyState && !I.createEventObject || "complete" == I.readyState) di();
            else { ld(I, "DOMContentLoaded", di); ld(I, "readystatechange", di); if (I.createEventObject && I.documentElement.doScroll) { var u = !0; try { u = !G.frameElement } catch (z) { } u && ei() } ld(G, "load", di) } Ul = !1; "complete" === I.readyState ? Wl() : ld(G, "load", Wl); a: {
                if (!Yi) break a; G.setInterval(Xi,
                    864E5);
            } Re = (new Date).getTime(); Nq.bootstrap = Re;
        }
    }
    (function (a) {
        if (!G["__TAGGY_INSTALLED"]) { var b = !1; if (I.referrer) { var c = le(I.referrer); b = "cct.google" === ie(c, "host") } if (!b) { var d = tf("googTaggyReferrer"); b = d.length && d[0].length } b && (G["__TAGGY_INSTALLED"] = !0, hd("https://cct.google/taggy/agent.js")) } var f = function () { var p = G["google.tagmanager.debugui2.queue"]; p || (p = [], G["google.tagmanager.debugui2.queue"] = p, hd("https://www.googletagmanager.com/debug/bootstrap")); return p }, h = "x" === je(G.location, "query", !1, void 0, "gtm_debug"); if (!h && I.referrer) { var k = le(I.referrer); h = "tagassistant.google.com" === ie(k, "host") } if (!h) { var l = tf("__TAG_ASSISTANT"); h = l.length && l[0].length } G.__TAG_ASSISTANT_API && (h = !0); if (h && ed) {
            var n = f(), q = {
                messageType: "CONTAINER_STARTING",
                data: { scriptSource: ed, resume: function () { a() }, containerProduct: "GTM" }
            }; q.data.containerProduct = "OGT"; Ie.Df && (q.data.initialPublish = !0); n.push(q)
        } else a()
    })(Pq);

})()