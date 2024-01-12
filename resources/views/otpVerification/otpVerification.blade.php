@extends('layouts.layout')
@section('content')
    <div class="container mt-5">
        <div class="row col-lg-8 usernameconfirm">
            <div>
                {{-- <h2 style="margin: 0">Vérification</h2> --}}
                {{-- <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group mt-5">
                        <input type="email" class=" form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="Adresse email" name="email" value="{{ old('email') }}">
                    </div>

                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit" style="background-color: #FABC01;color:white"
                        class="btn  mt-5">Continuer</button>
                </form> --}}
                <div class="prompt">
                    Entrez le code généré dans votre boîte postale pour vous connecter !
                </div>

                <form action = "{{ route('validate-otp') }}" method="POST">
                    @csrf
                    <div class="otp-wrapper ">
                        <input type="text" name="otp[]" class="otp-input text-[32px] text-center form-input"
                            placeholder="0">
                        <input type="text" name="otp[]" class="otp-input text-[32px] text-center form-input"
                            placeholder="0">
                        <input type="text" name="otp[]" class="otp-input text-[32px] text-center form-input"
                            placeholder="0">
                        <input type="text" name="otp[]" class="otp-input text-[32px] text-center form-input"
                            placeholder="0">
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="d-flex justify-content-between">
                        <p>
                            Vous n'avez pas reçu de code otp
                        </p>
                        <button type="submit" style="background-color: #FABC01;color:white" class="btn ">Envoyer</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.otp-input').forEach((element, index, array) => {
            element.addEventListener('input', function(event) {
                let inputValue = event.target.value;
                inputValue = inputValue.replace(/[^0-9]/g, '');
                inputValue = inputValue.slice(0, 1);
                event.target.value = inputValue;

                if (inputValue !== '') {
                    if (index < array.length - 1) {
                        array[index + 1].focus();
                    }
                } else {
                    if (index > 0) {
                        array[index - 1].focus();
                    }
                }
            });

            element.addEventListener('blur', function() {
                if (element.value === '' && index > 0) {
                    array[index - 1].focus();
                }
            });
        });
    </script>
@endsection
