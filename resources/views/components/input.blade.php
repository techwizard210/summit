<div class="input_field">
  
    @php
        $inputType = isset($type) ? $type : 'text';
        $labelValue = isset($label);
    @endphp
      @if ($labelValue)
    <label for="{{ $name }}">{{ $labelValue }}</label>
    @endif
   <div class="input">      
        <input type="{{ $inputType }}" name="{{ $name }}" id="{{ $name }}" value="{{ $value ?? '' }}" placeholder="{{ $placeholder }}" required />
        @if ($inputType === 'password')     
        <img src="{{ asset("/assets/svg/eye.svg") }}" alt="eye icon" onclick="togglePasswordVisibility('{{ $name }}')" >
        @endif
   </div>
</div>
 