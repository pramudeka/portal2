/*!
* Start Bootstrap - Agency v7.0.11 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
// 

  $(function () {

    $('a.icon').on('click',function(){
      if($('#portfolio-flters').hasClass('active')){
        $('#portfolio-flters').removeClass('active')
      }else{
        $('#portfolio-flters').addClass('active')
      }
    })

    setTimeout(function() {
      let popoverTriggerList = [].slice.call(document.querySelectorAll('.info-bt'))
      let popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl,{
          trigger: 'focus',
          placement: 'top',
          fallbackPlacement : ['left', 'right', 'top', 'bottom']
        })
      })
    },1000);

    $('#portfolio-flters li').on( 'click', function() {
      let filterValue = $( this ).data('filter');
      $('#portfolio-flters li').removeClass('filter-active');
      $( this ).addClass('filter-active');

      $('.item-list .portfolio-item').each( function( i, buttonGroup ) {
          let $buttonGroup = $( buttonGroup );
          $buttonGroup.hide()
          let have=$buttonGroup.hasClass(filterValue)
          if (have || filterValue=='all') {
            $buttonGroup.fadeIn(500)
          }else{
            $buttonGroup.fadeOut(500)
          }
          //if(filterValue=='*'){}
        });
    });
    
    function scrollNav() {
      if ($(this).scrollTop()>40) {
        $('#mainNav').addClass('scrolled')
      }else{
        $('#mainNav').removeClass('scrolled')
      }
    }

    scrollNav()

    $(this).scroll(function () {
      scrollNav()

      if ($(this).scrollTop()>200) {
        $('.back-to-top').addClass('active').fadeIn('slow')
      }else{
        $('.back-to-top').removeClass('active').fadeOut('slow')
      }
    })

    $('.back-to-top').on('click',function(){
      $(this).scrollTop(0)
    })

    $('#modal-detail').on('shown.bs.modal', function (event) {
      let button = $(event.relatedTarget); // Button that triggered the modal
      let id = button.attr('id'); 
      let desc = $('#'+id+' img').attr('alt').split(' | ')
      console.log(desc)
      $('.modal-body h5').text(desc[0])
      $('.modal-body p').text(desc[1])
      $('.btn-go').attr('href',button.attr('href'))
    });

    $('#modal-detail').on('hidden.bs.modal', function (event) {
      $('.modal-body h5').text('')
      $('.modal-body p').text('')
      $('.btn-go').attr('href','javascript:void(0);')
    });

  })