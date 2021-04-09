
<!-- Skill Field -->
<div class="form-group col-sm-6">
    {!! Form::label('skill_id', 'Skill:') !!}
    <select class="form-control" id="skill_id" name="skill_id">
        <option disabled selected value="">Choose a skill set</option>
        @foreach($skillRepository->model()::all() as $skill)
            <option value="{{$skill->id}}">{{$skill->name}}</option>
        @endforeach
    </select>
</div>
<!-- Detail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('detail', 'Detail:') !!}
    {!! Form::text('detail', null, ['class' => 'form-control']) !!}
</div>

<!-- Percent Achievement Field -->
<div class="form-group col-sm-6">
    {!! Form::label('percent_achievement', 'Percent Achievement:') !!}
    {!! Form::number('percent_achievement', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('skillDetails.index') }}" class="btn btn-secondary">Cancel</a>
</div>
