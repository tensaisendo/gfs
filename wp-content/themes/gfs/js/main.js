/** main js file */

$(function(){
    /* Caption pour images */
    $(".capty").capty();

    function InputVide(input){
        $(input).click(function(){
            $(this).attr("value", "");
        })
    }

    InputVide("input.newsletter-firstname");
    InputVide("input.newsletter-email");
});
