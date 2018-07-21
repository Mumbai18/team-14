@section
    @foreach($request as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->firstName}}</td>
                    <td>{{$row->lastName}}</td>
                    <td>{{$row->emailId}}</td>
                    <td>{{$row->emailId}}</td>
                    <td>{{$row->emailId}}</td>
                    <td>{{$row->emailId}}</td>
                    
                    <td>
                        <button type="button" class="btn btn-primary">View</button>
                        <button type="button" class="btn btn-success">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        ?>
@endsection