<div class="table-responsive-sm">
    <table class="table table-striped" id="goals-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($goals as $goal)
            <tr>
                <td>{{ $goal->name }}</td>
            <td>{{ $goal->description }}</td>
                <td>
                    {!! Form::open(['route' => ['goals.destroy', $goal->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('goals.show', [$goal->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('goals.edit', [$goal->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>