// jQuery

jQuery(function ($){
    // ドロップダウンメニュー
  $(".menu-item").hover(function(){
      $(".sub-menu:not(:animated)",this).slideDown();
  },function(){
      $(".sub-menu",this).slideUp();
  });
});

// jQuery(document).ready(function($){
//     $(".box").hover(function(){
//         alert ("Hello,world!");
//     });
// });


