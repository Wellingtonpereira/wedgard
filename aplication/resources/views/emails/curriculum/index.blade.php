@component('mail::message')


<table>   
    <tr>
        <td><h1 style="text-transform:uppercase; text-align:center">currículo</h1></td>
    </tr>
    <tr>
        <td>Olá, sou <b>Wellington Edgard</b>,</td>
    </tr>
    <tr>
        <td>queria deixar aqui o meu currículo para analise para uma vaga de programador.</td>
    </tr>
    <tr>
        <td>Atualmente trabalho com</td>
    </tr>
    <tr>
        <td>
            <ul style="list-style: none;">
                <li>OO</li>
                <li>UML</li>
                <li>PHP</li>
                <li>Laravel</li>
                <li>Mysql</li>
                <li>JS</li>
                <li>Vue.js</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td>Porém, não tenho restrições para trabalhar com outras tecnologias.</td>
    </tr>
    <tr>
        <td>Segue nesse link o meu portfólio <a href="https://wedgard.com">ABRIR PORTFÓLIO</a></td>
    </tr>   
    <tr>
        <td>Você pode baixar meu currículo completo <a href="https://wedgard.com/assets/wedgard.pdf" download>AQUI</a>, ou dentro do meu portfólio no link anterior.</td>
    </tr>
    <tr>
        <td>Pretenção salárial de R$5000,00 </td>
    </tr>
    <tr>
        <td><br><br></td>
    </tr>
    <tr>
        <td>Obrigado pela atenção, espero estar conversando com vocês em breve!</td>
    </tr>
    <tr>
        <td><br><br></td>
    </tr>
    <tr>
        <td><img src="{{asset('/images/email/assinaturaCurriculum.jpg')}}" alt="Topo"></td>
    </tr>    
</table>

<table width="100%" cellpadding="0" cellspacing="0">
    <tr><td><br></td></tr>
    <tr><td style="    border-bottom: 1px solid #d6d5d5;"></td></tr>
    <tr><td><br></td></tr>

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
