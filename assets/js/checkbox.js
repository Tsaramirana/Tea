window.addEventListener('DOMContentLoaded', function() {
    // Get all the month-checkbox labels
    var monthCheckboxes = document.querySelectorAll('.month-checkbox');
  
    // Loop through each label
    monthCheckboxes.forEach(function(label) {
      // Find the checkbox inside the label
      var checkbox = label.querySelector('input[type="checkbox"]');
  
      // Add an event listener for the change event
      checkbox.addEventListener('change', function() {
        // Toggle the 'checked' class on the label based on the checkbox state
        label.classList.toggle('checked', checkbox.checked);
      });
    });
});
  