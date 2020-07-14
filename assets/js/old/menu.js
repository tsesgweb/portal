// jq(document).on('shown.bs.dropdown', function(event) {
//     var dropdown = jq(event.target);

//     // Set aria-expanded to true
//     dropdown.find('.dropdown-menu').attr('aria-expanded', true);

//     // Set focus on the first link in the dropdown
//     setTimeout(function() {
//         dropdown.find('.dropdown-menu li:first-child a').focus();
//     }, 10);
// });

// // On dropdown close
// jq(document).on('hidden.bs.dropdown', function(event) {
//     var dropdown = jq(event.target);

//     // Set aria-expanded to false        
//     dropdown.find('.dropdown-menu').attr('aria-expanded', false);

//     // Set focus back to dropdown toggle
//     dropdown.find('.dropdown-toggle').focus();
// });
// jq(document).on('click', '.mega-dropdown', function(e) {
//     e.stopPropagation();
// });