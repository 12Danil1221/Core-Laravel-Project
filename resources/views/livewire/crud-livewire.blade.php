<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <style>
    th {
        border: 1px solid;
    }

    td {
        border: 1px solid;
    }

    .flex justify-between flex-1 sm:hidden {
        display: flex;
    }
    </style>
    <div>
        <a href="{{ route('fitnes-livewire') }}">Фитнес</a>
        <a href="{{ route('crud-livewire-create') }}">Создать </a>
        <br><br>
        <form action="{{ route('generate-livewire') }}" method="POST">
            @csrf
            <button type="submit">Создать 1000 записей</button>
        </form>
        <form action="{{ route('delete-livewire') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Удалить все записи</button>
        </form>
        <input type="search" name="search" id="search">
        <button type="submit">Поиск</button>
        <table class="table" style="padding:1rem; width: 100%; text-align: center;">
            <tr>
                <th>
                    <h2>Name</h2>
                </th>
                <th>
                    <p>price</p>
                </th>
                <th>
                    <p>description</p>
                </th>
                <th>
                    <h2>Status</h2>
                </th>
                <th>
                    <h2>Action</h2>
                </th>
            </tr>
            @foreach ($eloquents as $eloquent)
            <tr>
                <td>
                    <h2>{{ $eloquent->name }}</h2>
                </td>
                <td>
                    <p>{{ $eloquent->price }}</p>
                </td>
                <td>
                    <p>{{ $eloquent->description }}</p>
                </td>
                <td>
                    <p>{{ $eloquent->status }}</p>
                </td>
                <td>
                    <a href="{{ route('crud-livewire-edit', $eloquent) }}">Обновить </a>
                    <form action="{{ route('crud-livewire-delete', $eloquent) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Удалить</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </table>

        <div style="display:flex ">
            {{ $eloquents->links() }}
        </div>
    </div>

    <script>
    </script>
</div>