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
            contentType: false,
            processData: false,
            success: function (response) {
                 StudentFormHandler.showToast(
                     "Student added successfully!",
                     true
                 );
                StudentFormHandler.resetForm();
            },
        });
    },

    showSuccess: function () {
        $("#success-message").html('<div id="toast-box"></div>');
    },

    resetForm: function () {
        const form = $("#student-form")[0];
        form.reset();
        $('#student-form input[type="checkbox"]').each(function(){
            $(this).prop("checked",false).trigger("change")
        })
    },

    showToast: function (message = "Success", isSuccess = true) {
        const toast = document.createElement("div");
        toast.className = "toast";
        toast.style.backgroundColor = isSuccess ? "#fff" : "#e53e3e"; 
        toast.innerHTML = `<i class="fa-solid fa-circle-${
            isSuccess ? "check" : "xmark"
        }"></i> ${message}`;

        const container = document.getElementById("toast-box");
        container.appendChild(toast);

        setTimeout(() => {
            toast.remove();
        }, 4000);
    },
};
