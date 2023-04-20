$(document).ready(function() {
  // Set up an array to store the selected specialites
  var selectedSpecialites = [];

  // Add a change event listener to the checkboxes
  $('input[name="spe"]').on('change', function() {
    // Get the value of all checked boxes
    var checkedBoxes = $('input[name="spe"]:checked');

    // If more than three boxes are checked, uncheck the last box that was checked
    if (checkedBoxes.length > 3) {
      $(checkedBoxes.get(-1)).prop('checked', false);
    }

    // Update the selectedSpecialites array with the currently checked boxes
    selectedSpecialites = [];
    checkedBoxes.each(function() {
      selectedSpecialites.push($(this).val());
    });
  });

  // Add a click event listener to the submit button
  $('#submit-btn').on('click', function() {
    // Send an AJAX request to update the user's specialites in the database
    $.ajax({
      url: '../../php-shit/php-files/speSelector.php',
      method: 'POST',
      data: { specialites: selectedSpecialites },
      success: function(response) {
        // Handle the response here
        console.log(response);
      },
      error: function(xhr, status, error) {
        console.log('Error: ' + error);
      }
    });
  });
});
