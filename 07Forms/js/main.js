(function() {

var myForm = $('#contactForm');

myForm.submit(function(e){
    $.post("sendMail.php", myForm.serialize(), function(data){
        console.log(data);
        if (data == 'Sucess') {
            $('#formDiv').hide('fast', function(){
                $('.thanks').show('slow');
            });
        };
    });
    return false;
})

})();