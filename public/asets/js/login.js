$('#user').on('keyup', function() {
    let user = $('#user').val();

    if(user.length < 6){
        $('#msg-user').text('Username minimal 6 karakter');
    }
    else{
        $('#msg-user').text('');
    }
});

$('#pass').on('keyup', function(){
    let pass = $('#pass').val();

    if(pass.length < 6){
        $('#msg-pass').text('Password minimal 6 karakter');
    }
    else{
        $('#msg-pass').text('');
    }
});

$('#login').on('submit', function(e){
    e.preventDefault();
    let user = $('#user').val();
    let pass = $('#pass').val();

    if(user === 'energeek' && pass === 'En3rg33k'){
        $(location).attr('href','/dashboard');
    }
    else if(user === 'user1' && pass === 'qwerty123456'){
        $(location).attr('href','/dashboarduser');
    }
    else{
        swal("Login Gagal!", "Pastikan username atau password anda benar!", "error");
    }
});
