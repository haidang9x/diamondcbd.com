<div class="block-custom-code">
					@if($status = Session::get('status'))
                            @if(is_array($status))
                                @foreach($status as $k => $v)
                                    @foreach($v as $e)
										<div class="zurb-foundation-callout callout alert" data-closable="fade-out">
										<h2 class="visually-hidden">Error message</h2>
														{{ $e }}
										<button class="close-button" aria-label="Dismiss alert" type="button" data-close=""><span aria-hidden="true">×</span></button>
										</div>
                                    @endforeach
                                @endforeach
                            @else
                                {{ $status }}
                            @endif
					@endif
    <div class="field-wrapper field field-block-content--field-block-custom-html field-name-field-block-custom-html field-type-text-long field-label-hidden">
        <div class="field-items">
            <div class="field-item">
                <form id="frmSignup" action="" class="form-subscribe-signup" method="POST" novalidate="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <input id="email" name="email" placeholder="Enter Your Email Address" required="" type="email" value=""/>
                        <label for="email" hidden="">Enter Your Email Address</label>

                        <input id="pwd" name="password" placeholder="Enter Your Password" required="" type="password" value=""/>
                        <label for="password" hidden="">Enter Your Password</label>

                        <input id="confirm_password" name="password_confirmation" placeholder="Confirm your password" required="" type="password" value=""/>
                        <label for="confirm_password" hidden="">Confirm your password</label>

                        <input id="first_name" name="first_name" placeholder="Enter your First Name" required="" type="text" value=""/>
                        <label for="first_name" hidden="">Enter your First Name</label>

                        <input id="last_name" name="last_name" placeholder="Enter your Last name" required="" type="text" value=""/>
                        <label for="last_name" hidden="">Enter your Last name</label>
                    </div>
                    <div class="form-group">
                        <button id="" class="form-control button">Join</button>
                    </div>
                </form>
                <script>
                    jQuery(document).ready(function () {
                        $('#frmSignup').validate({
                            rules: {
                                pwd: "required",
                                confirm_password: {
                                    equalTo: "#pwd"
                                }
                            }
                        });
                    });

                </script>
            </div>
        </div>
    </div>
</div>