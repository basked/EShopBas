$(function () {
    var e = $("#datatable1").DataTable({ responsive: true,    buttons: [
            'copy', 'excel', 'pdf'
        ],   responsive: {details: !1}});
    $(document).on("sidebarChanged", function () {
        e.columns.adjust(), e.responsive.recalc(), e.responsive.rebuild()
    })
});