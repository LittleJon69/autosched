<h1>Administrator Update Password</h1>
<x-splade-form  method="POST" action="{{ route('save-password-administrator') }}">


<x-splade-input type="password"  class="input blue-inpt leftlabel" id="currentPassword" name="current_password" label="Current Password" />
<x-splade-input type="password" class="input blue-inpt leftlabel" id="password" name="password" label="New Password" />
<x-splade-input type="password"  class="input blue-inpt leftlabel" id="password" name="password_confirmation" label="New Password" />

<x-splade-submit :label="__('Update Password')" />

</x-splade-form>
