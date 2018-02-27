$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var gridDataSource = new DevExpress.data.DataSource({

    load: function (loadOptions) {
        return $.getJSON('api/banks');
    },
    insert: function (values) {


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        return $.ajax({
            url: "api/banks",
            method: "POST",
            data: {
                name: values.name,
                link: values.link,
                site: values.site
            }
        })
    },
    remove: function (key) {
        console.log('key:');
        console.log(key.id);
        return $.ajax({
            url: "api/banks/" + encodeURIComponent(key.id),
            method: "DELETE",
        });
    },
    update: function (key, values) {
        return $.ajax({
            url: "api/banks" + encodeURIComponent(key),
            method: "PUT",
            data: values
        })
    }
});

// $(function() {
//     $("#gridContainer").dxDataGrid({
//         dataSource: gridDataSource,
//         // ...
//     });
// });


var devData = new DevExpress.data.DataSource("dev-grid-data");


//var devMasterDetailData = new DevExpress.data.DataSource("dev-grid-data");
var currentEmployee1Data;
// передаём в грид
$(function () {
    $("#gridContainer").dxDataGrid({

        //  dataSource: devData,
        dataSource: gridDataSource,
        keyExpr: "id",
        columns: ["name", "site", "link"],
        selection: {
            mode: "single"
        },
        editing: {
            mode: "row",
            allowUpdating: true,
            allowDeleting: true,
            allowAdding: true
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
        onRowUpdated: function (e) {
            console.log("UpdateRow");
            console.log(e);
        },
        onEditingStart: function (e) {
            console.log("StartEditRow");
            console.log(e);
        },
        onInitNewRow: function (e) {
            console.log("InitNewRow=");
            console.log(e);
        },
        onRowInserting: function (e) {
            console.log("RowInserting=");
            console.log(e.data);
        },
        onRowInserted: function (e) {
            console.log("RowInserted=");
            console.log(e.data);
        },
        onRowUpdating: function (e) {
            console.log("RowUpdating=");
            console.log(e);
        },

        onRowRemoving: function (e) {
            console.log("RowRemoving=");
            console.log(e);
        },
        onRowRemoved: function (e) {
            console.log("RowRemoved=");
            console.log(e);
        }
    });
});

// $(function () {
//     $("#gridMasterDetailContainer").dxDataGrid({
//         dataSource: devMasterDetailData,
//         searchPanel: {visible: true},
//         keyExpr: "id",
//         columns: ["name", "site", "link", "created_at"],
//         masterDetail: {
//             enabled: true,
//             template: function (container, options) {
//                 var currentEmployeeData = options.data;
//
//                 $("<div>")
//                     .addClass("master-detail-caption")
//                     .text(currentEmployeeData.name + " last update " + currentEmployeeData.created_at + " Offices:[" + currentEmployeeData.offices.length + "]")
//                     .appendTo(container);
//
//                 $("<div>")
//                     .dxDataGrid({
//                         columnAutoWidth: true,
//                         showBorders: true,
//                         keyExpr: "id",
//                         columns: ["name", "address"],
//                         selection: {
//                             mode: "multiple"
//                         },
//                         dataSource: currentEmployeeData.offices,
//                         masterDetail: {
//                             enabled: true,
//                             template: function (container, options) {
//
//                                 currentEmployee1Data = options.data;
//                                 console.log('Данные ' + currentEmployee1Data)
//                                 $("<div>")
//                                     .addClass("master-detail-caption1")
//                                     .text(currentEmployee1Data.pokupka + " last update " + currentEmployee1Data.prodaja + " Kurses:")
//                                     .appendTo(container);
//                                 $("<div>")
//                                     .dxDataGrid({
//                                         editing: {
//                                             mode: 'row', // Specifying the edit mode
//                                             allowUpdating: true, // Enable editing
//                                             allowAdding: true, // Enable insertion
//                                             allowDeleting: true // Enable removing
//                                         },
//                                         columnAutoWidth: true,
//                                         showBorders: true,
//                                         columns: ["currencies", "pokupka", "prodaja", "created_at"],
//                                         selection: {
//                                             mode: "multiple"
//                                         },
//                                         dataSource: currentEmployee1Data.kurses
//                                     }).appendTo(container);
//                             }
//                         }
//                     }).appendTo(container);
//             }
//         }
//     });
// });