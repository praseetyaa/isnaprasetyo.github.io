var html = document.querySelector('html');
var radios = document.querySelectorAll('input');
var theme = document.querySelector('#theme-link');

setThemeAutomatically();

function setThemeAutomatically() {
  var current_theme;
  if (window.localStorage.getItem("theme") === null) { 
    window.localStorage.setItem("theme", 'light')
    current_theme = 'light';
  } else {
    current_theme = window.localStorage.getItem('theme');
  }
  html.removeAttribute("class");
  html.classList.add(current_theme);
  theme.href = "assets/cek/"+ current_theme +".css";
  
}

radios.forEach(function(radio) {
  radio.addEventListener('change', setThemeManually);
});

function setThemeManually() {
  var radio = document.getElementsByName("theme");
  for(var i = 0; i < radio.length; i++){
    if (radio[i].checked) {
      // console.log(radio[i].value)
      html.removeAttribute("class");
      html.classList.add(radio[i].value);
      theme.href = "assets/cek/"+ radio[i].value +".css";

      window.localStorage.setItem('theme', radio[i].value);
    }
  }
}

