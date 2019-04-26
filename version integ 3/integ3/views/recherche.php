<?PHP
include "../core/commandesc.php";
$commandesc1=new commandesc();
?>

           
        <h4>veuillez tapez un text a chercher</h4>

           <script src="../jquery.min.js"></script>   
           <br /><br />  
                <input type="text" name="country" id="country" placeholder="Recherche" />
        <p></p>
        
      <!--  <select name="pays" id="pays">
                <option value="produit">produit</option>
                <option value="1"></option>
            </select> -->
                <div id="countryList"></div>  
           </div>  
       
 <script> 
 {
 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val(); 
          if(query != '') 
            { 
                $.ajax({  
                     url:"fetch.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                     }  
                }); 

       } 
      }); 
 });}

 </script> 

    <!-- ////////////////////////////////////////////////////////////////////////////-->

