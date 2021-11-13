function Escolha()
{
    
    let Option = document.getElementById('option')

    switch (Option.value) 
    {
        case 'horror':
            window.location.href = 'terror.html'
            break;
        case 'drama':
            window.location.href = 'drama.html'
            break;
        case 'kids':
            window.location.href = 'infantil.html'
            break;
        case 'family':
            window.location.href = 'familia.html'
            break;
        default: alert ("Selecione uma opção válida!!!")
            break;
    }
}