$(function () {
    var e = $("#datatable1").DataTable({ responsive: true,    buttons: [
            'copy', 'excel', 'pdf'
        ]});
    // $(document).on("sidebarChanged", function () {
    //     e.columns.adjust(), e.responsive.recalc(), e.responsive.rebuild()
    // })
});