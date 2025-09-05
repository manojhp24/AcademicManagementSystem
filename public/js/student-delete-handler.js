const StudentDeleteHandler = {
    init: function () {
        this.bindEvents();
        console.log("StudentDeleteHandler loaded");
    },

    bindEvents: function () {
        $(document).on("click", ".delete-link", (e) => {
            e.preventDefault();
            this.currentUrl = $(e.currentTarget).data("url");
            this.row = $(e.currentTarget).closest("tr"); // row to remove after delete
            this.openModal();
        });

        $(document).on("click", "#closeModal, #cancelBtn", () => this.closeModalFunc());

        $(document).on("click", "#confirmDeleteBtn", () => this.deleteStudent());
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

        const toast = $(`<div class="toast px-4 py-2 rounded shadow-lg flex items-center gap-2">
            <i class="fa-solid fa-circle-${isSuccess ? "check" : "xmark"}"></i>${message}
        </div>`).css("background-color", isSuccess ? "#fff" : "#e53e3e");

        $("#toast-box").append(toast);

        setTimeout(() => toast.fadeOut(500, function () { $(this).remove(); }), 5000);
    }
};

