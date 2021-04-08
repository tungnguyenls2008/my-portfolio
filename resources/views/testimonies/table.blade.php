<div class="table-responsive-sm">
    <table class="table table-striped" id="testimonies-table">
        <thead>
            <tr>
                <th>Content</th>
        <th>Reference</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($testimonies as $testimony)
            <tr>
                <td>{{ $testimony->content }}</td>
            <td>{{ $testimony->reference }}</td>
                <td>
                    {!! Form::open(['route' => ['testimonies.destroy', $testimony->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('testimonies.show', [$testimony->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('testimonies.edit', [$testimony->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>