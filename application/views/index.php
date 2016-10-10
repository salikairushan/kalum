<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Rail Warrant</title>
	


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.inputfocus-0.9.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.main.js"></script>
</head>
<body>
	
	<div class="container" id="container">
        <form action="#" method="post">
            <nav class="navbar navbar-default navbar-static-top col-lg-12" style="top: 0;bottom: 0;">
               <div >
                <h1> <span style="color: #a90329;">Online Rail Warrant Book</span> </h1>
               </div>

                <div class="col-md-12 " style="margin-top:10px;padding-top:40px;padding-bottom:20px;background-color: #e2e2e2;border-radius: 8px">
                    <div class="col-md-6">
                        <div class=" col-md-5" >
                                <span class=" col-md-12 "><h4>Pension Number</h4></span>
                        </div>
                        <div class="col-md-7" >
                            <input type="text" class="form-control col-md-6" placeholder="Pension Number" aria-describedby="sizing-addon2">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" col-md-5" >
                             <span class=" col-md-12 "><h4>NIC Number</h4></span>
                        </div>
                        <div class=" col-md-7" >
                             <input type="text" class="col-md-6 form-control" placeholder="Pension Number" aria-describedby="sizing-addon2">
                        </div>
                     </div>
                    <div class="col-md-offset-11">
                        <div class="btn-group " role="group" aria-label="..." style="margin-top:30px">
                            <button type="button" class="btn btn-info" onclick="displayc();" style="background-color">Search</button>
                        </div>
                    </div>
                </div>
                <div id="details" class="col-md-12 " style="margin-top:30px;display:none" >
                    <div class=" col-md-12" >
                        <div class=" col-md-6" >
                            <span class=" col-md-4 "><h4>Pensioner Name</h4></span>
                        </div>
                        <div class=" col-md-6" >
                            <span class=" col-md-12 "><h4>Available Up</h4></span>
                            <span class=" col-md-12 "><h4>Available Down</h4></span>
                        </div>
                    </div>
                    <div class="col-md-10" style="margin-top:30px">

                        <div class="panel panel-default">
                            <div class="panel-heading"><h5><strong>Dependents</strong></h5></div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>NIC</th>
                                        <th>Relationship</th>
                                        <th>Select</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>john@example.com</td>
                                        <td> <input type="checkbox" aria-label="..."></td>
                                    </tr>
                                    <tr>
                                        <td>Mary</td>
                                        <td>Moe</td>
                                        <td>mary@example.com</td>
                                        <td> <input type="checkbox" aria-label="..."></td>
                                    </tr>
                                    <tr>
                                        <td>July</td>
                                        <td>Dooley</td>
                                        <td>july@example.com</td>
                                        <td> <input type="checkbox" aria-label="..."></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
           </nav>






          <!-- #first_step -->
            <!--    <div clsss="col-md-10" id="first_step">

                  <div class="form col-md-12">

                      <input type="text" name="username" id="username" value="username" />
                      <label for="username">At least 4 characters. Uppercase letters, lowercase letters and numbers only.</label>

                      <input type="password" name="password" id="password" value="password" />
                      <label for="password">At least 4 characters. Use a mix of upper and lowercase for a strong password.</label>

                      <input type="password" name="cpassword" id="cpassword" value="password" />
                      <label for="cpassword">If your passwords aren’t equal, you won’t be able to continue with signup.</label>
                  </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                <input class="submit" type="submit" name="submit_first" id="submit_first" value="" />
            </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->


            <!-- #second_step -->
            <div id="second_step" style="display:none">
                <h1>SIGN UP FOR A FREE <span>WEBEXP18</span> ACCOUNT</h1>

                <div class="form">
                    <input type="text" name="firstname" id="firstname" value="first name" />
                    <label for="firstname">Your First Name. </label>
                    <input type="text" name="lastname" id="lastname" value="last name" />
                    <label for="lastname">Your Last Name. </label>
                    <input type="text" name="email" id="email" value="email address" />
                    <label for="email">Your email address. We send important administration notices to this address. </label>
                </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                <input class="submit" type="submit" name="submit_second" id="submit_second" value="" />
            </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->


            <!-- #third_step -->
            <div id="third_step" style="display:none">
                <h1>SIGN UP FOR A FREE <span>WEBEXP18</span> ACCOUNT</h1>

                <div class="form">
                    <select id="age" name="age">
                        <option> 0 - 17</option>
                        <option>18 - 25</option>
                        <option>26 - 40</option>
                        <option>40+</option>
                    </select>
                    <label for="age">Your age range. </label> <!-- clearfix --><div class="clear"></div><!-- /clearfix -->

                    <select id="gender" name="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    <label for="gender">Your Gender. </label> <!-- clearfix --><div class="clear"></div><!-- /clearfix -->

                    <select id="country" name="country">
                        <option>United States</option>
                        <option>United Kingdom</option>
                        <option>Canada</option>
                        <option>Serbia</option>
                        <option>Italy</option>
                    </select>
                    <label for="country">Your country. </label> <!-- clearfix --><div class="clear"></div><!-- /clearfix -->

                </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                <input class="submit" type="submit" name="submit_third" id="submit_third" value="" />

            </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->


            <!-- #fourth_step -->
            <div id="fourth_step" style="display:none">
                <h1>SIGN UP FOR A FREE <span>WEBEXP18</span> ACCOUNT</h1>

                <div class="form">
                    <h2>Summary</h2>

                    <table>
                        <tr><td>Username</td><td></td></tr>
                        <tr><td>Password</td><td></td></tr>
                        <tr><td>Email</td><td></td></tr>
                        <tr><td>Name</td><td></td></tr>
                        <tr><td>Age</td><td></td></tr>
                        <tr><td>Gender</td><td></td></tr>
                        <tr><td>Country</td><td></td></tr>
                    </table>
                </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                <input class="send submit" type="submit" name="submit_fourth" id="submit_fourth" value="" />
            </div>
-->
        </form>
	</div>
	<!--<div id="progress_bar">
        <div id="progress"></div>
        <div id="progress_text">0% Complete</div>
	</div>-->
	<script>
      function displayc(){
         $('#details').show();
      }
      </script>
</body>
</html>