<!DOCTYPE html>
<html lang="">
<head>
    <title>Register</title>
</head>
   <body>
   <div class="container">
       <form>
           <label><input type="text" placeholder="Bruger navn"/><br>
           <label><input type="mobil" placeholder="Mobil nr"/></label><br>
           <label><input type="password" placeholder="Password"/></label><br>
           <label><input type="text" placeholder="CPR-Nr"/></label><br><br>
                       <input type="radio" name="gender" value="male" id="gender-male"/>
                       <label for="gender-male">Male</label>
                       <input type="radio" name="gender" value="female" id="gender-female"/>
                       <label for="gender-female">Female</label><br>
                   <input type="radio" name="payment-method" value="card" id="payment-method-card" checked="true"/>
                   <label for="payment-method-card"><span><i class="fa fa-cc-visa"></i>Credit Card</span></label>
                   <input type="radio" name="payment-method" value="paypal" id="payment-method-paypal"/>
                   <label for="payment-method-paypal"> <span><i class="fa fa-cc-paypal"></i>Mobile Pay</span></label><br><br>
                   <label><input type="text" placeholder="Card Number"/></label><br>
                       <label><input type="text" placeholder="Card CVC"/><br></label>
                       <label><select><option>01 Jan</option><option>02 Jan</option></select></label>
                       <label><select><option>2021</option><option>2022</option></select></label><br>
                            <br><input type="checkbox" id="terms"/>
                            <label for="terms">I accept terms and conditions </label>
           </div>
       </form>
   </body>
