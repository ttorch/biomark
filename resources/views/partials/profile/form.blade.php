
<div class="col-sm-12 col-md-4">
    <div class="text-center">
        <img id="profile-img" src="{{ url('/') }}/public/uploads/avatars/{{ $profile->avatar or 'default.jpg' }}" class="avatar img-circle" alt="">
        <input type="file" id="avatar" name="avatar" capture="{{ $profile->avatar or old('avatar') }}" value="{{ $profile->avatar or old('avatar') }}"/>
        <button class="upload-btn">Upload Profile Picture</button>
    </div>
</div>
<div class="col-sm-12 col-md-4">
    <input type="text" id="first_name" name="first_name" placeholder="First Name" value="{{ $profile->first_name or old('first_name') }}"/>
    <input type="text" id="last_name" name="last_name" placeholder="Last Name" value="{{ $profile->last_name or old('last_name') }}"/>
    <input type="email" id="email" name="email" placeholder="Email" value="{{ $profile->email or old('email') }}"/>
    <input type="text" id="contact_no" name="contact_no" placeholder="Contact Number" value="{{ $profile->contact_no or old('contact_no') }}"/>
</div>
<div class="col-sm-12 col-md-4">
    <textarea name="address" id="address" cols="30" rows="10" placeholder="Address">{{ $profile->address or old('address') }}</textarea>
</div>

