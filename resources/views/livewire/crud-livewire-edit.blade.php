<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <style>
    th {
        border: 1px solid;
    }

    td {
        border: 1px solid;
    }
    </style>
    <div>
        <a href="{{ route('crud-livewire') }}">Назат</a>
        <table class="table" style="text-align:center; width: 100%;">
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
            <tr>
                <form action="{{ route('crud-livewire-update', $eloquent) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <td>
                        <input type="text" name="name" value="{{ $eloquent->name }}">
                    </td>
                    <td>
                        <input type="number" name="price" value="{{ $eloquent->price }}">
                    </td>
                    <td>
                        <input type="text" name="description" value="{{ $eloquent->description }}">
                    </td>
                    <td>
                        <select name="status">
                            @foreach ($statuses as $status)
                            <option value="{{ $status }}">{{ $status }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td style="text-align: center;">
                        <button type="submit">Обновить</button>
                    </td>
                </form>
            </tr>
        </table>
    </div>
</div>