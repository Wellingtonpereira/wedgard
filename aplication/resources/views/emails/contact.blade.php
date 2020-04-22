@component('mail::message')

Contato Via site  

**Nome: **{{ $name }}  
**E-mail: **{{ $email }}  
**Mensagem: **{{ $message }}  


<br>
{{ config('app.name') }}
@endcomponent
