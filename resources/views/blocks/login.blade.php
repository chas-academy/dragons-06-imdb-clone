<form class=""
      method="POST"
      action="{{ route('login') }}">

      {{ csrf_field() }}

<div class="field {{ $errors->has('email') ? ' has-error' : '' }}">
    <p class="control has-icons-left has-icons-right">
          <input id="email"
                 type="email"
                 class="input"
                 name="email"
                 value="{{ old('email') }}"
                 placeholder="Email"
                 required autofocus>
          <span class="icon is-small is-left">
              <i class="fa fa-user-circle"></i>
          </span>
          <span class="icon is-small is-right">
              <i class="fa fa-check"></i>
          </span>
      </p>
      @if ($errors->has('email'))
          <span class="help is-danger">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif
</div>

<div class="field has-addons {{ $errors->has('password') ? ' has-error' : '' }}">
    <p class="control has-icons-left">
          <input id="password"
                 type="password"
                 class="input"
                 name="password"
                 required>
            <span class="icon is-small is-left">
              <i class="fa fa-lock"></i>
            </span>
            @if ($errors->has('password'))
                <span class="help is-danger">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </p>
        <p class="control">
        <button type="submit"
                class="button is-primary">
                Login
        </button>
        </p>
        </div>
<div class="field">
    <input type="checkbox"
           id="remember"
           name="remember"
           class="switch is-rtl is-primary"
           {{ old('remember') ? 'checked' : '' }}>
    <label for="remember">Remember Me</label>
</div>
<p class="field">
  <a class="button is-info" href="{{ route('password.request') }}">
      Forgot Your Password?
  </a>
</p>
  <p class="field">
  <a class="button is-primary is-outlined" href="{{ route('register') }}">
      Register New User!
  </a>
</p>
</form>
