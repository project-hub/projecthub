<footer>
  <div class="footer">
          <div class="">
        <div class="col-md-4 footercontent text-center">
          <span class="copyright">Copyright &copy; Project Hub 2016</span>
        </div>
        <div class="col-md-4 footercontent text-center socialbtn">
          <ul class="list-inline social-buttons socialbtn">
            <li><i class="fa fa-twitter socialicon"></i>
            </li>
            <li><i class="fa fa-facebook socialicon"></i>
            </li>
            <li><i class="fa fa-linkedin socialicon"></i>
            </li>
          </ul>
        </div>
        <div class="col-md-4 footercontent text-center">
          <ul class="list-inline quicklinks">
            <li>
             <!-- Email Button trigger modal -->
             <a data-toggle="modal" data-target="#myModal1" class="footerLink">
               Contact Us
             <a/>
               <!-- Modal -->
               <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      {{-- -------------- EMAIL MODAL ------------------ --}}
                      <h4 class="modal-title" id="myModalLabel">Send Message</h4>
                    </div>
                    <div class="modal-body">
                      {{-- -----body-- --}}


                      <div class="container col-sm-12">
                        <div class="">
                          <div class="col-sm-12">
                            <div class="well well-sm">
                              <form class="form-horizontal" action="http://formspree.io/projecthub.codeup@gmail.com" method="post">
                                <fieldset>
                                  <legend class="text-center">Email</legend>

                                  <!-- Name input-->
                                  <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Name</label>
                                    <div class="col-md-9">
                                      <input id="name" name="name" type="text" placeholder="Name" class="form-control">
                                    </div>
                                  </div>

                                  <!-- Email input-->
                                  <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">Contact E-mail</label>
                                    <div class="col-md-9">
                                      <input id="email" name="email" type="text" placeholder=" Email" class="form-control">
                                    </div>
                                  </div>

                                  <!-- Message body -->
                                  <div class="form-group">
                                    <label class="col-md-3 control-label" for="message"> Message</label>
                                    <div class="col-md-9">
                                      <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here." rows="5"></textarea>
                                    </div>
                                  </div>

                                  <!-- Form actions -->
                                  <div class="form-group">
                                    <div class="col-md-12 text-right">
                                      <button type="submit" class="btn resetBtn btn-sm">Submit</button>
                                    </div>
                                  </div>
                                </fieldset>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{-- ---end modal body------ --}}
                    </div>
                    <div class="modal-footer ">
                      <button type="button" class="btn resetBtn btn-sm" data-dismiss="modal">Close</button>
                      
                    </div>
                  </div>
                </div>
              </div>

            </li>
            <li><a href="#" class="footerLink">Terms of Use</a>
            </li>
            <li><a href="#" class="footerLink">Privacy Policy</a>
            </li>
          </ul>
        </div>
      </div>
   
  </div>
</footer>





