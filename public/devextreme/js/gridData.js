// Берем с сайта данные
// var dev_data;
// dev_data = $.get("dev",
//     function (data) {
//         dev_data = data;
//     }, "json");

var devData = new DevExpress.data.DataSource("dev-grid-data");
var devMasterDetailData = new DevExpress.data.DataSource("dev-grid-data");
var currentEmployee1Data;
// передаём в грид
$(function () {
    $("#gridContainer").dxDataGrid({
        //dataSource: customers,
        dataSource: devData,
        columns: ["name","site","link","created_at"],
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

$(function(){
    $("#gridMasterDetailContainer").dxDataGrid({
        dataSource: devMasterDetailData ,
        keyExpr: "id",
        columns: ["name","site","link","created_at"],
        masterDetail: {
            enabled: true,
            template: function(container, options) {
                var currentEmployeeData = options.data;

                $("<div>")
                    .addClass("master-detail-caption")
                    .text(currentEmployeeData.name + " last update " + currentEmployeeData.created_at + " Offices:")
                    .appendTo(container);

                $("<div>")
                    .dxDataGrid({
                        columnAutoWidth: true,
                        showBorders: true,
                        keyExpr: "id",
                        columns: ["name","address"],
                        selection: {
                            mode: "multiple"
                        },
                        dataSource: currentEmployeeData.offices,
                        masterDetail:{
                            enabled: true,
                            template: function(container, options) {

                                currentEmployee1Data = options.data;
                                console.log('Данные ' +currentEmployee1Data)
                                $("<div>")
                                    .addClass("master-detail-caption1")
                                    .text(currentEmployee1Data.pokupka + " last update " + currentEmployee1Data.prodaja + " Kurses:")
                                    .appendTo(container);
                                $("<div>")
                                    .dxDataGrid({
                                        columnAutoWidth: true,
                                        showBorders: true,
                                        columns: ["currencies","pokupka","prodaja"],
                                        selection: {
                                            mode: "multiple"
                                        },
                                        dataSource: currentEmployee1Data.kurses
                        }).appendTo(container);}}
                    }).appendTo(container);
            }
        }
    });
});