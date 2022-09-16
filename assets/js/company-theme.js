/**
 * Vanilla JS
 * 
 * @param {*} event 
 */
window.onload = (event) => {
  var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
  var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
    return new bootstrap.Dropdown(dropdownToggleEl)
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
