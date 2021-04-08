<div class="table-responsive-sm">
    <table class="table table-striped" id="doneProjects-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Image</th>
        <th>Short Desc</th>
        <th>Long Desc</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($doneProjects as $doneProject)
            <tr>
                <td>{{ $doneProject->name }}</td>
            <td>{{ $doneProject->image }}</td>
            <td>{{ $doneProject->short_desc }}</td>
            <td>{{ $doneProject->long_desc }}</td>
                <td>
                    {!! Form::open(['route' => ['doneProjects.destroy', $doneProject->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('doneProjects.show', [$doneProject->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('doneProjects.edit', [$doneProject->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>