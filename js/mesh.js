

jQuery(document).ready(function($){
   console.log('working');

   $('#menuTrigger').click(function(){
      $('ul.menu').slideToggle();
   });

   var userFeed = new Instafeed({
       get: 'user',
      //  clientId: 'd346c1de6d274f4994f9345b72b3a633',
       userId: 6209152766,
       accessToken: '6209152766.1677ed0.0229100bf6574435933030af71efe958',
       template: '<div class="half ig-card"><div class="instagram-image"><a href="{{link}}"><img src="{{image}}" /></a></div><div class="instagram-caption"><p>{{caption}}</p></div></div>',
       resolution: 'standard_resolution'
   });

   userFeed.run();
 //   var click_ctr = 0
 //      $('.responsive-menu i.menu-trigger').click(function(){
 //       click_ctr++
 //
 //       if(click_ctr==1){
 //          $('.responsive-menu .navigation ul').show();
 //          $(this).removeClass('fa-bars').addClass('fa-close');
 //       }else{
 //          $('.responsive-menu .navigation ul').hide();
 //          $(this).removeClass('fa-close').addClass('fa-bars');
 //          click_ctr=0;
 //       }
 // //$(this).toggleClass('fa-close fa-bars');
 // //$('.navigation').toggle();
 //   });

});
