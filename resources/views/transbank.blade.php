@extends('layouts.payment')

@section('title', 'Cómo colaborar - Colaborar - Carpoolear')
@section('body-class', 'body-colaborar body-como-colaborar')

@section('content')
<section>
    <form action="{{ $formAction}}" name="transbankForm" method="POST">
        <input type="hidden" name="token_ws" value="{{ $tokenWs }}" />
    </form>
    <script>
        document.transbankForm.submit();
    </script>
</section>
@endsection
