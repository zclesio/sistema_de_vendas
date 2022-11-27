
// Funcao do Login do usuario
function login(){

    // return false;
    $.ajax({
        type: "POST",
        data:$('#loginForm').serialize(),
        url:"controller/login.php",
        success: function(response){
             
            response = response.trim();
            if(response==1){
                // window.location.href="views/home.php";
                alert('funcionando')
            }else{
                alert(":("+"Erro ao fazer login!")
            }
        }

    });
   // alert('Teste! Funcionando com suceso!');
    return false;
}