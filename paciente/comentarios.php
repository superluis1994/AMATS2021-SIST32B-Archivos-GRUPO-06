<div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="author">
                    <a href="#">
                   <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                     <h4 class="title">Mike Andrew<br />
                        <small>michael24</small>
                     </h4>
                   </a>
               </div>
                <div class="col-md-6 form-group">
                <!--   <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" /> -->
                  <!-- <img src="../assets/img/apple-touch-icon.png" alt="" class="img-circle"> 
                  <div class="validate"></div> -->
                </div>
                <!-- <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div> -->
              </div>
              <div class="form-group" style="width: 500px; margin-left: 100px" >
                <input type="text" class="form-control" name="subject" id="subject" placeholder="motivo" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group" style=" margin-left: 100px" >
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-info btn-fill pull-right">Send Message</button></div>
            </form>

          </div>