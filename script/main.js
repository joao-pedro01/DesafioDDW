function Escolha()
{
    
    let Option = document.getElementById('option')

    switch (Option.value) 
    {
        case 'horror':
            window.location.href = 'pages/terror.html'
            break;
        case 'drama':
            window.location.href = 'pages/drama.html'
            break;
        case 'kids':
            window.location.href = 'pages/infantil.html'
            break;
        case 'family':
            window.location.href = 'pages/familia.html'
            break;
        default: alert ("Selecione uma opção válida!!!")
            break;
    }
}