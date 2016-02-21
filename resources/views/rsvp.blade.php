@if (session('rsvp', false))
    <div class="text-center container-sm">
        <h3>Thanks for your RSVP!</h3>
    </div>
@else
    <h3>RSVP</h3>
    <form action="/rsvps" method="POST" class="text-left container-sm">
        {{ csrf_field() }}
        <label class="form-group {!! $errors->first('name', 'has-error') !!}">
            <span class="form-label">Name</span>
            <input type="text" class="form-control" name="name" placeholder="Your full name">
            <p class="form-control-feedback">
                It looks like you forgot to give us your name!
            </p>
            <label class="form-checkbox">
                <input type="checkbox" name="vegetarian" value="1">
                Vegetarian?
            </label>
        </label>
        <label class="form-group">
            <span class="form-label">Guest (if applicable)</span>
            <input type="text" class="form-control" name="guest_name" placeholder="Your guest's full name (if applicable)">
            <label class="form-checkbox">
                <input type="checkbox" name="guest_vegetarian" value="1">
                Vegetarian?
            </label>
        </label>
        <label class="form-group">
            <span class="form-label">Recommend a song (or 3) you'd like to hear</span>
            <textarea class="form-control" name="songs"></textarea>
        </label>
        <button type="submit" class="btn btn-primary btn-lg btn-block">RSVP</button>
    </form>
@endif
