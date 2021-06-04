function searchTopic() {
    // está bugado. Se souber consertar me ajude por favor
    var us = document.getElementById('proc')
    
    if (us.value == 'Sobre') {
        window.location.href('#sobre')
    } else if (us.value == 'sobre') {
        window.location.href('#sobre')
    } else if (us.value == 'Contatos') {
        window.location.href('#contatos')
    } else if (us.value == 'contatos') {
        window.location.href('#contatos')
    } else if (us.value == 'Downloads') {
        window.location.href('#d')
    } else if (us.value == 'downloads') {
        window.location.href('#d')
    } else {
        M.toast({html: 'Nenhum resultado encontrado para a sua pesquisa :('})
    }
}