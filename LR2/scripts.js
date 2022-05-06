// Код для 2-1

function changeColor() {
	var x = Math.floor(Math.random() * 256);
	var y = Math.floor(Math.random() * 256);
	var z = Math.floor(Math.random() * 256);

	$("body").css("background", "rgb(" + x + "," + y + "," + z + ")");
}

// Код для 2-2

$('#mainForm').submit(function (e) {
	// Если есть ошибка, то выводим ее сообщение и закрашиваем рамку ввода
	if ($('#username').val() == "") {
		alert("Укажите имя!");
		$('#username').attr('class', 'error');
		return false;
	}
	if ($('#password').val().length < 4) {
		alert("Пароль должен быть не менее 4 символов!");
		$('#password').attr('class', 'error');
		return false;
	}
	if ($('#password2').val() != $('#password').val()) {
		alert("Пароли не совпадают!");
		$('#password2').attr('class', 'error');
		return false;
	}
	if ($('#email').val().indexOf("@") == -1) {
		alert("Укажите корректный email!");
		$('#email').attr('class', 'error');
		return false;
	}
	if ($('#content').val().length < 10) {
		alert("Сообщение должно быть не менее 10 символов!");
		$('#content').attr('class', 'error');
		return false;
	}

	return true;
});