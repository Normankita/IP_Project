//Select the option and navigate to the selected page
$(document).ready(function() {
  $('#selectPages').change(function() {
    var selectedOption = $(this).val();
    if (selectedOption !== "") {
      window.location.href = selectedOption;
    }
  });

  // Trigger initial navigation based on the selected option (if any)
  var initialOption = $('#selectPages').val();
  if (initialOption !== "") {
    window.location.href = initialOption;
  }
});



// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()


  $(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});



$(document).ready(function () {
  $('#selectPages').change(function () {
      var selectedOption = $(this).val();
      if (selectedOption !== "") {
          window.location.href = selectedOption;
      }
  });

  // Trigger initial navigation based on the selected option (if any)
  var initialOption = $('#selectPages').val();
  if (initialOption !== "") {
      window.location.href = initialOption;
  }
});