<div class="table-responsive-sm">
    <table class="table table-striped" id="aboutMes-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>Activated</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($aboutMes as $aboutMe)
            <tr>
                <td>{{ $aboutMe->name }}</td>
            <td>{{ $aboutMe->description }}</td>
            <td>{{ $aboutMe->activated }}</td>
                <td>
                    {!! Form::open(['route' => ['aboutMes.destroy', $aboutMe->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('aboutMes.show', [$aboutMe->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('aboutMes.edit', [$aboutMe->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>