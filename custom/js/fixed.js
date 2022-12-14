"use strict";

/*
 * FixedMidashi JavaScript Library, version 1.11 (2018/12/03)
 * http://hp.vector.co.jp/authors/VA056612/fixed_midashi/
 * Copyright (C) 2012-2018 K.Koiso
 */

/* Exsample */

/*******************************************************************
<script type="text/javascript" src="hoge/fixed_midashi.js"></script>

<!-- body mode -->
<body onLoad="FixedMidashi.create();">
  <table _fixedhead="rows:1; cols:1">
    ...

<!-- div mode -->
<style type="text/css" media="screen">
  div.scroll_div { overflow: auto; }
</style>
<body onLoad="FixedMidashi.create();">
  <div class="scroll_div">
    <table _fixedhead="rows:1; cols:1">
      ...
*******************************************************************/
var FixedMidashi = new function () {
  var DISABLED = false;
  var ROWS = 1;
  var COLS = 0;
  var DIV_FULL_MODE = false;
  var DIV_AUTO_SIZE = "both"; // both | width | height | none

  var COPY_ID = true;
  var BORDER_COLOR = null;
  var BORDER_STYLE = null;
  var BORDER_WIDTH = null;
  var BOX_SHADOW = null;
  var DIV_MIN_WIDTH = 150;
  var DIV_MIN_HEIGHT = 150;
  var DIV_BODY_SCROLL = 1;
  var RADIO_PREFIX = "_FIXED_HEADER_";
  var POS_FIXED = 1;
  var POS_ABSOLUTE = 2;
  var POS_MIX = 3;

  var _positionMode = -1;

  var h = "checkbox",
      f = "select-multiple",
      e = "select-one",
      g = "change",
      m = "radio",
      l = "INPUT",
      cc = "fixed",
      bc = "transparent",
      ac = "0px",
      Zb = "absolute",
      Yb = "none",
      Xb = "hidden",
      Wb = "auto",
      Vb = "",
      I = "class",
      Ub = "THEAD",
      Tb = "scroll",
      n = "resize",
      Sb = -1,
      Rb = null,
      Qb = true,
      Pb = "both",
      Ob = false,
      Nb = this;
  var TIMER_WATCH_TABLESIZE = 3e3,
      TID_HEADER = "H",
      TID_NUMBER = "N",
      TID_CORNER = "C",
      PX = "px",
      HEIGHT_MARGIN = 10,
      MIN_SIZE = 1,
      _isIE = Ob,
      _IEver = 0,
      _isIE11 = Ob,
      _isFirefox = Ob,
      _isOpera = Ob,
      _isSafari = Ob,
      _isChrome = Ob,
      _isMobile = Ob,
      _isBackCompat = Ob,
      _fixedHeaders = Rb,
      _fixedList = Rb,
      _body = Rb,
      _resizeTimerId = Rb,
      _execFlag = Ob,
      _IE_retryCount = 0;

  Nb.create = function () {
    var f = "_fixedhead";
    if (DISABLED) return Sb;
    if (!document.body.getBoundingClientRect) return -2;
    if (!window.addEventListener && !window.attachEvent) return -3;
    var l = new Date().getTime(),
        h = _fixedHeaders == Rb;
    if (!h) for (var b = 0; b < _fixedHeaders.length; b++) {
      _fixedHeaders[b].removeAllTables(Ob);
    }

    for (var i = document.body.getElementsByTagName("TABLE"), e = [], b = 0; b < i.length; b++) {
      var c = i[b],
          d = c.getAttribute(f);
      if (d == Rb) d = c._fixedhead;
      if (d == undefined) continue;
      if (c.rows.length == 0) continue;
      e.push(c);
    }

    if (e.length == 0) return -4;
    var g = Rb;

    if (h) {
      var a = navigator.userAgent.toLowerCase();
      _isIE = a.indexOf("msie") >= 0;

      if (_isIE) {
        var j = a.indexOf("msie"),
            m = a.indexOf(";", j);
        _IEver = Number(a.substring(j + 5, m));
      }

      if (!_isIE) _isIE11 = a.indexOf("trident") >= 0;
      _isFirefox = a.indexOf("firefox") >= 0;
      _isOpera = a.indexOf("opera") >= 0;
      _isSafari = a.indexOf("safari") >= 0 && a.indexOf("chrome") < 0;
      _isChrome = a.indexOf("chrome") >= 0;
      _isMobile = a.indexOf("mobile") >= 0;

      if (_isIE && _rect(i[0]).right >= 1e4 && _IE_retryCount < 10) {
        setTimeout(FixedMidashi.create, 10);
        _IE_retryCount++;
        return -5;
      }

      _isBackCompat = document.compatMode == "BackCompat";
      _body = _isBackCompat ? document.body : document.documentElement;
      if (_isIE && (_IEver <= 7 || _IEver <= 9 && _isBackCompat)) _positionMode = POS_ABSOLUTE;else if (_positionMode == Sb) {
        _positionMode = POS_MIX;
        if (_isMobile) _positionMode = POS_FIXED;
      }
      if (_isIE && _IEver == 8 && !_isBackCompat) _fixedList = new _FixedElementList();
      if (_isFirefox) g = _createObjectForFirefox();
      _isChrome && _createObjectForChrome();

      _addEventListener(window, n, _onBodyResize);

      _isMobile && _addEventListener(window, "orientationchange", _onBodyResize);
      (_isFirefox || _isSafari) && !_isMobile && TIMER_WATCH_TABLESIZE >= 0 && setInterval(_checkZoom, TIMER_WATCH_TABLESIZE);

      _addEventListener(window, Tb, _onBodyScroll);
    }

    _fixedHeaders = [];

    for (var b = 0; b < e.length; b++) {
      var c = e[b],
          d = c.getAttribute(f);
      if (d == Rb) d = c._fixedhead;

      var k = _createFixedHeader(c, d, e.length);

      _fixedHeaders.push(k);
    }

    _execute("init");

    h && _createCSS("print", ".fixed_header_display_none_at_print { display: none; visibility: hidden; }");
    g != Rb && g.parentNode.removeChild(g);
    return new Date().getTime() - l;
  };

  function _checkZoom() {
    if (_fixedHeaders == Rb) return;

    for (var a = 0; a < _fixedHeaders.length; a++) {
      if (_fixedHeaders[a].checkZoom()) {
        _execute(n);

        break;
      }
    }
  }

  Nb.remove = function () {
    if (_fixedHeaders == Rb) return;

    for (var a = 0; a < _fixedHeaders.length; a++) {
      _fixedHeaders[a].removeAllTables(Qb);
    }

    _fixedHeaders = [];
  };

  Nb.syncValue = function (a) {
    if (_fixedHeaders == Rb) return;
    if (!a) return;

    _copyValues(a);
  };

  Nb.syncStyle = function (a, d) {
    if (_fixedHeaders == Rb) return;
    if (!a) return;

    if (_fixedList != Rb) {
      var e = _fixedList.getAll(a);

      if (e == Rb) return;

      for (var b = 0; b < e.length; b++) {
        _copyStyle(a, e[b], d);
      }

      return;
    }

    var c = a.$FXH_FIXED_ELEMENT;
    if (c == undefined) return;
    if (!c.$IS_ARRAY) _copyStyle(a, c, d);else for (var b = 0; b < c.length; b++) {
      _copyStyle(a, c[b], d);
    }
  };

  Nb.getFixedElement = function (b) {
    if (_fixedHeaders == Rb) return Rb;
    if (!b) return Rb;
    if (_fixedList != Rb) return _fixedList.get(b);
    var a = b.$FXH_FIXED_ELEMENT;
    if (!a) return Rb;
    if (!a.$IS_ARRAY) return a;
    if (a.length == 0) return Rb;
    return a[a.length - 1];
  };

  Nb.getFixedElements = function (b) {
    if (_fixedHeaders == Rb) return Rb;
    if (!b) return Rb;
    if (_fixedList != Rb) return _fixedList.getAll(b);
    var a = b.$FXH_FIXED_ELEMENT;
    if (!a) return Rb;
    if (a.$IS_ARRAY && a.length == 0) return Rb;
    var c = [];
    if (!a.$IS_ARRAY) c.push(a);else for (var d = 0; d < a.length; d++) {
      c.push(a[d]);
    }
    return c;
  };

  Nb.getSourceElement = function (a) {
    if (_fixedHeaders == Rb) return Rb;
    if (!a) return Rb;
    var b = a.$SOURCE_ELEMENT;
    return !b ? Rb : b;
  };

  Nb.isFixedElement = function (a) {
    if (_fixedHeaders == Rb) return Ob;
    if (!a) return Ob;
    return a.$SOURCE_ELEMENT != undefined;
  };

  function _createFixedHeader(k, H, F) {
    for (var B = k.rows, A = _cells(B[0]), r = 0, e = 0; e < A.length; e++) {
      r += A[e].colSpan;
    }

    var d = ROWS,
        j = COLS,
        c = Sb,
        b = Sb,
        z = COPY_ID,
        C = Rb,
        f = BORDER_COLOR,
        g = BORDER_STYLE,
        h = BORDER_WIDTH,
        i = BOX_SHADOW,
        l = Rb,
        m = 1,
        s = DIV_FULL_MODE,
        v = DIV_AUTO_SIZE,
        p = Rb,
        q = Rb,
        D = _getElementByTagName(k, Ub);

    if (D != Rb) d = D.rows.length;

    for (var E = H.split(";"), e = 0; e < E.length; e++) {
      var t = E[e].split(":");
      if (t.length != 2) continue;

      var G = _trim(t[0]).toLowerCase(),
          a = _trim(t[1]);

      switch (G) {
        case "rows":
          d = Number(a);
          break;

        case "cols":
          j = Number(a);
          break;

        case "div-max-width":
          c = _percent(a);
          break;

        case "div-max-height":
          b = _percent(a);
          break;

        case "div-full-mode":
          s = a.toLowerCase() == "yes";
          break;

        case "div-auto-size":
          v = a.toLowerCase();
          break;

        case "copyid":
          z = a.toLowerCase() == "yes";
          break;

        case I:
          C = a;
          break;

        case "border-color":
          f = a;
          break;

        case "border-style":
          g = a;
          break;

        case "border-width":
          h = a;
          break;

        case "box-shadow":
          i = a.replace(/ +/g, " ");
          break;

        case "bgcolor":
          l = a;
          break;

        case "opacity":
          m = Number(a);
          break;

        case "body-header-id":
          p = a;
          break;

        case "body-left-header-id":
          q = a;
      }
    }

    if (d < 0 || d >= Math.min(B.length, 11)) d = 0;
    if (j < 0 || j >= Math.min(r, 11)) j = 0;
    if (!c || c < 1 || c > 100) c = Sb;
    if (!b || b < 1 || b > 100) b = Sb;
    if (F > 1) s = Ob;
    if (m < 0 || m > 1) m = 1;
    var n = document.createElement("DIV");
    if (f != Rb && !_setStyle(n, "borderColor", f)) f = Rb;
    if (g != Rb && !_setStyle(n, "borderStyle", g)) g = Rb;
    if (h != Rb && !_setStyle(n, "borderWidth", h)) h = Rb;
    if (i != Rb && !_setStyle(n, "boxShadow", i)) i = Rb;
    if (l != Rb && !_setStyle(n, "backgroundColor", l)) l = Rb;
    var w = Rb,
        x = Rb;
    if (p != Rb && !(_isIE && (_IEver <= 7 || _IEver <= 9 && _isBackCompat))) w = document.getElementById(p);
    if (q != Rb && !(_isIE && (_IEver <= 7 || _IEver <= 9 && _isBackCompat))) x = document.getElementById(q);
    var y = Rb;

    if (k.parentNode.tagName == "DIV") {
      var u = k.parentNode,
          o = u.currentStyle || document.defaultView.getComputedStyle(u, Vb);
      if (o.overflowX == Wb || o.overflowX == Tb || o.overflowY == Wb || o.overflowY == Tb) y = u;
    }

    return new _FixedHeader(y, k, r, d, j, c, b, s, v, z, C, f, g, h, i, l, m, w, x);
  }

  function _onBodyScroll() {
    for (var a = 0; a < _fixedHeaders.length; a++) {
      _fixedHeaders[a].onBodyScroll();
    }
  }

  function _onBodyResize() {
    if (_execFlag) return;
    _resizeTimerId != Rb && clearTimeout(_resizeTimerId);

    var a = function a() {
      _execute(n);
    };

    _resizeTimerId = setTimeout(a, 500);
  }

  function _execute(b) {
    _execFlag = Qb;
    _resizeTimerId = Rb;

    for (var a = 0; a < _fixedHeaders.length; a++) {
      if (b == n) _fixedHeaders[a].initOnResize();else _fixedHeaders[a].init();
    }

    _resizeSourceDiv();

    for (var a = 0; a < _fixedHeaders.length; a++) {
      _fixedHeaders[a].main();
    }

    _execFlag = Ob;
  }

  function _resizeSourceDiv() {
    for (var b = Ob, a = 0; a < _fixedHeaders.length; a++) {
      if (_fixedHeaders[a].hideAllDivs(Qb)) b = Qb;
    }

    if (!b) return;

    for (var a = 0; a < _fixedHeaders.length; a++) {
      _fixedHeaders[a].resizeSourceDiv1();
    }

    var d = document.body.style.overflowX,
        c = document.body.currentStyle || document.defaultView.getComputedStyle(document.body, Vb);
    if (_body.scrollWidth <= _body.clientWidth && c.overflowX != Tb) document.body.style.overflowX = Xb;

    for (var a = 0; a < _fixedHeaders.length; a++) {
      _fixedHeaders[a].resizeDivHeight();
    }

    for (var a = 0; a < _fixedHeaders.length; a++) {
      _fixedHeaders[a].resizeDivWidth();
    }

    document.body.style.overflowX = d;

    for (var a = 0; a < _fixedHeaders.length; a++) {
      _fixedHeaders[a].resizeSourceDiv2();
    }

    for (var a = 0; a < _fixedHeaders.length; a++) {
      _fixedHeaders[a].hideAllDivs(Ob);
    }
  }

  function _FixedHeader(a, d, E, p, y, v, B, xb, Z, F, G, J, K, L, zb, Q, bb, M, N) {
    var o = "CLIENT",
        j = "TBODY",
        g = "1px",
        q = this,
        f = a != Rb,
        b = Rb,
        c = Rb,
        e = Rb,
        rb = 0,
        qb = 0,
        hb = Vb,
        gb = Vb,
        U = Rb,
        W = Rb,
        u = [],
        yb = [],
        Y = 0,
        fb = 0,
        Cb = d.style.zIndex ? d.style.zIndex : 0,
        r = Ob,
        x = Ob,
        k = 0,
        n = 0,
        R = 0,
        S = 0,
        ib = 0,
        mb = 0,
        lb = 0,
        ob = 0,
        eb = 0,
        db = 0,
        X = 0,
        Ib = d.style.display,
        jb = Sb,
        nb = Sb,
        m = Rb,
        z = Sb,
        A = Sb,
        i = 0,
        l = 0,
        V = Rb,
        T = Rb;

    q.init = function () {
      if (Q == Rb) {
        var e = f ? a : d,
            b = _getBackgroundColor(e);

        if (b == Rb) {
          var c = e.parentNode;

          while (c) {
            b = _getBackgroundColor(c);
            if (b != Rb) break;
            if (c.tagName == "HTML") break;
            c = c.parentNode;
          }

          if (b == Rb) b = "white";
        }

        Q = b;
      }

      if (f) {
        _addEventListener(a, Tb, ab);

        Jb();
        X = _offsetWidth(d);
      }

      if (M) i = Math.max(_rect(M).bottom, 0);
      if (N) l = Math.max(_rect(N).right, 0);
      wb();
    };

    q.initOnResize = function () {
      A = Sb;
      z = Sb;
      nb = Sb;
      jb = Sb;
      if (M) i = Math.max(_rect(M).bottom, 0);
      if (N) l = Math.max(_rect(N).right, 0);

      if (f) {
        if (r || v > 0) a.style.width = Vb;
        if (x || B > 0) a.style.height = Vb;
        X = _offsetWidth(d);
      }

      wb();
    };

    q.removeAllTables = function (d) {
      b && w(b);
      c && w(c);
      e && w(e);
      b = Rb;
      c = Rb;
      e = Rb;

      if (f) {
        _removeEventListener(a, Tb, ab);

        if (d) {
          if (r || v > 0) a.style.width = Vb;
          if (x || B > 0) a.style.height = Vb;
        }
      }
    };

    q.hideAllDivs = function (h) {
      if (!f) return Ob;
      var d = b == Rb ? Rb : b.parentNode,
          g = c == Rb ? Rb : c.parentNode,
          j = e == Rb ? Rb : e.parentNode;

      if (h) {
        d && I(d, DIV_MIN_WIDTH);
        g && H(g, DIV_MIN_HEIGHT);
      }

      var i = h ? Yb : Vb;
      if (d) d.style.display = i;
      if (g) g.style.display = i;
      if (j) j.style.display = i;
      (r || x || v > 0 || B > 0) && Fb(h);

      if (h) {
        r && t(a, DIV_MIN_WIDTH);
        x && D(a, DIV_MIN_HEIGHT);
      }

      return Qb;
    };

    q.resizeSourceDiv1 = function () {
      if (!f) return;
      var e = m != Rb ? m : d;

      if (v > 0) {
        k = _body.clientWidth / 100 * v;
        k = Math.max(k, DIV_MIN_WIDTH);
        var c = _offsetWidth(e) + eb;
        c = Math.min(c, k);
        t(a, c);
      }

      if (B > 0) {
        n = _body.clientHeight / 100 * B;
        n = Math.max(n, DIV_MIN_HEIGHT);
        var b = _offsetHeight(e) + db;
        b = Math.min(b, n);
        D(a, b);
      }
    };

    q.resizeDivHeight = function () {
      if (!f) return;
      if (!x) return;

      if (_body.scrollHeight > _body.clientHeight) {
        var e = Math.max(_body.scrollHeight - _body.clientHeight, 0);
        a.style.height = Math.max(_body.clientHeight - 30, MIN_SIZE) + PX;
        var g = Math.max(_body.scrollHeight - _body.clientHeight, 0);
        n = _offsetHeight(a) - (g - e);
      } else {
        a.style.height = _body.clientHeight + PX;
        var h = Math.max(_body.scrollHeight - _body.clientHeight, 0);
        n = _offsetHeight(a) - h;
      }

      n--;
      n = Math.max(n, DIV_MIN_HEIGHT);
      var c = m != Rb ? m : d,
          b = _offsetHeight(c) + db;
      b = Math.min(b, n);
      if (xb) b = n;
      D(a, b);
    };

    q.resizeDivWidth = function () {
      if (!f) return;
      if (!r) return;

      if (_body.scrollWidth > _body.clientWidth) {
        var e = Math.max(_body.scrollWidth - _body.clientWidth, 0);
        a.style.width = Math.max(_body.clientWidth - 16, MIN_SIZE) + PX;
        var g = Math.max(_body.scrollWidth - _body.clientWidth, 0);
        k = _offsetWidth(a) - (g - e);
      } else {
        a.style.width = _body.clientWidth + PX;
        var h = Math.max(_body.scrollWidth - _body.clientWidth, 0);
        k = _offsetWidth(a) - h;
      }

      k--;
      k = Math.max(k, DIV_MIN_WIDTH);
      var c = m != Rb ? m : d,
          b = _offsetWidth(c) + eb;
      b = Math.min(b, k);
      if (xb) b = k;
      if (_isIE) b--;
      t(a, b);
    };

    q.resizeSourceDiv2 = function () {
      if (!f) return;
      var b = m != Rb ? m : d;

      if ((r || v > 0) && a.scrollWidth > a.clientWidth && _offsetWidth(a) < k) {
        var e = a.scrollWidth - a.clientWidth,
            c = Math.min(_offsetWidth(a) + e, k),
            i = a.style.overflowY;
        if (_isIE) a.style.overflowY = Xb;
        t(a, c);
        if (_isIE) a.style.overflowY = i;
      }

      if ((x || B > 0) && a.scrollHeight > a.clientHeight && _offsetHeight(a) < n) {
        var e = a.scrollHeight - a.clientHeight,
            g = Math.min(_offsetHeight(a) + e, n);
        D(a, g);
      }

      if ((r || v > 0) && X > _offsetWidth(b) && _offsetWidth(a) < k) {
        var h = X - _offsetWidth(b),
            c = Math.min(_offsetWidth(a) + h, k);

        t(a, c);
      }
    };

    q.checkZoom = function () {
      if (Math.abs(_offsetWidth(d) - rb) >= 1 || Math.abs(_offsetHeight(d) - qb) >= 1 || _colsWidthList(_cells(d.rows[0])) != hb || _rowsHeightList(d.rows) != gb) return Qb;
    };

    q.main = function () {
      var h = _offsetWidth(d),
          g = _offsetHeight(d),
          b = rb != h,
          a = qb != g;

      rb = h;
      qb = g;

      var c = _colsWidthList(_cells(d.rows[0]));

      if (hb != c) {
        hb = c;
        b = Qb;
      }

      var e = _rowsHeightList(d.rows);

      if (gb != e) {
        gb = e;
        a = Qb;
      }

      var i = Gb(b || a);
      (i || b || a) && Hb();
      f && Lb();

      if (f) {
        ub();
        ab();
      } else kb(Qb);
    };

    function Gb(l) {
      if (l) {
        b != Rb && w(b);
        c != Rb && w(c);
        e != Rb && w(e);
        b = Rb;
        c = Rb;
        e = Rb;
      }

      var i = Ob,
          j = d.rows,
          k = f ? d.parentNode : _body,
          h = Ob,
          g = Ob;

      if (f) {
        h = a.clientHeight < a.scrollHeight && a.clientHeight != 0;
        g = a.clientWidth < a.scrollWidth && a.clientWidth != 0;
      }

      if (!f || DIV_BODY_SCROLL != 0) {
        if (!h) h = _body.clientHeight < _body.scrollHeight;
        if (!g) g = _body.clientWidth < _body.scrollWidth;

        if (!h && !g && _body == document.documentElement) {
          h = document.body.clientHeight < document.body.scrollHeight;
          g = document.body.clientWidth < document.body.scrollWidth;
        }
      }

      if (p > 0 && h) if (_rowsHeight(j, p) + 30 >= k.clientHeight) h = Ob;

      if (y > 0 && g) {
        var m = _cells(j[0]);

        if (_colsWidth(m, y) + 30 >= k.clientWidth) g = Ob;
      }

      if (y > 0 && g) {
        if (c == Rb) {
          c = pb(TID_NUMBER, j.length, y);
          if (c != Rb) i = Qb;
        }
      } else if (c != Rb) {
        w(c);
        c = Rb;
      }

      if (p > 0 && h) {
        if (b == Rb) {
          b = pb(TID_HEADER, p, E);
          if (b != Rb) i = Qb;
        }
      } else if (b != Rb) {
        w(b);
        b = Rb;
      }

      if (b != Rb && c != Rb) {
        if (e == Rb) {
          e = pb(TID_CORNER, p, y);
          i = Qb;
        }
      } else if (e != Rb) {
        w(e);
        e = Rb;
      }

      return i;
    }

    function Hb() {
      if (b != Rb) {
        t(b, _offsetWidth(d));
        cb(b);
      }

      if (c != Rb) {
        var g = _colsWidth(_cells(d.rows[0]), y),
            f = _colsWidth(_cells(c.rows[0]), y),
            a = f - g;

        a != 0 && t(c, _offsetWidth(c) - a);
        cb(c);
        D(c, _offsetHeight(d));
      }

      if (e != Rb) {
        t(e, _offsetWidth(c));
        cb(e);
        D(e, _offsetHeight(b));
      }
    }

    function Lb() {
      var j = 1,
          d = b == Rb ? Rb : b.parentNode,
          f = c == Rb ? Rb : c.parentNode,
          g = e == Rb ? Rb : e.parentNode;
      d != Rb && s(d);
      f != Rb && s(f);
      g != Rb && s(g);

      if (d != Rb) {
        I(d, a.clientWidth);
        H(d, _offsetHeight(b));

        var i = _rect(b).bottom - _rect(d).bottom;

        i > 0 && H(d, _offsetHeight(b) + i);
        d.clientHeight >= a.clientHeight && H(d, a.clientHeight - j);
      }

      if (f != Rb) {
        H(f, a.clientHeight);
        I(f, _offsetWidth(c));

        var h = _rect(c).right - _rect(f).right;

        h > 0 && I(f, _offsetWidth(c) + h);
        f.clientWidth >= a.clientWidth && I(f, a.clientWidth - j);
      }

      if (g != Rb) {
        H(g, d.clientHeight);
        I(g, f.clientWidth);
      }
    }

    function Jb() {
      var b = a.cloneNode(Ob),
          c = d.cloneNode(Ob);
      b.style.position = Zb;
      b.style.left = ac;
      b.style.top = ac;
      b.style.minWidth = g;
      b.style.minHeight = g;
      a.parentNode.appendChild(b);
      var e = document.createElement("DIV");
      e.style.position = Zb;
      e.style.left = ac;
      e.style.top = ac;
      a.parentNode.appendChild(e);

      var i = _rect(a),
          f = _rect(b);

      S = i.top - f.top;
      R = i.left - f.left;
      c.style.width = "50px";
      c.style.height = "50px";
      var k = document.createElement(j),
          m = document.createElement("TR"),
          l = document.createElement("TD");
      l.appendChild(document.createTextNode("x"));
      m.appendChild(l);
      k.appendChild(m);
      c.appendChild(k);
      var o = b.offsetWidth,
          n = b.offsetHeight;
      b.appendChild(c);
      r = b.offsetWidth != o;
      x = b.offsetHeight != n;

      if (r) {
        if (v > 0 || Z != Pb && Z != "width") r = Ob;
      } else v = Sb;

      if (x) {
        if (B > 0 || Z != Pb && Z != "height") x = Ob;
      } else B = Sb;

      eb = _offsetWidth(b) - _offsetWidth(c);
      db = _offsetHeight(b) - _offsetHeight(c);

      var h = _rect(e);

      mb = f.top - h.top;
      ib = f.left - h.left;
      ob = _rect(c).top - f.top;
      lb = _rect(c).left - f.left;
      b.parentNode.removeChild(b);
      e.parentNode.removeChild(e);
    }

    function wb() {
      if (p == 0 && y == 0) return;
      var a = d.cloneNode(Ob);
      a.style.position = Zb;
      a.style.left = ac;
      a.style.top = ac;
      a.style.width = Wb;
      a.style.height = Wb;
      a.width = Vb;
      a.height = Vb;

      var i,
          m = _getElementByTagName(d, Ub);

      if (m == Rb) m = _getElementByTagName(d, j);
      if (m != Rb) i = m.cloneNode(Ob);else i = document.createElement(j);
      a.appendChild(i);
      d.parentNode.appendChild(a);

      for (var x = Kb(), v = p > 0 ? p : 1, t = d.rows, q = 0, c = 0; c < v; c++) {
        var o = t[c],
            n = o.cloneNode(Ob);
        n.style.height = _trHeight(o) + PX;

        for (var l = _cells(o), f = 0; f < l.length; f++) {
          var e = l[f],
              b = e.cloneNode(Ob);
          b.width = Vb;
          if (e.colSpan == 1) b.style.width = q + PX;else {
            for (var s = Qb, r = 1; r < e.colSpan; r++) {
              if (!x[e.$FXH_COLINDEX + r]) {
                s = Ob;
                break;
              }
            }

            if (s) b.style.width = Wb;else b.style.width = q + PX;
          }
          b.appendChild(document.createTextNode(" "));
          n.appendChild(b);
        }

        i.appendChild(n);

        if (_isIE && _IEver <= 7 && !_isBackCompat) {
          Y = _trHeight(n) - _trHeight(o);
          Y += 2;
        }
      }

      for (var c = 0; c < v; c++) {
        for (var l = _cells(t[c]), w = _cells(i.rows[c]), f = 0; f < l.length; f++) {
          var e = l[f],
              b = w[f];
          if (b.style.width == Wb) continue;
          var h = c + "." + e.cellIndex;
          yb[h] = _offsetWidth(b) - b.clientWidth;
          u[h] = b.clientWidth - q;
          var g = e.currentStyle || document.defaultView.getComputedStyle(e, Vb),
              k = Sb;
          if (g.paddingLeft.match(/px$/) != Rb && g.paddingRight.match(/px$/) != Rb) k = _pixel(g.paddingLeft) + _pixel(g.paddingRight);else if (g.padding.match(/px$/) != Rb) k = _pixel(g.padding) * 2;
          if (k > 0) u[h] = Math.min(u[h], k);
          fb = Math.max(u[h], fb);
        }
      }

      a.parentNode.removeChild(a);
    }

    function Kb() {
      for (var g = p > 0 ? p : 1, l = d.rows, f = new Array(g), b = 0; b < g; b++) {
        f[b] = new Array(E);

        for (var a = 0; a < E; a++) {
          f[b][a] = Qb;
        }
      }

      for (var b = 0; b < g; b++) {
        for (var m = l[b], i = _cells(m), h = 0, a = 0; a < E;) {
          if (!f[b][a]) {
            a++;
            continue;
          }

          if (h >= i.length) break;
          var e = i[h];
          if (e.rowSpan >= 2 && e.colSpan >= 2) for (var c = 0; c < e.rowSpan; c++) {
            if (b + c >= g) break;

            for (var j = 0; j < e.colSpan; j++) {
              if (c == 0 && j == 0) continue;
              f[b + c][a + j] = Ob;
            }
          } else {
            if (e.rowSpan >= 2) for (var c = 1; c < e.rowSpan; c++) {
              if (b + c >= g) break;
              f[b + c][a] = Ob;
            }
            if (e.colSpan >= 2) for (var c = 1; c < e.colSpan; c++) {
              f[b][a + c] = Ob;
            }
          }
          h++;
          a += e.colSpan;
        }
      }

      for (var k = new Array(E), a = 0; a < E; a++) {
        k[a] = Ob;
      }

      for (var b = 0; b < g; b++) {
        for (var m = l[b], i = _cells(m), h = 0, a = 0; a < E; a++) {
          if (!f[b][a]) continue;
          if (h >= i.length) break;
          var e = i[h];
          e.$FXH_COLINDEX = a;
          if (e.colSpan == 1) k[a] = Qb;
          h++;
        }
      }

      return k;
    }

    function pb(e, v, x) {
      var n = " fixed_header_display_none_at_print",
          c = d.cloneNode(Ob),
          r = _getElementByTagName(d, "CAPTION"),
          s = _getElementByTagName(d, Ub),
          u = _getElementByTagName(d, j),
          k = Rb,
          p = Rb,
          o = Rb;

      if (r != Rb) {
        k = r.cloneNode(Qb);
        k.style.backgroundColor = Q;
        k.style.overflow = Xb;

        if (e != TID_HEADER) {
          k.innerHTML = "&nbsp;";
          k.style.height = _offsetHeight(r) + PX;
          k.style.backgroundColor = bc;
        }

        c.appendChild(k);
      }

      var t = 0;

      if (s != Rb) {
        p = s.cloneNode(Ob);
        c.appendChild(p);
        t = s.rows.length;
      }

      if (u != Rb && t < v) {
        o = u.cloneNode(Ob);
        c.appendChild(o);
      }

      if (Mb(c, o, p, e, v, x, t) == Ob) return Rb;

      _linkElement(c, d, e, F, G, Ob);

      k != Rb && _linkElement(k, r, e, F, G, Qb);
      p != Rb && _linkElement(p, s, e, F, G, Ob);
      o != Rb && _linkElement(o, u, e, F, G, Ob);

      if (e != TID_HEADER) {
        c.style.marginRight = ac;
        c.style.borderRightWidth = ac;
        c.style.paddingRight = ac;
      }

      if (e != TID_NUMBER) {
        c.style.marginBottom = ac;
        c.style.borderBottomWidth = ac;
        c.style.paddingBottom = ac;
      }

      c.style.minWidth = g;
      c.style.minHeight = g;
      var m = Rb;

      if (zb != Rb) {
        var w = zb.split(" ");
        m = Vb;

        for (var q = 0; q < w.length; q++) {
          if (q == 0 && e == TID_HEADER) m += "0 ";else if (q == 1 && e == TID_NUMBER) m += "0 ";else m += w[q] + " ";
        }
      }

      if (f) {
        var b = a.cloneNode(Ob);
        b.$FXH_PADDING_WIDTH = undefined;
        b.$FXH_PADDING_HEIGHT = undefined;

        _linkElement(b, a, e, F, G, Ob);

        b.className += n;
        b.style.overflowX = Xb;
        b.style.overflowY = Xb;

        _removeEventListener(b, Tb, ab);

        e != TID_CORNER && _addEventListener(b, Tb, function () {
          Eb(b, e);
        });
        if (e == TID_HEADER) b.style.borderRightWidth = ac;else {
          b.style.marginRight = ac;
          b.style.borderRightWidth = ac;
          b.style.paddingRight = ac;
        }
        if (e == TID_NUMBER) b.style.borderBottomWidth = ac;else {
          b.style.marginBottom = ac;
          b.style.borderBottomWidth = ac;
          b.style.paddingBottom = ac;
        }
        b.style.width = "30px";
        b.style.height = "30px";
        b.style.minWidth = g;
        b.style.minHeight = g;
        if (m != Rb) b.style.boxShadow = m;
        b.style.position = Zb;
        b.style.top = S + PX;
        b.style.left = R + PX;
        b.style.backgroundColor = Q;
        b.appendChild(c);
        a.parentNode.appendChild(b);
      } else {
        c.className += n;
        if (m != Rb) c.style.boxShadow = m;

        switch (_positionMode) {
          case POS_FIXED:
            c.style.position = cc;
            break;

          case POS_ABSOLUTE:
            c.style.position = Zb;
            break;

          default:
            c.style.position = cc;
        }

        c.style.marginTop = ac;
        c.style.marginLeft = ac;
        c.style.top = i + PX;
        c.style.left = l + PX;
        c.style.backgroundColor = Q;
        d.parentNode.appendChild(c);
      }

      _isOpera && h(f ? b : c, Ob);
      return c;
    }

    function Mb(v, w, C, g, x, q, z) {
      for (var f = new Array(q), h = 0; h < f.length; h++) {
        f[h] = 0;
      }

      for (var s = d.rows, c = 0; c < x; c++) {
        var k = s[c],
            b = k.cloneNode(Ob);

        _linkElement(b, k, g, F, G, Ob);

        b.style.height = _trHeight(k) - Y + PX;

        if (c == p - 1 && g != TID_NUMBER) {
          if (J != Rb) b.style.borderBottomColor = J;
          if (K != Rb) b.style.borderBottomStyle = K;
          if (L != Rb) b.style.borderBottomWidth = L;
        }

        if (g != TID_HEADER) b.style.borderRightWidth = ac;
        if (c < z) C.appendChild(b);else if (w != Rb) w.appendChild(b);else v.appendChild(b);

        for (var t = _cells(k), l = 0, e = 0; e < q;) {
          if (c < f[e]) {
            e++;
            continue;
          }

          if (l >= t.length) break;
          var a = t[l];
          l++;
          if (c + a.rowSpan > x) return Ob;
          f[e] = c + a.rowSpan;

          if (a.colSpan >= 2) {
            for (var h = 1; h < a.colSpan; h++) {
              f[e + h] = f[e];
            }

            if (e + a.colSpan > q) return Ob;
          }

          _radioCtl(a, "backup");

          var j = a.cloneNode(Qb);

          _radioCtl(a, "restore");

          _linkElement(j, a, g, F, G, Qb);

          b.appendChild(j);

          try {
            var o = c + "." + a.cellIndex;

            if (u[o] != undefined) {
              var D = u[o] + yb[o];
              j.style.width = _offsetWidth(a) - D + PX;
            } else if (_isIE && _IEver <= 8 && a.colSpan >= 2) j.style.width = a.clientWidth - fb + PX;
          } catch (E) {}

          var i = j.style;

          if (c + a.rowSpan == p && g != TID_NUMBER) {
            if (J != Rb) i.borderBottomColor = J;
            if (K != Rb) i.borderBottomStyle = K;
            if (L != Rb) i.borderBottomWidth = L;
          }

          if (e + a.colSpan == y && g != TID_HEADER) {
            if (J != Rb) i.borderRightColor = J;
            if (K != Rb) i.borderRightStyle = K;
            if (L != Rb) i.borderRightWidth = L;
          }

          e += a.colSpan;
        }

        if (_isIE && _IEver <= 9 && l == 0) {
          b.style.height = ac;

          var A = _rect(k).bottom,
              m = b.parentNode;

          if (m.tagName != "TABLE") m = m.parentNode;
          var r = m.rows,
              n = c - 1;

          while (r[n].style.height == ac) {
            n--;
          }

          var B = A - _rect(s[n]).top;

          r[n].style.height = B - Y + PX;
        }
      }

      _radioCtl(v, "sync");

      return Qb;
    }

    function s(b) {
      if (b.style.position == cc) return;

      var f = _rect(a),
          e = _rect(b),
          d = e.top - f.top,
          c = e.left - f.left;

      if (_isIE) {
        if (d == Sb && b.$TOP_DIFF == 1) d = 0;else b.$TOP_DIFF = d;
        if (c == Sb && b.$LEFT_DIFF == 1) c = 0;else b.$LEFT_DIFF = c;
      }

      if (Math.abs(d) >= 1) b.style.top = _pixel(b.style.top) - d + PX;
      if (Math.abs(c) >= 1) b.style.left = _pixel(b.style.left) - c + PX;
    }

    function w(a) {
      if (f) a = a.parentNode;

      _unlinkElement(a);

      a.parentNode && a.parentNode.removeChild(a);
    }

    q.onBodyScroll = function () {
      if (M) i = Math.max(_rect(M).bottom, 0);
      if (N) l = Math.max(_rect(N).right, 0);

      if (f) {
        ub();
        return;
      }

      if (_positionMode == POS_ABSOLUTE) {
        if (!_isMobile) {
          if (_getBodyScrollTop() != A) {
            h(b, Ob);
            h(e, Ob);
          }

          if (_getBodyScrollLeft() != z) {
            h(c, Ob);
            h(e, Ob);
          }
        }

        V != Rb && clearTimeout(V);
        V = setTimeout(kb, 200);
      } else kb();
    };

    function kb(k) {
      V = Rb;
      var j = _getBodyScrollTop() != A,
          g = _getBodyScrollLeft() != z;
      A = _getBodyScrollTop();
      z = _getBodyScrollLeft();
      if (j && g) k = Qb;

      var f = _rect(d),
          o = b != Rb && f.top < i && f.bottom >= b.offsetHeight + i,
          p = c != Rb && f.left < l && f.right >= c.offsetWidth + l;

      b != Rb && h(b, o);
      c != Rb && h(c, p);
      e != Rb && h(e, o && p);

      if (_positionMode == POS_MIX && b != Rb) {
        var a = b.style;

        if (k || j && a.position == Zb) {
          a.position = cc;
          a.left = f.left + PX;
          a.top = i + PX;
          if (e != Rb) e.style.top = a.top;
          O(Ob);
        } else if (!j && g && a.position == cc) {
          a.position = Zb;
          a.left = z + f.left + PX;
          a.top = A + i + PX;
          vb();
        }
      }

      if (_positionMode == POS_MIX && c != Rb) {
        var a = c.style;

        if (k || g && a.position == Zb) {
          a.position = cc;
          a.left = l + PX;
          a.top = f.top + PX;
          P(Ob);
        } else if (!g && j && a.position == cc) {
          a.position = Zb;
          a.left = z + l + PX;
          a.top = A + f.top + PX;
          tb();
        }
      }

      if (_positionMode == POS_FIXED) {
        if (b != Rb && g) b.style.left = f.left + PX;
        if (c != Rb && j) c.style.top = f.top + PX;

        if (b != Rb && b.style.top != i + PX) {
          b.style.top = i + PX;
          if (e != Rb) e.style.top = b.style.top;
        }
      }

      if (_positionMode == POS_ABSOLUTE && k) {
        if (b != Rb) b.style.left = z + f.left + PX;
        if (c != Rb) c.style.top = A + f.top + PX;
      }

      if (_positionMode == POS_ABSOLUTE && (j || g)) {
        var n,
            m,
            q = _isMobile ? 1 : 4;

        if (b != Rb && j) {
          b.style.top = i + A - _offsetHeight(b) + PX;
          if (e != Rb) e.style.top = b.style.top;
          n = _offsetHeight(b) / q;
        }

        if (c != Rb && g) {
          c.style.left = l + z - _offsetWidth(c) + PX;
          if (e != Rb) e.style.left = c.style.left;
          m = _offsetWidth(c) / q;
        }

        T != Rb && clearTimeout(T);
        sb(j, g, n, m);
      }

      b != Rb && g && O(Ob);
      c != Rb && j && P(Ob);
    }

    function sb(m, j, k, h) {
      T = Rb;
      var g = _getBodyScrollTop() + i,
          f = _getBodyScrollLeft() + l,
          d = g,
          a = f;

      if (b != Rb && m) {
        d = _pixel(b.style.top) + k;
        if (k > 0) d = Math.min(d, g);else d = Math.max(d, g);
        b.style.top = d + PX;
        if (e != Rb) e.style.top = b.style.top;
      }

      if (c != Rb && j) {
        a = _pixel(c.style.left) + h;
        if (h > 0) a = Math.min(a, f);else a = Math.max(a, f);
        c.style.left = a + PX;
        if (e != Rb) e.style.left = c.style.left;
      }

      if (g == d && f == a) {
        if (b != Rb && m) {
          vb();
          if (e != Rb) e.style.top = b.style.top;
        }

        if (c != Rb && j) {
          tb();
          if (e != Rb) e.style.left = c.style.left;
        }

        return;
      }

      var n = function n() {
        sb(m, j, k, h);
      };

      T = setTimeout(n, 20);
    }

    function ub() {
      if (DIV_BODY_SCROLL == 0) return;
      if (_positionMode == POS_ABSOLUTE) return;

      var f = b == Rb ? Rb : b.parentNode,
          g = c == Rb ? Rb : c.parentNode,
          j = e == Rb ? Rb : e.parentNode,
          k = _rect(a),
          o = _rect(d),
          p = 0;

      if (_isIE11) p = 1;
      var m = Ob,
          n = Ob;

      if (f && (DIV_BODY_SCROLL == 2 || a.scrollHeight - p <= a.clientHeight)) {
        var q = Math.min(k.bottom, o.bottom);

        if (k.top < i - ob && q >= _offsetHeight(b)) {
          if (f.style.position != cc) {
            f.style.position = cc;
            f.style.top = i - mb - ob + PX;
          }

          f.style.left = k.left - ib + PX;
          h(f, Qb);
          m = Qb;
        } else {
          if (f.style.position != Zb) {
            f.style.position = Zb;
            f.style.top = S + PX;
            f.style.left = R + PX;
          }

          h(f, a.scrollTop > 0);
          s(f);
        }

        C(f) && O(Ob);
      }

      if (g && (DIV_BODY_SCROLL == 2 || a.scrollWidth <= a.clientWidth)) {
        var r = Math.min(k.right, o.right);

        if (k.left < l - lb && r >= _offsetWidth(c)) {
          if (g.style.position != cc) {
            g.style.position = cc;
            g.style.left = l - ib - lb + PX;
          }

          g.style.top = k.top - mb + PX;
          h(g, Qb);
          n = Qb;
        } else {
          if (g.style.position != Zb) {
            g.style.position = Zb;
            g.style.top = S + PX;
            g.style.left = R + PX;
          }

          h(g, a.scrollLeft > 0);
          s(g);
        }

        C(g) && P(Ob);
      }

      if (j) {
        if (m || n) {
          if (j.style.position != cc) j.style.position = cc;
          if (m) j.style.top = f.style.top;else j.style.top = g.style.top;
          if (n) j.style.left = g.style.left;else j.style.left = f.style.left;
        } else if (j.style.position != Zb) {
          j.style.position = Zb;
          j.style.top = S + PX;
          j.style.left = R + PX;
          s(j);
        }

        h(j, C(f) && C(g));
      }
    }

    function ab() {
      var d = b == Rb ? Rb : b.parentNode,
          f = c == Rb ? Rb : c.parentNode,
          g = e == Rb ? Rb : e.parentNode,
          i = d && d.style.position == cc,
          k = f && f.style.position == cc;
      h(d, a.scrollTop > 0 || i);
      h(f, a.scrollLeft > 0 || k);
      h(g, C(d) && C(f));
      d != Rb && s(d);
      f != Rb && s(f);
      g != Rb && s(g);
      var j = a.scrollLeft != jb,
          l = a.scrollTop != nb;
      jb = a.scrollLeft;
      nb = a.scrollTop;

      if (d != Rb && j) {
        d.$FXH_SCROLL_LEFT = a.scrollLeft;
        d.scrollLeft = a.scrollLeft;
        d.scrollLeft > 0 && O(Ob);
      }

      if (f != Rb && l) {
        f.$FXH_SCROLL_TOP = a.scrollTop;
        f.scrollTop = a.scrollTop;
        f.scrollTop > 0 && P(Ob);
      }
    }

    function Eb(b, c) {
      if (c == TID_HEADER) {
        if (Math.abs(b.scrollLeft - b.$FXH_SCROLL_LEFT) < 5) return;
      } else if (Math.abs(b.scrollTop - b.$FXH_SCROLL_TOP) < 5) return;

      if (c == TID_HEADER) a.scrollLeft = b.scrollLeft;else a.scrollTop = b.scrollTop;
    }

    function vb() {
      if (b == Rb) return;

      var a = _rect(b);

      if (a.top <= i) return;
      b.style.top = i + _pixel(b.style.top) - a.top + PX;
    }

    function tb() {
      if (c == Rb) return;

      var a = _rect(c);

      if (a.left <= l) return;
      c.style.left = l + _pixel(c.style.left) - a.left + PX;
    }

    function O(q) {
      if (b == Rb) return;

      if (!q) {
        U != Rb && clearTimeout(U);
        U = setTimeout(function () {
          O(Qb);
        }, 200);
        return;
      }

      U = Rb;
      var h, j;

      if (f) {
        h = _rect(a).left;
        j = h + a.clientWidth;
      } else {
        h = 0;
        j = _body.clientWidth;
      }

      if (C(c)) h += _offsetWidth(c);

      for (var m = _cells(d.rows[0]), o = _cells(b.rows[0]), e = 0, l = 0, i = 0; i < m.length; i++) {
        var k = _rect(m[i]).left;

        if (k < h) continue;
        if (k > j) break;

        var p = _rect(o[i]).left;

        e += p - k;
        l++;
      }

      if (l == 0) return;
      if (e == 0) return;
      e = e / l;
      e = Math.round(e);
      if (e == 0) return;

      if (f) {
        var g = b.parentNode;

        if (g.style.position == cc) {
          var n = _pixel(g.style.left) - e;
          g.style.left = n + PX;
        } else {
          g.$FXH_SCROLL_LEFT = g.scrollLeft + e;
          g.scrollLeft += e;
        }
      } else {
        var n = _pixel(b.style.left) - e;
        b.style.left = n + PX;
      }
    }

    function P(p) {
      if (c == Rb) return;
      if (_isOpera) return;

      if (!p) {
        W != Rb && clearTimeout(W);
        W = setTimeout(function () {
          P(Qb);
        }, 200);
        return;
      }

      W = Rb;
      var h, j;

      if (f) {
        h = _rect(a).top;
        j = h + a.clientHeight;
      } else {
        h = 0;
        j = _body.clientHeight;
      }

      if (C(b)) h += _offsetHeight(b);

      for (var n = d.rows, m = c.rows, e = 0, l = 0, i = 0; i < n.length; i++) {
        var k = _rect(n[i]).top;

        if (k < h) continue;
        if (k > j) break;
        if (_cells(m[i]).length == 0) continue;

        var q = _rect(m[i]).top;

        e += q - k;
        l++;
      }

      if (l == 0) return;
      if (e == 0) return;
      e = e / l;
      e = Math.round(e);
      if (e == 0) return;

      if (f) {
        var g = c.parentNode;

        if (g.style.position == cc) {
          var o = _pixel(g.style.top) - e;
          g.style.top = o + PX;
        } else {
          g.$FXH_SCROLL_TOP = g.scrollTop + e;
          g.scrollTop += e;
        }
      } else {
        var o = _pixel(c.style.top) - e;
        c.style.top = o + PX;
      }
    }

    function C(a) {
      return a != Rb && a.style.visibility == "visible";
    }

    function h(a, b) {
      if (a == Rb) return;
      var c = b ? "visible" : Xb;
      if (a.style.visibility == c) return;
      a.style.visibility = c;
      if (_isIE) a.style.zIndex = b ? Cb : Cb - 1;
      if (_isOpera) a.style.opacity = b ? bb : 0;

      if (b && bb < 1) {
        a.style.opacity = bb;
        a.style.filter = "alpha(opacity=" + bb * 100 + ")";
      }
    }

    function Fb(b) {
      if (!_isIE && !_isIE11 && !_isFirefox && !_isOpera) return;

      if (b) {
        m = Db();
        a.appendChild(m);
        t(m, _offsetWidth(d));
        D(m, _offsetHeight(d));
        d.style.display = Yb;
      } else {
        d.style.display = Ib;
        a.removeChild(m);
        m = Rb;
      }
    }

    function Db() {
      var a = d.cloneNode(Ob),
          b = document.createElement(j),
          e = document.createElement("TR"),
          c = document.createElement("TD");
      c.appendChild(document.createTextNode("dummy"));
      e.appendChild(c);
      b.appendChild(e);
      a.appendChild(b);
      return a;
    }

    function I(a, b) {
      Bb(a, o, b);
    }

    function t(a, b) {
      Bb(a, "OFFSET", b);
    }

    function H(a, b) {
      Ab(a, o, b);
    }

    function D(a, b) {
      Ab(a, "OFFSET", b);
    }

    function Bb(a, g, f) {
      var b = f;
      if (a.$FXH_PADDING_WIDTH != undefined) b -= a.$FXH_PADDING_WIDTH;

      for (var d, c, e = 0; e < 2; e++) {
        if (b < MIN_SIZE) b = MIN_SIZE;
        a.style.width = b + PX;
        d = g == o ? a.clientWidth : _offsetWidth(a);
        c = d - f;
        if (a.$FXH_PADDING_WIDTH == undefined) a.$FXH_PADDING_WIDTH = c;
        if (c == 0 || b == MIN_SIZE) break;
        b -= c;
      }
    }

    function Ab(a, g, e) {
      var b = e;
      if (a.$FXH_PADDING_HEIGHT != undefined) b -= a.$FXH_PADDING_HEIGHT;

      for (var d, c, f = 0; f < 2; f++) {
        if (b < MIN_SIZE) b = MIN_SIZE;
        a.style.height = b + PX;
        d = g == o ? a.clientHeight : _offsetHeight(a);
        c = d - e;
        if (a.$FXH_PADDING_HEIGHT == undefined) a.$FXH_PADDING_HEIGHT = c;
        if (c == 0 || b == MIN_SIZE) break;
        b -= c;
      }
    }

    function cb(p) {
      var g = d.rows,
          c = p.rows,
          e = c.length,
          k = _rowsHeight(g, e) + HEIGHT_MARGIN;
      if (_rowsHeight(c, e) < k) return;

      for (var a = 0; a < e; a++) {
        var q = _trHeight(c[a]) - _trHeight(g[a]);

        if (q < HEIGHT_MARGIN) continue;

        for (var o = _cells(g[a]), j = _cells(c[a]), f = 0; f < j.length; f++) {
          var l = o[f],
              i = j[f],
              b = 0,
              h = a + "." + l.cellIndex;

          if (u[h] != undefined) {
            if (u[h] <= 0) continue;
            b = u[h] - 2;
            if (b < 0) b = 0;
          }

          var n = Math.ceil(b / 2),
              m = Math.floor(b / 2);
          i.style.paddingLeft = n + PX;
          i.style.paddingRight = m + PX;
          i.style.width = l.clientWidth - b + PX;
          if (_rowsHeight(c, e) < k) return;
        }
      }
    }
  }

  function _FixedElementList() {
    var b = this,
        a = [];

    b.add = function (b) {
      a.push(b);
    };

    b.remove = function (c) {
      for (var b = 0; b < a.length; b++) {
        if (a[b] == c) {
          a.splice(b, 1);
          return;
        }
      }
    };

    b.get = function (d) {
      for (var b = 0; b < a.length; b++) {
        var c = a[b];
        if (c.$SOURCE_ELEMENT == d) return c;
      }

      return Rb;
    };

    b.getAll = function (e) {
      for (var b = Rb, c = 0; c < a.length; c++) {
        var d = a[c];

        if (d.$SOURCE_ELEMENT == e) {
          if (b == Rb) b = [];
          b.push(d);
        }
      }

      return b;
    };
  }

  function _linkElement(a, b, k, i, c, g) {
    b.id && !i && a.removeAttribute("id");

    if (c) {
      var h = a.getAttribute(I);
      if (h) a.setAttribute(I, h + " " + c);else a.setAttribute(I, c);
    }

    if (b.name) if (b.tagName == l && b.type == m) a.name = RADIO_PREFIX + k + "_" + b.name;else a.removeAttribute("name");
    a.$SOURCE_ELEMENT = b;
    if (_fixedList != Rb) _fixedList.add(a);else if (!b.$FXH_FIXED_ELEMENT) b.$FXH_FIXED_ELEMENT = a;else {
      var j = b.$FXH_FIXED_ELEMENT;

      if (!j.$IS_ARRAY) {
        var e = [];
        e.$IS_ARRAY = Qb;
        b.$FXH_FIXED_ELEMENT = e;
        e.push(j);
      }

      b.$FXH_FIXED_ELEMENT.push(a);
    }

    _setEventHandler(a, b);

    if (g) for (var d = 0; d < a.childNodes.length; d++) {
      var f = a.childNodes[d];
      if (!f) continue;
      if (!f.tagName) continue;

      _linkElement(f, b.childNodes[d], k, i, c, g);
    }
  }

  function _unlinkElement(c) {
    if (_fixedList != Rb) {
      _fixedList.remove(c);

      var a = c.$SOURCE_ELEMENT;

      if (a && a.$FXH_ON_CHANGE_FUNC && _fixedList.get(a) == Rb) {
        _removeEventListener(a, g, a.$FXH_ON_CHANGE_FUNC);

        a.$FXH_ON_CHANGE_FUNC = undefined;
      }
    } else {
      var a = c.$SOURCE_ELEMENT;

      if (a && a.$FXH_FIXED_ELEMENT) {
        var d = a.$FXH_FIXED_ELEMENT;

        if (!d.$IS_ARRAY || d.length == 1) {
          a.$FXH_FIXED_ELEMENT = undefined;

          if (a.$FXH_ON_CHANGE_FUNC) {
            _removeEventListener(a, g, a.$FXH_ON_CHANGE_FUNC);

            a.$FXH_ON_CHANGE_FUNC = undefined;
          }
        } else {
          for (var f = [], b = 0; b < d.length; b++) {
            d[b] != c && f.push(d[b]);
          }

          a.$FXH_FIXED_ELEMENT = f;
        }
      }
    }

    for (var b = 0; b < c.childNodes.length; b++) {
      var e = c.childNodes[b];
      if (!e) continue;
      if (!e.tagName) continue;

      _unlinkElement(e);
    }
  }

  function _setEventHandler(b, a) {
    if (a.onclick) b.onclick = function () {
      return a.onclick();
    };
    if (a.ondblclick) b.ondblclick = function () {
      return a.ondblclick();
    };
    if (a.onkeydown) b.onkeydown = function () {
      return a.onkeydown();
    };
    if (a.onkeypress) b.onkeypress = function () {
      return a.onkeypress();
    };
    if (a.onkeyup) b.onkeyup = function () {
      return a.onkeyup();
    };
    if (a.onmousedown) b.onmousedown = function () {
      return a.onmousedown();
    };
    if (a.onmouseup) b.onmouseup = function () {
      return a.onmouseup();
    };
    if (a.onmouseover) b.onmouseover = function () {
      return a.onmouseover();
    };
    if (a.onmouseout) b.onmouseout = function () {
      return a.onmouseout();
    };
    if (a.onmousemove) b.onmousemove = function () {
      return a.onmousemove();
    };

    if (a.tagName == l || a.tagName == "SELECT" || a.tagName == "TEXTAREA") {
      switch (a.type) {
        case e:
        case f:
        case h:
          _copyValue(a, b);

      }

      switch (a.type) {
        case h:
        case m:
        case e:
        case f:
        case "text":
        case "password":
        case "textarea":
        default:
          b.onclick = function () {
            _copyValue(b, a);

            _copyValues(a, b);

            if (a.onclick) return a.onclick();
            return Qb;
          };

          b.onchange = function () {
            _copyValue(b, a);

            _copyValues(a, b);

            if (a.onchange) return a.onchange();
            return Qb;
          };

          b.onkeyup = function () {
            _copyValue(b, a);

            _copyValues(a, b);

            if (a.onkeyup) return a.onkeyup();
            return Qb;
          };

          if (a.$FXH_ON_CHANGE_FUNC == undefined) {
            a.$FXH_ON_CHANGE_FUNC = function () {
              _copyValues(a);
            };

            _addEventListener(a, g, a.$FXH_ON_CHANGE_FUNC);

            _addEventListener(a, "keyup", a.$FXH_ON_CHANGE_FUNC);
          }

          break;

        case "button":
        case "submit":
        case "image":
        case "reset":
          b.onclick = function () {
            a.click();
          };

          break;

        case Xb:
        case "file":
      }

      if (a.form && a.$FXH_ON_RESET_FUNC == undefined) {
        a.$FXH_ON_RESET_FUNC = function () {
          for (var b = 0; b < a.form.elements.length; b++) {
            _copyValues(a.form.elements[b]);
          }
        };

        _addEventListener(a.form, "reset", function () {
          setTimeout(a.$FXH_ON_RESET_FUNC, 30);
        });
      }
    } else if (a.tagName == "FORM") b.onsubmit = function () {
      return Ob;
    };
  }

  function _copyValues(d, c) {
    if (c == undefined) c = Rb;
    var a;

    if (_fixedList != Rb) {
      a = _fixedList.getAll(d);
      if (!a) return;

      for (var b = 0; b < a.length; b++) {
        if (a[b] == c) continue;

        _copyValue(d, a[b]);
      }

      return;
    }

    a = d.$FXH_FIXED_ELEMENT;
    if (!a) return;
    if (!a.$IS_ARRAY) a != c && _copyValue(d, a);else for (var b = 0; b < a.length; b++) {
      if (a[b] == c) continue;

      _copyValue(d, a[b]);
    }
  }

  function _copyValue(a, b) {
    switch (a.type) {
      case h:
      case m:
        b.checked = a.checked;
        break;

      case e:
      case f:
        for (var c = 0; c < a.length; c++) {
          b.options[c].selected = a.options[c].selected;
        }

        b.selectedIndex = a.selectedIndex;
        break;

      default:
        try {
          b.value = a.value;
        } catch (d) {}

    }
  }

  function _copyStyle(src, dst, styleName) {
    for (var buf = styleName.split(","), i = 0; i < buf.length; i++) {
      var name = _trim(buf[i]);

      try {
        eval("dst.style." + name + " = src.style." + name);
      } catch (e) {}
    }
  }

  function _setStyle(element, styleName, value) {
    try {
      eval("element.style." + styleName + " = value");
      return Qb;
    } catch (e) {
      return Ob;
    }
  }

  function _radioCtl(d, e) {
    for (var c = d.getElementsByTagName(l), b = 0; b < c.length; b++) {
      var a = c[b];
      if (a.type != m) continue;

      switch (e) {
        case "backup":
          a.$FXH_CHECKED = a.checked;
          break;

        case "restore":
          a.checked = a.$FXH_CHECKED;
          break;

        case "sync":
          a.checked = a.$SOURCE_ELEMENT.checked;
      }
    }
  }

  function _createCSS(c, b) {
    var a = document.createElement("STYLE");
    a.setAttribute("type", "text/css");
    a.setAttribute("media", c);
    if (a.styleSheet) a.styleSheet.cssText = b;else a.appendChild(document.createTextNode(b));
    document.body.appendChild(a);
  }

  function _getBackgroundColor(d) {
    var e = d.currentStyle || document.defaultView.getComputedStyle(d, Vb),
        a = e.backgroundColor;
    if (a == bc) return Rb;
    if (a.match(/^rgba\(/) == Rb) return a;
    var g = a.replace(/^rgba\(/, Vb).replace(/\)/, Vb),
        c = g.split(","),
        b = Number(c[3]);
    if (b == 1) return a;
    var f = "rgb(" + _color(Number(c[0]), b) + ", " + _color(Number(c[1]), b) + ", " + _color(Number(c[2]), b) + ")";
    return f;
  }

  function _color(a, b) {
    var c = Math.round(a + (255 - a) * (1 - b));
    return Math.min(c, 255);
  }

  function _addEventListener(a, b, c) {
    if (a.addEventListener) a.addEventListener(b, c, Ob);else a.attachEvent && a.attachEvent("on" + b, c);
  }

  function _removeEventListener(a, b, c) {
    if (a.removeEventListener) a.removeEventListener(b, c, Ob);else a.detachEvent && a.detachEvent("on" + b, c);
  }

  function _getBodyScrollTop() {
    if (document.body.scrollTop) return document.body.scrollTop;
    return document.documentElement.scrollTop;
  }

  function _getBodyScrollLeft() {
    if (document.body.scrollLeft) return document.body.scrollLeft;
    return document.documentElement.scrollLeft;
  }

  function _offsetWidth(b) {
    var a = _rect(b);

    return a.right - a.left;
  }

  function _offsetHeight(b) {
    var a = _rect(b);

    return a.bottom - a.top;
  }

  function _rowsHeight(a, b) {
    return _rect(a[b - 1]).bottom - _rect(a[0]).top;
  }

  function _colsWidth(a, c) {
    for (var d = 0, b = 0; b < a.length; b++) {
      d += a[b].colSpan;

      if (d == c) {
        c = b + 1;
        break;
      }
    }

    return _rect(a[c - 1]).right - _rect(a[0]).left;
  }

  function _colsWidthList(c) {
    for (var b = Vb, a = 0; a < c.length; a++) {
      if (a > 0) b += ",";
      b += c[a].offsetWidth;
    }

    return b;
  }

  function _rowsHeightList(c) {
    for (var b = Vb, a = 0; a < c.length; a++) {
      if (a > 0) b += ",";
      b += c[a].offsetHeight;
    }

    return b;
  }

  function _trHeight(a) {
    if (_isIE && _IEver == 8 && !_isBackCompat) return a.clientHeight;else return _offsetHeight(a);
  }

  function _cells(e) {
    var a = e.childNodes;
    if (a.length == 0) return a;

    for (var b = [], d = 0; d < a.length; d++) {
      var c = a[d];
      (c.tagName == "TD" || c.tagName == "TH") && b.push(c);
    }

    if (b.length == 0 && a[0].tagName == "FORM") return _cells(a[0]);
    return b;
  }

  function _pixel(a) {
    if (a.match(/px$/) != Rb) a = a.substring(0, a.length - 2);
    return Number(a);
  }

  function _percent(a) {
    if (a.match(/%$/) != Rb) a = a.substring(0, a.length - 1);
    return Number(a);
  }

  function _trim(a) {
    return a.replace(/^[ \u7e32\u0080]+/, Vb).replace(/[ \u7e32\u0080]+$/, Vb);
  }

  function _rect(a) {
    return a.getBoundingClientRect();
  }

  function _getElementByTagName(b, c) {
    var a = b.getElementsByTagName(c);
    if (a.length == 0) return Rb;
    return a[0];
  }

  function _createObjectForFirefox() {
    var a = document.createElement("SPAN");
    a.style.display = Yb;
    a.style.position = Zb;
    a.style.top = ac;
    a.style.left = ac;
    document.body.appendChild(a);
    return a;
  }

  function _createObjectForChrome() {
    var a = document.createElement("SPAN");
    a.style.position = cc;
    a.style.top = "0";
    a.style.left = "0";
    a.style.height = "0";
    a.style.width = "0";
    document.body.appendChild(a);
  }
}();