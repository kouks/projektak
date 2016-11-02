<tr>
    <td class="mdl-data-table__cell--non-numeric">{{ $request->worker->name }}</td>
    <td class="mdl-data-table__cell--non-numeric">{{ $request->task->name }}</td>
    <td class="mdl-data-table__cell--non-numeric">{{ $request->reason }}</td>
    <td class="mdl-data-table__cell--non-numeric">{{ $request->estimate }}</td>
    <td class="mdl-data-table__cell--non-numeric">
        <form action="task-requests/{{ $request->id }}/approve" method="post" style="display: inline;">
            {{ csrf_field() }}
            {!! method_field('PATCH') !!}

            <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect mdl-button--colored">
                <i class="material-icons">check</i>
            </button>
        </form>

        <form action="task-requests/{{ $request->id }}/deny" method="post" style="display: inline;">
            {{ csrf_field() }}
            {!! method_field('PATCH') !!}

            <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect mdl-button--colored">
                <i class="material-icons">cancel</i>
            </button>
        </form>
    </td>
</tr>
