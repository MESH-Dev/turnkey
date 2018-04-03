jQuery(document).ready(function($){
   console.log('working');

   $('#menuTrigger').click(function(){
      $('ul.menu').toggleClass('open');
   });

   var userFeed = new Instafeed({
       get: 'user',
      //  clientId: 'd346c1de6d274f4994f9345b72b3a633',
       userId: 6209152766,
       accessToken: '6209152766.1677ed0.9b724147d01e451b9c6e0ace95fa66f5',
       template: '<div class="half ig-card"><div class="instagram-image"><a href="{{link}}"><img src="{{image}}" /></a></div><div class="instagram-caption"><p>{{caption}}</p></div></div>',
       resolution: 'standard_resolution'
   });

   userFeed.run();

});
