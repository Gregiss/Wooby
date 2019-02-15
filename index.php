<!DOCTYPE html>
<html>
<head>
	<title>Wooby</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<script type="text/javascript" src="/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/assets/js/routes.js"></script>
</head>

<body data-local="login">
	<div class="background">
	</div>

	<div id="view">

	</div>

	<div id="root">
		<div class="Aligner">
		<div class="login tab">
		<div class="progress"><div class="sub"></div></div>
		<?php if(isset($_COOKIE['email'])){?>
			<div style="z-index: 100000; position: absolute; transform: scale(0);" id="email" class="slider">
			<h1 style="z-index: 10000; position: relative;">Seja bem vindo novamente!!</h1>
			<img class="okay" style="z-index: 100000;" src="/assets/img/46b24114f7276738329be3ae84e22da4.svg"/>
			<form>
			<input class="email" type="text" name="" placeholder="E-mail">
			<button class="submit" data-f="logine"><img style="position: relative; margin-top: 0;" src="/assets/img/4ea670d41f15a74667579795acecd7a4.svg"/></button>
			</form>
		</div>
		<div style="z-index: 100000; position: absolute; transform: scale(1);" id="senha" class="slider">
			<h1>Insira sua senha</h1>
			<img class="okay" style="z-index: 100000;" src="/assets/img/07ad21890e394c2d8f6abb3a9792e92a.svg"/>
			<form>
			<span style="position: relative; top: 10px;"><?php echo $_COOKIE['email'];?></span>
			<input class="logins" type="password" name="" placeholder="Senha">
			<button class="submit" data-f="logins"><img style="position: relative; margin-top: 0;" src="/assets/img/4ea670d41f15a74667579795acecd7a4.svg"/></button>
			</form>
		</div>
		<div style="z-index: 100000; position: absolute; transform: scale(0);" id="forgot" class="slider">
			<h1>Esqueceu sua senha?</h1>
			<img class="okay" style="z-index: 100000;" src="/assets/img/0f4d1ff76624bb45a3fee4189279ee92.svg"/>
			<form>
			<input class="emailperd" type="text" name="" placeholder="Email" value="<?php echo $_COOKIE['email'];?>">
			<button class="submit" data-f="perdi"><img style="position: relative; margin-top: 0;" src="/assets/img/4ea670d41f15a74667579795acecd7a4.svg"/></button>
			</form>
		<?php if(isset($_GET['recovery'])){ ?>
			<div style="z-index: 100000; position: absolute; transform: scale(0);" id="senha" class="slider">
			<h1>Insira sua senha</h1>
			<img class="okay" style="z-index: 100000;" src="/assets/img/07ad21890e394c2d8f6abb3a9792e92a.svg"/>
			<form>
			<span style="position: relative; top: 10px;"><?php echo $_COOKIE['email'];?></span>
			<input class="logins" type="password" name="" placeholder="Senha">
			<button class="submit" data-f="logins"><img style="position: relative; margin-top: 0;" src="/assets/img/4ea670d41f15a74667579795acecd7a4.svg"/></button>
			</form>
		</div>
		<div style="z-index: 100000; position: absolute; transform: scale(0);" id="forgot" class="slider">
			<h1>Esqueceu sua senha?</h1>
			<img class="okay" style="z-index: 100000;" src="/assets/img/0f4d1ff76624bb45a3fee4189279ee92.svg"/>
			<form>
			<input class="emailperd" type="text" name="" placeholder="Email" value="<?php echo $_COOKIE['email'];?>">
			<button class="submit" data-f="perdi"><img style="position: relative; margin-top: 0;" src="/assets/img/4ea670d41f15a74667579795acecd7a4.svg"/></button>
			</form>
		</div>
		<?php } ?>

		<?php } else{ ?>
		<?php if(isset($_GET['login'])){?>
		<div style="z-index: 100000; position: absolute; transform: scale(1);" id="email" class="slider">
			<h1 style="z-index: 10000; position: relative;">Seja bem vindo novamente!!</h1>
			<img class="okay" style="z-index: 100000;" src="/assets/img/46b24114f7276738329be3ae84e22da4.svg"/>
			<form>
			<input class="email" type="text" name="" placeholder="E-mail">
			<button class="submit" data-f="logine"><img style="position: relative; margin-top: 0;" src="/assets/img/4ea670d41f15a74667579795acecd7a4.svg"/></button>
			</form>
		</div>
		<div style="z-index: 100000; position: absolute; transform: scale(0);" id="senha" class="slider">
			<h1>Insira sua senha</h1>
			<img class="okay" style="z-index: 100000;" src="/assets/img/07ad21890e394c2d8f6abb3a9792e92a.svg"/>
			<form>
			<span id="emaild" style="position: relative; top: 10px;"></span>
			<input class="logins" type="password" name="" placeholder="Senha">
			<button class="submit" data-f="logins"><img style="position: relative; margin-top: 0;" src="/assets/img/4ea670d41f15a74667579795acecd7a4.svg"/></button>
			</form>
		</div>
		<div style="z-index: 100000; position: absolute; transform: scale(0);" id="forgot" class="slider">
			<h1>Esqueceu sua senha?</h1>
			<img class="okay" style="z-index: 100000;" src="/assets/img/0f4d1ff76624bb45a3fee4189279ee92.svg"/>
			<form>
			<input class="emailperd" type="text" name="" placeholder="Email">
			<button class="submit" data-f="perdi"><img style="position: relative; margin-top: 0;" src="/assets/img/4ea670d41f15a74667579795acecd7a4.svg"/></button>
			</form>
		</div>
		<?php } else if(isset($_GET['recovery'])){ ?>
		<div style="z-index: 100000; position: absolute; transform: scale(1);" id="forgot" class="slider">
			<h1>Esqueceu sua senha?</h1>
			<img class="okay" style="z-index: 100000;" src="/assets/img/0f4d1ff76624bb45a3fee4189279ee92.svg"/>
			<form>
			<input class="emailperd" type="text" name="" placeholder="Email">
			<button class="submit" data-f="perdi"><img style="position: relative; margin-top: 0;" src="/assets/img/4ea670d41f15a74667579795acecd7a4.svg"/></button>
			</form>
		</div>
		<div style="z-index: 100000; position: absolute; transform: scale(0);" id="email" class="slider">
			<h1 style="z-index: 10000; position: relative;">Seja bem vindo novamente!!</h1>
			<img class="okay" style="z-index: 100000;" src="/assets/img/46b24114f7276738329be3ae84e22da4.svg"/>
			<form>
			<input class="email" type="text" name="" placeholder="E-mail">
			<button class="submit" data-f="logine"><img style="position: relative; margin-top: 0;" src="/assets/img/4ea670d41f15a74667579795acecd7a4.svg"/></button>
			</form>
		</div>
		<div style="z-index: 100000; position: absolute; transform: scale(0);" id="senha" class="slider">
			<h1>Insira sua senha</h1>
			<img class="okay" style="z-index: 100000;" src="/assets/img/07ad21890e394c2d8f6abb3a9792e92a.svg"/>
			<form>
			<span id="emaild" style="position: relative; top: 10px;"></span>
			<input class="logins" type="password" name="" placeholder="Senha">
			<button class="submit" data-f="logins"><img style="position: relative; margin-top: 0;" src="/assets/img/4ea670d41f15a74667579795acecd7a4.svg"/></button>
			</form>
		</div>
		<?php } else{?>

		<div style="z-index: 100000; position: absolute; transform: scale(0);" id="email" class="slider">
			<h1 style="z-index: 10000; position: relative;">Seja bem vindo novamente!!</h1>
			<img class="okay" style="z-index: 100000;" src="/assets/img/46b24114f7276738329be3ae84e22da4.svg"/>
			<form>
			<input class="email" type="text" name="" placeholder="E-mail">
			<button class="submit" data-f="logine"><img style="position: relative; margin-top: 0;" src="/assets/img/4ea670d41f15a74667579795acecd7a4.svg"/></button>
			</form>
		</div>

		<div style="z-index: 100000; position: absolute; transform: scale(1); margin-top: 10px;" id="welcome" class="slider">
			<h1>Seja bem vindo ao Wooby</h1>
			<img class="okay" style="z-index: 100000; width: 180px;" src="/assets/img/c290235278e128e94ae5ac37e58c5cbb.svg"/>
			<p style="margin-top: 35px; font-size: 18px;">Aqui você pode fazer novas amizades!!</p>
			<a href="/login"><button style="width: calc(90% - 30px); margin-top: 30px;" class="submit2">Fazer Login</button></a>
		</div>

		<div style="z-index: 100000; position: absolute; transform: scale(0);" id="forgot" class="slider">
			<h1>Esqueceu sua senha?</h1>
			<img class="okay" style="z-index: 100000;" src="/assets/img/0f4d1ff76624bb45a3fee4189279ee92.svg"/>
			<form>
			<input class="emailperd" type="text" name="" placeholder="Email">
			<button class="submit" data-f="perdi"><img style="position: relative; margin-top: 0;" src="/assets/img/4ea670d41f15a74667579795acecd7a4.svg"/></button>
			</form>
		</div>

		<?php } } ?>
		<a onclick="nome();" class="nao23" style="color: #fff !important;position: absolute; bottom: 80px; float: right; right: 10px; color: #b9bbbe; z-index: 10000; cursor: pointer; transform: scale(0);">NÃO SOU EU</a>
		<?php if(isset($_GET['recovery'])){ ?>
		<a route="/login" onclick="lembrei3();" class="entrar" style="color: #fff !important;position: absolute; bottom: 80px; float: left; left: 10px; color: #b9bbbe; z-index: 10000; cursor: pointer; transform: scale(1); ">Lembrei minha senha</a>
		<a route="/recovery" onclick="forgot();" class="forget" style="color: #fff !important;position: absolute; bottom: 80px; float: left; left: 10px; color: #b9bbbe; z-index: 10000; cursor: pointer; transform: scale(0);">Esqueci minha senha</a>
		<?php } else{ ?>
		<a route="/recovery" onclick="forgot();" class="forget" style="color: #fff !important;position: absolute; bottom: 80px; float: left; left: 10px; color: #b9bbbe; z-index: 10000; cursor: pointer;">Esqueci minha senha</a>
		<?php } ?>
		<?php if(isset($_COOKIE['email'])){?>
		<a route="/login" onclick="lembrei2();" class="entrar" style="color: #fff !important;position: absolute; bottom: 80px; float: left; left: 10px; color: #b9bbbe; z-index: 10000; cursor: pointer; transform: scale(0); ">Lembrei minha senha</a>
		<?php } else{ ?>
		<a route="/login" onclick="lembrei();" class="entrar" style="color: #fff !important;position: absolute; bottom: 80px; float: left; left: 10px; color: #b9bbbe; z-index: 10000; cursor: pointer; transform: scale(0); ">Lembrei minha senha</a>
		<?php } ?>
		<?php if(isset($_COOKIE['email'])){?>
			<a route="/" onclick="nome();" class="nao" style="color: #fff !important;position: absolute; bottom: 80px; float: right; right: 10px; color: #b9bbbe; z-index: 10000; cursor: pointer;">NÃO SOU EU</a>
		<?php } else{?>
		<a onclick="registrar();" class="nao" style="color: #fff !important;position: absolute; bottom: 80px; float: right; right: 10px; color: #b9bbbe; z-index: 10000; cursor: pointer;">Não tenho uma conta</a>
		<?php } ?>
		<div class="back_"></div>
		</div>
	</div>
</div>
</body>

<script type="text/javascript" src="/assets/js/home.js"></script>
<script type="text/javascript" src="/assets/js/mount.js"></script>

</html>