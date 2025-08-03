const MarksEntryFormHandler ={
    init : function(){
        this.bindEvents();
        console.log("ME Init")

    },

    bindEvents : function(){
        const btn = $('#add_subject');
        const delete_button = $('#delete_subject')
        btn.on('click', this.addSubjectRow.bind(this));
        delete_button.on('click',this.deleteLastRow.bind(this));

    },

    addSubjectRow : function(e){
        e.preventDefault();

        const tbody = $('#marks-entry-tbody');
        const newrow = tbody.find('tr:first').clone();

        newrow.find('input,select').val('');
        tbody.append(newrow);
    },

    deleteLastRow : function(){
        const rows = $('#marks-entry-tbody tr');
        if(rows.length > 1){
            rows.last().remove();
        }
    }


}