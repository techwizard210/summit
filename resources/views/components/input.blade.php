<div class="input_field">
    <label for="{{ $name }}">{{ $label }}</label>
    @php
        $inputType = isset($type) ? $type : 'text';
    @endphp
   <div class="input">      
   <input type="{{ $inputType }}" name="{{ $name }}" id="{{ $name }}" value="{{ $value ?? '' }}" placeholder="{{ $placeholder }}" required />
   @if ($inputType === 'password')     
   <img src="{{ asset("/assets/svg/eye.svg") }}" alt="eye icon" onclick="togglePasswordVisibility('{{ $name }}')" >
    @endif
   </div>
</div>
