<div class="table-responsive-sm">
    <table class="table table-striped" id="skillDetails-table">
        <thead>
            <tr>
                <th>Skill Id</th>
        <th>Detail</th>
        <th>Percent Achievement</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($skillDetails as $skillDetail)
            <tr>
                <td>{{ $skillDetail->skill_id }}</td>
            <td>{{ $skillDetail->detail }}</td>
            <td>{{ $skillDetail->percent_achievement }}</td>
                <td>
                    {!! Form::open(['route' => ['skillDetails.destroy', $skillDetail->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('skillDetails.show', [$skillDetail->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('skillDetails.edit', [$skillDetail->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>