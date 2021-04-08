<div class="table-responsive-sm">
    <table class="table table-striped" id="stories-table">
        <thead>
            <tr>
                <th>Content</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($stories as $story)
            <tr>
                <td>{{ $story->content }}</td>
                <td>
                    {!! Form::open(['route' => ['stories.destroy', $story->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('stories.show', [$story->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('stories.edit', [$story->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>