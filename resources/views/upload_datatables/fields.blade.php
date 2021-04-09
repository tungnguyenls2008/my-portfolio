<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Uri Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uri', 'Uri:') !!}
    {!! Form::text('uri', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Belongs To Table Field -->
<div class="form-group col-sm-6">
    {!! Form::label('belongs_to_table', 'Belongs To Table:') !!}
    {!! Form::text('belongs_to_table', null, ['class' => 'form-control']) !!}
</div>

<!-- Belongs To Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('belongs_to_id', 'Belongs To Id:') !!}
    {!! Form::text('belongs_to_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('uploadDatatables.index') }}" class="btn btn-secondary">Cancel</a>
</div>
