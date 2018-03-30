/*PLACEHOLDER HTML5*/
$(function(){
  $('[placeholder]').focus(function(e) {
    var elemento = $(e.target);
    if (elemento.val() == elemento.attr('placeholder')) {
        elemento.val('');
    }
  }).blur(function(e) {
    var elemento = $(e.target);
    if (elemento.val() == '' || elemento.val() == elemento.attr('placeholder')) {
        elemento.val(elemento.attr('placeholder'));
    }
  }).trigger('blur');
});

/**/