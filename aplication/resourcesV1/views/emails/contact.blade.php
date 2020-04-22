@component('mail::message')

Contato Via site  

**Nome: **{{ $name }}  
**E-mail: **{{ $email }}  
**Título: **{{ $title }}  
**Mensagem: **{{ $message }}  


<br>
{{ config('app.name') }}
@endcomponent
