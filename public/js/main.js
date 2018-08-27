$(function(){
    
    
   $('.Right-menu ul li a').on('click',function(){
       
       if ($('.active-solid').on('click',function(){
            $(this).addClass('active-solid')
       }));
        if($('.a-f').on('click',function(){
         $(this).addClass('active').siblings().removeClass('active');   
           
       }));
       
       console.log($(this).data('class'));
       
       if($(this).data('class') =='ch_pass'){
           
           if($('.pass').hasClass('hid')){
                 $('.pass').addClass('sho').removeClass('hid');
                $('.EmployeeReports ,.QueryTheData ,.CreateHoliday,.RegisterAttendance ,.DayHoliday ,.RegisterUnregistered,.Get-a-report').addClass('hid').removeClass('sho');
               $(this).removeClass('notactive');
               
               
           }
       
           
      }
       
       else if($(this).data('class') =='EmployeeReports'){
           
           if($('.EmployeeReports').hasClass('hid')){
                 $('.EmployeeReports').addClass('sho').removeClass('hid');
                 $('.pass ,.QueryTheData ,.DayHoliday ,.CreateHoliday,.RegisterAttendance,.RegisterUnregistered,.Get-a-report').addClass('hid').removeClass('sho');
                $(this).removeClass('notactive');
                
            }
         else{
             
              $('.EmployeeReports').addClass('hid').removeClass('sho');
              $(this).addClass('notactive');
             
         }
           
      }
       
       else if($(this).data('class') =='QueryTheData'){
           
           if($('.QueryTheData').hasClass('hid')){
                 $('.QueryTheData').addClass('sho').removeClass('hid');
               $('.pass ,.EmployeeReports ,.CreateHoliday ,.RegisterAttendance,.DayHoliday,.RegisterUnregistered,.Get-a-report').addClass('hid').removeClass('sho');
                $(this).removeClass('notactive');
            }
         else{
              $('.QueryTheData').addClass('hid').removeClass('sho');
              $(this).addClass('notactive');
                 
         }
           
      }
       
       else if($(this).data('class') =='CreateHoliday'){
           
           if($('.CreateHoliday').hasClass('hid')){
                 $('.CreateHoliday').addClass('sho').removeClass('hid');
               $('.pass ,.EmployeeReports ,.QueryTheData,.RegisterAttendance,.DayHoliday,.RegisterUnregistered,.Get-a-report').addClass('hid').removeClass('sho');
                $(this).removeClass('notactive');
            }
         else{
              $('.CreateHoliday').addClass('hid').removeClass('sho');
              $(this).addClass('notactive');
         }
           
      }
      
       else if($(this).data('class') =='RegisterAttendance'){
           
           if($('.RegisterAttendance').hasClass('hid')){
                 $('.RegisterAttendance').addClass('sho').removeClass('hid');
               $('.pass ,.EmployeeReports ,.QueryTheData ,.CreateHoliday ,.DayHoliday,.RegisterUnregistered,.Get-a-report').addClass('hid').addClass('hid').removeClass('sho');
                $(this).removeClass('notactive');
            }
         else{
              $('.RegisterAttendance').addClass('hid').removeClass('sho');
              $(this).addClass('notactive');
         }
           
      }
       
       else if($(this).data('class') =='DayHoliday'){
           
           if($('.DayHoliday').hasClass('hid')){
               
                 $('.DayHoliday').addClass('sho').removeClass('hid');
               $('.pass ,.EmployeeReports ,.QueryTheData ,.CreateHoliday ,.RegisterAttendance ,.RegisterUnregistered,.Get-a-report').addClass('hid').removeClass('sho');
               
           $(this).removeClass('notactive');
            }
         else{
             
              $('.DayHoliday').addClass('hid').removeClass('sho');
             $(this).addClass('notactive');
              
             
             
         }
           
      }
       
       else if($(this).data('class') =='RegisterUnregistered'){
           
           if($('.RegisterUnregistered').hasClass('hid')){
               
                 $('.RegisterUnregistered').addClass('sho').removeClass('hid');
               $('.pass ,.EmployeeReports ,.QueryTheData ,.CreateHoliday ,.RegisterAttendance ,.DayHoliday,.Get-a-report').addClass('hid').removeClass('sho');
               
           $(this).removeClass('notactive');
            }
         else{
             
              $('.RegisterUnregistered').addClass('hid').removeClass('sho');
             $(this).addClass('notactive');
              
             
             
         }
           
      }
       
        else if($(this).data('class') =='GetAreport'){
           
           if($('.Get-a-report').hasClass('hid')){
               
                 $('.Get-a-report').addClass('sho').removeClass('hid');
               $('.pass ,.EmployeeReports ,.QueryTheData ,.CreateHoliday ,.RegisterAttendance ,.DayHoliday,.RegisterUnregistered').addClass('hid').removeClass('sho');
               
           $(this).removeClass('notactive');
            }
         else{
             
              $('.Get-a-report').addClass('hid').removeClass('sho');
             $(this).addClass('notactive');
              
             
             
         }
           
      }
       
       
      
   
   });
    
  
    
    
});



