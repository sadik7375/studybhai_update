<section class="seventh-section">
    <div class="seventh-section-div">
        <div class="row" style="margin: 0; padding: 0">
            <div class="col-md-3">
                <div>
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" class="img-fluid" />
                </div>
                <br />
                <div>
                    <p class="footer-paragraph-state">
                        Online live skill development platform
                    </p>
                </div>
                <br />
                <div>
                    <img src="{{ asset('assets/images/footer_state.png') }}" alt="" class="img-fluid" />
                </div>
            </div>

            <div class="col-md-3">
                <div class="footer-list-section-margin">
                    <ul class="footer-lists">
                        <li>Phone : {{ \App\Models\Footer::first()->phone ?? '' }}</li>
                        <li>Email : {{ \App\Models\Footer::first()->email ?? '' }}</li>
                        <li>
                            Location : {{ \App\Models\Footer::first()->location ?? '' }}
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="footer-list-section-margin">
                    <ul class="footer-lists">
                        <li>About Us Need Help?</li>
                        <li>Privacy Policy</li>
                        <li>Terms and Conditions</li>
                        <li>Need Help?</li>
                    </ul>
                </div>
            </div>

            @php
                $categoryNames = [
                    'team' => 'Team',
                    'advisor' => 'Advisor',
                    'trainer' => 'Trainer',
                    'special_trainer' => 'Special Trainer',
                    'guest_trainer' => 'Guest Trainer',
                    'alumni' => 'Alumni',
                ];
            @endphp

            <div class="col-md-3">
                <div class="footer-list-section-margin">
                    <ul class="footer-lists">
                        <li><a href="{{ route('team_info') }}" style="text-decoration: none; color: white">{{ $categoryNames['team'] }}</a></li>
                        <li><a href="{{ route('team_info') }}" style="text-decoration: none; color: white">{{ $categoryNames['advisor'] }}</a></li>
                        <li><a href="{{ route('team_info') }}" style="text-decoration: none; color: white">{{ $categoryNames['trainer'] }}</a></li>
                        <li><a href="{{ route('team_info') }}" style="text-decoration: none; color: white">{{ $categoryNames['special_trainer'] }}</a></li>
                        <li><a href="{{ route('team_info') }}" style="text-decoration: none; color: white">{{ $categoryNames['guest_trainer'] }}</a></li>
                        <li><a href="{{ route('team_info') }}" style="text-decoration: none; color: white">{{ $categoryNames['alumni'] }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
