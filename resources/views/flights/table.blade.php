
    <h1>Flight Lists</h1>
    <table class="table">
        <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>airline</td>
            <td>number_of_seats</td>
            <td>price</td>
            <td></td>
        </tr>
        </thead>
        <?php foreach ($flight as $item) {?>
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->airline }}</td>
            <td>{{ $item->number_of_seats }}</td>
            <td>{{ $item->price }}</td>
            <td>
                <a class="btn btn-warning" href="{{ url('/flights/'.$item->id.'/edit')}}">
                    แก้ไข
                </a>

                <form
                    style="display: inline-block"
                    action="{{ url('/flights/' . $item->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">ลบ</button>
                </form>

            </td>
        </tr>
        <?php } ?>
    </table>
