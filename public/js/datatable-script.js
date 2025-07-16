const DataTableLoader = {
    init: function () {
        if ($(".data-table").length) {
            $(".data-table").each(function () {
                $(this).DataTable();
            });
        }
    },
};
