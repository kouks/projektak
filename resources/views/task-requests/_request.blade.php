<tr>
    <td class="mdl-data-table__cell--non-numeric">{{ $request->worker->name }}</td>
    <td class="mdl-data-table__cell--non-numeric">{{ $request->task->name }}</td>
    <td class="mdl-data-table__cell--non-numeric">{{ $request->reason }}</td>
    <td class="mdl-data-table__cell--non-numeric">{{ $request->estimate }}</td>
    <td class="mdl-data-table__cell--non-numeric">
        <form action="task-requests/{{ $request->id }}/approve" method="post">
            {{ csrf_field() }}

            <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect mdl-button--colored">
                <i class="material-icons">check</i>
            </button>
        </form>
    </td>
</tr>
