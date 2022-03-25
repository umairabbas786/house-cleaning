<?php include "include/header.php";?>
<?php include "include/nav.php";?>
<!-- Start  Page hero-->
<section class="page-hero d-flex align-items-center" id="page-hero" style="height:70vh!important;">
    <!--Start Video background-->
    <div class="section-video-bg ">
        <!-- <video class="video" src="assets/videos/section-bg-video-1.mp4" autoplay="" muted="" loop=""> </video> -->
        <img src="assets/Images/pricing.jpg" class="video" height="500" alt="">
        <div class="overlay-color "></div>
    </div>
    <!--End Video background    -->
    <div class="container">
        <div class="hero-text-area text-center ">
            <div class="row">
                <div class="col-12 col-md-10 col-xl-9 mx-auto">
                    <!--Start of .hero-text-area-->
                    <h1 class="hero-title"><span class="featured-text"> BOOK NOW </span></h1>
                </div>
                <div class="col-10  col-xl-8 mx-auto">
                    <p class="hero-subtitle">
                        Take your first step to a sparkling clean home! To request to book an appointment please provide
                        the following information.
                    </p>
                </div>
                <!--End of .hero-text-area-->
            </div>
        </div>
    </div>
</section>
<!-- End  Page hero-->

<!-- Start  contact-us Section-->
<section class="contact-us  mega-section  pb-0" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10  mx-auto ">
                <div class="contact-form-panel">
                    <div class="custom-form-area input-boxed">
                        <!--Form To have user messages-->
                        <form class="main-form" id="contact-us-form" action="" method="post"><span
                                class="done-msg"></span>
                            <div class="row ">
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="user-name" name="UserName" type="text" required>
                                        <label class="input-label" for="user-name"> Full Name </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="user-email" name="UserEmail" type="email"
                                            required>
                                        <label class="input-label" for="user-email"> E-mail </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject" name="subject" type="text" required>
                                        <label class="input-label" for="msg-subject"> Phone Number </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <select name="contact-method" class="text-input" id="">
                                            <option value="" disabled="" selected="selected">Preferred Contact Method
                                            </option>
                                            <option value="email">email</option>
                                            <option value="text">text</option>
                                            <option value="phone call">phone call</option>
                                        </select>
                                        <label class="input-label" for="msg-subject"> Preferred Contact Method </label>
                                    </div>
                                </div>
                                <div class="col-12 mb-5">
                                    <h4>Home and Jobsite Address</h4>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject" name="subject" type="text" required>
                                        <label class="input-label" for="msg-subject"> Address 1 </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject" name="subject" type="text" required>
                                        <label class="input-label" for="msg-subject"> Address 2 </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject" name="subject" type="text" required>
                                        <label class="input-label" for="msg-subject"> City </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <select name="contact-method" class="text-input" id="">
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                        <label class="input-label" for="msg-subject"> State </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject" name="subject" type="text" required>
                                        <label class="input-label" for="msg-subject"> Zip Code </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject" name="subject"
                                            placeholder="If setting up appointment for someone else please give us the business name or Contact."
                                            type="text">
                                        <label class="input-label" for="msg-subject"> Appointment (For Others) </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <select name="contact-method" class="text-input" id="">
                                            <option value="" disabled="" selected="selected">Number of Bedrooms</option>
                                            <option value="1 Bedroom">1 Bedroom</option>
                                            <option value="2 Bedrooms">2 Bedrooms</option>
                                            <option value="3 Bedrooms">3 Bedrooms</option>
                                            <option value="4 Bedrooms">4 Bedrooms</option>
                                            <option value="5 or more Bedrooms">5 or more Bedrooms</option>
                                        </select>
                                        <label class="input-label" for="msg-subject"> Number of Bedrooms </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <select name="contact-method" class="text-input" id="">
                                            <option value="" disabled="" selected="selected">Number of Bathrooms
                                            </option>
                                            <option value="1 Bathroom">1 Bathroom</option>
                                            <option value="2 Bathrooms">2 Bathrooms</option>
                                            <option value="3 Bathrooms">3 Bathrooms</option>
                                            <option value="4 Bathrooms">4 Bathrooms</option>
                                            <option value="5 or more Bathrooms">5 or more Bathrooms</option>
                                        </select>
                                        <label class="input-label" for="msg-subject"> Number of Bathrooms </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject"
                                            placeholder="Total Square Footage (approximate) of your home if you know."
                                            name="subject" type="text" required>
                                        <label class="input-label" for="msg-subject"> Square Footage </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject"
                                            placeholder="How many stories is your home?" name="subject" type="text"
                                            required>
                                        <label class="input-label" for="msg-subject"> Stories </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject" name="pets" value="yes" type="radio"
                                            required> Yes <br>
                                        <input class="text-input" id="msg-subject" name="pets" value="no" type="radio"
                                            required> No
                                        <label class="input-label" for="msg-subject"> Do You Have Pets? </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject"
                                            placeholder="Special Pet Instructions" name="subject" type="text" required>
                                        <label class="input-label" for="msg-subject"> Pet Instructions </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <select name="contact-method" class="text-input" id="">
                                            <option value="Basic">Basic</option>
                                            <option value="Deluxe">Deluxe</option>
                                            <option value="Quick Klean">Quick Klean</option>
                                        </select>
                                        <label class="input-label" for="msg-subject"> Which type of Cleaning Service
                                            would you like? </label>
                                    </div>
                                </div>
                                <div class="col-6"></div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <ul style="list-style-type:none;" class="p-0">
                                            <li>
                                                <input type="checkbox" class="text-input" id="wpforms-1440-field_17_1"
                                                    name="ala" value="Wash and fold laundry">
                                                <label for="wpforms-1440-field_17_1">&nbsp;Wash and fold laundry</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="text-input" id="wpforms-1440-field_17_2"
                                                    name="ala" value="Iron"><label
                                                    for="wpforms-1440-field_17_2">&nbsp;&nbsp;Iron</label></li>
                                            <li>
                                                <input type="checkbox" id="wpforms-1440-field_17_8" class="text-input"
                                                    name="ala" value="Wet wipe window blinds"><label
                                                    for="wpforms-1440-field_17_8">&nbsp;&nbsp;Wet
                                                    wipe window blinds</label></li>
                                            <li><input type="checkbox" class="text-input" id="wpforms-1440-field_17_7"
                                                    name="ala" value="Wet wipe window tracks"><label
                                                    for="wpforms-1440-field_17_7">&nbsp;&nbsp;Wet
                                                    wipe window tracks</label></li>
                                            <li><input type="checkbox" class="text-input" id="wpforms-1440-field_17_6"
                                                    name="ala" value="Clean all mirrors"><label
                                                    for="wpforms-1440-field_17_6">&nbsp;&nbsp;Clean all mirrors</label></li>
                                            <li><input type="checkbox" class="text-input" id="wpforms-1440-field_17_5"
                                                    name="ala"
                                                    value="Vacuum / wet wipe inside closets, cupboards and drawers"><label
                                                    for="wpforms-1440-field_17_5">&nbsp;&nbsp;Vacuum / wet wipe inside closets,
                                                    cupboards and drawers</label></li>
                                            <li>
                                                <input type="checkbox" class="text-input" id="wpforms-1440-field_17_4"
                                                    name="ala" value="Clean garage and/or patio"><label
                                                    for="wpforms-1440-field_17_4">&nbsp;&nbsp;Clean garage and/or patio</label></li>
                                            <li>
                                                <input type="checkbox" class="text-input" id="wpforms-1440-field_17_9"
                                                    name="ala" value="Wash windows">
                                                <label for="wpforms-1440-field_17_9">&nbsp;&nbsp;Wash windows</label></li>
                                        </ul>
                                        <label class="input-label" for="msg-subject"> À La Carte </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject" name="cleaners" value="Standard Cleaners" type="radio"
                                            required> Standard Cleaners <br>
                                        <input class="text-input" id="msg-subject" name="cleaners" value="Green Certified Cleaners" type="radio"
                                            required> Green Certified Cleaners
                                        <label class="input-label" for="msg-subject"> What type of cleaners would you like used? </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <select name="contact-method" class="text-input" id="">
                                        <option value="Bona (dry mop method)">Bona (dry mop method)</option><option value="Murphy's Oil Soap (standard)">Murphy's Oil Soap (standard)</option><option value="Green Cleaner (Earth Friendly Option)">Green Cleaner (Earth Friendly Option)</option>
                                        </select>
                                        <label class="input-label" for="msg-subject"> If you have wood floors what cleaner would you like used? </label>
                                    </div>
                                </div>
                                <div class="col-6"></div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject" name="cleaners" value="One time" type="radio"
                                            required> One Time <br>
                                        <input class="text-input" id="msg-subject" name="cleaners" value="Weekly" type="radio"
                                            required> Weekly <br>
                                        <input class="text-input" id="msg-subject" name="cleaners" value="Bi-weekly" type="radio"
                                        required> Bi-weekly <br>
                                        <input class="text-input" id="msg-subject" name="cleaners" value="Every 4 weeks" type="radio"
                                        required> Every 4 weeks 
                                        <label class="input-label" for="msg-subject"> How often would you like your cleaning? </label>
                                    </div>
                                </div>
                                <div class="col-6"></div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject"
                                            placeholder="ASAP, a specific date, AM, PM, or don't care?" name="subject" type="text" required>
                                        <label class="input-label" for="msg-subject"> If one time please specify when? </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject"
                                            placeholder="Best days, Am or PM, or don't care." name="subject" type="text" required>
                                        <label class="input-label" for="msg-subject"> If on going please specify best days and times? </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject" name="cleaners" value="Customer home" type="radio"
                                            required> Customer home <br>
                                        <input class="text-input" id="msg-subject" name="cleaners" value="Key under mat" type="radio"
                                            required> Key under mat <br>
                                        <input class="text-input" id="msg-subject" name="cleaners" value="Door unlocked" type="radio"
                                        required> Door unlocked <br>
                                        <input class="text-input" id="msg-subject" name="cleaners" value="Other" type="radio"
                                        required> Other 
                                        <label class="input-label" for="msg-subject"> How will the crew get in to your home? </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject" name="subject" type="text" required>
                                        <label class="input-label" for="msg-subject"> If "Other", please let us know how we will get in. </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject" name="subject" type="text" required>
                                        <label class="input-label" for="msg-subject"> Is there any items in your home you don't want touched?</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject" name="subject" type="text" required>
                                        <label class="input-label" for="msg-subject"> Are there any rooms or areas you don't want cleaned? </label>
                                    </div>
                                </div>
                                <div class="col-12 ">
                                    <div class="   input-wrapper">
                                        <textarea class=" text-input" id="msg-text" name="message"></textarea>
                                        <label class="input-label" for="msg-text"> Special Instructions </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="   input-wrapper">
                                        <input class="text-input" id="msg-subject" name="subject" type="text" required>
                                        <label class="input-label" for="msg-subject"> How did you hear about us? </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="   input-wrapper">
                                        <select name="contact-method" class="text-input" id="">
                                        <option value="Credit Card">Credit Card</option><option value="Check">Check</option><option value="Cash">Cash</option><option value="Invoice (requires approval)">Invoice (requires approval)</option>
                                        </select>
                                        <label class="input-label" for="msg-subject"> How would you like to pay? </label>
                                    </div>
                                </div>
                                <div class="col-12 submit-wrapper">
                                    <button class=" btn-solid" id="submit-btn" type="submit" name="UserSubmit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End  contact-us Section-->

<?php include "include/footer.php";?>