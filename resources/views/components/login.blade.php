<div style="display: block;">
<form id="sign_in_form" >
    <div class="title">
        <img src="{{ asset('/assets/svg/door.svg') }}" alt="">
        <div>
            <h1>Sign In</h1>
        </div>
    </div>
    <div class="input_group">
        <x-input name="company_name" placeholder="Company Name" />
        <x-input name="team_number"  placeholder="Team Number" type="number"/>   
        <x-select />
        <x-input name="password" placeholder="Password" type="password"/>
    </div>
    <div class="action_wrap">      
        <button>Sign in</button>
        <p>Need an account? <span class="to_sign_in">Sign up</span></p>
    </div>
<form />
</div>
