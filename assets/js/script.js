const login = document.querySelector(".login");
const box = document.querySelector(".box");
const close = document.querySelector(".close");

login.addEventListener("click", function (e) {
	box.classList.toggle("hidden");
	e.preventDefault();
});

close.addEventListener("click", function () {
	box.classList.toggle("hidden");
});

// LOGIN
const id = document.querySelector(".id");
const pass = document.querySelector(".password");
const log = document.querySelector(".log");
const p = document.querySelector(".para");

log.addEventListener("click", function (e) {
	if (id.value == "user" && pass.value == "user") {
		window.location.href = "http://localhost/uaspweb/jasa/crud";
	} 
	else {
		p.classList.remove("hidden");
		setTimeout(function () {
			p.classList.add("hidden");
		}, 1000);

	}
});
