<php
include ('./my_connect1.php');
include ('./addHandle.php');
?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link href="../css/stylesAdd.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    </head>

    <body>


<!--        Collapsible -->

<!-- =============This is the nav bar===========-->
<nav role="navigation" class="darkred">
    <div class="nav-wrapper container">
      <a href="../welcome.php" class="brand-logo">Home</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down right">
        <li><a href="../add/add.php">Add</a></li>
      <li><a href="../edit/indexcust.php">Edit</a></li>
      <li><a href="../delete/indexdelete.php">Delete</a></li>
      <li><a href="../view/viewdemo.php">View</a></li>
      </ul>
    </div>
  </nav>


<!-- ============ End of the Nav Bar=============-->
<div class="container row center">
 <div id="collapseAdd">
    <ul class="collapsible popout" data-collapsible="accordion">
        <li>
          <div class="collapsible-header"><i class="material-icons">perm_identity</i>Customer</div>
          <div class="collapsible-body">
<!--Customer Entity-->

              <!--  Database connection-->




                <!--    End of Database Connection          -->
     <div class="row">
        <form class="col s12" method="get" action="./addHandle.php" >


          <div class="row">

            <div class="input-field col s4">
              <input id="customer_id" name="customer_id" type="text" class="validate">

              <label for="customer_ID">Customer ID</label>
            </div>
              <div class="input-field col s4">
              <input id="f_name" name="f_name" type="text" class="validate">
              <label for="first_Name">First Name</label>
            </div>
              <div class="input-field col s4">
              <input id="l_name" name="l_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div>

          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="email" name="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
              <div class="input-field col s6">
              <input id="address" name="address" type="text" class="validate">
              <label for="email">Address</label>
            </div>

          </div>
          <div class="row">
<!--
            <div class="input-field col s6">
              <i class="material-icons prefix">phone</i>
              <input id="icon_telephone" type="tel" class="validate">
              <label for="icon_telephone">Telephone</label>
            </div>
-->
            <div class="input-field col s6">
                <select name="gender">
                  <option value="" disabled selected>Select your Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select>
                <label>Gender</label>
            </div>
            <div class="input-field col s6">
                <select name="member">
                  <option value="" disabled selected>Member or Non-Member</option>
                  <option value="">Non-Member</option>
                  <option value="Female">Member</option>
                  <!-- <option value="Other">Other</option> -->
                </select>
                <label>Gender</label>
            </div>

         </div>
         <div class="row">
            <div class="input-field col s2">
                <p style="margin-right: 50px;">Birthday:</p>
            </div>
            <div class="input-field col s6">
                <input name="b_day" type="date" class="datepicker">
            </div>
            <div class="input-field col s4">
              <input id="credit_rating" name="credit_rating" type="text" class="validate">
              <label for="credit_rating">Credit Rating</label>
            </div>


        </div>
<!--            This section is for member/non-member-->
<!--
            <div class="row">
                <div class="input-field col s6">
                    <select onChange="changetextbox();" id="MemIDS" name="MemIDS">
                      <option value="" disabled selected>(Non)Member</option>
                      <option value="1">Member</option>
                      <option value="2">Non Member</option>
                    </select>
                    <label>(Non)Member</label>


            </div>
                <div class="input-field col s6">

                  <input type="text" class="validate"  id="MemID" name="MemID"  />
                  <label for="Members">Member ID</label>
                </div>
-->
                    <!--
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
                        -->

<!--            </div>-->
                <!-- ===============end of member/nonmember-->

            <div class="input-field col s2">

                <button id="addCust"  class="btn waves-effect waves-light" type="submit">Submit
                    <i class="material-icons right" >send</i>
                </button>
            </div>




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
        <form class="col s12" action="#">
          <div class="row">

              <div class="input-field col s6">
              <input id="first_Name" type="text" class="validate">
              <label for="first_Name">First Name</label>
            </div>
              <div class="input-field col s6">
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

            <div class="input-field col s2">
                <p style="margin-right: 50px;">Birthday:</p>
            </div>
            <div class="input-field col s6">
                <input type="date" class="datepicker">
            </div>
         </div>

          <div class="input-field col s2">
<!--                    <p><br></p>&nbsp;-->
                    <button id="addCust" class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
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

                <div class="input-field col s3">
                  <input id="transactionID" type="text" class="validate">
                  <label for="transactionID">Transaction ID</label>
                </div>
                <div class="input-field col s3">
                  <input id="subtotal" type="text" class="validate">
                  <label for="subtotal">Sub_Total</label>
                </div>

                <div class="input-field col s1">
                  <p>Date: </p>
                </div>

                <div class="input-field col s4">
                    <input type="date" class="datepicker" name="Birthday" />

                </div>

              </div>

                <div class="input-field col s2">
<!--                    <p><br></p>&nbsp;-->
                    <button id="addCust" class="btn waves-effect waves-light" type="submit" name="action" >Submit
                        <i class="material-icons right">send</i>
                    </button>
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

                <div class="input-field col s2">
<!--                    <p><br></p>&nbsp;-->
                    <button id="addCust" class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
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
                      <label for="rebate">Rebate</label>
                    </div>

                  </div>
                    <div class="row">

                    <div class="input-field col s4">
                     Beginning Date
                        <input type="date" class="datepicker">
                    </div>
                    <div class="input-field col s4">
                     End Date
                        <input type="date" class="datepicker">
                    </div>
                    </div>

                    <div class="input-field col s2">
<!--                    <p><br></p>&nbsp;-->
                    <button id="addCust" class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
                </form>
              </div>
          </div>
        </li>
<!--        End of Promotion Entity-->


        <!--            Beginning of Stores Entity-->
        <li>
          <div class="collapsible-header"><i class="material-icons">store</i>Stores</div>
          <div class="collapsible-body">
            <div class="row">
                <form class="col s12">
                  <div class="row">

                      <div class="input-field col s6">
                      <input id="storeID" type="text" class="validate">
                      <label for="storeID">Store ID</label>
                    </div>
                      <div class="input-field col s6">
                      <input id="storeName" type="text" class="validate">
                      <label for="storeName">Store Name</label>
                    </div>
                      <div class="input-field col s6">
                      <input id="address" type="text" class="validate">
                      <label for="address">Address</label>
                    </div>
                      <div class="input-field col s6">
                      <input id="numEmployees" type="text" class="validate">
                      <label for="numEmployees">Number of Employees</label>
                    </div>
                      <div class="input-field col s6">
                      <input id="mgrFirst" type="text" class="validate">
                      <label for="mgrFirst">Manager First Name</label>
                    </div>
                      <div class="input-field col s6">
                      <input id="mgrLast" type="text" class="validate">
                      <label for="mgrLast">Manager Last Name</label>
                    </div>
                      <div class="input-field col s6">
                      <input id="supName" type="text" class="validate">
                      <label for="supName">Supervisor Name</label>
                    </div>
                    <div class="input-field col s6">
                        <select>
                          <option value="" disabled selected>Retail/WholeSale</option>
                          <option value="Retail">Retail</option>
                          <option value="WholeSale">WholeSale</option>

                        </select>
                        <label>Type of Store</label>
                    </div>




                  </div>

                    <div class="input-field col s2">
<!--                    <p><br></p>&nbsp;-->
                    <button id="addCust" class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>

                </form>
              </div>
          </div>
        </li>
        <!--        End of Store Entity-->




     </ul>
</div>
<!-- end of collapsible===================-->

    </div>










      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
        <script type="text/javascript">
    $(document).ready(function() {
      $('select').material_select();
    });

    </script>
    </body>
  </html>
