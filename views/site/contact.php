<?php

use yii\helpers\Url;

?>
<!-- //header -->
    <div class="w3ls-banner contact-agileinfo">
        <div class="container">
            <h2 class="w3ls-title">Need help?</h2>
            <h3 class="w3-subtitle">we're here for you!</h3>
        </div>
    </div>
    <!-- //banner -->
    <!-- breadcrumbs -->
    <div class="w3layouts-breadcrumbs text-center">
        <div class="container">
            <span class="agile-breadcrumbs"><a href="<?= Url::home()?>">Главная</a> > <span>Контакты</span></span>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <div class="w3l-main-contact">
        <div class="container">
            <div class="col-md-3 w3_agileits-contact-inner">
                <ul class="w3-inner-contact">
                    <li><a href="cabletv.html">digital cable tv</a></li>
                    <li><a href="broadband.html">broadband</a></li>
                   <li class="active"><a href="contact.html">customer care</a></li>
                    <li><a href="faq.html">faq</a></li>
                     <li><a href="media.html">mediacontact</a></li>
                </ul>
            </div>
            <div class="col-md-9 agileinfo-contact-main-address">
                <h4 class="w3ls-inner-title">help at hand</h4>
                <p>we aim to provide our customers with best possible services. In case you have any suggestion / feedback,
                    we would be delightful to assist you at the earliest.</p>
                <div class="list_agileits_w3layouts">
                    <div class="section_class_agileits sec-left">
                        <label class="contact-form-w3ls">Select service type<span>*</span></label>
                        <select>
                            <option value="0"> Select </option>
                            <option value="1">Digital TV </option>
                            <option value="2">Broadband</option>   
                    </select>
                    </div>
                    <div class="section_class_agileits sec-right">
                        <label class="contact-form-w3ls">Select enquiry type<span>*</span></label>
                        <select>
                            <option value="0">Select </option>
                            <option value="1">Request</option>
                            <option value="3">Query</option>
                            <option value="2">Complaint</option>
                            <option value="1">Feedback</option>
				         </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="agileits-main-right">
                    <h5>Fill in your details</h5>
                    <form action="#" method="post" class="agile_form">
                        <div class="w3ls-text sec-left">
                            <label class="contact-form-w3ls">Mobile no.<span>*</span></label>
                            <input  placeholder=" " name="first name" type="text" required="">
                        </div>	
                        <div class="w3ls-text sec-right">
                            <label class="contact-form-w3ls">Email<span>*</span></label>
                            <input  placeholder=" " name="first name" type="email" required="">
                        </div>	
                        <div class="clearfix"></div>
                        <div class="w3ls-text sec-left">
                            <label class="contact-form-w3ls">Name<span>*</span></label>
                            <input  placeholder=" " name="first name" type="text" required="">
                        </div>
                        <div class="section_class_agileits sec-right">
                            <label class="contact-form-w3ls">Select Place<span>*</span></label>
                            <select>
                                <option value="0">Select </option>
                                <option value="1">City1</option>
                                <option value="3">City2</option>
                                <option value="2">City3</option>
                                <option value="1">City4</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                        <label class="contact-form-w3ls">What would you like us to assist you with?<span>*</span></label>
                        <textarea  class="w3l_summary"  required=""></textarea>
                        <input type="submit" value="Submit">
                        <p><span>*</span>marked fields are mandatory</p>

                    </form>
		        </div>
		        <div class="clearfix">	</div>
	        </div>		
         </div>
        <div class="clearfix"></div>
        </div>
    	<!-- footer -->