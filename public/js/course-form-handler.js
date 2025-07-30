const CourseFormHandler = {
    init: function () {
        this.bindEvents();
    },

    bindEvents: function () {
        $("#course-form").on("submit", this.handleSubmit.bind(this));
        $('#lecture-credits,#practical-credits').on('input',function(){
            const lecture = parseInt($("#lecture-credits").val()) || 0;
            const practical = parseInt($("#practical-credits").val() || 0);
            $('#total-credits').val(lecture+practical);
        })

        $("#internal-marks,#external-marks").on('input',function(){
            const internal = parseInt($("#internal-marks").val()) || 0;
            const external = parseInt($('#external-marks').val()) || 0;
            $("#total-marks").val(internal + external);
        })

        $('#structure-code-dropdown').on('change',this.toggleElective.bind(this));
    },

    toggleElective : function(){
        const value = $("#structure-code-dropdown").val();
        const electiveGroup = $('#elective-group');

        if(value == "EC"){
            electiveGroup.removeClass("hidden");
        }else{
            electiveGroup.addClass("hidden");
        }
    },

    handleSubmit: function (e) {
        e.preventDefault();

        const form = $("#course-form")[0];
        const formData = new FormData(form);
        const url = $("#course-form").data("url");
        console.log("Submitting to:", url);

        $.ajax({
            url: url,
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                CourseFormHandler.showToast("Course Added Successfully",true);
                CourseFormHandler.resetForm();

            },
        });
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

    resetForm : function(){
        const courseForm = $("#course-form");
        courseForm.reset();
    }
};
