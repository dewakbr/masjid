var show=0
$('.formreg').hide()

function proses() {
    //var nama=$('[name="txemail"]').val()
    //-- Validasi Input Form
    var email=$('.txemail').val()
    var password=$('.txpass').val()
    if(email==''){
        alert('Email Belum Diisi')
        return false
    }
    if(password==''){
        alert('Password Belum Diisi')
        return false
    }

   //-- post data ke controller
   $.post(base_url+"login/proses",
    {
      email: $('.txemail').val(),
      password: $('.txpass').val()
    },
    function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
    },'json');
    
}

function register() {
    //var nama=$('[name="txemail"]').val()
    //-- Validasi Input Form
    var nama=$('.txnama').val()
    var username=$('.txemail').val()
    var pass=$('.txpass').val()
    var pass2=$('.txpass2').val()
    if(nama==''){
      alert('Nama Pengguna Belum Diisi')
      return false
    }
    if(username==''){
        alert('Email Belum Diisi')
        return false
    }
    if(pass==''){
        alert('Password Belum Diisi')
        return false
    }
    if(pass!=pass2){
      alert('Password tidak sama')
      return false
    }

   //-- post data ke controller
   $.post(base_url+"login/register",
    {
      nama: nama,
      username: username,
      pass: pass
    },
    function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
    },'json');
}

function showform(){
    $('.txinput').val('')
    if(show==0){
      show=1
      $('.formreg').show()
      $('.linkreg').html('Login')
      $('.btn-login').hide()
    }else {
      show=0
      $('.formreg').hide()
      $('.linkreg').html('Register')
      $('.btn-login').show()
    }

}