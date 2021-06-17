  var html = document.querySelector('html');
  var radios = document.querySelectorAll('input');
  var theme = document.querySelector('#theme-link');

  // setThemeAutomatically();

  function setThemeAutomatically() {
    var current_theme = "{{get_theme()}}";
    html.removeAttribute("class");
    html.classList.add(current_theme);
    theme.href = "/assets/css/"+ current_theme +".css";
    
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
        theme.href = "/assets/css/"+ radio[i].value +".css";

        // window.localStorage.setItem('theme', radio[i].value);

        $.ajax({
          type: "GET",
          url: "{{route('admin.user-setting.set-theme')}}",
          data: {theme:radio[i].value},
          success: function(response){
              // console.log(response);
          }
          })
      }
    }
  }

  $(document).on('click', '.img-radio', function(e){
      e.preventDefault();
      var id = $(this).attr('id');
      $('input[name=theme][value='+ id +']').prop('checked', true);
      $('.card.img-radio').removeClass('active');
      $(this).addClass('active');
      setThemeManually();
  })
