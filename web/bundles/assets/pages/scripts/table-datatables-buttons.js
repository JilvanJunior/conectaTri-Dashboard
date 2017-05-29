var TableDatatablesButtons = function () {

    var initTable1 = function () {
        var table = $('#sample_1');

        var oTable = table.dataTable({

            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Mostrando _START_ até _END_ de _TOTAL_ dados",
                "infoEmpty": "Nenhum dado encontrado",
                "infoFiltered": "(filtrado de _MAX_ dados)",
                "lengthMenu": "_MENU_ linhas",
                "search": "Pesquisar:",
                "zeroRecords": "Nenhum dados com esse valor encontrado"
            },

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},


            buttons: [
                { extend: 'print', className: 'btn dark btn-outline', text: 'Imprimir'},
                { extend: 'copy', className: 'btn red btn-outline', text: 'Copiar' },
                { extend: 'pdf', className: 'btn green btn-outline', text: 'PDF' },
                { extend: 'excel', className: 'btn yellow btn-outline ', text: 'Excel' },
                { extend: 'csv', className: 'btn purple btn-outline ', text: 'CSV' },
                { extend: 'colvis', className: 'btn dark btn-outline', text: 'Colunas'}
            ],

            // setup responsive extension: http://datatables.net/extensions/responsive/
            responsive: true,

            //"ordering": false, disable column ordering 
            //"paging": false, disable pagination

            "order": [
                [0, 'asc']
            ],
            
            "lengthMenu": [
                [5, 10, 15, 20, 50, 100, -1],
                [5, 10, 15, 20, 50, 100, "Todos"] // change per page values here
            ],
            // set the initial value
            "pageLength": 50,

            "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
        });
    }




    return {

        //main function to initiate the module
        init: function () {

            if (!jQuery().dataTable) {
                return;
            }

            initTable1();

        }

    };

}();

jQuery(document).ready(function() {
    TableDatatablesButtons.init();
});