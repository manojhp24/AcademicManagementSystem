$(function(){
    const dropdowns = [
        {
            button: ".dashboard-button",
        },
        {
            button: ".student-button",
            target: "#students-dropdown",
        },
        {
            button: ".subjects-button",
            target: "#subjects-dropdown",
        },
        {
            button: ".class-button",
            target: "#class-dropdown",
        },
        {
            button: ".subject-button",
            target: "#subject-dropdown",
        },
    ];

    dropdowns.forEach((current)=>{
        $(current.button).click(function(){
           dropdowns.forEach((item)=>{
            if(item != current){
                $(item.target).slideUp();
            }
           })
            $(current.target).slideToggle();
        })
    })

    
})