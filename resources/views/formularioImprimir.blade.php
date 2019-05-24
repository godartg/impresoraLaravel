<form action="{{ route('imprimir') }}" method="POST">
            <input type="text" name="username" class="form-control">
            <input type="hidden" name="_token" class="form-control" value="{!! csrf_token() !!}">
            <button type="submit" name="submit" class="btn btn-info">Print</button
</form>