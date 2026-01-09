<h1>Pokedex Lists</h1>
    <table class="table">
        <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>type</td>
            <td>species</td>
            <td>height</td>
            <td>weight</td>
            <td>hp</td>
            <td>attack</td>
            <td>defense</td>
            <td>image_url</td>
            <td></td>
        </tr>
        </thead>
        <?php foreach ($pokedex as $item) {?>
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->type }}</td>
            <td>{{ $item->species }}</td>
            <td>{{ $item->height }}</td>
            <td>{{ $item->weight }}</td>
            <td>{{ $item->hp }}</td>
            <td>{{ $item->attack }}</td>
            <td>{{ $item->defense }}</td>
            <td>{{ $item->image_url }}</td>
            <td>
                @if($item->image_url)
                    <img src="{{ Str::startsWith($item->image_url, 'http') ? $item->image_url : asset('storage/'.$item->image_url) }}"
                        alt="{{ $item->name }}"
                        style="width: 100px; height: auto; border-radius: 8px;">
                @else
                    <span class="text-muted">ไม่มีรูปภาพ</span>
                @endif
            </td>
            <td style="white-space: nowrap;">

            <a class="btn btn-warning" href="{{ url('/pokedexs/'.$item->id.'/edit')}}">
                แก้ไข
            </a>

            <form style="display: inline-block; margin: 0;" action="{{ url('/pokedexs/' . $item->id) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger">ลบ</button>
            </form>

        </td>
        </tr>
        <?php } ?>
    </table>
