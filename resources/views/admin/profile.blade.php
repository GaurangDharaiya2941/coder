@extends('layouts.admin')

@section('title', 'Profile')

@section('content')
<div class="row">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-warning card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('dist/img/user4-128x128.jpg')}}"
                        alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>

                <p class="text-muted text-center">{{ $detail['post'] }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Followers</b> <a class="float-right">{{ $profile['followers'] }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Following</b> <a class="float-right">{{ $profile['follows'] }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Friends</b> <a class="float-right">{{ $profile['friends'] }}</a>
                    </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>
                @if(isset($detail['post_greduate']))
                <p class="text-muted">{{ $detail['post_greduate']." in Computer Science from the University of ".$detail['post_collage'] }}</p>
                @elseif(isset($detail['greadute']))
                <p class="text-muted">
                    {{ $detail['greadute']." in Computer Science from the University of ".$detail['collage'] }}
                </p>
                @elseif(isset($detail['other_school']))
                <p class="text-muted">{{ $detail['post_greduate']." in Computer Science from the University of ".$detail['post_collage'] }}</p>
                @elseif(isset($detail['school']))
                <p class="text-muted">{{ $detail['post_greduate']." in Computer Science from the University of ".$detail['post_collage'] }}</p>
                @endif
                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">{{ $detail['city'].", ".$detail['country'] }}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                    <span class="tag tag-danger">UI Design</span>
                    <span class="tag tag-success">Coding</span>
                    <span class="tag tag-info">Javascript</span>
                    <span class="tag tag-warning">PHP</span>
                    <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim
                    neque.</p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">

        <div class="card card-success card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs text-sm" id="nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="pill" href="#home" role="tab" aria-controls="home"
                            aria-selected="true">Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="pill" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Address</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-info-tab" data-toggle="pill" href="#contact-info" role="tab"
                            aria-controls="contact-info" aria-selected="false">Contact Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="social-accounts-tab" data-toggle="pill" href="#social-accounts" role="tab"
                            aria-controls="social-accounts" aria-selected="false">Social Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="activity-tab" data-toggle="pill" href="#activity" role="tab"
                            aria-controls="activity" aria-selected="false">Activity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="timeline-tab" data-toggle="pill" href="#timeline" role="tab"
                            aria-controls="timeline" aria-selected="false">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab"
                            aria-controls="password" aria-selected="false">Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="settings-tab" data-toggle="pill" href="#settings" role="tab"
                            aria-controls="settings" aria-selected="false">settings</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="nav-tabs-tabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form action="{{ route('superadmin.update.profile') }}" method="post" class="">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Name: <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control form-control-lg @error('name') is-invalid @enderror" name="name"
                                            value="{{ auth()->user()->name }}" placeholder="enter full name" autofocus autocomplete="off">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email: <span class="text-danger">*</span></label>
                                        <input type="email"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            name="email" id="email" value="{{ auth()->user()->email }}"
                                            placeholder="please enter email" disabled>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status: </label>
                                        <input type="checkbox" name="status" checked data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="Active" data-off-text="Inactive">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <button class="btn btn-danger" type="cancel">Cancel</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username">Username: <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control form-control-lg @error('username') is-invalid @enderror"
                                            name="username" id="username" value="{{ auth()->user()->username }}"
                                            placeholder="please enter username" autocomplete="off">
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile_number">Mobile Number: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-lg @error('mobile_number') is-invalid @enderror" name="mobile_number" id="mobile_number" value="{{ auth()->user()->mobile_number }}" placeholder="Enter mobile number" autocomplete="off">
                                        @error('mobile_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <h3>Other information</h3>
                        <form action="{{ route('superadmin.update.detail') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Date of birth: <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ $detail['dob'] }}" placeholder="dd/mm/YYYY" required>
                                        @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">10th School: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('school') is-invalid @enderror" name="school" value="{{ $detail['school'] }}" placeholder="" required>
                                        @error('school')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Collage: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('') is-invalid @enderror" name="greadute" value="{{ $detail['greadute'] }}" placeholder="" required>
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Post Collage: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('') is-invalid @enderror" name="post_greduate" value="{{ $detail['post_greduate'] }}" placeholder="" required>
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Skill: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('') is-invalid @enderror" name="skill" value="{{ $detail['skill'] }}" placeholder="" required>
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group d-none">
                                        <label for="">: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('') is-invalid @enderror" name="" value="" placeholder="" required>
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group d-none">
                                        <label for="">: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('other_school') is-invalid @enderror" name="other_school" value="{{ $detail['other_school'] }}" placeholder="" required>
                                        @error('other_school')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="from-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="post">Post: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('post') is-invalid @enderror" name="post" value="{{ $detail['post'] }}" placeholder="" required>
                                        @error('post')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">12th School: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('other_school') is-invalid @enderror" name="other_school" value="{{ $detail['other_school'] }}" placeholder="" required>
                                        @error('other_school')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Collage name: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('') is-invalid @enderror" name="" value="{{ $detail['collage'] }}" placeholder="" required>
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Other collage name: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('') is-invalid @enderror" name="" value="{{ $detail['post_collage'] }}" placeholder="" required>
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">hobby: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('') is-invalid @enderror" name="" value="{{ $detail['hobby'] }}" placeholder="" required>
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group d-none">
                                        <label for="">: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('') is-invalid @enderror" name="" value="" placeholder="" required>
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group d-none">
                                        <label for="">: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('') is-invalid @enderror" name="" value="" placeholder="" required>
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="{{ route('superadmin.update.address') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="permenent_address">Permenent Address: <span class="text-danger">*</span></label>
                                        <input type="text" name="permenent_address" id="permenent_address"
                                            class="form-control @error('permenent_address') is-invalid @enderror" value="{{ $detail['address'] }}" placeholder="enter permenent address" autocomplete="off">
                                        @error('permenent_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="city">City: <span class="text-danger">*</span></label>
                                        <input type="text" name="city" id="city"
                                            class="form-control @error('city') is-invalid @enderror" value="{{ $detail['city'] }}" placeholder="enter city" autocomplete="off">
                                        @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="country">Country: <span class="text-danger">*</span></label>
                                        <input type="text" name="country" id="country"
                                            class="form-control @error('country') is-invalid @enderror" value="{{ $detail['country'] }}" placeholder="enter country" autocomplete="off">
                                        @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="state">State: <span class="text-danger">*</span></label>
                                        <input type="text" name="state" id="state"
                                            class="form-control @error('state') is-invalid @enderror" value="{{ $detail['state'] }}" placeholder="enter state" autocomplete="off">
                                        @error('state')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pin_code">Pin Code: <span class="text-danger">*</span></label>
                                        <input type="text" name="pin_code" id="pin_code"
                                            class="form-control @error('pin_code') is-invalid @enderror" value="{{ $detail['pincode'] }}" placeholder="enter pin code" autocomplete="off">
                                        @error('pin_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="resident_address">Resident address: <span class="text-danger">*</span></label>
                                        <input type="text" name="resident_address" id="resident_address"
                                            class="form-control @error('resident_address') is-invalid @enderror" value="{{ $detail['other_address'] }}" placeholder="enter resident address" autocomplete="off">
                                        @error('resident_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="other_city">City: <span class="text-danger">*</span></label>
                                        <input type="text" name="other_city" id="other_city"
                                            class="form-control @error('other_city') is-invalid @enderror" value="{{ $detail['other_city'] }}" placeholder="enter city" autocomplete="off">
                                        @error('other_city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="other_state">State: <span class="text-danger">*</span></label>
                                        <input type="text" name="other_state" id="other_state"
                                            class="form-control @error('other_state') is-invalid @enderror" value="{{ $detail['other_state'] }}" placeholder="enter state" autocomplete="off">
                                        @error('other_state')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="other_country">Country: <span class="text-danger">*</span></label>
                                        <input type="text" name="other_country" id="other_country"
                                            class="form-control @error('other_country') is-invalid @enderror" value="{{ $detail['other_country'] }}" placeholder="enter enter country" autocomplete="off">
                                        @error('other_country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="other_pincode">Pin Code: <span class="text-danger">*</span></label>
                                        <input type="text" name="other_pincode" id="other_pincode"
                                            class="form-control @error('other_pincode') is-invalid @enderror" value="{{ $detail['other_pincode'] }}" placeholder="enter pin code" autocomplete="off">
                                        @error('other_pincode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="contact-info" role="tabpanel" aria-labelledby="contact-info-tab">
                        <form action="javascript:;" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="enquiry_mobile">Enquiry mobile number: <span class="text-danger">*</span></label>
                                        <input type="text" name="enquiry_mobile" id="enquiry_mobile"
                                            class="form-control form-control-lg @error('enquiry_mobile') is-invalid @enderror" value="{{ auth()->user()->mobile_number }}" placeholder="Enter mobile number" autocomplete="off">
                                            @error('enquiry_mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="enquiry_email">Enquiry email: <span class="text-danger">*</span></label>
                                        <input type="email" name="enquiry_email" id="enquiry_email"
                                            class="form-control form-control-lg @error('enquiry_email') is-invalid @enderror" value="{{ auth()->user()->email }}" placeholder="Enter enquiry email" autocomplete="off">
                                            @error('enquiry_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="support_email">Support Email: <span class="text-danger">*</span></label>
                                        <input type="email" name="support_email" id="support_email"
                                            class="form-control form-control-lg @error('support_email') is-invalid @enderror" value="{{ auth()->user()->email }}" placeholder="Enter support email" autocomplete="off">
                                            @error('support_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                    <div class="form-group d-none">
                                        <label for="">: <span class="text-danger">*</span></label>
                                        <input type="text" name="text" id="re"
                                            class="form-control form-control-lg @error('re') is-invalid @enderror" placeholder="" value="" autocomplete="off">
                                            @error('re')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                    <div class="form-group d-none">
                                        <label for="">: <span class="text-danger">*</span></label>
                                        <input type="text" name="tedsd" id="dsdsd"
                                            class="form-control form-control-lg @error('dsdsd') is-invalid @enderror" placeholder="" value="" autocomplete="off">
                                            @error('dsdsd')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="social-accounts" role="tabpanel" aria-labelledby="social-accounts-tab">
                        <form action="javascript:;" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Google: <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control form-control-lg @error('google') is-invalid @enderror"
                                            name="google" id="google" value="please enter your google account" autocomplete="off" disabled>
                                            @error('google')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Facebook: <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control form-control-lg @error('facebook') is-invalid @enderror"
                                            name="facebook" id="facebook" value=""
                                            placeholder="please enter your facebook acccount" autocomplete="off" disabled>
                                            @error('facebook')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Instagram: <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control form-control-lg @error('instagram') is-invalid @enderror"
                                            name="instagram" id="instagram" value=""
                                            placeholder="please enter your instagram account" autocomplete="off" disabled>
                                            @error('instagram')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Twitter: <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control form-control-lg @error('twitter') is-invalid @enderror"
                                            name="twitter" id="twitter" value=""
                                            placeholder="please enter your twitter account" autocomplete="off" disabled>
                                            @error('twitter')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Google Plus: <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control form-control-lg @error('google_plus') is-invalid @enderror"
                                            name="google_plus" id="google_plus" value=""
                                            placeholder="please enter your google plus" autocomplete="off" disabled>
                                            @error('google_plus')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="activity-tab">
                        <!-- Post -->
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="{{asset('dist/img/user1-128x128.jpg')}}"
                                    alt="user image">
                                <span class="username">
                                    <a href="#">Jonathan Burke Jr.</a>
                                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                </span>
                                <span class="description">Shared publicly - 7:30 PM today</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore the hate as they create awesome
                                tools to help create filler text for everyone from bacon lovers
                                to Charlie Sheen fans.
                            </p>

                            <p>
                                <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                <span class="float-right">
                                    <a href="#" class="link-black text-sm">
                                        <i class="far fa-comments mr-1"></i> Comments (5)
                                    </a>
                                </span>
                            </p>

                            <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post -->

                        <!-- Post -->
                        <div class="post clearfix">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="{{asset('dist/img/user7-128x128.jpg')}}"
                                    alt="User Image">
                                <span class="username">
                                    <a href="#">Sarah Ross</a>
                                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                </span>
                                <span class="description">Sent you a message - 3 days ago</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore the hate as they create awesome
                                tools to help create filler text for everyone from bacon lovers
                                to Charlie Sheen fans.
                            </p>

                            <form class="form-horizontal">
                                <div class="input-group input-group-sm mb-0">
                                    <input class="form-control form-control-sm" placeholder="Response">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-danger">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.post -->

                        <!-- Post -->
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="{{asset('dist/img/user6-128x128.jpg')}}"
                                    alt="User Image">
                                <span class="username">
                                    <a href="#">Adam Jones</a>
                                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                </span>
                                <span class="description">Posted 5 photos - 5 days ago</span>
                            </div>
                            <!-- /.user-block -->
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <img class="img-fluid" src="{{asset('dist/img/photo1.png')}}" alt="Photo">
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img class="img-fluid mb-3" src="{{asset('dist/img/photo2.png') }}" alt="Photo">
                                            <img class="img-fluid" src="{{asset('dist/img/photo3.jpg') }}" alt="Photo">
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <img class="img-fluid mb-3" src="{{asset('dist/img/photo4.jpg') }}" alt="Photo">
                                            <img class="img-fluid" src="{{asset('dist/img/photo1.png') }}" alt="Photo">
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <p>
                                <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                <span class="float-right">
                                    <a href="#" class="link-black text-sm">
                                        <i class="far fa-comments mr-1"></i> Comments (5)
                                    </a>
                                </span>
                            </p>

                            <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post -->
                    </div>
                    <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                        <!-- The timeline -->
                        <div class="timeline timeline-inverse">
                            <!-- timeline time label -->
                            <div class="time-label">
                                <span class="bg-danger">
                                    10 Feb. 2014
                                </span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <div>
                                <i class="fas fa-envelope bg-primary"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                    <div class="timeline-body">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                        quora plaxo ideeli hulu weebly balihoo...
                                    </div>
                                    <div class="timeline-footer">
                                        <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <div>
                                <i class="fas fa-user bg-info"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                                    <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your
                                        friend request
                                    </h3>
                                </div>
                            </div>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <div>
                                <i class="fas fa-comments bg-warning"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                    <div class="timeline-body">
                                        Take me to your leader!
                                        Switzerland is small and neutral!
                                        We are more like Germany, ambitious and misunderstood!
                                    </div>
                                    <div class="timeline-footer">
                                        <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END timeline item -->
                            <!-- timeline time label -->
                            <div class="time-label">
                                <span class="bg-success">
                                    3 Jan. 2014
                                </span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <div>
                                <i class="fas fa-camera bg-purple"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                                    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                    <div class="timeline-body">
                                        <img src="https://placehold.it/150x100" alt="...">
                                        <img src="https://placehold.it/150x100" alt="...">
                                        <img src="https://placehold.it/150x100" alt="...">
                                        <img src="https://placehold.it/150x100" alt="...">
                                    </div>
                                </div>
                            </div>
                            <!-- END timeline item -->
                            <div>
                                <i class="far fa-clock bg-gray"></i>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                        <form action="{{ route('change.password') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="old_password">Old Password: <span class="text-danger">*</span></label>
                                        <input type="password" name="old_password" id="old_password"
                                            class="form-control form-control-lg @error('old_password') is-invalid @enderror" placeholder="Enter old password">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">New password: <span class="text-danger">*</span></label>
                                        <input type="password" name="password" id="password"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Enter new password">
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm new password: <span class="text-danger">*</span></label>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                            class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" placeholder="Enter confirm new password">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="inputExperience"
                                        placeholder="Experience"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection
@section('script')
<!-- Bootstrap Switch -->
<script src="{{asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>

<script>
    $(function() {
        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });
    });
</script>
@endsection