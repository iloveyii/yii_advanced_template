<div class="col-md-10 col-md-offset-1">
    <h2>Contact Form</h2><hr />
    <form class="form-horizontal" autocomplete="on">
          <div class="form-group">
              <label for="name" class="col-xs-3 col-sm-2 control-label">Name</label> 
              <div class="col-md-9">
                  <input type="text" required autofocus name="name" class="form-control" placeholder="Enter Name ..."/>
              </div>
          </div>

          <div class="form-group">
              <label for="email" class="col-xs-3 col-sm-2 control-label">Email</label> 
              <div class="col-md-9">
                  <input type="email" name="email" class="form-control" placeholder="Enter Email ..."/>
              </div>
          </div>

          <div class="form-group">
              <label for="message" class="col-xs-3 col-sm-2 control-label">Message</label> 
              <div class="col-md-9">
                  <textarea rows="5" name="email" class="form-control" placeholder="Enter Message ..."></textarea>
              </div>
          </div>

          <div class="form-group">
              <label for="websites" class="col-xs-3 col-sm-2 control-label">Favourite websites</label>
              <div class="col-md-9">
                  <label class="checkbox-inline">
                      <input type="checkbox" value="option1" /> YouTube
                  </label>
                  <label class="checkbox-inline">
                      <input type="checkbox" value="option1" /> Google
                  </label>
                  <label class="checkbox-inline">
                      <input type="checkbox" value="option1" /> Twitter
                  </label>
              </div>
          </div>

          <div class="form-group">
              <label for="gender" class="col-xs-3 col-sm-2 control-label">Gender</label>
              <div class="col-md-9">
                  <label class="checkbox-inline">
                      <input type="radio" required name="gender" value="option1" /> Male
                  </label>
                  <label class="checkbox-inline">
                      <input type="radio" required name="gender"  value="option1" /> Female
                  </label>
              </div>
          </div>

           <div class="form-group">
              <label for="city" class="col-xs-3 col-sm-2 control-label">City</label> 
              <div class="col-md-9">
                  <select class="form-control">
                      <option>Stockholm</option>
                      <option>Gothunberg</option>
                      <option>Mälmo</option>
                      <option>Linköping</option>
                  </select>
              </div>
          </div>

          <div class="form-group">
              <div class="col-xs-offset-3 col-xs-9 col-sm-offset-2 col-sm-6 col-md-4">
                  <input type="submit" class="btn btn-primary" value="Submit" />
                  <input type="reset" class="btn btn-default" value="Clear"/>
              </div>
          </div>

      </form>
</div>