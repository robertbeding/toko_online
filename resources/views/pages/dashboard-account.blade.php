@extends('layouts.dashboard')

@section('title')
    Store Dashboard Account
@endsection

@section('content')
<div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">My Account</h2>
                <p class="dashboard-subtitle">
                  Update your current profile
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="name">Your Name</label>
                              <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                value="Robert Beding"
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input
                                type="text"
                                class="form-control"
                                id="email"
                                name="email"
                                value="robert.beding@yahoo.com"
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="addressOne">Address 1</label>
                              <input
                                type="text"
                                class="form-control"
                                id="addressOne"
                                name="addressOne"
                                value="Setra Duta Cemara"
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="addressTwo">Address 2</label>
                              <input
                                type="text"
                                class="form-control"
                                id="addressTwo"
                                name="addressTwo"
                                value="Blok B2 No. 96"
                              />
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="province">Province</label>
                              <select name="province" id="province" class="form-control">
                                <option value="DIY">D.I Yogyakarta</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="city">City</label>
                              <select name="city" id="city" class="form-control">
                                <option value="Yogyakarta">Yogyakarta</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="postalCode">Postal Code</label>
                              <input
                                type="text"
                                class="form-control"
                                id="postalCode"
                                name="postalCode"
                                value="55612"
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="country">Country</label>
                              <input
                                type="text"
                                class="form-control"
                                id="country"
                                name="country"
                                value="Indonesia"
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="mobile">Mobile Phone</label>
                              <input
                                type="text"
                                class="form-control"
                                id="mobile"
                                name="mobile"
                                value="+628 96717 02406"
                              />
                            </div>
                          </div>
                         
                        </div>
                        <div class="row">
                          <div class="col-12 text-right">
                            <button type="submit" class="btn btn-success px-5 rounded-pill">
                              Save Now
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection

