@extends('systemUser.home.main')
@section('user_contents')

        <!-- row -->
      <div class="card m-5">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <form action="#" id="step-form-horizontal" class="step-form-horizontal">
                          <div>
                              <h4>Complete Your Details</h4>
                              <section>
                                  <div class="row">
                                      <div class="col-lg-6">
                                          <div class="form-group">
                                             <select class="form-control" name="collage_id">
                                                 <option value=" select collage here"> select here</option>
                                                 <option value=""> select here</option>
                                                 <option value=""> select here</option>
                                                 <option value=""> select here</option>
                                                 <option value=""> select here</option>
                                             </select>

                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="form-group">
                                              <select class="form-control" name="course_id">
                                                  <option value=" select  here"> select here</option>
                                                  <option value=""> select here</option>
                                                  <option value=""> select here</option>
                                                  <option value=""> select here</option>
                                                  <option value=""> select here</option>
                                              </select>                                          </div>
                                      </div>

                                      <div class="col-12">
                                          <div class="form-group">
                                              <input class="form-control" type="number" minlenght="10" maxlength="13" name="phone_number" placeholder="Phone numberb">
                                          </div>
                                      </div>


                                  </div>

                                  <div class="row ml-5">
                                      <div class="col-lg-2 mt-4 mb-4">
                                          <button class="bg-success form-control">Save</button>
                                      </div>
                                  </div>
                              </section>
                          </div>
                      </form>
                  </div>
              </div>
          </div>

      </div>
        <!-- #/ container -->


@endsection
