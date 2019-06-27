//--------------- Verificação de email e senha ---------------------
//funcao para verificar se é um email em um formato valido e senha nao nula
function verificarLogin(){  

    email= document.getElementById("inputemail").value;
    passwd= document.getElementById("inputsenha").value;

     console.log(email+" - "+passwd);

     var i=true;
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   

    if (regex.test(email) == false){

        console.log("email: "+regex.test(email));
        alert("Digite um email valido");
        i=false;

    }

    verificarBD(email, passwd);
}

function verificarBD(email, passwd){

    var responsavel ="admin@gmail.com"; //email de responsavel de teste

    if (email == responsavel){
        document.location.href = "./listar_inscricao.html"; 
    }

}
