   <div class="top-row">
            <div class="field-wrap">
              <label>
                Street address
              </label>
              <input style="width:15%;" name="street_address" placeholder="if available" required="" autocomplete="off" type="text" value="{{ $user->street_address}}">
            </div>
        
            
      
            <div class="field-wrap"style="width:9%;">
              <label>
                City
              </label>
              <input name="city" required="" autocomplete="off" type="text" value="{{ $user->city}}">
            </div>

        <div class="field-wrap" style="width:5%;">
              <label>
           State
              </label>
              <input  name="state" required="" autocomplete="off" type="text" value="{{ $user->state}}">
            </div>
        
          <div class="field-wrap" style="width:7%;">
              <label>
          Zip
              </label>
              <input name="zip" required="" autocomplete="off" type="text" value="{{ $user->zip}}">
            </div>
      <br><br><br><br>
<div class="field-wrap" >
              <label>
             Phone
              </label>
              <input name="phone" placeholder="optional" required="" autocomplete="off" type="text" value="{{ $user->phone}}">
            </div>
  <div class="field-wrap" >
              <label>
             Email
              </label>
              <input name="email" placeholder="optional" required="" autocomplete="off" type="text" value="{{ $user->email}}">
            </div>
 <br><br><br><br>
  <div class="field-wrap" style="width:260px;">
              <label>
              Printed name 
              </label>
              <input placeholder="adult completing the form" required="" autocomplete="off" type="text" value="{{ $user->first_name}} {{  $user->last_name}}">
            </div>

  <div class="field-wrap" style="width:260px;">
              <label>
             Signature name 
              </label>
              <input placeholder="adult completing the form" required="" autocomplete="off" type="text"  value="{{ $user->first_name}} {{  $user->last_name}}">
            </div>

  <div class="field-wrap" >
              <label>
             Todays date
              </label>
              <input  id="datepicker" name="submitted_at" required="" autocomplete="off" type="text" >
            </div>

      
        </div>
    