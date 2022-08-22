function sendEmail() {
	Email.send({
	Host: "smtp.gmail.com",
	Username : "smat517connect@gmail.com",
	Password : "smart@517",
	To : 'aarifhasan938@gmail.com',
	From : "smart517connect@gmail.com",
	Subject : "<email subject>",
	Body : "<email body>",
	}).then(
		message => alert("mail sent successfully")
	);
}