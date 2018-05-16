$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var statuses = [{'id': 0, name: 'Укажите значение'}, {'id': 1, name: 'Активный'}, {'id': 2, name: 'Не активнай'}];
var gridDataSource = new DevExpress.data.DataSource({

    // загрузка данных
    load: function (loadOptions) {
        return $.getJSON('api/banks');
    },
    // добавление данных
    insert: function (values) {
        return $.ajax({
            url: "api/banks",
            method: "POST",
            data: {

                name: values.name,
                link: values.link,
                site: values.site,
                status_id: values.status_id
            }
        })
    },
    // удаление даннх
    remove: function (key) {
        return $.ajax({
            url: "api/banks/" + encodeURIComponent(key.id),
            method: "DELETE",
        });
    },
    // обновление данных
    update: function (key, values) {
        return $.ajax({
            url: "api/banks/" + encodeURIComponent(key.id),
            method: "PUT",
            data: {
                name: values.name,
                bank_site_id: values.bank_site_id,
                link: values.link,
                site: values.site,
                status_id: values.status_id
            }
        })
    }
});


var devData = new DevExpress.data.DataSource("dev-grid-data");


//var devMasterDetailData = new DevExpress.data.DataSource("dev-grid-data");

// передаём в грид
$(function () {
    $("#gridContainer").dxDataGrid({

        //  dataSource: devData,
        dataSource: gridDataSource,
        searchPanel: {visible: true},
        keyExpr: "id",
        columns: ["name", "site", "link", {

            dataField: "created_at",
            caption: "Created",
            dataType: "date",
            width: 125
        },
            {
                dataField: 'status_id',
                caption: 'Status',
                lookup: {
                    dataSource: statuses,
                    displayExpr: "name",
                    valueExpr: "id"
                }
            }],
        selection: {
            mode: "single"
        },
        summary: {
            totalItems: [{
                column: "name",
                summaryType: "count"
            }]
        },
        editing: {
            mode: "popup",
            popup: {
                title: "Bank Info",
                showTitle: true,
                width: 700,
                height: 345,
                position: {
                    my: "top",
                    at: "top",
                    of: window
                }
            },
            // mode: "row",
            // mode: "form",
            allowUpdating: true,
            allowDeleting: true,
            allowAdding: true,

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
            pageSize: 30
        },
        onRowUpdated: function (e) {
            console.log("UpdateRow");
            console.log(e);
        },
        onEditingStart: function (e) {
            console.log("StartEditRow");
            console.log(e);
        },
        onRowUpdating: function (e) {
            console.log("RowUpdating");
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

$(function () {
    $("#gridMasterDetailContainer").dxDataGrid({
        dataSource: devMasterDetailData,
        searchPanel: {visible: true},
        keyExpr: "id",
        columns: ["name", "site", "link", "created_at"],
        masterDetail: {
            enabled: true,
            template: function (container, options) {
                var currentEmployeeData = options.data;

                $("<div>")
                    .addClass("master-detail-caption")
                    .text(currentEmployeeData.name + " last update " + currentEmployeeData.created_at + " Offices:[" + currentEmployeeData.offices.length + "]")
                    .appendTo(container);

                $("<div>")
                    .dxDataGrid({
                        columnAutoWidth: true,
                        showBorders: true,
                        keyExpr: "id",
                        columns: ["name", "address"],
                        selection: {
                            mode: "multiple"
                        },
                        dataSource: currentEmployeeData.offices,
                        masterDetail: {
                            enabled: true,
                            template: function (container, options) {

                                currentEmployee1Data = options.data;
                                console.log('Данные ' + currentEmployee1Data)
                                $("<div>")
                                    .addClass("master-detail-caption1")
                                    .text(currentEmployee1Data.pokupka + " last update " + currentEmployee1Data.prodaja + " Kurses:")
                                    .appendTo(container);
                                $("<div>")
                                    .dxDataGrid({
                                        editing: {
                                            mode: 'row', // Specifying the edit mode
                                            allowUpdating: true, // Enable editing
                                            allowAdding: true, // Enable insertion
                                            allowDeleting: true // Enable removing
                                        },
                                        columnAutoWidth: true,
                                        showBorders: true,
                                        columns: ["currencies", "pokupka", "prodaja", "created_at"],
                                        selection: {
                                            mode: "multiple"
                                        },
                                        dataSource: currentEmployee1Data.kurses
                                    }).appendTo(container);
                            }
                        }
                    }).appendTo(container);
            }
        }
    });
});