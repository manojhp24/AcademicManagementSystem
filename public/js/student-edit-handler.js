const StudentUpdateHandler = {
    init: function () {
        this.bindEvents();
    },

    bindEvents: function () {
        $("#student-edit-form").on("submit", this.handelSubmit.bind(this));
    },

    handelSubmit: function (e) {
        e.preventDefault();

        const form = $("#student-edit-form")[0];
        const formData = new FormData(form);
        const url = $("#student-edit-form").data("url");
        console.log(url);

        $.ajax({
            url: url,
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                StudentUpdateHandler.showToast(
                    "Student Updated successfully!",
                    true
                );
                window.scrollTo({ top: 0, behavior: "smooth" });
            },
        });
    },

    showSuccess: function () {
        $("#success-message").html('<div id="toast-box"></div>');
    },

   

    showToast: function (message = "Success", isSuccess = true) {
        const toast = document.createElement("div");
        toast.className = "toast";
        toast.style.backgroundColor = isSuccess ? "#fff" : "#e53e3e";
        toast.innerHTML = `<i class="fa-solid fa-circle-${isSuccess ? "check" : "xmark"
            }"></i> ${message}`;

        const container = document.getElementById("toast-box");
        container.appendChild(toast);

        setTimeout(() => {
            toast.remove();
        }, 4000);
    },
};
