function Escolha()
{   
    let Option = document.getElementById('option');
    let Value = document.getElementById ('value').value;

    if (Value == 0){
        Directory = "";
    }else {
        Directory = "../";
    }

        switch (Option.value){
            case 'adventure':
                window.location.href = Directory + 'pages/aventura.php'
                break;
            case 'horror':
                window.location.href = Directory + 'pages/terror.php'
                break;
            case 'drama':
                window.location.href = Directory + 'pages/drama.php'
                break;
            case 'kids':
                window.location.href = Directory + 'pages/infantil.php'
                break;
            case 'family':
                window.location.href = Directory + 'pages/familia.php'
                break;
            default: alert ("Selecione uma opção válida!!!")
                break;
    
    }
}