
function registerUser(){

postVars = {
	
	"firstname" : $("#firstname").val(),
	"secondname" : $("#secondname").val(),
	"email" : $("#email").val(),
	"username" : $("#username").val(),
	"pass" : $("#pass").val(),


}
$.post("user-register",postVars,function(data){
	if(data.id){
     window.location.href = "home";
	}

},"json");	
}