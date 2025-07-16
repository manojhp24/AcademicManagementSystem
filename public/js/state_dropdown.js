const DropdownLoader = {
    init : function(){
        this.loadStateDropdown();
    },

    loadStateDropdown : function(){
        const states = [
            "Andhra Pradesh",
            "Arunachal Pradesh",
            "Assam",
            "Bihar",
            "Chhattisgarh",
            "Goa",
            "Gujarat",
            "Haryana",
            "Himachal Pradesh",
            "Jharkhand",
            "Karnataka",
            "Kerala",
            "Madhya Pradesh",
            "Maharashtra",
            "Manipur",
            "Meghalaya",
            "Mizoram",
            "Nagaland",
            "Odisha",
            "Punjab",
            "Rajasthan",
            "Sikkim",
            "Tamil Nadu",
            "Telangana",
            "Tripura",
            "Uttar Pradesh",
            "Uttarakhand",
            "West Bengal",
        ];

        const $dropdown = $("#stateDropdown");
        $dropdown.empty().append('<option value="">Select State</option>');

        $.each(states, function (index, state) {
            $dropdown.append(
                $("<option>", {
                    value: state,
                    text: state,
                })
            );
        });

    }
}









