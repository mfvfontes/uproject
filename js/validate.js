function validateForm_about_us() {
    var name = document.getElementById("name").value;
   	var institution = document.getElementById("institution").value;
	var text = document.getElementById("text").value;
	var letter = document.getElementById("letter").value;
	var curriculum = document.getElementById("curriculum").value;
      if (name == null || name == "") {
          alert("O nome é inválido");
          return false;
      }

	 if (institution == null || institution == "") {
          alert("O nome da instituição é inválido");
          return false;
      }

	 if (text == null || text == "") {
          alert("O texto introduzido é inválido");
          return false;
      }

	if (letter == null || letter == "") {
          alert("Selecione uma carta de motivação válida");
          return false;
      }

	if (curriculum == null || curriculum == "") {
          alert("Selecione um currículo válido");
          return false;
      }

	alert("Obrigado pela sua mensagem. A nossa equipa irá contactá-lo brevemente.")
	return true;
	
}

function validateForm_contact() {
	var name = document.getElementById("name").value;
   	var email = document.getElementById("email").value;
	var institution = document.getElementById("institution").value;
	var subject = document.getElementById("subject").value;
   	var text = document.getElementById("message").value;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

      if (name == null || name == "") {
          alert("O nome é inválido");
          return false;
      }
		
		if (!filter.test(email) || email == null || email == "" ) {
		    alert('Endereço de email inválido');
		    return false;
		}


	 if (institution == null || institution == "") {
          alert("O nome da instituição é inválido");
          return false;
      }

	 if (text == null || text == "") {
          alert("O texto introduzido é inválido");
          return false;
      }

	if (letter == null || letter == "") {
          alert("Selecione uma carta de motivação válida");
          return false;
      }

	if (curriculum == null || curriculum == "") {
          alert("Selecione um currículo válido");
          return false;
      }

	alert("Obrigado pela sua mensagem. A nossa equipa irá contactá-lo brevemente.")
	return true;

}

function validateForm_partner() {
	var name = document.getElementById("name").value;
	var organization = document.getElementById("organization").value;
   	var text = document.getElementById("text").value;

      if (name == null || name == "") {
          alert("O nome é inválido");
          return false;
      }
		
	 if (organization == null || organization == "") {
          alert("O nome da organização é inválido");
          return false;
      }

	 if (text == null || text == "") {
          alert("O texto introduzido é inválido");
          return false;
      }
	alert("Obrigado pela sua mensagem. A nossa equipa irá contactá-lo brevemente.")
	return true;

}

function validateForm_login() {
	var username = document.getElementById("username").value;
	var password = document.getELementById("password").value;
	
	if (username == null || username == "") {
          alert("Introduza o username");
          return false;
      }
		
	 if (password == null || password == "" || password.length<6) {
          alert("Password inválida(Introduza pelo menos 6 caracteres)");
          return false;
      }
	return true;
}

function validateForm_register() {
	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
   	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var email = document.getElementById("email").value;
   	var phone = document.getElementById("phone").value;
	var worklinks = document.getElementById("worklinks").value;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var filter2 = /^(9[1236]\d{7}|2\d{8})$/;
	
	if (fname == null || fname == "") {
           alert("O nome é inválido");
          return false;
      }
	if (lname == null || lname == "") {
           alert("O apelido é inválido");
          return false;
      }
	if (username == null || username == "") {
           alert("O username é inválido");
          return false;
      }
	if (password == null || password == "" || password.lenght<6) {
           alert("A password é inválida");
          return false;
      }
	if (!filter.test(email) || email == null || email == "") {
           alert("O email é inválido");
          return false;
      }
	if (phone== null || phone == "" || !filter2.test(phone)) {
           alert("O telemóvel é inválido");
          return false;
      }
	
	if (worklinks == null || worklinks == "") {
          alert("Os worklinks são inválidos");
          return false;
      }
	alert("Dados corretos, utilizador a ser registado...")	
	return true;
	
}