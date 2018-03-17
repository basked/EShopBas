//DevExpress.ui.themes.current('generic.light');
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