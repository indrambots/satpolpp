// const { result } = require("lodash");
$(document).ready(()=> {
    window.addEventListener('jQueryModal', ({detail}) => {
        let {idModal, method} = detail;
        $('#'+idModal).modal(method);
    });
    window.addEventListener('notify', ({detail}) => {
        notif(detail);
    });
    window.addEventListener('swal:confirmAlert', ({detail}) => {
        confirmationAlert(detail);
    });
    window.addEventListener('print:PDF', ({detail}) => {
        window.open(detail.url+'?' +$.param(detail.params ), '_blank');
    });
    const notif = ({title, text,type})=>{
        Swal.fire(title, text, type);
    }
    function confirmationAlert(params) {
        let { title , text, type } = params;
        Swal.fire({
            title            : title,
            text             : text,
            icon             : type,
            showCancelButton : true,
            confirmButtonText: "Ya",
            cancelButtonText : "Tidak",
        }).then((result)=>{
            let {id = null, method , cancel} = params;
            if (result.isConfirmed) {
                if(id !=null){
                    Livewire.emit(method,id);
                }
                else{
                    Livewire.emit(method);
                }
            } else {
                Swal.fire("Batal",cancel , "error");
            }
        });
    }

});

