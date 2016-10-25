@extends('layouts.master')

@section('content')
<div class="container-fluid">
   <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User Profile</h1>
        </div>
	</div>
 	<div class="row">
            <div class="col-md-4">
                <a href="">
                    <img class="img-responsive" src="http://www.fillmurray.com/200/200" alt="">
                </a>
            </div>
            <div class="col-md-4">
                <h3>Name: </h3>
                <h4>Rating: </h4> 
                <h4>Address:</h4>
                <h4>Phone: </h4>
            </div>
            <div class="col-md-4">
            	<h4>LinkedIn:</h4>
            	<h4>Github:</h4>
            	<h4>Other: </h4>
              <!-- Email Button trigger modal -->
              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">
               <i class="fa fa-envelope" aria-hidden="true"></i> 
              </button>
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


                    <div class="container">
                      <div class="row">
                          <div class="col-md-6 ">
                            <div class="well well-sm">
                              <form class="form-horizontal" action="http://formspree.io/htrevino29@gmail.com" method="post">
                              <fieldset>
                                <legend class="text-center">Email</legend>
                        
                                <!-- Name input-->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="name">Name</label>
                                  <div class="col-md-9">
                                    <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                  </div>
                                </div>
                        
                                <!-- Email input-->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="email">Your E-mail</label>
                                  <div class="col-md-9">
                                    <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                                  </div>
                                </div>
                        
                                <!-- Message body -->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="message">Your message</label>
                                  <div class="col-md-9">
                                    <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                  </div>
                                </div>
                        
                                <!-- Form actions -->
                                <div class="form-group">
                                  <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
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
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      
                    </div>
                  </div>
                </div>
              </div>


































                {{-- ------------------- --}}
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                  Edit Profile
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label>Name</label>
                            <input type="Name" class="form-control" id="name" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label>Address</label>
                            <input type="Address" class="form-control" id="Address" placeholder="Address">
                          </div>                             
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <label>Phone</label>  
                            <input type="phone" class="form-control" id="Phone" placeholder="Phone number">                                
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>

                          <div class="form-group">
                            <label>linkedin</label>
                            <input class="form-control" id="" placeholder="url">
                          </div>
                          <div class="form-group">
                            <label>Github</label>
                            <input  class="form-control" id="" placeholder="url">
                          </div>
                          <div class="form-group">
                            <label>other url</label>
                            <input class="form-control" id="" placeholder="url">
                          </div>
                          <div class="form-group">
                            <label>Content</label>
                            <textarea class="form-control" rows="3"></textarea>
                            
                          </div>








                          <div class="form-group">
                            <label for="exampleInputFile">File upload</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">upload Resume.</p>
                          </div>
                         
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </form>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>


                {{-- ------------------- --}}
            	
            </div>
        </div>
        <hr>
    </div>
    <div class="col-lg-10">
    	<h3>Skills: </h3>
    	<p>skills will go here</p>
    	<h3>Content: </h3>	
    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit aliquam, placeat, laborum ratione eveniet eos ipsam ipsum quidem adipisci, possimus asperiores. Eius natus aut iusto, ipsa sint explicabo eum ipsam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo vitae aut et rerum facilis vel odit quas facere autem unde ratione, possimus praesentium velit delectus aliquid placeat natus. Fugiat, ratione!</p>
    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates ullam itaque nisi, cupiditate blanditiis tenetur minima facilis ipsam facere aspernatur incidunt tempora minus quos adipisci eaque totam beatae, illum! Quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. In enim praesentium et ex quasi molestiae magnam reiciendis mollitia deserunt eum officiis consequatur accusantium, doloribus iste reprehenderit dolorum! Autem earum, aliquam.</p>
    </div>






</div>
@stop