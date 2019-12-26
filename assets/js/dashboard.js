  $('.toggle-sidebar').on('click',()=>{

      if($('#sidebar').hasClass('sidebar-offcanvas')){
        $('#sidebar').removeClass('sidebar-offcanvas');
   
      }else{
        $('#sidebar').addClass('sidebar-offcanvas');
       
      }

   });