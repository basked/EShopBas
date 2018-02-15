$(function () {
    var e = document.getElementById("gauge1"), t = document.getElementById("gauge2"),
        o = document.getElementById("gauge3"), a = document.getElementById("gauge4"), l = {
            angle: 0,
            lineWidth: .06,
            radiusScale: 1,
            pointer: {length: .6, strokeWidth: .035, color: "#fff"},
            fontSize: 20,
            limitMax: !1,
            limitMin: !1,
            colorStart: "#6F6EA0",
            colorStop: "#C0C0DB",
            strokeColor: "#eee",
            generateGradient: !1,
            scaleOverride: !0,
            highDpiSupport: !0
        };
    l.colorStop = "#864DD9";
    var n = new Donut(e).setOptions(l);
    n.maxValue = 3e3, n.setMinValue(0), n.set(Math.floor(3e3 * Math.random())), n.setTextField(document.getElementById("gauge1Value")), l.colorStop = "#CF53F9";
    var r = new Donut(t).setOptions(l);
    r.maxValue = 3e3, r.setMinValue(0), r.set(Math.floor(3e3 * Math.random())), r.setTextField(document.getElementById("gauge2Value")), l.colorStop = "#e95f71";
    var d = new Donut(o).setOptions(l);
    d.maxValue = 3e3, d.setMinValue(0), d.set(Math.floor(3e3 * Math.random())), d.setTextField(document.getElementById("gauge3Value")), l.colorStop = "#7127AC";
    var s = new Donut(a).setOptions(l);
    s.maxValue = 3e3, s.setMinValue(0), s.set(Math.floor(3e3 * Math.random())), s.setTextField(document.getElementById("gauge4Value"));
    setInterval(function () {
        n.set(Math.floor(3e3 * Math.random())), r.set(Math.floor(3e3 * Math.random())), d.set(Math.floor(3e3 * Math.random())), s.set(Math.floor(3e3 * Math.random()))
    }, 5e3);
    $.fn.sparkline.defaults.common.lineColor = "#864dd9", $.fn.sparkline.defaults.common.fillColor = "#ad91d8", $.fn.sparkline.defaults.common.spotColor = "#e95f71", $.fn.sparkline.defaults.common.minSpotColor = "#e95f71", $.fn.sparkline.defaults.common.maxSpotColor = "#e95f71", $.fn.sparkline.defaults.bar.barColor = "#864dd9", $.fn.sparkline.defaults.bar.stackedBarColor = ["#864dd9", "#CF53F9", "#e95f71"], $.fn.sparkline.defaults.box.boxFillColor = "#ad91d8", $.fn.sparkline.defaults.pie.sliceColors = ["#864dd9", "#CF53F9", "#e95f71"], $(".sparklines").sparkline("html", {enableTagOptions: !0})
});