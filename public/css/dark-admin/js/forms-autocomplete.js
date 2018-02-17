$( document ).ready(function () {
    $.get("data/countries.json", function (e) {
        $("#typeahead2").typeahead({source: e.countries})
    }, "json"), $("#typeahead3").typeahead({
        displayText: function (e) {
            return e.name + " " + e.surname + ", " + e.company
        },
        afterSelect: function (e) {
            this.$element[0].value = e.email
        },
        source: [{
            name: "Alyce",
            surname: "White",
            company: "Combot",
            email: "alycewhite@combot.com",
            city: "Talpa"
        }, {
            name: "Santos",
            surname: "Pierce",
            company: "Franscene",
            email: "santospierce@franscene.com",
            city: "Vienna"
        }, {
            name: "Deirdre",
            surname: "Reed",
            company: "Whiskey Comp.",
            email: "deirdrereed@whiskeycomp.com",
            city: "Belva"
        }, {
            name: "Whitaker",
            surname: "Brennan",
            company: "Opticom",
            email: "whitakerbrennan@opticom.com",
            city: "Lodoga"
        }, {name: "Kristin", surname: "Norman", company: "Irack", email: "kristinnorman@irack.com", city: "Bodega"}]
    }), $("#typeahead4").typeahead({source: ["item 1", "item 2", "item 3"]})
});