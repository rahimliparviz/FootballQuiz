$(document).ready(function() {
    $('.main-form').submit(function() {
        if (document.mainform.username.value == '' || document.mainform.phonenumber.value == '') {
            valid = false;
            return valid;
        }
        $.ajax({
            type: "POST",
            url: "index.php",
            data: $(this).serialize(),
            success: $(".description").html("Oyun tezliklə başlayacaq!")
        });
        return false;
    });
});