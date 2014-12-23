<?php
require_once 'includes/header.php';
require_once 'includes/jobsModel.php';

?>
<!-- webSite Content Start-->
<div class="main-header"></div>
<div class="block">    
    <div class="bottom-space jobs-grid">       
        <div class="bottom-space"></div>
          <div class="work bottom-space">
            <div>
                <input type="text" class="required-entry plh txt-big input-big" title="First Name"  name="firstname" onclick="return {placeholder:'First Name'};" id="firstname" placeholder="Type here the position you want to apply for...">
            </div>
            <p>Thank you for considering a career at MarkaVIP. Please take a minute to fill out the following form.
                After you have completed your application a confirmation email will be sent to you.</p>
          </div>        
    </div>
    <div class="fileUpload">
                <label class="upload-label">Resume<span class="dept">*</span></label>
                <div class="file_upload">
                    <input type="file" name="file_upload" id="file_upload">
                </div>
                <label style="margin-left: 80px;" class="upload-label">Cover Letter</label>
                <div class="file_upload">
                    <input type="file" name="file_upload" id="file_upload">
                </div>
                <div class="bottom-space"></div>
     </div>
    <hr>    
    <div class="bottom-space"></div>
    <div class="work bottom-space">
        <h1>Personal Information</h1>
    <div class="bottom-space"></div>
    <div class="form-col">
            <label class="required upload-label">First name<em class="orange">*</em></label>
            <div class="input-box">
                <input type="text" class="input-text required-entry plh txt-big" title="First Name"  name="firstname" onclick="return {placeholder:'First Name'};" id="firstname">
            </div>
    </div>
    <div class="form-col">
            <label class="required upload-label">First name<em class="orange">*</em></label>
            <div class="input-box">
                <input type="text" class="input-text required-entry plh txt-big" title="First Name"  name="firstname" onclick="return {placeholder:'First Name'};" id="firstname">
            </div>
    </div>    
    <div class="form-col">
            <label class="required upload-label">First name<em class="orange">*</em></label>
            <div class="input-box">
                <input type="text" class="input-text required-entry plh txt-big" title="First Name"  name="firstname" onclick="return {placeholder:'First Name'};" id="firstname">
            </div>
    </div>
    <div class="form-col">
            <label class="required upload-label">First name<em class="orange">*</em></label>
            <div class="input-box">
                <input type="text" class="input-text required-entry plh txt-big" title="First Name"  name="firstname" onclick="return {placeholder:'First Name'};" id="firstname">
            </div>
    </div>
    <div class="form-col"></div>
    <div class="form-col" style="float: right;width: 38%">
        <input class="submit-orange" type="submit" name="submit" value="SEND APPLICATION"/>
    </div>
<!--    <div class="btn-area">
        <button class="btn-area">SEND APPLICATION</button>
        <input class="btn-area" type="submit" name="submit" value="SEND APPLICATION"/>
   </div>-->
   <div class="clear"></div> 
   <div class="bottom-space"></div>
</div>
    <div class="bottom-space">        
    </div>
</div>
<div class="block">
    <div class="main-title bottom-space v-align">
        <p>If you don't see the position you're looking for, <a href='' class="orange">click here.</a></p>
    </div>
</div>


                    <!-- webSite Content End-->
                    <?php require_once 'includes/footer.php'; ?>