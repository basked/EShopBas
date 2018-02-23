// Берем с сайта данные
// var dev_data;
// dev_data = $.get("dev",
//     function (data) {
//         dev_data = data;
//     }, "json");


// передаём в грид
$(function () {
    $("#gridContainer").dxDataGrid({
        //dataSource: customers,
        dataSource: dev_data,
        columns: ["name","site","created_at"],
        selection: {
            mode: "multiple"
        },
        "export": {
            enabled: true,
            fileName: "Employees",
            allowExportSelectedData: true
        },
        groupPanel: {
            visible: true
        },
        paging: {
            pageSize: 10
        },
    });
});