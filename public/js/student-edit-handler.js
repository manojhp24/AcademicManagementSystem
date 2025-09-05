const StudentUpdateHandler = {
    
    init: function () {
        this.bindEvents();
        console.log("StudentUpdateHandler loaded");

    },

    bindEvents: function () {
        $("#student-edit-form").on("submit", this.handelSubmit.bind(this));
    },

    handelSubmit: function (e) {
        e.preventDefault();

        const form = $("#student-edit-form")[0];
        const formData = new FormData(form);
        const url = $("#student-edit-form").data("url");

        $.ajax({
            url: url,
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                StudentUpdateHandler.showToast("Student Data Updated successfully!", true);
                window.scrollTo({ top: 0, behavior: "smooth" });
                setTimeout(function () {
                    window.location.href = '/students/view'; 
                }, 1000); 
            },
            error: function () {
                StudentUpdateHandler.showToast("Update failed!", false);
            }
        });
    },

    showToast: function (message = "Success", isSuccess = true) {
        // Create toast container if it doesn't exist
        if (!$("#toast-box").length) {
            $("body").append('<div id="toast-box" class="fixed top-5 right-5 z-50 flex flex-col gap-2"></div>');
        }

        const toast = $(`<div class="toast px-4 py-2 rounded shadow-lg flex items-center gap-2">
            <i class="fa-solid fa-circle-${isSuccess ? "check" : "xmark"}"></i>${message}
        </div>`).css("background-color", isSuccess ? "#fff" : "#e53e3e");

        $("#toast-box").append(toast);

        setTimeout(() => toast.fadeOut(300, function () { $(this).remove(); }), 3000);
    }
};

