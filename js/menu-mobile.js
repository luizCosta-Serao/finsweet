export default function menuMobile() {
  // Exibindo ou ocultando menu ao click no menu hamburguer
  $('.btn-menu').click(function() {
    $('.header .menu').toggleClass('active');
  })

  // Escondendo o menu caso faça redimensionamento da página
  $(window).resize(function() {
    $('.header .menu').removeClass('active');
  })
}