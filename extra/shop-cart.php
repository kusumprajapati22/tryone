
      <!-- header section start -->
      <?php include('includes/header.php'); ?>
      <!-- header section end -->

    <!-- Page Title -->
    <section class="page-title text-center bg-light">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1 class="uppercase">Shopping Cart</h1>
            <ol class="breadcrumb">
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>
                <a href="index.html">Shop</a>
              </li>
              <li class="active">
                Cart
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <div class="content-wrapper oh">

      <!-- Cart -->
      <section class="section-wrap shopping-cart">
        <div class="container relative">
          <div class="row">

            <div class="col-md-12">
              <div class="table-wrap mb-30">
                <table class="shop_table cart table">
                  <thead>
                    <tr>
                      <th class="product-name" colspan="2">Product</th>
                      <th class="product-price">Price</th>
                      <th class="product-quantity">Quantity</th>
                      <th class="product-subtotal" colspan="2">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="cart_item">
                      <td class="product-thumbnail">
                        <a href="#">
                          <img src="img/shop/shop_item_3.jpg" alt="">
                        </a>
                      </td>
                      <td class="product-name">
                        <a href="#">Fashion Shorts</a>
                        <ul>
                          <li>Size: XL</li>
                          <li>Color: White</li>
                        </ul>
                      </td>
                      <td class="product-price">
                        <span class="amount">$1250.00</span>
                      </td>
                      <td class="product-quantity">
                        <div class="quantity buttons_added">                  
                          <input type="number" step="1" min="0" value="1" title="Qty" class="input-text qty text">
                          <div class="quantity-adjust">
                            <a href="#" class="plus">
                              <i class="fa fa-angle-up"></i>
                            </a>
                            <a href="#" class="minus">
                              <i class="fa fa-angle-down"></i>
                            </a>
                          </div>
                        </div>
                      </td>
                      <td class="product-subtotal">
                        <span class="amount">$1250.00</span>
                      </td>
                      <td class="product-remove">
                        <a href="#" class="remove" title="Remove this item">
                          <i class="ui-close"></i>
                        </a>
                      </td>
                    </tr>

                    <tr class="cart_item">
                      <td class="product-thumbnail">
                        <a href="#">
                          <img src="img/shop/shop_item_7.jpg" alt="">
                        </a>
                      </td>
                      <td class="product-name">
                        <a href="#">Business Suit</a>
                        <ul>
                          <li>Size: L</li>
                          <li>Color: Black</li>
                        </ul>
                      </td>
                      <td class="product-price">
                        <span class="amount">$240.00</span>
                      </td>
                      <td class="product-quantity">
                        <div class="quantity buttons_added">                  
                          <input type="number" step="1" min="0" value="1" title="Qty" class="input-text qty text">
                          <div class="quantity-adjust">
                            <a href="#" class="plus">
                              <i class="fa fa-angle-up"></i>
                            </a>
                            <a href="#" class="minus">
                              <i class="fa fa-angle-down"></i>
                            </a>
                          </div>
                        </div>
                      </td>
                      <td class="product-subtotal">
                        <span class="amount">$240.00</span>
                      </td>
                      <td class="product-remove">
                        <a href="#" class="remove" title="Remove this item">
                          <i class="ui-close"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="row mb-50">
                <div class="col-md-5 col-sm-12">
                  <div class="coupon">
                    <input type="text" name="coupon_code" id="coupon_code" class="input-text form-control" value placeholder="Coupon code">
                    <input type="submit" name="apply_coupon" class="btn btn-lg btn-stroke" value="Apply">
                  </div>
                </div>

                <div class="col-md-7">
                  <div class="actions">
                    <input type="submit" name="update_cart" value="Update Cart" class="btn btn-lg btn-stroke">
                    <div class="wc-proceed-to-checkout">
                      <a href="checkout.html" class="btn btn-lg btn-dark"><span>proceed to checkout</span></a>
                    </div>
                  </div>
                </div>
              </div>

            </div> <!-- end col -->
          </div> <!-- end row -->

          <div class="row">
            <div class="col-md-6 shipping-calculator-form">
              <h2 class="heading relative uppercase bottom-line full-grey mb-30">Calculate Shipping</h2>
              <p class="form-row form-row-wide">
                <select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state" rel="calc_shipping_state">
                  <option>Select a country…</option>
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Åland Islands</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AS">American Samoa</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AQ">Antarctica</option>
                  <option value="AG">Antigua and Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermuda</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia, Plurinational State of</option>
                  <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                  <option value="BA">Bosnia and Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BV">Bouvet Island</option>
                  <option value="BR">Brazil</option>
                  <option value="IO">British Indian Ocean Territory</option>
                  <option value="BN">Brunei Darussalam</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="CV">Cape Verde</option>
                  <option value="KY">Cayman Islands</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CX">Christmas Island</option>
                  <option value="CC">Cocos (Keeling) Islands</option>
                  <option value="CO">Colombia</option>
                  <option value="KM">Comoros</option>
                  <option value="CG">Congo</option>
                  <option value="CD">Congo, the Democratic Republic of the</option>
                  <option value="CK">Cook Islands</option>
                  <option value="CR">Costa Rica</option>
                  <option value="CI">Côte d'Ivoire</option>
                  <option value="HR">Croatia</option>
                  <option value="CU">Cuba</option>
                  <option value="CW">Curaçao</option>
                  <option value="CY">Cyprus</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FK">Falkland Islands (Malvinas)</option>
                  <option value="FO">Faroe Islands</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="GF">French Guiana</option>
                  <option value="PF">French Polynesia</option>
                  <option value="TF">French Southern Territories</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GR">Greece</option>
                  <option value="GL">Greenland</option>
                  <option value="GD">Grenada</option>
                  <option value="GP">Guadeloupe</option>
                  <option value="GU">Guam</option>
                  <option value="GT">Guatemala</option>
                  <option value="GG">Guernsey</option>
                  <option value="GN">Guinea</option>
                  <option value="GW">Guinea-Bissau</option>
                  <option value="GY">Guyana</option>
                  <option value="HT">Haiti</option>
                  <option value="HM">Heard Island and McDonald Islands</option>
                  <option value="VA">Holy See (Vatican City State)</option>
                  <option value="HN">Honduras</option>
                  <option value="HK">Hong Kong</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IR">Iran, Islamic Republic of</option>
                  <option value="IQ">Iraq</option>
                  <option value="IE">Ireland</option>
                  <option value="IM">Isle of Man</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JE">Jersey</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="KP">Korea, Democratic People's Republic of</option>
                  <option value="KR">Korea, Republic of</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Lao People's Democratic Republic</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MO">Macao</option>
                  <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                  <option value="MG">Madagascar</option>
                  <option value="MW">Malawi</option>
                  <option value="MY">Malaysia</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MQ">Martinique</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="YT">Mayotte</option>
                  <option value="MX">Mexico</option>
                  <option value="FM">Micronesia, Federated States of</option>
                  <option value="MD">Moldova, Republic of</option>
                  <option value="MC">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="ME">Montenegro</option>
                  <option value="MS">Montserrat</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NL">Netherlands</option>
                  <option value="NC">New Caledonia</option>
                  <option value="NZ">New Zealand</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Niger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NU">Niue</option>
                  <option value="NF">Norfolk Island</option>
                  <option value="MP">Northern Mariana Islands</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PW">Palau</option>
                  <option value="PS">Palestinian Territory, Occupied</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH" selected="selected">Philippines</option>
                  <option value="PN">Pitcairn</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="QA">Qatar</option>
                  <option value="RE">Réunion</option>
                  <option value="RO">Romania</option>
                  <option value="RU">Russian Federation</option>
                  <option value="RW">Rwanda</option>
                  <option value="BL">Saint Barthélemy</option>
                  <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                  <option value="KN">Saint Kitts and Nevis</option>
                  <option value="LC">Saint Lucia</option>
                  <option value="MF">Saint Martin (French part)</option>
                  <option value="PM">Saint Pierre and Miquelon</option>
                  <option value="VC">Saint Vincent and the Grenadines</option>
                  <option value="WS">Samoa</option>
                  <option value="SM">San Marino</option>
                  <option value="ST">Sao Tome and Principe</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="SN">Senegal</option>
                  <option value="RS">Serbia</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SX">Sint Maarten (Dutch part)</option>
                  <option value="SK">Slovakia</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="SO">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="GS">South Georgia and the South Sandwich Islands</option>
                  <option value="SS">South Sudan</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SJ">Svalbard and Jan Mayen</option>
                  <option value="SZ">Swaziland</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="SY">Syrian Arab Republic</option>
                  <option value="TW">Taiwan, Province of China</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania, United Republic of</option>
                  <option value="TH">Thailand</option>
                  <option value="TL">Timor-Leste</option>
                  <option value="TG">Togo</option>
                  <option value="TK">Tokelau</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad and Tobago</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TM">Turkmenistan</option>
                  <option value="TC">Turks and Caicos Islands</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom</option>
                  <option value="US">United States</option>
                  <option value="UM">United States Minor Outlying Islands</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VE">Venezuela, Bolivarian Republic of</option>
                  <option value="VN">Viet Nam</option>
                  <option value="VG">Virgin Islands, British</option>
                  <option value="VI">Virgin Islands, U.S.</option>
                  <option value="WF">Wallis and Futuna</option>
                  <option value="EH">Western Sahara</option>
                  <option value="YE">Yemen</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option>
                </select>
              </p>

              <div class="row row-10">
                <div class="col-sm-6">
                  <p class="form-row form-row-wide">
                    <input type="text" class="input-text" value placeholder="State / county" name="calc_shipping_state" id="calc_shipping_state">
                  </p>
                </div>
                <div class="col-sm-6">
                  <p class="form-row form-row-wide">
                    <input type="text" class="input-text" value placeholder="Postcode" name="calc_shipping_postcode" id="calc_shipping_postcode">
                  </p>
                </div>
              </div>

              <p>
                <input type="submit" name="calc_shipping" value="Update Totals" class="btn btn-lg btn-stroke mt-10 mb-mdm-40">
              </p>                
            </div> <!-- end col shipping calculator -->

            <div class="col-md-6">
              <div class="cart_totals">
                <h2 class="heading relative bottom-line full-grey uppercase mb-30">Cart Totals</h2>

                <table class="table shop_table">
                  <tbody>
                    <tr class="cart-subtotal">
                      <th>Cart Subtotal</th>
                      <td>
                        <span class="amount">$1490.00</span>
                      </td>
                    </tr>
                    <tr class="shipping">
                      <th>Shipping</th>
                      <td>
                        <span>Free Shipping</span>
                      </td>
                    </tr>
                    <tr class="order-total">
                      <th>Order Total</th>
                      <td>
                        <strong><span class="amount">$1490.00</span></strong>
                      </td>
                    </tr>
                  </tbody>
                </table>

              </div>
            </div> <!-- end col cart totals -->

          </div> <!-- end row -->     

          
        </div> <!-- end container -->
      </section> <!-- end cart -->


      <!-- Newsletter -->
      <section class="newsletter" id="subscribe">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h4>Get the latest updates</h4>
              <form class="relative newsletter-form">
                <input type="email" class="newsletter-input" placeholder="Enter your email">
                <input type="submit" class="btn btn-lg btn-dark newsletter-submit" value="Subscribe">
              </form>
            </div>
          </div>
        </div>       
      </section>

            <!-- footer section start -->
            <?php include('includes/footer.php'); ?>
      <!-- footer section end -->
 <!-- social icons start -->
 <div class="social-icon">
        <div class="facebook-icon">
          <a href="https://www.facebook.com/solmaxsolution" target="_blank" title="Follow us on Facebook">
            <i class="fab fa-facebook fa-2x"></i>
          </a>
        </div>

        <div class="linkedin-icon">
          <a href="https://www.linkedin.com/company/solmaxsolution" target="_blank" title="Follow us on LinkedIn">
            <i class="fab fa-linkedin fa-2x"></i>
          </a>
        </div>

        <div class="instagram-icon">
          <a href="https://www.instagram.com/solmaxsolution" target="_blank" title="Follow us on Instagram">
            <i class="fab fa-instagram fa-2x"></i>
          </a>
        </div>

        <div class="twitter-icon">
          <a href="https://twitter.com/solmaxsolution" target="_blank" title="Follow us on Twitter">
            <i class="fa-brands fa-x-twitter fa-2x"></i>
          </a>
        </div>

        <div class="whatsapp-icon">
          <a href="https://wa.me/+919998440048?text=Hello,%20Sir" target="_blank" title="Chat with us on WhatsApp">
            <i class="fab fa-whatsapp fa-2x"></i>
          </a>
        </div>
      </div>
      <!-- social icons end -->

      <div id="back-to-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
      </div>

    </div> <!-- end content wrapper -->
  </main> <!-- end main wrapper -->

  <!-- jQuery Scripts -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>