@extends ('auth.layouts.auth')

@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <br/><br/><br/>
                @section ('login_panel_title','Locação de Mobiliários para Eventos')
                @section ('login_panel_body')

                    {{ Form::open(['route' => 'login']) }}

                    <fieldset>
                        <div class="form-group">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   placeholder="E-mail" required autofocus>
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control" name="password"
                                   placeholder="Senha" required>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"
                                       name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar-me
                            </label>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (!$errors->isEmpty())
                            <div class="alert alert-danger" role="alert">
                                {!! $errors->first() !!}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-xs-6">
                                <button class="btn btn-lg btn-success btn-block">Entrar</button>
                            </div>
                            <div class="col-xs-6">
                                <a href="{{ route('register') }}"
                                   class="btn btn-lg btn-primary btn-block">Cadastrar
                                </a>
                            </div>
                        </div>

                    </fieldset>

                    {{ Form::close() }}

                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
            </div>
        </div>
    </div>
@stop