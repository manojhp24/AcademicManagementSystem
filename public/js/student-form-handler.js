const StudentFormHandler = {
    init: function () {
        this.bindEvents();
    },

    bindEvents: function () {
        $("#student-form").on("submit", this.handelSubmit.bind(this));
    },

    handelSubmit: function (e) {
        e.preventDefault();

        const form = $("#student-form")[0];
        const formData = new FormData(form);
        const url = $("#student-form").data("url");
        console.log(url);

        $.ajax({
            url: url,
            method: "POST",
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            contentType: false,
            processData: false,
            success: function (response) {
                 StudentFormHandler.showToast(
                     "Student added successfully!",
                     true
                 );
                StudentFormHandler.resetForm();
                window.scrollTo({ top: 0, behavior: "smooth" });
            },
        });
    },

    showSuccess: function () {
        $("#success-message").html('<div id="toast-box"></div>');
    },

    resetForm: function () {
        const form = $("#student-form")[0];
        form.reset();
        $('#student-form input[type="checkbox"]').prop("checked", false).trigger("change");
        $('#student-form input[type="text"]').val(''); 
    },


    showToast: function (message = "Success", isSuccess = true) {
        if (!$("#toast-box").length) {
            $("body").append('<div id="toast-box" class="fixed top-5 right-5 z-50 flex flex-col gap-2"></div>');
        }

        const toast = $(`<div class="toast px-4 py-2 rounded shadow-lg flex items-center gap-2">
            <i class="fa-solid fa-circle-${isSuccess ? "check" : "xmark"}"></i>${message}
        </div>`).css("background-color", isSuccess ? "#fff" : "#e53e3e");

        $("#toast-box").append(toast);

        setTimeout(() => toast.fadeOut(500, function () { $(this).remove(); }), 5000);
    }
};
