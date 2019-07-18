! function(t, e) { if ("object" == typeof exports && "object" == typeof module) module.exports = e();
    else if ("function" == typeof define && define.amd) define([], e);
    else { var n = e(); for (var r in n)("object" == typeof exports ? exports : t)[r] = n[r] } }(this, function() {
    return function(t) {
        function e(r) { if (n[r]) return n[r].exports; var o = n[r] = { exports: {}, id: r, loaded: !1 }; return t[r].call(o.exports, o, o.exports, e), o.loaded = !0, o.exports } var n = {}; return e.m = t, e.c = n, e.p = "", e(0) }([function(t, e, n) { t.exports = n(1) }, function(t, e, n) { "use strict"; var r = n(2),
            o = window && window._rollbarConfig,
            i = o && o.globalAlias || "Rollbar",
            a = window && window[i] && "function" == typeof window[i].shimId && void 0 !== window[i].shimId(); if (window && !window._rollbarStartTime && (window._rollbarStartTime = (new Date).getTime()), !a && o) { var s = new r(o);
            window[i] = s } else window.rollbar = r, window._rollbarDidLoad = !0;
        t.exports = r }, function(t, e, n) { "use strict";

        function r(t, e) { this.options = c.extend(!0, _, t); var n = new l(this.options, h, d);
            this.client = e || new u(this.options, n, p, "browser"), i(this.client.notifier), a(this.client.queue), (this.options.captureUncaught || this.options.handleUncaughtExceptions) && (f.captureUncaughtExceptions(window, this), f.wrapGlobals(window, this)), (this.options.captureUnhandledRejections || this.options.handleUnhandledRejections) && f.captureUnhandledRejections(window, this), this.instrumenter = new b(this.options, this.client.telemeter, this, window, document), this.instrumenter.instrument() }

        function o(t) { var e = "Rollbar is not initialized";
            p.error(e), t && t(new Error(e)) }

        function i(t) { t.addTransform(m.handleItemWithError).addTransform(m.ensureItemHasSomethingToSay).addTransform(m.addBaseInfo).addTransform(m.addRequestInfo(window)).addTransform(m.addClientInfo(window)).addTransform(m.addPluginInfo(window)).addTransform(m.addBody).addTransform(v.addMessageWithError).addTransform(v.addTelemetryData).addTransform(m.scrubPayload).addTransform(m.userTransform).addTransform(v.itemToPayload) }

        function a(t) { t.addPredicate(g.checkIgnore).addPredicate(g.userCheckIgnore).addPredicate(g.urlIsNotBlacklisted).addPredicate(g.urlIsWhitelisted).addPredicate(g.messageIsIgnored) }

        function s(t) { for (var e = 0, n = t.length; e < n; ++e)
                if (c.isFunction(t[e])) return t[e] } var u = n(3),
            c = n(6),
            l = n(11),
            p = n(13),
            f = n(16),
            h = n(17),
            d = n(18),
            m = n(19),
            v = n(23),
            g = n(24),
            y = n(20),
            b = n(25),
            w = null;
        r.init = function(t, e) { return w ? w.global(t).configure(t) : w = new r(t, e) }, r.prototype.global = function(t) { return this.client.global(t), this }, r.global = function(t) { return w ? w.global(t) : void o() }, r.prototype.configure = function(t, e) { var n = this.options,
                r = {}; return e && (r = { payload: e }), this.options = c.extend(!0, {}, n, t, r), this.client.configure(t, e), this.instrumenter.configure(t), this }, r.configure = function(t, e) { return w ? w.configure(t, e) : void o() }, r.prototype.lastError = function() { return this.client.lastError }, r.lastError = function() { return w ? w.lastError() : void o() }, r.prototype.log = function() { var t = this._createItem(arguments),
                e = t.uuid; return this.client.log(t), { uuid: e } }, r.log = function() { if (w) return w.log.apply(w, arguments); var t = s(arguments);
            o(t) }, r.prototype.debug = function() { var t = this._createItem(arguments),
                e = t.uuid; return this.client.debug(t), { uuid: e } }, r.debug = function() { if (w) return w.debug.apply(w, arguments); var t = s(arguments);
            o(t) }, r.prototype.info = function() { var t = this._createItem(arguments),
                e = t.uuid; return this.client.info(t), { uuid: e } }, r.info = function() { if (w) return w.info.apply(w, arguments); var t = s(arguments);
            o(t) }, r.prototype.warn = function() { var t = this._createItem(arguments),
                e = t.uuid; return this.client.warn(t), { uuid: e } }, r.warn = function() { if (w) return w.warn.apply(w, arguments); var t = s(arguments);
            o(t) }, r.prototype.warning = function() { var t = this._createItem(arguments),
                e = t.uuid; return this.client.warning(t), { uuid: e } }, r.warning = function() { if (w) return w.warning.apply(w, arguments); var t = s(arguments);
            o(t) }, r.prototype.error = function() { var t = this._createItem(arguments),
                e = t.uuid; return this.client.error(t), { uuid: e } }, r.error = function() { if (w) return w.error.apply(w, arguments); var t = s(arguments);
            o(t) }, r.prototype.critical = function() { var t = this._createItem(arguments),
                e = t.uuid; return this.client.critical(t), { uuid: e } }, r.critical = function() { if (w) return w.critical.apply(w, arguments); var t = s(arguments);
            o(t) }, r.prototype.handleUncaughtException = function(t, e, n, r, o, i) { var a, s = c.makeUnhandledStackInfo(t, e, n, r, o, "onerror", "uncaught exception", y);
            c.isError(o) ? (a = this._createItem([t, o, i]), a._unhandledStackInfo = s) : c.isError(e) ? (a = this._createItem([t, e, i]), a._unhandledStackInfo = s) : (a = this._createItem([t, i]), a.stackInfo = s), a.level = this.options.uncaughtErrorLevel, a._isUncaught = !0, this.client.log(a) }, r.prototype.handleUnhandledRejection = function(t, e) { var n = "unhandled rejection was null or undefined!";
            n = t ? t.message || String(t) : n; var r, o = t && t._rollbarContext || e && e._rollbarContext;
            c.isError(t) ? r = this._createItem([n, t, o]) : (r = this._createItem([n, t, o]), r.stackInfo = c.makeUnhandledStackInfo(n, "", 0, 0, null, "unhandledrejection", "", y)), r.level = this.options.uncaughtErrorLevel, r._isUncaught = !0, r._originalArgs = r._originalArgs || [], r._originalArgs.push(e), this.client.log(r) }, r.prototype.wrap = function(t, e, n) { try { var r; if (r = c.isFunction(e) ? e : function() { return e || {} }, !c.isFunction(t)) return t; if (t._isWrap) return t; if (!t._rollbar_wrapped && (t._rollbar_wrapped = function() { n && c.isFunction(n) && n.apply(this, arguments); try { return t.apply(this, arguments) } catch (n) { var e = n; throw c.isType(e, "string") && (e = new String(e)), e._rollbarContext = r() || {}, e._rollbarContext._wrappedSource = t.toString(), window._rollbarWrappedError = e, e } }, t._rollbar_wrapped._isWrap = !0, t.hasOwnProperty))
                    for (var o in t) t.hasOwnProperty(o) && (t._rollbar_wrapped[o] = t[o]); return t._rollbar_wrapped } catch (e) { return t } }, r.wrap = function(t, e) { return w ? w.wrap(t, e) : void o() }, r.prototype.captureEvent = function(t, e) { return this.client.captureEvent(t, e) }, r.captureEvent = function(t, e) { return w ? w.captureEvent(t, e) : void o() }, r.prototype.captureDomContentLoaded = function(t, e) { return e || (e = new Date), this.client.captureDomContentLoaded(e) }, r.prototype.captureLoad = function(t, e) { return e || (e = new Date), this.client.captureLoad(e) }, r.prototype._createItem = function(t) { return c.createItem(t, p, this) }; var _ = { version: "2.2.6", scrubFields: ["pw", "pass", "passwd", "password", "secret", "confirm_password", "confirmPassword", "password_confirmation", "passwordConfirmation", "access_token", "accessToken", "secret_key", "secretKey", "secretToken"], logLevel: "debug", reportLevel: "debug", uncaughtErrorLevel: "error", endpoint: "api.rollbar.com/api/1/", verbose: !1, enabled: !0 };
        t.exports = r }, function(t, e, n) { "use strict";

        function r(t, e, n, o) { this.options = u.extend(!0, {}, t), this.logger = n, r.rateLimiter.setPlatformOptions(o, this.options), this.queue = new i(r.rateLimiter, e, n, this.options), this.notifier = new a(this.queue, this.options), this.telemeter = new s(this.options), this.lastError = null } var o = n(4),
            i = n(5),
            a = n(9),
            s = n(10),
            u = n(6),
            c = { maxItems: 0, itemsPerMinute: 60 };
        r.rateLimiter = new o(c), r.prototype.global = function(t) { return r.rateLimiter.configureGlobal(t), this }, r.prototype.configure = function(t, e) { this.notifier && this.notifier.configure(t), this.telemeter && this.telemeter.configure(t); var n = this.options,
                r = {}; return e && (r = { payload: e }), this.options = u.extend(!0, {}, n, t, r), this }, r.prototype.log = function(t) { var e = this._defaultLogLevel(); return this._log(e, t) }, r.prototype.debug = function(t) { this._log("debug", t) }, r.prototype.info = function(t) { this._log("info", t) }, r.prototype.warn = function(t) { this._log("warning", t) }, r.prototype.warning = function(t) { this._log("warning", t) }, r.prototype.error = function(t) { this._log("error", t) }, r.prototype.critical = function(t) { this._log("critical", t) }, r.prototype.wait = function(t) { this.queue.wait(t) }, r.prototype.captureEvent = function(t, e) { return this.telemeter.captureEvent(t, e) }, r.prototype.captureDomContentLoaded = function(t) { return this.telemeter.captureDomContentLoaded(t) }, r.prototype.captureLoad = function(t) { return this.telemeter.captureLoad(t) }, r.prototype._log = function(t, e) { if (!this._sameAsLastError(e)) try { var n = null;
                e.callback && (n = e.callback, delete e.callback), e.level = e.level || t, e.telemetryEvents = this.telemeter.copyEvents(), this.telemeter._captureRollbarItem(e), this.notifier.log(e, n) } catch (t) { this.logger.error(t) } }, r.prototype._defaultLogLevel = function() { return this.options.logLevel || "debug" }, r.prototype._sameAsLastError = function(t) { return !(!this.lastError || this.lastError !== t.err) || (this.lastError = t.err, !1) }, t.exports = r }, function(t, e) { "use strict";

        function n(t) { this.startTime = (new Date).getTime(), this.counter = 0, this.perMinCounter = 0, this.platform = null, this.platformOptions = {}, this.configureGlobal(t) }

        function r(t, e, n) { return !t.ignoreRateLimit && e >= 1 && n >= e }

        function o(t, e, n, r, o) { var a = null; return n && (n = new Error(n)), n || r || (a = i(t, e, o)), { error: n, shouldSend: r, payload: a } }

        function i(t, e, n) { var r = e.environment || e.payload && e.payload.environment,
                o = { body: { message: { body: "maxItems has been hit. Ignoring errors until reset.", extra: { maxItems: n } } }, language: "javascript", environment: r, notifier: { version: e.notifier && e.notifier.version || e.version } }; return "browser" === t ? (o.platform = "browser", o.framework = "browser-js", o.notifier.name = "rollbar-browser-js") : "server" === t && (o.framework = e.framework || "node-js", o.notifier.name = e.notifier.name), o }
        n.globalSettings = { startTime: (new Date).getTime(), maxItems: void 0, itemsPerMinute: void 0 }, n.prototype.configureGlobal = function(t) { void 0 !== t.startTime && (n.globalSettings.startTime = t.startTime), void 0 !== t.maxItems && (n.globalSettings.maxItems = t.maxItems), void 0 !== t.itemsPerMinute && (n.globalSettings.itemsPerMinute = t.itemsPerMinute) }, n.prototype.shouldSend = function(t, e) { e = e || (new Date).getTime(), e - this.startTime >= 6e4 && (this.startTime = e, this.perMinCounter = 0); var i = n.globalSettings.maxItems,
                a = n.globalSettings.itemsPerMinute; if (r(t, i, this.counter)) return o(this.platform, this.platformOptions, i + " max items reached", !1); if (r(t, a, this.perMinCounter)) return o(this.platform, this.platformOptions, a + " items per minute reached", !1);
            this.counter++, this.perMinCounter++; var s = !r(t, i, this.counter); return o(this.platform, this.platformOptions, null, s, i) }, n.prototype.setPlatformOptions = function(t, e) { this.platform = t, this.platformOptions = e }, t.exports = n }, function(t, e, n) { "use strict";

        function r(t, e, n, r) { this.rateLimiter = t, this.api = e, this.logger = n, this.options = r, this.predicates = [], this.pendingItems = [], this.pendingRequests = [], this.retryQueue = [], this.retryHandle = null, this.waitCallback = null, this.waitIntervalID = null } var o = n(6);
        r.prototype.configure = function(t) { this.api && this.api.configure(t); var e = this.options; return this.options = o.extend(!0, {}, e, t), this }, r.prototype.addPredicate = function(t) { return o.isFunction(t) && this.predicates.push(t), this }, r.prototype.addPendingItem = function(t) { this.pendingItems.push(t) }, r.prototype.removePendingItem = function(t) { var e = this.pendingItems.indexOf(t);
            e !== -1 && this.pendingItems.splice(e, 1) }, r.prototype.addItem = function(t, e, n, r) { e && o.isFunction(e) || (e = function() {}); var i = this._applyPredicates(t); if (i.stop) return this.removePendingItem(r), void e(i.err);
            this._maybeLog(t, n), this.removePendingItem(r), this.pendingRequests.push(t); try { this._makeApiRequest(t, function(n, r) { this._dequeuePendingRequest(t), e(n, r) }.bind(this)) } catch (n) { this._dequeuePendingRequest(t), e(n) } }, r.prototype.wait = function(t) { o.isFunction(t) && (this.waitCallback = t, this._maybeCallWait() || (this.waitIntervalID && (this.waitIntervalID = clearInterval(this.waitIntervalID)), this.waitIntervalID = setInterval(function() { this._maybeCallWait() }.bind(this), 500))) }, r.prototype._applyPredicates = function(t) { for (var e = null, n = 0, r = this.predicates.length; n < r; n++)
                if (e = this.predicates[n](t, this.options), !e || void 0 !== e.err) return { stop: !0, err: e.err };
            return { stop: !1, err: null } }, r.prototype._makeApiRequest = function(t, e) { var n = this.rateLimiter.shouldSend(t);
            n.shouldSend ? this.api.postItem(t, function(n, r) { n ? this._maybeRetry(n, t, e) : e(n, r) }.bind(this)) : n.error ? e(n.error) : this.api.postItem(n.payload, e) }; var i = ["ECONNRESET", "ENOTFOUND", "ESOCKETTIMEDOUT", "ETIMEDOUT", "ECONNREFUSED", "EHOSTUNREACH", "EPIPE", "EAI_AGAIN"];
        r.prototype._maybeRetry = function(t, e, n) { var r = !1; if (this.options.retryInterval)
                for (var o = 0, a = i.length; o < a; o++)
                    if (t.code === i[o]) { r = !0; break }
            r ? this._retryApiRequest(e, n) : n(t) }, r.prototype._retryApiRequest = function(t, e) { this.retryQueue.push({ item: t, callback: e }), this.retryHandle || (this.retryHandle = setInterval(function() { for (; this.retryQueue.length;) { var t = this.retryQueue.shift();
                    this._makeApiRequest(t.item, t.callback) } }.bind(this), this.options.retryInterval)) }, r.prototype._dequeuePendingRequest = function(t) { var e = this.pendingRequests.indexOf(t);
            e !== -1 && (this.pendingRequests.splice(e, 1), this._maybeCallWait()) }, r.prototype._maybeLog = function(t, e) { if (this.logger && this.options.verbose) { var n = e; if (n = n || o.get(t, "body.trace.exception.message"), n = n || o.get(t, "body.trace_chain.0.exception.message")) return void this.logger.error(n);
                n = o.get(t, "body.message.body"), n && this.logger.log(n) } }, r.prototype._maybeCallWait = function() { return !(!o.isFunction(this.waitCallback) || 0 !== this.pendingItems.length || 0 !== this.pendingRequests.length) && (this.waitIntervalID && (this.waitIntervalID = clearInterval(this.waitIntervalID)), this.waitCallback(), !0) }, t.exports = r }, function(t, e, n) { "use strict";

        function r() { if (!C && (C = !0, s(JSON) && (a(JSON.stringify) && (N.stringify = JSON.stringify), a(JSON.parse) && (N.parse = JSON.parse)), !a(N.stringify) || !a(N.parse))) { var t = n(8);
                t(N) } }

        function o(t, e) { return e === i(t) }

        function i(t) { var e = typeof t; return "object" !== e ? e : t ? t instanceof Error ? "error" : {}.toString.call(t).match(/\s([a-zA-Z]+)/)[1].toLowerCase() : "null" }

        function a(t) { return o(t, "function") }

        function s(t) { return !o(t, "undefined") }

        function u(t) { var e = i(t); return "object" === e || "array" === e }

        function c(t) { return o(t, "error") }

        function l(t, e, n) { var r, i, a, s = o(t, "object"),
                u = o(t, "array"),
                c = []; if (s && n.indexOf(t) !== -1) return t; if (n.push(t), s)
                for (r in t) Object.prototype.hasOwnProperty.call(t, r) && c.push(r);
            else if (u)
                for (a = 0; a < t.length; ++a) c.push(a); for (a = 0; a < c.length; ++a) r = c[a], i = t[r], t[r] = e(r, i, n); return t }

        function p() { return "********" }

        function f() { var t = O(),
                e = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function(e) { var n = (t + 16 * Math.random()) % 16 | 0; return t = Math.floor(t / 16), ("x" === e ? n : 7 & n | 8).toString(16) }); return e }

        function h(t) { var e = d(t); return "" === e.anchor && (e.source = e.source.replace("#", "")), t = e.source.replace("?" + e.query, "") }

        function d(t) { if (!o(t, "string")) throw new Error("received invalid input"); for (var e = A, n = e.parser[e.strictMode ? "strict" : "loose"].exec(t), r = {}, i = e.key.length; i--;) r[e.key[i]] = n[i] || ""; return r[e.q.name] = {}, r[e.key[12]].replace(e.q.parser, function(t, n, o) { n && (r[e.q.name][n] = o) }), r }

        function m(t, e, n) { n = n || {}, n.access_token = t; var r, o = []; for (r in n) Object.prototype.hasOwnProperty.call(n, r) && o.push([r, n[r]].join("=")); var i = "?" + o.sort().join("&");
            e = e || {}, e.path = e.path || ""; var a, s = e.path.indexOf("?"),
                u = e.path.indexOf("#");
            s !== -1 && (u === -1 || u > s) ? (a = e.path, e.path = a.substring(0, s) + i + "&" + a.substring(s + 1)) : u !== -1 ? (a = e.path, e.path = a.substring(0, u) + i + a.substring(u)) : e.path = e.path + i }

        function v(t, e) { if (e = e || t.protocol, !e && t.port && (80 === t.port ? e = "http:" : 443 === t.port && (e = "https:")), e = e || "https:", !t.hostname) return null; var n = e + "//" + t.hostname; return t.port && (n = n + ":" + t.port), t.path && (n += t.path), n }

        function g(t, e) { var n, r; try { n = N.stringify(t) } catch (o) { if (e && a(e)) try { n = e(t) } catch (t) { r = t } else r = o } return { error: r, value: n } }

        function y(t) { var e, n; try { e = N.parse(t) } catch (t) { n = t } return { error: n, value: e } }

        function b(t, e, n, r, o, i, a, s) { var u = { url: e || "", line: n, column: r };
            u.func = s.guessFunctionName(u.url, u.line), u.context = s.gatherContext(u.url, u.line); var c = document && document.location && document.location.href,
                l = window && window.navigator && window.navigator.userAgent; return { mode: i, message: o ? String(o) : t || a, url: c, stack: [u], useragent: l } }

        function w(t, e) { return function(n, r) { try { e(n, r) } catch (e) { t.error(e) } } }

        function _(t, e, n, r) { for (var o, a, s, u, c, l, p = [], h = 0, d = t.length; h < d; ++h) { l = t[h]; var m = i(l); switch (m) {
                    case "undefined":
                        break;
                    case "string":
                        o ? p.push(l) : o = l; break;
                    case "function":
                        u = w(e, l); break;
                    case "date":
                        p.push(l); break;
                    case "error":
                    case "domexception":
                        a ? p.push(l) : a = l; break;
                    case "object":
                    case "array":
                        if (l instanceof Error || "undefined" != typeof DOMException && l instanceof DOMException) { a ? p.push(l) : a = l; break } if (r && "object" === m && !c) { for (var v = 0, g = r.length; v < g; ++v)
                                if (void 0 !== l[r[v]]) { c = l; break }
                            if (c) break }
                        s ? p.push(l) : s = l; break;
                    default:
                        if (l instanceof Error || "undefined" != typeof DOMException && l instanceof DOMException) { a ? p.push(l) : a = l; break }
                        p.push(l) } }
            p.length > 0 && (s = L(!0, {}, s), s.extraArgs = p); var y = { message: o, err: a, custom: s, timestamp: O(), callback: u, uuid: f() }; return s && void 0 !== s.level && (y.level = s.level, delete s.level), r && c && (y.request = c), y._originalArgs = t, y }

        function x(t, e) { if (t) { var n = e.split("."),
                    r = t; try { for (var o = 0, i = n.length; o < i; ++o) r = r[n[o]] } catch (t) { r = void 0 } return r } }

        function k(t, e, n) { if (t) { var r = e.split("."),
                    o = r.length; if (!(o < 1)) { if (1 === o) return void(t[r[0]] = n); try { for (var i = t[r[0]] || {}, a = i, s = 1; s < o - 1; s++) i[r[s]] = i[r[s]] || {}, i = i[r[s]];
                        i[r[o - 1]] = n, t[r[0]] = a } catch (t) { return } } } }

        function E(t, e) {
            function n(t, e, n, r, o, i) { return e + p(i) }

            function r(t) { var e; if (o(t, "string"))
                    for (e = 0; e < u.length; ++e) t = t.replace(u[e], n); return t }

            function i(t, e) { var n; for (n = 0; n < s.length; ++n)
                    if (s[n].test(t)) { e = p(e); break }
                return e }

            function a(t, e, n) { var s = i(t, e); return s === e ? o(e, "object") || o(e, "array") ? l(e, a, n) : r(s) : s }
            e = e || []; var s = I(e),
                u = T(e); return l(t, a, []), t }

        function I(t) { for (var e, n = [], r = 0; r < t.length; ++r) e = "\\[?(%5[bB])?" + t[r] + "\\[?(%5[bB])?\\]?(%5[dD])?", n.push(new RegExp(e, "i")); return n }

        function T(t) { for (var e, n = [], r = 0; r < t.length; ++r) e = "\\[?(%5[bB])?" + t[r] + "\\[?(%5[bB])?\\]?(%5[dD])?", n.push(new RegExp("(" + e + "=)([^&\\n]+)", "igm")); return n }

        function S(t) { var e, n, r, o = []; for (e = 0, n = t.length; e < n; e++) r = t[e], "object" == typeof r ? (r = g(r), r = r.error || r.value, r.length > 500 && (r = r.substr(0, 500) + "...")) : "undefined" == typeof r && (r = "undefined"), o.push(r); return o.join(" ") }

        function O() { return Date.now ? +Date.now() : +new Date } var L = n(7),
            N = {},
            C = !1;
        r(); var j = { debug: 0, info: 1, warning: 2, error: 3, critical: 4 },
            A = { strictMode: !1, key: ["source", "protocol", "authority", "userInfo", "user", "password", "host", "port", "relative", "path", "directory", "file", "query", "anchor"], q: { name: "queryKey", parser: /(?:^|&)([^&=]*)=?([^&]*)/g }, parser: { strict: /^(?:([^:\/?#]+):)?(?:\/\/((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?))?((((?:[^?#\/]*\/)*)([^?#]*))(?:\?([^#]*))?(?:#(.*))?)/, loose: /^(?:(?![^:@]+:[^:@\/]*@)([^:\/?#.]+):)?(?:\/\/)?((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?)(((\/(?:[^?#](?![^?#\/]*\.[^?#\/.]+(?:[?#]|$)))*\/?)?([^?#\/]*))(?:\?([^#]*))?(?:#(.*))?)/ } };
        t.exports = { isType: o, typeName: i, isFunction: a, isIterable: u, isError: c, extend: L, traverse: l, redact: p, uuid4: f, LEVELS: j, sanitizeUrl: h, addParamsAndAccessTokenToPath: m, formatUrl: v, stringify: g, jsonParse: y, makeUnhandledStackInfo: b, createItem: _, get: x, set: k, scrub: E, formatArgsAsString: S, now: O } }, function(t, e) { "use strict"; var n = Object.prototype.hasOwnProperty,
            r = Object.prototype.toString,
            o = function(t) { return "function" == typeof Array.isArray ? Array.isArray(t) : "[object Array]" === r.call(t) },
            i = function(t) { if (!t || "[object Object]" !== r.call(t)) return !1; var e = n.call(t, "constructor"),
                    o = t.constructor && t.constructor.prototype && n.call(t.constructor.prototype, "isPrototypeOf"); if (t.constructor && !e && !o) return !1; var i; for (i in t); return "undefined" == typeof i || n.call(t, i) };
        t.exports = function t() { var e, n, r, a, s, u, c = arguments[0],
                l = 1,
                p = arguments.length,
                f = !1; for ("boolean" == typeof c ? (f = c, c = arguments[1] || {}, l = 2) : ("object" != typeof c && "function" != typeof c || null == c) && (c = {}); l < p; ++l)
                if (e = arguments[l], null != e)
                    for (n in e) r = c[n], a = e[n], c !== a && (f && a && (i(a) || (s = o(a))) ? (s ? (s = !1, u = r && o(r) ? r : []) : u = r && i(r) ? r : {}, c[n] = t(f, u, a)) : "undefined" != typeof a && (c[n] = a));
            return c } }, function(t, e) { var n = function(t) {
            function e(t) { return t < 10 ? "0" + t : t }

            function n() { return this.valueOf() }

            function r(t) { return i.lastIndex = 0, i.test(t) ? '"' + t.replace(i, function(t) { var e = u[t]; return "string" == typeof e ? e : "\\u" + ("0000" + t.charCodeAt(0).toString(16)).slice(-4) }) + '"' : '"' + t + '"' }

            function o(t, e) { var n, i, u, l, p, f = a,
                    h = e[t]; switch (h && "object" == typeof h && "function" == typeof h.toJSON && (h = h.toJSON(t)), "function" == typeof c && (h = c.call(e, t, h)), typeof h) {
                    case "string":
                        return r(h);
                    case "number":
                        return isFinite(h) ? String(h) : "null";
                    case "boolean":
                    case "null":
                        return String(h);
                    case "object":
                        if (!h) return "null"; if (a += s, p = [], "[object Array]" === Object.prototype.toString.apply(h)) { for (l = h.length, n = 0; n < l; n += 1) p[n] = o(n, h) || "null"; return u = 0 === p.length ? "[]" : a ? "[\n" + a + p.join(",\n" + a) + "\n" + f + "]" : "[" + p.join(",") + "]", a = f, u } if (c && "object" == typeof c)
                            for (l = c.length, n = 0; n < l; n += 1) "string" == typeof c[n] && (i = c[n], u = o(i, h), u && p.push(r(i) + (a ? ": " : ":") + u));
                        else
                            for (i in h) Object.prototype.hasOwnProperty.call(h, i) && (u = o(i, h), u && p.push(r(i) + (a ? ": " : ":") + u)); return u = 0 === p.length ? "{}" : a ? "{\n" + a + p.join(",\n" + a) + "\n" + f + "}" : "{" + p.join(",") + "}", a = f, u } } var i = /[\\"\u0000-\u001f\u007f-\u009f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g; "function" != typeof Date.prototype.toJSON && (Date.prototype.toJSON = function() { return isFinite(this.valueOf()) ? this.getUTCFullYear() + "-" + e(this.getUTCMonth() + 1) + "-" + e(this.getUTCDate()) + "T" + e(this.getUTCHours()) + ":" + e(this.getUTCMinutes()) + ":" + e(this.getUTCSeconds()) + "Z" : null }, Boolean.prototype.toJSON = n, Number.prototype.toJSON = n, String.prototype.toJSON = n); var a, s, u, c; "function" != typeof t.stringify && (u = { "\b": "\\b", "\t": "\\t", "\n": "\\n", "\f": "\\f", "\r": "\\r", '"': '\\"', "\\": "\\\\" }, t.stringify = function(t, e, n) { var r; if (a = "", s = "", "number" == typeof n)
                    for (r = 0; r < n; r += 1) s += " ";
                else "string" == typeof n && (s = n); if (c = e, e && "function" != typeof e && ("object" != typeof e || "number" != typeof e.length)) throw new Error("JSON.stringify"); return o("", { "": t }) }), "function" != typeof t.parse && (t.parse = function() {
                function t(t) { return t.replace(/\\(?:u(.{4})|([^u]))/g, function(t, e, n) { return e ? String.fromCharCode(parseInt(e, 16)) : a[n] }) } var e, n, r, o, i, a = { "\\": "\\", '"': '"', "/": "/", t: "\t", n: "\n", r: "\r", f: "\f", b: "\b" },
                    s = { go: function() { e = "ok" }, firstokey: function() { o = i, e = "colon" }, okey: function() { o = i, e = "colon" }, ovalue: function() { e = "ocomma" }, firstavalue: function() { e = "acomma" }, avalue: function() { e = "acomma" } },
                    u = { go: function() { e = "ok" }, ovalue: function() { e = "ocomma" }, firstavalue: function() { e = "acomma" }, avalue: function() { e = "acomma" } },
                    c = { "{": { go: function() { n.push({ state: "ok" }), r = {}, e = "firstokey" }, ovalue: function() { n.push({ container: r, state: "ocomma", key: o }), r = {}, e = "firstokey" }, firstavalue: function() { n.push({ container: r, state: "acomma" }), r = {}, e = "firstokey" }, avalue: function() { n.push({ container: r, state: "acomma" }), r = {}, e = "firstokey" } }, "}": { firstokey: function() { var t = n.pop();
                                i = r, r = t.container, o = t.key, e = t.state }, ocomma: function() { var t = n.pop();
                                r[o] = i, i = r, r = t.container, o = t.key, e = t.state } }, "[": { go: function() { n.push({ state: "ok" }), r = [], e = "firstavalue" }, ovalue: function() { n.push({ container: r, state: "ocomma", key: o }), r = [], e = "firstavalue" }, firstavalue: function() { n.push({ container: r, state: "acomma" }), r = [], e = "firstavalue" }, avalue: function() { n.push({ container: r, state: "acomma" }), r = [], e = "firstavalue" } }, "]": { firstavalue: function() { var t = n.pop();
                                i = r, r = t.container, o = t.key, e = t.state }, acomma: function() { var t = n.pop();
                                r.push(i), i = r, r = t.container, o = t.key, e = t.state } }, ":": { colon: function() { if (Object.hasOwnProperty.call(r, o)) throw new SyntaxError("Duplicate key '" + o + '"');
                                e = "ovalue" } }, ",": { ocomma: function() { r[o] = i, e = "okey" }, acomma: function() { r.push(i), e = "avalue" } }, true: { go: function() { i = !0, e = "ok" }, ovalue: function() { i = !0, e = "ocomma" }, firstavalue: function() { i = !0, e = "acomma" }, avalue: function() { i = !0, e = "acomma" } }, false: { go: function() { i = !1, e = "ok" }, ovalue: function() { i = !1, e = "ocomma" }, firstavalue: function() { i = !1, e = "acomma" }, avalue: function() { i = !1, e = "acomma" } }, null: { go: function() { i = null, e = "ok" }, ovalue: function() { i = null, e = "ocomma" }, firstavalue: function() { i = null, e = "acomma" }, avalue: function() { i = null, e = "acomma" } } }; return function(r, o) { var a, l = /^[\u0020\t\n\r]*(?:([,:\[\]{}]|true|false|null)|(-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)|"((?:[^\r\n\t\\\"]|\\(?:["\\\/trnfb]|u[0-9a-fA-F]{4}))*)")/;
                    e = "go", n = []; try { for (;;) { if (a = l.exec(r), !a) break;
                            a[1] ? c[a[1]][e]() : a[2] ? (i = +a[2], u[e]()) : (i = t(a[3]), s[e]()), r = r.slice(a[0].length) } } catch (t) { e = t } if ("ok" !== e || /[^\u0020\t\n\r]/.test(r)) throw e instanceof SyntaxError ? e : new SyntaxError("JSON"); return "function" == typeof o ? function t(e, n) { var r, a, s = e[n]; if (s && "object" == typeof s)
                            for (r in i) Object.prototype.hasOwnProperty.call(s, r) && (a = t(s, r), void 0 !== a ? s[r] = a : delete s[r]); return o.call(e, n, s) }({ "": i }, "") : i } }()) };
        t.exports = n }, function(t, e, n) { "use strict";

        function r(t, e) { this.queue = t, this.options = e, this.transforms = [] } var o = n(6);
        r.prototype.configure = function(t) { this.queue && this.queue.configure(t); var e = this.options; return this.options = o.extend(!0, {}, e, t), this }, r.prototype.addTransform = function(t) { return o.isFunction(t) && this.transforms.push(t), this }, r.prototype.log = function(t, e) { if (e && o.isFunction(e) || (e = function() {}), !this.options.enabled) return e(new Error("Rollbar is not enabled"));
            this.queue.addPendingItem(t); var n = t.err;
            this._applyTransforms(t, function(r, o) { return r ? (this.queue.removePendingItem(t), e(r, null)) : void this.queue.addItem(o, e, n, t) }.bind(this)) }, r.prototype._applyTransforms = function(t, e) { var n = -1,
                r = this.transforms.length,
                o = this.transforms,
                i = this.options,
                a = function(t, s) { return t ? void e(t, null) : (n++, n === r ? void e(null, s) : void o[n](s, i, a)) };
            a(null, t) }, t.exports = r }, function(t, e, n) { "use strict";

        function r(t) { this.queue = [], this.options = i.extend(!0, {}, t); var e = this.options.maxTelemetryEvents || a;
            this.maxQueueSize = Math.max(0, Math.min(e, a)) }

        function o(t, e) { if (e) return e; var n = { error: "error", manual: "info" }; return n[t] || "info" } var i = n(6),
            a = 100;
        r.prototype.configure = function(t) { this.options = i.extend(!0, {}, t); var e = this.options.maxTelemetryEvents || a,
                n = Math.max(0, Math.min(e, a)),
                r = 0;
            this.maxQueueSize > n && (r = this.maxQueueSize - n), this.maxQueueSize = n, this.queue.splice(0, r) }, r.prototype.copyEvents = function() { return Array.prototype.slice.call(this.queue, 0) }, r.prototype.capture = function(t, e, n, r, a) { var s = { level: o(t, n), type: t, timestamp_ms: a || i.now(), body: e, source: "client" }; return r && (s.uuid = r), this.push(s), s }, r.prototype.captureEvent = function(t, e, n) { return this.capture("manual", t, e, n) }, r.prototype.captureError = function(t, e, n, r) { var o = { message: t.message || String(t) }; return t.stack && (o.stack = t.stack), this.capture("error", o, e, n, r) }, r.prototype.captureLog = function(t, e, n, r) { return this.capture("log", { message: t }, e, n, r) }, r.prototype.captureNetwork = function(t, e, n) { e = e || "xhr", t.subtype = t.subtype || e; var r = this.levelFromStatus(t.status_code); return this.capture("network", t, r, n) }, r.prototype.levelFromStatus = function(t) { return t >= 200 && t < 400 ? "info" : 0 === t || t >= 400 ? "error" : "info" }, r.prototype.captureDom = function(t, e, n, r, o) { var i = { subtype: t, element: e }; return void 0 !== n && (i.value = n), void 0 !== r && (i.checked = r), this.capture("dom", i, "info", o) }, r.prototype.captureNavigation = function(t, e, n) { return this.capture("navigation", { from: t, to: e }, "info", n) }, r.prototype.captureDomContentLoaded = function(t) { return this.capture("navigation", { subtype: "DOMContentLoaded" }, "info", void 0, t && t.getTime()) }, r.prototype.captureLoad = function(t) { return this.capture("navigation", { subtype: "load" }, "info", void 0, t && t.getTime()) }, r.prototype.captureConnectivityChange = function(t, e) { return this.captureNetwork({ change: t }, "connectivity", e) }, r.prototype._captureRollbarItem = function(t) { return t.err ? this.captureError(t.err, t.level, t.uuid, t.timestamp) : t.message ? this.captureLog(t.message, t.level, t.uuid, t.timestamp) : t.custom ? this.capture("log", t.custom, t.level, t.uuid, t.timestamp) : void 0 }, r.prototype.push = function(t) { this.queue.push(t), this.queue.length > this.maxQueueSize && this.queue.shift() }, t.exports = r }, function(t, e, n) { "use strict";

        function r(t, e, n, r) { this.options = t, this.transport = e, this.url = n, this.jsonBackup = r, this.accessToken = t.accessToken, this.transportOptions = o(t, n) }

        function o(t, e) { return a.getTransportFromOptions(t, s, e) } var i = n(6),
            a = n(12),
            s = { hostname: "api.rollbar.com", path: "/api/1", search: null, version: "1", protocol: "https:", port: 443 };
        r.prototype.postItem = function(t, e) { var n = a.transportOptions(this.transportOptions, "/item/", "POST"),
                r = a.buildPayload(this.accessToken, t, this.jsonBackup);
            this.transport.post(this.accessToken, n, r, e) }, r.prototype.configure = function(t) { var e = this.oldOptions; return this.options = i.extend(!0, {}, e, t), this.transportOptions = o(this.options, this.url), void 0 !== this.options.accessToken && (this.accessToken = this.options.accessToken), this }, t.exports = r }, function(t, e, n) { "use strict";

        function r(t, e, n) { if (s.isType(e.context, "object")) { var r = s.stringify(e.context, n);
                r.error ? e.context = "Error: could not serialize 'context'" : e.context = r.value || "", e.context.length > 255 && (e.context = e.context.substr(0, 255)) } return { access_token: t, data: e } }

        function o(t, e, n) { var r = e.hostname,
                o = e.protocol,
                i = e.port,
                a = e.path,
                s = e.search,
                u = t.proxy; if (t.endpoint) { var c = n.parse(t.endpoint);
                r = c.hostname, o = c.protocol, i = c.port, a = c.pathname, s = c.search } return { hostname: r, protocol: o, port: i, path: a, search: s, proxy: u } }

        function i(t, e, n) { var r = t.protocol || "https:",
                o = t.port || ("http:" === r ? 80 : "https:" === r ? 443 : void 0),
                i = t.hostname; return e = a(t.path, e), t.search && (e += t.search), t.proxy && (e = r + "//" + i + e, i = t.proxy.host || t.proxy.hostname, o = t.proxy.port, r = t.proxy.protocol || r), { protocol: r, hostname: i, path: e, port: o, method: n } }

        function a(t, e) { var n = /\/$/.test(t),
                r = /^\//.test(e); return n && r ? e = e.substring(1) : n || r || (e = "/" + e), t + e } var s = n(6);
        t.exports = { buildPayload: r, getTransportFromOptions: o, transportOptions: i, appendPathToPath: a } }, function(t, e, n) { "use strict";

        function r() { var t = Array.prototype.slice.call(arguments, 0);
            t.unshift("Rollbar:"), a.ieVersion() <= 8 ? console.error(s.formatArgsAsString(t)) : console.error.apply(console, t) }

        function o() { var t = Array.prototype.slice.call(arguments, 0);
            t.unshift("Rollbar:"), a.ieVersion() <= 8 ? console.info(s.formatArgsAsString(t)) : console.info.apply(console, t) }

        function i() { var t = Array.prototype.slice.call(arguments, 0);
            t.unshift("Rollbar:"), a.ieVersion() <= 8 ? console.log(s.formatArgsAsString(t)) : console.log.apply(console, t) }
        n(14); var a = n(15),
            s = n(6);
        t.exports = { error: r, info: o, log: i } }, function(t, e) {! function(t) { "use strict";
            t.console || (t.console = {}); for (var e, n, r = t.console, o = function() {}, i = ["memory"], a = "assert,clear,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profiles,profileEnd,show,table,time,timeEnd,timeline,timelineEnd,timeStamp,trace,warn".split(","); e = i.pop();) r[e] || (r[e] = {}); for (; n = a.pop();) r[n] || (r[n] = o) }("undefined" == typeof window ? this : window) }, function(t, e) { "use strict";

        function n() { var t; if (!document) return t; for (var e = 3, n = document.createElement("div"), r = n.getElementsByTagName("i"); n.innerHTML = "<!--[if gt IE " + ++e + "]><i></i><![endif]-->", r[0];); return e > 4 ? e : t } var r = { ieVersion: n };
        t.exports = r }, function(t, e) {
        "use strict";

        function n(t, e, n) { if (t) { var o; "function" == typeof e._rollbarOldOnError ? o = e._rollbarOldOnError : t.onerror && !t.onerror.belongsToShim && (o = t.onerror, e._rollbarOldOnError = o); var i = function() { var n = Array.prototype.slice.call(arguments, 0);
                    r(t, e, o, n) };
                i.belongsToShim = n, t.onerror = i } }

        function r(t, e, n, r) { t._rollbarWrappedError && (r[4] || (r[4] = t._rollbarWrappedError), r[5] || (r[5] = t._rollbarWrappedError._rollbarContext), t._rollbarWrappedError = null), e.handleUncaughtException.apply(e, r), n && n.apply(t, r) }

        function o(t, e, n) { if (t) { "function" == typeof t._rollbarURH && t._rollbarURH.belongsToShim && t.removeEventListener("unhandledrejection", t._rollbarURH); var r = function(t) { var n = t.reason,
                        r = t.promise,
                        o = t.detail;!n && o && (n = o.reason, r = o.promise), e && e.handleUnhandledRejection && e.handleUnhandledRejection(n, r) };
                r.belongsToShim = n, t._rollbarURH = r, t.addEventListener("unhandledrejection", r) } }

        function i(t, e, n) { if (t) { var r, o, i = "EventTarget,Window,Node,ApplicationCache,AudioTrackList,ChannelMergerNode,CryptoOperation,EventSource,FileReader,HTMLUnknownElement,IDBDatabase,IDBRequest,IDBTransaction,KeyOperation,MediaController,MessagePort,ModalWindow,Notification,SVGElementInstance,Screen,TextTrack,TextTrackCue,TextTrackList,WebSocket,WebSocketWorker,Worker,XMLHttpRequest,XMLHttpRequestEventTarget,XMLHttpRequestUpload".split(","); for (r = 0; r < i.length; ++r) o = i[r], t[o] && t[o].prototype && a(e, t[o].prototype, n) } }

        function a(t, e, n) {
            if (e.hasOwnProperty && e.hasOwnProperty("addEventListener")) { for (var r = e.addEventListener; r._rollbarOldAdd && r.belongsToShim;) r = r._rollbarOldAdd; var o = function(e, n, o) { r.call(this, e, t.wrap(n), o) };
                o._rollbarOldAdd = r, o.belongsToShim = n, e.addEventListener = o; for (var i = e.removeEventListener; i._rollbarOldRemove && i.belongsToShim;) i = i._rollbarOldRemove; var a = function(t, e, n) { i.call(this, t, e && e._rollbar_wrapped || e, n) };
                a._rollbarOldRemove = i, a.belongsToShim = n, e.removeEventListener = a }
        }
        t.exports = { captureUncaughtExceptions: n, captureUnhandledRejections: o, wrapGlobals: i }
    }, function(t, e, n) { "use strict";

        function r(t, e, n, r, o) { r && l.isFunction(r) || (r = function() {}), l.addParamsAndAccessTokenToPath(t, e, n); var a = "GET",
                s = l.formatUrl(e);
            i(t, s, a, null, r, o) }

        function o(t, e, n, r, o) { if (r && l.isFunction(r) || (r = function() {}), !n) return r(new Error("Cannot send empty request")); var a = l.stringify(n); if (a.error) return r(a.error); var s = a.value,
                u = "POST",
                c = l.formatUrl(e);
            i(t, c, u, s, r, o) }

        function i(t, e, n, r, o, i) { var f; if (f = i ? i() : a(), !f) return o(new Error("No way to send a request")); try { try { var h = function() { try { if (h && 4 === f.readyState) { h = void 0; var t = l.jsonParse(f.responseText); if (s(f)) return void o(t.error, t.value); if (u(f)) { if (403 === f.status) { var e = t.value && t.value.message;
                                        p.error(e) }
                                    o(new Error(String(f.status))) } else { var n = "XHR response had no status code (likely connection failure)";
                                    o(c(n)) } } } catch (t) { var r;
                            r = t && t.stack ? t : new Error(t), o(r) } };
                    f.open(n, e, !0), f.setRequestHeader && (f.setRequestHeader("Content-Type", "application/json"), f.setRequestHeader("X-Rollbar-Access-Token", t)), f.onreadystatechange = h, f.send(r) } catch (t) { if ("undefined" != typeof XDomainRequest) { if (!window || !window.location) return o(new Error("No window available during request, unknown environment")); "http:" === window.location.href.substring(0, 5) && "https" === e.substring(0, 5) && (e = "http" + e.substring(5)); var d = new XDomainRequest;
                        d.onprogress = function() {}, d.ontimeout = function() { var t = "Request timed out",
                                e = "ETIMEDOUT";
                            o(c(t, e)) }, d.onerror = function() { o(new Error("Error during request")) }, d.onload = function() { var t = l.jsonParse(d.responseText);
                            o(t.error, t.value) }, d.open(n, e, !0), d.send(r) } else o(new Error("Cannot find a method to transport a request")) } } catch (t) { o(t) } }

        function a() { var t, e, n = [function() { return new XMLHttpRequest }, function() { return new ActiveXObject("Msxml2.XMLHTTP") }, function() { return new ActiveXObject("Msxml3.XMLHTTP") }, function() { return new ActiveXObject("Microsoft.XMLHTTP") }],
                r = n.length; for (e = 0; e < r; e++) try { t = n[e](); break } catch (t) {}
            return t }

        function s(t) { return t && t.status && 200 === t.status }

        function u(t) { return t && l.isType(t.status, "number") && t.status >= 400 && t.status < 600 }

        function c(t, e) { var n = new Error(t); return n.code = e || "ENOTFOUND", n } var l = n(6),
            p = n(13);
        t.exports = { get: r, post: o } }, function(t, e) { "use strict";

        function n(t) { var e, n, r = { protocol: null, auth: null, host: null, path: null, hash: null, href: t, hostname: null, port: null, pathname: null, search: null, query: null }; if (e = t.indexOf("//"), e !== -1 ? (r.protocol = t.substring(0, e), n = e + 2) : n = 0, e = t.indexOf("@", n), e !== -1 && (r.auth = t.substring(n, e), n = e + 1), e = t.indexOf("/", n), e === -1) { if (e = t.indexOf("?", n), e === -1) return e = t.indexOf("#", n), e === -1 ? r.host = t.substring(n) : (r.host = t.substring(n, e), r.hash = t.substring(e)), r.hostname = r.host.split(":")[0], r.port = r.host.split(":")[1], r.port && (r.port = parseInt(r.port, 10)), r;
                r.host = t.substring(n, e), r.hostname = r.host.split(":")[0], r.port = r.host.split(":")[1], r.port && (r.port = parseInt(r.port, 10)), n = e } else r.host = t.substring(n, e), r.hostname = r.host.split(":")[0], r.port = r.host.split(":")[1], r.port && (r.port = parseInt(r.port, 10)), n = e; if (e = t.indexOf("#", n), e === -1 ? r.path = t.substring(n) : (r.path = t.substring(n, e), r.hash = t.substring(e)), r.path) { var o = r.path.split("?");
                r.pathname = o[0], r.query = o[1], r.search = r.query ? "?" + r.query : null } return r }
        t.exports = { parse: n } }, function(t, e, n) { "use strict";

        function r(t, e, n) { if (t.data = t.data || {}, t.err) try { t.stackInfo = t.err._savedStackTrace || m.parse(t.err) } catch (e) { v.error("Error while parsing the error object.", e), t.message = t.err.message || t.err.description || t.message || String(t.err), delete t.err }
            n(null, t) }

        function o(t, e, n) { t.message || t.stackInfo || t.custom || n(new Error("No message, stack info, or custom data"), null), n(null, t) }

        function i(t, e, n) { var r = e.payload && e.payload.environment || e.environment;
            t.data = d.extend(!0, {}, t.data, { environment: r, level: t.level, endpoint: e.endpoint, platform: "browser", framework: "browser-js", language: "javascript", server: {}, uuid: t.uuid, notifier: { name: "rollbar-browser-js", version: e.version } }), n(null, t) }

        function a(t) { return function(e, n, r) { return t && t.location ? (d.set(e, "data.request", { url: t.location.href, query_string: t.location.search, user_ip: "$remote_ip" }), void r(null, e)) : r(null, e) } }

        function s(t) { return function(e, n, r) { return t ? (d.set(e, "data.client", { runtime_ms: e.timestamp - t._rollbarStartTime, timestamp: Math.round(e.timestamp / 1e3), javascript: { browser: t.navigator.userAgent, language: t.navigator.language, cookie_enabled: t.navigator.cookieEnabled, screen: { width: t.screen.width, height: t.screen.height } } }), void r(null, e)) : r(null, e) } }

        function u(t) { return function(e, n, r) { if (!t || !t.navigator) return r(null, e); for (var o, i = [], a = t.navigator.plugins || [], s = 0, u = a.length; s < u; ++s) o = a[s], i.push({ name: o.name, description: o.description });
                d.set(e, "data.client.javascript.plugins", i), r(null, e) } }

        function c(t, e, n) { t.stackInfo ? p(t, e, n) : l(t, e, n) }

        function l(t, e, n) { var r = t.message,
                o = t.custom; if (!r)
                if (o) { var i = e.scrubFields,
                        a = d.stringify(d.scrub(o, i));
                    r = a.error || a.value || "" } else r = "";
            var s = { body: r };
            o && (s.extra = d.extend(!0, {}, o)), d.set(t, "data.body", { message: s }), n(null, t) }

        function p(t, e, n) { var r = t.data.description,
                o = t.stackInfo,
                i = t.custom,
                a = m.guessErrorClass(o.message),
                s = o.name || a[0],
                u = a[1],
                c = { exception: { class: s, message: u } };
            r && (c.exception.description = r); var p = o.stack; if (p && 0 === p.length && t._unhandledStackInfo && t._unhandledStackInfo.stack && (p = t._unhandledStackInfo.stack), p) { var f, h, v, g, y, b, w, _; for (c.frames = [], w = 0; w < p.length; ++w) f = p[w], h = { filename: f.url ? d.sanitizeUrl(f.url) : "(unknown)", lineno: f.line || null, method: f.func && "?" !== f.func ? f.func : "[anonymous]", colno: f.column }, h.method && h.method.endsWith && h.method.endsWith("._rollbar_wrapped") || (v = g = y = null, b = f.context ? f.context.length : 0, b && (_ = Math.floor(b / 2), g = f.context.slice(0, _), v = f.context[_], y = f.context.slice(_)), v && (h.code = v), (g || y) && (h.context = {}, g && g.length && (h.context.pre = g), y && y.length && (h.context.post = y)), f.args && (h.args = f.args), c.frames.push(h));
                c.frames.reverse(), i && (c.extra = d.extend(!0, {}, i)), d.set(t, "data.body", { trace: c }), n(null, t) } else t.message = s + ": " + u, l(t, e, n) }

        function f(t, e, n) { var r = e.scrubFields;
            d.scrub(t.data, r), n(null, t) }

        function h(t, e, n) { var r = d.extend(!0, {}, t); try { d.isFunction(e.transform) && e.transform(r.data) } catch (r) { return e.transform = null, v.error("Error while calling custom transform() function. Removing custom transform().", r), void n(null, t) }
            n(null, r) } var d = n(6),
            m = n(20),
            v = n(13);
        t.exports = { handleItemWithError: r, ensureItemHasSomethingToSay: o, addBaseInfo: i, addRequestInfo: a, addClientInfo: s, addPluginInfo: u, addBody: c, scrubPayload: f, userTransform: h } }, function(t, e, n) { "use strict";

        function r() { return l }

        function o() { return null }

        function i(t) { var e = {}; return e._stackFrame = t, e.url = t.fileName, e.line = t.lineNumber, e.func = t.functionName, e.column = t.columnNumber, e.args = t.args, e.context = o(e.url, e.line), e }

        function a(t) {
            function e() { var e = []; try { e = c.parse(t) } catch (t) { e = [] } for (var n = [], r = 0; r < e.length; r++) n.push(new i(e[r])); return n } return { stack: e(), message: t.message, name: t.name } }

        function s(t) { return new a(t) }

        function u(t) { if (!t) return ["Unknown error. There was no error message to display.", ""]; var e = t.match(p),
                n = "(unknown)"; return e && (n = e[e.length - 1], t = t.replace((e[e.length - 2] || "") + n + ":", ""), t = t.replace(/(^[\s]+|[\s]+$)/g, "")), [n, t] } var c = n(21),
            l = "?",
            p = new RegExp("^(([a-zA-Z0-9-_$ ]*): *)?(Uncaught )?([a-zA-Z0-9-_$ ]*): ");
        t.exports = { guessFunctionName: r, guessErrorClass: u, gatherContext: o, parse: s, Stack: a, Frame: i } }, function(t, e, n) { var r, o, i;! function(a, s) { "use strict";
            o = [n(22)], r = s, i = "function" == typeof r ? r.apply(e, o) : r, !(void 0 !== i && (t.exports = i)) }(this, function(t) { "use strict";

            function e(t, e, n) { if ("function" == typeof Array.prototype.map) return t.map(e, n); for (var r = new Array(t.length), o = 0; o < t.length; o++) r[o] = e.call(n, t[o]); return r }

            function n(t, e, n) { if ("function" == typeof Array.prototype.filter) return t.filter(e, n); for (var r = [], o = 0; o < t.length; o++) e.call(n, t[o]) && r.push(t[o]); return r } var r = /(^|@)\S+\:\d+/,
                o = /^\s*at .*(\S+\:\d+|\(native\))/m,
                i = /^(eval@)?(\[native code\])?$/; return { parse: function(t) { if ("undefined" != typeof t.stacktrace || "undefined" != typeof t["opera#sourceloc"]) return this.parseOpera(t); if (t.stack && t.stack.match(o)) return this.parseV8OrIE(t); if (t.stack) return this.parseFFOrSafari(t); throw new Error("Cannot parse given Error object") }, extractLocation: function(t) { if (t.indexOf(":") === -1) return [t]; var e = t.replace(/[\(\)\s]/g, "").split(":"),
                        n = e.pop(),
                        r = e[e.length - 1]; if (!isNaN(parseFloat(r)) && isFinite(r)) { var o = e.pop(); return [e.join(":"), o, n] } return [e.join(":"), n, void 0] }, parseV8OrIE: function(r) { var i = n(r.stack.split("\n"), function(t) { return !!t.match(o) }, this); return e(i, function(e) { e.indexOf("(eval ") > -1 && (e = e.replace(/eval code/g, "eval").replace(/(\(eval at [^\()]*)|(\)\,.*$)/g, "")); var n = e.replace(/^\s+/, "").replace(/\(eval code/g, "(").split(/\s+/).slice(1),
                            r = this.extractLocation(n.pop()),
                            o = n.join(" ") || void 0,
                            i = "eval" === r[0] ? void 0 : r[0]; return new t(o, void 0, i, r[1], r[2], e) }, this) }, parseFFOrSafari: function(r) { var o = n(r.stack.split("\n"), function(t) { return !t.match(i) }, this); return e(o, function(e) { if (e.indexOf(" > eval") > -1 && (e = e.replace(/ line (\d+)(?: > eval line \d+)* > eval\:\d+\:\d+/g, ":$1")), e.indexOf("@") === -1 && e.indexOf(":") === -1) return new t(e); var n = e.split("@"),
                            r = this.extractLocation(n.pop()),
                            o = n.shift() || void 0; return new t(o, void 0, r[0], r[1], r[2], e) }, this) }, parseOpera: function(t) { return !t.stacktrace || t.message.indexOf("\n") > -1 && t.message.split("\n").length > t.stacktrace.split("\n").length ? this.parseOpera9(t) : t.stack ? this.parseOpera11(t) : this.parseOpera10(t) }, parseOpera9: function(e) { for (var n = /Line (\d+).*script (?:in )?(\S+)/i, r = e.message.split("\n"), o = [], i = 2, a = r.length; i < a; i += 2) { var s = n.exec(r[i]);
                        s && o.push(new t(void 0, void 0, s[2], s[1], void 0, r[i])) } return o }, parseOpera10: function(e) { for (var n = /Line (\d+).*script (?:in )?(\S+)(?:: In function (\S+))?$/i, r = e.stacktrace.split("\n"), o = [], i = 0, a = r.length; i < a; i += 2) { var s = n.exec(r[i]);
                        s && o.push(new t(s[3] || void 0, void 0, s[2], s[1], void 0, r[i])) } return o }, parseOpera11: function(o) { var i = n(o.stack.split("\n"), function(t) { return !!t.match(r) && !t.match(/^Error created at/) }, this); return e(i, function(e) { var n, r = e.split("@"),
                            o = this.extractLocation(r.pop()),
                            i = r.shift() || "",
                            a = i.replace(/<anonymous function(: (\w+))?>/, "$2").replace(/\([^\)]*\)/g, "") || void 0;
                        i.match(/\(([^\)]*)\)/) && (n = i.replace(/^[^\(]+\(([^\)]*)\)$/, "$1")); var s = void 0 === n || "[arguments not available]" === n ? void 0 : n.split(","); return new t(a, s, o[0], o[1], o[2], e) }, this) } } }) }, function(t, e, n) { var r, o, i;! function(n, a) { "use strict";
            o = [], r = a, i = "function" == typeof r ? r.apply(e, o) : r, !(void 0 !== i && (t.exports = i)) }(this, function() { "use strict";

            function t(t) { return !isNaN(parseFloat(t)) && isFinite(t) }

            function e(t, e, n, r, o, i) { void 0 !== t && this.setFunctionName(t), void 0 !== e && this.setArgs(e), void 0 !== n && this.setFileName(n), void 0 !== r && this.setLineNumber(r), void 0 !== o && this.setColumnNumber(o), void 0 !== i && this.setSource(i) } return e.prototype = { getFunctionName: function() { return this.functionName }, setFunctionName: function(t) { this.functionName = String(t) }, getArgs: function() { return this.args }, setArgs: function(t) { if ("[object Array]" !== Object.prototype.toString.call(t)) throw new TypeError("Args must be an Array");
                    this.args = t }, getFileName: function() { return this.fileName }, setFileName: function(t) { this.fileName = String(t) }, getLineNumber: function() { return this.lineNumber }, setLineNumber: function(e) { if (!t(e)) throw new TypeError("Line Number must be a Number");
                    this.lineNumber = Number(e) }, getColumnNumber: function() { return this.columnNumber }, setColumnNumber: function(e) { if (!t(e)) throw new TypeError("Column Number must be a Number");
                    this.columnNumber = Number(e) }, getSource: function() { return this.source }, setSource: function(t) { this.source = String(t) }, toString: function() { var e = this.getFunctionName() || "{anonymous}",
                        n = "(" + (this.getArgs() || []).join(",") + ")",
                        r = this.getFileName() ? "@" + this.getFileName() : "",
                        o = t(this.getLineNumber()) ? ":" + this.getLineNumber() : "",
                        i = t(this.getColumnNumber()) ? ":" + this.getColumnNumber() : ""; return e + n + r + o + i } }, e }) }, function(t, e, n) { "use strict";

        function r(t, e, n) { var r = e.payload || {};
            r.body && delete r.body; var o = a.extend(!0, {}, t.data, r);
            t._isUncaught && (o._isUncaught = !0), n(null, o) }

        function o(t, e, n) { t.telemetryEvents && a.set(t, "data.body.telemetry", t.telemetryEvents), n(null, t) }

        function i(t, e, n) { if (!t.message) return void n(null, t); var r = "data.body.trace_chain.0",
                o = a.get(t, r); if (o || (r = "data.body.trace", o = a.get(t, r)), o) { if (!o.exception || !o.exception.description) return a.set(t, r + ".exception.description", t.message), void n(null, t); var i = a.get(t, r + ".extra") || {},
                    s = a.extend(!0, {}, i, { message: t.message });
                a.set(t, r + ".extra", s) }
            n(null, t) } var a = n(6);
        t.exports = { itemToPayload: r, addTelemetryData: o, addMessageWithError: i } }, function(t, e, n) { "use strict";

        function r(t, e) { var n = t.level,
                r = c.LEVELS[n] || 0,
                o = c.LEVELS[e.reportLevel] || 0; return !(r < o) && (!c.get(e, "plugins.jquery.ignoreAjaxErrors") || !c.get(t, "body.message.extra.isAjax")) }

        function o(t, e) { var n = !!t._isUncaught;
            delete t._isUncaught; var r = t._originalArgs;
            delete t._originalArgs; try { if (c.isFunction(e.checkIgnore) && e.checkIgnore(n, r, t)) return !1 } catch (t) { e.checkIgnore = null, l.error("Error while calling custom checkIgnore(), removing", t) } return !0 }

        function i(t, e) { return !s(t, e, "blacklist") }

        function a(t, e) { return s(t, e, "whitelist") }

        function s(t, e, n) { var r = !1; "blacklist" === n && (r = !0); var o, i, a, s, u, p, f, h, d, m; try { if (o = r ? e.hostBlackList : e.hostWhiteList, f = o && o.length, i = c.get(t, "body.trace"), !o || 0 === f) return !r; if (!i || !i.frames) return !r; for (u = i.frames.length, d = 0; d < u; d++) { if (a = i.frames[d], s = a.filename, !c.isType(s, "string")) return !r; for (m = 0; m < f; m++)
                        if (p = o[m], h = new RegExp(p), h.test(s)) return !0 } } catch (t) { r ? e.hostBlackList = null : e.hostWhiteList = null; var v = r ? "hostBlackList" : "hostWhiteList"; return l.error("Error while reading your configuration's " + v + " option. Removing custom " + v + ".", t), !r } return !1 }

        function u(t, e) { var n, r, o, i, a, s, u, p, f; try { if (a = !1, o = e.ignoredMessages, !o || 0 === o.length) return !0; if (u = t.body, p = c.get(u, "trace.exception.message"), f = c.get(u, "message.body"), n = p || f, !n) return !0; for (i = o.length, r = 0; r < i && (s = new RegExp(o[r], "gi"), !(a = s.test(n))); r++); } catch (t) { e.ignoredMessages = null, l.error("Error while reading your configuration's ignoredMessages option. Removing custom ignoredMessages.") } return !a } var c = n(6),
            l = n(13);
        t.exports = { checkIgnore: r, userCheckIgnore: o, urlIsNotBlacklisted: i, urlIsWhitelisted: a, messageIsIgnored: u } }, function(t, e, n) { "use strict";

        function r(t, e, n, r, o) { var i = t[e];
            t[e] = n(i), r && r[o].push([t, e, i]) }

        function o(t, e) { for (var n; t[e].length;) n = t[e].shift(), n[0][n[1]] = n[2] }

        function i(t, e, n, r, o) { var i = t.autoInstrument;
            i === !1 ? this.autoInstrument = {} : (h.isType(i, "object") || (i = m), this.autoInstrument = h.extend(!0, {}, m, i)), this.scrubTelemetryInputs = !!t.scrubTelemetryInputs, this.telemetryScrubber = t.telemetryScrubber, this.telemeter = e, this.rollbar = n, this._window = r || {}, this._document = o || {}, this.replacements = { network: [], log: [], navigation: [], connectivity: [] }, this.eventRemovers = { dom: [], connectivity: [] }, this._location = this._window.location, this._lastHref = this._location && this._location.href }

        function a(t) { return (t.getAttribute("type") || "").toLowerCase() }

        function s(t, e, n) { if (t.tagName.toLowerCase() !== e.toLowerCase()) return !1; if (!n) return !0;
            t = a(t); for (var r = 0; r < n.length; r++)
                if (n[r] === t) return !0;
            return !1 }

        function u(t, e) { return t.target ? t.target : e && e.elementFromPoint ? e.elementFromPoint(t.clientX, t.clientY) : void 0 }

        function c(t) { for (var e, n = 5, r = [], o = 0; t && o < n && (e = f(t), "html" !== e.tagName); o++) r.push(e), t = t.parentNode; return r.reverse() }

        function l(t) { for (var e, n, r = 80, o = " > ", i = o.length, a = [], s = 0, u = 0; u < t.length && (e = p(t[u]), n = s + a.length * i + e.length, !(u > 0 && n >= r)); u++) a.push(e), s += e.length; return a.join(o) }

        function p(t) { if (!t || !t.tagName) return ""; var e = [t.tagName];
            t.id && e.push("#" + t.id), t.classes && e.push("." + t.classes.join(".")); for (var n = 0; n < t.attributes.length; n++) e.push("[" + t.attributes[n].key + '="' + t.attributes[n].value + '"]'); return e.join("") }

        function f(t) { if (!t || !t.tagName) return null; var e, n, r, o, i = {};
            i.tagName = t.tagName.toLowerCase(), t.id && (i.id = t.id), e = t.className, e && h.isType(e, "string") && (i.classes = e.split(/\s+/)); var a = ["type", "name", "title", "alt"]; for (i.attributes = [], o = 0; o < a.length; o++) n = a[o], r = t.getAttribute(n), r && i.attributes.push({ key: n, value: r }); return i } var h = n(6),
            d = n(18),
            m = { network: !0, log: !0, dom: !0, navigation: !0, connectivity: !0 };
        i.prototype.configure = function(t) { var e = t.autoInstrument,
                n = h.extend(!0, {}, this.autoInstrument);
            e === !1 ? this.autoInstrument = {} : (h.isType(e, "object") || (e = m), this.autoInstrument = h.extend(!0, {}, m, e)), this.instrument(n) }, i.prototype.instrument = function(t) {!this.autoInstrument.network || t && t.network ? !this.autoInstrument.network && t && t.network && this.deinstrumentNetwork() : this.instrumentNetwork(), !this.autoInstrument.log || t && t.log ? !this.autoInstrument.log && t && t.log && this.deinstrumentConsole() : this.instrumentConsole(), !this.autoInstrument.dom || t && t.dom ? !this.autoInstrument.dom && t && t.dom && this.deinstrumentDom() : this.instrumentDom(), !this.autoInstrument.navigation || t && t.navigation ? !this.autoInstrument.navigation && t && t.navigation && this.deinstrumentNavigation() : this.instrumentNavigation(), !this.autoInstrument.connectivity || t && t.connectivity ? !this.autoInstrument.connectivity && t && t.connectivity && this.deinstrumentConnectivity() : this.instrumentConnectivity() }, i.prototype.deinstrumentNetwork = function() { o(this.replacements, "network") }, i.prototype.instrumentNetwork = function() {
            function t(t, n) { t in n && h.isFunction(n[t]) && r(n, t, function(t) { return e.rollbar.wrap(t) }, e.replacements, "network") } var e = this; if ("XMLHttpRequest" in this._window) { var n = this._window.XMLHttpRequest.prototype;
                r(n, "open", function(t) { return function(e, n) { return h.isType(n, "string") && (this.__rollbar_xhr = { method: e, url: n, status_code: null, start_time_ms: h.now(), end_time_ms: null }), t.apply(this, arguments) } }, this.replacements, "network"), r(n, "send", function(n) { return function(o) {
                        function i() { if (a.__rollbar_xhr && (1 === a.readyState || 4 === a.readyState)) { null === a.__rollbar_xhr.status_code && (a.__rollbar_xhr.status_code = 0, a.__rollbar_event = e.telemeter.captureNetwork(a.__rollbar_xhr, "xhr")), 1 === a.readyState ? a.__rollbar_xhr.start_time_ms = h.now() : a.__rollbar_xhr.end_time_ms = h.now(); try { var t = a.status;
                                    t = 1223 === t ? 204 : t, a.__rollbar_xhr.status_code = t, a.__rollbar_event.level = e.telemeter.levelFromStatus(t) } catch (t) {} } } var a = this; return t("onload", a), t("onerror", a), t("onprogress", a), "onreadystatechange" in a && h.isFunction(a.onreadystatechange) ? r(a, "onreadystatechange", function(t) { return e.rollbar.wrap(t, void 0, i) }) : a.onreadystatechange = i, n.apply(this, arguments) } }, this.replacements, "network") } "fetch" in this._window && r(this._window, "fetch", function(t) { return function(n, r) { for (var o = new Array(arguments.length), i = 0, a = o.length; i < a; i++) o[i] = arguments[i]; var s, u = o[0],
                        c = "GET";
                    h.isType(u, "string") ? s = u : (s = u.url, u.method && (c = u.method)), o[1] && o[1].method && (c = o[1].method); var l = { method: c, url: s, status_code: null, start_time_ms: h.now(), end_time_ms: null }; return e.telemeter.captureNetwork(l, "fetch"), t.apply(this, o).then(function(t) { return l.end_time_ms = h.now(), l.status_code = t.status, t }) } }, this.replacements, "network") }, i.prototype.deinstrumentConsole = function() { if ("console" in this._window && this._window.console.log)
                for (var t; this.replacements.log.length;) t = this.replacements.log.shift(), this._window.console[t[0]] = t[1] }, i.prototype.instrumentConsole = function() {
            function t(t) { var r = n[t],
                    o = n,
                    i = "warn" === t ? "warning" : t;
                n[t] = function() { var t = Array.prototype.slice.call(arguments),
                        n = h.formatArgsAsString(t);
                    e.telemeter.captureLog(n, i), r && Function.prototype.apply.call(r, o, t) }, e.replacements.log.push([t, r]) } if ("console" in this._window && this._window.console.log)
                for (var e = this, n = this._window.console, r = ["debug", "info", "warn", "error", "log"], o = 0, i = r.length; o < i; o++) t(r[o]) }, i.prototype.deinstrumentDom = function() {
            ("addEventListener" in this._window || "attachEvent" in this._window) && this.removeListeners("dom") }, i.prototype.instrumentDom = function() { if ("addEventListener" in this._window || "attachEvent" in this._window) { var t = this.handleClick.bind(this),
                    e = this.handleBlur.bind(this);
                this.addListener("dom", this._window, "click", "onclick", t, !0), this.addListener("dom", this._window, "blur", "onfocusout", e, !0) } }, i.prototype.handleClick = function(t) { try { var e = u(t, this._document),
                    n = e && e.tagName,
                    r = s(e, "a") || s(e, "button");
                n && (r || s(e, "input", ["button", "submit"])) ? this.captureDomEvent("click", e) : s(e, "input", ["checkbox", "radio"]) && this.captureDomEvent("input", e, e.value, e.checked) } catch (t) {} }, i.prototype.handleBlur = function(t) { try { var e = u(t, this._document);
                e && e.tagName && (s(e, "textarea") ? this.captureDomEvent("input", e, e.value) : s(e, "select") && e.options && e.options.length ? this.handleSelectInputChanged(e) : s(e, "input") && !s(e, "input", ["button", "submit", "hidden", "checkbox", "radio"]) && this.captureDomEvent("input", e, e.value)) } catch (t) {} }, i.prototype.handleSelectInputChanged = function(t) { if (t.multiple)
                for (var e = 0; e < t.options.length; e++) t.options[e].selected && this.captureDomEvent("input", t, t.options[e].value);
            else t.selectedIndex >= 0 && t.options[t.selectedIndex] && this.captureDomEvent("input", t, t.options[t.selectedIndex].value) }, i.prototype.captureDomEvent = function(t, e, n, r) { if (this.scrubTelemetryInputs || "password" === a(e)) n = "[scrubbed]";
            else if (this.telemetryScrubber) { var o = f(e);
                this.telemetryScrubber(o) && (n = "[scrubbed]") } var i = l(c(e));
            this.telemeter.captureDom(t, i, n, r) }, i.prototype.deinstrumentNavigation = function() { var t = this._window.chrome,
                e = t && t.app && t.app.runtime,
                n = !e && this._window.history && this._window.history.pushState;
            n && o(this.replacements, "navigation") }, i.prototype.instrumentNavigation = function() { var t = this._window.chrome,
                e = t && t.app && t.app.runtime,
                n = !e && this._window.history && this._window.history.pushState; if (n) { var o = this;
                r(this._window, "onpopstate", function(t) { return function() { var e = o._location.href;
                        o.handleUrlChange(o._lastHref, e), t && t.apply(this, arguments) } }, this.replacements, "navigation"), r(this._window.history, "pushState", function(t) { return function() { var e = arguments.length > 2 ? arguments[2] : void 0; return e && o.handleUrlChange(o._lastHref, e + ""), t.apply(this, arguments) } }, this.replacements, "navigation") } }, i.prototype.handleUrlChange = function(t, e) { var n = d.parse(this._location.href),
                r = d.parse(e),
                o = d.parse(t);
            this._lastHref = e, n.protocol === r.protocol && n.host === r.host && (e = r.path + (r.hash || "")), n.protocol === o.protocol && n.host === o.host && (t = o.path + (o.hash || "")), this.telemeter.captureNavigation(t, e) }, i.prototype.deinstrumentConnectivity = function() {
            ("addEventListener" in this._window || "body" in this._document) && (this._window.addEventListener ? this.removeListeners("connectivity") : o(this.replacements, "connectivity")) }, i.prototype.instrumentConnectivity = function() { if ("addEventListener" in this._window || "body" in this._document)
                if (this._window.addEventListener) this.addListener("connectivity", this._window, "online", void 0, function() { this.telemeter.captureConnectivityChange("online") }.bind(this), !0), this.addListener("connectivity", this._window, "offline", void 0, function() { this.telemeter.captureConnectivityChange("offline") }.bind(this), !0);
                else { var t = this;
                    r(this._document.body, "ononline", function(e) { return function() { t.telemeter.captureConnectivityChange("online"), e && e.apply(this, arguments) } }, this.replacements, "connectivity"), r(this._document.body, "onoffline", function(e) { return function() { t.telemeter.captureConnectivityChange("offline"), e && e.apply(this, arguments) } }, this.replacements, "connectivity") } }, i.prototype.addListener = function(t, e, n, r, o, i) { e.addEventListener ? (e.addEventListener(n, o, i), this.eventRemovers[t].push(function() { e.removeEventListener(n, o, i) })) : r && (e.attachEvent(r, o), this.eventRemovers[t].push(function() { e.detachEvent(r, o) })) }, i.prototype.removeListeners = function(t) { for (var e; this.eventRemovers[t].length;)(e = this.eventRemovers[t].shift())() }, t.exports = i }])
});


/*****************
 ** WEBPACK FOOTER
 ** ./~/rollbar/dist/rollbar.umd.min.js
 ** module id = 4168
 ** module chunks = 1
 **/