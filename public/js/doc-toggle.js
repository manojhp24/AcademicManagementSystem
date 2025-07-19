const CheckboxToggleHandler = {
    init: function () {
        this.bindEvents();
    },

    bindEvents: function () {
        $(document)
            .off("change", ".doc-toggle")
            .on("change", ".doc-toggle", this.toggleInput);
    },

    toggleInput: function (e) {
        const checkbox = $(e.currentTarget);
        const targetId = checkbox.data("target");
        if (!targetId) return;
        $(targetId).toggleClass("hidden", !checkbox.is(":checked"));
    },
};

