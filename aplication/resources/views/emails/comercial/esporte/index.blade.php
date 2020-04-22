@component('mail::message')


<table>
    <tr>
        <td><img src="{{asset('/images/email/primeiro.jpg')}}" alt="Topo"></td>
    </tr>
    <tr>
        <td><img src="{{asset('/images/email/segundo.jpg')}}" alt="Topo"></td>
    </tr>
    <tr>
        <td><img src="{{asset('/images/email/terceiro.jpg')}}" alt="Topo"></td>
    </tr>
    <tr>
        <td>
            @component('mail::button', ['url' => 'mailto:contato@wedgard.com.br'])
            CLIQUE AQUI PARA SABER MAIS
            @endcomponent
        </td>
    </tr>
    <tr>
        <td><img src="{{asset('/images/email/quarto.jpg')}}" alt="Topo"></td>
    </tr>    
    <tr>
        <td><img src="{{asset('/images/email/assinatura.jpg')}}" alt="Topo"></td>
    </tr>    
</table>


<table width="100%" cellpadding="0" cellspacing="0">
    <tr><td><br></td></tr>
    <tr><td style="    border-bottom: 1px solid #d6d5d5;"></td></tr>
    <tr><td><br></td></tr>
    <tr>
        <td  style="text-align:center">
            <span class="text-footer">
                <a href="https://wedgard.com/email" class="link-footer">Se estiver com problemas para visualizar as imagens, clique aqui.</a>
            <span>
        </td>
    </tr>
    <tr><td><br></td></tr>
    <tr>
        <td style="text-align: center">
            <span class="text-footer">
                <a href="mailto:contato@wedgard.com" class="link-footer">contato@wedgard.com</a>
                &nbsp;&nbsp;|&nbsp;
            <span>
            <span>
                <a href="https://wedgard.com" class="link-footer">wedgard.com</a>
                &nbsp;&nbsp;|&nbsp;
            <span>
            <span>
                <a href="tel:14996376294" class="link-footer"> +55 (14) 99637-6294</a>
            <span>        
        </td>
    </tr>
</table>

@endcomponent
