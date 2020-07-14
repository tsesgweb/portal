if (typeof ryb_ready != 'function' || typeof ryb_initRybena != 'function') {
    console.error('Error: not installed rybenaDOMFull-1.5.js && rybena-1.0.js');
} else {   
    ryb_ready(function() {
        ryb_initRybena({
            'dimension': '3D',
            'enableMobile': 'true',
            'positionPlayer': 'left',
            'divRybenaId': 'acessibilidade-rybena',
            'positionPlayer': 'left',
        });
    });
}