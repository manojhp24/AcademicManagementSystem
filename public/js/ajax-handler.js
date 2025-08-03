const AjaxHandler = {
    init: function () {
        $(document).on("click", ".ajax-link", function (e) {
            e.preventDefault();
            const url = $(this).attr("href");
            AjaxHandler.loadPage(url,true,$(this));
        });

        window.onpopstate = function(){
            AjaxHandler.loadPage(location.pathname,false);
            console.log(location.pathname);

        }

        AjaxHandler.loadPage(location.pathname, false);
    },


    loadPage: function (url, pushToHistory = true, clickedElement = null) {
        $(".ajax-link").removeClass("bg-blue-700");
        if(clickedElement)clickedElement.addClass("bg-blue-700");

        $("#main-content").html(
            `<div style="display: flex; justify-content: center; align-items: center; height: 300px;"><div class="loader"></div></div>`
        );

        $.ajax({
            url: url,
            type: "GET",
            success: function (response) {
                $("#main-content").html(response);
                if(pushToHistory){
                    window.history.pushState({}, "", url);
                }

                if (typeof DropdownLoader !== "undefined")
                    DropdownLoader.init();
                if (typeof DataTableLoader !== "undefined")
                    DataTableLoader.init();
                if (typeof CheckboxToggleHandler !== "undefined")
                    CheckboxToggleHandler.init();
                if (
                    $("#student-form").length &&
                    typeof StudentFormHandler !== "undefined"
                ) {
                    StudentFormHandler.init();
                };
                if (typeof MarksEntryFormHandler !== "undefined") MarksEntryFormHandler.init();
                if (typeof CourseFormHandler !== "undefined") CourseFormHandler.init();


            },
            error: function () {
                $("#main-content").html(
                    '<div class="text-red-500">Error loading content.</div>'
                );
            },
        });

    }
};
