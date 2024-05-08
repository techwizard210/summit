<div>
<form id="sign_up_form" >
    <div class="title">
        <img src="{{ asset('/assets/svg/door.svg') }}" alt="">
        <div>
            <h1>Sign Up</h1>
        </div>
    </div>
    <div class="input_group">
        <x-input name="company_name" placeholder="Company Name" />
        <x-input name="team_number"  placeholder="Team Number" type="number"/>   
        <x-input name="password" placeholder="Password" type="password"/>
    </div>
    <div class="action_wrap">      
        <button>Sign Up</button>
        <p>Already have an account? <span class="to_sign_up">Sign In</span></p>
    </div>
<form />

</div>
