<form method="POST" action="/unicode">
    <div>
        <input type="text" name="username" placeholder="Nhập username...">
        <input type="hidden" name="_method" value="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
    </div>
    <button type="submit">Submit</button>
</form>