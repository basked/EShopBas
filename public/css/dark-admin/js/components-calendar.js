$(function () {
    var t = moment().startOf("day"), e = t.format("YYYY-MM"), a = t.clone().subtract(1, "day").format("YYYY-MM-DD"),
        n = t.format("YYYY-MM-DD"), r = t.clone().add(1, "day").format("YYYY-MM-DD");
    $("#calendar").fullCalendar({
        header: {
            left: "prev,next today",
            center: "title",
            right: "month,agendaWeek,agendaDay,listWeek"
        },
        editable: !0,
        eventLimit: !0,
        navLinks: !0,
        themeSystem: "bootstrap3",
        bootstrapGlyphicons: !1,
        events: [{title: "All Day Event", start: e + "-01"}, {
            title: "Long Event",
            start: e + "-07",
            end: e + "-10"
        }, {id: 999, title: "Repeating Event", start: e + "-09T16:00:00"}, {
            id: 999,
            title: "Repeating Event",
            start: e + "-16T16:00:00"
        }, {title: "Conference", start: a, end: r}, {
            title: "Meeting",
            start: n + "T10:30:00",
            end: n + "T12:30:00"
        }, {title: "Lunch", start: n + "T12:00:00"}, {title: "Meeting", start: n + "T14:30:00"}, {
            title: "Happy Hour",
            start: n + "T17:30:00"
        }, {title: "Dinner", start: n + "T20:00:00"}, {
            title: "Birthday Party",
            start: r + "T07:00:00"
        }, {title: "Click for Google", url: "http://google.com/", start: e + "-28"}]
    })
});