$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function(){
    $("#gridContainer").dxDataGrid({
        dataSource: orders,
        columnHidingEnabled: true,
        editing: {
            allowAdding: true,
            allowUpdating: true,
            mode: "batch"
        },
        "export": {
            enabled: true,
            fileName: "Orders"
        },
        grouping: {
            contextMenuEnabled: true,
            expandMode: "rowClick"
        },
        groupPanel: {
            emptyPanelText: "Use the context menu of header columns to group data",
            visible: true
        },
        pager: {
            allowedPageSizes: [5, 8, 15, 30],
            showInfo: true,
            showNavigationButtons: true,
            showPageSizeSelector: true,
            visible: true
        },
        paging: {
            pageSize: 8
        },
        columnChooser: {
            enabled: true,
            mode: "select"
        },
        columns: [{
            allowGrouping: false,
            dataField: "OrderNumber",
            caption: "Invoice Number",
            width: 130
        },  {
            caption: "City",
            dataField: "CustomerStoreCity"
        }, {
            caption: "State",
            dataField: "CustomerStoreState"
        },
            "Employee",{
                dataField: "OrderDate",
                dataType: "date"
            }, {
                dataField: "SaleAmount",
                format: "currency"
            }]
    });
});


var statuses = [{'id': 0, name: 'Укажите значение'}, {'id': 1, name: 'Активный'}, {'id': 2, name: 'Не активнай'}];

var bestKursesDataSource = new DevExpress.data.DataSource({
    load: function (loadOptions) {
        return $.getJSON('/dev/bestKurses');
    }
});

$(function(){
    $("#chart").dxChart({
        rotated: true,
        dataSource: bestKursesDataSource,
        series: {
            label: {
                visible: true,
                backgroundColor: "#c15e92"
            },
            color: "#79bac4",
            type: "bar",
            argumentField: "name",
            valueField: "min_prodaja"
        },
        title: "Курсы валют",
        argumentAxis: {
            label: {
                customizeText: function() {
                    return this.valueText;
                }
            }
        },
        valueAxis: {
            label: {
                visible: false
            }
        },
        "export": {
            enabled: true
        },
        legend: {
            visible: false
        }
    });
});