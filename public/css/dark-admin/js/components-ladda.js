$(function () {
    Ladda.bind("p:not(.ladda-progress-demo) button.ladda-button", {timeout: 2e3}), Ladda.bind(".ladda-progress-demo button.ladda-button", {
        callback: function (a) {
            var t = 0, d = setInterval(function () {
                t = Math.min(t + .1 * Math.random(), 1), a.setProgress(t), 1 === t && (a.stop(), clearInterval(d))
            }, 200)
        }
    })
});