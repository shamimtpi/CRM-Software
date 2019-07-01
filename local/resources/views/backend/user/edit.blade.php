
@extends('layouts.backend')

@section('contents')

<!-- page content -->
      <div class="right_col" role="main">
        <div class="x_panel">
          <div class="row">
          <div class="col-md-6 col-md-offset-3">
          @if (Session('status'))
               <div class="alert alert-success text-center">
                <strong>User successfully</strong>
              </div>
          @endif
            </div>
            </div>
          <form class="form-horizontal form-label-left" action="{{route('siteuser.update',$edit->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
              <h3 class="text-center">Billing Address</h3>
            <!-- name -->
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="name" value="{{$edit->name}}"  class="form-control col-md-7 col-xs-12">
              @if($errors->has('name'))
                <div class="error">{{$errors->first('name')}}</div>
              @endif
            </div>
          </div>
            <!-- company -->
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Referd By <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="refered_by" value="{{$edit->refered_by}}" class="form-control col-md-7 col-xs-12">
              @if($errors->has('refered_by'))
                <div class="error">{{$errors->first('refered_by')}}</div>
              @endif
            </div>
          </div>

            <!-- phone -->
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Phone <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="phone" value="{{$edit->phone}}" class="form-control col-md-7 col-xs-12">
              @if($errors->has('phone'))
                <div class="error">{{$errors->first('phone')}}</div>
              @endif
            </div>
          </div>

            <!-- Email -->
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="email" value="{{$edit->email}}" class="form-control col-md-7 col-xs-12">
              @if($errors->has('email'))
                <div class="error">{{$errors->first('email')}}</div>
              @endif
            </div>
          </div>

          <!-- password -->
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Update Password <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="password" id="passowrd" name="password" value="{{$edit->password}}" class="form-control col-md-7 col-xs-12">
              @if($errors->has('password'))
                <div class="error">{{$errors->first('password')}}</div>
              @endif
            </div>
          </div>




            <!-- address -->
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="address" value="{{$edit->address}}" class="form-control col-md-7 col-xs-12">
              @if($errors->has('address'))
                <div class="error">{{$errors->first('address')}}</div>
              @endif
            </div>
          </div>

            <!-- address -->
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="city" value="{{$edit->city}}" class="form-control col-md-7 col-xs-12">
              @if($errors->has('city'))
                <div class="error">{{$errors->first('city')}}</div>
              @endif
            </div>
          </div>

          {{-- <!-- country -->
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Country</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control" name="country">
                <option value="" {{$edit->country=='' ? 'selected' : ''}}>Select Country</option>
                <option value="United States"{{$edit->country=='United States' ? 'selected' : ''}} >United States</option>
                <option value="United Kingdom" {{$edit->country=='United Kingdom' ? 'selected' : ''}}>United Kingdom</option>
                <option value="Afghanistan" {{$edit->country=='Afghanistan' ? 'selected' : ''}}>Afghanistan</option>
                <option value="Albania" {{$edit->country=='Albania' ? 'selected' : ''}}>Albania</option>
                <option value="Algeria" {{$edit->country=='Algeria' ? 'selected' : ''}}>Algeria</option>
                <option value="American Samoa" {{$edit->country=='American Samoa' ? 'selected' : ''}}>American Samoa</option>
                <option value="Andorra" {{$edit->country=='Andorra' ? 'selected' : ''}}>Andorra</option>
                <option value="Angola" {{$edit->country=='Angola' ? 'selected' : ''}}>Angola</option>
                <option value="Anguilla" {{$edit->country=='Anguilla' ? 'selected' : ''}}>Anguilla</option>
                <option value="Antarctica" {{$edit->country=='Antarctica' ? 'selected' : ''}}>Antarctica</option>
                <option value="Antigua and Barbuda" {{$edit->country=='Antigua and Barbuda' ? 'selected' : ''}}>Antigua and Barbuda</option>
                <option value="Argentina" {{$edit->country=='Argentina' ? 'selected' : ''}}>Argentina</option>
                <option value="Armenia" {{$edit->country=='Armenia' ? 'selected' : ''}}>Armenia</option>
                <option value="Aruba" {{$edit->country=='Aruba' ? 'selected' : ''}}>Aruba</option>
                <option value="Australia" {{$edit->country=='Australia' ? 'selected' : ''}}>Australia</option>
                <option value="Austria" {{$edit->country=='Austria' ? 'selected' : ''}}>Austria</option>
                <option value="Azerbaijan" {{$edit->country=='Azerbaijan' ? 'selected' : ''}}>Azerbaijan</option>
                <option value="Bahamas" {{$edit->country=='Bahamas' ? 'selected' : ''}}>Bahamas</option>
                <option value="Bahrain" {{$edit->country=='Bahrain' ? 'selected' : ''}}>Bahrain</option>
                <option value="Bangladesh" {{$edit->country=='Bangladesh' ? 'selected' : ''}}>Bangladesh</option>
                <option value="Barbados" {{$edit->country=='Barbados' ? 'selected' : ''}}>Barbados</option>
                <option value="Belarus" {{$edit->country=='Belarus' ? 'selected' : ''}}>Belarus</option>
                <option value="Belgium" {{$edit->country=='Belgium' ? 'selected' : ''}}>Belgium</option>
                <option value="Belize" {{$edit->country=='Belize' ? 'selected' : ''}}>Belize</option>
                <option value="Benin" {{$edit->country=='Benin' ? 'selected' : ''}}>Benin</option>
                <option value="Bermuda" {{$edit->country=='Bermuda' ? 'selected' : ''}}>Bermuda</option>
                <option value="Bhutan" {{$edit->country=='Bhutan' ? 'selected' : ''}}>Bhutan</option>
                <option value="Bolivia" {{$edit->country=='Bolivia' ? 'selected' : ''}}>Bolivia</option>
                <option value="Bosnia and Herzegovina" {{$edit->country=='Bosnia and Herzegovina' ? 'selected' : ''}}>Bosnia and Herzegovina</option>
                <option value="Botswana" {{$edit->country=='Botswana' ? 'selected' : ''}}>Botswana</option>
                <option value="Bouvet Island" {{$edit->country=='Bouvet Island' ? 'selected' : ''}}>Bouvet Island</option>
                <option value="Brazil" {{$edit->country=='Brazil' ? 'selected' : ''}}>Brazil</option>
                <option value="British Indian Ocean Territory" {{$edit->country=='British Indian Ocean Territory' ? 'selected' : ''}}>British Indian Ocean Territory</option>
                <option value="Brunei Darussalam" {{$edit->country=='Brunei Darussalam' ? 'selected' : ''}}>Brunei Darussalam</option>
                <option value="Bulgaria" {{$edit->country=='Bulgaria' ? 'selected' : ''}}>Bulgaria</option>
                <option value="Burkina Faso" {{$edit->country=='Burkina Faso' ? 'selected' : ''}}>Burkina Faso</option>
                <option value="Burundi" {{$edit->country=='Burundi' ? 'selected' : ''}}>Burundi</option>
                <option value="Cambodia" {{$edit->country=='Cambodia' ? 'selected' : ''}}>Cambodia</option>
                <option value="Cameroon" {{$edit->country=='Cameroon' ? 'selected' : ''}}>Cameroon</option>
                <option value="Canada" {{$edit->country=='Canada' ? 'selected' : ''}}>Canada</option>
                <option value="Cape Verde" {{$edit->country=='Cape Verde' ? 'selected' : ''}}>Cape Verde</option>
                <option value="Cayman Islands" {{$edit->country=='Cayman Islands' ? 'selected' : ''}}>Cayman Islands</option>
                <option value="Central African Republic" {{$edit->country=='Central African Republic' ? 'selected' : ''}}>Central African Republic</option>
                <option value="Chad" {{$edit->country=='Chad' ? 'selected' : ''}}>Chad</option>
                <option value="Chile" {{$edit->country=='Chile' ? 'selected' : ''}}>Chile</option>
                <option value="China" {{$edit->country=='China' ? 'selected' : ''}}>China</option>
                <option value="Christmas Island" {{$edit->country=='Christmas Island' ? 'selected' : ''}}>Christmas Island</option>
                <option value="Cocos (Keeling) Islands" {{$edit->country=='Cocos (Keeling) Islands' ? 'selected' : ''}}>Cocos (Keeling) Islands</option>
                <option value="Colombia" {{$edit->country=='Colombia' ? 'selected' : ''}}>Colombia</option>
                <option value="Comoros" {{$edit->country=='Comoros' ? 'selected' : ''}}>Comoros</option>
                <option value="Congo" {{$edit->country=='Congo' ? 'selected' : ''}}>Congo</option>
                <option value="Congo, The Democratic Republic of The" {{$edit->country=='Congo, The Democratic Republic of The' ? 'selected' : ''}}>Congo, The Democratic Republic of The</option>
                <option value="Cook Islands" {{$edit->country=='Cook Islands' ? 'selected' : ''}}>Cook Islands</option>
                <option value="Costa Rica" {{$edit->country=='Costa Rica' ? 'selected' : ''}}>Costa Rica</option>
                <option value="Cote D'ivoire" {{$edit->country=='Cote Divoire' ? 'selected' : ''}}>Cote D'ivoire</option>
                <option value="Croatia" {{$edit->country=='Croatia' ? 'selected' : ''}}>Croatia</option>
                <option value="Cuba" {{$edit->country=='Cuba' ? 'selected' : ''}}>Cuba</option>
                <option value="Cyprus" {{$edit->country=='Cyprus' ? 'selected' : ''}}>Cyprus</option>
                <option value="Czech Republic" {{$edit->country=='Czech Republic' ? 'selected' : ''}}>Czech Republic</option>
                <option value="Denmark" {{$edit->country=='Denmark' ? 'selected' : ''}}>Denmark</option>
                <option value="Djibouti" {{$edit->country=='Djibouti' ? 'selected' : ''}}>Djibouti</option>
                <option value="Dominica" {{$edit->country=='Dominica' ? 'selected' : ''}}>Dominica</option>
                <option value="Dominican Republic" {{$edit->country=='Dominican Republic' ? 'selected' : ''}}>Dominican Republic</option>
                <option value="Ecuador" {{$edit->country=='Ecuador' ? 'selected' : ''}}>Ecuador</option>
                <option value="Egypt" {{$edit->country=='Egypt' ? 'selected' : ''}}>Egypt</option>
                <option value="El Salvador" {{$edit->country=='El Salvadors' ? 'selected' : ''}}>El Salvador</option>
                <option value="Equatorial Guinea" {{$edit->country=='Equatorial Guinea' ? 'selected' : ''}}>Equatorial Guinea</option>
                <option value="Eritrea" {{$edit->country=='Eritrea' ? 'selected' : ''}}>Eritrea</option>
                <option value="Estonia" {{$edit->country=='Estonia' ? 'selected' : ''}}>Estonia</option>
                <option value="Ethiopia" {{$edit->country=='Ethiopia' ? 'selected' : ''}}>Ethiopia</option>
                <option value="Falkland Islands (Malvinas)" {{$edit->country=='Falkland Islands (Malvinas)' ? 'selected' : ''}}>Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands" {{$edit->country=='Faroe Islands' ? 'selected' : ''}}>Faroe Islands</option>
                <option value="Fiji" {{$edit->country=='Fiji' ? 'selected' : ''}}>Fiji</option>
                <option value="Finland" {{$edit->country=='Finland' ? 'selected' : ''}}>Finland</option>
                <option value="France" {{$edit->country=='France' ? 'selected' : ''}}>France</option>
                <option value="French Guiana" {{$edit->country=='French Guiana' ? 'selected' : ''}}>French Guiana</option>
                <option value="French Polynesia" {{$edit->country=='French Polynesia' ? 'selected' : ''}}>French Polynesia</option>
                <option value="French Southern Territories" {{$edit->country=='French Southern Territories' ? 'selected' : ''}}>French Southern Territories</option>
                <option value="Gabon" {{$edit->country=='Gabon' ? 'selected' : ''}}>Gabon</option>
                <option value="Gambia" {{$edit->country=='Gambia' ? 'selected' : ''}}>Gambia</option>
                <option value="Georgia" {{$edit->country=='Georgia' ? 'selected' : ''}}>Georgia</option>
                <option value="Germany" {{$edit->country=='Germany' ? 'selected' : ''}}>Germany</option>
                <option value="Ghana" {{$edit->country=='Ghana' ? 'selected' : ''}}>Ghana</option>
                <option value="Gibraltar" {{$edit->country=='Gibraltar' ? 'selected' : ''}}>Gibraltar</option>
                <option value="Greece" {{$edit->country=='Greece' ? 'selected' : ''}}>Greece</option>
                <option value="Greenland" {{$edit->country=='Greenland' ? 'selected' : ''}}>Greenland</option>
                <option value="Grenada" {{$edit->country=='Grenada' ? 'selected' : ''}}>Grenada</option>
                <option value="Guadeloupe" {{$edit->country=='Guadeloupe' ? 'selected' : ''}}>Guadeloupe</option>
                <option value="Guam" {{$edit->country=='Guam' ? 'selected' : ''}}>Guam</option>
                <option value="Guatemala" {{$edit->country=='Guatemala' ? 'selected' : ''}}>Guatemala</option>
                <option value="Guinea" {{$edit->country=='Guinea' ? 'selected' : ''}}>Guinea</option>
                <option value="Guinea-bissau" {{$edit->country=='Guinea-bissau' ? 'selected' : ''}}>Guinea-bissau</option>
                <option value="Guyana" {{$edit->country=='Guyana' ? 'selected' : ''}}>Guyana</option>
                <option value="Haiti" {{$edit->country=='Haitis' ? 'selected' : ''}}>Haiti</option>
                <option value="Heard Island and Mcdonald Islands" {{$edit->country=='Heard Island and Mcdonald Islands' ? 'selected' : ''}}>Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)" {{$edit->country=='Holy See (Vatican City State)s' ? 'selected' : ''}}>Holy See (Vatican City State)</option>
                <option value="Honduras" {{$edit->country=='Honduras' ? 'selected' : ''}}>Honduras</option>
                <option value="Hong Kong" {{$edit->country=='Hong Kong' ? 'selected' : ''}}>Hong Kong</option>
                <option value="Hungary" {{$edit->country=='Hungary' ? 'selected' : ''}}>Hungary</option>
                <option value="Iceland" {{$edit->country=='Iceland' ? 'selected' : ''}}>Iceland</option>
                <option value="India" {{$edit->country=='India' ? 'selected' : ''}}>India</option>
                <option value="Indonesia" {{$edit->country=='Indonesia' ? 'selected' : ''}}>Indonesia</option>
                <option value="Iran, Islamic Republic of" {{$edit->country=='Iran, Islamic Republic of' ? 'selected' : ''}}>Iran, Islamic Republic of</option>
                <option value="Iraq" {{$edit->country=='Iraq' ? 'selected' : ''}}>Iraq</option>
                <option value="Ireland" {{$edit->country=='Ireland' ? 'selected' : ''}}>Ireland</option>
                <option value="Israel" {{$edit->country=='Israel' ? 'selected' : ''}}>Israel</option>
                <option value="Italy" {{$edit->country=='Italy' ? 'selected' : ''}}>Italy</option>
                <option value="Jamaica" {{$edit->country=='Jamaica' ? 'selected' : ''}}>Jamaica</option>
                <option value="Japan" {{$edit->country=='Japan' ? 'selected' : ''}}>Japan</option>
                <option value="Jordan" {{$edit->country=='Jordan' ? 'selected' : ''}}>Jordan</option>
                <option value="Kazakhstan" {{$edit->country=='Kazakhstan' ? 'selected' : ''}}>Kazakhstan</option>
                <option value="Kenya" {{$edit->country=='Kenya' ? 'selected' : ''}}>Kenya</option>
                <option value="Kiribati" {{$edit->country=='Kiribati' ? 'selected' : ''}}>Kiribati</option>
                <option value="Korea, Democratic People's Republic of" {{$edit->country=='Korea, Democratic Peoples Republic of' ? 'selected' : ''}}>Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of" {{$edit->country=='Korea, Republic of' ? 'selected' : ''}}>Korea, Republic of</option>
                <option value="Kuwait" {{$edit->country=='Kuwait' ? 'selected' : ''}}>Kuwait</option>
                <option value="Kyrgyzstan" {{$edit->country=='Kyrgyzstan' ? 'selected' : ''}}>Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic" {{$edit->country=='Lao Peoples Democratic Republic' ? 'selected' : ''}}>Lao People's Democratic Republic</option>
                <option value="Latvia" {{$edit->country=='Latvia' ? 'selected' : ''}}>Latvia</option>
                <option value="Lebanon" {{$edit->country=='Lebanon' ? 'selected' : ''}}>Lebanon</option>
                <option value="Lesotho" {{$edit->country=='Lesotho' ? 'selected' : ''}}>Lesotho</option>
                <option value="Liberia" {{$edit->country=='Liberia' ? 'selected' : ''}}>Liberia</option>
                <option value="Libyan Arab Jamahiriya" {{$edit->country=='Libyan Arab Jamahiriya' ? 'selected' : ''}}>Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein" {{$edit->country=='Liechtenstein' ? 'selected' : ''}}>Liechtenstein</option>
                <option value="Lithuania" {{$edit->country=='Lithuania' ? 'selected' : ''}}>Lithuania</option>
                <option value="Luxembourg" {{$edit->country=='Luxembourg' ? 'selected' : ''}}>Luxembourg</option>
                <option value="Macao" {{$edit->country=='Macao' ? 'selected' : ''}}>Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of" {{$edit->country=='Macedonia, The Former Yugoslav Republic of' ? 'selected' : ''}}>Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar" {{$edit->country=='Madagascar' ? 'selected' : ''}}>Madagascar</option>
                <option value="Malawi" {{$edit->country=='Malawi' ? 'selected' : ''}}>Malawi</option>
                <option value="Malaysia" {{$edit->country=='Malaysia' ? 'selected' : ''}}>Malaysia</option>
                <option value="Maldives" {{$edit->country=='Maldives' ? 'selected' : ''}}>Maldives</option>
                <option value="Mali" {{$edit->country=='Mali' ? 'selected' : ''}}>Mali</option>
                <option value="Malta" {{$edit->country=='Malta' ? 'selected' : ''}}>Malta</option>
                <option value="Marshall Islands" {{$edit->country=='Marshall Islands' ? 'selected' : ''}}>Marshall Islands</option>
                <option value="Martinique" {{$edit->country=='Martinique' ? 'selected' : ''}}>Martinique</option>
                <option value="Mauritania" {{$edit->country=='Mauritania' ? 'selected' : ''}}>Mauritania</option>
                <option value="Mauritius" {{$edit->country=='Mauritius' ? 'selected' : ''}}>Mauritius</option>
                <option value="Mayotte" {{$edit->country=='Mayotte' ? 'selected' : ''}}>Mayotte</option>
                <option value="Mexico" {{$edit->country=='Mexico' ? 'selected' : ''}}>Mexico</option>
                <option value="Micronesia, Federated States of" {{$edit->country=='Micronesia, Federated States of' ? 'selected' : ''}}>Micronesia, Federated States of</option>
                <option value="Moldova, Republic of" {{$edit->country=='Moldova, Republic of' ? 'selected' : ''}}>Moldova, Republic of</option>
                <option value="Monaco" {{$edit->country=='Monaco' ? 'selected' : ''}}>Monaco</option>
                <option value="Mongolia" {{$edit->country=='Mongolia' ? 'selected' : ''}}>Mongolia</option>
                <option value="Montserrat" {{$edit->country=='Montserrat' ? 'selected' : ''}}>Montserrat</option>
                <option value="Morocco" {{$edit->country=='Morocco' ? 'selected' : ''}}>Morocco</option>
                <option value="Mozambique" {{$edit->country=='Mozambique' ? 'selected' : ''}}>Mozambique</option>
                <option value="Myanmar" {{$edit->country=='Myanmar' ? 'selected' : ''}}>Myanmar</option>
                <option value="Namibia" {{$edit->country=='Namibia' ? 'selected' : ''}}>Namibia</option>
                <option value="Nauru" {{$edit->country=='Nauru' ? 'selected' : ''}}>Nauru</option>
                <option value="Nepal" {{$edit->country=='Nepal' ? 'selected' : ''}}>Nepal</option>
                <option value="Netherlands" {{$edit->country=='Netherlands' ? 'selected' : ''}}>Netherlands</option>
                <option value="Netherlands Antilles" {{$edit->country=='Netherlands Antilles' ? 'selected' : ''}}>Netherlands Antilles</option>
                <option value="New Caledonia" {{$edit->country=='New Caledonia' ? 'selected' : ''}}>New Caledonia</option>
                <option value="New Zealand" {{$edit->country=='New Zealand' ? 'selected' : ''}}>New Zealand</option>
                <option value="Nicaragua" {{$edit->country=='Nicaragua' ? 'selected' : ''}}>Nicaragua</option>
                <option value="Niger" {{$edit->country=='Niger' ? 'selected' : ''}}>Niger</option>
                <option value="Nigeria" {{$edit->country=='Nigeria' ? 'selected' : ''}}>Nigeria</option>
                <option value="Niue" {{$edit->country=='Niue' ? 'selected' : ''}}>Niue</option>
                <option value="Norfolk Island" {{$edit->country=='Norfolk Island' ? 'selected' : ''}}>Norfolk Island</option>
                <option value="Northern Mariana Islands" {{$edit->country=='Northern Mariana Islands' ? 'selected' : ''}}>Northern Mariana Islands</option>
                <option value="Norway" {{$edit->country=='Norway' ? 'selected' : ''}}>Norway</option>
                <option value="Oman" {{$edit->country=='Oman' ? 'selected' : ''}}>Oman</option>
                <option value="Pakistan" {{$edit->country=='Pakistan' ? 'selected' : ''}}>Pakistan</option>
                <option value="Palau" {{$edit->country=='Palau' ? 'selected' : ''}}>Palau</option>
                <option value="Palestinian Territory, Occupied" {{$edit->country=='Palestinian Territory, Occupied' ? 'selected' : ''}}>Palestinian Territory, Occupied</option>
                <option value="Panama" {{$edit->country=='Panama' ? 'selected' : ''}}>Panama</option>
                <option value="Papua New Guinea" {{$edit->country=='Papua New Guinea' ? 'selected' : ''}}>Papua New Guinea</option>
                <option value="Paraguay" {{$edit->country=='Paraguay' ? 'selected' : ''}}>Paraguay</option>
                <option value="Peru" {{$edit->country=='Peru' ? 'selected' : ''}}>Peru</option>
                <option value="Philippines" {{$edit->country=='Philippines' ? 'selected' : ''}}>Philippines</option>
                <option value="Pitcairn" {{$edit->country=='Pitcairn' ? 'selected' : ''}}>Pitcairn</option>
                <option value="Poland" {{$edit->country=='Poland' ? 'selected' : ''}}>Poland</option>
                <option value="Portugal" {{$edit->country=='Portugal' ? 'selected' : ''}}>Portugal</option>
                <option value="Puerto Rico" {{$edit->country=='Puerto Rico' ? 'selected' : ''}}>Puerto Rico</option>
                <option value="Qatar" {{$edit->country=='Qatar' ? 'selected' : ''}}>Qatar</option>
                <option value="Reunion" {{$edit->country=='Reunion' ? 'selected' : ''}}>Reunion</option>
                <option value="Romania" {{$edit->country=='Romania' ? 'selected' : ''}}>Romania</option>
                <option value="Russian Federation" {{$edit->country=='Russian Federation' ? 'selected' : ''}}>Russian Federation</option>
                <option value="Rwanda" {{$edit->country=='Rwanda' ? 'selected' : ''}}>Rwanda</option>
                <option value="Saint Helena" {{$edit->country=='Saint Helena' ? 'selected' : ''}}>Saint Helena</option>
                <option value="Saint Kitts and Nevis" {{$edit->country=='Saint Kitts and Nevis' ? 'selected' : ''}}>Saint Kitts and Nevis</option>
                <option value="Saint Lucia" {{$edit->country=='Saint Lucia' ? 'selected' : ''}}>Saint Lucia</option>
                <option value="Saint Pierre and Miquelon" {{$edit->country=='Saint Pierre and Miquelon' ? 'selected' : ''}}>Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines" {{$edit->country=='Saint Vincent and The Grenadines' ? 'selected' : ''}}>Saint Vincent and The Grenadines</option>
                <option value="Samoa" {{$edit->country=='Samoa' ? 'selected' : ''}}>Samoa</option>
                <option value="San Marino" {{$edit->country=='San Marino' ? 'selected' : ''}}>San Marino</option>
                <option value="Sao Tome and Principe" {{$edit->country=='Sao Tome and Principe' ? 'selected' : ''}}>Sao Tome and Principe</option>
                <option value="Saudi Arabia" {{$edit->country=='Saudi Arabia' ? 'selected' : ''}}>Saudi Arabia</option>
                <option value="Senegal" {{$edit->country=='Senegal' ? 'selected' : ''}}>Senegal</option>
                <option value="Serbia and Montenegro" {{$edit->country=='Serbia and Montenegro' ? 'selected' : ''}}>Serbia and Montenegro</option>
                <option value="Seychelles" {{$edit->country=='Seychelles' ? 'selected' : ''}}>Seychelles</option>
                <option value="Sierra Leone" {{$edit->country=='Sierra LeoneSierra Leone' ? 'selected' : ''}}>Sierra Leone</option>
                <option value="Singapore" {{$edit->country=='Singapore' ? 'selected' : ''}}>Singapore</option>
                <option value="Slovakia" {{$edit->country=='Slovakia' ? 'selected' : ''}}>Slovakia</option>
                <option value="Slovenia" {{$edit->country=='Slovenia' ? 'selected' : ''}}>Slovenia</option>
                <option value="Solomon Islands" {{$edit->country=='Solomon Islands' ? 'selected' : ''}}>Solomon Islands</option>
                <option value="Somalia" {{$edit->country=='Somalia' ? 'selected' : ''}}>Somalia</option>
                <option value="South Africa" {{$edit->country=='Africa' ? 'selected' : ''}}>South Africa</option>
                <option value="South Georgia and The South Sandwich Islands" {{$edit->country=='South Georgia and The South Sandwich Islands' ? 'selected' : ''}}>South Georgia and The South Sandwich Islands</option>
                <option value="Spain" {{$edit->country=='Spain' ? 'selected' : ''}}>Spain</option>
                <option value="Sri Lanka" {{$edit->country=='Sri Lanka' ? 'selected' : ''}}>Sri Lanka</option>
                <option value="Sudan" {{$edit->country=='Sudan' ? 'selected' : ''}}>Sudan</option>
                <option value="Suriname" {{$edit->country=='Suriname' ? 'selected' : ''}}>Suriname</option>
                <option value="Svalbard and Jan Mayen" {{$edit->country=='Svalbard and Jan Mayen' ? 'selected' : ''}}>Svalbard and Jan Mayen</option>
                <option value="Swaziland" {{$edit->country=='Swaziland' ? 'selected' : ''}}>Swaziland</option>
                <option value="Sweden" {{$edit->country=='Sweden' ? 'selected' : ''}}>Sweden</option>
                <option value="Switzerland" {{$edit->country=='Switzerland' ? 'selected' : ''}}>Switzerland</option>
                <option value="Syrian Arab Republic" {{$edit->country=='Syrian Arab Republic' ? 'selected' : ''}}>Syrian Arab Republic</option>
                <option value="Taiwan, Province of China" {{$edit->country=='Taiwan, Province of China' ? 'selected' : ''}}>Taiwan, Province of China</option>
                <option value="Tajikistan" {{$edit->country=='Tajikistan' ? 'selected' : ''}}>Tajikistan</option>
                <option value="Tanzania, United Republic of" {{$edit->country=='Tanzania, United Republic of' ? 'selected' : ''}}>Tanzania, United Republic of</option>
                <option value="Thailand" {{$edit->country=='Thailand' ? 'selected' : ''}}>Thailand</option>
                <option value="Timor-leste" {{$edit->country=='Timor-leste' ? 'selected' : ''}}>Timor-leste</option>
                <option value="Togo" {{$edit->country=='Togo' ? 'selected' : ''}}>Togo</option>
                <option value="Tokelau" {{$edit->country=='Tokelau' ? 'selected' : ''}}>Tokelau</option>
                <option value="Tonga" {{$edit->country=='Tonga' ? 'selected' : ''}}>Tonga</option>
                <option value="Trinidad and Tobago" {{$edit->country=='Trinidad and Tobago' ? 'selected' : ''}}>Trinidad and Tobago</option>
                <option value="Tunisia" {{$edit->country=='Tunisia' ? 'selected' : ''}}>Tunisia</option>
                <option value="Turkey" {{$edit->country=='Turkey' ? 'selected' : ''}}>Turkey</option>
                <option value="Turkmenistan" {{$edit->country=='Turkmenistan' ? 'selected' : ''}}>Turkmenistan</option>
                <option value="Turks and Caicos Islands" {{$edit->country=='Turks and Caicos Islands' ? 'selected' : ''}}>Turks and Caicos Islands</option>
                <option value="Tuvalu" {{$edit->country=='Tuvalu' ? 'selected' : ''}}>Tuvalu</option>
                <option value="Uganda" {{$edit->country=='Uganda' ? 'selected' : ''}}>Uganda</option>
                <option value="Ukraine" {{$edit->country=='Ukraine' ? 'selected' : ''}}>Ukraine</option>
                <option value="United Arab Emirates" {{$edit->country=='United Arab Emirates' ? 'selected' : ''}}>United Arab Emirates</option>
                <option value="United States Minor Outlying Islands" {{$edit->country=='United States Minor Outlying Islands' ? 'selected' : ''}}>United States Minor Outlying Islands</option>
                <option value="Uruguay" {{$edit->country=='Uruguay' ? 'selected' : ''}}>Uruguay</option>
                <option value="Uzbekistan" {{$edit->country=='Uzbekistan' ? 'selected' : ''}}>Uzbekistan</option>
                <option value="Vanuatu" {{$edit->country=='Vanuatu' ? 'selected' : ''}}>Vanuatu</option>
                <option value="Venezuela" {{$edit->country=='Venezuela' ? 'selected' : ''}}>Venezuela</option>
                <option value="Viet Nam" {{$edit->country=='Viet Nam' ? 'selected' : ''}}>Viet Nam</option>
                <option value="Virgin Islands, British" {{$edit->country=='Virgin Islands, British' ? 'selected' : ''}}>Virgin Islands, British</option>
                <option value="Virgin Islands, U.S." {{$edit->country=='Virgin Islands, U.S.' ? 'selected' : ''}}>Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna" {{$edit->country=='Wallis and Futuna' ? 'selected' : ''}}>Wallis and Futuna</option>
                <option value="Western Sahara" {{$edit->country=='Western Sahara' ? 'selected' : ''}}>Western Sahara</option>
                <option value="Yemen" {{$edit->country=='Yemen' ? 'selected' : ''}}>Yemen</option>
                <option value="Zambia" {{$edit->country=='Zambia' ? 'selected' : ''}}>Zambia</option>
                <option value="Zimbabwe" {{$edit->country=='Zimbabwe' ? 'selected' : ''}}>Zimbabwe</option>
              </select>
              @if($errors->has('country'))
                <div class="error">{{$errors->first('country')}}</div>
              @endif
            </div>
          </div>

 --}}
       <!-- country -->
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">Message <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea  name="note" class="form-control col-md-7 col-xs-12">{{$edit->note}}</textarea>
              @if($errors->has('note'))
                <div class="error">{{$errors->first('note')}}</div>
              @endif
            </div>
          </div>

            <!-- country -->
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">Zip Code <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="post" value="{{$edit->post}}" class="form-control col-md-7 col-xs-12">
              @if($errors->has('post'))
                <div class="error">{{$errors->first('post')}}</div>
              @endif
            </div>
          </div>



          <!-- profile photo -->
          <div class="item form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name" class="text-left">Profile Photo <span class="required"></span>
           </label>
           <div class="col-md-6 col-sm-6 col-xs-12">
             <input type="file" class="col-md-10 col-sm-6 col-xs-12" name="img" value="{{$edit->img}}">
             @if($edit->img)
             <img src="{{asset('local/public/contents/uploads/customer/')}}/{{$edit->img}}" alt="profile photo" width="100" height="80">
             @endif
             @if($errors->has('img'))
               <div class="error">{{$errors->first('img')}}</div>
             @endif
           </div>
          </div>

          <!-- DOCUMENT -->
          <div class="item form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">NID Photo <span class="required"></span>
           </label>
           <div class="col-md-6 col-sm-6 col-xs-12">
             <input type="file" class="col-md-10 col-sm-6 col-xs-12" name="nid" value="{{$edit->nid}}">
              @if($edit->nid)
             <img src="{{asset('local/public/contents/uploads/customer')}}/{{$edit->nid}}" alt="Nif photo" width="100" height="80">
              @endif
             @if($errors->has('nid'))
               <div class="error">{{$errors->first('nid')}}</div>
             @endif
           </div>
          </div>

          <!-- singature -->
          <div class="item form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="singature">Singature <span class="required"></span>
           </label>
           <div class="col-md-6 col-sm-6 col-xs-12">
             <input type="file" class="col-md-10 col-sm-6 col-xs-12" name="singature" value="{{$edit->singature}}">
               @if($edit->singature)
            <img src="{{asset('local/public/contents/uploads/customer/')}}/{{$edit->singature}}" alt="profile photo" width="100" height="80">
               @endif
             @if($errors->has('singature'))
               <div class="error">{{$errors->first('singature')}}</div>
             @endif
           </div>
          </div>

          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button type="submit" class="btn btn-primary">Cancel</button>
              <button id="send" type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>

        </div>
      </div>
      <!-- /page content -->



@endsection
