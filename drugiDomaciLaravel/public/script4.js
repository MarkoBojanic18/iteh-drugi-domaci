

window.addEventListener("DOMContentLoaded", function() {

    //Uzimam elemente iz forme i cuvam u promenljivu
    
    var form = document.getElementById("message");
    var status = document.getElementById("status");

    // Success i Error funkcije kada se pusti forma
    
    function success() {
      form.reset();
      status.classList.add('success');
      status.innerHTML = "Thanks!";
    }

    function error() {
      status.classList.add('error');
      status.innerHTML = "Enter a vaild e-mail adress.";
    }

    // refresh form kada se klikne submit
    function submitForm() {
        document.contact-form.submit();
        document.contact-form.reset();
        }

    // Ovo je main Evenet Listener koji rukovodi formom kada je kliknut Submit

    form.addEventListener("submit", function(ev) {
      ev.preventDefault();
      var data = new FormData(form);
      ajax(form.method, form.action, data, success, error);
    });
  });
  
  // helper function for sending an AJAX request

  function ajax(method, url, data, success, error) {
    var xhr = new XMLHttpRequest();
    xhr.open(method, url);
    xhr.setRequestHeader("Accept", "application/json");
    xhr.onreadystatechange = function() {
      if (xhr.readyState !== XMLHttpRequest.DONE) return;
      if (xhr.status === 200) {
        success(xhr.response, xhr.responseType);
      } else {
        error(xhr.status, xhr.response, xhr.responseType);
      }
    };
    xhr.send(data);
  }