<div class="table-responsive-sm">
    <table class="table table-striped" id="aboutMeV2s-table">
        <thead>
            <tr>
                <th>First Name</th>
        <th>Last Name</th>
        <th>Description</th>
        <th>Activated</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($aboutMeV2s as $aboutMeV2)
            <tr>
                <td>{{ $aboutMeV2->first_name }}</td>
            <td>{{ $aboutMeV2->last_name }}</td>
            <td>{{ $aboutMeV2->description }}</td>
            <td>{{ $aboutMeV2->activated }}</td>
                <td>
                    {!! Form::open(['route' => ['aboutMeV2s.destroy', $aboutMeV2->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('aboutMeV2s.show', [$aboutMeV2->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('aboutMeV2s.edit', [$aboutMeV2->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>