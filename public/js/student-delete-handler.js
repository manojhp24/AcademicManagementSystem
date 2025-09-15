const StudentDeleteHandler = {
    init: function () {
        if (this.eventsBound) return; // ✅ prevent double init
        this.bindEvents();
        this.eventsBound = true;
        console.log("StudentDeleteHandler loaded");
    },

    bindEvents: function () {
        const self = this; // ✅ preserve context

        // Remove old bindings before adding new ones
        $(document).off("click", ".delete-link")
            .off("click", "#closeModal, #cancelBtn")
            .off("click", "#confirmDeleteBtn");

        // Delete link click
        $(document).on("click", ".delete-link", function (e) {
            e.preventDefault();
            self.currentUrl = $(this).data("url");
            self.row = $(this).closest("tr"); // row to remove after delete
            self.openModal();
        });

        // Cancel modal
        $(document).on("click", "#closeModal, #cancelBtn", function () {
            self.closeModalFunc();
        });

        // Confirm delete
        $(document).on("click", "#confirmDeleteBtn", function () {
            self.deleteStudent();
        });
    },

    openModal: function () {
        $("#deleteModal").removeClass("hidden fade-out").addClass("fade-in");
    },

    closeModalFunc: function () {
        $("#deleteModal").removeClass("fade-in").addClass("fade-out");
        setTimeout(() => $("#deleteModal").addClass("hidden").removeClass("fade-out"), 200);
    },

    deleteStudent: function () {
        if (!this.currentUrl) return;

        $.ajax({
            url: this.currentUrl,
            type: "DELETE",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (response) => {
                this.showToast("Student deleted successfully!", true);
                this.closeModalFunc();

                if (this.row) this.row.remove();
            },
            error: (xhr, status, error) => {
                this.showToast("Delete failed!", false);
                console.error("AJAX Delete Error:", status, error);
                console.error("Response:", xhr.responseText);
            }
        });
    },

    showToast: function (message = "Success", isSuccess = true) {
        if (!$("#toast-box").length) {
            $("body").append('<div id="toast-box" class="fixed top-5 right-5 z-50 flex flex-col gap-2"></div>');
        }

        // optional: clear old toast to avoid stacking
        $("#toast-box").empty();

        const toast = $(`<div class="toast px-4 py-2 rounded shadow-lg flex items-center gap-2">
            <i class="fa-solid fa-circle-${isSuccess ? "check" : "xmark"}"></i>${message}
        </div>`).css("background-color", isSuccess ? "#fff" : "#e53e3e");

        $("#toast-box").append(toast);

        setTimeout(() => toast.fadeOut(500, function () { $(this).remove(); }), 5000);
    }
};

// ✅ Initialize once on page load
$(document).ready(function () {
    StudentDeleteHandler.init();
});
