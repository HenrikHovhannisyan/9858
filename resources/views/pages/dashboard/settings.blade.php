@extends('layouts.dashboard.app')
@section('title') - Settings @endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 ps-0 pe-0">
            @include('layouts.dashboard.sidebar')
        </div>
        <div class="col-lg-10">
            <section id="addresses" class="user_dashboard">
                <h2>Settings</h2>
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if(session('password_success'))
                <div class="alert alert-success">{{ session('password_success') }}</div>
                @endif

                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="d-flex align-items-start">
                    <div id="settings">
                        <div class="settings_menu">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="profile-settings-tab" data-bs-toggle="pill" data-bs-target="#profile-settings" type="button" role="tab" aria-controls="profile-settings" aria-selected="true">
                                    Profile Settings
                                </button>
                                <button class="nav-link" id="security-tab" data-bs-toggle="pill" data-bs-target="#security" type="button" role="tab" aria-controls="security" aria-selected="false">
                                    Security
                                </button>
                                <button class="nav-link" id="notifications-tab" data-bs-toggle="pill" data-bs-target="#notifications" type="button" role="tab" aria-controls="notifications" aria-selected="false">
                                    Notifications
                                </button>
                                <button class="nav-link" id="support-tab" data-bs-toggle="pill" data-bs-target="#support" type="button" role="tab" aria-controls="support" aria-selected="false">
                                    Support
                                </button>
                            </div>
                        </div>

                        <div class="settings_container position-relative">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="profile-settings" role="tabpanel" aria-labelledby="profile-settings-tab">
                                    <h3>Profile</h3>
                                    <form action="{{ route('settings.update') }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <fieldset style="display: flex; flex-direction: column; justify-content: center; height: 100px;">
                                            <legend>First name</legend>
                                            <input type="text" class="form-control border-0 p-0" name="first_name" value="{{ old('first_name', $user->first_name) }}">
                                        </fieldset>

                                        <fieldset style="display: flex; flex-direction: column; justify-content: center; height: 100px;">
                                            <legend>Last name</legend>
                                            <input type="text" class="form-control border-0 p-0" name="last_name" value="{{ old('last_name', $user->last_name) }}">
                                        </fieldset>

                                        <fieldset style="display: flex; flex-direction: column; justify-content: center; height: 100px;">
                                            <legend>Email</legend>
                                            <input type="email" class="form-control border-0 p-0" name="email" value="{{ old('email', $user->email) }}">
                                        </fieldset>

                                        <div class="settings_profile_btn">
                                            <a href="{{ url()->previous() }}" class="btn btn_white">Cancel</a>
                                            <button type="submit" class="btn btn_dark">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                                    <h3>Security</h3>

                                    <form action="{{ route('settings.password.update') }}" method="POST">
                                        @csrf

                                        <fieldset>
                                            <legend>Current Password</legend>
                                            <div class="d-flex">
                                                <input type="password" class="form-control border-0 p-0" name="current_password" required>
                                                <button type="button" class="btn pt-0 toggle-password" style="background: none; border: none;">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                            </div>
                                        </fieldset>

                                        <h4>Change Password</h4>

                                        <fieldset>
                                            <legend>New Password</legend>
                                            <div class="d-flex">
                                                <input type="password" class="form-control border-0 p-0" name="password" required>
                                                <button type="button" class="btn pt-0 toggle-password" style="background: none; border: none;">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <legend>Confirm New Password</legend>
                                            <div class="d-flex">
                                                <input type="password" class="form-control border-0 p-0" name="password_confirmation" required>
                                                <button type="button" class="btn pt-0 toggle-password" style="background: none; border: none;">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                            </div>
                                        </fieldset>

                                        <div class="settings_profile_btn">
                                            <a href="{{ url()->previous() }}" class="btn btn_white">Cancel</a>
                                            <button type="submit" class="btn btn_dark">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
                                    <h3>Notifications</h3>
                                    <form action="{{ route('settings.password.update') }}" method="POST">
                                        @csrf

                                        <div class="notifications mt-5 border-top">
                                            <div class="box">
                                                <h3>Email Notifications</h3>
                                                <p>You’ll receive updates about order confirmations, delivery milestones, and personalized offers—directly to your inbox.</p>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                            </div>
                                        </div>

                                        <div class="settings_profile_btn">
                                            <a href="{{ url()->previous() }}" class="btn btn_white">Cancel</a>
                                            <button type="submit" class="btn btn_dark">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="support" role="tabpanel" aria-labelledby="support-tab">
                                    <h3>Support</h3>
                                    <form class="support_form" id="contact-form">
                                        <input type="hidden" name="title" value="Support">

                                        <input type="hidden" class="form-control mb-3" name="name" value="{{ auth()->user()->first_name }}" required>
                                        <input type="hidden" class="form-control mb-3" name="email" value="{{ auth()->user()->email }}" required>

                                        <input type="text" class="form-control mb-3" name="subject" placeholder="Subject" required>
                                        <textarea class="form-control mb-3" rows="7" name="message" placeholder="Message" required></textarea>

                                        <div class="settings_profile_btn">
                                            <a href="{{ url()->previous() }}" class="btn btn_white">Cancel</a>
                                            <button type="submit" class="btn btn_dark">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    document.querySelectorAll('.toggle-password').forEach(button => {
        button.addEventListener('click', function() {
            const input = this.previousElementSibling;
            input.type = input.type === 'password' ? 'text' : 'password';
            this.querySelector('i').classList.toggle('fa-eye');
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    });
</script>
@endpush