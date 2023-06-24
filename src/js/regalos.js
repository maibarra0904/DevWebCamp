(function() {
    
    const grafica = document.querySelector('#regalos-grafica');

    if(grafica) {
        const ctx = document.getElementById('regalos-grafica');

        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    '#ea580c',
                    '#84cc16',
                    '#22d3ee',
                    '#a855f7',
                    '#ef4444',
                    '#14b8a6',
                    '#db2777',
                    '#e11d48',
                    '#7e22ce'
                ],
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });
    }
    
    

})();