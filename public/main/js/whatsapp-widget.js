/*!
 * WhatsApp Widget v1.2.0 (c) 2020 - Fajar Setya Budi
 * Contributors (https://github.com/agraris/whatsapp-widget/graphs/contributors)
 * Licensed under MIT (https://github.com/agraris/whatsapp-widget/blob/master/LICENSE)
 * WhatsApp Widget does not affiliate with WhatsApp Inc. in any way.
 */
! function (e, t) {

    "object" == typeof exports && "undefined" != typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define(t) : (e = e || self).WhatsAppWidget = t()
}(this, (function () {
    "use strict";

    function e(e, t) {
        for (var n = 0; n < t.length; n++) {
            var i = t[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
    }

    function t(e, t, n) {
        return t in e ? Object.defineProperty(e, t, {
            value: n,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : e[t] = n, e
    }

    function n(e, t) {
        var n = Object.keys(e);
        if (Object.getOwnPropertySymbols) {
            var i = Object.getOwnPropertySymbols(e);
            t && (i = i.filter((function (t) {
                return Object.getOwnPropertyDescriptor(e, t).enumerable
            }))), n.push.apply(n, i)
        }
        return n
    }

    function i(e) {
        for (var i = 1; i < arguments.length; i++) {
            var a = null != arguments[i] ? arguments[i] : {};
            i % 2 ? n(Object(a), !0).forEach((function (n) {
                t(e, n, a[n])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(a)) : n(Object(a)).forEach((function (t) {
                Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(a, t))
            }))
        }
        return e
    }
    var a = '[data-toggle="'.concat("wa-chat", '"]'),
        r = '[data-toggle="'.concat("wa-send", '"]'),
        s = {
            name: "",
            division: "",
            photo: "",
            introduction: ""
        },
        o = {
            name: "string",
            division: "string",
            photo: "string",
            introduction: "string"
        },
        c = [{
            data: "name",
            type: "text",
            required: !0
        }, {
            data: "message",
            type: "text",
            required: !0
        }],
        l = {
            data: "string",
            type: "string",
            required: "boolean"
        },
        d = {},
        u = function () {
            function t(e, n, i) {
                ! function (e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }(this, t), d[e.id] || (this._element = e, this._config = this._getConfig(n), this._inputs = this._getInput(i), this._phoneNumber = this._element.getAttribute("action"), this._isShown = !1, this._toggleChat = "", this._contentElement = "", this._toggleSend = "", this._buildHTML(), this._setEventListener(), d[e.id] = this)
            }
            var n, u, h;
            return n = t, (u = [{
                key: "toggle",
                value: function () {
                    var e = this;
                    Object.keys(d).forEach((function (t) {
                        t !== e._element.id && d[t]._isShown && d[t].toggle()
                    })), this._isShown ? this._hide() : this._show()
                }
            }, {
                key: "_sendMessage",
                value: function () {
                    if (!/^\d+$/.test(this._phoneNumber)) throw new Error("Phone number (" + this._phoneNumber + ") is invalid.");
                    for (var e = this._element.querySelectorAll("[data-message]"), t = "https://wa.me/" + this._phoneNumber + "?text=", n = !0, i = 0; i < e.length; i++) {
                        var a = e[i];
                        this._formValidation(a) || (n = !1);
                        var r = a.getAttribute("data-message");
                        t += r.replace(/^./, r[0].toUpperCase()) + ": " + a.value + "%0A"
                    }
                    n && window.open(t, "_blank")
                }
            }, {
                key: "_buildHTML",
                value: function () {
                    if (this._element.innerHTML) return !1;
                    this._verifyInput(this._inputs);
                    var e = document.createElement("a"),
                        t = "#" + this._element.id;
                    e.href = t, e.classList.add("wa-widget-toggle"), e.setAttribute("data-toggle", "wa-chat"), e.setAttribute("data-target", t), e.innerHTML = '<img src="https://cdn.iconscout.com/icon/free/png-512/whatsapp-circle-1868968-1583132.png" class="" style="margin-left: -15px;height: 46px;">';
                    var n = "".concat(e.outerHTML, '\n            <div class="').concat("wa-widget-content", ' chat-tab">\n                <header class="chat-header">\n                    <div class="chat-admin-picture">\n                        <img src="').concat(this._config.photo, '" alt="').concat(this._config.name, '\'s Photos">\n                    </div>\n                    <div class="chat-admin-details">\n                        <h4>').concat(this._config.name, "</h4>\n                        <p><small>").concat(this._config.division, '</small></p>\n                    </div>\n                </header>\n                <div class="chat-content">\n                    <div class="chat-item">\n                        <p>').concat(this._config.introduction, "</p>\n                    </div>\n                </div>\n                ").concat(this._buildInputs(this._inputs).outerHTML, "\n            </div>");
                    this._element.innerHTML = n
                }
            }, {
                key: "_buildInputs",
                value: function (e) {
                    var t = document.createElement("div");
                    t.classList.add("chat-form"), e.forEach((function (e) {
                        var n = document.createElement("input");
                        n.type = e.type, n.setAttribute("data-message", e.data), n.placeholder = e.data.replace(/^./, e.data[0].toUpperCase()), n.required = e.required, t.appendChild(n)
                    }));
                    var n = document.createElement("button");
                    return n.classList.add("chat-send"), n.type = "submit", n.setAttribute("data-toggle", "wa-send"), n.innerHTML = "<strong>Send</strong>", t.appendChild(n), t
                }
            }, {
                key: "_setEventListener",
                value: function () {
                    var e = this;
                    this._toggleChat = document.querySelector(a + '[data-target="#' + this._element.id + '"]'), this._contentElement = this._element.getElementsByClassName("wa-widget-content").item(0), this._toggleSend = this._element.querySelector(r), this._toggleChat && this._toggleChat.addEventListener("click", (function (t) {
                        t.preventDefault(), e.toggle()
                    })), this._toggleSend && this._toggleSend.addEventListener("click", (function (t) {
                        t.preventDefault(), e._sendMessage()
                    }))
                }
            }, {
                key: "_show",
                value: function () {
                    this._element.classList.add("expanded"), this._toggleChat.classList.add("expanded"), this._contentElement.classList.add("expanded"), this._isShown = !0
                }
            }, {
                key: "_hide",
                value: function () {
                    this._element.classList.remove("expanded"), this._toggleChat.classList.remove("expanded"), this._contentElement.classList.remove("expanded"), this._isShown = !1
                }
            }, {
                key: "_formValidation",
                value: function (e) {
                    if (!e.required) return !0;
                    switch (e.classList.remove("required"), e.type) {
                        case "email":
                            if (!/^\S+@\S+$/.test(e.value)) return e.classList.add("required"), !1;
                            break;
                        default:
                            if ("" == e.value || null == e.value) return e.classList.add("required"), !1
                    }
                    return !0
                }
            }, {
                key: "_getConfig",
                value: function (e) {
                    return e = i(i({}, s), e), this._typeCheck(e, o), e
                }
            }, {
                key: "_getInput",
                value: function (e) {
                    return void 0 === e || 0 === e.length ? c : e
                }
            }, {
                key: "_verifyInput",
                value: function (e) {
                    var t = this;
                    e.forEach((function (e) {
                        t._typeCheck(e, l)
                    }))
                }
            }, {
                key: "_typeCheck",
                value: function (e, t) {
                    var n = this;
                    Object.keys(t).forEach((function (i) {
                        var a = t[i],
                            r = e[i],
                            s = r && n._isElement(r) ? "element" : n._toType(r);
                        if (!new RegExp(a).test(s)) throw new Error("WhatsApp Widget: " + 'Option "'.concat(i, '" provided type "').concat(s, '" ') + 'but expected type "'.concat(a, '".'))
                    }))
                }
            }, {
                key: "_isElement",
                value: function (e) {
                    (e[0] || e).nodeType
                }
            }, {
                key: "_toType",
                value: function (e) {
                    return null == e ? "".concat(e) : {}.toString.call(e).match(/\s([a-z]+)/i)[1].toLowerCase()
                }
            }]) && e(n.prototype, u), h && e(n, h), t
        }();
    return document.body.onload = function () {
        for (var e = document.querySelectorAll("[data-chat]"), t = 0; t < e.length; t++) {
            var n = e[t];
            new u(n, {}, [])
        }
    }, u
}));
