function formatnumberprice(e) {
    e.value = e.value.replace(/^0+/, "").replace(/[^0-9]/g, "").toString().replace(/\B(?=(\d\d\d)+(?!\d))/g, ".")
}

function lockhoanggia() {
    pricef = document.getElementById("pricef").value.replace(".", ""), pricee = document.getElementById("pricee").value.replace(".", ""), pricef < pricee && (pricef % 1e6 == 0 ? pricef = pricef / 1e6 + "-trieu" : pricef = pricef / 1e3 + "-nghin", pricee % 1e6 == 0 ? pricee = pricee / 1e6 + "-trieu" : pricee = pricee / 1e3 + "-nghin", document.getElementById("chonkhoanggiabg").style.display = "none", document.getElementById("chonkhoanggia").style.top = "-500px", document.getElementById("loading_div").style.display = "block", location.href = "/sim-theo-gia/tu-" + pricef + "-den-" + pricee + ".html")
}

function scrollToTop(e) {
    var t = window.scrollY / 2,
        n = 0,
        l = performance.now();
    window.requestAnimationFrame(function i(o) {
        (n += Math.PI / (e / (o - l))) >= Math.PI && window.scrollTo(0, 180), 180 !== window.scrollY && (window.scrollTo(0, Math.round(t + t * Math.cos(n))), l = o, window.requestAnimationFrame(i))
    })
}

function showFilter(e) {
    "listPriceFilter" == e ? (ishowPrice = !ishowPrice, ishowTelco = !1, ishowSort = !1, ishowLength = !1) : "listTelcoFilter" == e ? (ishowTelco = !ishowTelco, ishowPrice = !1, ishowSort = !1, ishowLength = !1) : "listSortFilter" == e ? (ishowSort = !ishowSort, ishowPrice = !1, ishowTelco = !1, ishowLength = !1) : "listlengthFilter" == e && (ishowLength = !ishowLength, ishowPrice = !1, ishowTelco = !1, ishowSort = !1), ishowPrice ? document.getElementById("listPriceFilter").style.display = "block" : document.getElementById("listPriceFilter").style.display = "none", ishowTelco ? document.getElementById("listTelcoFilter").style.display = "block" : document.getElementById("listTelcoFilter").style.display = "none", ishowSort ? document.getElementById("listSortFilter").style.display = "block" : document.getElementById("listSortFilter").style.display = "none", ishowLength ? document.getElementById("listlengthFilter").style.display = "block" : document.getElementById("listlengthFilter").style.display = "none", window.scrollTo(0, 180)
}

function set_filter2(e, t, n, l, i) {
    "" == l && (l = "0"), "" == e && (e = "0"), "" == n && (n = "0"), "" == t && (t = "0"), "" == i && (i = "0"), html = "", "0" != l && (document.getElementById("lF0").className = "all", document.getElementById("lF" + l.replace(",", "")).className = "check", html += '<a href="javascript:;
        " onclick="
        lengthFilter(0)
        ">'+document.getElementById("
        lF "+l.replace(", ","
        ")).textContent+' <i class="
        ic - clearfil "></i></a>'),"
        0 "!=e&&(document.getElementById("
        pF0 ").className="
        all ",document.getElementById("
        pF "+e.replace(", ","
        ")).className="
        check ",html+='<a href="
        javascript: ;
        " onclick="
        priceFilter(0)
        ">'+document.getElementById("
        pF "+e.replace(", ","
        ")).textContent+' <i class="
        ic - clearfil "></i></a>'),"
        0 "!=t&&(document.getElementById("
        tF0 ").className="
        all ",document.getElementById("
        tF "+t.replace(", ","
        ")).className="
        check ",html+='<a href="
        javascript: ;
        " onclick="
        telcoFilter(0)
        ">'+document.getElementById("
        tF "+t.replace(", ","
        ")).textContent+' <i class="
        ic - clearfil "></i></a>'),"
        0 "!=n&&(document.getElementById("
        sF0 ").className="
        all ",document.getElementById("
        sF "+n.replace(", ","
        ")).className="
        check ",html+='<a href="
        javascript: ;
        " onclick="
        sortFilter(0)
        ">'+document.getElementById("
        sF "+n.replace(", ","
        ")).textContent+' <i class="
        ic - clearfil "></i></a>'),"
        1 "==i&&(document.getElementById("
        active - tragop ").className="
        ic - checkbox - active "),document.getElementById("
        choosedfilter ").insertAdjacentHTML("
        beforebegin ",html),document.getElementById("
        m10so_filter ").value=l,document.getElementById("
        price_filter ").value=e,document.getElementById("
        telco_filter ").value=t,document.getElementById("
        giaban_filter ").value=n,document.getElementById("
        tragop_filter ").value=i
    }

    function priceFilter(e) {
        document.getElementById("price_filter").value = e + "", submit_filter()
    }

    function telcoFilter(e) {
        document.getElementById("telco_filter").value = e + "", submit_filter()
    }

    function sortFilter(e) {
        document.getElementById("giaban_filter").value = e + "", submit_filter()
    }

    function tragopFilter() {
        "0" == document.getElementById("tragop_filter").value ? document.getElementById("tragop_filter").value = "1" : document.getElementById("tragop_filter").value = "0", submit_filter()
    }

    function lengthFilter(e) {
        document.getElementById("m10so_filter").value = e + "", submit_filter()
    }

    function resetFilter() {
        document.getElementById("m10so_filter").value = 0, document.getElementById("price_filter").value = 0, document.getElementById("telco_filter").value = 0, document.getElementById("giaban_filter").value = 0, submit_filter()
    }

    function submit_filter() {
        document.getElementById("img_filter").style.display = "block", document.getElementById("filter_form").submit()
    }

    function set_filter(e, t, n, l) {
        "" == l && (l = "0"), "" == e && (e = "0"), "" == n && (n = "0"), "" == t && (t = "0"), document.getElementById("m10so_filter").value = l, document.getElementById("price_filter").value = e, document.getElementById("telco_filter").value = t, document.getElementById("giaban_filter").value = n
    }

    function simple_search(e, t, n) {
        return "" == (e = (e = (e = (e = new String(e)).toLowerCase()).replace(/[^0-9^*^x]/g, "")).replace(/\*+/g, "*")) ? (alert("Nhập số cần tìm có ít nhất 2 chữ số!"), document.timkiem.tag.focus(), !1) : (document.getElementById("loading_div").style.display = "block", document.timkiem.action = t + e + n, ga("send", "event", "search", "search", "searchstart"), !0)
    }

    function simple_search2(e) {
        return "" == (e = (e = (e = (e = new String(e)).toLowerCase()).replace(/[^0-9^*^x]/g, "")).replace(/\*+/g, "*")) ? (alert("Nhập số cần tìm có ít nhất 2 chữ số!"), document.timkiem2.tag2.focus(), !1) : (document.getElementById("loading_div").style.display = "block", location.href = "#tim-sim/" + e + ".html", !0)
    }

    function advanced_search(search_url, extension) {
        with(document.timkiemnangcao) {
            var p_sim = s_sim.value;
            p_sim = p_sim.toLowerCase(), p_sim = p_sim.replace(/[^0-9^*^x]/g, ""), p_sim = p_sim.replace(/\*+/g, "*");
            var p_mang = s_mang.options[s_mang.selectedIndex].value,
                p_nsim = s_nsim.options[s_nsim.selectedIndex].value,
                p_gia1 = s_gia1.value,
                p_gia2 = s_gia2.value;
            if ("0" != p_gia2 && parseInt(p_gia1) >= parseInt(p_gia2)) return alert("Đặt khoảng giá chưa đúng!"), !1;
            for (var p_no = "", i = 0; i < s_no.length; i++) s_no[i].checked && (p_no += s_no[i].value + ",");
            p_no = "" == p_no ? "0" : p_no.substring(0, p_no.length - 1)
        }
        document.getElementById("loading_div").style.display = "block";
        var url = "s" + p_sim + "-" + p_mang + "-" + p_nsim + "-" + p_gia1 + "-" + p_gia2 + "-" + p_no;
        return document.timkiemnangcao.action = search_url + url + extension, !0
    }

    function checkform() {
        var e;
        return "" == (e = document.order_form.sosim).value ? (alert("Nhập Số sim cần mua."), e.style.backgroundColor = "yellow", e.focus(), !1) : "" == (e = document.order_form.hoten).value ? (alert("Nhập Họ tên."), e.style.backgroundColor = "yellow", e.focus(), !1) : "" == (e = document.order_form.dienthoai).value ? (alert("Nhập Điện thoại liên hệ."), e.style.backgroundColor = "yellow", e.focus(), !1) : "" == (e = document.order_form.txtcaptcha).value ? (alert("Nhập Mã xác thực."), e.style.backgroundColor = "yellow", e.focus(), !1) : void 0
    }

    function is_phone(e) {
        return !!e.match(/^0(((((9[0-9]))|((12[0-9]))|((16[0-9]))|((188|199)))\d)|((4|8|20|30|500|60|70|210|31|501|61|710|211|320|510|62|711|218|321|511|63|72|219|33|52|64|73|22|350|53|650|74|230|351|54|651|75|231|36|55|66|76|240|37|56|67|77|241|38|57|68|780|25|39|58|781|26|59|79|27|280|281|29)\d{
            7,
        }
    )) $ / ) || (alert("Bạn nhập sai số điện thoại"), !1)
}

function checkphone() {
    url = "sim-phong-thuy";
    var e = $("#ngaysinh").val(),
        t = $("#thangsinh").val(),
        n = $("#namsinh").val(),
        l = $("input[name=gioitinh]:checked").val(),
        i = $("#tranh-0:checked").val(),
        o = $(".hidef #sosim").val(),
        c = $("#hoten").val();
    null == o && (o = "");
    i = [];
    if ($("input:checked").each(function() {
            "tranh" == $(this).attr("name") && i.push($(this).attr("value"))
        }), i = i.length > 0 ? "&tranh=" + i.join() : "", "" == o || o.length > 9 && (url = "xem-phong-thuy-sim"), 0 != $("input[name=gioitinh]:checked").length) {
        if ("" == e) return alert("Chọn ngày sinh"), void $("#ngaysinh").focus();
        if ("" == t) return alert("Chọn tháng sinh"), void $("#thangsinh").focus();
        if ("" == n) return alert("Chọn năm sinh"), void $("#namsinh").focus();
        document.getElementById("phongthuyloading").style.display = "table", setTimeout(function() {
            window.location.href = url + "?ss=" + o + "&gt=" + l + "&ns=" + e + "-" + t + "-" + n + "&ht=" + c + i
        }, 500)
    } else alert("Chọn giới tính")
}

function sendsms(e, t) {
    var n, l = navigator.userAgent.toLowerCase();
    l.indexOf("iphone") > -1 || l.indexOf("ipad") > -1 ? (n = "sms:" + t + "&body=" + e, location.href = n) : l.indexOf("android") > -1 || l.indexOf("windows phone") > -1 || l.indexOf("blackberry") > -1 ? (n = "sms:" + t + "?body=" + e, location.href = n) : alert("Soạn " + e + " gửi " + t)
}
ishowPrice = !1, ishowTelco = !1, ishowSort = !1, ishowLength = !1;