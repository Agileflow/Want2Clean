<div class="form-segment">
    Service Information
</div>

<div class="form-group">
    {!! Form::label('requested', 'What service would you like to get?') !!} ( &lt;i class=&quot;fa fa-wrench&quot;&gt;&lt;/i&gt; find our services descriptions <a href="{{ url('/#services') }}">here</a>)
    {!! Form::select('requested', ['', 'Basic cleaning', 'Deep cleaning', 'Moving In/Out', 'Club Cleaning','Office Cleaning', 'After-party Clean-Up', 'One-Day Service'], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('hours', 'How many hours?') !!}
    {!! Form::input('number', 'hours', '0', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('services_day', 'When do you want the service?') !!}
    {!! Form::input('date', 'service_day', '', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('period', 'What duration would you want this service?') !!}
    {!! Form::select('period', ['', 'Once', 'Daily', 'Bi-Weekly', 'Weekly', 'Monthly', 'Other'], null, ['class' => 'form-control']) !!}
</div>