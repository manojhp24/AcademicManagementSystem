

/**
 * ajax-scripts.js
 * Handles all AJAX requests for the application.
 * Example: Fetching data, submitting forms without page reload, etc.
 * Make sure this file is linked in your Blade views.
 */


$(document).ready(function () {
    $(document).on("click", ".ajax-link", function (e) {
        e.preventDefault();
        const url = $(this).attr("href");
        $(".ajax-link").removeClass("bg-blue-700");

        $(this).addClass("bg-blue-700");

        $("#main-content").html(
            ` <div style="display: flex; justify-content: center; align-items: center; height: 300px;"><div class="loader"></div></div>`
        );

        $.ajax({
            url: url,
            type: "GET",
            success: function (response) {
                $("#main-content").html(response);
                window.history.pushState({}, "", url);
            },
            error: function () {
                $("#main-content").html(
                    '<div class="text-red-500">Error loading content.</div>'
                );
            },
        });
    });
});
