// Assuming you're using jQuery
$('input[name="spe"]').on('change', function() {
    // Get the value of all checked boxes
    var selectedSpecialites = $('input[name="spe"]:checked').map(function() {
      return $(this).val();
    }).get().join(',');
    
    // Send an AJAX request to update the user's specialite
    $.ajax({
      url: '../../php-shit/php-files/speSelector.php',
      method: 'POST',
      data: { specialite: selectedSpecialites },
      success: function(response) {
        // Handle the response here
      },
      error: function(xhr, status, error) {
        console.log('Error: ' + error);
      }
    });
  });