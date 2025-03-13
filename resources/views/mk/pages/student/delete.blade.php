{{-- !-- Delete Warning Modal --> --}}
<form action="{{ route('student.destroy', $student->id) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center">{{ $student->fi() }} o'chirilsinmi? </h5>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Ha, albatta</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Yo'q</button>
    </div>
</form>
