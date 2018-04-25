jQuery(document).ready(function($){
   console.log('working');

   $('#menuTrigger').click(function(){
      $('ul.menu').toggleClass('open');
   });

   var userFeed = new Instafeed({
       get: 'user',
      //  clientId: 'd346c1de6d274f4994f9345b72b3a633',
       userId: 1167443738,
       accessToken: '1167443738.1677ed0.8626f5a5334746de8f919ce75757d845',
       template: '<div class="half ig-card"><div class="instagram-image"><a href="{{link}}"><img src="{{image}}" /></a></div><div class="instagram-caption"><p>{{caption}}</p></div></div>',
       resolution: 'standard_resolution'
   });

   userFeed.run();

});
