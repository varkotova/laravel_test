@extends('massively.layouts.layuots')
@section('intro')
    /
@endsection

@section('nav')
@endsection



@section('main')
<section>

  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

    <form method="post" action="{{ url('elbrus_message') }}">
        {{ csrf_field() }}

        <div class="field">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" />
        </div>

        <div class="field">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" />
        </div>

        <div class="field">
            <label for="message">Message</label>
            <textarea name="message" id="message" rows="3"></textarea>
        </div>

        <ul class="actions">
            <li><input type="submit" value="Send Message" /></li>
        </ul>
    </form>
</section>
@endsection
