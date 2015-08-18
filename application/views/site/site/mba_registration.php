<br/>

	<div class="container">
		<div class="row">
			<div class="col-md-9">
				 <div class="row tab-filters"> 
			 <div class="col-md-12">
			<ul class="tab-bottom">	
			<li class="col-md-4 padding-less"><a href="<?php echo base_url();?>Login" data-filter="*" class="tab-nav"><i class="icon icon-reorder"></i>&nbsp; Login</a></li>
			<li class="col-md-4 padding-less">
			<div class="dropdown">	
				<a href="#" data-filter=".cat2" id="dLabel" role="button" data-toggle="dropdown" class="selected tab-nav123" data-target="#"><i class="icon icon-th-large"></i>&nbsp;Registrations<span class="caret"></span></a>
    		   <ul class="dropdown-menu middle-subnav" role="menu" aria-labelledby="dropdownMenu">
               <li><a href="<?php echo base_url();?>MBA-Student-Registration">&nbsp; MBA/MCA Student Registration</a></li>
              <li><a href="<?php echo base_url();?>BTech-Student-Registration">&nbsp; B-Tech Student Registration</a></li>
			   <li><a href="<?php echo base_url();?>Degree-Student-Registration">&nbsp; Degree Student Registration</a></li>
              <li><a href="<?php echo base_url();?>College-Registration">&nbsp; College Registration</a></li>
            </ul>
        </div>
		</li>
		<li class="col-md-4 padding-less">
			<div class="dropdown">	
				<a href="#" data-filter=".cat2" id="dLabel" role="button" data-toggle="dropdown" class="tab-nav123" data-target="#"><i class="icon icon-th-large"></i>&nbsp;Other Programs<span class="caret"></span></a>
    		   <ul class="dropdown-menu middle-subnav" role="menu" aria-labelledby="dropdownMenu">
			    <li><a href="<?php echo base_url();?>Finishing-School-Registration">&nbsp; Finishing School Registration</a></li>
               <li><a href="<?php echo base_url();?>TEP-Select">&nbsp; TEP Programme Registration</a></li>
            </ul>
        </div>
		</li>
					</ul>
				</div>
				</div>
				
                <?php if($this->session->flashdata('msg')!=NULL) { ?>
								<div class="alert col-md-12 alert-success display-none" style="display: block;">
									<a data-dismiss="alert" href="#" aria-hidden="true" class="close">×</a>
									<?php  echo $this->session->flashdata('msg');?>
								</div>
								<?php } ?>
                
			<form class="form-horizontal" action="<?php echo base_url();?>MBA-Student-Registration" method="post" enctype="multipart/form-data">
			<div class="form-group">
<label class="col-sm-9 control-label"><h3>MBA/MCA Student Registration</h3></label>
</div>
  <div class="form-group">
    <label class="col-sm-4 control-label">University Hall Ticket Number<span style="color:red;">*</span></label>
    <div class="col-sm-6">
      <input type="text" name="university_hallticket" id="university_hallticket" value="<?php echo set_value('university_hallticket');?>" class="form-control">
	   <?php echo "<span style='color:red'>".form_error('university_hallticket')."</span>"; ?>
    </div>
  </div>
 
  <div class="form-group">
    <label class="col-sm-4 control-label">Photo</label>
    <div class="col-sm-6">
      <input type="file" name="photo" id="photo" value="<?php echo set_value('photo');?>" class="form-control">
	 <p style="color:red;">Maximum allowed size for uploaded file is 40kb to 50kb.</p>
    </div>
  </div>
  
<div class="form-group">
<label class="col-sm-4 control-label"><h5>Personal Details</h5></label>
</div>
  
  <div class="form-group">
    <label class="col-sm-4 control-label">First Name<span style="color:red;">*</span></label>
    <div class="col-sm-6">
      <input type="text" name="first_name" id="first_name"  value="<?php echo set_value('first_name');?>" class="form-control">
	   <?php echo "<span style='color:red'>".form_error('first_name')."</span>"; ?>
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-4 control-label">Last Name<span style="color:red;">*</span></label>
    <div class="col-sm-6">
      <input type="text" name="last_name" id="last_name"  value="<?php echo set_value('last_name');?>" class="form-control">
	   <?php echo "<span style='color:red'>".form_error('last_name')."</span>"; ?>
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-4 control-label">Gender<span style="color:red;">*</span></label>
    <div class="col-sm-6">
      <div class="col-sm-10">
        	
          <div class="radio">
            <label>
              <input type="radio" id="gender" value="Male" name="gender">Male
            </label>
            
            <label>
              <input type="radio" name="gender" id="gender" value="Female">Female
            </label>
			
			<label>
              <input type="radio" name="gender" id="gender" value="Other">Other
            </label>
			 <?php echo "<span style='color:red'>".form_error('gender')."</span>"; ?>
          </div>
        </div>
    </div>
  </div>
  
<div class="form-group">
<label class="col-sm-4 control-label">Date of Birth<span style="color:red;">*</span></label>
<div class="col-sm-6">
  <input type="text" name="date_birth" id="date_birth" value="<?php echo set_value('date_birth');?>" class="form-control">
   <?php echo "<span style='color:red'>".form_error('date_birth')."</span>"; ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Religion<span style="color:red;">*</span></label>
<div class="col-sm-6">
<select name="religion" id="religion" class="form-control">
<option value="">select</option>
<option value="Hindu">Hindu</option>
<option value="Muslim">Muslim</option>
<option value="Christian">Christian</option>
<option value="Sikh">Sikh</option>
<option value="Buddhist">Buddhist</option>
<option value="Jain">Jain</option>
<option value="Other">Other</option>
</select>
  <?php echo "<span style='color:red'>".form_error('religion')."</span>"; ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Aadhar Card Number</label>
<div class="col-sm-6">
  <input type="text" name="aadhar_number" id="aadhar_number" value="<?php echo set_value('aadhar_number');?>" class="form-control">
   <?php echo "<span style='color:red'>".form_error('aadhar_number')."</span>"; ?>
</div>
</div>

  <div class="form-group">
<label class="col-sm-4 control-label">Category<span style="color:red;">*</span></label>
<div class="col-sm-6">
<select name="category" onchange="select_category()" id="category" class="form-control">
 <option value="">select</option>
		 <option value="SC">SC</option>
		 <option value="ST">ST</option>
		 <option value="BC-A">BC-A</option>
		 <option value="BC-B">BC-B</option>
		 <option value="BC-C">BC-C</option>
		 <option value="BC-D">BC-D</option>
		 <option value="BC-E">BC-E</option>
		 <option value="OC">OC</option>
</select>
  <?php echo "<span style='color:red'>".form_error('category')."</span>"; ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Father / Mother / Guardian Name<span style="color:red;">*</span></label>
<div class="col-sm-6">
  <input type="text" name="parent_name" id="parent_name" value="<?php echo set_value('parent_name');?>" class="form-control">
  <?php echo "<span style='color:red'>".form_error('parent_name')."</span>"; ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Father / Mother / Guardian Profession<span style="color:red;">*</span></label>
<div class="col-sm-6">
  <input type="text" name="parent_profession" id="parent_profession" value="<?php echo set_value('parent_profession');?>" class="form-control">
    <?php echo "<span style='color:red'>".form_error('parent_profession')."</span>"; ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Father / Mother / Guardian Contact Number<span style="color:red;">*</span></label>
<div class="col-sm-6">
  <input type="text" name="parent_mobile" id="parent_mobile" value="<?php echo set_value('parent_mobile');?>" class="form-control">
    <?php echo "<span style='color:red'>".form_error('parent_mobile')."</span>"; ?>
</div>
</div>

<h4 class="col-sm-10">Address for Correspondence</h4>

<div class="form-group">
<label class="col-sm-4 control-label">House No & Street<span style="color:red;">*</span></label>
<div class="col-sm-6">
  <textarea rows="3" cols="6" name="street" id="street" class="form-control"><?php echo set_value('street');?></textarea>
  <?php echo "<span style='color:red'>".form_error('street')."</span>"; ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Village / Panchayat<span style="color:red;">*</span></label>
<div class="col-sm-6">
  <input type="text" name="village" id="village" value="<?php echo set_value('village');?>" class="form-control">
   <?php echo "<span style='color:red'>".form_error('village')."</span>"; ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Mandal / Town<span style="color:red;">*</span></label>
<div class="col-sm-6">
  <input type="text" name="mandal" id="mandal" value="<?php echo set_value('mandal');?>" class="form-control">
   <?php echo "<span style='color:red'>".form_error('mandal')."</span>"; ?>
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label">District<span style="color:red;">*</span></label>
<div class="col-sm-6">
  <input type="text" name="district" id="district" value="<?php echo set_value('district');?>" class="form-control">
   <?php echo "<span style='color:red'>".form_error('district')."</span>"; ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">State<span style="color:red;">*</span></label>
<div class="col-sm-6">
  <input type="text" name="state" id="state" value="<?php echo set_value('state');?>" class="form-control">
  <?php echo "<span style='color:red'>".form_error('state')."</span>"; ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Pincode<span style="color:red;">*</span></label>
<div class="col-sm-6">
  <input type="text" name="pincode" id="pincode" value="<?php echo set_value('pincode');?>" class="form-control">
   <?php echo "<span style='color:red'>".form_error('pincode')."</span>"; ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Mobile<span style="color:red;">*</span></label>
<div class="col-sm-6">
  <input type="text" name="mobile" id="mobile" value="<?php echo set_value('mobile');?>" class="form-control">
  <?php echo "<span style='color:red'>".form_error('mobile')."</span>"; ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">E-mail ID<span style="color:red;">*</span></label>
<div class="col-sm-6">
  <input type="text" name="email" id="email" value="<?php echo set_value('email');?>" class="form-control">
    <?php echo "<span style='color:red'>".form_error('email')."</span>"; ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Alternate E-mail ID:</label>
<div class="col-sm-6">
  <input type="text" name="alt_email" id="alt_email" value="<?php echo set_value('alt_email');?>" class="form-control">
  
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label"><h5>Institution Details</h5></label>
</div>
    
<div class="form-group">
<label class="col-sm-4 control-label">I-CET RANK<span style="color:red;">*</span></label>
<div class="col-sm-6">
  <input type="text" name="icet_rank" id="icet_rank" value="<?php echo set_value('icet_rank');?>" class="form-control">
  <?php echo "<span style='color:red'>".form_error('icet_rank')."</span>"; ?>
</div>
</div>
  
  <div class="form-group">
<label class="col-sm-4 control-label">Affiliated University<span style="color:red;">*</span></label>
<div class="col-sm-6">
<select name="affiliated_university" onchange="select_institute()" id="affiliated_university" class="form-control">
<option value="">select</option>
<option value="1">JNTU HYDERABAD</option>
<option value="2">OSMANIA University</option>
<option value="3">KAKATIYA University</option>
<option value="4">AUTONOMOUS</option>
</select>
  <?php echo "<span style='color:red'>".form_error('affiliated_university')."</span>"; ?>
</div>
</div>
  
<div class="form-group">
<label class="col-sm-4 control-label">Name of the Institution<span style="color:red;">*</span></label>
<div class="col-sm-6">
<select name="institution" id="institution" class="form-control">
<option value="">select</option>
</select>
  <?php echo "<span style='color:red'>".form_error('institution')."</span>"; ?>
</div>
</div>

<div class="form-group">
    <label class="col-sm-4 control-label">Qualification<span style="color:red;">*</span></label>
    <div class="col-sm-6">
      <div class="col-sm-10">        	
          <div class="radio">
		  <label><input type="radio" name="qualification" id="qualification" value="MCA">MCA</label>
            <label><input type="radio" name="qualification" id="qualification" value="MBA">MBA</label>
          </div>
		   <?php echo "<span style='color:red'>".form_error('qualification')."</span>"; ?>
        </div>
    </div>
</div>

  <div class="form-group">
<label class="col-sm-4 control-label">Passing out Year<span style="color:red;">*</span></label>
<div class="col-sm-6">
   <select id = "passing_year" name = "passing_year" class="form-control">
							 <option value="">year</option>
							<?php $startyear = date("Y");
$endyear= date("Y")+3;
 for($i=$startyear;$i<=$endyear;$i++)
 {
 ?>
   <option value="<?php echo $i;?>"><?php echo $i;?></option>
 <?php } ?>
 </select>
    <?php echo "<span style='color:red'>".form_error('passing_year')."</span>"; ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label"><h5>Academic Details</h5></label>
</div>

<div class="form-group">
	<div class="col-md-offset-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Academic Details</th>
                                                        <th>Board</th>
                                                        <th>Year of Pass out</th>
                                                        <th>Total Marks</th>
                                                        <th>Marks Obtained</th>
														 <th>Marks %</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tenth<span style="color:red;">*</span></td>
														<td>
														<input type="text" alt="" name="ssc_board" id="ssc_board" value="<?php echo set_value('ssc_board');?>" class="textfiled-fullwidth">
														</td>
                                                        <td>
														 <select id = "ssc_passing_year" name = "ssc_passing_year" class="textfiled-fullwidth">
							                              <option value="">year</option>
							                 <?php $startyear = date("Y")-20;
                                                     $endyear= date("Y")+5;
                                                     for($i=$startyear;$i<=$endyear;$i++)
                                                     {
                                                 ?>
                                                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                        <?php } ?>
                                                      </select>
														<?php echo "<span style='color:red'>".form_error('ssc_passing_year')."</span>"; ?>
														</td>
                                                        <td><input type="text" alt="" name="ssc_total_marks" id="ssc_total_marks" value="600" class="textfiled-fullwidth" readonly>
														<?php echo "<span style='color:red'>".form_error('ssc_total_marks')."</span>"; ?></td>
                                                        <td><input type="text" alt="" name="ssc_obtained_marks" id="ssc_obtained_marks" value="<?php echo set_value('ssc_obtained_marks');?>" class="textfiled-fullwidth">
														<span style='color:red' id="ssc_marks_error"></span>
														<?php echo "<span style='color:red'>".form_error('ssc_obtained_marks')."</span>"; ?>
														</td>
                                                        <td><input type="text" alt="" name="ssc_percentage" id="ssc_percentage" value="<?php echo set_value('ssc_percentage');?>" class="textfiled-fullwidth" readonly>
														<?php echo "<span style='color:red'>".form_error('ssc_percentage')."</span>"; ?>
														</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intermediate<span style="color:red;">*</span></td>
														<td>
														<input type="text" alt="" name="inter_board" id="inter_board" value="<?php echo set_value('inter_board');?>" class="textfiled-fullwidth">
														</td>
                                                        <td>
														<select id = "inter_passing_year" name = "inter_passing_year" class="textfiled-fullwidth">
							                              <option value="">year</option>
							                 <?php $startyear = date("Y")-20;
                                                     $endyear= date("Y")+5;
                                                     for($i=$startyear;$i<=$endyear;$i++)
                                                     {
                                                 ?>
                                                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                        <?php } ?>
                                                      </select>
														<?php echo "<span style='color:red'>".form_error('inter_passing_year')."</span>"; ?></td>
                                                        <td><input type="text" alt="" name="inter_total_marks" id="inter_total_marks" value="1000" class="textfiled-fullwidth" readonly>
														<?php echo "<span style='color:red'>".form_error('inter_total_marks')."</span>"; ?></td>
                                                        <td><input type="text" alt="" name="inter_obtained_marks" id="inter_obtained_marks" value="<?php echo set_value('inter_obtained_marks');?>" class="textfiled-fullwidth">
														<span style='color:red' id="inter_marks_error"></span>
														<?php echo "<span style='color:red'>".form_error('inter_obtained_marks')."</span>"; ?></td>
														 <td><input type="text" alt="" name="inter_percentage" id="inter_percentage" value="<?php echo set_value('inter_percentage');?>" class="textfiled-fullwidth" readonly>
														<?php echo "<span style='color:red'>".form_error('inter_percentage')."</span>"; ?>
														</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Diploma</td>
														<td>
														<input type="text" alt="" name="diploma_board" id="diploma_board" value="<?php echo set_value('diploma_board');?>" class="textfiled-fullwidth">
														</td>
                                                        <td>
														<select id = "diploma_passing_year" name = "diploma_passing_year" class="textfiled-fullwidth">
							                              <option value="">year</option>
							                 <?php $startyear = date("Y")-20;
                                                     $endyear= date("Y")+5;
                                                     for($i=$startyear;$i<=$endyear;$i++)
                                                     {
                                                 ?>
                                                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                        <?php } ?>
                                                      </select>
														</td>
                                                        <td><input type="text" alt="" name="diploma_total_marks" id="diploma_total_marks" value="<?php echo set_value('diploma_total_marks');?>" class="textfiled-fullwidth">
														</td>
                                                        <td><input type="text" alt="" name="diploma_obtained_marks" id="diploma_obtained_marks" value="<?php echo set_value('diploma_obtained_marks');?>" class="textfiled-fullwidth">
														<span style='color:red' id="diploma_marks_error"></span>
														</td>
														 <td><input type="text" alt="" name="diploma_percentage" id="diploma_percentage" value="<?php echo set_value('diploma_percentage');?>" class="textfiled-fullwidth" readonly>
														<?php echo "<span style='color:red'>".form_error('diploma_percentage')."</span>"; ?>
														</td>
                                                    </tr>
                                                    <tr>
                                                    	<td>Degree & Specialization<span style="color:red;">*</span><br/>
                                                            (Eg: B.Sc (Computers)
                                                        </td>
														 
                                                        <td colspan="5"><textarea name="specialization" id="specialization" style="width:95%;" class="textfiled-fullwidth"><?php echo set_value('specialization');?></textarea>
														<?php echo "<span style='color:red'>".form_error('specialization')."</span>"; ?></td>
                                                     </tr>
                                                    
                                                    <tr>
                                                    	<td>Degree Academic Marks<span style="color:red;">*</span></td>
														<td>
														<input type="text" alt="" name="degree_board" id="degree_board" value="<?php echo set_value('degree_board');?>" class="textfiled-fullwidth">
														</td>
                                                        <td>
														<select id = "degree_passing_year" name = "degree_passing_year" class="textfiled-fullwidth">
							                              <option value="">year</option>
							                 <?php $startyear = date("Y")-20;
                                                     $endyear= date("Y")+5;
                                                     for($i=$startyear;$i<=$endyear;$i++)
                                                     {
                                                 ?>
                                                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                        <?php } ?>
                                                      </select>
														<?php echo "<span style='color:red'>".form_error('degree_passing_year')."</span>"; ?></td>
                                                        <td><input type="text" alt="" name="degree_total_marks" id="degree_total_marks" value="<?php echo set_value('degree_total_marks');?>" class="textfiled-fullwidth">
														<?php echo "<span style='color:red'>".form_error('degree_total_marks')."</span>"; ?></td>
                                                        <td><input type="text" alt="" name="degree_obtained_marks" id="degree_obtained_marks" value="<?php echo set_value('degree_obtained_marks');?>" class="textfiled-fullwidth">
														<span style='color:red' id="degree_marks_error"></span>
														<?php echo "<span style='color:red'>".form_error('degree_obtained_marks')."</span>"; ?></td>
														<td><input type="text" alt="" name="degree_percentage" id="degree_percentage" value="<?php echo set_value('degree_percentage');?>" class="textfiled-fullwidth" readonly>
														<?php echo "<span style='color:red'>".form_error('degree_percentage')."</span>"; ?>
														</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	<td>MCA / MBA 1st  Year 1st  Semester<span style="color:red;">*</span></td>
														<td>
														<input type="text" alt="" name="sem1_board" id="sem1_board" value="<?php echo set_value('sem1_board');?>" class="textfiled-fullwidth">
														</td>
														<td>
                                                       <select id = "sem1_passing_year" name = "sem1_passing_year" class="textfiled-fullwidth">
							                              <option value="">year</option>
							                 <?php $startyear = date("Y")-20;
                                                     $endyear= date("Y")+5;
                                                     for($i=$startyear;$i<=$endyear;$i++)
                                                     {
                                                 ?>
                                                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                        <?php } ?>
                                                      </select>
														
										
														<?php echo "<span style='color:red'>".form_error('sem1_passing_year')."</span>"; ?></td>
                                                        <td><input type="text" alt="" name="sem1_total_marks" id="sem1_total_marks" value="1050" class="textfiled-fullwidth" readonly> 
														<?php echo "<span style='color:red'>".form_error('sem1_total_marks')."</span>"; ?></td>
                                                        <td><input type="text" alt="" name="sem1_obtained_marks" id="sem1_obtained_marks" value="<?php echo set_value('sem1_obtained_marks');?>" class="textfiled-fullwidth">
														<span style='color:red' id="sem1_marks_error"></span>
														<?php echo "<span style='color:red'>".form_error('sem1_obtained_marks')."</span>"; ?></td>
														 <td><input type="text" alt="" name="sem1_percentage" id="sem1_percentage" value="0" class="textfiled-fullwidth" readonly>
														<?php echo "<span style='color:red'>".form_error('sem1_percentage')."</span>"; ?>
														</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	<td>MCA / MBA 1st  Year 2nd  Semester<span style="color:red;">*</span></td>
														<td>
														<input type="text" alt="" name="sem2_board" id="sem2_board" value="<?php echo set_value('sem2_board');?>" class="textfiled-fullwidth">
														</td>
														<td>
                                                       <select id = "sem2_passing_year" name = "sem2_passing_year" class="textfiled-fullwidth">
							                              <option value="">year</option>
							                 <?php $startyear = date("Y")-20;
                                                     $endyear= date("Y")+5;
                                                     for($i=$startyear;$i<=$endyear;$i++)
                                                     {
                                                 ?>
                                                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                        <?php } ?>
                                                      </select>
														</td>
                                                        <td><input type="text" alt="" name="sem2_total_marks" id="sem2_total_marks" value="750" class="textfiled-fullwidth" readonly>
														</td>
                                                        <td><input type="text" alt="" name="sem2_obtained_marks" id="sem2_obtained_marks" value="<?php echo set_value('sem2_obtained_marks');?>" class="textfiled-fullwidth">
														<span style='color:red' id="sem2_marks_error"></span>
														</td>
														 <td><input type="text" alt="" name="sem2_percentage" id="sem2_percentage" value="0" class="textfiled-fullwidth" readonly>
														
														</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	<td>MCA / MBA 2nd  Year 1st  Semester<span style="color:red;">*</span></td>
														<td>
														<input type="text" alt="" name="sem3_board" id="sem3_board" value="<?php echo set_value('sem3_board');?>" class="textfiled-fullwidth">
														</td>
                                                        <td>
														<select id = "sem3_passing_year" name = "sem3_passing_year" class="textfiled-fullwidth">
							                              <option value="">year</option>
							                 <?php $startyear = date("Y")-20;
                                                     $endyear= date("Y")+5;
                                                     for($i=$startyear;$i<=$endyear;$i++)
                                                     {
                                                 ?>
                                                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                        <?php } ?>
                                                      </select>
									</td>
                                                        <td><input type="text" alt="" name="sem3_total_marks" id="sem3_total_marks" value="750" class="textfiled-fullwidth" readonly>
														</td>
                                                        <td><input type="text" alt="" name="sem3_obtained_marks" id="sem3_obtained_marks" value="<?php echo set_value('sem3_obtained_marks');?>" class="textfiled-fullwidth">
														<span style='color:red' id="sem3_marks_error"></span>
														</td>
														 <td><input type="text" alt="" name="sem3_percentage" id="sem3_percentage" value="0" class="textfiled-fullwidth" readonly>
														
														</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	<td>MCA / MBA 2nd  Year 2nd  Semester<span style="color:red;">*</span></td>
														<td>
														<input type="text" alt="" name="sem4_board" id="sem4_board" value="<?php echo set_value('sem1_board');?>" class="textfiled-fullwidth">
														</td>
                                                        <td>
														<select id = "sem4_passing_year" name = "sem4_passing_year" class="textfiled-fullwidth">
							                              <option value="">year</option>
							                 <?php $startyear = date("Y")-20;
                                                     $endyear= date("Y")+5;
                                                     for($i=$startyear;$i<=$endyear;$i++)
                                                     {
                                                 ?>
                                                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                        <?php } ?>
                                                      </select>
														</td>
                                                        <td><input type="text" alt="" name="sem4_total_marks" id="sem4_total_marks" value="750" class="textfiled-fullwidth" readonly>
														<?php echo "<span style='color:red'>".form_error('sem4_total_marks')."</span>"; ?></td>
                                                        <td><input type="text" alt="" name="sem4_obtained_marks" id="sem4_obtained_marks" value="<?php echo set_value('sem4_obtained_marks');?>" class="textfiled-fullwidth">
														<span style='color:red' id="sem4_marks_error"></span>
														</td>
														 <td><input type="text" alt="" name="sem4_percentage" id="sem4_percentage" value="0" class="textfiled-fullwidth" readonly>
														</td>
                                                    </tr>

													<tr>
                                                    	<td>MCA / MBA 3nd  Year 1st  Semester<span style="color:red;">*</span></td>
														<td>
														<input type="text" alt="" name="sem5_board" id="sem5_board" value="<?php echo set_value('sem5_board');?>" class="textfiled-fullwidth">
														</td>
                                                       <td>
														
														<select id = "sem5_passing_year" name = "sem5_passing_year" class="textfiled-fullwidth">
							                              <option value="">year</option>
							                 <?php $startyear = date("Y")-20;
                                                     $endyear= date("Y")+5;
                                                     for($i=$startyear;$i<=$endyear;$i++)
                                                     {
                                                 ?>
                                                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                        <?php } ?>
                                                      </select>
														
														</td>
                                                        <td><input type="text" alt="" name="sem5_total_marks" id="sem5_total_marks" value="750" class="textfiled-fullwidth" readonly>
														</td>
                                                        <td><input type="text" alt="" name="sem5_obtained_marks" id="sem5_obtained_marks" value="<?php echo set_value('sem5_obtained_marks');?>" class="textfiled-fullwidth">
														<span style='color:red' id="sem5_marks_error"></span>
														</td>
														 <td><input type="text" alt="" name="sem5_percentage" id="sem5_percentage" value="0" class="textfiled-fullwidth" readonly>
													
														</td>
                                                    </tr>
													
													<tr>
                                                    	<td>MCA / MBA 3nd  Year 2nd  Semester<span style="color:red;">*</span></td>
														<td>
														<input type="text" alt="" name="sem6_board" id="sem6_board" value="<?php echo set_value('sem6_board');?>" class="textfiled-fullwidth">
														</td>
                                                       <td>
														
														<select id = "sem6_passing_year" name = "sem6_passing_year" class="textfiled-fullwidth">
							                              <option value="">year</option>
							                 <?php $startyear = date("Y")-20;
                                                     $endyear= date("Y")+5;
                                                     for($i=$startyear;$i<=$endyear;$i++)
                                                     {
                                                 ?>
                                                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                        <?php } ?>
                                                      </select>
														
														</td>
                                                        <td><input type="text" alt="" name="sem6_total_marks" id="sem6_total_marks" value="750" class="textfiled-fullwidth" readonly>
														</td>
                                                        <td><input type="text" alt="" name="sem6_obtained_marks" id="sem6_obtained_marks" value="<?php echo set_value('sem5_obtained_marks');?>" class="textfiled-fullwidth">
														<span style='color:red' id="sem6_marks_error"></span>
														</td>
														 <td><input type="text" alt="" name="sem6_percentage" id="sem6_percentage" value="0" class="textfiled-fullwidth" readonly>
														
														</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
</div>
<input type="hidden" name="aggregate_marks" id="aggregate_marks" value=""/>
<div class="form-group">
    <label class="col-sm-4 control-label">Do you have any gaps in education<span style="color:red;">*</span></label>
    <div class="col-sm-6">
      <div class="col-sm-10">        	
          <div class="checkbox"><label><input type="radio" name="gaps" id="gaps" value="Yes">Yes</label>
            <label><input type="radio" name="gaps" id="gaps" value="No">No</label>
          </div>
		  <?php echo "<span style='color:red'>".form_error('gaps')."</span>"; ?>
        </div>
		
    </div>
</div> 

<div class="form-group">
<label class="col-sm-4 control-label">No. of Years</label>
<div class="col-sm-6">
  <input type="text" name="no_gap_years" id="no_gap_years" value="<?php echo set_value('no_gap_years');?>" class="form-control">
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Reason</label>
<div class="col-sm-6">
  <textarea cols="6" rows="3" name="gap_reason" id="gap_reason" class="form-control"><?php echo set_value('gap_reason');?></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">No of backlogs you have as on date</label>
<div class="col-sm-6">
  <input type="text" name="backlogs" id="backlogs" value="<?php echo set_value('backlogs');?>" class="form-control">
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label"><h5>Registration Fee Details <span style="color:red;">*</span></h5>
</div>

<div class="col-md-offset-4 col-md-12 col-sm-12 col-xs-12">
<p>(Each student is supposed to draw an individual DD of Rs. 750/- in favor of “<b>Telangana Academy for Skill and Knowledge</b>” payable at Hyderabad and attach the same along with the application form)
</p>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Amount<span style="color:red;">*</span> Rs.</label>
<div class="col-sm-6">
  <input type="text" name="amount" id="amount" value="750" class="form-control" readonly>
  <?php echo "<span style='color:red'>".form_error('amount')."</span>"; ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">DD Number<span style="color:red;">*</span></label>
<div class="col-sm-6">
  <input type="text" name="dd_number" id="dd_number" value="<?php echo set_value('dd_number');?>" class="form-control">
  <?php echo "<span style='color:red'>".form_error('dd_number')."</span>"; ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Drawn Bank & Branch<span style="color:red;">*</span></label>
<div class="col-sm-6">
  <input type="text" name="drawn_bank" id="drawn_bank" value="<?php echo set_value('drawn_bank');?>" class="form-control">
  <?php echo "<span style='color:red'>".form_error('drawn_bank')."</span>"; ?>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">Drawn Date<span style="color:red;">*</span></label>
<div class="col-sm-6">
  <input type="text" name="drawn_date" id="drawn_date" value="<?php echo set_value('drawn_date');?>" class="form-control">
  <?php echo "<span style='color:red'>".form_error('drawn_date')."</span>"; ?>
</div>
</div>

<div class="col-md-offset-4 col-md-12 col-sm-12 col-xs-12">
<p><b>Note:</b> Free Registration for who secured above 70% up to last semester.
</p>
<p><b>Note:</b> A nominal Registration fee for the SC and ST category students of Rs. 200/- for the MBA /MCA students, copy of their caste certificate is to be attached along with the Registration Form(without authentic Caste Certificate Application will not be accepted).
</p>
</div>

<div class="form-group">
<label class="col-sm-4 control-label"><h5>Declaration<span style="color:red;">*</span></h5>
</div>

<div class="form-group">
      <div class="col-sm-offset-4 col-sm-12">      	
          <div class="checkbox"><label><input type="checkbox" name="declaration" id="declaration" value="1">I declare that all the above details are true to the best of my knowledge. If the details are found to be incorrect at any stage, I am liable to any action taken by TASK. I agree that I have read all the terms & conditions mentioned in the TASK student registration notification and I am accepting all these terms and conditions as decided by the TASK in the interest of the program.</label>
          </div>
		  <?php echo "<span style='color:red'>".form_error('declaration')."</span>"; ?>
        </div>
</div> 

<div class="form-group">
<label class="col-sm-4 control-label"></label>
<div class="col-sm-6">
 <div class="checkbox"><label><input type="checkbox" name="terms_conditions" id="terms_conditions" value="1"><a target="_blank" href="<?php echo base_url();?>Terms-Conditions">Terms and Conditions<span style="color:red;">*</span></a></label>
          </div>
  <?php echo "<span style='color:red'>".form_error('terms_conditions')."</span>"; ?>
</div>
</div>



  
<div class="form-group">
    <div class="col-sm-offset-4 col-sm-12">
     <input type="submit" id="submit" class="btn btn-primary" value="Submit">
    </div>
  </div>
</form>

				<div class="clearfix">
				</div>
			</div>
			<!-- .col-md-9 -->
			<div class="col-md-3">
				<?php $this->load->view('site/side_bar');?>
				<!-- #secondary -->
			</div>
			<!-- .col-md-3 -->
		</div>
		<!-- .row -->
	</div>
	
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

		 <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <script>
   
   
     function select_institute(){
   var university=$('#affiliated_university').val();
   var course="MCA/MBA";
   var error=0;
   if(university==""){
   $('#affiliated_university_error').val("Please select university");
   }
   else{
    var fields = "university="+university+"&course="+course;
  $.ajax({
  url:"<?php echo base_url() ; ?>" + "site/getcolleges/",
  type: 'POST',
  data: fields,
  success: function(data) {
	 var obj = JSON.parse(data);
  var html2 = "";
	if(obj.status == "success")
	{
	if(obj.college_list!=""){
	$.each(obj.college_list, function(k, res2) {
	html2 +='<option value="'+res2.college_name+'">'+res2.college_name+'</option>';
  });
	}
	else{
	html2 +='<option value="">select</option>';
	}
	}
	document.getElementById("institution").innerHTML = html2;
	},
  error: function(e) {
  }
});
	if(university == '1')
	{
	$("#sem1_total_marks").val("1050");
	$("#sem2_total_marks").val("750");
	$("#sem3_total_marks").val("750");
	$("#sem4_total_marks").val("750");
	$("#sem5_total_marks").val("750");
	$("#sem6_total_marks").val("750");
	$("#sem7_total_marks").val("700");
	}
	else if(university == '2')
	{
	$("#sem1_total_marks").val("1050");
	$("#sem2_total_marks").val("1050");
	$("#sem3_total_marks").val("1050");
	$("#sem4_total_marks").val("1050");
	$("#sem5_total_marks").val("1050");
	$("#sem6_total_marks").val("1050");
	$("#sem7_total_marks").val("1050");
	}
	else if(university == '3')
	{
	$("#sem1_total_marks").val("1050");
	$("#sem2_total_marks").val("1050");
	$("#sem3_total_marks").val("1050");
	$("#sem4_total_marks").val("1050");
	$("#sem5_total_marks").val("1050");
	$("#sem6_total_marks").val("1050");
	$("#sem7_total_marks").val("1050");
	}
	else if(university == '4')
	{
	$("#sem1_total_marks").val("1050");
	$("#sem2_total_marks").val("1050");
	$("#sem3_total_marks").val("1050");
	$("#sem4_total_marks").val("1050");
	$("#sem5_total_marks").val("1050");
	$("#sem6_total_marks").val("1050");
	$("#sem7_total_marks").val("1050");
	}
   }
   
   }
   
   /*  $( "#ssc_obtained_marks" ).blur(function() {
 var ssc_total_marks=$('#ssc_total_marks').val();
 var ssc_obtained_marks=$('#ssc_obtained_marks').val();
 var ssc_percentage=Number(((ssc_obtained_marks*100)/ssc_total_marks).toFixed(3));
 $( "#ssc_percentage" ).val(ssc_percentage);
});

$( "#ssc_total_marks" ).blur(function() {
 var ssc_total_marks=$('#ssc_total_marks').val();
 var ssc_obtained_marks=$('#ssc_obtained_marks').val();
 var ssc_percentage=Number(((ssc_obtained_marks*100)/ssc_total_marks).toFixed(3));
 $( "#ssc_percentage" ).val(ssc_percentage);
});

 $( "#inter_obtained_marks" ).blur(function() {
 var inter_total_marks=$('#inter_total_marks').val();
 var inter_obtained_marks=$('#inter_obtained_marks').val();
 var inter_persentage=Number(((inter_obtained_marks*100)/inter_total_marks).toFixed(3));
 $( "#inter_percentage" ).val(inter_persentage);
});

$( "#inter_total_marks" ).blur(function() {
 var inter_total_marks=$('#inter_total_marks').val();
 var inter_obtained_marks=$('#inter_obtained_marks').val();
 var inter_persentage=Number(((inter_obtained_marks*100)/inter_total_marks).toFixed(3));
 $( "#inter_percentage" ).val(inter_persentage);
});

 $( "#diploma_obtained_marks" ).blur(function() {
 var diploma_total_marks=$('#diploma_total_marks').val();
 var diploma_obtained_marks=$('#diploma_obtained_marks').val();
 var diploma_persentage=Number(((diploma_obtained_marks*100)/diploma_total_marks).toFixed(3));
 $( "#diploma_percentage" ).val(diploma_persentage);
});

$( "#diploma_total_marks" ).blur(function() {
 var diploma_total_marks=$('#diploma_total_marks').val();
 var diploma_obtained_marks=$('#diploma_obtained_marks').val();
 var diploma_persentage=Number(((diploma_obtained_marks*100)/diploma_total_marks).toFixed(3));
 $( "#diploma_percentage" ).val(diploma_persentage);
});

$( "#sem1_obtained_marks" ).blur(function() {
 var sem1_total_marks=$('#sem1_total_marks').val();
 var sem1_obtained_marks=$('#sem1_obtained_marks').val();
 var sem1_persentage=Number(((sem1_obtained_marks*100)/sem1_total_marks).toFixed(3));
 $( "#sem1_percentage" ).val(sem1_persentage);
});

$( "#sem1_total_marks" ).blur(function() {
 var sem1_total_marks=$('#sem1_total_marks').val();
 var sem1_obtained_marks=$('#sem1_obtained_marks').val();
 var sem1_persentage=Number(((sem1_obtained_marks*100)/sem1_total_marks).toFixed(3));
 $( "#sem1_percentage" ).val(sem1_persentage);
});

$( "#sem2_obtained_marks" ).blur(function() {
 var sem2_total_marks=$('#sem2_total_marks').val();
 var sem2_obtained_marks=$('#sem2_obtained_marks').val();
 var sem2_persentage=Number(((sem2_obtained_marks*100)/sem2_total_marks).toFixed(3));
 $( "#sem2_percentage" ).val(sem2_persentage);
});

$( "#sem2_total_marks" ).blur(function() {
 var sem2_total_marks=$('#sem2_total_marks').val();
 var sem2_obtained_marks=$('#sem2_obtained_marks').val();
 var sem2_persentage=Number(((sem2_obtained_marks*100)/sem2_total_marks).toFixed(3));
 $( "#sem2_percentage" ).val(sem2_persentage);
});


$( "#sem3_obtained_marks" ).blur(function() {
 var sem3_total_marks=$('#sem3_total_marks').val();
 var sem3_obtained_marks=$('#sem3_obtained_marks').val();
 var sem3_persentage=Number(((sem3_obtained_marks*100)/sem3_total_marks).toFixed(3));
 $( "#sem3_percentage" ).val(sem3_persentage);
});

$( "#sem3_total_marks" ).blur(function() {
 var sem3_total_marks=$('#sem3_total_marks').val();
 var sem3_obtained_marks=$('#sem3_obtained_marks').val();
 var sem3_persentage=Number(((sem3_obtained_marks*100)/sem3_total_marks).toFixed(3));
 $( "#sem3_percentage" ).val(sem3_persentage);
});

$( "#sem4_obtained_marks" ).blur(function() {
 var sem4_total_marks=$('#sem4_total_marks').val();
 var sem4_obtained_marks=$('#sem4_obtained_marks').val();
 var sem4_persentage=Number(((sem4_obtained_marks*100)/sem4_total_marks).toFixed(3));
 $( "#sem4_percentage" ).val(sem4_persentage);
});

$( "#sem4_total_marks" ).blur(function() {
 var sem4_total_marks=$('#sem4_total_marks').val();
 var sem4_obtained_marks=$('#sem4_obtained_marks').val();
 var sem4_persentage=Number(((sem4_obtained_marks*100)/sem4_total_marks).toFixed(3));
 $( "#sem2_percentage" ).val(sem4_persentage);
});
 */

   function select_category()
   {
    var category=$('#category').val();
	if(category == "SC")
	{
					var aggregate_marks=parseFloat($('#aggregate_marks').val());
					if(aggregate_marks > 70){
				   $('#amount').val(0);
				   $('#drawn_bank').val("N/A");
						$('#drawn_date').val(0000-00-00);
						$('#dd_number').val(0);
				   }
					else{
				   $('#amount').val(200);
				   }
	}
	else if(category == "ST")
	{
			  var aggregate_marks=parseFloat($('#aggregate_marks').val());
				if(aggregate_marks > 70){
			   $('#amount').val(0);
			   $('#drawn_bank').val("N/A");
					$('#drawn_date').val(0000-00-00);
					$('#dd_number').val(0);
			   }
			   else{
			   $('#amount').val(200);
			   }
	}
	else
	{
					var aggregate_marks=parseFloat($('#aggregate_marks').val());
					if(aggregate_marks > 70){
				   $('#amount').val(0);
				   $('#drawn_bank').val("N/A");
						$('#drawn_date').val(0000-00-00);
						$('#dd_number').val(0);
				   }
					else{
				   $('#amount').val(750);
				   }
	}

   }
   
   
   $( "#ssc_obtained_marks" ).blur(function() {
 var ssc_total_marks=parseInt($('#ssc_total_marks').val());
 var ssc_obtained_marks=parseInt($('#ssc_obtained_marks').val());
 if(ssc_total_marks < ssc_obtained_marks){
 $('#ssc_marks_error').text("You are Exceeded Total Marks.");
 }
 else{
 var ssc_percentage=Number(((ssc_obtained_marks*100)/ssc_total_marks).toFixed(3));
  $('#ssc_marks_error').text("");
 $( "#ssc_percentage" ).val(ssc_percentage);
 }
});

$( "#degree_obtained_marks" ).blur(function() {
 var degree_total_marks=parseInt($('#degree_total_marks').val());
 var degree_obtained_marks=parseInt($('#degree_obtained_marks').val());
  if(degree_total_marks < degree_obtained_marks){
 $('#degree_marks_error').text("You are Exceeded Total Marks.");
 }
  else{
 var degree_persentage=Number(((degree_obtained_marks*100)/degree_total_marks).toFixed(3));
 $( "#degree_percentage" ).val(parseFloat(degree_persentage));
 }
});

$( "#degree_total_marks" ).blur(function() {
 var degree_total_marks=parseInt($('#degree_total_marks').val());
 var degree_obtained_marks=parseInt($('#degree_obtained_marks').val());
 if(degree_total_marks < degree_obtained_marks){
 $('#degree_marks_error').text("You are Exceeded Total Marks.");
 }
  else{
 var degree_persentage=Number(((degree_obtained_marks*100)/degree_total_marks).toFixed(3));
 $( "#degree_percentage" ).val(parseFloat(degree_persentage));
 }
});

$( "#ssc_total_marks" ).blur(function() {
 var ssc_total_marks=parseInt($('#ssc_total_marks').val());
 var ssc_obtained_marks=parseInt($('#ssc_obtained_marks').val());
 if(ssc_total_marks < ssc_obtained_marks){
 $('#ssc_marks_error').text("You are Exceeded Total Marks.");
 }
 else{
 var ssc_percentage=Number(((ssc_obtained_marks*100)/ssc_total_marks).toFixed(3));
  $('#ssc_marks_error').text("");
 $( "#ssc_percentage" ).val(ssc_percentage);
 }
});

 $( "#inter_obtained_marks" ).blur(function() {
 var inter_total_marks=parseInt($('#inter_total_marks').val());
 var inter_obtained_marks=parseInt($('#inter_obtained_marks').val());
 if( inter_total_marks < inter_obtained_marks ){
 $('#inter_marks_error').text("You are Exceeded Total Marks.");
  $( "#inter_percentage" ).val();
 }
 else{
  $('#inter_marks_error').text("");
 var inter_persentage=Number(((inter_obtained_marks*100)/inter_total_marks).toFixed(3));
 $( "#inter_percentage" ).val(inter_persentage);
 }
});

$( "#inter_total_marks" ).blur(function() {
 var inter_total_marks=parseInt($('#inter_total_marks').val());
 var inter_obtained_marks=parseInt($('#inter_obtained_marks').val());
 
 if(inter_total_marks < inter_obtained_marks){
 $('#inter_marks_error').text("You are Exceeded Total Marks.");
 }
 else{
   $('#inter_marks_error').text("");
 var inter_persentage=Number(((inter_obtained_marks*100)/inter_total_marks).toFixed(3));
 $( "#inter_percentage" ).val(inter_persentage);
 }
});

 $( "#diploma_obtained_marks" ).blur(function() {
 var diploma_total_marks=parseInt($('#diploma_total_marks').val());
 var diploma_obtained_marks=parseInt($('#diploma_obtained_marks').val());
  if(diploma_total_marks < diploma_obtained_marks){
 $('#diploma_marks_error').text("You are Exceeded Total Marks.");
 }
 else{
   $('#diploma_marks_error').text("");
  var diploma_persentage=Number(((diploma_obtained_marks*100)/diploma_total_marks).toFixed(3));
 $( "#diploma_percentage" ).val(diploma_persentage);
 }
});

$( "#diploma_total_marks" ).blur(function() {
 var diploma_total_marks=parseInt($('#diploma_total_marks').val());
 var diploma_obtained_marks=parseInt($('#diploma_obtained_marks').val());
   if(sem1_obtained_marks==""){
    $( "#sem1_percentage" ).val(0);
   }
  if(diploma_total_marks < diploma_obtained_marks){
 $('#diploma_marks_error').text("You are Exceeded Total Marks.");
 }
 else{
   $('#diploma_marks_error').text("");
  var diploma_persentage=Number(((diploma_obtained_marks*100)/diploma_total_marks).toFixed(3));
 $( "#diploma_percentage" ).val(diploma_persentage);
 }
});

$( "#sem1_obtained_marks" ).blur(function() {
 var sem1_total_marks=parseInt($('#sem1_total_marks').val());
 var sem1_obtained_marks=parseInt($('#sem1_obtained_marks').val());
   if(sem1_total_marks < sem1_obtained_marks){
 $('#sem1_marks_error').text("You are Exceeded Total Marks.");
 }
 else{
 
   $('#sem1_marks_error').text("");
   var sem1_persentage=Number(((sem1_obtained_marks*100)/sem1_total_marks).toFixed(3));
    if($('#sem1_obtained_marks').val() == ''){
  $('#sem1_marks_error').text("Enter Your Marks.");
  $( "#sem1_percentage" ).val(0);
   }
   else{
   $( "#sem1_percentage" ).val(sem1_persentage);
   }
  var sem1_percentage=parseFloat($("#sem1_percentage").val());
var sem2_percentage=parseFloat($("#sem2_percentage").val());
  var sem3_percentage=parseFloat($("#sem3_percentage").val());
  var sem4_percentage=parseFloat($("#sem4_percentage").val());
  var sem5_percentage=parseFloat($("#sem5_percentage").val());
  var sem6_percentage=parseFloat($("#sem6_percentage").val());
  var sum=1;
  if(sem2_percentage!=0){
  sum=sum+1;
  }
  if(sem3_percentage!=0){
  sum=sum+1;
  }
   if(sem4_percentage!=0){
  sum=sum+1;
  }
  
  if(sem5_percentage!=0){
  sum=sum+1;
  }
  if(sem6_percentage!=0){
  sum=sum+1;
  }
  var total=(sem1_percentage+sem2_percentage+sem3_percentage+sem4_percentage+sem5_percentage+sem6_percentage)/sum;
      $('#aggregate_marks').val(total);
	  if(total > 70){
        $('#amount').val(0);
        $('#drawn_bank').val("N/A");
        $('#drawn_date').val(0000-00-00);
        $('#dd_number').val(0);
	  }
	  else{
 var cat1=$('#category').val();
	   if(cat1 == "SC" || cat1 == "ST"){
	  $('#amount').val(200);
	  $('#drawn_bank').val("");
        $('#drawn_date').val("");
        $('#dd_number').val("");
	  }
	  else{
	  $('#amount').val(750);
	  $('#drawn_bank').val("");
        $('#drawn_date').val("");
        $('#dd_number').val("");
	  }
	  }
 }
 
});

$( "#sem1_total_marks" ).blur(function() {
 var sem1_total_marks=parseInt($('#sem1_total_marks').val());
 var sem1_obtained_marks=parseInt($('#sem1_obtained_marks').val());
   if(sem1_total_marks < sem1_obtained_marks){
 $('#sem1_marks_error').text("You are Exceeded Total Marks.");
 }
 else{
   $('#sem1_marks_error').text("");
   var sem1_persentage=Number(((sem1_obtained_marks*100)/sem1_total_marks).toFixed(3));
 $( "#sem1_percentage" ).val(sem1_persentage);
 }
});

$( "#sem2_obtained_marks" ).blur(function() {
 var sem2_total_marks=parseInt($('#sem2_total_marks').val());
 var sem2_obtained_marks=parseInt($('#sem2_obtained_marks').val());
   if(sem2_total_marks < sem2_obtained_marks){
 $('#sem2_marks_error').text("You are Exceeded Total Marks.");
 }
 else{
   $('#sem2_marks_error').text("");
   var sem2_persentage=Number(((sem2_obtained_marks*100)/sem2_total_marks).toFixed(3));
    if($('#sem2_obtained_marks').val() == ''){
  $('#sem2_marks_error').text("Enter Your Marks.");
  $( "#sem2_percentage" ).val(0);
   }
   else{
    $( "#sem2_percentage" ).val(sem2_persentage);
	}
   var sem1_percentage=parseFloat($("#sem1_percentage").val());
var sem2_percentage=parseFloat($("#sem2_percentage").val());
  var sem3_percentage=parseFloat($("#sem3_percentage").val());
  var sem4_percentage=parseFloat($("#sem4_percentage").val());
  var sem5_percentage=parseFloat($("#sem5_percentage").val());
  var sem6_percentage=parseFloat($("#sem6_percentage").val());
   var sum=1;
  if(sem2_percentage!=0){
  sum=sum+1;
  }
  if(sem3_percentage!=0){
  sum=sum+1;
  }
   if(sem4_percentage!=0){
  sum=sum+1;
  }
  
  if(sem5_percentage!=0){
  sum=sum+1;
  }
  if(sem6_percentage!=0){
  sum=sum+1;
  }
  var total=(sem1_percentage+sem2_percentage+sem3_percentage+sem4_percentage+sem5_percentage+sem6_percentage)/sum;
      $('#aggregate_marks').val(parseFloat(total));
	   if(total > 70){
        $('#amount').val(0);
        $('#drawn_bank').val("N/A");
        $('#drawn_date').val("N/A");
        $('#dd_number').val(0);
	  }
	  else{
	   $('#drawn_bank').val("");
        $('#drawn_date').val("");
        $('#dd_number').val("");
 var cat1=$('#category').val();
	   if(cat1 == "SC" || cat1 == "ST"){
	  $('#amount').val(200);
	  }
	  else{
	  $('#amount').val(750);
	  }
	  }
 }
});

$( "#sem2_total_marks" ).blur(function() {
 var sem2_total_marks=parseInt($('#sem2_total_marks').val());
 var sem2_obtained_marks=parseInt($('#sem2_obtained_marks').val());
 if(sem2_total_marks < sem2_obtained_marks){
 $('#sem2_marks_error').text("You are Exceeded Total Marks.");
 }
 else{
   $('#sem2_marks_error').text("");
   var sem2_persentage=Number(((sem2_obtained_marks*100)/sem2_total_marks).toFixed(3));
 $( "#sem2_percentage" ).val(sem2_persentage);
 }
});


$( "#sem3_obtained_marks" ).blur(function() {
 var sem3_total_marks=parseInt($('#sem3_total_marks').val());
 var sem3_obtained_marks=parseInt($('#sem3_obtained_marks').val());
 
  if(sem3_total_marks < sem3_obtained_marks){
 $('#sem3_marks_error').text("You are Exceeded Total Marks.");
 }
 else{
   $('#sem3_marks_error').text("");
  var sem3_persentage=Number(((sem3_obtained_marks*100)/sem3_total_marks).toFixed(3));
  if($('#sem3_obtained_marks').val() == ''){
  $('#sem3_marks_error').text("Enter Your Marks.");
  $( "#sem3_percentage" ).val(0);
   }
   else{
   $( "#sem3_percentage" ).val(sem3_persentage);
   }
var sem1_percentage=parseFloat($("#sem1_percentage").val());
  var sem2_percentage=parseFloat($("#sem2_percentage").val());
  var sem3_percentage=parseFloat($("#sem3_percentage").val());
  var sem4_percentage=parseFloat($("#sem4_percentage").val());
  var sem5_percentage=parseFloat($("#sem5_percentage").val());
  var sem6_percentage=parseFloat($("#sem6_percentage").val());
  var sum=2;
  if(sem3_percentage!=0){
  sum=sum+1;
  }
   if(sem4_percentage!=0){
  sum=sum+1;
  }
  
  if(sem5_percentage!=0){
  sum=sum+1;
  }
  if(sem6_percentage!=0){
  sum=sum+1;
  }
  var total=(sem1_percentage+sem2_percentage+sem3_percentage+sem4_percentage+sem5_percentage+sem6_percentage)/sum;
      $('#aggregate_marks').val(parseFloat(total));
	   if(total > 70){
        $('#amount').val(0);
        $('#drawn_bank').val("N/A");
        $('#drawn_date').val("N/A");
        $('#dd_number').val(0);
	  }
	  else{
	  $('#drawn_bank').val("");
        $('#drawn_date').val("");
        $('#dd_number').val("");
 var cat1=$('#category').val();
	   if(cat1 == "SC" || cat1 == "ST"){
	  $('#amount').val(200);
	  }
	  else{
	  $('#amount').val(750);
	  }
	  }
 }
 

});

$( "#sem3_total_marks" ).blur(function() {
 var sem3_total_marks=parseInt($('#sem3_total_marks').val());
 var sem3_obtained_marks=parseInt($('#sem3_obtained_marks').val());
  if(sem3_total_marks < sem3_obtained_marks){
 $('#sem3_marks_error').text("You are Exceeded Total Marks.");
 }
 else{
   $('#sem3_marks_error').text("");
  var sem3_persentage=Number(((sem3_obtained_marks*100)/sem3_total_marks).toFixed(3));
 $( "#sem3_percentage" ).val(sem3_persentage);
 }
});

$( "#sem4_obtained_marks" ).blur(function() {
 var sem4_total_marks=parseInt($('#sem4_total_marks').val());
 var sem4_obtained_marks=parseInt($('#sem4_obtained_marks').val());
 
  if(sem4_total_marks < sem4_obtained_marks){
 $('#sem4_marks_error').text("You are Exceeded Total Marks.");
 }
 else{
   $('#sem4_marks_error').text("");
 var sem4_persentage=Number(((sem4_obtained_marks*100)/sem4_total_marks).toFixed(3));
  if($('#sem4_obtained_marks').val() == ''){
  $('#sem4_marks_error').text("Enter Your Marks.");
  $( "#sem4_percentage" ).val(0);
   }
   else{
  $( "#sem4_percentage" ).val(sem4_persentage);
  }
 var sem1_percentage=parseFloat($("#sem1_percentage").val());
  var sem2_percentage=parseFloat($("#sem2_percentage").val());
  var sem3_percentage=parseFloat($("#sem3_percentage").val());
  var sem4_percentage=parseFloat($("#sem4_percentage").val());
  var sem5_percentage=parseFloat($("#sem5_percentage").val());
  var sem6_percentage=parseFloat($("#sem6_percentage").val());
  var sum=3;
   if(sem4_percentage!=0){
  sum=sum+1;
  }
  if(sem5_percentage!=0){
  sum=sum+1;
  }
  if(sem6_percentage!=0){
  sum=sum+1;
  }
  var total=(sem1_percentage+sem2_percentage+sem3_percentage+sem4_percentage+sem5_percentage+sem6_percentage)/sum;
      $('#aggregate_marks').val(parseFloat(total));
	   if(total > 70){
        $('#amount').val(0);
        $('#drawn_bank').val("N/A");
        $('#drawn_date').val("N/A");
        $('#dd_number').val(0);
	  }
	  else{
	    $('#drawn_bank').val("");
        $('#drawn_date').val("");
        $('#dd_number').val("");
 var cat1=$('#category').val();
	   if(cat1 == "SC" || cat1 == "ST"){
	  $('#amount').val(200);
	  }
	  else{
	  $('#amount').val(750);
	  }
	  }
 }
 
 

});

$( "#sem4_total_marks" ).blur(function() {
 var sem4_total_marks=parseInt($('#sem4_total_marks').val());
 var sem4_obtained_marks=parseInt($('#sem4_obtained_marks').val());
  if(sem4_total_marks < sem4_obtained_marks){
 $('#sem4_marks_error').text("You are Exceeded Total Marks.");
 }
 else{
   $('#sem4_marks_error').text("");
 var sem4_persentage=Number(((sem4_obtained_marks*100)/sem4_total_marks).toFixed(3));
 $( "#sem4_percentage" ).val(sem4_persentage);
 }
});


$( "#sem5_obtained_marks" ).blur(function() {
 var sem5_total_marks=parseInt($('#sem5_total_marks').val());
 var sem5_obtained_marks=parseInt($('#sem5_obtained_marks').val());
 
 
  if(sem5_total_marks < sem5_obtained_marks){
 $('#sem5_marks_error').text("You are Exceeded Total Marks.");
 }
 else{
   $('#sem5_marks_error').text("");
 
 var sem5_persentage=Number(((sem5_obtained_marks*100)/sem5_total_marks).toFixed(3));
 if($('#sem5_obtained_marks').val() == ''){
  $('#sem5_marks_error').text("Enter Your Marks.");
  $( "#sem5_percentage" ).val(0);
   }
   else{
  $( "#sem5_percentage" ).val(sem5_persentage);
  }
var sem1_percentage=parseFloat($("#sem1_percentage").val());
  var sem2_percentage=parseFloat($("#sem2_percentage").val());
  var sem3_percentage=parseFloat($("#sem3_percentage").val());
  var sem4_percentage=parseFloat($("#sem4_percentage").val());
  var sem5_percentage=parseFloat($("#sem5_percentage").val());
  var sem6_percentage=parseFloat($("#sem6_percentage").val());
  var sum=4;
  if(sem5_percentage!=0){
  sum=sum+1;
  }
  if(sem6_percentage!=0){
  sum=sum+1;
  }
  var total=(sem1_percentage+sem2_percentage+sem3_percentage+sem4_percentage+sem5_percentage+sem6_percentage)/sum;
      $('#aggregate_marks').val(parseFloat(total));
	   if(total > 70){
        $('#amount').val(0);
        $('#drawn_bank').val("N/A");
        $('#drawn_date').val("N/A");
        $('#dd_number').val(0);
	  }
	  else{
	   $('#drawn_bank').val("");
        $('#drawn_date').val("");
        $('#dd_number').val("");
 var cat1=$('#category').val();
	   if(cat1 == "SC" || cat1 == "ST"){
	  $('#amount').val(200);
	  }
	  else{
	  $('#amount').val(750);
	  }
	  }
 }

});

$( "#sem5_total_marks" ).blur(function() {
 var sem5_total_marks=parseInt($('#sem5_total_marks').val());
 var sem5_obtained_marks=parseInt($('#sem5_obtained_marks').val());
  if(sem5_total_marks < sem5_obtained_marks){
 $('#sem5_marks_error').text("You are Exceeded Total Marks.");
 }
 else{
   $('#sem5_marks_error').text("");
 
 var sem5_persentage=Number(((sem5_obtained_marks*100)/sem5_total_marks).toFixed(3));
 $( "#sem5_percentage" ).val(sem5_persentage);
 }

});


$( "#sem6_total_marks" ).blur(function() {
 var sem6_total_marks=parseInt($('#sem6_total_marks').val());
 var sem6_obtained_marks=parseInt($('#sem6_obtained_marks').val());
 
  if(sem6_total_marks < sem6_obtained_marks){
 $('#sem6_marks_error').text("You are Exceeded Total Marks.");
 }
 else{
   $('#sem6_marks_error').text("");
 var sem6_persentage=Number(((sem6_obtained_marks*100)/sem6_total_marks).toFixed(3));
 $( "#sem6_percentage" ).val(sem6_persentage);
 }
 

});

$( "#sem6_obtained_marks" ).blur(function() {
 var sem6_total_marks=parseInt($('#sem6_total_marks').val());
 var sem6_obtained_marks=parseInt($('#sem6_obtained_marks').val());
 if(sem6_total_marks < sem6_obtained_marks){
 $('#sem6_marks_error').text("You are Exceeded Total Marks.");
 }
 else{
   $('#sem6_marks_error').text("");
 var sem6_persentage=Number(((sem6_obtained_marks*100)/sem6_total_marks).toFixed(3));
 if($('#sem6_obtained_marks').val() == ''){
  $('#sem6_marks_error').text("Enter Your Marks.");
  $( "#sem6_percentage" ).val(0);
   }
   else{
  $( "#sem6_percentage" ).val(sem6_persentage);
  }
   var sem1_percentage=parseFloat($("#sem1_percentage").val());
  var sem2_percentage=parseFloat($("#sem2_percentage").val());
  var sem3_percentage=parseFloat($("#sem3_percentage").val());
  var sem4_percentage=parseFloat($("#sem4_percentage").val());
  var sem5_percentage=parseFloat($("#sem5_percentage").val());
  var sem6_percentage=parseFloat($("#sem6_percentage").val());
  var sum=5;
  if(sem6_percentage!=0){
  sum=sum+1;
  }
  var total=(sem1_percentage+sem2_percentage+sem3_percentage+sem4_percentage+sem5_percentage+sem6_percentage)/sum;
      $('#aggregate_marks').val(parseFloat(total));
	   if(total > 70){
        $('#amount').val(0);
        $('#drawn_bank').val("N/A");
        $('#drawn_date').val("N/A");
        $('#dd_number').val(0);
	  }
	  else{
	   $('#drawn_bank').val("");
        $('#drawn_date').val("");
        $('#dd_number').val("");
 var cat1=$('#category').val();
	   if(cat1 == "SC" || cat1 == "ST"){
	  $('#amount').val(200);
	  }
	  else{
	  $('#amount').val(750);
	  }
	  }
 }
});
   
   $(function() {
    $( "#date_birth" ).datepicker({
	  yearRange: "-80:+2",
	   dateFormat: 'yy-mm-dd',
	   changeMonth: true,
      changeYear: true
    });
	
	$( "#backlogs" ).datepicker({
	  yearRange: "-80:+2",
	   dateFormat: 'yy-mm-dd',
	   changeMonth: true,
      changeYear: true
    });

	$( "#drawn_date" ).datepicker({
	  yearRange: "-80:+2",
	   dateFormat: 'yy-mm-dd',
	   changeMonth: true,
      changeYear: true
    });
  });
  </script>

  
  <script>
 /*  $(function() {
  dateFormat: 'yy-mm-dd'
    $( "#date_birth" ).datepicker(
	changeMonth: true,
            changeYear: true,
// yearRange: "1970:2015",
yearRange: "-80:+",

       dateFormat: 'yy-mm-dd',
	);
  }); */
/* $(document).ready(function(){

$('#date_birth').datepicker({
           changeMonth: true,
            changeYear: true,
// yearRange: "1970:2015",
yearRange: "-80:+",

       dateFormat: 'yy-mm-dd',
       });
	   
	   $("#passing_year").datepicker( {
    format: " yyyy", // Notice the Extra space at the beginning
    viewMode: "years", 
    minViewMode: "years"
});
	   
	   
});  */
$('#first_name').blur(function(){
        $(this).val($(this).val().charAt(0).toUpperCase()+$(this).val().slice(1)); 
  });
  $('#last_name').blur(function(){
        $(this).val($(this).val().charAt(0).toUpperCase()+$(this).val().slice(1)); 
  });
</script>