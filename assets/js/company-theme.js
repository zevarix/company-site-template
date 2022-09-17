/**
 * Vanilla JS
 */
window.onload = (event) => {
  // Dropdowns
  var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
 
  var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
    return new bootstrap.Dropdown(dropdownToggleEl);
  });

  // Modals
  const contactModal = document.getElementById('contactModal');
  const contactModalInput = document.getElementById('contactModalInput');

  contactModal.addEventListener('shown.bs.modal', () => {
    contactModalInput.focus();
  });

};


/**
 * jQuery
 */
$('.dropdown').mouseover(function () {
  if($('.dropdown-toggle').is(':hidden')) {
    $(this).addClass('show').attr('aria-expanded', 'true');
    $(this).find('.dropdown-menu').addClass('show');
  }
}).mouseout(function () {
  if($('.dropdown-toggle').is(':hidden')) {
    $(this).removeClass('show').attr('aria-expanded', 'false');
    $(this).find('.dropdown-menu').removeClass('show');
  }
});
