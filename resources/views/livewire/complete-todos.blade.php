<div>
    <h2 class="text-xl font-semibold mt-4 px-4">Todos done</h2>

    <div class="flex flex-col px-4 py-4 space-y-4">
        @foreach ($todos as $index => $todo)
            <div class="flex justify-between">
                <div>
                     @if ($editedTodoIndex === $index || $editedTodoField === $index.'.item')
                        <input type="text"
                            @click.away="$wire.editedTodoField === '{{ $index }}.item' ? $wire.saveTodo({{ $index }}) : null"
                            @keydown.enter="$wire.saveTodo({{ $index }})"
                            wire:model.defer="todos.{{ $index }}.item"
                        />
                        @if ($errors->has('todos.'.$index.'.item'))
                            <div class="text-red-500">
                                {{ $errors->first('todos.'.$index.'.item') }}
                            </div>
                        @endif
                    @else
                        <div class="cursor-pointer" wire:click="editTodoField({{ $index }}, 'item')">
                            {{ $todo['item'] }}
                        </div>
                    @endif
                </div>

                <div>
                    <button type="button" class="btn btn-primary" wire:click.prevent="incompleteTodo({{ $index }})">
                        Incomplete
                    </button>

                    <button type="button" class="btn btn-danger" wire:click.prevent="deleteTodo({{ $index }})">
                        Delete
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>
