<div class="form-segment">
    Contact Information
</div>

<div class="form-group">
    {!! Form::text('firstname', null, ['id' => 'firstname', 'class' => 'form-control', 'placeholder' => '* 👦 Firstname']) !!}
</div>

<div class="form-group">
    {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => '* 👪 Lastname']) !!}
</div>

<div class="form-group">
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => '* 📱 Phone number']) !!}
</div>

<div class="form-group">
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => '&nbsp;  📧 Email - something@example.com']) !!}
</div>

<div class="form-group">
    {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => '* 🏠 Address']) !!}
</div>

<div class="form-group">
    {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => '* ⛪ City']) !!}
</div>
