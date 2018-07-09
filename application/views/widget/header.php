<div style="width:100%;position:relative">
    <div style="float:left;">
        <a href="#" style="font-size: 0px;">
            <script data-pagespeed-no-defer="" type="text/javascript">
                (function() {
                    for (var g = "function" == typeof Object.defineProperties ? Object.defineProperty : function(b, c, a) {
                            if (a.get || a.set) throw new TypeError("ES3 does not support getters and setters.");
                            b != Array.prototype && b != Object.prototype && (b[c] = a.value)
                        }, h = "undefined" != typeof window && window === this ? this : "undefined" != typeof global && null != global ? global : this, k = ["String", "prototype", "repeat"], l = 0; l < k.length - 1; l++) {
                        var m = k[l];
                        m in h || (h[m] = {});
                        h = h[m]
                    }
                    var n = k[k.length - 1],
                        p = h[n],
                        q = p ? p : function(b) {
                            var c;
                            if (null == this) throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");
                            c = this + "";
                            if (0 > b || 1342177279 < b) throw new RangeError("Invalid count value");
                            b |= 0;
                            for (var a = ""; b;)
                                if (b & 1 && (a += c), b >>>= 1) c += c;
                            return a
                        };
                    q != p && null != q && g(h, n, {
                        configurable: !0,
                        writable: !0,
                        value: q
                    });
                    var t = this;

                    function u(b, c) {
                        var a = b.split("."),
                            d = t;
                        a[0] in d || !d.execScript || d.execScript("var " + a[0]);
                        for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[e] ? d = d[e] : d = d[e] = {} : d[e] = c
                    };

                    function v(b) {
                        var c = b.length;
                        if (0 < c) {
                            for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                            return a
                        }
                        return []
                    };

                    function w(b) {
                        var c = window;
                        if (c.addEventListener) c.addEventListener("load", b, !1);
                        else if (c.attachEvent) c.attachEvent("onload", b);
                        else {
                            var a = c.onload;
                            c.onload = function() {
                                b.call(this);
                                a && a.call(this)
                            }
                        }
                    };
                    var x;

                    function y(b, c, a, d, e) {
                        this.h = b;
                        this.j = c;
                        this.l = a;
                        this.f = e;
                        this.g = {
                            height: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
                            width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
                        };
                        this.i = d;
                        this.b = {};
                        this.a = [];
                        this.c = {}
                    }

                    function z(b, c) {
                        var a, d, e = c.getAttribute("data-pagespeed-url-hash");
                        if (a = e && !(e in b.c))
                            if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                            else {
                                d = c.getBoundingClientRect();
                                var f = document.body;
                                a = d.top + ("pageYOffset" in window ? window.pageYOffset : (document.documentElement || f.parentNode || f).scrollTop);
                                d = d.left + ("pageXOffset" in window ? window.pageXOffset : (document.documentElement || f.parentNode || f).scrollLeft);
                                f = a.toString() + "," + d;
                                b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g.height && d <= b.g.width)
                            }
                        a && (b.a.push(e), b.c[e] = !0)
                    }
                    y.prototype.checkImageForCriticality = function(b) {
                        b.getBoundingClientRect && z(this, b)
                    };
                    u("pagespeed.CriticalImages.checkImageForCriticality", function(b) {
                        x.checkImageForCriticality(b)
                    });
                    u("pagespeed.CriticalImages.checkCriticalImages", function() {
                        A(x)
                    });

                    function A(b) {
                        b.b = {};
                        for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length; ++d) a = a.concat(v(document.getElementsByTagName(c[d])));
                        if (a.length && a[0].getBoundingClientRect) {
                            for (d = 0; c = a[d]; ++d) z(b, c);
                            a = "oh=" + b.l;
                            b.f && (a += "&n=" + b.f);
                            if (c = !!b.a.length)
                                for (a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length; ++d) {
                                    var e = "," + encodeURIComponent(b.a[d]);
                                    131072 >= a.length + e.length && (a += e)
                                }
                            b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(B())), 131072 >= a.length + e.length && (a += e), c = !0);
                            C = a;
                            if (c) {
                                d = b.h;
                                b = b.j;
                                var f;
                                if (window.XMLHttpRequest) f = new XMLHttpRequest;
                                else if (window.ActiveXObject) try {
                                    f = new ActiveXObject("Msxml2.XMLHTTP")
                                } catch (r) {
                                    try {
                                        f = new ActiveXObject("Microsoft.XMLHTTP")
                                    } catch (D) {}
                                }
                                f && (f.open("POST", d + (-1 == d.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(b)), f.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), f.send(a))
                            }
                        }
                    }

                    function B() {
                        var b = {},
                            c;
                        c = document.getElementsByTagName("IMG");
                        if (!c.length) return {};
                        var a = c[0];
                        if (!("naturalWidth" in a && "naturalHeight" in a)) return {};
                        for (var d = 0; a = c[d]; ++d) {
                            var e = a.getAttribute("data-pagespeed-url-hash");
                            e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 < a.naturalHeight || e in b && a.width >= b[e].o && a.height >= b[e].m) && (b[e] = {
                                rw: a.width,
                                rh: a.height,
                                ow: a.naturalWidth,
                                oh: a.naturalHeight
                            })
                        }
                        return b
                    }
                    var C = "";
                    u("pagespeed.CriticalImages.getBeaconData", function() {
                        return C
                    });
                    u("pagespeed.CriticalImages.Run", function(b, c, a, d, e, f) {
                        var r = new y(b, c, a, e, f);
                        x = r;
                        d && w(function() {
                            window.setTimeout(function() {
                                A(r)
                            }, 0)
                        })
                    });
                })();
                pagespeed.CriticalImages.Run('/ngx_pagespeed_beacon', '#tren-200-trieu.html', 'HNFLaiers_', false, false, 'MUE-sV_yIGI');
            </script>
            
            <img style="padding-left: 10px;max-width: 80%;overflow:hidden;" class="desktop-hide" border="0" alt="Sim số đẹp" data-pagespeed-lazy-src="/images/sim-so-dep-gia-re.png?r=1" data-pagespeed-url-hash="1664753116" src="<?php echo base_url('assets/home')?>/index_files/1.JiBnMqyl6S.gif" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" data-pagespeed-lazy-replaced-functions="1">
        </a>
    </div>
 
</div>
<table width="100%" border="0" cellpadding="0" cellspacing="0" style=" border-top: 2px solid #525252; ">
    <tbody>
        <tr>
            <td class="main-menu">
                <label for="show-menu" class="show-menu">
                    <div id="show-menu-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>Menu</label>
                <input type="checkbox" id="show-menu" role="button">
                <ul id="menu">
                    <li><a href="<?php echo site_url();?>">Trang chủ</a></li>
                    <li><a href="#sim-phong-thuy">Sim phong thủy</a></li>
                    <li>
                        <a href="<?php echo site_url('sim-tra-gop');?>" style="color: yellow;"><img src="<?php echo base_url('assets/home');?>/index_files/new2.gif" data-pagespeed-url-hash="1265255988" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> Sim Trả Góp</a>
                    </li>
                    <li><a href="<?php echo site_url('thu-mua-sim-so-dep');?>">Thu mua sim</a></li>
                    <li><a href="#bai-viet/65/Cach-mua-sim-va-thanh-toan.html">Thanh toán</a></li>
                    <li><a href="<?php echo site_url('lien-he');?>">Liên hệ</a></li>
                    <li class="desktop-hide">
                        <div class="list-group desktop-hide">
                            <a href="javascript:void(0);" class="list-group-item active">Sim theo giá</a>
                            <div style="margin-top: 1px;columns: 177px 2;column-gap: 0px;border: 1px solid #ccc;">
                                <a class="list-group-item lgit" href="#duoi-500-nghin.html">Sim dưới 500 nghìn</a>
                                <a class="list-group-item lgit" href="#tu-500-nghin-den-1-trieu.html">Sim giá 500 - 1 triệu</a>
                                <a class="list-group-item lgit" href="#tu-1-trieu-den-3-trieu.html">Sim giá 1 - 3 triệu</a>
                                <a class="list-group-item lgit" href="#tu-3-trieu-den-5-trieu.html">Sim giá 3 - 5 triệu</a>
                                <a class="list-group-item lgit" href="#tu-5-trieu-den-10-trieu.html">Sim giá 5 - 10 triệu</a>
                                <a class="list-group-item lgit" href="#tu-10-trieu-den-50-trieu.html">Sim giá 10 - 50 triệu</a>
                                <a class="list-group-item lgit" href="#tu-50-trieu-den-100-trieu.html">Sim giá 50 - 100 triệu</a>
                                <a class="list-group-item lgit" href="#tu-100-trieu-den-200-trieu.html">Sim 100 - 200 triệu</a>
                                <a class="list-group-item lgit" href="#tren-200-trieu.html">Sim trên 200 triệu</a>
                                <a class="list-group-item lgit" href="javascript:void(0);" onclick="document.getElementById(&#39;chonkhoanggiabg&#39;).style.display=&#39;block&#39;;document.getElementById(&#39;chonkhoanggia&#39;).style.top=&#39;100px&#39;">Tùy chọn khoảng giá</a>
                            </div>
                        </div>
                        <div class="list-group desktop-hide">
                            <a href="javascript:void(0);" class="list-group-item active">Sim theo loại</a>
                            <div style="margin-top: 1px;columns: 177px 2;column-gap: 0px;border: 1px solid #ccc;">
                                <a class="list-group-item lgit" href="#82/sim-vip.html">Sim VIP</a>
                                <a class="list-group-item lgit" href="#100/sim-luc-quy.html">Sim Lục quý</a>
                                <a class="list-group-item lgit" href="#99/sim-ngu-quy.html">Sim Ngũ quý</a>
                                <a class="list-group-item lgit" href="#68/sim-tu-quy.html">Sim Tứ quý</a>
                                <a class="list-group-item lgit" href="#74/sim-taxi.html">Sim Taxi</a>
                                <a class="list-group-item lgit" href="#102/sim-tam-hoa-kep.html">Sim Tam hoa kép</a>
                                <a class="list-group-item lgit" href="#80/sim-tam-hoa.html">Sim Tam hoa</a>
                                <a class="list-group-item lgit" href="#73/sim-loc-phat.html">Sim Lộc phát</a>
                                <a class="list-group-item lgit" href="#72/sim-than-tai.html">Sim Thần Tài</a>
                                <a class="list-group-item lgit" href="#70/sim-ong-dia.html">Sim Ông Địa</a>
                                <a class="list-group-item lgit" href="#sim-lap-kep">Sim Lặp kép</a>
                                <a class="list-group-item lgit" href="#79/sim-ganh-dao.html">Sim Gánh đảo</a>
                                <a class="list-group-item lgit" href="#81/sim-tien-len.html">Sim Tiến lên</a>
                                <a class="list-group-item lgit" href="#71/sim-doi.html">Sim Đôi</a>
                                <a class="list-group-item lgit" href="#76/sim-de-nho.html">Sim Dễ nhớ</a>
                                <a class="list-group-item lgit" href="#77/sim-nam-sinh.html">Sim Năm sinh</a>
                                <a class="list-group-item lgit" href="#78/sim-so-doc.html">Sim Số độc</a>
                                <a class="list-group-item lgit" href="#105/sim-luc-quy-giua.html">Sim Lục quý giữa</a>
                                <a class="list-group-item lgit" href="#104/sim-ngu-quy-giua.html">Sim Ngũ quý giữa</a>
                                <a class="list-group-item lgit" href="#103/sim-tu-quy-giua.html">Sim Tứ quý giữa</a>
                                <a class="list-group-item lgit" href="#106/sim-dau-so-co.html">Sim đầu số cổ</a>
                                <a class="list-group-item lgit" href="#sim-dai-cat">Sim Đại Cát</a>
                                <a class="list-group-item lgit" href="#sim-phong-thuy">Sim phong thủy</a>
                                <a class="list-group-item lgit" href="#84/sim-tu-chon.html">Sim Tự chọn</a>
                                <a class="list-group-item lgit" href="#sim-tra-gop">Sim trả góp</a>
                                <a class="list-group-item lgit" href="#sim-4g">Sim 3G/4G</a>
                            </div>
                        </div>
                        <div class="list-group desktop-hide">
                            <a href="javascript:void(0);" class="list-group-item active">Sim theo mạng</a>
                            <div style="margin-top: 1px;columns: 177px 2;column-gap: 0px;border: 1px solid #ccc;">
                                <a class="list-group-item lgit" href="#sim-theo-mang-di-dong/sim-so-dep-viettel.html">Sim Viettel</a>
                                <a class="list-group-item lgit" href="#sim-theo-mang-di-dong/sim-so-dep-vinaphone.html">Sim Vinaphone</a>
                                <a class="list-group-item lgit" href="#sim-theo-mang-di-dong/sim-so-dep-mobifone.html">Sim Mobifone</a>
                                <a class="list-group-item lgit" href="#sim-theo-mang-di-dong/sim-so-dep-vietnamobile.html">Sim Vietnamobile</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </td>
        </tr>
    </tbody>
</table>