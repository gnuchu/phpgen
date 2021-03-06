$(function(){
  $("#selection-form").submit(function(e){
    e.preventDefault();
    
    var $form = $(this);
    var $inputs = $form.find("input, select, button, textarea");
    
    var serializedData = $form.serialize();
    $inputs.prop("disabled", true);
    
    var request = $.ajax({
      type: "POST",
      url: "/index.php",
      data: serializedData,
      dataType: "html"
    })
    .done(function(response){
      $('#passworddisplay').val(response);
    })
    .fail(function(jqXHR, textStatus, errorThrown){
      console.error("The following error was thrown:" + textStatus, errorThrown);
    })
    .always(function(){
      $inputs.prop("disabled", false);
    })
  });
  //
  var id = "com.pwgen.";
  //Set initial state.
  setCheckboxes(id);

  $('.form-check-input').on("change", function () {
    var state_id = id + this.name;
    var newState = this.checked ? true : false;
    localStorage.setItem(state_id, newState);
  });
});

function setCheckboxes(id){
  //Sets them to start
  $('.form-check-input').each(function () {
    var state_id = id + this.name;
    var current_state = localStorage.getItem(state_id);
  
    if (current_state == null || current_state == "true") {
      if(current_state == 'true' && this.checked) {

      }
      else {
        localStorage.setItem(state_id, true);
        this.checked = true;
      }
    }
    else {
      localStorage.setItem(state_id, false);
      this.checked = false;
    }
  });
}



