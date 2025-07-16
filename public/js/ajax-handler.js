const AjaxHandler = {
    init: function () {
        $(document).on("click", ".ajax-link", function (e) {
            e.preventDefault();
            const url = $(this).attr("href");
            $(".ajax-link").removeClass("bg-blue-700");
            $(this).addClass("bg-blue-700");

            $("#main-content").html(
                `<div style="display: flex; justify-content: center; align-items: center; height: 300px;"><div class="loader"></div></div>`
            );

            $.ajax({
                url: url,
                type: "GET",
                success: function (response) {
                    $("#main-content").html(response);
                    window.history.pushState({}, "", url);

                     if (typeof DropdownLoader !== "undefined")
                         DropdownLoader.init();
                     if (typeof DataTableLoader !== "undefined")
                         DataTableLoader.init();
                        if (typeof CheckboxToggleHandler !== "undefined")
                            CheckboxToggleHandler.init();


                },
                error: function () {
                    $("#main-content").html(
                        '<div class="text-red-500">Error loading content.</div>'
                    );
                },
            });
        });

    }

}














// $(function () {
//     loadStateDropdown();

//     if ($(".data-table").length) {
//         $(".data-table").each(function () {
//             $(this).DataTable();
//         });
//     }

//     // AJAX navigation
//     $(document).on("click", ".ajax-link", function (e) {
//         e.preventDefault();
//         const url = $(this).attr("href");
//         $(".ajax-link").removeClass("bg-blue-700");
//         $(this).addClass("bg-blue-700");

//         $("#main-content").html(
//             `<div style="display: flex; justify-content: center; align-items: center; height: 300px;"><div class="loader"></div></div>`
//         );

//         $.ajax({
//             url: url,
//             type: "GET",
//             success: function (response) {
//                 $("#main-content").html(response);
//                 window.history.pushState({}, "", url);

//                 // Re-initialize DataTables after AJAX content load
//                 if ($(".data-table").length) {
//                     $(".data-table").each(function () {
//                         $(this).DataTable();
//                     });
//                 }
//                  if ($("#stateDropdown").length) {
//                      loadStateDropdown();
//                  }
//             },
//             error: function () {
//                 $("#main-content").html(
//                     '<div class="text-red-500">Error loading content.</div>'
//                 );
//             },
//         });
//     });
// });
