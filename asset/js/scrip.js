$( document ).ready(function() {
    $('#search').on('click', function (){
        // $('#input-search').css("display", "block");
        $('#input-search').toggle('linear');

    })
    $('#btn-login').on('click', function (){
        // $('#input-search').css("display", "block");
        $('#form-reg').css("display", "none")
        $('#login').show();

    })
    $('#reg').on('click', function (){
        // $('#input-search').css("display", "block");
        $('#form-reg').css("display", "block");
        $('#login').hide();

    })
    $('#user').on('click', function (){
        $('#box_user').toggle();
        console.log('CLick');

    })
});