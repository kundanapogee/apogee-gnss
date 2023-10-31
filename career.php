<?php
   include 'header.php';
?>

<section class="breadCrumbHead">
   <div class="overlayBlack">
      <div class="px-0 textwrap">
           <ul class="d-flex align-items-center justify-content-center">
             <li><a href="index.php" class="text-white">Home</a></li>
             <li class="text-white">&nbsp; / &nbsp;</li>
             <li><span class="text-white">Career</span></li>
           </ul>
      </div>
   </div>
</section>

<style>
.carrerSection .vertical-tabs .nav.nav-tabs {
    border-bottom: 0;
    border-right: 2px solid #0875DC;
    display: block;
    float: left;
    margin-right: 20px;
    padding-right: 30px;
    width: 100%;
}
.carrerSection .vertical-tabs .nav-tabs .nav-link {
    border-radius: 0;
    background: #0875DC;
    text-align: center;
    font-size: 16px;
    border: 1px solid #fff;
    color: #fff;
    height: 40px;
    width: 100%;
    position: relative;
}
.carrerSection .vertical-tabs .tab-content>.active {
    background: #fff;
    display: block;
    position: relative;
}
.carrerSection .jobTitle {
    font-size: 20px;
    font-weight: 600;
}
.carrerSection .jobDesList {
    margin: 0;
    padding: 0;
}
.carrerSection .jobDesList li {
    display: inline;
    font-size: 13.5px;
}
.carrerSection .jobDesList li {
    display: inline;
    font-size: 13.5px;
}
.carrerSection .moreBtn {
    padding: 0 9px;
    border: none;
    font-size: 14px;
}
.carrerSection .applyBtn {
    font-size: 14px;
    font-weight: 500;
}
.carrerSection #more{
      display: none;
   }
.carrerSection .nav-tabs .nav-link.active:after {
    content: "";
    width: 15px;
    height: 15px;
    background-color: #0875DC;
    position: absolute;
    transform: rotate(45deg);
    z-index: 9;
    top: 28%;
    right: -8px;
}
</style>


<section class="carrerSection sectionPadding">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="vertical-tabs">
            <div class="row">

              <div>
                <h4>No Vacancies available...</h4>
              </div>

              <!-- <div class="col-md-2">
                <ul class="nav nav-tabs mb-4" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#pag1" role="tab" aria-controls="home">Gujrat</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#pag2" role="tab" aria-controls="profile">Noida</a>
                  </li>
                </ul>
              </div> -->

              <!-- <div class="col-md-10">
                  <div class="tab-content">
                    <div class="tab-pane active" id="pag1" role="tabpanel">
                      <div class="sv-tab-panel">
                        <h3 class="mb-1 textGreen jobTitle">Sr. Developer</h3>
                        <ul class="jobDesList">
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                        </ul>
                        <div class="mt-1">
                         <p class="fontFourteen mb-2"><span id="dots">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis...</span><span id="more">kundan erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                          <button onclick="myReadMore()" class="moreBtn pull-left" id="myReadmoreBtn">Read more</button>
                          <div class="mt-2 pull-left">
                            <a href="#" class="textGreen applyBtn" data-toggle="modal" data-target="#applyModel"> Apply Now </a>
                            <div class="modal" id="applyModel">
                              <div class="modal-dialog">
                                <div class="modal-content rounded-0" style="border: 1px solid #255946;">
                                  <div class="modal-header rounded-0 DarkBlueBg" >
                                    <h4 class="modal-title text-white" style="font-size: 20px;">Fill Your Detail</h4>
                                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="formWrap">
                                      <form action="#" class="myForm queryForm" id="applyForm">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Name: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="name">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> E-mail: <span class="text-danger">*</span></label>
                                              <input type="email" class="form-control" name="email">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Contact Number: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="mobile">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Upload Resume: <span class="text-danger">*</span></label>
                                              <input type="file" class="form-control" name="resume" style="padding:3px;">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="email"> Your Message: </label>
                                              <textarea class="form-control" rows="2" name="message" ></textarea>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <button type="submit" class="btn btn-default DarkBlueBg text-white rounded-0 px-4">Submit</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                     
                      </div>
                      <hr>
                      <div class="sv-tab-panel">
                        <h3 class="mb-1 textGreen jobTitle">Full Stack Developer</h3>
                        <ul class="jobDesList">
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                        </ul>
                        <div class="mt-1">
                         <p class="fontFourteen mb-2"><span id="dots">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel ...</span><span id="more">kundan erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                          <button onclick="myReadMore()" class="moreBtn pull-left" id="myReadmoreBtn">Read more</button>
                          <div class="mt-2 pull-left">
                            <a href="#" class="textGreen applyBtn" data-toggle="modal" data-target="#applyModel"> Apply Now </a>
                            <div class="modal" id="applyModel">
                              <div class="modal-dialog">
                                <div class="modal-content rounded-0" style="border: 1px solid #255946;">
                                  <div class="modal-header rounded-0 bgGreen" >
                                    <h4 class="modal-title text-white" style="font-size: 20px;">Fill Your Detail</h4>
                                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="formWrap">
                                      <form action="#" class="myForm queryForm" id="applyForm">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Name: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="name">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> E-mail: <span class="text-danger">*</span></label>
                                              <input type="email" class="form-control" name="email">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Contact Number: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="mobile">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Upload Resume: <span class="text-danger">*</span></label>
                                              <input type="file" class="form-control" name="resume" style="padding:3px;">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="email"> Your Message: </label>
                                              <textarea class="form-control" rows="2" name="message" ></textarea>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <button type="submit" class="btn btn-default myButtonEffect">Submit</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                        
                      </div>
                      <hr>
                      <div class="sv-tab-panel">
                        <h3 class="mb-1 textGreen jobTitle">Junior Developer</h3>
                        <ul class="jobDesList">
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                        </ul>
                        <div class="mt-1">
                          <p class="fontFourteen mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                          <button onclick="myReadMore()" class="moreBtn pull-left" id="myReadmoreBtn">Read more</button>
                          <div>
                            <a href="#" class="textGreen applyBtn" data-toggle="modal" data-target="#applyModel"> Apply Now </a>
                            <div class="modal" id="applyModel">
                              <div class="modal-dialog">
                                <div class="modal-content rounded-0" style="border: 1px solid #255946;">
                                  <div class="modal-header rounded-0 bgGreen" >
                                    <h4 class="modal-title text-white" style="font-size: 20px;">Fill Your Detail</h4>
                                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="formWrap">
                                      <form action="#" class="myForm queryForm" id="applyForm">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Name: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="name">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> E-mail: <span class="text-danger">*</span></label>
                                              <input type="email" class="form-control" name="email">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Contact Number: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="mobile">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Upload Resume: <span class="text-danger">*</span></label>
                                              <input type="file" class="form-control" name="resume" style="padding:3px;">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="email"> Your Message: </label>
                                              <textarea class="form-control" rows="2" name="message" ></textarea>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <button type="submit" class="btn btn-default myButtonEffect">Submit</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                        
                      </div>
                      <hr>
                      <div class="sv-tab-panel">
                        <h3 class="mb-1 textGreen jobTitle">Digital Marketing</h3>
                        <ul class="jobDesList">
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                        </ul>
                        <div class="mt-1">
                         <p class="fontFourteen mb-2"><span id="dots">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel ...</span><span id="more">kundan erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                          <button onclick="myReadMore()" class="moreBtn pull-left" id="myReadmoreBtn">Read more</button>
                          <div class="mt-2 pull-left">
                            <a href="#" class="textGreen applyBtn" data-toggle="modal" data-target="#applyModel"> Apply Now </a>
                            <div class="modal" id="applyModel">
                              <div class="modal-dialog">
                                <div class="modal-content rounded-0" style="border: 1px solid #255946;">
                                  <div class="modal-header rounded-0 bgGreen" >
                                    <h4 class="modal-title text-white" style="font-size: 20px;">Fill Your Detail</h4>
                                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="formWrap">
                                      <form action="#" class="myForm queryForm" id="applyForm">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Name: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="name">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> E-mail: <span class="text-danger">*</span></label>
                                              <input type="email" class="form-control" name="email">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Contact Number: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="mobile">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Upload Resume: <span class="text-danger">*</span></label>
                                              <input type="file" class="form-control" name="resume" style="padding:3px;">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="email"> Your Message: </label>
                                              <textarea class="form-control" rows="2" name="message" ></textarea>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <button type="submit" class="btn btn-default myButtonEffect">Submit</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                     
                      </div>
                      <hr>
                      <div class="sv-tab-panel">
                        <h3 class="mb-1 textGreen jobTitle">UI/UX Designer</h3>
                        <ul class="jobDesList">
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                        </ul>
                        <div class="mt-1">
                         <p class="fontFourteen mb-2"><span id="dots">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel ...</span><span id="more">kundan erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                          <button onclick="myReadMore()" class="moreBtn pull-left" id="myReadmoreBtn">Read more</button>
                          <div class="mt-2 pull-left">
                            <a href="#" class="textGreen applyBtn" data-toggle="modal" data-target="#applyModel"> Apply Now </a>
                            <div class="modal" id="applyModel">
                              <div class="modal-dialog">
                                <div class="modal-content rounded-0" style="border: 1px solid #255946;">
                                  <div class="modal-header rounded-0 bgGreen" >
                                    <h4 class="modal-title text-white" style="font-size: 20px;">Fill Your Detail</h4>
                                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="formWrap">
                                      <form action="#" class="myForm queryForm" id="applyForm">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Name: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="name">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> E-mail: <span class="text-danger">*</span></label>
                                              <input type="email" class="form-control" name="email">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Contact Number: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="mobile">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Upload Resume: <span class="text-danger">*</span></label>
                                              <input type="file" class="form-control" name="resume" style="padding:3px;">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="email"> Your Message: </label>
                                              <textarea class="form-control" rows="2" name="message" ></textarea>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <button type="submit" class="btn btn-default myButtonEffect">Submit</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                     
                      </div>
                      <hr>
                      <div class="sv-tab-panel">
                        <h3 class="mb-1 textGreen jobTitle">Android Developer</h3>
                        <ul class="jobDesList">
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                        </ul>
                        <div class="mt-1">
                         <p class="fontFourteen mb-2"><span id="dots">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel ...</span><span id="more">kundan erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                          <button onclick="myReadMore()" class="moreBtn pull-left" id="myReadmoreBtn">Read more</button>
                          <div class="mt-2 pull-left">
                            <a href="#" class="textGreen applyBtn" data-toggle="modal" data-target="#applyModel"> Apply Now </a>
                            <div class="modal" id="applyModel">
                              <div class="modal-dialog">
                                <div class="modal-content rounded-0" style="border: 1px solid #255946;">
                                  <div class="modal-header rounded-0 bgGreen" >
                                    <h4 class="modal-title text-white" style="font-size: 20px;">Fill Your Detail</h4>
                                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="formWrap">
                                      <form action="#" class="myForm queryForm" id="applyForm">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Name: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="name">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> E-mail: <span class="text-danger">*</span></label>
                                              <input type="email" class="form-control" name="email">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Contact Number: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="mobile">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Upload Resume: <span class="text-danger">*</span></label>
                                              <input type="file" class="form-control" name="resume" style="padding:3px;">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="email"> Your Message: </label>
                                              <textarea class="form-control" rows="2" name="message" ></textarea>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <button type="submit" class="btn btn-default myButtonEffect">Submit</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                     
                      </div>
                    </div>
                    <div class="tab-pane" id="pag2" role="tabpanel">
                      <div class="sv-tab-panel">
                        <h3 class="mb-1 textGreen jobTitle">Web Developer</h3>
                        <ul class="jobDesList">
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                        </ul>
                        <div class="mt-1">
                         <p class="fontFourteen mb-2"><span id="dots">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis...</span><span id="more">kundan erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                          <button onclick="myReadMore()" class="moreBtn pull-left" id="myReadmoreBtn">Read more</button>
                          <div class="mt-2 pull-left">
                            <a href="#" class="textGreen applyBtn" data-toggle="modal" data-target="#applyModel1"> Apply Now </a>
                            <div class="modal" id="applyModel1">
                              <div class="modal-dialog">
                                <div class="modal-content rounded-0" style="border: 1px solid #255946;">
                                  <div class="modal-header rounded-0 bgGreen" >
                                    <h4 class="modal-title text-white" style="font-size: 20px;">Fill Your Detail</h4>
                                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="formWrap">
                                      <form action="#" class="myForm queryForm" id="applyForm">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Name: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="name">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> E-mail: <span class="text-danger">*</span></label>
                                              <input type="email" class="form-control" name="email">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Contact Number: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="mobile">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Upload Resume: <span class="text-danger">*</span></label>
                                              <input type="file" class="form-control" name="resume" style="padding:3px;">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="email"> Your Message: </label>
                                              <textarea class="form-control" rows="2" name="message" ></textarea>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <button type="submit" class="btn btn-default myButtonEffect">Submit</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                     
                      </div>
                      <hr>
                      <div class="sv-tab-panel">
                        <h3 class="mb-1 textGreen jobTitle">Web Designer</h3>
                        <ul class="jobDesList">
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                        </ul>
                        <div class="mt-1">
                         <p class="fontFourteen mb-2"><span id="dots">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel ...</span><span id="more">kundan erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                          <button onclick="myReadMore()" class="moreBtn pull-left" id="myReadmoreBtn">Read more</button>
                          <div class="mt-2 pull-left">
                            <a href="#" class="textGreen applyBtn" data-toggle="modal" data-target="#applyModel"> Apply Now </a>
                            <div class="modal" id="applyModel">
                              <div class="modal-dialog">
                                <div class="modal-content rounded-0" style="border: 1px solid #255946;">
                                  <div class="modal-header rounded-0 bgGreen" >
                                    <h4 class="modal-title text-white" style="font-size: 20px;">Fill Your Detail</h4>
                                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="formWrap">
                                      <form action="#" class="myForm queryForm" id="applyForm">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Name: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="name">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> E-mail: <span class="text-danger">*</span></label>
                                              <input type="email" class="form-control" name="email">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Contact Number: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="mobile">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Upload Resume: <span class="text-danger">*</span></label>
                                              <input type="file" class="form-control" name="resume" style="padding:3px;">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="email"> Your Message: </label>
                                              <textarea class="form-control" rows="2" name="message" ></textarea>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <button type="submit" class="btn btn-default myButtonEffect">Submit</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                        
                      </div>
                      <hr>
                      <div class="sv-tab-panel">
                        <h3 class="mb-1 textGreen jobTitle">Contractor</h3>
                        <ul class="jobDesList">
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                        </ul>
                        <div class="mt-1">
                          <p class="fontFourteen mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                          <button onclick="myReadMore()" class="moreBtn pull-left" id="myReadmoreBtn">Read more</button>
                          <div>
                            <a href="#" class="textGreen applyBtn" data-toggle="modal" data-target="#applyModel"> Apply Now </a>
                            <div class="modal" id="applyModel">
                              <div class="modal-dialog">
                                <div class="modal-content rounded-0" style="border: 1px solid #255946;">
                                  <div class="modal-header rounded-0 bgGreen" >
                                    <h4 class="modal-title text-white" style="font-size: 20px;">Fill Your Detail</h4>
                                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="formWrap">
                                      <form action="#" class="myForm queryForm" id="applyForm">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Name: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="name">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> E-mail: <span class="text-danger">*</span></label>
                                              <input type="email" class="form-control" name="email">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Contact Number: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="mobile">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Upload Resume: <span class="text-danger">*</span></label>
                                              <input type="file" class="form-control" name="resume" style="padding:3px;">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="email"> Your Message: </label>
                                              <textarea class="form-control" rows="2" name="message" ></textarea>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <button type="submit" class="btn btn-default myButtonEffect">Submit</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                        
                      </div>
                      <hr>
                      <div class="sv-tab-panel">
                        <h3 class="mb-1 textGreen jobTitle">Digital Marketing</h3>
                        <ul class="jobDesList">
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                        </ul>
                        <div class="mt-1">
                         <p class="fontFourteen mb-2"><span id="dots">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel ...</span><span id="more">kundan erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                          <button onclick="myReadMore()" class="moreBtn pull-left" id="myReadmoreBtn">Read more</button>
                          <div class="mt-2 pull-left">
                            <a href="#" class="textGreen applyBtn" data-toggle="modal" data-target="#applyModel"> Apply Now </a>
                            <div class="modal" id="applyModel">
                              <div class="modal-dialog">
                                <div class="modal-content rounded-0" style="border: 1px solid #255946;">
                                  <div class="modal-header rounded-0 bgGreen" >
                                    <h4 class="modal-title text-white" style="font-size: 20px;">Fill Your Detail</h4>
                                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="formWrap">
                                      <form action="#" class="myForm queryForm" id="applyForm">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Name: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="name">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> E-mail: <span class="text-danger">*</span></label>
                                              <input type="email" class="form-control" name="email">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Contact Number: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="mobile">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Upload Resume: <span class="text-danger">*</span></label>
                                              <input type="file" class="form-control" name="resume" style="padding:3px;">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="email"> Your Message: </label>
                                              <textarea class="form-control" rows="2" name="message" ></textarea>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <button type="submit" class="btn btn-default myButtonEffect">Submit</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                     
                      </div>
                      <hr>
                      <div class="sv-tab-panel">
                        <h3 class="mb-1 textGreen jobTitle">UI/UX Designer</h3>
                        <ul class="jobDesList">
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                        </ul>
                        <div class="mt-1">
                         <p class="fontFourteen mb-2"><span id="dots">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel ...</span><span id="more">kundan erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                          <button onclick="myReadMore()" class="moreBtn pull-left" id="myReadmoreBtn">Read more</button>
                          <div class="mt-2 pull-left">
                            <a href="#" class="textGreen applyBtn" data-toggle="modal" data-target="#applyModel"> Apply Now </a>
                            <div class="modal" id="applyModel">
                              <div class="modal-dialog">
                                <div class="modal-content rounded-0" style="border: 1px solid #255946;">
                                  <div class="modal-header rounded-0 bgGreen" >
                                    <h4 class="modal-title text-white" style="font-size: 20px;">Fill Your Detail</h4>
                                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="formWrap">
                                      <form action="#" class="myForm queryForm" id="applyForm">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Name: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="name">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> E-mail: <span class="text-danger">*</span></label>
                                              <input type="email" class="form-control" name="email">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Contact Number: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="mobile">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Upload Resume: <span class="text-danger">*</span></label>
                                              <input type="file" class="form-control" name="resume" style="padding:3px;">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="email"> Your Message: </label>
                                              <textarea class="form-control" rows="2" name="message" ></textarea>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <button type="submit" class="btn btn-default myButtonEffect">Submit</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                     
                      </div>
                      <hr>
                      <div class="sv-tab-panel">
                        <h3 class="mb-1 textGreen jobTitle">Android Developer</h3>
                        <ul class="jobDesList">
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                          <li><strong>Job Type : </strong> <span>Full Time</span></li>
                        </ul>
                        <div class="mt-1">
                         <p class="fontFourteen mb-2"><span id="dots">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel ...</span><span id="more">kundan erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                          <button onclick="myReadMore()" class="moreBtn pull-left" id="myReadmoreBtn">Read more</button>
                          <div class="mt-2 pull-left">
                            <a href="#" class="textGreen applyBtn" data-toggle="modal" data-target="#applyModel"> Apply Now </a>
                            <div class="modal" id="applyModel">
                              <div class="modal-dialog">
                                <div class="modal-content rounded-0" style="border: 1px solid #255946;">
                                  <div class="modal-header rounded-0 bgGreen" >
                                    <h4 class="modal-title text-white" style="font-size: 20px;">Fill Your Detail</h4>
                                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="formWrap">
                                      <form action="#" class="myForm queryForm" id="applyForm">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Name: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="name">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> E-mail: <span class="text-danger">*</span></label>
                                              <input type="email" class="form-control" name="email">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Contact Number: <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" name="mobile">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="email"> Upload Resume: <span class="text-danger">*</span></label>
                                              <input type="file" class="form-control" name="resume" style="padding:3px;">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="email"> Your Message: </label>
                                              <textarea class="form-control" rows="2" name="message" ></textarea>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <button type="submit" class="btn btn-default myButtonEffect">Submit</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                     
                      </div>
                    </div>
                    
                    

                  </div>
              </div> -->







            </div>
          </div>
      </div>
    </div>
  </div>  
</section>




<?php
   include 'footer.php';
?>
<script> 
   function myReadMore() {   
     var dots = document.getElementById("dots");   
     var moreText = document.getElementById("more");   
     var btnText = document.getElementById("myReadmoreBtn");   
     if (dots.style.display === "inline") {   
       dots.style.display = "none";   
       btnText.innerHTML = "Read less";   
       moreText.style.display = "inline";   
     } else {   
       dots.style.display = "inline";   
       btnText.innerHTML = "Read more";   
       moreText.style.display = "none";   
     }   
   }   
</script>