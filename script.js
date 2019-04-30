$(function() {

    getAllEmployees();
   
    $(".testForm button").click(function () {
       
        if ($(this).attr("value") == "get-employee") {
            $('.testForm').submit(function(){
                var id = $('.id').val();
                var name = $('.name').val();
             
              $.post('getEmployee.php',
                     {id : id,name : name} ,
                     function(data){
                     $('.return').html(data).slideDown();
                      //$('.id').val('id');
                      $('.name').val(name);
                     getAllEmployees();
                     });
                     return false;
                   });
        }
         if ($(this).attr("value") == "add-new") {
            $('.testForm').submit(function(){
                var id = $('.id').val();
                var name = $('.name').val();
              
          
              $.post('addNew.php',
                     {id : id,name : name} ,
                     function(data){
                     $('.return').html(data).slideDown();
                    //  $('.id').val('');
                    //  $('.name').val('');
                     getAllEmployees();
                     });
                     return false;
                   });
                   
        }
         if ($(this).attr("value") == "update-employee") {
            $('.testForm').submit(function(){
                var id = $('.id').val();
                var name = $('.name').val();
          
              //getAllEmployees();
          
              $.post('updateEmployee.php',
                     {id : id,name : name} ,
                     function(data){
                     $('.return').html(data).slideDown();
                    //  $('.id').val('');
                    //  $('.name').val('');
                     getAllEmployees();
                     });
                     return false;
                   });
        }
         if ($(this).attr("value") == "delete-employee") {
            $('.testForm').submit(function(){
                var id = $('.id').val();
                var name = $('.name').val();
             
              //getAllEmployees();
          
              $.post('deleteEmployee.php',
                     {id : id,name : name} ,
                     function(data){
                     $('.return').html(data).slideDown();
                     $('.id').val('');
                     $('.name').val('');
                     getAllEmployees();
                     });
                     return false;
                   });
        }
         if ($(this).attr("value") == "get-all-employees") {
             getAllEmployees();
                
              
        }

       
        
    });

    function getAllEmployees(){
        $.post('getAll.php',
        function(data){
        $('.display').html(data);
        // $('.id').val('');
        // $('.name').val('');
      });
      }
    

  setInterval(getAllEmployees,1000);

});