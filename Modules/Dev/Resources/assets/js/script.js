$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function(){
    $("#gridContainer").dxDataGrid({
        dataSource: customers,
        editing: {
            mode: "form",
            allowUpdating: true
        },
        columns: ["CompanyName", "City", "State", "Phone", "Fax"]
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