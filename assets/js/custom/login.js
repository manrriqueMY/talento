function ToggleLoginModal(e) {
    if (!e) {
        $("#modal-inner-register").css("display", "block");
        $("#modal-inner-login").css("display", "none");
    } else {
        $("#modal-inner-register").css("display", "none");
        $("#modal-inner-login").css("display", "block");
    }
}
(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
    
})();