function createDatatable(nomedatatable) {
  $(nomedatatable).dataTable({
    searching: true,
    paging: true,
    ordering: true,
    Sorting: [],
    fixedHeader: true,
    buttons: ['copy', 'csv', 'excel'],
    language: {
      url: '//cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json'
    }
  });
}
