
$(function() {
	if($('.mainContent').width() > 850){
        $('.formRegistro').css('margin-top', '30px');
        $('.rowRedes').css('margin-top', '20px');
        $('.rowTiendas').css('margin-top', '10px');
        $('.rowTiendas img').css('margin-left', '20px');
    }
    
    
    window.onresize = function(event) {
       if($('.mainContent').width() > 750){
            $('.formRegistro').css('margin-top', '30px');
            $('.rowRedes').css('margin-top', '20px');
            $('.rowTiendas').css('margin-top', '10px');
           $('.rowTiendas img').css('margin-left', '20px');
        }else{
            $('.formRegistro').css('margin-top', '0px');
            $('.rowRedes').css('margin-top', '5px');
            $('.rowTiendas').css('margin-top', '0px');
            $('.rowTiendas').css('margin-top', '0px');
            $('.rowTiendas img').css('margin-left', '0px');
        }
    };
    
    $('#btnSend').click(function(){ 
        var isReady = true;
        if ($('#txtName').val().trim().length == 0){
            isReady = false;
            $('#txtName').addClass('redBorder');
        }else{
            $('#txtName').removeClass('redBorder');
        }
        if ($('#txtAge').val().trim().length == 0){
            isReady = false;
            $('#txtAge').addClass('redBorder');
        }else{
            $('#txtAge').removeClass('redBorder');
        }
        if ($('#txtEmail').val().trim().length == 0){
            isReady = false;
            $('#txtEmail').addClass('redBorder');
        }else{
            $('#txtEmail').removeClass('redBorder');
        }
        if ($('#txtSmz').val().trim().length == 0){
            isReady = false;
            $('#txtSmz').addClass('redBorder');
        }else{
            $('#txtSmz').removeClass('redBorder');
        }
        
        if (isReady){
            $('#btnSend').hide();
            $.ajax({
                type: "POST",
                url: "registration/save",
                dataType:'json',
                data: {
                    name: $('#txtName').val().trim(),
                    age: $('#txtAge').val().trim(),
                    email: $('#txtEmail').val().trim(),
                    smz: $('#txtSmz').val().trim(),
                    sex: $('#txtSex').val()
                },
                success: function(data){
                    $('#msgThx').toggle();
                    setTimeout(function(){ $( "#msgThx" ).hide('slow'); $('#btnSend').show(); }, 3000);
                    
                    $('#txtName').val('');
                    $('#txtAge').val('');
                    $('#txtEmail').val('');
                    $('#txtSmz').val('');
                }
            });
        }
        
    });
});
