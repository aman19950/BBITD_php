<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> 
    
</head>
<style> 
.dlt_btn{
    background:red;
}
</style>
<body>
    <table id = "myTable" border= "1" width= "100%"  height="200px">
        <tr align="center">
            <td colspan = "3" text-align ="cenetr"><h1>load data from database</h1></td>
        </tr>
        <tr align="center">
            <form>
            <td>First Name  : <input type="text" id = "firstname"></td>
            <td>Email   : <input type="text" id = "email"></td>
            <td><input type = "submit" id = "save-button" value = "Save"></td>
</form>
        </tr>
        <tr align="center">
            <td id = "load_tbl" colspan = "3">
                <input type="button" id= "load_button" value = "Load Data">
            </td>
        </tr>
         <tr>
             <td id = "table_data" width = "100%" colspan ="3">
                 <!-- <table border="1" cellspacing=2 width = "100%" align="center">
                     <tr>
                         <th>ID</th>
                         <th>Name</th>
                         <th>Email</th>
                     </tr>
                     <tr align ="center">
                         <td>1</td>
                         <td>Ram</td>
                         <td>Ram@gmail.com</td>
                     </tr>
                 </table> -->
</td>
</tr>
    </table>
</body>

<script type ="text/javascript">
                                    ////// load Data From DataBase
        $(document).ready(function(){
            // $("#load_button").on("click",function(e){    
              
            //     $.ajax({
            //         url : "ajax_data.php",
            //         type : "post",
            //         success : function(data){
            //             $("#table_data").html(data);
            //             //alert("successful");
            //         }
            //     });

            // });

                                    ////// Insert Data in the database
            function loadData(){
                 $.ajax({
                    url : "ajax_data.php",
                    type : "post",
                    success : function(data){
                        $("#table_data").html(data);
                    }
                });
            }
            loadData();
             $("#save-button").on("click",function(e){  
                  e.preventDefault();
                var fname = $("#firstname").val();
               
                var email = $("#email").val();

                if(fname == "" || email == ""){
                    alert("ALL fields are required");
                }
                else{
                    $.ajax({
                    url : "insert_ajax.php",
                    type : "post",
                    data :{firstname :fname,email:email},
                    success : function(data){
                       // loadData();
                        //alert("data is inserted successfully");
                        if(data == 1 ){
                        loadData();
                        }
                        else{
                            alert("data is not inserted ");
                        }
                    }
                });

               }
                
               

             });

             $(document).on("click",".dlt_btn",function(){

                 var std_id = $(this).data("id");
                // alert(std_id);
                 $.ajax({
                    url : "ajax-delete.php",
                    type : "post",
                    data :{id:std_id},
                    success : function(data){
                       // loadData();
                        //alert("data is inserted successfully");
                        if(data == 1 ){
                        loadData();
                        }
                        else{
                            alert("data is not deleted ");
                        }
                    }
                });
                
                
             })



        });

</script>

 
</html>