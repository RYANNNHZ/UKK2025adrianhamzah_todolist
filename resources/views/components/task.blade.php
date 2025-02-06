<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" {{ $status == 'done' ? 'checked' : '' }} >
    <label class="form-check-label" for="flexCheckDefault">
      {{ $slot }}
    </label>
  </div>
