document.addEventListener('DOMContentLoaded', function() {
    var mentionsLegalesBtn = document.getElementById('mentionsLegalesBtn');
    var mentionsLegalesPopup = document.getElementById('mentionsLegalesPopup');
    var closePopupBtn = document.getElementById('closePopupBtn');
    var closePopupBtn1 = document.getElementById('closePopupBtn1');

    mentionsLegalesBtn.addEventListener('click', function() {
        mentionsLegalesPopup.style.display = 'block';
    });

    closePopupBtn.addEventListener('click', function() {
        mentionsLegalesPopup.style.display = 'none';
    });

    closePopupBtn1.addEventListener('click', function() {
        mentionsLegalesPopup.style.display = 'none';
    });

    // Zoom temporaire des <select>: applique .select-open pendant l'ouverture uniquement
    document.querySelectorAll('select').forEach(function(sel) {
        var add = function() { sel.classList.add('select-open'); };
        var remove = function() { sel.classList.remove('select-open'); };

        // Ouverture au clic souris
        sel.addEventListener('mousedown', add);
        // Ouverture au clavier (selon navigateur)
        sel.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ' || e.key === 'ArrowDown') add();
        });
        // Fermer au choix d'une valeur
        sel.addEventListener('change', remove);
        // Fermer quand on sort du champ
        sel.addEventListener('blur', remove);
    });
});
