var colocou = 0;

$(".submit").click(function(){
	let funcao = $(this).data("f");
	if(funcao == "logine"){
		logine();
	}
	else if(funcao == "logins"){
		loginsenha();
	}
	else if(funcao == "perdi"){
		perdi();
	}
	return false;
});

function logine(){
	var email = $(".email").val();
	setTimeout( function() {
	$("#emaild").html(email);
	$.post("/v1/api/login", {email: email},
    function(validar){
    	if(validar == '{ email : "true"}'){
    	console.log(email);
    	$(".nao23").css("transform","scale(1)");
    	$(".nao").css("transform","scale(0)");
    	colocou = 1;
    	$(".email").css("border", "1px solid #ffffff2e");
		$("#email").css("transform", "translateX(-200%)");
		$("#senha").css("transform", "scale(1)");
    	}
    	else if(validar == '{ email : "blank"}'){
    	blank_email();
    	}
    }
          , "html");
	loading();
	},500);
}

function perdi(){
	var emailperd = $(".emailperd").val();
	setTimeout( function() {
	if(emailperd == ""){
		$(".emailperd").css("border", "1px solid red");
		$(".emailperd").css("animation", "uploadModalShake-1PBhUb .82s cubic-bezier(.36,.07,.19,.97) both");
		setTimeout( function() {
		$(".emailperd").css("animation", "none");
		},200);
	}
	else{
	loading();
	$(".emailperd").css("border", "1px solid #ffffff2e");
	}
	},500);
}

function loginsenha(){
	var senha = $(".logins").val();
	setTimeout( function() {
	if(senha == ""){
		$(".logins").css("border", "1px solid red");
		$(".logins").css("animation", "uploadModalShake-1PBhUb .82s cubic-bezier(.36,.07,.19,.97) both");
		setTimeout( function() {
		$(".logins").css("animation", "none");
		},200);
	}
	else{
	loading();
	$(".logins").css("border", "1px solid #ffffff2e");
	}
	},500);
}

function loading(){
	var soma = 5;
	var atual = 0;
	var posso = 1;
	setInterval( function() {
	if(posso == 1){
	if(atual <= 97){
	var progress = atual + soma + "%";
	atual += 5; 
		$(".login .progress .sub").css("width", progress);
	}
	else if(atual >= 97){
		atual = 0;
		posso = 0;
		var progress = atual + "%";
		$(".login .progress .sub").css("width", progress);
	}
	}
	},50);
}

function clear(){
	$(".login .progress .sub").css("width", "0%");
}

function blank_email(){
		$(".email").css("border", "1px solid red");
		$(".email").css("animation", "uploadModalShake-1PBhUb .82s cubic-bezier(.36,.07,.19,.97) both");
		setTimeout( function() {
		$(".email").css("animation", "none");
		},200);
}

function forgot(){
	if(colocou == 0){
		console.log("Email blank");
	}
	else{
		var emailpa = $(".email").val();
		$(".emailperd").val(emailpa);
	}
	$("#senha").css("transform", "scale(0)");
	$("#senha").css("transform", "scale(0)");
	$("#welcome").css("transform", "scale(0)");
	$("#email").css("transform", "translateX(-200%)");
	$("#forgot").css("transform", "scale(1)");
	$(".forget").css("transform", "scale(0)");
	$(".entrar").css("transform", "scale(1)");
}

function lembrei2(){
	$("#senha").css("transform", "scale(1)");
	$("#senha").css("transform", "scale(1)");
	$("#forgot").css("transform", "scale(0)");
	$(".entrar").css("transform", "scale(0)");
	$(".forget").css("transform", "scale(1)");
}

function lembrei3(){
	$("#email").css("transform", "scale(1)");
	$("#forgot").css("transform", "scale(0)");
	$(".entrar").css("transform", "scale(0)");
	$(".forget").css("transform", "scale(1)");
}

function lembrei(){
	if(colocou == 0){
	$("#senha").css("transform", "scale(0)");
	$("#senha").css("transform", "scale(0)");
	$("#email").css("transform", "translateX(0%)");
	$("#forgot").css("transform", "scale(0)");
	$(".entrar").css("transform", "scale(0)");
	$(".forget").css("transform", "scale(1)");
	}
	else{
	$("#senha").css("transform", "scale(1)");
	$("#forgot").css("transform", "scale(0)");
	$(".entrar").css("transform", "scale(0)");
	$(".forget").css("transform", "scale(1)");
	}
}

function registrar(){
	$("#senha").css("transform", "scale(0)");
	$("#senha").css("transform", "scale(0)");
	$("#email").css("transform", "translateX(0%)");
	$("#forgot").css("transform", "scale(0)");
	$(".entrar").css("transform", "scale(1)");
}

function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}

function nome(){
	var email = "";
	$.post("/v1/api/@logout", {email: email},
    function(send){
    	console.log(email);
    }
          , "html");
	window.onload = timedRefresh(200);
}