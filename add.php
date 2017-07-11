<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <link href="css/stylesAdd.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        
    </head>

    <body>
        
        
<!--        Collapsible -->
        
 <div id="collapseAdd">
    <ul class="collapsible popout" data-collapsible="accordion">
        <li>
          <div class="collapsible-header"><i class="material-icons">perm_identity</i>Customer</div>
          <div class="collapsible-body">
<!--Customer Entity-->
     <div class="row">
        <form class="col s12">
          <div class="row">
              
            <div class="input-field col s3">
              <input id="customer_ID" type="text" class="validate">
<!--                need to make this only accept numbers or can it be both numbers and letters?-->
              <label for="customer_ID">Customer ID</label>
            </div>  
              <div class="input-field col s3">
              <input id="first_Name" type="text" class="validate">
              <label for="first_Name">First Name</label>
            </div>
              <div class="input-field col s3">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div>
            <div class="input-field col s3">
              <input id="credit_Score" type="text" class="validate">
              <label for="credit_Score">Credit Score</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
              <div class="input-field col s6">
              <input id="address" type="text" class="validate">
              <label for="address">Address</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s4">
<!--              <i class="material-icons prefix">phone</i>-->
              <input id="icon_telephone" type="tel" class="validate">
              <label for="icon_telephone">Telephone</label>
            </div>
            <div class="input-field col s4">
                <select>
                  <option value="" disabled selected>Select your Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                  <option value="3">Other</option>
                </select>
                <label>Gender</label>
            </div>
            <div class="input-field col s4">
                <input type="date" class="datepicker">  
            </div>
         </div>
<!--            This section is for member/non-member-->
            <div class="row">
                <div class="input-field col s6">
                    <select onChange="changetextbox();" id="MemIDS" name="MemIDS">
                      <option value="" disabled selected>(Non)Member</option>
                      <option value="1">Member</option>
                      <option value="2">Non Member</option>
                    </select>
                    <label>Gender</label> 
                
                    
            </div>
                <div class="input-field col s6">
                  
                  <input type="text" class="validate"  id="MemID" name="MemID"  />
                  <label for="Members">Member ID</label>
                </div>
            <script type="text/javascript">
                function changetextbox()
                {
                    if (document.getElementById("MemIDS").value === "1") {
                        document.getElementById("MemID").disable='false';
                    } else {
                        document.getElementById("MemID").disable='true';
                    }
                }
            </script>
                
            </div>
<!--            ===============end of member/nonmember-->
          
        
            
          
            
        </form>
      </div>
    </div>
  </li>
<!--End of Customer Entity-->


<!--            Beginning of Dependent Entity-->
    <li>
      <div class="collapsible-header"><i class="material-icons">contacts</i>Dependent</div>
      <div class="collapsible-body">
          
       <div class="row">
        <form class="col s12">
          <div class="row">
              
              <div class="input-field col s3">
              <input id="first_Name" type="text" class="validate">
              <label for="first_Name">First Name</label>
            </div>
              <div class="input-field col s3">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div>
            
          </div>
          
            
          <div class="row">
            <div class="input-field col s4">
                <select>
                  <option value="" disabled selected>Select your Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                  <option value="3">Other</option>
                </select>
                <label>Gender</label>
            </div>
            
            <div class="input-field col s4">
                
                <input type="date" class="datepicker" name="Birthday" />  
                
            </div>
         </div>
            
          
            
        </form>
      </div>
        
    </div>
</li>
<!--        End of Dependent Entity-->
        
        
<!--            Beginning of Transaction Entity-->
        <li>
          <div class="collapsible-header"><i class="material-icons">receipt</i>Transaction</div>
          <div class="collapsible-body">
            
           <div class="row">
            <form class="col s12">
              <div class="row">

                  <div class="input-field col s4">
                  <input id="transactionID" type="text" class="validate">
                  <label for="transactionID">Transaction ID</label>
                </div>
                  <div class="input-field col s4">
                  <input id="subtotal" type="text" class="validate">
                  <label for="subtotal">Sub_Total</label>
                </div>
                  
                  
                  <div class="input-field col s4">
                      

                    <input type="date" class="datepicker" name="Birthday" />  
                        
                </div>

              </div>
        </form>
      </div>  
    </div>
</li>
<!--        End of Transaction Entity-->
        
<!--            Beginning of Items Entity-->
        <li>
          <div class="collapsible-header"><i class="material-icons">list</i>Items</div>
          <div class="collapsible-body">
            
            <div class="row">
            <form class="col s12">
              <div class="row">

                  <div class="input-field col s4">
                  <input id="itemID" type="text" class="validate">
                  <label for="itemID">Item ID</label>
                </div>
                  <div class="input-field col s4">
                  <input id="weight" type="text" class="validate">
                  <label for="weight">Weight</label>
                </div>
                  
                  <div class="input-field col s4">
                  <input id="brand" type="text" class="validate">
                  <label for="brand">Brand</label>
                </div>
                  <div class="input-field col s4">
                  <input id="price" type="text" class="validate">
                  <label for="price">Price</label>
                </div>
                  <div class="input-field col s4">
                  <input id="name" type="text" class="validate">
                  <label for="name">Name</label>
                </div>
                  
                  
            

                      </div>
                </form>
              </div>  

            
            
            
          </div>
        </li>
<!--        End of Items Entity-->
        
<!--            Beginning of Promotion Entity-->
        <li>
          <div class="collapsible-header"><i class="material-icons">loyalty</i>Promotion</div>
          <div class="collapsible-body">
            <div class="row">
                <form class="col s12">
                  <div class="row">

                      <div class="input-field col s6">
                      <input id="promoID" type="text" class="validate">
                      <label for="promoID">Promotion ID</label>
                    </div>
                      <div class="input-field col s6">
                      <input id="rebate" type="text" class="validate">
                      <label for="rebate">rebate</label>
                    </div>
                      
                    <div class="input-field col s6">
                        <input type="date" class="datepicker">  
                    </div>
                    <div class="input-field col s6">
                        <input type="date" class="datepicker">  
                    </div>
                      
                      
                  </div>
                </form>
              </div> 
                
            
            
            
            
          </div>
        </li>
<!--        End of Promotion Entity-->
  
        
        <!--            Beginning of Promotion Entity-->
        <li>
          <div class="collapsible-header"><i class="material-icons">store</i>Stores</div>
          <div class="collapsible-body">
            
            
            
          </div>
        </li>
        <!--        End of Promotion Entity-->
  

     

     </ul>
</div>
<!-- end of collapsible===================-->
        
        
        
        
        
        
        
        
        
        
        
        
        
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript">
    $(document).ready(function() {
      $('select').material_select();
    });

    </script>
    </body>
  </html>