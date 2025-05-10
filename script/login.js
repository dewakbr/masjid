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