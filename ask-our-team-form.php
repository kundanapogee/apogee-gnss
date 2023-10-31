<div class="container">
   <hr class="my-0">
</div>



<section class="sectionPadding queryForm">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-left">
          <h4 class="text-uppercase text-grey">Have a question?</h4>
          <h3 class="headingHeadOne">Ask our team</h3>
          <p class="text-grey bottomPara">Fill the form given below or write us at <a href="mailto:sales@apogeegnss.com">sales@apogeegnss.com.</a> We will reply to your query within 24 to 48 hours. However, most of the time, we reply early than the given time.</p>
          <h4></h4>
        </div>
        <div class="mt-4">
          <form method="post" action="#">
            <div id="queryFormMessage"></div>
            <!-- <div class="alert alert-success bg-success text-white fontFourteen mb-3 py-2 px-3">
                <strong>Success!</strong> Your message has been sent successfully. We contact to you soon..
            </div>
            <div class="alert alert-danger bg-danger text-white fontFourteen mb-3 py-2 px-3">
              <strong>Sorry!</strong> Your message has not been sent. Please try again.
            </div> -->
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label>Your Name:<sup class="text-danger">*</sup></label>
                  <input type="text" name="name" class="form-control" id="queryName">
                </div>
              </div>              
              <div class="col-md-3">
                <div class="form-group">
                  <label>Email:<sup class="text-danger">*</sup></label>
                  <input type="email" name="email" class="form-control" id="queryEmail">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Mobile:<sup class="text-danger">*</sup></label>
                  <input type="text" name="mobile" class="form-control" id="queryMobile">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Location:<sup class="text-danger">*</sup></label>
                  <input type="text" name="address" class="form-control" id="queryLocation">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Message:</label>
                  <textarea class="form-control" id="queryMessage"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-12">
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="form-group mb-0">
                  <!-- <div id="myRecaptcha"></div> -->
                  <br>
                  <input type="submit" class="btn w-100 formButton rounded-0 text-white" name="submitBtn" value="Submit">
                  <!--<button type="button" class="btn w-100 formButton rounded-0 text-white" id="formSubmitQuery">Submit</button>-->
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>



<div class="container text-center sectionPadding pt-0">
   <a href="contact.php" class="buyBtn fontFourteen">How to buy &nbsp; <i class="fas fa-long-arrow-alt-right"></i></a>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<script>
  $("#formSubmitQuery").click(function(){

    // alert("Hello");

    var queryName = $("#queryName").val();
    var queryEmail = $("#queryEmail").val();
    var queryMobile = $("#queryMobile").val();
    var queryLocation = $("#queryLocation").val();    
    var queryMessage = $("#queryMessage").val();
    $.ajax({
      url: "backend/ask-our-team-form-ajax.php",
      type: "POST",
      data : { queryName : queryName, queryEmail : queryEmail, queryLocation : queryLocation, queryMobile : queryMobile, queryMessage : queryMessage },
      success: function(result){      
        $("#queryName").val('');
        $("#queryEmail").val('');
        $("#queryMobile").val('');
        $("#queryLocation").val('');        
        $("#queryMessage").val('');   
        $("#queryFormMessage").html(result);
        $("#queryFormMessage").fadeOut(15000); 
      // console.log(result);
    }});
  });
</script>