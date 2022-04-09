function Escolha()
{   
    let Option = document.getElementById('option');
    let Value = document.getElementById ('value').value;

    if (Value == 0)
    {
        switch (Option.value)
        {
            case 'adventure':
                window.location.href = 'pages/aventura.html'
                break;
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
    else
    {
        switch (Option.value) 
        {
            case 'adventure':
                window.location.href = '../pages/aventura.html'
                break;
            case 'horror':
                window.location.href = '../pages/terror.html'
                break;
            case 'drama':
                window.location.href = '../pages/drama.html'
                break;
            case 'kids':
                window.location.href = '../pages/infantil.html'
                break;
            case 'family':
                window.location.href = '../pages/familia.html'
                break;
            default: alert ("Selecione uma opção válida!!!")
                break;
        }
    }
}