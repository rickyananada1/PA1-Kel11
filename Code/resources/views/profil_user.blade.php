@extends('layouts.app')

@section('content')
<div style="background-color: #eaeaea; padding-top: 13vh; height: 100vh" >

<div class="container">
<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
    <div class="card p-3">
      <div class="e-navlist e-navlist--active-bg">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-2" href="#" target="__blank"><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="#" target="__blank"><button class="btn btn-block btn-secondary"><i class="fa fa-sign-out"></i><span>Logout</span></button></a></li>
          
        </ul>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                
                {{-- Display Picture  --}}
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                    </div>
                  </div>
                </div>
                {{-- End Display Picture  --}}


                {{-- PHOTO SECTION --}}
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  
                  <div class="text-center text-sm-left mb-2 mb-sm-0" style="padding-top: 25px">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">John Smith</h4>
                    <div class="mt-2">
                    </button>
                   
                    {{-- Picture --}}
                    <input type="file" id="fileInput" style="display: none;">
                    <button class="btn btn-primary" onclick="document.getElementById('fileInput').click();">
                      <i class="fa fa-fw fa-camera"></i>
                      <span>Change Photo</span>
                    </button>
                    {{-- End Picture --}}
                
                    </div>
                  </div>
                  {{-- ROLE SETTINGS --}}
                  <div class="text-center text-sm-right">
                    <span class="badge bg-secondary">administrator {{-- Role = Database --}} </span>
                    <div class="text-muted"><small>Joined 09 Dec 2017 {{-- Date = Database --}} </small></div>
                  </div>
                  {{-- END ROLE SETTINGS --}}


                </div>
              </div>
              {{-- End Photo --}}


              {{-- Bar Setting Notification  --}}
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Edit Profil</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Security</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                
                {{-- Edit Profil Bar  --}}
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                  

                  <div class="tab-content pt-3">
                    <div class="tab-pane active">
                      <form class="form" novalidate="">
                        <div class="row">
                          <div class="col">
                            <div class="row">
                              <div class="col">


                                <form action="" method="post">
                                  @csrf
                    {{-- Name Section --}}
                                <div class="form-group">
                                  <label>Full Name</label>
                                  <input class="form-control" type="text" name="name" placeholder="" value=" ">
                                </div>
                              </div>
                    {{-- End Name  --}}
    
                    {{-- Username Section --}}
                              <div class="col">
                                <div class="form-group">
                                  <label>Username</label>
                                  <input class="form-control" type="text" name="username" placeholder="" value="">
                                </div>
                              </div>
                            </div>
                    {{-- End Username --}}
                            
                    {{-- Email Section --}}
                          <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Email</label>
                                  <input class="form-control" type="email" placeholder=""  value="" disabled>
                                </div>
                              </div>
                            </div>
                    {{-- End Email --}}
                            
                     {{--About Section  --}}
                            <div class="row">
                              <div class="col mb-3">
                                <div class="form-group">
                                  <label>About</label>
                                  <textarea class="form-control" rows="5" placeholder="My Bio"></textarea>
                                </div>
                              </div>
                            </div>
                    {{-- End About --}}
    
                          </div>
                        </div>
                       
                        <div class="row">
                          <div class="col d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Save Changes</button>
                          </div>
                        </div>

                      {{-- </form> --}}
                    </div>
                  </div>
                </div>
              {{-- End Bar Edit Profil --}}
            </form>



                {{-- Security Bar --}}
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0" >
                  
                        <div class="row">
                          <div class="col-12 col-sm-6 mb-3">
                            <div class="row">
                              <div class="col">
                                <div class="form-group pt-3">
                                  <label>Current Password</label>
                                  <input class="form-control" type="password" placeholder="••••••">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>New Password</label>
                                  <input class="form-control" type="password" placeholder="••••••">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                  <input class="form-control" type="password" placeholder="••••••"></div>
                              </div>
                            </div>

                            <div class="row pt-4">
                              <div class="col d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit">Save Changes</button>
                              </div>
                            </div>
    
                          </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">saf</div>
              </div>
                {{-- End Security Bar --}}



             

            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-3 mb-3"></div>

  </div>
</div>
</div>

</div>

@endsection
