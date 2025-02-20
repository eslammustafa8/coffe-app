<form action="{{ $href }}" method="POST" class="d-inline-block" id="deleteForm-{{ $id }}">
    @csrf
    @method('DELETE')<td class="product-remove">
    <button type="button"  onclick="confirmDelete({{  $id }})">
        <<span class="icon-close"></span>
    </td>
    </button>
</form>