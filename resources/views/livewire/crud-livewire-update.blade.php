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
                <form action="{{ route('crud-livewire-store') }}" method="POST">
                    @csrf
                    <td>
                        <h2><input type="text" name="name" value="TestName"></h2>
                    </td>
                    <td>
                        <p><input type="number" name="price" value="1000"></p>
                    </td>
                    <td>
                        <p><input type="text" name="description" value="TestDescription"></p>
                    </td>
                    <td>
                        <input type="enum" name="status" value="Allowed">
                    </td>
                    <td style="text-align: center;">
                        <button type="submit">Создать</button>
                    </td>
                </form>
            </tr>
        </table>
    </div>
</div>