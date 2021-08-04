@component('mail::message')
# Hola admin,
<br>
<p>Has recibido un nuevo mensaje desde el formuario de contacto en {{config('app.name')}}</p>
<p>
    Motivo del mensaje: {{$textSubject}}
</p>
<p>
    {{$textMessage}}
</p>
@endcomponent
