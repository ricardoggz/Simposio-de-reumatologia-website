let radioInstitution = document.querySelectorAll('input[type="radio"][name="pertenece_institucion_publica"]');
let radioProfession = document.querySelectorAll('input[type="radio"][name="es_dermatologo"]');
let inputDisabledInstitution = document.getElementById('inputDisabledInstitution');
let inputDisabledProfession = document.getElementById('inputDisabledProfession');

for (var i = 0; i < radioInstitution.length; i++) {
    radioInstitution[i].addEventListener('change', function() {
    if (this.value === 'si') {
        inputDisabledInstitution.style.display = 'block';
    } else {
        inputDisabledInstitution.style.display = 'none';
    }
});
}

for (var i = 0; i < radioProfession.length; i++) {
    radioProfession[i].addEventListener('change', function() {
    if (this.value === 'no') {
        inputDisabledProfession.style.display = 'block';
    } else {
        inputDisabledProfession.style.display = 'none';
    }
});
}